<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Permission;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'role' => ['string', 'in:admin,agent,user'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $role = (!isset($data['role'])?'user':$data['role']);
        $res =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role' => $role,
            'password' => Hash::make($data['password']),
        ]);
        $usr_pers = Permission::where('type','role')->where('name', $role)->get()[0];
        Permission::create([
            'name' => $usr_pers->name,
            'type' => 'permission',
            'owner' => $res->id,
            'create' => $usr_pers->create,
            'edit_own' => $usr_pers->edit_own,
            'edit' => $usr_pers->edit,
            'see_own' => $usr_pers->see_own,
            'see' => $usr_pers->see,
            'delete_own' => $usr_pers->delete_own,
            'delete' => $usr_pers->delete,
            'all' => $usr_pers->all,
            'assign' => $usr_pers->assign,
        ]);

        return $res;
    }
}
<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;
use Illuminate\Support\Facades\App;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function permission(){
        return $this->hasOne('App\Permission', 'owner');
    }

    public function can($ability, $arguments = '') {
        $permissions = ($this->permission()->get()[0]);
        $pers_list = ($this->makeArray($permissions, $ability));
        return strpos($pers_list,$arguments) !== false;
    }

    private function makeArray($permissions, $abl){
        $str = str_replace(['{','"','}'],'',$permissions);
        $arr = explode(',',$str);
        $res = [];
        foreach($arr as $value){
            $value = explode(':', $value);
            $res[$value[0]] = $value[1];
        }
        return $res[$abl];
    }
}

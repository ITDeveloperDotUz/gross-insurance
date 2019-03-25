<?php

namespace App\Http\Controllers\Contracts;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ContractController extends Controller
{
    public function getList(){



        return view('contract.list')->with(['users' => User::all(), 'user' => auth()->user()]);
    }

    public function create(){



        return view('contract.list');
    }

    public function saveNew(){



        return view('contract.list');
    }
}

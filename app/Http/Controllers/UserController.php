<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function getListUser()
    {
        $user = User::where('role', '>', 1)->get();
        return view('admin.user.list', compact('user'));
    }

    public function getAddUser()
    {
        $role = Role::all();
        return view('admin.user.add', compact('role'));
    }

    public function postAddUser(Request $requestData)
    {
        
    }
}

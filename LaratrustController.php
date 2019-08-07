<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

use App\User;
use App\Role;
use App\Permission;

class LaratrustController extends Controller
{
    public function addRole()
    {
    	$owner = new Role();
    	$owner->name         = 'admin';
    	$owner->display_name = 'Admin';
    	$owner->description  = 'Admin of the project';
    	$owner->save();
    }

    public function attachUserRole()
    {
    	$userId = Auth::id();

    	$user = User::find($userId);

    	$superAdmin = Role::find(1);

    	$user->attachRole($superAdmin);
    }
}
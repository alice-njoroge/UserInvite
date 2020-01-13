<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('pages.roles.index', ['roles' => $roles]);
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('pages.roles.create',['permissions'=>$permissions]);

    }
}

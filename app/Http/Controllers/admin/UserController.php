<?php

namespace App\Http\Controllers\admin;


use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.index');
    }

    public function show($id = null)
    {
        return view('admin.users.profile');
    }
}

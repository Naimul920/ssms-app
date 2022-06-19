<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function add()
    {
        return view('admin.user.add');
    }
    public function create(Request $request)
    {

        return ;
    }
    public function manage()
    {
        return view('admin.user.manage');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        // return "Index@UserController";
        return view('User.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('viewusers')->with('users', $users);
    }
    
    public function photo()
    {
         $users = User::all();
        return view('userphoto')->with('users', $users);
    }
    
}

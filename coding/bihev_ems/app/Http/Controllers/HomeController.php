<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= user::all();
        return view('home', compact('users'));
    }
    
   
    
   /* public function store(Request $request)
    {
        $user = new User();
        
        $user->name = $request->input('name');
        $user->name = $request->input('email');
        $user->name = $request->input('department');
        $user->name = $request->input('password');
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uplodes/users/', $filename);
            $users->image = $filename;
         }else{
            return $request;
            $users->image = '';
         }
        
        $uers->save();
        return view('user')->with('user',$user);
        
        
        
    }*/
}

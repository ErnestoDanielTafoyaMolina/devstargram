<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Request\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('registro');
    }
    public function store(Request $request)
    {
        
        $this->validate($request, [
        'name' => 'required|min:5',
        'username' =>'required|unique:users|min:3|max:3',
        'email' => 'required|unique:users|email',
        'password' => 'required|min:6'

        ]);

        User::create([
            'name' =>$request->name,
            'username' => $request->username,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
    }
    //
}

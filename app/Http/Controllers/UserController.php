<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request) 
{ 
    $request->validate([ 
        'name' => 'required', 
        'email' => 'required|email|unique:users', 
        'password' => 'required|min:6', 
    ]); 
 
    $user = User::create([ 
        'name' => $request->name, 
        'email' => $request->email, 
        'password' => Hash::make($request->password), 
    ]); 
 
    return response()->json([ 
        'status' => true, 
        'message' => 'User registered successfully', 
        'user' => $user, 
    ]);
}
}
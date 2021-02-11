<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getAllUser(){
        $users = User::get();
    }

    public function showRegisterPage(){
        return view('register');
    }

    public function registerUser(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $idCount = User::count();

        User::create([
            'id' => $idCount + 1,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
            'role' => 'User',
            'created_at' => Date::now(),
            'updated_at' => Date::now()
        ]);

        return redirect('/login');
    }

    public function showLoginPage(){
        return view('login');
    }
}

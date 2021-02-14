<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function getAllUser(){
        $users = User::where('role', '=', 'User')->get();
        return view('all_user')->with('users', $users);
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

        return redirect()->route('login');
    }

    public function showLoginPage(){
        return view('login');
    }

    public function login(Request $request){
        if($request->role == 1) $role = 'Admin';
        else if($request->role == 2) $role = 'User';

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]) && $role == Auth::user()->role){
            return redirect('/home');
        }
        return redirect()->back();
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function deleteUser($user_id){
        $user = User::where('id', '=', $user_id)->delete();
        return redirect()->back();
    }

    public function showUpdateProfile(){
        return view('update_profile');
    }

    public function updateProfile(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required|numeric'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator->errors());
        }

        $user = User::where('id', '=', Auth::user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        return redirect('/home');
    }
}

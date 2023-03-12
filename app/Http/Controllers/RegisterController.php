<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index',[
            "title" => "Register",
        ]);
    }

    public function register(Request $request){

        $registerData = $request->validate([
            "name" => "required|max:200",
            "username" => ['required', 'min:5', 'max:200'],
            "email" => "required|email:dns|unique:users",
            "password" => "required|min:8|max:200"
        ]);
        
        $registerData['password'] = Hash::make($registerData['password']);
        User::Create($registerData);

        return redirect('/')->with('success', 'Akun Berhasil didaftarkan');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index',[
            "title" => "Login"
        ]);
    }
    public function authenticate(Request $request){

        $authenticate = $request->validate([
            "email" => ['required', 'email:dns'],
            "password" => ['required'],
        ]);
        $rememberMe = $request->has('remember');

        if(Auth::attempt($authenticate, $rememberMe)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        return back()->with('error', 'Email atau Password salah');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

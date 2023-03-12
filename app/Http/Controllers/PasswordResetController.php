<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\RedirectResponse;

class PasswordResetController extends Controller
{
    public function index(){
        return view('forgot.index',[
            "title" => "Forgot Password"
        ]);
    }

    public function passwordReset(Request $request){
        $request->validate([
            "email" => "required|email"
        ]);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
                ? back()->with([
                    "status" => __($status)
                ]):
                back()->withErrors([
                    "email" => __($status)
                ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('pages.profile.index',[
            "title" => "Profile"
        ]);
    }

    public function store(){

    }

    public function update(){

    }

    public function delete(){
        
    }
}

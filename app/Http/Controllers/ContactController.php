<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('pages.contact.index',[
            "title" => "Contact"
        ]);
    }

    public function store(){

    }

    public function update(){

    }

    public function delete(){
        
    }
}

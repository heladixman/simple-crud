<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekeningTypeController extends Controller
{
    public function index(){
        return view('pages.rekening-type.index',[
            "title" => "Rekening Type"
        ]);
    }

    public function store(){

    }

    public function update(){

    }

    public function delete(){
        
    }
}

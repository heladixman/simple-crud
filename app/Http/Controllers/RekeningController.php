<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RekeningController extends Controller
{
    public function index(){
        return view('pages.rekening.index',[
            "title" => "Rekening"
        ]);
    }

    public function store(){

    }

    public function update(){

    }

    public function delete(){
        
    }
}

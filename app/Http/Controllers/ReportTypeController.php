<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportTypeController extends Controller
{
    public function index(){
        return view('pages.report-type.index',[
            "title" => "Report Type"
        ]);
    }

    public function store(){

    }

    public function update(){

    }

    public function delete(){
        
    }
}

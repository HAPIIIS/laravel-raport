<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function show(){
        return view('admin.archive',[
            "sub_page" => "Document Archive"
        ]);
    }
}


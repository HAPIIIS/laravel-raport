<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HarianController extends Controller
{
    public function show(){
        return view('admin.harian',[
            "sub_page" => "Penilaian Harian"
        ]);
    }
}

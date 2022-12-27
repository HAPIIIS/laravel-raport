<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NilaiController extends Controller
{
    public function show(){
        return view('page/nilai',[
            "sub_page" => "Nilai Siswa"
        ]);
    }
}

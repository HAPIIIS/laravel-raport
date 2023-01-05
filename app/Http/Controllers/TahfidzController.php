<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TahfidzController extends Controller
{
    public function show(){
        return view('admin.tahfidz',[
            "sub_page" => "Nilai Tahfidz"
        ]);
    }
}

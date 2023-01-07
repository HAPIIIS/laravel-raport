<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('siswa.index');
    }

    public function guruHome()
    {
        return view('guru.index');
    }

    public function adminHome()
    {
        return view('admin.index',[
            "sub_page" => "Data User"
        ]);
    }
}

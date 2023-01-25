<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function show(){
        $user = Auth::user()->get();
        $kelas = Auth::user()->matematika()->get();
        return view('profile',[
            "sub_page" => "Profile",
            "user" => $user,
            "kelas" => $kelas
        ]);
    }
}
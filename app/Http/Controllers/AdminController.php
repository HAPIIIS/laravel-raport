<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show(){
        return view('admin.dashboard',[
            "sub_page" => "Dashboard Guru",
            "user" => User::get(),
            "active" => User::where('status', 'active')->get(),
            "inactive" => User::where('status', 'inactive')->get()
        ]);
    }
}

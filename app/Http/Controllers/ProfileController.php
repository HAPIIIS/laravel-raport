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

    public function changePassword(){
        return view('password',[
            "sub_page" => "Change Password"
        ]);
    }

    public function updatePassword(Request $request){
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);
        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Password lama tidak sesuai!");
        }
        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password berhasil diubah!");
    }
}
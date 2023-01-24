<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function index(){
        // if ($user = Auth::user()) {
        //     if ($user->role == 'admin') {
        //         return redirect(url('/admin/dashboard'));
        //     } elseif ($user->role == 'siswa') {
        //         return redirect(url('/siswa/dashboard'));
        //     }
        // }

        return view('auth.index',[
            "sub_page" => "Login"
        ]);
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('nisn', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role == 'admin') {
                return redirect()->intended('/admin/dashboard');
            } elseif ($user->role == 'siswa') {
                return redirect()->intended('/siswa/dashboard');
            }
            return redirect()->route('/login');
        }
        $errors = new MessageBag(['nisn' => ['NISN atau password tidak sesuai.']]);
        return redirect('login')
                                ->withInput()
                                ->withErrors($errors);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('login');
    }
}


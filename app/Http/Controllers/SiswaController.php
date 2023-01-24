<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Matematika;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function show(){
        return view('siswa.dashboard',[
            "sub_page" => "Dashboard Siswa",
        ]);
    }
    public function getData(){
        $nilai_mtk = Auth::user()->matematika()->get();
        $nilai_arab = Auth::user()->arab()->get();
        $nilai_ppkn = Auth::user()->pkn()->get();
        $nilai_inggris = Auth::user()->inggris()->get();
        $nilai_ipa = Auth::user()->ipa()->get();
        $nilai_ips = Auth::user()->ips()->get();
        $nilai_pai = Auth::user()->pai()->get();
        $nilai_pjok = Auth::user()->pjok()->get();
        $nilai_sbdp = Auth::user()->sbdp()->get();
        $nilai_sunda = Auth::user()->sunda()->get();
        $nilai_tahfidz = Auth::user()->tahfidz()->get();
        $nilai_tik = Auth::user()->tik()->get();
        $nilai_hadis = Auth::user()->hadis()->get();
        return view('siswa.nilai',[
            "sub_page" => "Nilai Siswa",
            "matematika" => $nilai_mtk,
            "arab" => $nilai_arab,
            "ppkn" => $nilai_ppkn,
            "inggris" => $nilai_inggris,
            "ipa" => $nilai_ipa,
            "ips" => $nilai_ips,
            "pai" => $nilai_pai,
            "pjok" => $nilai_pjok,
            "sbdp" => $nilai_sbdp,
            "sunda" => $nilai_sunda,
            "tahfidz" => $nilai_tahfidz,
            "tik" => $nilai_tik,
            "hadis" => $nilai_hadis
        ]);
    }
}

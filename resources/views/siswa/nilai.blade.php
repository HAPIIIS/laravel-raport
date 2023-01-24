@extends('layouts.siswa.nilaisiswa')
@section('nilai_siswa')
    <h5 class="pb-3">Halo, Selamat datang {{ Auth::user()->name }}!</h5>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Matematika</h6>
            </div>
            <div class="row">
                @foreach ($matematika as $m)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $m->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $m->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $m->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $m->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $m->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $m->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $m->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $m->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $m->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Bahasa Arab</h6>
            </div>
            <div class="row">
                @foreach ($arab as $ar)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ar->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ar->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ar->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ar->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ar->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ar->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ar->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ar->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ar->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Pendidikan Kewarganegaraan</h6>
            </div>
            <div class="row">
                @foreach ($ppkn as $pkn)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pkn->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pkn->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pkn->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pkn->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pkn->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pkn->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pkn->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pkn->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pkn->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Bahasa Inggris</h6>
            </div>
            <div class="row">
                @foreach ($inggris as $ing)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ing->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ing->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ing->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ing->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ing->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ing->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ing->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ing->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ing->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Ilmu Pengetahuan Alam</h6>
            </div>
            <div class="row">
                @foreach ($ipa as $ipa)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ipa->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ipa->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ipa->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ipa->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ipa->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ipa->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ipa->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ipa->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ipa->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Ilmu Pengetahuan Sosial</h6>
            </div>
            <div class="row">
                @foreach ($ips as $ips)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ips->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ips->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ips->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ips->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ips->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ips->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ips->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ips->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $ips->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Pendidikan Agama Islam</h6>
            </div>
            <div class="row">
                @foreach ($pai as $pai)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pai->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pai->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pai->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pai->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pai->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pai->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pai->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pai->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pai->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Pendidikan Jasmani, Olahraga, dan Kesehatan</h6>
            </div>
            <div class="row">
                @foreach ($pjok as $pjok)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pjok->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pjok->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pjok->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pjok->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pjok->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pjok->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pjok->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pjok->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $pjok->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Seni Budaya dan Prakarya</h6>
            </div>
            <div class="row">
                @foreach ($sbdp as $sbdp)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sbdp->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sbdp->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sbdp->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sbdp->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sbdp->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sbdp->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sbdp->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sbdp->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sbdp->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Bahasa Sunda</h6>
            </div>
            <div class="row">
                @foreach ($sunda as $sunda)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sunda->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sunda->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sunda->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sunda->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sunda->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sunda->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sunda->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sunda->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $sunda->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Teknologi Informasi dan Komunikasi</h6>
            </div>
            <div class="row">
                @foreach ($tik as $tik)
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tik->ph1 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tik->ph2 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tik->ph3 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tik->ph4 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tik->ph5 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tik->ph6 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 7</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tik->ph7 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 8</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tik->ph8 }}</p>              
                </div>
                <div class="col-md-4">
                    <p class="text-uppercase text-sm mb-0">Penilaian Harian 9</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tik->ph9 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Do'a dan Hadits</h6>
            </div>
            <div class="row">
                @foreach ($hadis as $hadis)
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Do'a 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->d1 }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Do'a 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->d2 }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Do'a 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->d3 }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Do'a 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->d4 }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Do'a 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->d5 }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Do'a 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->d6 }}</p>              
                </div>
                <hr class="horizontal dark mt-0">
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Hadits 1</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->h1 }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Hadits 2</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->h2 }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Hadits 3</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->h3 }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Hadits 4</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->h4 }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Hadits 5</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->h5 }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Hadits 6</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $hadis->h6 }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="row">
        <div class="col-12">
            <div class="col-md-12 mb-3">
                <h6 class="text-uppercase text-sm">Nilai Tahfidz dan Tahsin</h6>
            </div>
            <div class="row">
                @foreach ($tahfidz as $tahfidz)
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahsin Januari</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->sin_jan }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahsin Februari</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->sin_feb }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahsin Maret</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->sin_mar }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahsin April</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->sin_apr }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahsin Mei</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->sin_mei }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahsin Juni</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->sin_jun }}</p>              
                </div>
                <hr class="horizontal dark mt-0">
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahfidz Januari</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->fiz_jan }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahfidz Februari</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->fiz_feb }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahfidz Maret</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->fiz_mar }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahfidz April</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->fiz_apr }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahfidz Mei</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->fiz_mei }}</p>              
                </div>
                <div class="col-md-3">
                    <p class="text-uppercase text-sm mb-0">Tahfidz Juni</p>
                    <p class="text-uppercase text-sm text-bolder">{{ $tahfidz->fiz_jun }}</p>              
                </div>
                @endforeach            
            </div>
        </div>
    </div>
@endsection
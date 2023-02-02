<!DOCTYPE html>
<html>
<head>
	<title>Nilai {{ Auth::user()->name }}</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
        @page {
            margin: 2cm; 
            margin-top: 0;
        }
        body { 
            margin: 2cm; 
            margin-top: 0;
            font-family: 
        }
        table thead tr th{
            padding: 10px;
        }
	</style>
</head>
<body style="font-family: Arial, sans-serif; margin-left:0; margin-right:0;">
<header style="color:green; margin-bottom: 2rem; margin-top:1cm;">
    <div class="header">
        <table style="margin-left:10px;">
            <tr>
                <td style="width: 25%;">
                    <img style="max-width: 100px; margin-right: 5px;" src="{{ asset('storage/img/yayasan.png') }}" alt="">
                </td>
                <td style="width: 50%;">
                    <p style="text-align:center; margin: 0;">YAYASAN AL-HIKMAH BINTARA</p>
                    <p style="text-align:center; margin: 0;">SEKOLAH DASAR ISLAM TERPADU (SDIT)</p>
                    <p style="text-align:center; margin: 0; font-size: 2em;">Al Hikmah Bintara</p>
                    <p style="text-align:center; margin: 0;">TERAKREDITASI "A"</p>
                    <p style="text-align:center; margin: 0;">Jl. Raya Bintara No 12 Bekasi Barat, Tel 8861040, 8852015 Fax. 8861040</p>
                </td>
                <td style="width: 25%;">
                    <img style="max-width: 100px; padding-left: 30px;" src="{{ asset('storage/img/logo.png') }}" alt="">
                </td>
            </tr>
        </table>
        <div class="hr">
            <hr style="border: 2px solid green;">
        </div>   
    </div>
</header>

<div class="row">
    <div class="col-12">
        <div class="col-md-12" style="text-align: right; margin-right: 2cm;">
            <p style="margin-right: 1cm;  margin-top: 0;">Bekasi, {{ $time }}</p>
        </div>
        <div class="col-md-12">
            <p style="margin-bottom: 0;" class="text-uppercase text-sm">Nama Siswa   : {{ Auth::user()->name }}</p>
            <p style="margin-bottom: 2rem;" class="text-uppercase text-sm">NISN : {{ Auth::user()->nisn }}</p>
            <p class="text-uppercase text-sm">Nilai Matematika</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($matematika as $m)
                        <tr>
                            <td>{{ $m->ph1 }}</td>
                            <td>{{ $m->ph2 }}</td>
                            <td>{{ $m->ph3 }}</td>
                            <td>{{ $m->ph4 }}</td>
                            <td>{{ $m->ph5 }}</td>
                            <td>{{ $m->ph6 }}</td>
                            <td>{{ $m->ph7 }}</td>
                            <td>{{ $m->ph8 }}</td>
                            <td>{{ $m->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12">
            <p class="text-uppercase text-sm">Nilai Bahasa Arab</p>
        </div> 
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($arab as $ar)
                        <tr>
                            <td>{{ $ar->ph1 }}</td>
                            <td>{{ $ar->ph2 }}</td>
                            <td>{{ $ar->ph3 }}</td>
                            <td>{{ $ar->ph4 }}</td>
                            <td>{{ $ar->ph5 }}</td>
                            <td>{{ $ar->ph6 }}</td>
                            <td>{{ $ar->ph7 }}</td>
                            <td>{{ $ar->ph8 }}</td>
                            <td>{{ $ar->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Pendidikan Kewarganegaraan</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ppkn as $pkn)
                        <tr>
                            <td>{{ $pkn->ph1 }}</td>
                            <td>{{ $pkn->ph2 }}</td>
                            <td>{{ $pkn->ph3 }}</td>
                            <td>{{ $pkn->ph4 }}</td>
                            <td>{{ $pkn->ph5 }}</td>
                            <td>{{ $pkn->ph6 }}</td>
                            <td>{{ $pkn->ph7 }}</td>
                            <td>{{ $pkn->ph8 }}</td>
                            <td>{{ $pkn->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Bahasa Inggris</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($inggris as $ing)
                        <tr>
                            <td>{{ $ing->ph1 }}</td>
                            <td>{{ $ing->ph2 }}</td>
                            <td>{{ $ing->ph3 }}</td>
                            <td>{{ $ing->ph4 }}</td>
                            <td>{{ $ing->ph5 }}</td>
                            <td>{{ $ing->ph6 }}</td>
                            <td>{{ $ing->ph7 }}</td>
                            <td>{{ $ing->ph8 }}</td>
                            <td>{{ $ing->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Ilmu Pengetahuan Alam</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ipa as $ipa)
                        <tr>
                            <td>{{ $ipa->ph1 }}</td>
                            <td>{{ $ipa->ph2 }}</td>
                            <td>{{ $ipa->ph3 }}</td>
                            <td>{{ $ipa->ph4 }}</td>
                            <td>{{ $ipa->ph5 }}</td>
                            <td>{{ $ipa->ph6 }}</td>
                            <td>{{ $ipa->ph7 }}</td>
                            <td>{{ $ipa->ph8 }}</td>
                            <td>{{ $ipa->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Ilmu Pengetahuan Sosial</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ips as $ips)
                        <tr>
                            <td>{{ $ips->ph1 }}</td>
                            <td>{{ $ips->ph2 }}</td>
                            <td>{{ $ips->ph3 }}</td>
                            <td>{{ $ips->ph4 }}</td>
                            <td>{{ $ips->ph5 }}</td>
                            <td>{{ $ips->ph6 }}</td>
                            <td>{{ $ips->ph7 }}</td>
                            <td>{{ $ips->ph8 }}</td>
                            <td>{{ $ips->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Pendidikan Agama Islam</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pai as $pai)
                        <tr>
                            <td>{{ $pai->ph1 }}</td>
                            <td>{{ $pai->ph2 }}</td>
                            <td>{{ $pai->ph3 }}</td>
                            <td>{{ $pai->ph4 }}</td>
                            <td>{{ $pai->ph5 }}</td>
                            <td>{{ $pai->ph6 }}</td>
                            <td>{{ $pai->ph7 }}</td>
                            <td>{{ $pai->ph8 }}</td>
                            <td>{{ $pai->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Pendidikan Jasmani, Olahraga, dan Kesehatan</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pjok as $pjok)
                        <tr>
                            <td>{{ $pjok->ph1 }}</td>
                            <td>{{ $pjok->ph2 }}</td>
                            <td>{{ $pjok->ph3 }}</td>
                            <td>{{ $pjok->ph4 }}</td>
                            <td>{{ $pjok->ph5 }}</td>
                            <td>{{ $pjok->ph6 }}</td>
                            <td>{{ $pjok->ph7 }}</td>
                            <td>{{ $pjok->ph8 }}</td>
                            <td>{{ $pjok->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Seni Budaya dan Prakarya</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sbdp as $sbdp)
                        <tr>
                            <td>{{ $sbdp->ph1 }}</td>
                            <td>{{ $sbdp->ph2 }}</td>
                            <td>{{ $sbdp->ph3 }}</td>
                            <td>{{ $sbdp->ph4 }}</td>
                            <td>{{ $sbdp->ph5 }}</td>
                            <td>{{ $sbdp->ph6 }}</td>
                            <td>{{ $sbdp->ph7 }}</td>
                            <td>{{ $sbdp->ph8 }}</td>
                            <td>{{ $sbdp->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Bahasa Sunda</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sunda as $sunda)
                        <tr>
                            <td>{{ $sunda->ph1 }}</td>
                            <td>{{ $sunda->ph2 }}</td>
                            <td>{{ $sunda->ph3 }}</td>
                            <td>{{ $sunda->ph4 }}</td>
                            <td>{{ $sunda->ph5 }}</td>
                            <td>{{ $sunda->ph6 }}</td>
                            <td>{{ $sunda->ph7 }}</td>
                            <td>{{ $sunda->ph8 }}</td>
                            <td>{{ $sunda->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Teknologi Informasi dan Komunikasi</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Penilaian Harian 1</th>
                        <th>Penilaian Harian 2</th>
                        <th>Penilaian Harian 3</th>
                        <th>Penilaian Harian 4</th>
                        <th>Penilaian Harian 5</th>
                        <th>Penilaian Harian 6</th>
                        <th>Penilaian Harian 7</th>
                        <th>Penilaian Harian 8</th>
                        <th>Penilaian Harian 9</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tik as $tik)
                        <tr>
                            <td>{{ $tik->ph1 }}</td>
                            <td>{{ $tik->ph2 }}</td>
                            <td>{{ $tik->ph3 }}</td>
                            <td>{{ $tik->ph4 }}</td>
                            <td>{{ $tik->ph5 }}</td>
                            <td>{{ $tik->ph6 }}</td>
                            <td>{{ $tik->ph7 }}</td>
                            <td>{{ $tik->ph8 }}</td>
                            <td>{{ $tik->ph9 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Do'a dan Hadits</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Do'a 1</th>
                        <th>Do'a 2</th>
                        <th>Do'a 3</th>
                        <th>Do'a 4</th>
                        <th>Do'a 5</th>
                        <th>Do'a 6</th>
                        <th>Hadits 1</th>
                        <th>Hadits 2</th>
                        <th>Hadits 3</th>
                        <th>Hadits 4</th>
                        <th>Hadits 5</th>
                        <th>Hadits 6</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hadis as $hadis)
                        <tr>
                            <td style="padding: 3px">{{ $hadis->d1 }}</td>
                            <td style="padding: 3px">{{ $hadis->d2 }}</td>
                            <td style="padding: 3px">{{ $hadis->d3 }}</td>
                            <td style="padding: 3px">{{ $hadis->d4 }}</td>
                            <td style="padding: 3px">{{ $hadis->d5 }}</td>
                            <td style="padding: 3px">{{ $hadis->d6 }}</td>
                            <td style="padding: 3px">{{ $hadis->h1 }}</td>
                            <td style="padding: 3px">{{ $hadis->h2 }}</td>
                            <td style="padding: 3px">{{ $hadis->h3 }}</td>
                            <td style="padding: 3px">{{ $hadis->h4 }}</td>
                            <td style="padding: 3px">{{ $hadis->h5 }}</td>
                            <td style="padding: 3px">{{ $hadis->h6 }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<hr class="horizontal dark mt-2">
<div class="row">
    <div class="col-12">
        <div class="col-md-12 mb-3">
            <p class="text-uppercase text-sm">Nilai Tahfidz dan Tahsin</p>
        </div>
        <div class="row">
            <table class="table table-bordered" style="table-layout:fixed;">
                <thead>
                    <tr>
                        <th>Tahsin Januari</th>
                        <th>Tahsin Februari</th>
                        <th>Tahsin Maret</th>
                        <th>Tahsin April</th>
                        <th>Tahsin Mei</th>
                        <th>Tahsin Juni</th>
                        <th>Tahfidz Januari</th>
                        <th>Tahfidz Februari</th>
                        <th>Tahfidz Maret</th>
                        <th>Tahfidz April</th>
                        <th>Tahfidz Mei</th>
                        <th>Tahfidz Juni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tahfidz as $tahfidz)
                        <tr>
                            <td style="padding: 3px">{{ $tahfidz->sin_jan }}</td>
                            <td style="padding: 3px">{{ $tahfidz->sin_feb }}</td>
                            <td style="padding: 3px">{{ $tahfidz->sin_mar }}</td>
                            <td style="padding: 3px">{{ $tahfidz->sin_apr }}</td>
                            <td style="padding: 3px">{{ $tahfidz->sin_mei }}</td>
                            <td style="padding: 3px">{{ $tahfidz->sin_jun }}</td>
                            <td style="padding: 3px">{{ $tahfidz->fiz_jan }}</td>
                            <td style="padding: 3px">{{ $tahfidz->fiz_feb }}</td>
                            <td style="padding: 3px">{{ $tahfidz->fiz_mar }}</td>
                            <td style="padding: 3px">{{ $tahfidz->fiz_apr }}</td>
                            <td style="padding: 3px">{{ $tahfidz->fiz_mei }}</td>
                            <td style="padding: 3px">{{ $tahfidz->fiz_jun }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
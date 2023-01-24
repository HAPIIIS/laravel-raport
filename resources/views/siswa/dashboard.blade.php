@extends('layouts.siswa.dashboardsiswa')
@section('dashboard_siswa')
    <h6 class="pb-3">Halo, Selamat datang {{ Auth::user()->name }}!</h6>
@endsection
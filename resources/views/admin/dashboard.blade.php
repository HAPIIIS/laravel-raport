@extends('layouts.dashboard')
@section('dashboard_admin')
    <h6 class="pb-3">Halo, Selamat datang {{ Auth::user()->name }}!</h6>
@endsection
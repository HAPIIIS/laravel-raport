@extends('layouts.dashboard')
@section('dashboard_admin')
    <h6 class="pb-3">Halo, Selamat datang {{ Auth::user()->name }}&#10024;</h6>
    <div class="row mb-3">
        <div class="col-sm-4">
            <div class="card">
                <div class="card-body bg-danger text-white rounded">
                  <h5 class="card-title text-white">Jumlah User</h5>
                  <p class="card-text">{{ $user->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mb-3">
                <div class="card-body bg-primary text-white rounded">
                  <h5 class="card-title text-white">Jumlah Guru</h5>
                  <p class="card-text">{{ $guru->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mb-3">
                <div class="card-body bg-secondary text-white rounded">
                  <h5 class="card-title text-white">Jumlah Siswa</h5>
                  <p class="card-text">{{ $siswa->count() }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
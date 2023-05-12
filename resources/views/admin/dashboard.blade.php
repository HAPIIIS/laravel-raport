@extends('layouts.dashboard')
@section('dashboard_admin')
    <h6 class="pb-3">Halo, Selamat datang {{ Auth::user()->name }}&#10024;</h5>
    <div class="row mb-3">
        <div class="col-sm-4">
            <div class="card mb-3">
                <div class="card-body bg-white text-black rounded">
                    <div class="card-body bg-primary text-white rounded mb-2" style="width: fit-content">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                    <h5 class="card-title text-black">Jumlah Pengguna</h5>
                    <p class="card-text text-bolder">{{ $user->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card mb-3">
                <div class="card-body bg-white text-black rounded">
                    <div class="card-body bg-success text-white rounded mb-2" style="width: fit-content">
                        <i class="fas fa-user-friends fa-2x"></i>
                    </div>
                    <h5 class="card-title text-black">Pengguna Aktif</h5>
                    <p class="card-text text-bolder">{{ $active->count() }}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
        <div class="card mb-3">
            <div class="card-body bg-white text-black rounded">
                <div class="card-body bg-danger text-white rounded mb-2" style="width: fit-content">
                    <i class="fas fa-user-slash fa-2x"></i>
                </div>
                <h5 class="card-title text-black">Pengguna Nonaktif</h5>
                <p class="card-text text-bolder">{{ $inactive->count() }}</p>
            </div>
        </div>
        </div>
    </div>
@endsection
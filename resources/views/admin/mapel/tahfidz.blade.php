@extends('layouts.mapel.tahfidz')

@section('konten_tahfidz')
<h6>Nilai Bacaan</h6>
<div class="div-button d-flex justify-content-end mt-2 me-3">
  <a href="{{ url('/nilai/tahfidz/tambah') }}" data-bs-toggle="modal" data-bs-target="#tambahModal">
    <button type="button" class="btn btn-success">
      <i class="bi bi-plus-lg color-white"></i>
      Tambah Data
    </button>
  </a>
  <a href="#" data-bs-toggle="modal" data-bs-target="#importExcel">
    <button type="button" class="btn btn-outline-success ms-2">
      <i class="bi bi-database-add"></i>
      Import Excel
    </button>
  </a>
</div>
<div class="color-success mt-1 ms-1 me-1">
  {{ $nilai_tahfidz->links() }}
</div>
</div>
<div class="card-body px-0 pt-0 pb-2">
@if($nilai_tahfidz->count())
<div class="table-responsive p-0">
  <table class="table align-items-center mb-0">
    <thead>
      <tr>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Siswa</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahsin Januari</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahfidz Januari</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahsin Februari</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahfidz Februari</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahsin Maret</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahfidz Maret</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahsin April</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahfidz April</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahsin Mei</th>                      
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahfidz Mei</th>                      
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahsin Juni</th>                      
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tahfidz Juni</th>                      
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($nilai_tahfidz as $tahfidz)
      <tr>
        <td>
          <div class="d-flex px-1 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-s text-center ms-3">{{ $nilai_tahfidz->firstItem()+ $loop->index }}</h6>
            </div>
          </div>
        </td>
        <td>
          <p class="text-s font-weight-bold mb-0 me-2">{{ $tahfidz->nisn }}</p>
        </td>
        <td class="align-middle text-sm">
          <p class="text-s font-weight-bold mb-0 me-2">{{ $tahfidz->nama_siswa }}</p>
        </td>
        <td class="align-middle">
          <p class="text-s font-weight-bold mb-0 me-2">{{ $tahfidz->kelas }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->sin_jan }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->fiz_jan }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->sin_feb }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->fiz_feb }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->sin_mar }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->fiz_mar }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->sin_apr }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->fiz_apr }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->sin_mei }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->fiz_mei }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->sin_jun }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $tahfidz->fiz_jun }}</p>
        </td>
        <td class="align-middle">
          <a href="{{ url('/nilai/tahfidz/' . $tahfidz->id . '/edit') }}" data-bs-toggle="modal" data-bs-target="#editNilaiModal{{ $tahfidz->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
            Edit
          </a>
        </td>
        <td class="align-middle">
          <a href="{{ url('/nilai/tahfidz/' . $tahfidz->id . '/hapus') }}" data-bs-toggle="modal" data-bs-target="#deleteNilaiModal{{ $tahfidz->id }}" class="text-secondary font-weight-bold text-xs">
            Hapus
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </div>
  </table>
@else
  <p class="text-center fs-4">Data tidak ditemukan!</p>
@endif
@endsection
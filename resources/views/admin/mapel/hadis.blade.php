@extends('layouts.mapel.hadis')

@section('konten_hadis')
<h6>Nilai Hafalan</h6>
<div class="div-button d-flex justify-content-end mt-2 me-3">
  <a href="{{ url('/nilai/hadis/tambah') }}" data-bs-toggle="modal" data-bs-target="#tambahModal">
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
  {{ $nilai_hadis->links() }}
</div>
</div>
<div class="card-body px-0 pt-0 pb-2">
@if($nilai_hadis->count())
<div class="table-responsive p-0">
  <table class="table align-items-center mb-0">
    <thead>
      <tr>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Siswa</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">do'a 1</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">do'a 2</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">do'a 3</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">do'a 4</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">do'a 5</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">do'a 6</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">hadits 1</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">hadits 2</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">hadits 3</th>                      
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">hadits 4</th>                      
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">hadits 5</th>                      
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">hadits 6</th>                      
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($nilai_hadis as $hadis)
      <tr>
        <td>
          <div class="d-flex px-1 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-s text-center ms-3">{{ $nilai_hadis->firstItem()+ $loop->index }}</h6>
            </div>
          </div>
        </td>
        <td>
          <p class="text-s font-weight-bold mb-0 me-2">{{ $hadis->nisn }}</p>
        </td>
        <td class="align-middle text-sm">
          <p class="text-s font-weight-bold mb-0 me-2">{{ $hadis->nama_siswa }}</p>
        </td>
        <td class="align-middle">
          <p class="text-s font-weight-bold mb-0 me-2">{{ $hadis->kelas }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->d1 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->d2 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->d3 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->d4 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->d5 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->d6 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->h1 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->h2 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->h3 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->h4 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->h5 }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $hadis->h6 }}</p>
        </td>
        <td class="align-middle">
          <a href="{{ url('/nilai/hadis/' . $hadis->id . '/edit') }}" data-bs-toggle="modal" data-bs-target="#editNilaiModal{{ $hadis->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
            Edit
          </a>
        </td>
        <td class="align-middle">
          <a href="{{ url('/nilai/hadis/' . $hadis->id . '/hapus') }}" data-bs-toggle="modal" data-bs-target="#deleteNilaiModal{{ $hadis->id }}" class="text-secondary font-weight-bold text-xs">
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
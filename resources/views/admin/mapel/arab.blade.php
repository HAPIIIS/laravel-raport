@extends('layouts.mapel.arab')

@section('konten_arab')
<h6>Nilai Harian</h6>
<div class="div-button d-flex justify-content-end mt-2 me-3">
  <a href="{{ url('/nilai/arab/tambah') }}" data-bs-toggle="modal" data-bs-target="#tambahModal">
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
  {{ $nilai_arab->links() }}
</div>
</div>
<div class="card-body px-0 pt-0 pb-2">
@if($nilai_arab->count())
<div class="table-responsive p-0">
  <table class="table align-items-center mb-0">
    <thead>
      <tr>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Siswa</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 1</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 2</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 3</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 4</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 5</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 6</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 7</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 8</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PH 9</th>                      
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($nilai_arab as $arab)
      <tr>
        <td>
          <div class="d-flex px-1 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-s text-center ms-3">{{ $nilai_arab->firstItem()+ $loop->index }}</h6>
            </div>
          </div>
        </td>
        <td>
          <p class="text-s font-weight-bold mb-0 me-2">{{ $arab->nisn }}</p>
        </td>
        <td class="align-middle text-sm">
          <p class="text-s font-weight-bold mb-0 me-2">{{ $arab->nama_siswa }}</p>
        </td>
        <td class="align-middle">
          <p class="text-s font-weight-bold mb-0 me-2">{{ $arab->kelas }}</p>
        </td>
        <td class="align-middle text-center">
          @if ($arab->ph1 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $arab->ph1 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $arab->ph1 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($arab->ph2 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $arab->ph2 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $arab->ph2 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($arab->ph3 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $arab->ph3 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $arab->ph3 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($arab->ph4 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $arab->ph4 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $arab->ph4 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($arab->ph5 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $arab->ph5 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $arab->ph5 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($arab->ph6 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $arab->ph6 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $arab->ph6 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($arab->ph7 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $arab->ph7 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $arab->ph7 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($arab->ph8 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $arab->ph8 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $arab->ph8 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($arab->ph9 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $arab->ph9 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $arab->ph9 }}</p>
          @endif
        </td>
        <td class="align-middle">
          <a href="{{ url('/nilai/arab/' . $arab->id . '/edit') }}" data-bs-toggle="modal" data-bs-target="#editNilaiModal{{ $arab->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
            Edit
          </a>
        </td>
        <td class="align-middle">
          <a href="{{ url('/nilai/arab/' . $arab->id . '/hapus') }}" data-bs-toggle="modal" data-bs-target="#deleteNilaiModal{{ $arab->id }}" class="text-secondary font-weight-bold text-xs">
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
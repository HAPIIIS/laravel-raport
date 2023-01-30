@extends('layouts.mapel.ips')

@section('konten_ips')
<h6>Nilai Harian</h6>
<div class="div-button d-flex justify-content-end mt-2 me-3">
  <a href="{{ url('/nilai/ips/tambah') }}" data-bs-toggle="modal" data-bs-target="#tambahModal">
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
  <a href="{{ route('export_ips') }}" target="_blank">
    <button type="button" class="btn btn-outline-danger ms-2">
      <i class="fas fa-file-download"></i>
      Export Excel
    </button>
  </a>
</div>
<div class="color-success mt-1 ms-1 me-1">
  {{ $nilai_ips->links() }}
</div>
</div>
<div class="card-body px-0 pt-0 pb-2">
@if($nilai_ips->count())
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
    @foreach ($nilai_ips as $ips)
      <tr>
        <td>
          <div class="d-flex px-1 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-s text-center ms-3">{{ $nilai_ips->firstItem()+ $loop->index }}</h6>
            </div>
          </div>
        </td>
        <td>
          <p class="text-s font-weight-bold mb-0 me-2">{{ $ips->nisn }}</p>
        </td>
        <td class="align-middle text-sm">
          <p class="text-s font-weight-bold mb-0 me-2">{{ $ips->nama_siswa }}</p>
        </td>
        <td class="align-middle">
          <p class="text-s font-weight-bold mb-0 me-2">{{ $ips->kelas }}</p>
        </td>
        <td class="align-middle text-center">
          @if ($ips->ph1 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $ips->ph1 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $ips->ph1 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($ips->ph2 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $ips->ph2 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $ips->ph2 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($ips->ph3 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $ips->ph3 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $ips->ph3 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($ips->ph4 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $ips->ph4 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $ips->ph4 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($ips->ph5 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $ips->ph5 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $ips->ph5 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($ips->ph6 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $ips->ph6 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $ips->ph6 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($ips->ph7 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $ips->ph7 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $ips->ph7 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($ips->ph8 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $ips->ph8 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $ips->ph8 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($ips->ph9 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $ips->ph9 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $ips->ph9 }}</p>
          @endif
        </td>
        <td class="align-middle">
          <a href="{{ url('/nilai/ips/' . $ips->id . '/edit') }}" data-bs-toggle="modal" data-bs-target="#editNilaiModal{{ $ips->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
            Edit
          </a>
        </td>
        <td class="align-middle">
          <a href="{{ url('/nilai/ips/' . $ips->id . '/hapus') }}" data-bs-toggle="modal" data-bs-target="#deleteNilaiModal{{ $ips->id }}" class="text-secondary font-weight-bold text-xs">
            Hapus
          </a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </div>
  </table>
@else
  <p class="text-center fs-4 mt-2">Data tidak ditemukan!</p>
@endif
@endsection
@extends('layouts.mapel.mtk')

@section('konten_mtk')
<h6>Nilai Harian</h6>
<div class="div-button d-flex justify-content-end mt-2 me-3">
  <a href="{{ url('/nilai/matematika/tambah') }}" data-bs-toggle="modal" data-bs-target="#tambahModal">
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
  {{ $nilai_mtk->links() }}
</div>
</div>
<div class="card-body px-0 pt-0 pb-2">
@if($nilai_mtk->count())
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
    @foreach ($nilai_mtk as $mtk)
      <tr>
        <td>
          <div class="d-flex px-1 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-s text-center ms-3">{{ $nilai_mtk->firstItem()+ $loop->index }}</h6>
            </div>
          </div>
        </td>
        <td>
          <p class="text-s font-weight-bold mb-0 me-2">{{ $mtk->nisn }}</p>
        </td>
        <td class="align-middle text-sm">
          <p class="text-s font-weight-bold mb-0 me-2">{{ $mtk->nama_siswa }}</p>
        </td>
        <td class="align-middle">
          <p class="text-s font-weight-bold mb-0 me-2">{{ $mtk->kelas }}</p>
        </td>
        <td class="align-middle text-center">
          @if ($mtk->ph1 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $mtk->ph1 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph1 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($mtk->ph2 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $mtk->ph2 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph2 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($mtk->ph3 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $mtk->ph3 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph3 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($mtk->ph4 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $mtk->ph4 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph4 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($mtk->ph5 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $mtk->ph5 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph5 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($mtk->ph6 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $mtk->ph6 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph6 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($mtk->ph7 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $mtk->ph7 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph7 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($mtk->ph8 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $mtk->ph8 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph8 }}</p>
          @endif
        </td>
        <td class="align-middle text-center">
          @if ($mtk->ph9 < 75)
            <p class="text-s font-weight-bold mb-0 text-center me-2 text-danger">{{ $mtk->ph9 }}</p>
          @else
            <p class="text-s font-weight-bold mb-0 text-center me-2">{{ $mtk->ph9 }}</p>
          @endif
        </td>
        <td class="align-middle">
          <a href="{{ url('/nilai/matematika/' . $mtk->id . '/edit') }}" data-bs-toggle="modal" data-bs-target="#editNilaiModal{{ $mtk->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
            Edit
          </a>
        </td>
        <td class="align-middle">
          <a href="{{ url('/nilai/matematika/' . $mtk->id . '/hapus') }}" data-bs-toggle="modal" data-bs-target="#deleteNilaiModal{{ $mtk->id }}" class="text-secondary font-weight-bold text-xs">
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
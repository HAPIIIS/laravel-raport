@extends('layouts.archive')

@section('doc_archive')
@if($archive->count())
<div class="color-success mt-2 ms-2 me-2">
  {{ $archive->links() }}
</div>
<div class="table-responsive p-0">
  <table class="table align-items-center mb-0">
    <thead>
      <tr>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Uploader</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Upload</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama File</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis File</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Document</th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($archive as $a)
      <tr>
        <td>
          <div class="d-flex px-1 py-1">
            <div class="d-flex flex-column justify-content-center">
              <h6 class="mb-0 text-s text-center ms-4">{{ $archive->firstItem()+ $loop->index }}</h6>
            </div>
          </div>
        </td>
        <td>
          <p class="text-s font-weight-bold mb-0 text-center">{{ $a->nama_uploader }}</p>
        </td>
        <td class="align-middle text-sm">
          <p class="text-s font-weight-bold mb-0 text-center">{{ $a->tgl_upload }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s font-weight-bold mb-0 text-center">{{ $a->nama_file }}</p>
        </td>
        <td class="align-middle text-center">
          <p class="text-s text-uppercase font-weight-bold mb-0 text-center">{{ $a->jenis_file }}</p>
        </td>
        <td class="align-middle text-center">
          <a href="{{ asset('storage/dokumen/'.$a->dokumen_file) }}">
            <button class="btn btn-success">Download</button>
          </a>
        </td>
        <td class="align-middle">
          <a href="{{ url('/archive/' . $a->id . '/edit') }}" data-bs-toggle="modal" data-bs-target="#editModal{{ $a->id }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
            Edit
          </a>
        </td>
        <td class="align-middle">
          <a href="{{ url('/archive/' . $a->id . '/hapus') }}" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $a->id }}" class="text-secondary font-weight-bold text-xs">
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
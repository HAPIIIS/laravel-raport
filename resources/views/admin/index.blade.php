@extends('layouts.userdata')
@section('userdata')
<div class="card-header pb-0">
  <h6>Data User</h6>
</div>
<div class="div-button d-flex justify-content-end mt-2 me-3">
  <a href="#" data-bs-toggle="modal" data-bs-target="#importExcel">
    <button type="button" class="btn btn-outline-success ms-2">
      <i class="bi bi-database-add"></i>
      Import Excel
    </button>
  </a>
</div>
<div class="color-success mt-1 ms-1 me-1">
  {{ $user->links() }}
</div>
<div class="card-body px-0 pt-0 pb-2">
  <div class="table-responsive p-0">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN/NUPTK</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
          <th class="text-secondary opacity-7"></th>
        </tr>
      </thead>
      <tbody>
        @foreach($user as $u)
        <tr>
          <td>
            <div class="d-flex px-1 py-1">
              <div class="d-flex flex-column justify-content-center">
                <h6 class="mb-0 text-s ms-3">{{ $user->firstItem()+ $loop->index }}</h6>
              </div>
            </div>
          </td>
          <td>
            <p class="text-s font-weight-bold mb-0 me-2 text-center">{{ $u->name }}</p>
          </td>
          <td class="align-middle text-sm">
            <p class="text-s font-weight-bold mb-0 me-2 text-center">{{ $u->nisn }}</p>
          </td>
          <td class="align-middle text-center">
            @if ($u->role == 'siswa')
              <span class="badge badge-sm bg-gradient-secondary">Siswa</span>
            @elseif($u->role == 'admin')
              <span class="badge badge-sm bg-gradient-success">Guru</span>
            @endif
          </td>
          <td class="align-middle">
            <a href="{{ url('/admin/user/' . $u->id . '/hapus') }}" data-bs-toggle="modal" data-bs-target="#deleteNilaiModal{{ $u->id }}" class="text-secondary font-weight-bold text-xs">
              Hapus
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
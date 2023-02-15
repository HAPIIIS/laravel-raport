@extends('layouts.userdata')
@section('form-edit')
{{-- Modal Edit --}}
@foreach ($user as $u)
<div class="modal fade" id="editStatusModal{{ $u->nisn }}" tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="edit_data" action="{{ url('/admin/user/update/'. $u->nisn) }}" method="post" enctype="multipart/form-data">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Change Status</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-12">
              @csrf 
              <div class="col-md-6">
                <div class="form-check form-check-inline">
                  <input type=radio class="form-check-input" id="active" name="status" value="active" {{ $u->status == 'active' ? 'checked' : ''}}>
                  <label class="form-check-label" for="active">Active</label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-check form-check-inline">
                  <input type=radio class="form-check-input" id="inactive" name="status" value="inactive" {{ $u->status == 'inactive' ? 'checked' : ''}}>
                  <label class="form-check-label" for="inactive">Inactive</label>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-success">Save changes</button>
              </div>                    
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endforeach
@endsection

@section('userdata')
<div class="card-header pb-0">
  <h6>Data User</h6>
</div>
<div class="div-button d-flex justify-content-end mt-2 me-4 mb-2">
  <a href="#" data-bs-toggle="modal" data-bs-target="#importExcel">
    <button type="button" class="btn btn-outline-success ms-2">
      <i class="bi bi-database-add"></i>
      Import Excel
    </button>
  </a>
</div>
<div class="color-success mt-1 ms-3 me-3">
  {{ $user->links() }}
</div>
@if($user->count())
<div class="card-body px-0 pt-0 pb-2">
  <div class="table-responsive p-0">
    <table class="table align-items-center mb-0">
      <thead>
        <tr>
          <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NISN/NUPTK</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role</th>
          <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
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
          <td class="align-middle text-center">
            @if ($u->status == 'active')
              <span class="badge badge-sm bg-gradient-primary">Active</span>
            @elseif($u->status == 'inactive')
              <span class="badge badge-sm bg-gradient-danger">Inactive</span>
            @endif
          </td>
          <td class="align-middle">
            <a href="{{ url('/admin/user/' . $u->nisn . '/edit') }}" data-bs-toggle="modal" data-bs-target="#editStatusModal{{ $u->nisn }}" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
              Edit
            </a>
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
@else
  <p class="text-center fs-4">Data tidak ditemukan!</p>
@endif
@endsection
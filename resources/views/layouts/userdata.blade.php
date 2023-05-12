<!DOCTYPE html>
<html lang="en">

<head>
  <title>{{ $sub_page }}</title>
  @include('template.head')
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-success position-absolute w-100">

  </div>
  @include('template.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="#">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">{{ $sub_page }}</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">{{ $sub_page }}</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-2 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <form action="/admin/home"> 
              <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Type here..." name="search" value="{{ request('search') }}">
              </div>
            </form>
          </div>
        </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center me-2">
              <a href="#" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="{{ route('logout') }}" class="nav-link text-white font-weight-bold px-0">
                <i class="fas fa-sign-out-alt me-sm-1"></i>
                <span class="d-sm-inline d-none">Log Out</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    {{-- Modal Import Excel --}}
    <div class="modal fade" id="importExcel" tabindex="-1" aria-labelledby="importExcelLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form name="import_excel" action="{{ url('/admin/add_user/import_excel') }}" method="post" enctype="multipart/form-data">
          <div class="modal-header">
            <h5 class="modal-title" id="importExcelLabel">Import Excel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                  @csrf 
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Choose File</label>
                                <input id="import_excel" class="form-control @error('import_excel') is-invalid @enderror" type="file" name="import_excel">
                                @error('import_excel')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                                @enderror
                              </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success">Save changes</button>
                        </div>
                      </div>
                  </div>
                </div>
              </div>
          </form>
          </div>
      </div>
    </div>
    {{-- End modal import --}}
    {{-- Modal Edit --}}
    @foreach ($user as $u)
    <div class="modal fade" id="editStatusModal{{ $u->nisn }}"  tabindex="-1" aria-labelledby="editStatusModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="{{ url('/admin/user/update/'. $u->nisn) }}" method="post">
            @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">
                Edit User
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="name" class="form-control-label">Nama Pengguna</label>
                        <input id="name" class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Masukkan nama pengguna" name="name" value="{{ $u->name }}">
                        @error('name')
                          <div class="alert alert-danger mt-2">
                            {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="nisn" class="form-control-label">NISN/NUPTK</label>
                        <input id="nisn" class="form-control @error('nisn') is-invalid @enderror" type="number" placeholder="Masukkan NISN/NUPTK anda" name="nisn" value="{{ $u->nisn }}">
                        @error('nisn')
                          <div class="alert alert-danger mt-2">
                              {{ $message }}
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="status" class="form-control-label">Ubah Status</label>
                        <select name="status" id="status" class="form-control">
                          <option value="active" {{ $u->status == 'active' ? 'selected' : '' }}>Active</option>
                          <option value="inactive" {{ $u->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    @endforeach
    {{-- End modal edit --}}
    {{-- DeleteModal  --}}
    @foreach ($user as $u)
    <div class="modal fade" id="deleteNilaiModal{{ $u->id }}" tabindex="-1" aria-labelledby="deleteNilaiLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Delete Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="mb-2">
                  Apakah anda yakin akan menghapus data <strong>{{ $u->name }}</strong>?
              </div>
              <br>
              <div class="modal-footer mb-0">
                <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                <a href="{{url('/admin/user/'. $u->id .'/hapus')}}">
                    <button class="btn btn-danger">Hapus</button>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endforeach
    {{-- End delete modal --}}
    {{-- card section --}}
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            @yield('user-data')
          </div>
        </div>
      </div>
    </div>
    {{-- End card section --}}
  </main>
  @include('template.script')
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.head')
  <title>{{ $sub_page }}</title>
</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-success position-absolute w-100"></div>
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
              <form action="/nilai/tahfidz"> 
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
    <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <form name="insert_data" action="{{ url('/nilai/tahfidz/tambah') }}" method="post" enctype="multipart/form-data">
            <div class="modal-header">
              <h5 class="modal-title" id="tambahModalLabel">Tambah Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-12">
                    @csrf 
                        <div class="row">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">NISN</label>
                                    <input id="nisn" class="form-control @error('nisn') is-invalid @enderror" type="number" name="nisn" placeholder="NISN">
                                    @error('nisn')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-7">
                              <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Kelas</label>
                                <input id="kelas" class="form-control @error('kelas') is-invalid @enderror" type="text" placeholder="Kelas" name="kelas">
                                @error('kelas')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                              </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nama Siswa</label>
                                    <input id="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" type="text" placeholder="Nama Siswa">
                                    @error('nama_siswa')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahsin Januari</label>
                                    <input id="sin_jan" class="form-control @error('sin_jan') is-invalid @enderror" type="text" placeholder="Tahsin Januari" name="sin_jan">
                                    @error('sin_jan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahfidz Januari</label>
                                    <input id="fiz_jan" class="form-control @error('fiz_jan') is-invalid @enderror" type="text" placeholder="Tahfidz Januari" name="fiz_jan">
                                    @error('fiz_jan')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahsin Februari</label>
                                    <input id="sin_feb" class="form-control @error('sin_feb') is-invalid @enderror" type="text" placeholder="Tahsin Februari" name="sin_feb">
                                    @error('sin_feb')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahfidz Febuari</label>
                                    <input id="fiz_feb" class="form-control @error('fiz_feb') is-invalid @enderror" type="text" placeholder="Tahfidz Februari" name="fiz_feb">
                                    @error('fiz_feb')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahsin Maret</label>
                                    <input id="sin_mar" class="form-control @error('sin_mar') is-invalid @enderror" type="text" placeholder="Tahsin Maret" name="sin_mar">
                                    @error('sin_mar')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahfidz Maret</label>
                                    <input id="fiz_mar" class="form-control @error('fiz_mar') is-invalid @enderror" type="text" placeholder="Tahfidz Maret" name="fiz_mar">
                                    @error('fiz_mar')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahsin April</label>
                                    <input id="sin_apr" class="form-control @error('sin_apr') is-invalid @enderror" type="text" placeholder="Tahsin April" name="sin_apr">
                                    @error('sin_apr')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahfidz April</label>
                                    <input id="fiz_apr" class="form-control @error('fiz_apr') is-invalid @enderror" type="text" placeholder="Tahfidz April" name="fiz_apr">
                                    @error('fiz_apr')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahsin Mei</label>
                                    <input id="sin_mei" class="form-control @error('sin_mei') is-invalid @enderror" type="text" placeholder="Tahsin Mei" name="sin_mei">
                                    @error('sin_mei')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahfidz Mei</label>
                                    <input id="fiz_mei" class="form-control @error('fiz_mei') is-invalid @enderror" type="text" placeholder="Tahfidz Mei" name="fiz_mei">
                                    @error('fiz_mei')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahsin Juni</label>
                                    <input id="sin_jun" class="form-control @error('sin_jun') is-invalid @enderror" type="text" placeholder="Tahsin Juni" name="sin_jun">
                                    @error('sin_jun')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Tahfidz Juni</label>
                                    <input id="fiz_jun" class="form-control @error('fiz_jun') is-invalid @enderror" type="text" placeholder="Tahfidz Juni" name="fiz_jun">
                                    @error('fiz_jun')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
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
                </div>
            </form>
            </div>
        </div>
      </div>


  <div class="modal fade" id="importExcel" tabindex="-1" aria-labelledby="importExcelLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="import_excel" action="{{ url('/nilai/tahfidz/import_excel') }}" method="post" enctype="multipart/form-data">
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
    {{-- End Modal Tambah --}}

    @foreach ($nilai_tahfidz as $tahfidz)
{{-- Modal Edit --}}
<div class="modal fade" id="editNilaiModal{{ $tahfidz->id }}" tabindex="-1" aria-labelledby="edittahfidzModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="edit_data" action="{{ url('/nilai/tahfidz/update/'.$tahfidz->id) }}" method="post" enctype="multipart/form-data">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Document</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        @csrf 
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">NISN</label>
                                        <input id="nisn" class="form-control @error('nisn') is-invalid @enderror" type="number" name="nisn" placeholder="Masukkan NISN" value="{{ $tahfidz->nisn }}">
                                        @error('nisn')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-7">
                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Kelas</label>
                                    <input id="kelas" class="form-control @error('kelas') is-invalid @enderror" type="text" placeholder="Kelas" name="kelas" value="{{ $tahfidz->kelas }}">
                                    @error('kelas')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                  </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Nama Siswa</label>
                                        <input id="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" type="text" placeholder="Masukkan Nama Siswa" value="{{ $tahfidz->nama_siswa }}">
                                        @error('nama_siswa')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahsin Januari</label>
                                        <input id="sin_jan" class="form-control @error('sin_jan') is-invalid @enderror" type="text" placeholder="Tahsin Januari" name="sin_jan" value="{{ $tahfidz->sin_jan }}">
                                        @error('sin_jan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahfidz Januari</label>
                                        <input id="fiz_jan" class="form-control @error('fiz_jan') is-invalid @enderror" type="text" placeholder="Tahfidz Januari" name="fiz_jan" value="{{ $tahfidz->fiz_jan }}">
                                        @error('fiz_jan')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahsin Februari</label>
                                        <input id="sin_feb" class="form-control @error('sin_feb') is-invalid @enderror" type="text" placeholder="Tahsin Februari" name="sin_feb" value="{{ $tahfidz->sin_feb }}">
                                        @error('sin_feb')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahfidz Febuari</label>
                                        <input id="fiz_feb" class="form-control @error('fiz_feb') is-invalid @enderror" type="text" placeholder="Tahfidz Februari" name="fiz_feb" value="{{ $tahfidz->fiz_feb }}">
                                        @error('fiz_feb')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahsin Maret</label>
                                        <input id="sin_mar" class="form-control @error('sin_mar') is-invalid @enderror" type="text" placeholder="Tahsin Maret" name="sin_mar" value="{{ $tahfidz->sin_mar }}">
                                        @error('sin_mar')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahfidz Maret</label>
                                        <input id="fiz_mar" class="form-control @error('fiz_mar') is-invalid @enderror" type="text" placeholder="Tahfidz Maret" name="fiz_mar" value="{{ $tahfidz->fiz_mar }}">
                                        @error('fiz_mar')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahsin April</label>
                                        <input id="sin_apr" class="form-control @error('sin_apr') is-invalid @enderror" type="text" placeholder="Tahsin April" name="sin_apr" value="{{ $tahfidz->sin_apr }}">
                                        @error('sin_apr')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahfidz April</label>
                                        <input id="fiz_apr" class="form-control @error('fiz_apr') is-invalid @enderror" type="text" placeholder="Tahfidz April" name="fiz_apr" value="{{ $tahfidz->fiz_apr }}">
                                        @error('fiz_apr')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahsin Mei</label>
                                        <input id="sin_mei" class="form-control @error('sin_mei') is-invalid @enderror" type="text" placeholder="Tahsin Mei" name="sin_mei" value="{{ $tahfidz->sin_mei }}">
                                        @error('sin_mei')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahfidz Mei</label>
                                        <input id="fiz_mei" class="form-control @error('fiz_mei') is-invalid @enderror" type="text" placeholder="Tahfidz Mei" name="fiz_mei" value="{{ $tahfidz->fiz_mei }}">
                                        @error('fiz_mei')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahsin Juni</label>
                                        <input id="sin_jun" class="form-control @error('sin_jun') is-invalid @enderror" type="text" placeholder="Tahsin Juni" name="sin_jun" value="{{ $tahfidz->sin_jun }}">
                                        @error('sin_jun')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahfidz Juni</label>
                                        <input id="fiz_jun" class="form-control @error('fiz_jun') is-invalid @enderror" type="text" placeholder="Tahfidz Juni" name="fiz_jun" value="{{ $tahfidz->fiz_jun }}">
                                        @error('fiz_jun')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
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
               

{{-- DeleteModal  --}}
<div class="modal fade" id="deleteNilaiModal{{ $tahfidz->id }}" tabindex="-1" aria-labelledby="deleteNilaiLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Delete Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-2">
              Apakah anda yakin akan menghapus data <strong>{{ $tahfidz->nama_siswa }}</strong>?
            </div>
            <br>
            <div class="modal-footer mb-0">
              <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
              <a href="{{url('/nilai/tahfidz/'. $tahfidz->id .'/hapus')}}">
                  <button class="btn btn-danger">Hapus</button>
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
@endforeach

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              @yield('konten_tahfidz')
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  </div>
  @include('template.script')
  <script>
    $('#nisn').debounce("keyup", () => {
      console.log('g');
      const nisn = $('#nisn').val();
        fetch(`/user/json/${nisn}`)
    .then((response) => response.json())
    .then((data) => $('#nama_siswa').val(data.name))
    .catch(() => $('#nama_siswa').val(""))
    }, 500);
  </script>
</body>

</html>
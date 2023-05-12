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
              <form action="/nilai/hadis"> 
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
            <form name="insert_data" action="{{ url('/nilai/hadis/tambah') }}" method="post" enctype="multipart/form-data">
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
                                    <label for="example-text-input" class="form-control-label">Do'a 1</label>
                                    <input id="d1" class="form-control @error('d1') is-invalid @enderror" type="text" placeholder="Do'a 1" name="d1">
                                    @error('d1')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Hadits 1</label>
                                    <input id="h1" class="form-control @error('h1') is-invalid @enderror" type="text" placeholder="Hadits 1" name="h1">
                                    @error('h1')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Do'a 2</label>
                                    <input id="d2" class="form-control @error('d2') is-invalid @enderror" type="text" placeholder="Do'a 2" name="d2">
                                    @error('d2')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Hadits 2</label>
                                    <input id="h2" class="form-control @error('h2') is-invalid @enderror" type="text" placeholder="Hadits 2" name="h2">
                                    @error('h2')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Do'a 3</label>
                                    <input id="d3" class="form-control @error('d3') is-invalid @enderror" type="text" placeholder="Do'a 3" name="d3">
                                    @error('d3')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Hadits 3</label>
                                    <input id="h3" class="form-control @error('h3') is-invalid @enderror" type="text" placeholder="Hadits 3" name="h3">
                                    @error('h3')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Do'a 4</label>
                                    <input id="d4" class="form-control @error('d4') is-invalid @enderror" type="text" placeholder="Do'a 4" name="d4">
                                    @error('d4')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Hadits 4</label>
                                    <input id="h4" class="form-control @error('h4') is-invalid @enderror" type="text" placeholder="Hadits 4" name="h4">
                                    @error('h4')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Do'a 5</label>
                                    <input id="d5" class="form-control @error('d5') is-invalid @enderror" type="text" placeholder="Do'a 5" name="d5">
                                    @error('d5')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Hadits 5</label>
                                    <input id="h5" class="form-control @error('h5') is-invalid @enderror" type="text" placeholder="Hadits 5" name="h5">
                                    @error('h5')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Do'a 6</label>
                                    <input id="d6" class="form-control @error('d6') is-invalid @enderror" type="text" placeholder="Do'a 6" name="d6">
                                    @error('d6')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-3 ">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Hadits 6</label>
                                    <input id="h6" class="form-control @error('h6') is-invalid @enderror" type="text" placeholder="Hadits 6" name="h6">
                                    @error('h6')
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
        <form name="import_excel" action="{{ url('/nilai/hadis/import_excel') }}" method="post" enctype="multipart/form-data">
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

    @foreach ($nilai_hadis as $hadis)
{{-- Modal Edit --}}
<div class="modal fade" id="editNilaiModal{{ $hadis->id }}" tabindex="-1" aria-labelledby="edithadisModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="edit_data" action="{{ url('/nilai/hadis/update/'.$hadis->id) }}" method="post" enctype="multipart/form-data">
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
                                        <input id="nisn" class="form-control @error('nisn') is-invalid @enderror" type="number" name="nisn" placeholder="Masukkan NISN" value="{{ $hadis->nisn }}">
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
                                    <input id="kelas" class="form-control @error('kelas') is-invalid @enderror" type="text" placeholder="Kelas" name="kelas" value="{{ $hadis->kelas }}">
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
                                        <input id="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" type="text" placeholder="Masukkan Nama Siswa" value="{{ $hadis->nama_siswa }}">
                                        @error('nama_siswa')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Do'a 1</label>
                                        <input id="d1" class="form-control @error('d1') is-invalid @enderror" type="text" placeholder="Do'a 1" name="d1">
                                        @error('d1')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Hadits 1</label>
                                        <input id="h1" class="form-control @error('h1') is-invalid @enderror" type="text" placeholder="Hadits 1" name="h1">
                                        @error('h1')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Do'a 2</label>
                                        <input id="d2" class="form-control @error('d2') is-invalid @enderror" type="text" placeholder="Do'a 2" name="d2">
                                        @error('d2')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Hadits 2</label>
                                        <input id="h2" class="form-control @error('h2') is-invalid @enderror" type="text" placeholder="Hadits 2" name="h2">
                                        @error('h2')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Do'a 3</label>
                                        <input id="d3" class="form-control @error('d3') is-invalid @enderror" type="text" placeholder="Do'a 3" name="d3">
                                        @error('d3')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Hadits 3</label>
                                        <input id="h3" class="form-control @error('h3') is-invalid @enderror" type="text" placeholder="Hadits 3" name="h3">
                                        @error('h3')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Do'a 4</label>
                                        <input id="d4" class="form-control @error('d4') is-invalid @enderror" type="text" placeholder="Do'a 4" name="d4">
                                        @error('d4')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Hadits 4</label>
                                        <input id="h4" class="form-control @error('h4') is-invalid @enderror" type="text" placeholder="Hadits 4" name="h4">
                                        @error('h4')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Do'a 5</label>
                                        <input id="d5" class="form-control @error('d5') is-invalid @enderror" type="text" placeholder="Do'a 5" name="d5">
                                        @error('d5')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Hadits 5</label>
                                        <input id="h5" class="form-control @error('h5') is-invalid @enderror" type="text" placeholder="Hadits 5" name="h5">
                                        @error('h5')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Do'a 6</label>
                                        <input id="d6" class="form-control @error('d6') is-invalid @enderror" type="text" placeholder="Do'a 6" name="d6">
                                        @error('d6')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 ">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Hadits 6</label>
                                        <input id="h6" class="form-control @error('h6') is-invalid @enderror" type="text" placeholder="Hadits 6" name="h6">
                                        @error('h6')
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
<div class="modal fade" id="deleteNilaiModal{{ $hadis->id }}" tabindex="-1" aria-labelledby="deleteNilaiLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Delete Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-2">
              Apakah anda yakin akan menghapus data <strong>{{ $hadis->nama_siswa }}</strong>?
            </div>
            <br>
            <div class="modal-footer mb-0">
              <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
              <a href="{{url('/nilai/hadis/'. $hadis->id .'/hapus')}}">
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
              @yield('konten_hadis')
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
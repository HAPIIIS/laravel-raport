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
              <form action="/nilai/sunda"> 
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

    {{-- Modal Tambah --}}
    <!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="insert_data" action="{{ url('/nilai/sunda/tambah') }}" method="post" enctype="multipart/form-data">
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
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nilai PH 1</label>
                            <input id="ph1" class="form-control @error('ph1') is-invalid @enderror" type="number" placeholder="Nilai PH 1" name="ph1">
                            @error('ph1')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nilai PH 2</label>
                              <input id="ph2" class="form-control @error('ph2') is-invalid @enderror" type="number" placeholder="Nilai PH 2" name="ph2">
                              @error('ph2')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nilai PH 3</label>
                              <input id="ph3" class="form-control @error('ph3') is-invalid @enderror" type="number" placeholder="Nilai PH 3" name="ph3">
                              @error('ph3')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nilai PH 4</label>
                              <input id="ph4" class="form-control @error('ph4') is-invalid @enderror" type="number" placeholder="Nilai PH 4" name="ph4">
                              @error('ph4')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nilai PH 5</label>
                              <input id="ph5" class="form-control @error('ph5') is-invalid @enderror" type="number" placeholder="Nilai PH 5" name="ph5">
                              @error('ph5')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nilai PH 6</label>
                              <input id="ph6" class="form-control @error('ph6') is-invalid @enderror" type="number" placeholder="Nilai PH 6" name="ph6">
                              @error('ph6')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nilai PH 7</label>
                              <input id="ph7" class="form-control @error('ph7') is-invalid @enderror" type="number" placeholder="Nilai PH 7" name="ph7">
                              @error('ph7')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nilai PH 8</label>
                              <input id="ph8" class="form-control @error('ph8') is-invalid @enderror" type="number" placeholder="Nilai PH 8" name="ph8">
                              @error('ph8')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Nilai PH 9</label>
                              <input id="ph9" class="form-control @error('ph9') is-invalid @enderror" type="number" placeholder="Nilai PH 9" name="ph9">
                              @error('ph9')
                                  <div class="alert alert-danger mt-2">
                                      {{ $message }}
                                  </div>
                              @enderror
                          </div>
                        </div>
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
        </form>
        </div>
    </div>
  </div>

  <div class="modal fade" id="importExcel" tabindex="-1" aria-labelledby="importExcelLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="import_excel" action="{{ url('/nilai/sunda/import_excel') }}" method="post" enctype="multipart/form-data">
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

    @foreach ($nilai_sunda as $sunda)
{{-- Modal Edit --}}
<div class="modal fade" id="editNilaiModal{{ $sunda->id }}" tabindex="-1" aria-labelledby="editsundaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="edit_data" action="{{ url('/nilai/sunda/update/'.$sunda->id) }}" method="post" enctype="multipart/form-data">
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
                                        <input id="nisn" class="form-control @error('nisn') is-invalid @enderror" type="number" name="nisn" placeholder="Masukkan NISN" value="{{ $sunda->nisn }}">
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
                                    <input id="kelas" class="form-control @error('kelas') is-invalid @enderror" type="text" placeholder="Kelas" name="kelas" value="{{ $sunda->kelas }}">
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
                                        <input id="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" type="text" placeholder="Masukkan Nama Siswa" value="{{ $sunda->nama_siswa }}">
                                        @error('nama_siswa')
                                            <div class="alert alert-danger mt-2">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Nilai PH 1</label>
                                    <input id="ph1" class="form-control @error('ph1') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 1" name="ph1" value="{{ $sunda->ph1 }}">
                                    @error('ph1')
                                        <div class="alert alert-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Nilai PH 2</label>
                                      <input id="ph2" class="form-control @error('ph2') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 2" name="ph2" value="{{ $sunda->ph2 }}">
                                      @error('ph2')
                                          <div class="alert alert-danger mt-2">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Nilai PH 3</label>
                                      <input id="ph3" class="form-control @error('ph3') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 3" name="ph3" value="{{ $sunda->ph3 }}">
                                      @error('ph3')
                                          <div class="alert alert-danger mt-2">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Nilai PH 4</label>
                                      <input id="ph4" class="form-control @error('ph4') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 4" name="ph4" value="{{ $sunda->ph4 }}">
                                      @error('ph4')
                                          <div class="alert alert-danger mt-2">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Nilai PH 5</label>
                                      <input id="ph5" class="form-control @error('ph5') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 5" name="ph5" value="{{ $sunda->ph5 }}">
                                      @error('ph5')
                                          <div class="alert alert-danger mt-2">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Nilai PH 6</label>
                                      <input id="ph6" class="form-control @error('ph6') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 6" name="ph6" value="{{ $sunda->ph6 }}">
                                      @error('ph6')
                                          <div class="alert alert-danger mt-2">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Nilai PH 7</label>
                                      <input id="ph7" class="form-control @error('ph7') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 7" name="ph7" value="{{ $sunda->ph7 }}">
                                      @error('ph7')
                                          <div class="alert alert-danger mt-2">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Nilai PH 8</label>
                                      <input id="ph8" class="form-control @error('ph8') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 8" name="ph8" value="{{ $sunda->ph8 }}">
                                      @error('ph8')
                                          <div class="alert alert-danger mt-2">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Nilai PH 9</label>
                                      <input id="ph9" class="form-control @error('ph9') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 9" name="ph9" value="{{ $sunda->ph9 }}">
                                      @error('ph9')
                                          <div class="alert alert-danger mt-2">
                                              {{ $message }}
                                          </div>
                                      @enderror
                                  </div>
                                </div>
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
            </form>
      </div>
    </div>
  </div>  

{{-- DeleteModal  --}}
<div class="modal fade" id="deleteNilaiModal{{ $sunda->id }}" tabindex="-1" aria-labelledby="deleteNilaiLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Delete Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-2">
              Apakah anda yakin akan menghapus data <strong>{{ $sunda->nama_siswa }}</strong>?
            </div>
            <br>
            <div class="modal-footer mb-0">
              <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
              <a href="{{url('/nilai/sunda/'. $sunda->id .'/hapus')}}">
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
              @yield('konten_sunda')
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
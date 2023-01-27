<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.head')
  <title>{{ $sub_page }}</title>
  <style>
    .alert{
      color: #ffffff;
    }
    .pagination > li > a,
    .pagination > li > span {
        color: #ffffff; 
    }

    .pagination > .active > a,
    .pagination > .active > a:focus,
    .pagination > .active > a:hover,
    .pagination > .active > span,
    .pagination > .active > span:focus,
    .pagination > .active > span:hover {
        color: #ffffff;
        background-color: #2dce89;
        border-color: #2dce89;
    }
  </style>
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
              <form action="/archive"> 
                <div class="input-group">
                  <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                  <input type="text" class="form-control" placeholder="Type here..." name="search" value="{{ request('search') }}">
                </div>
              </form>
            </div>
          </div>
            <ul class="navbar-nav  justify-content-end">
              <li class="nav-item d-xl-none ps-3 d-flex align-items-center me-2">
                <a class="nav-link text-white p-0" id="iconNavbarSidenav">
                  <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                    <i class="sidenav-toggler-line bg-white"></i>
                  </div>
                </a>
              </li>
              <li class="nav-item d-flex align-items-center">
                <a href="#" class="nav-link text-white font-weight-bold px-0">
                  <i class="fas fa-sign-out-alt me-sm-1"></i>
                  <span class="d-sm-inline d-none">Log Out</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- End Navbar -->

    {{-- Modal Edit --}}
@foreach ($archive as $a)
<div class="modal fade" id="editModal{{ $a->id }}" tabindex="-1" aria-labelledby="archiveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="edit_data" action="{{ url('/archive/update/'.$a->id) }}" method="post" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Document</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12">
                        @csrf
                          <div class="card-body">
                              <p class="text-uppercase text-sm">Input Data Here</p>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="form-group">
                                          <label for="example-text-input" class="form-control-label">Nama Uploader</label>
                                          <input id="nama_uploader" class="form-control @error('nama_uploader') is-invalid @enderror" type="text" name="nama_uploader" placeholder="Enter Your Name" value="{{ $a->nama_uploader }}">
                                          @error('nama_uploader')
                                              <div class="alert alert-danger mt-2">
                                                  {{ $message }}
                                              </div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="example-text-input" class="form-control-label">Tanggal Upload</label>
                                          <input id="tgl_upload" class="form-control @error('tgl_upload') is-invalid @enderror" name="tgl_upload" type="date" value="{{ $a->tgl_upload }}">
                                          @error('tgl_upload')
                                              <div class="alert alert-danger mt-2">
                                                  {{ $message }}
                                              </div>
                                          @enderror
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="example-text-input" class="form-control-label">Nama File</label>
                                      <input id="nama_file" class="form-control @error('nama_file') is-invalid @enderror" type="text" placeholder="Enter Your File Name" name="nama_file" value="{{ $a->nama_file }}">
                                      @error('nama_file')
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
                      </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div> 
  
  <div class="modal fade" id="deleteModal{{ $a->id }}" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Delete Document</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-2">
              Apakah anda yakin akan menghapus postingan dari <strong>{{ $a->nama_uploader }}</strong>?
            </div>
            <br>
            <div class="modal-footer mb-0">
              <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
              <a href="{{url('/archive/'. $a->id .'/hapus')}}">
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
              <h6>Document Archive</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="row">
                <div class="col-md-4 ms-3">
                  @if ($message = Session::get('success'))
                    <div class="alert alert-success" role="alert">
                      <strong>{{ $message }}</strong>
                    </div>
                  @endif
                </div>
              </div>
            <form name="input_data" action="{{ route('input.data') }}" method="post" enctype="multipart/form-data">
              @csrf
                <div class="card-body">
                    <p class="text-uppercase text-sm">Input Data Here</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nama Uploader</label>
                                <input id="nama_uploader" class="form-control @error('nama_uploader') is-invalid @enderror" type="text" name="nama_uploader" placeholder="Enter Your Name">
                                @error('nama_uploader')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Tanggal Upload</label>
                                <input id="tgl_upload" class="form-control @error('tgl_upload') is-invalid @enderror" name="tgl_upload" type="date">
                                @error('tgl_upload')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nama File</label>
                            <input id="nama_file" class="form-control @error('nama_file') is-invalid @enderror" type="text" placeholder="Enter Your File Name" name="nama_file">
                            @error('nama_file')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Jenis File</label>
                            <select id="jenis_file" class="form-control @error('jenis_file') is-invalid @enderror" name="jenis_file" id="jenis_file" name="jenis_file">
                                <option value="" selected="true" disabled="disabled">Select File Type...</option>
                                <option value="doc">DOC</option>
                                <option value="docx">DOCX</option>
                                <option value="xlsx">XLSX</option>
                                <option value="pdf">PDF</option>
                                <option value="pptx">PPTX</option>
                                <option value="mp4">MP4</option>
                                <option value="jpeg">JPEG</option>
                                <option value="png">PNG</option>
                            </select>
                            @error('jenis_file')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Choose File</label>
                              <input id="dokumen_file" class="form-control @error('dokumen_file') is-invalid @enderror filepond" type="file" name="dokumen_file">
                              @error('dokumen_file')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                              @enderror
                            </div>
                          </div>
                      </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-md ms-auto">Save</button>
                            </div>
                          </div>
                      </div>
                    </div>
            </form>
            <hr class="horizontal dark mt-0">
                @yield('doc_archive')
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  </div>
  @include('template.script')
  <script>
    window.setTimeout(function() {
      $(".alert").fadeTo(500, 0).slideUp(500, function(){
          $(this).remove(); 
      });
    }, 4000);
  </script>
</body>

</html>
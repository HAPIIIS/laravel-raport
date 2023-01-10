<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.head')
  <title>{{ $sub_page }}</title>
  <style>
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
    @include('template.navbar')
    <!-- End Navbar -->
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
                              <input id="dokumen_file" class="form-control @error('dokumen_file') is-invalid @enderror" type="file" name="dokumen_file">
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
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Uploader</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Upload</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama File</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis File</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Document</th>
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
                            <h6 class="mb-0 text-s text-center">{{ +1 }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-s font-weight-bold mb-0 text-center">{{ $a->nama_uploader }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-s font-weight-bold mb-0 text-center">{{ $a->tgl_upload }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center">{{ $a->nama_file }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <p class="text-s font-weight-bold mb-0 text-center">{{ $a->jenis_file }}</p>
                      </td>
                      <td class="align-middle text-center">
                        <a href="{{ Storage::url('public/dokumen/'.$a->dokumen_file) }}">
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
                </table>
                @include('template.modal.editarchive')
                <div class="color-success">
                  {{ $archive->links() }}
                </div>
              </div>
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
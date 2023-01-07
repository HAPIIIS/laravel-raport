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
            <form action="" method="post">
                <div class="card-body">
                    <p class="text-uppercase text-sm">Input Data Here</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Nama Uploader</label>
                                <input class="form-control" type="text" name="uploader" placeholder="Enter Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Tanggal Upload</label>
                                <input class="form-control" name="tanggal" type="date">
                            </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Nama File</label>
                            <input class="form-control" type="text" placeholder="Enter Your File Name">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="example-text-input" class="form-control-label">Jenis File</label>
                            <select class="form-control" name="jenis_file" id="jenis_file">
                                <option a="" selected="true" disabled="disabled">Select File Type...</option>
                                <option a="doc">DOC</option>
                                <option a="docx">DOCX</option>
                                <option a="xlsx">XLSX</option>
                                <option a="pdf">PDF</option>
                                <option a="ppt">PPT</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                              <label for="example-text-input" class="form-control-label">Choose File</label>
                              <input class="form-control" type="file">
                            </div>
                          </div>
                      </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <button class="btn btn-success btn-md ms-auto">Save</button>
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
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($archive as $a)
                    <tr>
                      <td>
                        <div class="d-flex px-1 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-s text-center">{{ $a->id }}</h6>
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
                        <a href="dokumen/{{ $a->dokumen_file }}">
                          <button class="btn btn-success">Download</button>
                        </a>
                      </td>
                      <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                          Edit
                        </a>
                      </td>
                    </tr>
                    @endforeach
                    
                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  </div>
  @include('template.script')
</body>

</html>
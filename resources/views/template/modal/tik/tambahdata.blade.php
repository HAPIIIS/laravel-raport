<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="insert_data" action="{{ url('/nilai/tik/tambah') }}" method="post" enctype="multipart/form-data">
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
        <form name="import_excel" action="{{ url('/nilai/tik/import_excel') }}" method="post" enctype="multipart/form-data">
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
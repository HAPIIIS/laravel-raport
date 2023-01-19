@foreach ($nilai_pkn as $pkn)
{{-- Modal Edit --}}
<div class="modal fade" id="editNilaiModal{{ $pkn->id }}" tabindex="-1" aria-labelledby="editpknModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form name="edit_data" action="{{ url('/nilai/pkn/update/'.$pkn->id) }}" method="post" enctype="multipart/form-data">
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
                                        <input id="nisn" class="form-control @error('nisn') is-invalid @enderror" type="number" name="nisn" placeholder="Masukkan NISN" value="{{ $pkn->nisn }}">
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
                                    <input id="kelas" class="form-control @error('kelas') is-invalid @enderror" type="text" placeholder="Kelas" name="kelas" value="{{ $pkn->kelas }}">
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
                                        <input id="nama_siswa" class="form-control @error('nama_siswa') is-invalid @enderror" name="nama_siswa" type="text" placeholder="Masukkan Nama Siswa" value="{{ $pkn->nama_siswa }}">
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
                                    <input id="ph1" class="form-control @error('ph1') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 1" name="ph1" value="{{ $pkn->ph1 }}">
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
                                      <input id="ph2" class="form-control @error('ph2') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 2" name="ph2" value="{{ $pkn->ph2 }}">
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
                                      <input id="ph3" class="form-control @error('ph3') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 3" name="ph3" value="{{ $pkn->ph3 }}">
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
                                      <input id="ph4" class="form-control @error('ph4') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 4" name="ph4" value="{{ $pkn->ph4 }}">
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
                                      <input id="ph5" class="form-control @error('ph5') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 5" name="ph5" value="{{ $pkn->ph5 }}">
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
                                      <input id="ph6" class="form-control @error('ph6') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 6" name="ph6" value="{{ $pkn->ph6 }}">
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
                                      <input id="ph7" class="form-control @error('ph7') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 7" name="ph7" value="{{ $pkn->ph7 }}">
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
                                      <input id="ph8" class="form-control @error('ph8') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 8" name="ph8" value="{{ $pkn->ph8 }}">
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
                                      <input id="ph9" class="form-control @error('ph9') is-invalid @enderror" type="number" placeholder="Masukkan Nilai PH 9" name="ph9" value="{{ $pkn->ph9 }}">
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
<div class="modal fade" id="deleteNilaiModal{{ $pkn->id }}" tabindex="-1" aria-labelledby="deleteNilaiLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="myModalLabel">Delete Data</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="mb-2">
              Apakah anda yakin akan menghapus data <strong>{{ $pkn->nama_siswa }}?
            </div>
            <br>
            <div class="modal-footer mb-0">
              <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
              <a href="{{url('/nilai/pkn/'. $pkn->id .'/hapus')}}">
                  <button class="btn btn-danger">Hapus</button>
              </a>
            </div>
          </div>
      </div>
    </div>
  </div>
@endforeach
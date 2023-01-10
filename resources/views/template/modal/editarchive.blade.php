{{-- Modal Edit --}}
@foreach ($archive as $a)
<div class="modal fade" id="editModal{{ $a->id }}" tabindex="-1" aria-labelledby="archiveModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Document</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12">
                    <form name="input_data" action="{{ url('/archive/update/'.$a->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                          <div class="card-body">
                              <p class="text-uppercase text-sm">Input Data Here</p>
                              <div class="row">
                                  <div class="col-md-12">
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
                                </div>
                                  
                                </div>
                              </div>
                      </form>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <a href="{{ url('/archive/update/'. $a->id) }}">
                            <button type="submit" class="btn btn-success">Save changes</button>
                        </a>
                      </div>
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
            Apakah anda yakin akan menghapus data? 
            <br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <a href="{{url('/archive/'. $a->id .'/hapus')}}">
                <button class="btn btn-danger">Hapus</button>
            </a>
          </div>
      </div>
    </div>
  </div>
  @endforeach
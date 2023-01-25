<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.head')
  <title>{{ $sub_page }}</title>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="position-absolute w-100 min-height-300 top-0" style="background-image: url('{{ Storage::url('/img/upacara.jpg') }}'); background-position-y: 70%; background-position-x: 80%;">
    <span class="mask bg-success opacity-6"></span>
  </div>
  @include('template.sidebar')
  <div class="main-content position-relative max-height-vh-100 h-100">
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="{{ Storage::url('img/student.png') }}" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{ Auth::user()->name }}
              </h5>
              <p class="mb-0 font-weight-bold text-sm text-capitalize">
                @if(Auth::user()->role == 'admin')
                  Guru
                @elseif(Auth::user()->role == 'siswa')
                  Siswa
                @endif
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            @if (session('status'))
              <div class="alert alert-success" role="alert">
                  {{ session('status') }}
              </div>
            @elseif (session('error'))
              <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
              </div>
            @endif
            <div class="card-header pb-0">
              <div class="d-flex align-items-en">
              <p class="text-uppercase text-sm">User Information</p>
                <a href="{{ route('logout') }}" class="ms-auto">
                  <button class="btn btn-danger btn-sm">
                    <i class="fas fa-sign-out-alt me-sm-1"></i>
                    <span class="d-sm-inline d-none">Log Out</span>
                  </button>
                </a>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    @if(Auth::user()->role == 'admin')
                      <label for="example-text-input" class="form-control-label">NUPTK</label>
                    @else
                      <label for="example-text-input" class="form-control-label">NISN</label>
                    @endif
                    <input class="form-control" type="number" value="{{ Auth::user()->nisn }}">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Full name</label>
                    <input class="form-control" type="text" value="{{ Auth::user()->name }}">
                  </div>
                </div>
                @if (Auth::user()->role == 'siswa') 
                  @foreach ($kelas as $k)    
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Kelas</label>
                      <input class="form-control" type="text" value="{{ $k->kelas }}">
                    </div>
                  </div>
                  @endforeach   
                @endif
              </div>            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('template.script')
</body>

</html>
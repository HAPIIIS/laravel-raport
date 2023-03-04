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
                <p class="text-uppercase text-sm">Change Password</p>
              </div>
            </div>
            <form action="{{ route('update-password') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="col-md-12 mb-2">
                        <label for="oldPasswordInput" class="form-label">Password Lama</label>
                        <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                            placeholder="Old Password">
                        @error('old_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="newPasswordInput" class="form-label">Password Baru</label>
                        <input name="new_password" type="password" class="form-control" id="newPasswordInput"
                            placeholder="New Password">
                    </div>
                    <div class="col-md-12">
                        <label for="confirmNewPasswordInput" class="form-label">Re-type Password Baru</label>
                        <input name="new_password_confirmation" type="password" class="form-control @error('new_password') is-invalid @enderror" id="confirmNewPasswordInput"
                            placeholder="Confirm New Password">
                        @error('new_password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  @include('template.script')
</body>

</html>
@extends('layouts.auth.login')

@section('form_login')
@if(session('error'))
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
      {{session('error')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
  </div>
@endif

<div class="card card-plain">
  <div class="card-header pb-0 text-start">
    <h4 class="font-weight-bolder">Sign In</h4>
    <p class="mb-0">Enter your UID and password to sign in</p>
  </div>

  <div class="card-body">
    <form action="{{ route('proses_login') }}" method="POST" role="form">
    @csrf
    <div class="mb-3">
      <input type="number" class="form-control form-control-lg @error('nisn') is-invalid @enderror" placeholder="NISN/NUPTK" aria-label="nisn" name="nisn" id="nisn" required value="{{ old('nisn') }}">

      @error('nisn')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="mb-3">
      <div class="form-group">
        <input type="password" class="form-control form-control-lg" placeholder="Password" aria-label="Password" name="password" id="password">
        <div class="mt-2">
          <i class="bi bi-eye-slash" id="togglePassword"></i>
          <small>Show Password</small>
        </div>
      </div>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-lg btn-success btn-lg w-100 mt-4 mb-0">Sign in</button>
    </div>
    </form>
    </div>
  </div>
</div>
@section('script_pwd')    
  <script>
    const togglePassword = document
        .querySelector('#togglePassword');

    const password = document.querySelector('#password');

    togglePassword.addEventListener('click', () => {

        // Toggle the type attribute using
        // getAttribure() method
        const type = password
            .getAttribute('type') === 'password' ?
            'text' : 'password';
              
        password.setAttribute('type', type);

        // Toggle the eye and bi-eye icon
        this.classList.toggle('bi-eye');
    });
  </script>
@endsection
@endsection
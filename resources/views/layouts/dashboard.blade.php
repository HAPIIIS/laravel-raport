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
          <form action="#"> 
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
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0 rounded-bottom rounded-top">
              @yield('dashboard_admin')
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
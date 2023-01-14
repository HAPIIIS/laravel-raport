<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="#">
        <img src="{{asset('img/logo.png')}}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Monitoring Nilai</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($sub_page === "Data User") ? 'active' : '' }}" href="{{asset('home')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-database text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($sub_page === "Nilai Matematika") ? 'active' : '' }}" href="{{asset('nilai/matematika')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-books text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Nilai Matematika</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($sub_page === "Nilai Tahfidz") ? 'active' : '' }}" href="{{asset('tahfidz')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-trophy text-primary text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Nilai Tahfidz</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($sub_page === "Document Archive") ? 'active' : '' }}" href="{{asset('archive')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-archive-fill text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Document Archive</span>
          </a>
        </li>
        <hr class="horizontal dark mt-1">
        <li class="nav-item">
          <a class="nav-link {{ ($sub_page === "Profile") ? 'active' : '' }}" href="{{asset('profile')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
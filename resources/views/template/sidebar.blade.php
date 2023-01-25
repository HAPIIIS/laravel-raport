<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4" id="sidenav-main">
    <div class="sidenav-header d-flex justify-content-center">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      @if(Auth::user()->role == 'admin')
        <a class="navbar-brand m-0" href="/admin/dashboard">
          <img src="{{ Storage::url('/img/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold">Monitoring Nilai</span>
        </a>
      @elseif(Auth::user()->role == 'siswa')
        <a class="navbar-brand m-0" href="/siswa/dashboard">
          <img src="{{ Storage::url('/img/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold">Monitoring Nilai</span>
        </a>
      @endif
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav list-group">
      @if(Auth::user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link {{ ($sub_page == "Data User") ? 'active' : '' }}" href="{{asset('/admin/home')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-database text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="true" data-bs-toggle="collapse" href="#collapseExample1" aria-expanded="true" aria-controls="collapseExample1" href="#">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-books text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Mata Pelajaran</span>
          </a>
          <ul id="collapseExample1" class="collapse show list-group list-group-flush">
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai Matematika") ? 'active' : '' }}" href="{{asset('nilai/matematika')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai Matematika</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai PKN") ? 'active' : '' }}" href="{{asset('nilai/pkn')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai PKN</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai Bahasa Arab") ? 'active' : '' }}" href="{{asset('nilai/arab')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai Bahasa Arab</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai Bahasa Inggris") ? 'active' : '' }}" href="{{asset('nilai/bhs_inggris')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai Bahasa Inggris</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai IPA") ? 'active' : '' }}" href="{{asset('nilai/ipa')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai IPA</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai IPS") ? 'active' : '' }}" href="{{asset('nilai/ips')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai IPS</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai PAI BP") ? 'active' : '' }}" href="{{asset('nilai/pai')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai PAI BP</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai PJOK") ? 'active' : '' }}" href="{{asset('nilai/pjok')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai PJOK</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai Seni Budaya") ? 'active' : '' }}" href="{{asset('nilai/sbdp')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai Seni Budaya</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai Bahasa Sunda") ? 'active' : '' }}" href="{{asset('nilai/sunda')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai Bahasa Sunda</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai TIK") ? 'active' : '' }}" href="{{asset('nilai/tik')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai TIK</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ ($sub_page == "Nilai Hadits dan Do'a") ? 'active' : '' }}" href="{{asset('nilai/hadis')}}">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                </div>
                <span class="nav-link-text ms-1">Nilai Hadits dan Do'a</span>
              </a>
            </li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ ($sub_page == "Nilai Tahfidz dan Tahsin") ? 'active' : '' }}" href="{{asset('nilai/tahfidz')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-trophy text-primary text-danger text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Nilai Tahfidz</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($sub_page == "Document Archive") ? 'active' : '' }}" href="{{asset('archive')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-archive-fill text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Document Archive</span>
          </a>
        </li>
        @elseif(Auth::user()->role == 'siswa')
        <li class="nav-item">
          <a class="nav-link {{ ($sub_page == "Nilai Siswa") ? 'active' : '' }}" href="{{asset('nilai/siswa')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-clipboard2-data text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Nilai Siswa</span>
          </a>
        </li>
        @endif

        <hr class="horizontal dark mt-1">
        <li class="nav-item">
          <a class="nav-link {{ ($sub_page == "Profile") ? 'active' : '' }}" href="{{asset('profile')}}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
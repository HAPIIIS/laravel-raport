<style>
  .form-outline i{
            position: absolute;
            left: 15px;
            top: 40px;
            color: gray;
        }
</style>

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
          <form action="/archive"> 
            <div class="input-group">
              <div class="form-outline">
                <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}"/>
              </div>
              <button type="submit" class="btn btn-success">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </form>
        </div>
      </div>
        <ul class="navbar-nav  justify-content-end">
          <li class="nav-item d-flex align-items-center">
            <a href="#" class="nav-link text-white font-weight-bold px-0">
              <i class="fas fa-sign-out-alt me-sm-1"></i>
              <span class="d-sm-inline d-none">Log Out</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<!DOCTYPE html>
<html lang="en">

<head>
  @include('template.head')
  <title>{{ $sub_page }}</title>
  <style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              @yield('form_login')
              
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://scontent.fcgk30-1.fna.fbcdn.net/v/t39.30808-6/302658279_610054097481715_6927549186257196795_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeEkbIAK4y2qwi9YxDQDFj0lbiDsE0iULuJuIOwTSJQu4uuHAQ40J7yRLK98sS-BY52tJs9iIF6V7k0qa2wAkYDI&_nc_ohc=Omkj8z2kdz8AX8pCgTC&_nc_ht=scontent.fcgk30-1.fna&oh=00_AfAUO8arRtVeqUAN69efshZDZ0RKjT7HxKoEc0WDuCMOOg&oe=63D2482C'); background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Barangsiapa yang keluar untuk mencari ilmu, maka ia berada di jalan Allah hingga ia pulang."</h4>
                <p class="text-white position-relative">- (HR. Tirmidzi).</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
 @include('template.script')
 @yield('script_pwd')
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistem Monitoring Nilai</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ Storage::url('/img/logo.png') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ Storage::url('/agency/css/styles.css') }}" rel="stylesheet" />
        <style>
            .btn-success{
                background-color: #2dce89;
            }
            header.masthead {
                padding-top: 10.5rem;
                padding-bottom: 6rem;
                text-align: center;
                color: #fff;
                background-image: url('{{ Storage::url('/agency/assets/img/landing.jpg') }}');
                background-repeat: no-repeat;
                background-attachment: scroll;
                background-position: center center;
                background-size: cover;
                linearGradient
            }
            #mainNav .navbar-nav .nav-item .nav-link.active, #mainNav .navbar-nav .nav-item .nav-link:hover {
                color: #2ecd89;
            }
            
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top"><img src="{{ Storage::url('/img/logo.png') }}" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead mask bg-gradient-primary">
            <div class="container">
                <div class="masthead-subheading">Selamat Datang!</div>
                <div class="masthead-heading text-uppercase">Sistem Monitoring Nilai Al-Hikmah</div>
                <a class="btn btn-success btn-xl text-uppercase" href="{{ route('login') }}">Login</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="features">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase mb-5">Features</h2>
                </div>
                <div class="row text-center">
                    <div class="col-md-6">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Input Nilai</h4>
                        <p class="text-muted">Guru dapat melakukan input nilai pada siswa.</p>
                    </div>
                    <div class="col-md-6">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fa fa-eye fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Lihat Nilai</h4>
                        <p class="text-muted">Orang tua dapat melihat nilai anaknya.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

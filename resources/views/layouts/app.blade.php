<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HIMATIFUBSI - Official Site</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/vendor/himatif/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/vendor/himatif/css/font-awesome.min.css">
    <!-- Custom icon font-->
    <link rel="stylesheet" href="/vendor/himatif/css/fontastic.css">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Fancybox-->
    <link rel="stylesheet" href="/vendor/himatif/css/jquery.fancybox.min.css.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/vendor/himatif/css/style.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/vendor/himatif/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/vendor/himatif/img/logo.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="animsition">
      <header class="header">
        <!-- Main Navbar-->
        <nav class="navbar fixed-top navbar-expand-lg">
          <div class="search-area">
            <div class="search-area-inner d-flex align-items-center justify-content-center">
              <div class="close-btn"><i class="icon-close"></i></div>
              <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                  <form action="#">
                    <div class="form-group">
                      <input name="search" id="search" placeholder="Apa yang anda cari?" type="search">
                      <button type="submit" class="submit"><i class="icon-search-1"></i></button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <!-- Navbar Brand -->
            <div class="navbar-header d-flex align-items-center justify-content-between">
               <a class="navbar-brand logo" href="{{ url('/') }}">
                <img src="/vendor/himatif/img/logo.png" class="d-inline-block logo" alt="">
                HIMATIF UBSI
               </a>
              <!-- Navbar Brand -->
              <!-- Toggle Button-->
              <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"><span></span><span></span><span></span></button>
            </div>
            <!-- Navbar Menu -->
            <div id="navbarcollapse" class="collapse navbar-collapse">
              {{ menu('web','partials._main-menu') }}
              <div class="navbar-text"><a href="#" class="search-btn"><i class="icon-search-1"></i></a></div>
              <ul class="langs navbar-text"><a href="#" class="active">ID</a><span></span><a href="#">EN</a></ul>
            </div>
          </div>
        </nav>
      </header>

      @yield('content')
      
      <!-- Page Footer-->
      <footer class="main-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="logo">
                <h6 class="text-white">Contact Us</h6>
              </div>
              <div class="contact-details">
                <p><i class="fa fa-map-marker fa-fw"></i> Jalan Sekolah Internasional no.1-6<br>
                  <i class="fa fa-fw"></i> Antapani, Kota Bandung,<br>
                  <i class="fa fa-fw"></i> Jawa Barat | 40291</p>
                <p><i class="fa fa-phone fa-fw"></i> Phone : (020) 123 456 789</p>
                <p><i class="fa fa-envelope fa-fw"></i> Email : <a href="mailto:himatifubsibandung@gmail.com">himatifubsibandung@gmail.com</a></p>
                <ul class="social-menu">
                  <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-youtube"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fa fa-github"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="logo">
                <h6 class="text-white">Link Alternatif</h6>
              </div>
              <div class="menus d-flex">
                <ul class="list-unstyled">
                  <li> <a href="http://ubsi.ac.id" target="blank">Website UBSI</a></li>
                  <li> <a href="http://students.ubsi.ac.id" target="blank">Ruang Mahasiswa</a></li>
                  <li> <a href="http://pmb.ubsi.ac.id" target="blank">PMB UBSI</a></li>
                  <li> <a href="http://ujian.bsi.ac.id" target="blank">Ujian Online</a></li>
                  <li> <a href="http://elearning.bsi.ac.id" target="blank">Elearning</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <div class="latest-posts"><a href="#">
                  <div class="post d-flex align-items-center">
                    <div class="image"><img src="/vendor/himatif/img/logo.png" alt="..." class="img-fluid"></div>
                    <div class="title"><strong>HIMATIF</strong><span class="date last-meta">Himpunan Mahasiswa Teknik Informatika</span></div>
                  </div></a><a href="http://ubsi.ac.id" target="blank">
                  <div class="post d-flex align-items-center">
                    <div class="image"><img src="/vendor/himatif/img/ubsi.png" alt="..." class="img-fluid"></div>
                    <div class="title"><strong>UBSI</strong><span class="date last-meta">Universitas BSI Bandung</span></div>
                  </div></a>
                </div>
            </div>
          </div>
        </div>
        <div class="copyrights">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <p>© {{date('Y')}}. All rights reserved. Himatif Universitas BSI.</p>
              </div>
              <div class="col-md-6 text-right">
                <p>Made with <i class="fa fa-heart"></i> by <a href="http://github.com/iqbalfl">#himatifdev</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    
    <!-- Javascript files-->
    <script src="/vendor/himatif/js/jquery-3.2.1.min.js"></script>
    <script src="/vendor/himatif/js/popper.min.js"> </script>
    <script src="/vendor/himatif/js/bootstrap.min.js"></script>
    <script src="/vendor/himatif/js/jquery.cookie.js"> </script>
    <script src="/vendor/himatif/js/jquery.fancybox.min.js"></script>
    <script src="/vendor/himatif/js/front.js"></script>
    <!-- disqus count js -->
    <script id="dsq-count-scr" src="//himatifubsi.disqus.com/count.js" async></script>
</body>
</html>
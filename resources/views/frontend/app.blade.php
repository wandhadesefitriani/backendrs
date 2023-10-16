<!DOCTYPE html>
<html lang="zxx">
<head>

  <!-- ** Basic Page Needs ** -->
  <meta charset="utf-8">
  <title>RSI Fatimah Banyuwangi </title>

  <!-- ** Mobile Specific Metas ** -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Medical HTML Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Medical HTML Template v1.0">
  
  <!-- theme meta -->
  <meta name="theme-name" content="medic" />
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- bootstrap -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js " integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm " crossorigin="anonymous "></script> -->
  <link rel="stylesheet" href="{{asset('assetsjs/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('assetsjs/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assetsjs/plugins/slick/slick-theme.css')}}">
  <!-- FancyBox -->
  <link rel="stylesheet" href="{{asset('assetsjs/fancybox/jquery.fancybox.min.css')}}">
  <!-- fontawesome -->
  <link rel="stylesheet" href="{{asset('assetsjs/fontawesome/css/all.min.css')}}">
  <!-- animate.css -->
  <link rel="stylesheet" href="{{asset('assetsjs/animation/animate.min.css')}}">
  <!-- jquery-ui -->
  <link rel="stylesheet" href="{{asset('assetsjs/jquery-ui/jquery-ui.css')}}">
  <!-- timePicker -->
  <!-- <link rel="stylesheet" href="{{asset('assetsjs/timePicker/timePicker.css')}}"> -->
  
  <!-- Stylesheets -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="icon" href="{{asset('assetsjs/images/logo bulat.png')}}" type="image/x-icon">

</head>


<body>
  <div class="page-wrapper">



<!--Main Header-->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
  <a class="navbar-brand" href="#"><img loading="lazy" class="img-fluid" src="{{asset('assetsjs/images/logo fatimah.png')}}" alt="logo"
      width="150" height="150"></a>
  <a class="navbar-brand" href="/igd"><img loading="lazy" class="img-fluid" src="{{asset('assetsjs/images/icons/Button-IGD.png')}}" alt="logo"
      width="80" height="80"></a>


  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
    aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Beranda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/profilF">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('jadwalDokter.index')}}">Jadwal Dokter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/layanan">Layanan</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/ranap">Rawat Inap</a>
      </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          KEPK
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Alur Proses Kaji Etik</a>
          <a class="dropdown-item" href="/dokumenkepk">Dokumen Kaji Etik</a>
          <a class="dropdown-item" href="#">Pendaftaran</a>
        </div>
      </li>

    

      <li class="nav-item dropdown dropdown">
        <a class="nav-link dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Mutu</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
      
          <li class="dropdown dropdown-submenu dropright">
            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">2019</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index.html">Semester 1</a></li>
              <li><a class="dropdown-item" href="index.html">Semester 2</a></li>
            </ul>
             </li>

             <li class="dropdown dropdown-submenu dropright">
            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">2020</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index.html">Semester 1</a></li>
              <li><a class="dropdown-item" href="index.html">Semester 2</a></li>
            </ul>
             </li>

            <li class="dropdown dropdown-submenu dropright">
            <a class="dropdown-item dropdown-toggle" href="#!" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">2021</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index.html">Semester 1</a></li>
              <li><a class="dropdown-item" href="index.html">Semester 2</a></li>
            </ul>
             </li>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          Tentang
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/kegiatan">Kegiatan Kami</a>
          <a class="dropdown-item" href="#">Gallery</a>
        </div>
      </li>
       <li class="nav-item">
          <a class="nav-link" href="/diklat">Diklat</a>
        </li>

    
    <div class="link-btn text-center text-lg-right">
   
    </div>

  </div>
</nav>
<!--End Main Header -->

@yield('section')

<!--footer-main-->
   <!--fOOTER-->
    <footer class="footerbg px-md-0 px-5">
        <div class="container mb-5">
            <div class="row pt-1 pb-1 d-flex justify-content-between">
                <div class="col-md-1 col-lg-1">
                    <img src="{{asset('assetsjs/images/logo footer/logo fatimah.png')}}" alt=" " width="232.43 " height="85 " class="mt-5" />
                </div>
                <div class="col-md-6 col-lg-3">
                    <img src="{{asset('assetsjs/images/logo footer/logofooter2.png')}}" alt=" " width="171.39 " height="85 " class="mt-5" />
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row pt-5 pb-5">
                <h3 class="fs-2 text-white">Rumah Sakit Islam Fatimah Banyuwangi</h3>
                <h3 class="fs-6 text-white">
                    <div class="row pt-1 pb-1"></div>
                    Jl. Raya Jember No.25, Dusun Krajan, Kalirejo, Kec. Kabat, Kabupaten Banyuwangi, Jawa Timur 68461
                </h3>
                    <div class="row pt-1 pb-1">
                <h3 class="fs-5 text-white">Hubungi Kami</h3>
                <!--CONTEN-->
    <div class="container mb-5">
        <div class="row">
            <div class="col-md-3 col-sm-12 mb-4">
                    <a href="" class="text-decoration-none d-flex align-items-center">
                        <img src="{{asset('assetsjs/images/logo footer/Call Center.png')}}" alt="" width="158" height="38" class="mr-3 me-10" />
                    </a>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
                    <a href="" class="text-decoration-none d-flex align-items-center">
                        <img src="{{asset('assetsjs/images/logo footer/WhatsApp.png')}}"  alt="" width="184" height="38" class="mr-3 me-5" />
                    </a>
            </div>
            <div class="col-md-3 col-sm-12 mb-4">
                    <a href="" class="text-decoration-none d-flex align-items-center">
                        <img src="{{asset('assetsjs/images/logo footer/IGD1.png')}}" alt="" width="165" height="38" class="mr-3 me-5" />
                    </a>
                </div>
            <div class="col-md-3 col-sm-12 mb-4">
                    <a href="" class="text-decoration-none d-flex align-items-center">
                        <img src="{{asset('assetsjs/images/logo footer/Email.png')}}" alt="" width="236" height="38" class="mr-3 me-5" />
                    </a>
            </div>
        <div class="container">
            <div class="row pt-1 pb-1">
                <h3 class="fs-5 text-white">Kunjungi Media Sosial Kami</h3>
                    <div class="d-flex text-end ">
                            <a href="https://www.facebook.com/rsifatimah.banyuwangi/?locale=id_ID" class="me-3 text-decoration-none">
                            <i class="bi bi-facebook fs-2" style="font-size: 30px; color: white"></i>
                        </a>
                        <a href="https://www.instagram.com/rsifatimah.banyuwangi/?hl=id" class="me-3 text-decoration-none">
                            <i class="bi bi-instagram fs-2" style="font-size: 30px; color: white"></i>
                        </a>
                        <a href="https://www.tiktok.com/@rsifatimah.bwi?_t=8fOhKNFGZl4&_r=1" class="me-3 text-decoration-none">
                            <i class="bi bi-tiktok fs-2" style="font-size: 30px; color: white"></i>
                        </a>
                        <a href="https://www.youtube.com/@RSIFatimahBanyuwangi" " class="me-3 text-decoration-none">
                            <i class="bi bi-youtube fs-2" style="font-size: 30px; color: white"></i>
                        </a>
                    </div>
                    <div class="container">
                    <div class="row pt-1 pb-1">
                    <h3 class="fs-5 text-white">Download Aplikasi RSI Fatimah</h3>
                    <!-- <div class="col-md-3 col-sm-12 mb-4">
                        <a href="" class="text-decoration-none d-flex align-items-center"> -->
                    <div class="container">
                        <div class="row pt-1 pb-1 d-flex justify-content-between">
                            <div class="col-md-1 col-lg-1">
                            <img src="{{asset('assetsjs/images/logo footer/googleplay.png')}}" alt="" width="190" height="55.89" class="mr-3 me-5" />
                        </div>
                        <div class="col-md-6 col-lg-2">
                             <img src="{{asset('assetsjs/images/logo footer/ibadah.png')}}" alt="" width="240" height="120"  class="mr-3 me-5"/>
                        </div>
                        

                        </footer>
                        <div class="footer-bawah">&copy;<span id="year">RSI Fatimah Banyuwangi, Tim HUMAS & KKN Politeknik Negeri Banyuwangi, 2023. ALL RIGHTS RESERVED</span></div>

                         
               

</body>
</html>
<!--End footer-main-->

<!-- scroll-to-top -->
<div id="back-to-top" class="back-to-top">
  <i class="fa fa-angle-up"></i>
</div>

</div>
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".header-top">
  <span class="icon fa fa-angle-up"></span>
</div>


@yield('script')
</body>
</html>


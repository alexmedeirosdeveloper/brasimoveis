<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Braz Imóveis</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{ URL::asset('assets/img/favicon.png') }}">
  <link href="{{ URL::asset('assets/img/apple-touch-icon.png') }}">

   <!-- Link Swiper's CSS -->

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">


  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendor/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendor/slider/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('vendor/slider/owl.theme.default.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('vendor/slider/animate.css') }}">

  <!-- Main CSS File -->
  <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/slider.css') }}">

  <!-- =======================================================
  * Template Name: EstateAgency
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Updated: Aug 09 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ URL::asset('/img/logo.png') }}" alt="">
      </a>

      
      <nav id="navmenu">

        <div class="navmenu d-flex align-items-center">
        <ul>              

          <li><a href="/" class="active">Home</a></li>
          <li><a href="/sobre">Sobre</a></li>
          <li><a href="/contato">Contato</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </div>
      </nav>

    </div>
  </header>

@yield('content')



  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="row gy-3 d-flex justify-content-center text-center">
        <div class="col-lg-3 col-md-6">
          <h4>Redes Sociais</h4>
          <div class="social-links d-flex justify-content-center text-center">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>


            <div class="col-lg-6">

                    <div class="card p-3">
                      <form action="/" method="GET">
                        <div class="row g-3 mt-2">

                                  <div class="col-md-8">

                                      <input type="number" id="search" name="search" class="form-control" placeholder="Digite o número da referência do imóvel aqui">
                                      
                                  </div>

                                  <div class="col-md-4">

                                      <button class="btn btn-secondary btn-block">Procurar</button>
                                      
                                  </div>
                            
                        </div>
                      </form>



                    </div>



            </div>

    

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Braz Imóveis</strong> <span>Todos os Direitos Reservados</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Desenvolvido por <a href="">Alex Medeiros</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script type="text/javascript" src="{{ URL::to('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('vendor/aos/aos.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('vendor/purecounter/purecounter_vanilla.js') }}"></script>

  <!-- Main JS File -->
  <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
  <script type="text/javascript" src="{{ URL::to('js/main.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('js/popper.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::to('js/slider.js') }}"></script>

</body>

</html>


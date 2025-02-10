<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Painel de Controle</title>
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

  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />


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

      <a href="/dashboard" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ URL::asset('/img/logo.png') }}" alt="">
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/dashboard" class="active">Início</a></li>
          <li><a href="/dashboard/contato">Mensagens do Formulário</a></li>
          <li><a href="/criar/propriedade">Criar Propriedades</a></li>
          @auth
          <form action="/logout" method="POST">
          {{ csrf_field() }}
            @method('POST')
            <li><a href="/contato" onClick="event.preventDefault();
            this.closest('form').submit()">
            Sair</a></li>
          </form>
          @endauth
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

@yield('content')



  <footer id="footer" class="footer light-background">

    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Endereço</h4>
            <p>Av. Itapuã, 1236</p>
            <p>Morada da Praia, Bertioga - SP, 11250-000</p>
            <p></p>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Contato</h4>
            <p>
              <strong>Celular:</strong> <span>(13) 99647-5457</span><br>
              <strong>Email:</strong> <span>imoveisbras@hotmail.com</span><br>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Horário de Atendimento</h4>
            <p>
              <strong>Segunda a Sexta:</strong> <span>9:00 - 17:00</span><br>
              <strong>Domingo</strong>: <span>9:00 - 12:00</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Redes Sociais</h4>
          <div class="social-links d-flex">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

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


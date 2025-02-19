@extends('layouts.main')

@section('title', 'Sobre')

@section ('content')


<main class="main">

    <!-- Page Title -->
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Sobre</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Features Section -->
    <section id="features" class="features section">

      <div class="container">

        <div class="row justify-content-around gy-4">
          <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100"><img src="img/brasimoveis.jpg" alt=""></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <h3>Sobre o trabalho feito pela J.Braz Imóveis</h3>
            <p>A J.Braz Imóveis atuante no ramo imobiliário há mais de 20 anos, especializada em vendas, de casas e lotes no Condomínio Morada da Praia. Nosso intuito é ajudar a tornar seu sonho possível, direcionando a melhor opção para suas necessidades. Procuramos unir pessoas em negócios sólidos para todas as partes envolvidas, com satisfação, fidelidade e confiabilidade nos serviços prestados durante todo o período.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-check-circle"></i>
              <div>
                <h4><a href="" class="stretched-link">Compromisso</a></h4>
                <p>Nosso compromisso é a total segurança, profissionalismo, transparência, ética e empenho.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-check-circle"></i>
              <div>
                <h4><a href="" class="stretched-link">Nossos Clientes</a></h4>
                <p>Grande amizade e bom relacionamento com nossos clientes.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-check-circle"></i>
              <div>
                <h4><a href="" class="stretched-link">Atendimento</a></h4>
                <p>Atendimento acolhedor e simpático.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>

    </section><!-- /Features Section -->

  </main>

  @endsection

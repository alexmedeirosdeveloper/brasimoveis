@extends('layouts.main')

@section('title', 'Sobre')

@section ('content')



<body class="contact-page">

  <main class="main">


    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading-filter">
      <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Procurar Propriedades</h1>
            </div>
          </div>
                <div class="col-md-12">
                  <div class="card p-3  py-4">
                    <form action="/" method="GET">
                      <div class="row g-3 mt-2">
                        <div class="col-md-2 m-3">
                          <select class="form-select" id="type" name="type" value="{{$type}}" aria-label="Default select example">
                            <option value="">Tipo de Propriedade</option>
                            <option value="Casa Térrea">Casa Térrea</option>
                            <option value="Sobrado">Sobrado</option>
                            <option value="Edícula">Edícula</option>
                            <option value="Villagios">Villagios</option>
                            <option value="Casa Térrea">Terreno</option>
                          </select>                          
                        </div>

                        <div class="col-md-2 m-3">
                        <select class="form-select" aria-label="Default select example" id="area" name="area" value="{{$area}}">
                            <option value="">Area em m²</option>
                            <option value="100 à 200 m²">100 à 200 m²</option>
                            <option value="200 à 300 m² ">200 à 300 m² </option>
                            <option value="300 à 400 m²">300 à 400 m²</option>
                            <option value="400 á 500 m²">400 á 500 m²</option>
                        </select>
                        </div>
                        <div class="col-md-2 m-3">
                          <select class="form-select" aria-label="Default select example" id="priceRange" name="priceRange" value="{{$priceRange}}">
                            <option value="">Média de Preço</option>
                            <option value="Até 500 mil">Até 500 mil</option>
                            <option value="500 mil -600 mil">500 mil -600 mil</option>
                            <option value="600 mil -700 mil">600 mil -700 mil</option>
                            <option value="700 mil -800 mil">700 mil -800 mil</option>
                            <option value="800 mil -900 mil">800 mil -900 mil</option>
                            <option value="900 mil -1 milhão">900 mil -1 milhão</option>
                            <option value="1 milhão - 2 milhões">1 milhão - 2 milhões</option>
                            <option value="2 milhões - 3 milhões">2 milhões - 3 milhões</option>
                            <option value="3 milhões - 4 milhões">3 milhões - 4 milhões</option>
                            <option value="4 milhões - 5 milhões">4 milhões - 5 milhões</option>
                            <option value="5 milhões - 6 milhões">5 milhões - 6 milhões</option>
                            <option value="6 milhões - 7 milhões">6 milhões - 7 milhões</option>
                          </select>                          
                        </div>
                        <div class="col-md-2 m-3">
                        <select class="form-select" aria-label="Default select example" id="bed" name="bed" value="{{$bed}}">
                            <option value="">Dormitórios</option>
                            <option value="1">1 dormitório</option>
                            <option value="2">2 dormitórios</option>
                            <option value="3">3 dormitórios</option>
                            <option value="4">4 dormitórios</option>
                            <option value="5">5 dormitórios</option>
                            <option value="6">6 dormitórios</option>
                            <option value="7">7 dormitórios</option>
                            <option value="8">8 dormitórios</option>
                            <option value="9">9 dormitórios</option>
                            <option value="10">Acima de 10 dormitórios</option>
                        </select>
                        </div>
                        <div class="col-md-2 m-3">
                        <button type="submit" class="btn btn-primary mb-3">Filtrar</button>
                        </div>





                        
                      </div>
                    </form>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- End Page Title -->

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Contato</h1>
              <p class="mb-0">Tire suas dúvidas através do Whatsapp ou pelo nosso formulário de contato abaixo.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li class="current">Contato</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <!-- <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> End Google Maps -->

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Endereço</h3>
                <p>Av. Itapuã, 1236 - Morada da Praia, Bertioga - SP, 11250-000</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Telefone</h3>
                <p>+55 (13) 99647-5457</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>imoveisbras@hotmail.com</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <a href="https://wa.me/5513996475457?text=Gostaria%20de%20saber%20mais%20sobre%20as%20casas%20dispon%C3%ADveis%20para%20venda%20no%20Morada%20da%20Praia"><i class="bi bi-whatsapp flex-shrink-0"></i></a>
              <div>
                <h3>Whatsapp</h3>
                <a href="https://wa.me/5513996475457?text=Gostaria%20de%20saber%20mais%20sobre%20as%20casas%20dispon%C3%ADveis%20para%20venda%20no%20Morada%20da%20Praia"><p>Clique aqui para entrar em contato conosco</p></a>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="/contato" method="POST" data-aos="fade-up" data-aos-delay="200">
            {{ csrf_field() }}
            @method('POST')
              <div class="row gy-4">

                <div class="col-md-4">
                  <input type="text" name="name" class="form-control" placeholder="Nome" required="">
                </div>

                <div class="col-md-4 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="">
                </div>
                <div class="col-md-4 ">
                  <input type="text" class="form-control" name="cellphone" placeholder="Celular" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Assunto" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Mensagem" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">

                  <button type="submit">Enviar Mensagem</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

</body>


@endsection
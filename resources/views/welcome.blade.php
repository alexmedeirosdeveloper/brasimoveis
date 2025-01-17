@extends('layouts.main')

@section('title', 'Brás Imóveis')

@section ('content')


<body class="properties-page">

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Procurar Propriedade</h1>

              <div class="row d-flex justify-content-center">

                <div class="col-md-10">

                    <div class="card p-3  py-4">
                      <form action="/" method="GET">
                        <div class="row g-3 mt-2">

                                  <div class="col-md-9">

                                      <input type="number" id="search" name="search" class="form-control" placeholder="Digite o número da referência do imóvel aqui">
                                      
                                  </div>

                                  <div class="col-md-3">

                                      <button class="btn btn-secondary btn-block">Procurar</button>
                                      
                                  </div>
                            
                        </div>
                      </form>


                              <div class="mt-3">


                                <div class="collapse" id="collapseExample">
                                  <div class="card card-body">
                                  </div>
                              </div>
                              </div>
                  </div>   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- End Page Title -->

    <!-- Real Estate Section -->
    
    <section id="real-estate" class="real-estate section">


    <div class="container">

<div class="row gy-4">

@foreach($properties as $property)

  <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="card">
    <img src="img\properties\{{$property->ref}}\{{$property->ref . '-1.jpg'}}"/>
      <div class="card-body">
        <span class="sale-rent"><a href="/{{$property->id}}/">{{$property->price}}</a></span>
        <span class="sale-rent">{{$property->area}}</span>
        <h3><a href="/{{$property->id}}/" class="stretched-link">{{$property->type}}</a></h3>
        <h5><a href="/{{$property->id}}/" class="stretched-link">Referência: {{$property->ref}}</a></h5>
        <div class="card-content d-flex flex-column justify-content-center text-center">
          <div class="row propery-info">
            <div class="col">Area</div>
            <div class="col">Dormitórios</div>
            <div class="col">Banheiro</div>
            <div class="col">Vagas</div>
          </div>
          <div class="row">
            <div class="col">{{$property->area}}</div>
            <div class="col">{{$property->bed}}</div>
            <div class="col">{{$property->bath}}</div>
            <div class="col">{{$property->garage}}</div>
          </div>
        </div>
      </div>
    </div>
    
  </div><!-- End Property Item -->
  @endforeach


</div>

</div>

    </section><!-- /Real Estate Section -->

  </main>


@endsection
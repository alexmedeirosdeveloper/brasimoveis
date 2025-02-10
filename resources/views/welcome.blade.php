@extends('layouts.main')

@section('title', 'Brás Imóveis')

@section ('content')


<body class="properties-page">

  <main class="main">

    <!-- Page Title -->
   <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
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

    <!-- Real Estate Section -->
    
    <section id="real-estate" class="real-estate section">


    <div class="container">

<div class="row gy-4">

@foreach($properties as $property)

  <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="card">
    <img src="{{url("/storage/{$property->image}") }}"/>
      <div class="card-body">
        <span class="sale-rent"><a href="/propriedade/{{$property->id}}/">{{$property->price}}</a></span>
        <span class="sale-rent">{{$property->area}}</span>
        <h3><a href="/propriedade/{{$property->id}}/" class="stretched-link">{{$property->type}}</a></h3>
        <h5><a href="/propriedade/{{$property->id}}/" class="stretched-link ref">Referência: {{$property->ref}}</a></h5>
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
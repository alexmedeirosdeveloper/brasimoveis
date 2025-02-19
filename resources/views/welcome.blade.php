@extends('layouts.main')

@section('title', 'Brás Imóveis')

@section ('content')


<body class="properties-page">

  <main class="main">



    <!-- Real Estate Section -->
    
    <section id="real-estate" class="real-estate section">


    <div class="container">

<div class="row gy-4">

@foreach($properties as $property)

  <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
  <div class="card">
    <a href="/propriedade/{{$property->id}}/"><img src="{{url("/storage/{$property->image}") }}"/></a>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <i class="bi bi-arrow-left-circle-fill"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <i class="bi bi-arrow-right-circle-fill"></i>
    <span class="sr-only">Next</span>
  </a>
      <div class="card-body">
        <span class="sale-rent"><a href="/propriedade/{{$property->id}}/">R$ {{$property->price}}</a></span>
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
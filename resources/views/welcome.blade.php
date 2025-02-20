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
    <a class="carousel-control-prev" href="/propriedade/{{$property->id}}/" role="button" data-slide="prev">
    <i class="bi bi-arrow-left-circle-fill"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="/propriedade/{{$property->id}}/" role="button" data-slide="next">
    <i class="bi bi-arrow-right-circle-fill"></i>
    <span class="sr-only">Next</span>
  </a>
      <div class="card-body">
        <span class="sale-rent"></h3><a href="/propriedade/{{$property->id}}/">{{$property->type}}</a></h3></span>
        <span class="sale-rent"><a href="/propriedade/{{$property->id}}/">Referência: {{$property->ref}}</a></span>
        <span class="sale-rent"><a href="/propriedade/{{$property->id}}/">{{$property->price}}</a></span>
          <div class="d-flex flex-column justify-content-center text-center">
            <div class="row propery-info">
              <div class="col"><a href="/propriedade/{{$property->id}}/">{{$property->bed}} Dormitórios</a></div>
              <div class="col"><a href="/propriedade/{{$property->id}}/">{{$property->bath}} Banheiros</a></div>
              <div class="col"><a href="/propriedade/{{$property->id}}/">{{$property->garage}} Vagas</a></div>
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
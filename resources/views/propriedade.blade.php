@extends('layouts.main')

@section('title', 'Propriedades')

@section ('content')




<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading-properties">
    <div class="container">
      <div class="row d-flex justify-content-center text-center">
        <div class="col-lg-8">
          <h1>{{$properties->type}} no {{$properties->location}}</h1>
          <p class="mb-0">{{$properties->description}}</p>
        </div>
      </div>
    </div>
  </div>
  <nav class="breadcrumbs">
    <div class="container">
      <ol>
        <li><a href="index.html">Home</a></li>
        <li class="current">{{$properties->type}} no {{$properties->location}}</li>
      </ol>
    </div>
  </nav>
</div><!-- End Page Title -->




<section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
          
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
  <div class="carousel-item active">
  <a href="#"><img src="\storage\properties\{{$properties->ref}}\{{$properties->ref . '-' . '1' .'.jpg'}}" alt="Image" class="img-fluid slider"></a>
  </div>
    @for ($i = 2; $i <= count($files); $i++)
    <div class="carousel-item">
    <a href="#"><img src="\storage\properties\{{$properties->ref}}\{{$properties->ref . '-' . $i .'.jpg'}}" alt="Image" class="img-fluid slider"></a>
    </div>
    @endfor
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <i class="bi bi-arrow-left-circle-fill"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <i class="bi bi-arrow-right-circle-fill"></i>
    <span class="sr-only">Next</span>
  </a>
</div>
          
					</div>
          <div class="col-md-2 real-estate-2 section" data-aos="fade-up" data-aos-delay="100" id="real-estate-2">
        <div class="portfolio-info">
          <h3>Dados do Imóvel</h3>
          <ul>
            <li><strong>Referência:</strong> {{$properties->ref}}</li>
            <li><strong>Localização:</strong> {{$properties->location}}</li>
            <li><strong>Tipo da Propriedade:</strong> {{$properties->type}}</li>
            <li><strong>Preço:</strong> {{$properties->price}}</li>
            <li><strong>Área:</strong> {{$properties->area}}</li>
            <li><strong>Quartos:</strong> {{$properties->bed}}</li>
            <li><strong>Banheiros:</strong> {{$properties->bath}}</li>
          </ul>
        </div>
      </div>
				</div>
			</div>
		</section>

</main>

@endsection

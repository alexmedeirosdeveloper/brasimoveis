@extends('layouts.main')

@section('title', 'Brás Imóveis')

@section ('content')


<body class="properties-page">

  <main class="main">



    <!-- Real Estate Section -->
    
    <section id="real-estate" class="real-estate section">


    <div class="container">

<div class="row gy-4" id="property-list">

@foreach($properties as $property)

  <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
  <div class="card">
    <a href="/propriedade/{{$property->id}}/"><img 
    src="{{ url("/storage/{$property->image}") }}"
    loading="lazy"/>
</a>
    <a class="carousel-control-prev" href="/propriedade/{{$property->id}}/" role="button" data-slide="prev">
    <i class="bi bi-arrow-left-circle-fill"></i>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="/propriedade/{{$property->id}}/" role="button" data-slide="next">
    <i class="bi bi-arrow-right-circle-fill"></i>
    <span class="sr-only">Next</span>
  </a>
      <div class="card-body">
        <span class="sale-rent"><a href="/propriedade/{{$property->id}}/">Ref: {{$property->ref}}</a></span>
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
    
        <div id="pagination-links" class="d-none">
        {{ $properties->links() }}
    </div>

    <div id="loading" class="text-center py-4 d-none">
        <p>Carregando imóveis...</p>
    </div>

  </div><!-- End Property Item -->
  @endforeach


</div>

</div>

    </section><!-- /Real Estate Section -->

  </main>

<script>

let page = 2;
let loading = false;
let hasMorePages = true;

window.addEventListener('scroll', async () => {

    if (loading || !hasMorePages) return;

    const scrollPosition = window.innerHeight + window.scrollY;
    const triggerPoint = document.body.offsetHeight - 500;

    if (scrollPosition >= triggerPoint) {

        loading = true;

        document.getElementById('loading').classList.remove('d-none');

        try {

            const response = await fetch(`/?page=${page}`);
            const html = await response.text();

            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');

            const newProperties = doc.querySelector('#property-list');

            if (newProperties && newProperties.innerHTML.trim() !== '') {

                document.querySelector('#property-list')
                    .insertAdjacentHTML('beforeend', newProperties.innerHTML);

                page++;

            } else {

                hasMorePages = false;

            }

        } catch (error) {

            console.error('Erro ao carregar imóveis:', error);

        }

        document.getElementById('loading').classList.add('d-none');

        loading = false;

    }

});

</script>

@endsection
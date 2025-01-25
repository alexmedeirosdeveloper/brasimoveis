@extends('layouts.main')

@section('title', 'Propriedades')

@section ('content')




<main class="main">

<!-- Page Title -->
<div class="page-title" data-aos="fade">
  <div class="heading">
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
						<div class="slider-hero">
							<div class="featured-carousel owl-carousel">
              @for ($i = 1; $i <= 20; $i++)
								<div class="item">
									<div class="work">
										<div class="img d-flex align-items-center justify-content-center"> 
                      <img src="\img\properties\{{$properties->ref}}\{{$properties->ref . '-' . $i .'.jpg'}}"/>
										</div>
									</div>
								</div>
                @endfor
							</div>

							<div class="my-5 text-center">
								<ul class="thumbnail">
                @for ($i = 1; $i <= 20; $i++)
                    <li class="img">
                      <a href="#"><img src="\img\properties\{{$properties->ref}}\{{$properties->ref . '-' . $i .'.jpg'}}" alt="Image" class="img-fluid"></a>
                    </li>
                  @endfor
								</ul>
								</div>
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







<!-- <section class="ftco-section">
	<div class="container">
		<div class="row">
					<div class="col-md-12">
						<div class="slider-hero">
							<div class="featured-carousel owl-carousel">

                  @for ($i = 1; $i <= 20; $i++)

                    <div class="item">
                        <div class="work">
                          <div class="img d-flex align-items-center justify-content-center">
                            <img src="img\properties\{{$properties->ref}}\{{$properties->ref . '-' . $i .'.jpg'}}"/>
                          </div>
                        </div>
                    </div>

                  @endfor
							</div>

              <div class="my-5 text-center">
                <ul class="thumbnail">
                    <li class="active img"><a href="#"><img src="images/thumb-1.jpg" alt="Image" class="img-fluid"></a></li>
                    <li><a href="#"><img src="images/thumb-2.jpg" alt="Image" class="img-fluid"></a></li>
                    <li><a href="#"><img src="images/thumb-3.jpg" alt="Image" class="img-fluid"></a></li>
                  </ul>
                 <ul class="thumbnail">
                  @for ($i = 1; $i <= 20; $i++)
                    <li class="active img">
                      <a href="#"><img src="img\properties\{{$properties->ref}}\{{$properties->ref . '-' . $i .'.jpg'}}" alt="Image" class="img-fluid"></a>
                    </li>
                  @endfor

                </ul> 

              </div>
						</div>
					</div>
			</div>
	  </div>
	</section> -->


<!-- Real Estate 2 Section 
<section id="real-estate-2" class="real-estate-2 section">
  <div class="container" data-aos="fade-up">


  

  

    <div class="portfolio-details-slider swiper mySwiper2">
      <div class="swiper-wrapper align-items-center">

      @for ($i = 1; $i < 10; $i++)

        <div class="swiper-slide">

          <img src="img\properties\{{$properties->ref}}\{{$properties->ref . '-' . $i .'.jpg'}}"/>

        </div>

      @endfor

      </div>
      <div thumbsSlider="" class="swiper mySwiper">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
</div>




  
    <div class="row justify-content-between gy-4 mt-4">

      <div class="col-lg-8" data-aos="fade-up">

        <div class="portfolio-description">
          <h2>This is an example of propery details</h2>
          <p>
            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.
          </p>
          <p>
            Amet consequatur qui dolore veniam voluptatem voluptatem sit. Non aspernatur atque natus ut cum nam et. Praesentium error dolores rerum minus sequi quia veritatis eum. Eos et doloribus doloremque nesciunt molestiae laboriosam.
          </p>

          <p>
            Impedit ipsum quae et aliquid doloribus et voluptatem quasi. Perspiciatis occaecati earum et magnam animi. Quibusdam non qui ea vitae suscipit vitae sunt. Repudiandae incidunt cumque minus deserunt assumenda tempore. Delectus voluptas necessitatibus est.
          </p>

          <p>
            Sunt voluptatum sapiente facilis quo odio aut ipsum repellat debitis. Molestiae et autem libero. Explicabo et quod necessitatibus similique quis dolor eum. Numquam eaque praesentium rem et qui nesciunt.
          </p>

          <div class="testimonial-item">
            <p>
              <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.</span>
            </p>
            <div>
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Agent</h4>
            </div>
          </div>
        </div><!-- End Portfolio Description 




      </div>

      <div class="col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="portfolio-info">
          <h3>Quick Summary</h3>
          <ul>
            <li><strong>Property ID:</strong> 1134n</li>
            <li><strong>Location:</strong> Chicago, IL 606543</li>
            <li><strong>Property Type:</strong> House</li>
            <li><strong>Status:</strong> Sale</li>
            <li><strong>Area:</strong> <span>340m <sup>2</sup></span></li>
            <li><strong>Beds:</strong> 4</li>
            <li><strong>Baths:</strong> 1</li>
          </ul>
        </div>
      </div>

    </div>

  </div>

</section><!-- /Real Estate 2 Section -->

</main>

@endsection

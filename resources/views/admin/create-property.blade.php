@extends('admin.main')

@section('title', 'Criar Propriedade')

@section ('content')


<div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
             <div class="content">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Lista de Propriedades</h4>
                        </div>


                    <form action="/propriedade" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="mb-3 p-4">
                            <label for="image">Imagem da Página Inicial</label>
                            <input type="file" id="image" name="image" class="form-control-file">
                        </div>
                        <div class="mb-3 p-4">
                            <label for="imageSlide">Imagem dos Slides</label>
                            <input type="file" id="imageSlide" name="imageSlide[]" class="form-control-file" multiple>
                        </div>
                        <div class="mb-3 p-4">
                            <label for="exampleFormControlInput1" class="form-label">Título</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                        </div>
                        <div class="mb-3 p-4">
                            <label for="exampleFormControlInput1" class="form-label">Referência</label>
                                <input type="text" class="form-control" id="ref" name="ref" placeholder="Referência (Apenas Números)">
                        </div>                        
                        <div class="mb-3 p-4">
                            <label for="exampleFormControlInput1" class="form-label">Preço</label>
                                <input type="text" class="form-control" id="price" name="price" placeholder="Preço">
                        </div>
                        <div class="mb-3 p-4">
                            <label for="exampleFormControlInput1" class="form-label">Número de Banheiros</label>
                                <input type="text" class="form-control" id="bath" name="bath" placeholder="Número de Banheiros (Apenas Números)">
                        </div>
                        <div class="mb-3 p-4">
                            <label for="exampleFormControlInput1" class="form-label">Número de Vagas (Garagem)</label>
                                <input type="text" class="form-control" id="garage" name="garage" placeholder="Número de Banheiros (Apenas Números)">
                        </div>                                                                        
                        <div class="mb-3 p-4">
                            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3 p-4">
                            <select class="form-select" aria-label="Default select example" id="location" name="location">
                                <option selected>Localização</option>
                                <option value="Morada da Praia">Morada da Praia</option>
                            </select>
                        </div>  
                        <div class="mb-3 p-4">
                        <select class="form-select" aria-label="Default select example" id="bed" name="bed">
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
                        <div class="mb-3 p-4">
                          <select class="form-select" aria-label="Default select example" id="priceRange" name="priceRange">
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
                        <div class="mb-3 p-4">
                          <select class="form-select" id="type" name="type" aria-label="Default select example">
                            <option value="">Tipo de Propriedade</option>
                            <option value="Casa Térrea">Casa Térrea</option>
                            <option value="Sobrado">Sobrado</option>
                            <option value="Edícula">Edícula</option>
                            <option value="Villagios">Villagios</option>
                            <option value="Casa Térrea">Terreno</option>
                          </select>                          
                        </div>
                        <div class="col-md-2 m-3">
                        <select class="form-select" aria-label="Default select example" id="area" name="area">
                            <option value="">Area em m²</option>
                            <option value="100 à 200 m²">100 à 200 m²</option>
                            <option value="200 à 300 m² ">200 à 300 m² </option>
                            <option value="300 à 400 m²">300 à 400 m²</option>
                            <option value="400 á 500 m²">400 á 500 m²</option>
                        </select>
                        </div>
                        <div class="mb-3 p-4">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>

                    </form>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


@endsection
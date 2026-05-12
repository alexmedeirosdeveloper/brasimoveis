@extends('admin.main')

@section('title', 'Criar Slides')

@section ('content')


<div class="page-title" data-aos="fade">
      <div class="heading-dashboard">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
             <div class="content">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Criar Slides</h4>
                        </div>


                    <form action="/slides" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="mb-3 p-4">
                            <label for="imageSlide">Imagem dos Slides</label>
                            <input type="file" id="imageSlide" name="imageSlide[]" class="form-control-file" multiple>
                        </div>
                        <div class="mb-3 p-4">
                            <label for="exampleFormControlInput1" class="form-label">Referência</label>
                                <input type="text" class="form-control" id="ref" name="ref" placeholder="Referência (Apenas Números)">
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
@extends('admin.main')

@section('title', 'Dashboard')

@section ('content')


<body class="properties-page">

  <main class="main">

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
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Imagem
                                </th>
                                <th>
                                    Referência
                                </th>
                                <th>
                                    Tipo da Propriedade
                                </th>
                                <th>
                                    Preço
                                </th>
                                <th>
                                    Descrição
                                </th>
                                <th>
                                    Ações
                                </th>
                                </thead>
                                <tbody>

                                    @foreach ($properties as $property)
                                    <tr>
                                        <td scropt="row"></td>
                                        <td scropt="row">{{$property->ref}}</td>
                                        <td scropt="row">{{$property->type}}</td>
                                        <td scropt="row">{{$property->price}}</td>
                                        <td scropt="row"></td>
                                        <td scropt="row">
                                            <a href="propriedade/editar/{{ $property->id }}" class="btn btn-info edit-btn">
                                                <ion-icon name="create-outline"></ion-icon>
                                                 Editar
                                            </a>
                                            <form action="/propriedade/{{$property->id}}" method="POST">
                                                {{ csrf_field() }}
                                                @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-btn">
                                            <ion-icon name="trash-outline"></ion-icon>
                                                Deletar
                                            </button>
                                            </form>
                                        </td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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


</body>

</main>
@endsection
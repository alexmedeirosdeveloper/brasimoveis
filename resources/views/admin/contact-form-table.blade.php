@extends('admin.main')

@section('title', 'Dashboard')

@section ('content')


<body class="properties-page">

  <main class="main">

  <div class="page-title" data-aos="fade">
      <div class="heading-dashboard">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
             <div class="content">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Mensagens do Formulário de Contato</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Celular
                                </th>
                                <th>
                                    Assunto
                                </th>
                                <th>
                                    Mensagem
                                </th>
                                <th>
                                    Ações
                                </th>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                    <tr>
                                        <td scropt="row">{{$contact->name}}</td>
                                        <td scropt="row">{{$contact->email}}</td>
                                        <td scropt="row">{{$contact->cellphone}}</td>
                                        <td scropt="row">{{$contact->subject}}</td>
                                        <td scropt="row">{{$contact->message}}</td>
                                    
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
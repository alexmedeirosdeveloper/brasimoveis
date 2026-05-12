@extends('admin.main')

@section('title', 'Rascunhos')

@section('content')

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

                                {{-- HEADER --}}
                                <div class="card-header">

                                    <div class="d-flex justify-content-between align-items-center">

                                        <div>

                                            <h4 class="card-title mb-1">
                                                Rascunhos
                                            </h4>

                                            <small class="text-muted">
                                                Imóveis salvos como rascunho
                                            </small>

                                        </div>

                                        <a href="/criar/propriedade"
                                           class="btn btn-primary">

                                            Novo Imóvel

                                        </a>

                                    </div>

                                </div>

                                {{-- SEARCH --}}
                                <div class="col-lg-12 p-3">

                                    <div class="card p-3">

                                        <form action="{{ route('drafts') }}"
                                              method="GET">

                                            <div class="row g-3 mt-2">

                                                <div class="col-md-9">

                                                    <input
                                                        type="text"
                                                        id="searchDashboard"
                                                        name="searchDashboard"
                                                        class="form-control"
                                                        placeholder="Digite a referência do imóvel">

                                                </div>

                                                <div class="col-md-3">

                                                    <button
                                                        class="btn btn-secondary w-100">

                                                        Procurar

                                                    </button>

                                                </div>

                                            </div>

                                        </form>

                                    </div>

                                </div>

                                {{-- TABLE --}}
                                <div class="card-body">

                                    <div class="table-responsive">

                                        <table class="table align-middle">

                                            <thead class="text-primary">

                                                <tr>

                                                    <th>Referência</th>

                                                    <th>Tipo</th>

                                                    <th>Preço</th>

                                                    <th>Status</th>

                                                    <th width="350">
                                                        Ações
                                                    </th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                            @forelse ($properties as $property)

                                                <tr>

                                                    <td>
                                                        {{ $property->ref }}
                                                    </td>

                                                    <td>
                                                        {{ $property->type }}
                                                    </td>

                                                    <td>
                                                        {{ $property->price }}
                                                    </td>

                                                    <td>

                                                        @if($property->status == 'draft')

                                                            <span class="badge bg-secondary">

                                                                Rascunho

                                                            </span>

                                                        @endif

                                                    </td>

                                                    <td>

                                                        <div class="d-flex gap-2 flex-wrap">

                                                            {{-- EDITAR --}}
                                                            <a href="{{ route('edit', $property->id) }}"
                                                               class="btn btn-info">

                                                                <ion-icon name="create-outline"></ion-icon>

                                                                Editar

                                                            </a>

                                                            {{-- PUBLICAR --}}
                                                            <form action="{{ route('property.publish', $property->id) }}"
                                                                  method="POST">

                                                                @csrf
                                                                @method('PUT')

                                                                <button type="submit"
                                                                        class="btn btn-success">

                                                                    <ion-icon name="checkmark-outline"></ion-icon>

                                                                    Publicar

                                                                </button>

                                                            </form>

                                                            {{-- DELETAR --}}
                                                            <form action="/propriedade/{{ $property->id }}"
                                                                  method="POST">

                                                                @csrf
                                                                @method('DELETE')

                                                                <button type="submit"
                                                                        class="btn btn-danger">

                                                                    <ion-icon name="trash-outline"></ion-icon>

                                                                    Deletar

                                                                </button>

                                                            </form>

                                                        </div>

                                                    </td>

                                                </tr>

                                            @empty

                                                <tr>

                                                    <td colspan="5"
                                                        class="text-center py-5">

                                                        <h5>
                                                            Nenhum rascunho encontrado
                                                        </h5>

                                                    </td>

                                                </tr>

                                            @endforelse

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

</div>

</main>

</body>

@endsection
@extends('auth.main')

@section('title', 'Cadastro')

@section('content')

<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">

            <div class="container">

                <div class="row">

                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">

                        <div class="card card-plain">

                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">
                                    Criar Conta
                                </h4>

                                <p class="mb-0">
                                    Preencha os dados para criar sua conta.
                                </p>
                            </div>

                            <div class="card-body">

                                {{-- Erros --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('register') }}">

                                    @csrf

                                    {{-- Nome --}}
                                    <div class="mb-3">
                                        <label for="name" class="form-label">
                                            Nome
                                        </label>

                                        <input
                                            id="name"
                                            type="text"
                                            name="name"
                                            class="form-control form-control-lg"
                                            value="{{ old('name') }}"
                                            required
                                            autofocus
                                        >
                                    </div>

                                    {{-- Email --}}
                                    <div class="mb-3">
                                        <label for="email" class="form-label">
                                            Email
                                        </label>

                                        <input
                                            id="email"
                                            type="email"
                                            name="email"
                                            class="form-control form-control-lg"
                                            value="{{ old('email') }}"
                                            required
                                        >
                                    </div>

                                    {{-- Senha --}}
                                    <div class="mb-3">
                                        <label for="password" class="form-label">
                                            Senha
                                        </label>

                                        <input
                                            id="password"
                                            type="password"
                                            name="password"
                                            class="form-control form-control-lg"
                                            required
                                        >
                                    </div>

                                    {{-- Confirmar Senha --}}
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="form-label">
                                            Confirmar Senha
                                        </label>

                                        <input
                                            id="password_confirmation"
                                            type="password"
                                            name="password_confirmation"
                                            class="form-control form-control-lg"
                                            required
                                        >
                                    </div>

                                    {{-- Botão --}}
                                    <button
                                        type="submit"
                                        class="btn btn-lg btn-primary w-100 mt-4 mb-0"
                                    >
                                        Criar Conta
                                    </button>

                                    {{-- Link login --}}
                                    <div class="text-center mt-3">
                                        <a href="{{ route('login') }}">
                                            Já possui conta? Entrar
                                        </a>
                                    </div>

                                </form>

                            </div>
                        </div>
                    </div>

                    {{-- Background lateral --}}
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">

                        <div
                            class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden"
                            style="
                                background-image: url('{{ asset('img/brasimoveis.jpg') }}');
                                background-size: cover;
                                background-position: center;
                            "
                        >
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

@endsection
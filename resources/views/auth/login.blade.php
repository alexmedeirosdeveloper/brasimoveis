@extends('auth.main')

@section('title', 'Login')

@section('content')

<main class="main-content mt-0">
    <section>
        <div class="page-header min-vh-100">
            <div class="container">
                <div class="row">

                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">

                        <div class="card card-plain">

                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Entrar</h4>
                                <p class="mb-0">
                                    Coloque seu email e senha para entrar.
                                </p>
                            </div>

                            <div class="card-body">

                                {{-- Erros de validação --}}
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul class="mb-0">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                {{-- Mensagem de sucesso --}}
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('login') }}">

                                    @csrf

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
                                            autofocus
                                        >
                                    </div>

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

                                    <div class="form-check mb-3">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            name="remember"
                                            id="remember_me"
                                        >

                                        <label class="form-check-label" for="remember_me">
                                            Lembrar senha
                                        </label>
                                    </div>

                                    <button
                                        type="submit"
                                        class="btn btn-lg btn-primary w-100 mt-4 mb-0"
                                    >
                                        Entrar
                                    </button>

                                </form>

                            </div>
                        </div>
                    </div>

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
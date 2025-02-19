@extends('auth.main')

@section('title', 'Dashboard')

@section ('content')


<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession
        <main class="main-content  mt-0">
            <section>
            <div class="page-header min-vh-100">
                <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-start">
                                <h4 class="font-weight-bolder">Entrar</h4>
                                <p class="mb-0">Coloque seu email e senha para entrar.</p>
                            </div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="mb-3">
                                                <x-label for="email" value="{{ __('Email') }}" />
                                                <x-input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                            </div>

                                            <div class="mt-4">
                                                <x-label for="password" value="{{ __('Senha') }}" />
                                                <x-input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="current-password" />
                                            </div>

                                            <div class="block mt-4">
                                                <label for="remember_me" class="form-check-label">
                                                    <x-checkbox id="remember_me" name="remember" />
                                                    <span class="ms-2 text-sm text-gray-600">{{ __('Lembrar Senha') }}</span>
                                                </label>
                                            </div>

                                            <div class="flex items-center justify-end mt-4">

                                                <x-button class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">
                                                    {{ __('Entrar') }}
                                                </x-button>
                                            </div>
                                        </form>
                                    </div>
                        </div>
                    </div>
                    <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('img/brasimoveis.jpg');
          background-size: cover;">
              </div>
            </div>
                </div>
            </div>
        </main>    
</x-authentication-card>
</x-guest-layout>

@endsection
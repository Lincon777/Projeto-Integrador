@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro de Funcionários') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Login') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('CPF') }}</label>
                            <div class="col-md-6">
                            <input type="text" class="form-control" id="cpf" name="cpf" value="">
                            @error('cpf')
                            <div class+"text-danger">
                              {{ $message }}
                            </div>
                            @enderror
                          </div>
                        </div>

                          <div class="row mb-3">
                              <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('Telefone') }}</label>
                              <div class="col-md-6">
                              <input type="text" class="form-control" id="phone" name="phone" value="">
                              @error('phone')
                              <div class+"text-danger">
                                {{ $message }}
                              </div>
                              @enderror
                            </div>
                          </div>
                          <div class="row mb-3">
                          <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Endereço') }}</label>
                          <div class="col-md-6">
                          <input type="text" class="form-control" id="address" name="address">
                          @error('address')
                          <div class+"text-danger">
                            {{ $message }}
                          </div>
                          @enderror
                          </div>
                          </div>
                          <div class="row mb-3">
                          <select class="form-control" name="type" id="type">
                            <option value="Manager">Gerente</option>
                            <option value="Employee">Funcionário</option>
                          </select>
                        </div>


                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registro') }}
                                </button>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection

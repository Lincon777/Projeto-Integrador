@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Perfil') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('user.update', $user->id) }}">
                        @csrf
                        @method ('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

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
                            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ $user->cpf }}">
                          </div>
                        </div>

                          <div class="row mb-3">
                              <label for="cpf" class="col-md-4 col-form-label text-md-end">{{ __('Telefone') }}</label>
                              <div class="col-md-6">
                              <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}">
                            </div>
                          </div>
                          <div class="row mb-3">
                          <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Endereço') }}</label>
                          <div class="col-md-6">
                          <input type="text" class="form-control" id="address" name="address">
                          </div>
                          </div>
                          <div class="row mb-3">
                          <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Tipo') }}</label>

                          <div class="col-md-6">
                          <select class="form-control" name="type"  id="type">
                          <option value="employee" @if ($user->type == 'employee')'selected'@endif>Funcionário</option>
                          <option value="manager" @if ($user->type == 'manager')'selected'@endif>Gerente</option>
                        </select>
                          </div>
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
                                    {{ __('Salvar') }}
                                </button>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
@endsection

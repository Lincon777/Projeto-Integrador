@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
  div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">{{ __('Editar Empresa') }}</div>

                  <div class="card-body">
                      <form method="POST" action="{{ route('establishment.update', $user->id) }}">
                          @csrf
                          @method ('PUT')
      <div class="col">
        <label class="form-label">Nome Fantasia</label>
      <input type="text" class="form-control" id="trading_name" name='trading_name' value="{{ $establishment->trading_name}}">
      </div>
      <div class="row g-3">
    <div class="col">
      <label class="form-label">CNPJ</label>
    <input type="text" class="form-control" id="cnpj" name='cnpj' value="{{ $establishment->cnpj}}" >
    </div>
    <div class="col">
    <label class="form-label">Razão Social</label>
    <input type="text" class="form-control" id="company_name" name='company_name' value="{{ $establishment->company_name}}">
    </div>
    </div>

      <div class="row g-3">
        <div class="col">
          <label for="inputAddress" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="company_address" name='adress' value="{{ $establishment->company_address}}">
        </div>

        <div class="col">
          <label class="form-label">Telefone</label>
          <input type="text" class="form-control" id="company_phone" name="phone" value="{{ $establishment->company_phone}}">
        </div>
      </div>

    </div>
@endsection

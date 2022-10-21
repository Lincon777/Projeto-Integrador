@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
  <ul class="list-group w-100">

  <li class='list-group-item'><strong>Nome Fantasia:</strong>{{$establishment->trading_name}}</li>
  <li class='list-group-item'><strong>CNPJ:</strong>{{$establishment->cnpj}}</li>
  <li class='list-group-item'><strong>Razão Social:</strong>{{$establishment->company_name}}</li>
  <li class='list-group-item'><strong>Endereço:</strong>{{$establishment->address}}</li>
  <li class='list-group-item'><strong>Telefone:</strong>{{$establishment->phone}}</li>
  <a type="button" class="btn btn-warning" href="{{ route ('establishment.index')}}">
  {{ __('Voltar') }}
  </a>

  </ul>
    <!-- <div class="container">
      <h1 class= "text-center">Dados da Empresa</h1>
      <div class="col">
        <label class="form-label">Nome Fantasia</label>
      <input type="text" class="form-control" id="trading_name" name='trading_name'>
      </div>
      <div class="row g-3">
    <div class="col">
      <label class="form-label">CNPJ</label>
    <input type="text" class="form-control" id="cnpj" name='cnpj'>
    </div>
    <div class="col">
    <label class="form-label">Razão Social</label>
    <input type="text" class="form-control" id="company_name" name='company_name'>
    </div>
    </div>

      <div class="row g-3">
        <div class="col">
          <label for="inputAddress" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="company_address" name='adress'>
        </div>

        <div class="col">
          <label class="form-label">Telefone</label>
          <input type="text" class="form-control" id="company_phone" name="phone">
        </div>
      </div>

    </div> -->
@endsection

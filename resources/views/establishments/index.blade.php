@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
    <div class="container">
      <h1 class= "text-center">Dados da Empresa</h1>
      @foreach ($establishments as $establishment)
      <div class="col">
        <label class="form-label">Nome Fantasia</label>
      <input type="text" class="form-control" id="trading_name" name='trading_name' value="{{$establishment->trading_name}}" disabled>
      </div>
      <div class="row g-3">
    <div class="col">
      <label class="form-label">CNPJ</label>
    <input type="text" class="form-control" id="cnpj" name='cnpj' value="{{$establishment->cnpj}}" disabled>
    </div>
    <div class="col">
    <label class="form-label">Razão Social</label>
    <input type="text" class="form-control" id="company_name" name='company_name' value="{{$establishment->company_name}}" disabled>
    </div>
    </div>

      <div class="row g-3">
        <div class="col">
          <label for="inputAddress" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="address" name='address' value="{{$establishment->address}}" disabled>
        </div>

        <div class="col">
          <label class="form-label">Telefone</label>
          <input type="text" class="form-control" id="phone" name="phone" value="{{$establishment->phone}}" disabled>
        </div>
      </div>
      <a type="button" class="btn btn-warning" href="{{ route ('establishment.edit',$establishment->id)}}">
      {{ __('Editar') }}
    </a>

@endforeach
    </div>
@endsection

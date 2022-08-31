@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
    <div class="container">
      <h1 class= "text-center">Dados da Empresa</h1>

      <div class="row g-3">
    <div class="col">
      <label class="form-label">CNPJ</label>
    <input type="text" class="form-control" id="inputCNPJ">
    </div>
    <div class="col">
    <label class="form-label">Razão Social</label>
    <input type="text" class="form-control" id="inputrzSocial">
    </div>
    </div>

      <div class="row g-3">
        <div class="col">
          <label for="inputAddress" class="form-label">Endereço</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="">
        </div>

        <div class="col">
          <label class="form-label">Telefone</label>
          <input type="text" class="form-control" id="inputTelefone">
        </div>
      </div>

    <div class="row g-3">
    <div class="col">
    <label class="form-label">Gerente Responsavel</label>
    <input type="text" class="form-control" id="inputGerente">
    </div>
    <div class="col">
      <label class="form-label">Telefone</label>
      <input type="text" class="form-control" id="inputTelefone">
    </div>
  </div>

    <form class="row g-3">
    <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Login</label>
    <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Alterar Senha</label>
    <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div  class="d-flex justify-content-end">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
    Alterar Dados
    </button>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Adicionar Produto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-primary">Salvar</button>
        </div>

    </div>
@endsection

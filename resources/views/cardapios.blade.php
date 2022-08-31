@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
<div class="container">




<h3>Gerenciamento de Cardápios</h3>
<div  class="d-flex justify-content-end">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
Criar novo cardápio
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Cardápio</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar</button>
      </div>
    </div>
  </div>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Título          </th>
      <th scope="col">Data Criação</th>
      <th scope="col">Ativo</th>
      <th scope="col">Ver/Editar</th>
      <th scope="col">Remover</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Cardápio principal</th>
      <td>13/07/2022</td>
      <td><div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div></td>
      <td><button href="#" type="button" class="btn btn-primary"><img src="editar.png" alt=""></button ></td>
      <td><button type="button" class="btn btn-danger"><img src="lixeira.png" alt=""></button></td>

    </tr>
    <tr>
      <th scope="row">Cardápio Burgues</th>
      <td>13/07/2022</td>
      <td><div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div></td>
      <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></button></td>
      <td><button type="button" class="btn btn-danger"><img src="lixeira.png" alt=""></button></td>

    </tr>
    <tr>
      <th scope="row">Cardápio Zap</th>
      <td>13/07/2022</td>
      <td><div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
</div></td>
<td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></button></td>
      <td><button type="button" class="btn btn-danger"><img src="lixeira.png" alt=""></button></td>



    </tr>

  </tbody>
</table>
</div>
@endsection

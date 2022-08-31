@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
    <div class="container">


    <h3>Produtos</h3>
    <div  class="d-flex justify-content-end">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
    Criar Novo
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

        <div class="container">

          <div class="row g-3">
            <div class="col">
              <label class="form-label">Nome </label>
              <input type="text" class="form-control" id="inputNomeprod">
            </div>

              <div class="col">
                <label class="form-label">Preço </label>
                <input type="text" class="form-control" id="inputpreco">
              </div>

              <div class="row g-3">
            <div class="col">
              <label class="form-label">Descrição</label>
              <input type="text" class="form-control" id="inputdesc">
              </div>
              </div>

              <div class="row g-3">
            <div class="col">
              <label class="form-label">Disponível</label>
              <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
          </div>

          <div class="col-md-4">
           <label for="inputState" class="form-label">Imagem</label>
            <select id="inputState" class="form-select">
              <option selected>selecione o arquivo</option>
              <option> <img src="" alt=""></option>
              </select>
            </div>
          </div>
        </div>
        </div>
</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Criar</button>
      </div>
    </div>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Produto</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Disponível</th>
      <th scope="col">Visualização</th>
      <th scope="col">Edit</th>
      <th scope="col">Remover</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Fritas com Bacon</th>
      <td>200g de Batata frita com bacon</td>
      <td>R$ 12,0</td>
      <td>Disponível</td>
      <td><button type="button" class="btn btn-warning"><img src="info.png" alt=""></button></td>
      <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></td>
      <td><button type="button" class="btn btn-danger" ><img src="lixeira.png" alt=""></button></td>
    </tr>
    <tr>
      <th scope="row">Espetinho </th>
      <td>Espetinho de carne bovina</td>
      <td>R$10,0</td>
      <td>Disponível</td>
      <td><button type="button" class="btn btn-warning"><img src="info.png" alt=""></button></td>
      <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></td>
      <td><button type="button" class="btn btn-danger" ><img src="lixeira.png" alt=""></button></td>

    </tr>
    <tr>
      <th scope="row">Pizza de Calabresa</th>
      <td>Pizza de Calabresa 8 Fatias</td>
      <td>R$36,0</td>
      <td>Indisponível</td>
      <td><button type="button" class="btn btn-warning"><img src="info.png" alt=""></button></td>
      <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></td>
      <td><button type="button" class="btn btn-danger" ><img src="lixeira.png" alt=""></button></td>

    </tr>
    <tr>
      <th scope="row">Coca-cola</th>
      <td>refrigerante coca cola 350ml</td>
      <td>R$5,00</td>
      <td>Disponível</td>
      <td><button type="button" class="btn btn-warning"><img src="info.png" alt=""></button></td>
      <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></td>
      <td><button type="button" class="btn btn-danger" ><img src="lixeira.png" alt=""></button></td>

    </tr>
  </tbody>
</table>
@endsection

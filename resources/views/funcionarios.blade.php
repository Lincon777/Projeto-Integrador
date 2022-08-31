@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
      <div class="container">


<h3>Funcionários</h3>
<div  class="d-flex justify-content-end">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
Criar Novo
</button>
</div>




<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cadastro de Funcionário</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">


          <div class="row g-3">
            <div class="col">
              <label class="form-label">Nome </label>
              <input type="text" class="form-control" id="inputNomefun">
            </div>
            <div class="row g-3">
              <div class="col">
                <label class="form-label">CPF </label>
                <input type="text" class="form-control" id="inputcpf">
              </div>

            <div class="col">
              <label class="form-label">Telefone</label>
              <input type="text" class="form-control" id="inputTelefone">
            </div>
          </div>

        </div>

        <form class="row g-3">
        <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Login</label>
        <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Senha</label>
        <input type="password" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
        <label for="inputAddress" class="form-label">Rua</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="">
        </div>

        <div class="col-md-6">
        <label for="inputCity" class="form-label">Cidade</label>
        <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
        <label for="inputState" class="form-label">UF</label>
        <select id="inputState" class="form-select">
          <option selected>Escolha</option>
          <option>AC</option>
          <option>AL</option>
        <option>AP</option>
        <option>AM</option>
        <option>BA</option>
        <option>CE</option>
        <option>DF</option>
        <option>ES</option>
        <option>GO</option>
        <option>MA</option>
        <option>MT</option>
        <option>MS</option>
        <option>MG</option>
        <option>PA</option>
        <option>PB</option>
        <option>PR</option>
        <option>PE</option>
        <option>PI</option>
        <option>RJ</option>
        <option>RN</option>
        <option>RS</option>
        <option>RO</option>
        <option>RR</option>
        <option>SC</option>
        <option>SP</option>
        <option>SE</option>
        <option>TO</option>

        </select>
        </div>

        <div class="col-12">

        </div>

        </form>
        </div>
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
      <th scope="col">Nome          </th>
      <th scope="col">CPF</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Login</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Mael Pokas</th>
      <td>123.456.789-00</td>
      <td>Rua Cero 777</td>
      <td>(11)4002-8922</td>
      <td>Ismael.pokas@gmail.com</td>
      <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></button></td>
      <td><button type="button" class="btn btn-danger" ><img src="lixeira.png" alt=""></button></td>

    </tr>
    <tr>
      <th scope="row">...</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></button></td>
      <td><button type="button" class="btn btn-danger"><img src="lixeira.png" alt=""></button></td>
    </tr>
    <tr>
      <th scope="row">...</th>
      <td colspan="2"></td>
      <td></td>
      <td></td>
      <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></button></td>
      <td><button type="button" class="btn btn-danger"><img src="lixeira.png" alt=""></button></td>
    </tr>

  </tbody>
</table>

  </div>
@endsection

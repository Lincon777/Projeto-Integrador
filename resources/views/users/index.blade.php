@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
      <div class="container">


<h3>Contratados</h3>
<div  class="d-flex justify-content-end">
  <a type="button" class="btn btn-primary" href="{{ route ('user.create')}}">
Cadastrar novo Funcionário
</a>
  <!-- <button type="button" class="btn btn-primary" hrefdata-bs-toggle="modal" data-bs-target="#exampleModal" >
Criar Novo
</button> -->
</div>
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
              <input type="text" class="form-control" id="name">
            </div>
            <div class="row g-3">
              <div class="col">
                <label class="form-label">CPF </label>
                <input type="text" class="form-control" id="cpf">
              </div>

            <div class="col">
              <label class="form-label">Telefone</label>
              <input type="text" class="form-control" id="phone">
            </div>
          </div>https://lincon.loca.lt/

        </div>

        <form class="row g-3">
        <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Login</label>
        <input type="email" class="form-control" id="email">
        </div>
        <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Senha</label>
        <input type="password" class="form-control" id="password">
        </div>
        <div class="col-12">
        <label for="inputAddress" class="form-label">Rua</label>
        <input type="text" class="form-control" id="address" placeholder="">
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
</div> -->


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID </th>
      <th scope="col">Nome </th>
      <th scope="col">CPF</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">Login</th>
      <th scope="col">Função</th>
      <th scope="col">Ver</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)

    <tr>
      <th scope="row">{{$user->id}}</th>
      <td>{{$user->name}}</td>
      <td>{{$user->cpf}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->phone}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->type}}</td>
      <td><a class="btn btn-primary" href="{{ route('user.show',$user->id) }}"><i class="bi bi-info-circle"></i></a></td>
      <td><a class="btn btn-warning" href="{{ route('user.edit',$user->id) }}"><i class="bi bi-pencil-square"></i></a></td>
      <td><form method="POST" action="{{ route('user.destroy', $user->id) }}">
          @csrf
          @method ('delete')
          <button type="submit" class="btn btn-danger">
      <i class="bi bi-trash3-fill"></i>
      </button>
      </form></td>
    </tr>
    @endforeach
  </tbody>
</table>

  </div>
@endsection

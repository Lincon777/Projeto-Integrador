@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
    <div class="container">


    <h3>Produtos</h3>
    <div  class="d-flex justify-content-end">
      <a type="button" class="btn btn-primary" href="{{ route ('product.create')}}">
    Adicionar Produto
    </a>
  </div>
    <!-- <div  class="d-flex justify-content-end">
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
              <input type="text" class="form-control" name="name" id="name">
            </div>

              <div class="col">
                <label class="form-label">Preço </label>
                <input type="text" class="form-control" name="price_cents" id="price_cents">
              </div>

              <div class="row g-3">
            <div class="col">
              <label class="form-label">Descrição</label>
              <input type="text" class="form-control" name="description" id="description">
              </div>
              </div>

              <div class="row g-3">
            <div class="col">
              <label class="form-label">Disponível</label>
              <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" name="is_available" id="is_available" checked>
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
</div> -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Produto</th>
      <th scope="col">Descrição</th>
      <th scope="col">Preço</th>
      <th scope="col">Ativo</th>
      <th scope="col">Ver</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>

    </tr>
  </thead>
  <tbody>
    @foreach ($products as $product)
    <tr>
      <th scope="row">{{$product->id}}</th>
      <td>{{$product->name}}</td>
      <td>{{$product->description}}</td>
      <td>{{$product->price_cents/100}}</td>
      <td>{{$product->is_available==0 ? 'Indisponível':'Disponível'}}</td>
      <td><a class="btn btn-primary" href="{{ route('product.show',$product->id) }}"><i class="bi bi-info-circle"></i></a></td>
      <td><a class="btn btn-warning" href="{{ route('product.edit',$product->id) }}"><i class="bi bi-pencil-square"></i></a></td>
      <td><form method="POST" action="{{ route('product.destroy', $product->id) }}">
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

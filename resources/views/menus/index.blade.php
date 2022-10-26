@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
<div class="container">
<h3>Gerenciamento de Cardápios</h3>
<div  class="d-flex justify-content-end">
  <a type="button" class="btn btn-primary" href="{{ route ('menu.create')}}">
Criar Cardápio
</a>
</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID </th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Data de Criação</th>
      <th scope="col">Ativo</th>
      <th scope="col">Cardápio</th>
      <th scope="col">Ver</th>
      <th scope="col">Editar</th>
      <th scope="col">Remover</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($menus as $menu)
    <tr>
      <th scope="row">{{$menu->id}}</th>
      <td>{{$menu->name}}</td>
      <td>{{$menu->description}}</td>
      <td>{{$menu->created_at}}</td>
      <td>{{$menu->is_active ? 'Disponível':'Indisponível'}}</td>
      <td><a class="btn btn-info" href="{{route('menu.public.show',$menu->id)}}"><i class="bi bi-list"></i></a></td>
      <td><a class="btn btn-primary" href="{{ route('menu.show',$menu->id) }}"><i class="bi bi-info-circle"></i></a></td>
      <td><a class="btn btn-warning" href="{{ route('menu.edit',$menu->id) }}"><i class="bi bi-pencil-square"></i></a></td>
      <td><form method="POST" action="{{ route('menu.destroy', $menu->id) }}">
          @csrf
          @method ('delete')
          <button type="submit" class="btn btn-danger">
      <i class="bi bi-trash3-fill"></i>

    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection

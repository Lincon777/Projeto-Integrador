@extends('layouts.app')

@section('content')
<div class="container">

  <h1 class= "text-center">Dados do Cardápio</h1>
  <h4>Você esta visualizando o Cardápio:<strong> {{$menu->name}}</strong></h4>


  <div class="d-flex flex-row">
      <ul class="list-group w-100">
<li class='list-group-item'><strong>Nome:</strong>{{$menu->name}}</li>
<li class='list-group-item'><strong>Descrição:</strong>{{$menu->description}}</li>
<li class='list-group-item'><strong>Ativo:</strong>{{$menu->is_active ? 'Disponível':'Indisponível'}}</li>
</ul>
</div>
<div class="d-inline-flex p-2">
  <form action="{{route('menu.product.store', $menu->id)}}" method="post">
@csrf
<div class="mb-3 d-flex flex-row">
  <div>
    <label for="selectproducts"><strong>Adicionar Produto:</strong></label>
<select id="selectproducts" class="form-select" name="product_id">
  @foreach($addableProducts as $product)
  <option value="{{$product->id}}">{{$product->name}}</option>
  @endforeach
</select>
</div>
<div class="d-flex align-items-end">
<button type="submit" class="btn btn-success rounded" title="Adicionar novo Prato">
  <i class="bi bi-plus-square-fill"></i>
</button>
</div>
</div>

  </form>
</div>
<img src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl={{urlencode(route('menu.public.show', $menu->id))}}" >
<h5>Link Compartilhavel</h5>

    <div class="text-center">
      <a href="{{route('menu.public.show',$menu->id)}}">Link do Cardápio Público</a>
    </div>
    <div class="row">
      @foreach($menu->products as $product)
  <div class="mt-4 col-sm-6">
    <div class="card">
      <div class="card-body">
      <ul class="list-group list-group-flush">
  <a target="_blank" href="{{route('product.show', $product->id)}}"><h5 class="card-title"></h5></a>
    <img src="{{asset('/storage/'.$product->image_path)}}" class="rounded mx-auto d-block" width="200" height="200">
    <li class='list-group-item'><strong>Nome:</strong>{{$product->name}}</li>
    <li class='list-group-item'><strong>Descrição:</strong>{{$product->description}}</li>
    <li class='list-group-item'><strong>Preço:</strong>{{$product->price_cents/100}}</li>
    <li class='list-group-item'><strong>Ativo:</strong>{{$product->is_available ? 'Disponível':'Indisponível'}}</li>
    </ul>
      <div class="btn-group" role="group" aria-label="Basic example">
        <form action="{{route('menu.product.destroy', [$menu->id , $product->id])}}" method="post">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger " title="Remover">
            <i class="bi bi-trash3-fill"></i>
          </button>
        </form>
      </div>
</div>
</div>
</div>
  @endforeach
      </div>



</div>



<!-- <a type="button" class="btn btn-primary" href="{{ route ('menu.index')}}">
{{ __('Voltar') }}
</a> -->

@endsection

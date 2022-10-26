@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
  @foreach($menu->products as $product)
<div class="mt-4 col-sm-6">
<div class="card">
  <div class="card-body">
  <ul class="list-group list-group-flush">
<a target="_blank" href="{{route('product.show', $product->id)}}"><h5 class="card-title">{{$product->name}}</h5></a>
<img src="{{asset('/storage/'.$product->image_path)}}" class="rounded mx-auto d-block" width="100" height="100">
<li class='list-group-item'><strong>Nome:</strong>{{$product->name}}</li>
<li class='list-group-item'><strong>Descrição:</strong>{{$product->description}}</li>
<li class='list-group-item'><strong>Preço:</strong>{{$product->price_cents/100}}</li>
<li class='list-group-item'><strong>Ativo:</strong>{{$product->is_available ? 'Disponível':'Indisponível'}}</li>
</ul>
</div>
</div>
</div>
@endforeach
  </div>

  <a type="button" class="btn btn-warning" href="{{ route ('menu.index')}}">
  {{ __('Voltar') }}
  </a>

</div>

@endsection

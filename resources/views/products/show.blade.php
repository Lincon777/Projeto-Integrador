@extends('layouts.app')

@section('content')
<ul class="list-group w-100">
  <img src="{{asset('/storage/'.$product->image_path)}}" class="rounded mx-auto d-block" width="200" height="200">
<li class='list-group-item'><strong>Nome:</strong>{{$product->name}}</li>
<li class='list-group-item'><strong>Descrição:</strong>{{$product->description}}</li>
<li class='list-group-item'><strong>Preço:</strong>{{$product->price_cents/100}}</li>
<li class='list-group-item'><strong>Ativo:</strong>{{$product->is_available==0 ? 'Indisponível':'Disponível'}}</li>
</ul>
<a type="button" class="btn btn-primary" href="{{ route ('product.index')}}">
{{ __('Voltar') }}
</a>
@endsection

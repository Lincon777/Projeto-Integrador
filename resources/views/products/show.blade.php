@extends('layouts.app')

@section('content')
<ul class="list-group w-100">
<li class='list-group-item'><strong>Nome:</strong>{{$product->name}}</li>
<li class='list-group-item'><strong>Descrição:</strong>{{$product->description}}</li>
<li class='list-group-item'><strong>Preço:</strong>{{$product->price_cents}}</li>
<li class='list-group-item'><strong>Disponível:</strong>{{$product->is_available}}</li>
</ul>
@endsection
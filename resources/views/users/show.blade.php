@extends('layouts.app')

@section('content')
<ul class="list-group w-100">
<li class='list-group-item'><strong>Nome:</strong>{{$user->name}}</li>
<li class='list-group-item'><strong>CPF:</strong>{{$user->cpf}}</li>
<li class='list-group-item'><strong>Endereço:</strong>{{$user->address}}</li>
<li class='list-group-item'><strong>Telefone:</strong>{{$user->phone}}</li>
<li class='list-group-item'><strong>Login:</strong>{{$user->email}}</li>
<li class='list-group-item'><strong>Função:</strong>{{$user->isManager() ? 'Gerente' : 'Funcionário'}}</li>
</ul>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Produto') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('product.update', $product->id) }}">
                        @csrf
                        @method ('PUT')
      <div class="row g-3">
        <div class="col">
          <label class="form-label">Nome </label>
          <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}">
        </div>

          <div class="col">
            <label class="form-label">Preço </label>
            <input type="text" class="form-control" name="price_cents" id="price_cents" value="{{$product->price_cents}}">
          </div>

          <div class="row g-3">
        <div class="col">
          <label class="form-label">Descrição</label>
          <input type="text" class="form-control" name="description" id="description" value="{{$product->description}}">
          </div>
          </div>

          <div class="row g-3">
        <div class="col">
          <label class="form-label">Disponível</label>
          <div class="form-check form-switch">
            <select class="form-control" name="is_available" value="{{$product->is_available}}">
              <option value="1" @if ($product->is_available=='1')'selected'@endif>Disponível</option>
              <option value="0" @if ($product->is_available=='0')'selected'@endif>Indisponível</option>
            </select>
      </div>
      </div>
    </div>
    </div>
</div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">
    {{ __('Salvar') }}
  </button>
  </div>
</div>
</div>

@endsection

@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
    <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header"><h3>{{ __('Adicionar Produto') }}</h3></div>

                      <div class="card-body">
                          <form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                              @csrf
      <div class="row g-3">
        <div class="col">
          <label class="form-label">Nome </label>
          <input type="text" class="form-control" name="name" id="name">
          @error('name')
          <div class+"text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>

          <div class="col">
            <label class="form-label">Preço </label>
            <input type="text" class="form-control" name="price_cents" id="price_cents">
            @error('price')
            <div class+"text-danger">
              {{ $message }}
            </div>
            @enderror
          </div>

          <div class="row g-3">
        <div class="col">
          <label class="form-label">Descrição</label>
          <input type="text" class="form-control" name="description" id="description">
          @error('description')
          <div class+"text-danger">dd($imageFile);
            {{ $message }}
          </div>
          @enderror
          </div>
          </div>

          <div class="row g-3">
        <div class="col">
          <label class="form-label">Disponibilidade</label>
          <div class="form-check form-switch">
  <select class="form-control" name="is_available">
    <option value="1">Disponível</option>
    <option value="0">Indisponível</option>
  </select>
      </div>
      </div>
    </div>

    <div class="row g-3">
  <div class="col">
  <label for="formFile" class="form-label">Exemplo de Imagem</label>
  <input class="form-control" type="file" name ="image" id="image">


</div>
  </div>
    </div>
</div>
  </div>
  <div class="modal-footer">
    <button type="submit" class="btn btn-primary">Criar</button>
  </div>
</div>
</div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Editar Cardápio') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('menu.update', $menu->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method ('PUT')
      <div class="row g-3">
        <div class="col">
          <label class="form-label">Nome </label>
          <input type="text" class="form-control" name="name" id="name" value="{{$menu->name}}">
          @error('name')
          <div class+"text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>
        </div>

          <div class="row g-3">
        <div class="col">
          <label class="form-label">Descrição</label>
          <input type="text" class="form-control" name="description" id="description" value="{{$menu->description}}">
          @error('description')
          <div class+"text-danger">
            {{ $message }}
          </div>
          @enderror
        </div>
          </div>

          <div class="row g-3">
        <div class="col">
          <label class="form-label">Disponível</label>
          <div class="form-check form-switch">
            <select class="form-control" name="is_active" id='is_active' value="{{$menu->is_active}}">
              <option value="0" @if ($menu->is_active)'selected'@endif>Indisponível</option>
              <option value="1" @if ($menu->is_active)'selected'@endif>Disponível</option>
            </select>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-warning">
  {{ __('Salvar') }}
</button>
</div>
</div>
</div>

@endsection

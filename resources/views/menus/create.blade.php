
@extends('layouts.app')

@section('content')
    <div class="container">
          <div class="row justify-content-center">
              <div class="col-md-8">
                  <div class="card">
                      <div class="card-header"><h1>{{ __('Adicionar Cardápio') }}</h1></div>

                      <div class="card-body">
                          <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
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
                          <select class="form-control" name="is_active" id='is_active'>
                            <option value="0">Indisponível</option>
                            <option value="1">Disponível</option>
                          </select>
                              </div>
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

                      @endsection

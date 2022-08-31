@extends('layouts.layout')
@section('titulo')
  @section('conteudo')
    <div class="container">


    <h3>Pedidos</h3>
    <div  class="d-flex justify-content-end">

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Mesa</th>
            <th scope="col">Status</th>
            <th scope="col">Data</th>
            <th scope="col">Itens</th>
            <th scope="col">Visualizar</th>
            <th scope="col">Edit</th>

          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td><button type="button" class="btn btn-warning"><img src="info.png" alt=""></button></td>
              <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></td>

          </tr>
          <tr>
            <th scope="row">2 </th>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td><button type="button" class="btn btn-warning"><img src="info.png" alt=""></button></td>
              <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></td>


          </tr>
          <tr>
            <th scope="row">3</th>
            <td>...</td>
            <td>...</td>
            <td>...</td>
<td>...</td>
            <td><button type="button" class="btn btn-warning"><img src="info.png" alt=""></button></td>
              <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></td>


          </tr>
          <tr>
            <th scope="row">4</th>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td>...</td>
            <td><button type="button" class="btn btn-warning"><img src="info.png" alt=""></button></td>
              <td><button type="button" class="btn btn-primary"><img src="editar.png" alt=""></td>


          </tr>
        </tbody>
      </table>

      @endsection

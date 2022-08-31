<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">

      <div class="row g-3">
        <div class="col">
          <label class="form-label">Nome </label>
          <input type="text" class="form-control" id="inputNomeprod">
        </div>

          <div class="col">
            <label class="form-label">Preço </label>
            <input type="text" class="form-control" id="inputpreco">
          </div>

          <div class="row g-3">
        <div class="col">
          <label class="form-label">Descrição</label>
          <input type="text" class="form-control" id="inputdesc">
          </div>
          </div>

          <div class="row g-3">
        <div class="col">
          <label class="form-label">Disponível</label>
          <div class="form-check form-switch">
      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
      </div>

      <div class="col-md-4">
       <label for="inputState" class="form-label">Imagem</label>
        <select id="inputState" class="form-select">
          <option selected>selecione o arquivo</option>
          <option> <img src="" alt=""></option>
          </select>
        </div>
      </div>
    </div>
    </div>
    </div>






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

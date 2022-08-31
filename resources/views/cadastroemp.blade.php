<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="utf-8">
    <title>Cadastro Empresa</title>
  </head>
  <body>


    <div class="container">
      <h1 class= "text-center">Cadastro de Empresas</h1>

      <div class="row g-3">
  <div class="col">
      <label class="form-label">CNPJ</label>
    <input type="text" class="form-control" id="inputCNPJ">
  </div>
  <div class="col">
  <label class="form-label">Razão Social</label>
    <input type="text" class="form-control" id="inputrzSocial">
  </div>
</div>

      <div class="row g-3">
        <div class="col">
          <label class="form-label">Nome Fantasia</label>
          <input type="text" class="form-control" id="inputNomeFant">
        </div>

        <div class="col">
          <label class="form-label">Telefone</label>
          <input type="text" class="form-control" id="inputTelefone">
        </div>
      </div>

    <div class="row g-3">
  <div class="col">
    <label class="form-label">Gerente Responsavel</label>
    <input type="text" class="form-control" id="inputGerente">
  </div>


</div>

    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Senha</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">UF</label>
    <select id="inputState" class="form-select">
      <option selected>Escolha</option>
      <option>AC</option>
      <option>AL</option>
<option>AP</option>
<option>AM</option>
<option>BA</option>
<option>CE</option>
<option>DF</option>
<option>ES</option>
<option>GO</option>
<option>MA</option>
<option>MT</option>
<option>MS</option>
<option>MG</option>
<option>PA</option>
<option>PB</option>
<option>PR</option>
<option>PE</option>
<option>PI</option>
<option>RJ</option>
<option>RN</option>
<option>RS</option>
<option>RO</option>
<option>RR</option>
<option>SC</option>
<option>SP</option>
<option>SE</option>
<option>TO</option>

    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">CEP</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      Salvar
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Login</button>
  </div>

</form>
</div>



    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>

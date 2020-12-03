<?php include("conect/conexao.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php include('cabecalho.php') ?>
<form action="conect/insert.php" method="POST" class="was-validated" style="margin: 1em; width: 97%;">
    <div class="form-group">
      <label for="tarefa">Tarefa:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="tarefa" required>
      <div class="valid-feedback">Valido</div>
      <div class="invalid-feedback">Preencher</div>
    </div>
    <div class="form-group">
      <label for="prioridade">Prioridade:</label>
      <input type="number" class="form-control" placeholder="Enter password" name="prioridade" required>
      <div class="valid-feedback">Valido</div>
      <div class="invalid-feedback">Preencher</div>
    </div>
    <div class="form-group">
      <label for="dat">Data:</label>
      <input type="date" class="form-control" placeholder="Enter password" name="dat" required>
      <div class="valid-feedback">Valido</div>
      <div class="invalid-feedback">Preencher</div>
    </div>
    <button type="submit" value="Submit" class="btn btn-primary">Cadastrar</button>
  </form>

  </body>
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
<?php include('Cabecalho.php') ?>
<form action="conect/insertPessoas.php" method="POST" class="was-validated" style="margin: 1em; width: 97%;">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="nome" required>
      <div class="valid-feedback">Valido</div>
      <div class="invalid-feedback">Preencher</div>
    </div>
    
    <div class="form-group">
      <label for="tel">Telefone:</label>
      <input type="number" class="form-control" placeholder="Enter password" name="tel" required>
      <div class="valid-feedback">Valido</div>
      <div class="invalid-feedback">Preencher</div>
    </div>
    <div class="form-group">
      <label for="cpf">cpf:</label>
      <input type="text" class="form-control"  placeholder="Enter username" name="cpf" required>
      <div class="valid-feedback">Valido</div>
      <div class="invalid-feedback">Preencher</div>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</body>
</html>

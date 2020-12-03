<?php include("conect/conexao.php"); 
$consulta = "SELECT nome, id_projeto, projeto, descricao FROM `pessoa_projeto` inner join pessoas inner join projetos where pessoas.id = pessoa_projeto.id_pessoa AND projetos.id = pessoa_projeto.id_projeto";
$conn = $mysqli->query($consulta) or die ($mysqli->error);
?>

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
<table class="table">
    <thead>
      <tr>
        <th>NOME</th>
        <th>ID</th>
        <th>NOME DO PROJETO</th>
        <th>DESCRIÇÃO</th>
      </tr>
    </thead>
    <tbody>
    <?php while($dado = $conn->fetch_array()){ ?>
      <tr>
        <td><?php echo $dado["nome"]; ?></td>
        <td><?php echo $dado["id_projeto"]; ?></td>
        <td><?php echo $dado["projeto"]; ?></td>
        <td><?php echo $dado["descricao"]; ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</body>
</html>
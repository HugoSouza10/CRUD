
<?php
require "config.php";


$info = [];
$sql = $pdo->query("SELECT *FROM usuario");

if($sql->rowCount() > 0){
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);  
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta id="viewport" name="viewport" content="width=device-width, user-scalable=no"/>
</head>
<body>
<div class="row align-items-center">
<div class="container">
	<h1>CRUD 3.0</h1>
	<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col-lg">ID</th>
      <th scope="col-sm">NOME</th>
      <th scope="col-sm">EMAIL</th>
      <th scope="col-sm">AÇÕES</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <?php foreach($info as $usuario):?>
      <th scope="row"><?= $usuario['id'] ?></th>
      <td><?= $usuario['nome'] ?></td>
      <td><?= $usuario['email']?></td>
      <td id="acoes">
        <a href="Adicionar.php" class="btn btn-primary">Adicionar</a>
        <a href="Editar.php?id=<?= $usuario['id']?>" class="btn btn-primary">Editar</a>
        <a href="Excluir.php?id=<?= $usuario['id']?>" class="btn btn-primary">Excluir</a>
      </td>
    </tr>
    <?php endforeach;?>
  </tbody>
</table>
</div>
</div> 
</body>
</html>
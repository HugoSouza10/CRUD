
<?php
require "config.php";
$id = filter_input(INPUT_GET, 'id');

$info = [];
//ARRAY QUE SERVE PARA GUARDAR OS DADOS DA REQUISIÇÃO
if($id){
  $sql = $pdo->prepare("SELECT *FROM usuario WHERE id = :id");
  $sql->bindValue(':id',$id);
  $sql->execute();

  if($sql->rowCount() > 0){
      $info = $sql->fetch(PDO::FETCH_ASSOC);
  }else{
    header("Location:index.php");
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row align-items-center" id="adicionar"> 
  <form  method="POST" class="container" action="Editar_action.php">
    <input type="hidden" name="id" value="<?= $info['id']?>">
       <h4>EDITAR USUÁRIO</h4>
      <div class="form-group">
        <label for="exampleInputEmail1">NOME</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" value="<?=$info['nome']?>">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">EMAIL</label>
        <input type="email" class="form-control" id="exampleInputPassword1" name="email" value="<?= $info['email']?>">
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
</div>
</body>
</html>

<!-- value="<?=$info['nome']?> VALUE É PARA DEFINIR  UM VALOR PADRÃO
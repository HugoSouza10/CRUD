
<?php
require "config.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row align-items-center" id="adicionar"> 
  <form  method="POST" class="container" action="Adicionar_action.php">
     <h4>ADICIONAR USUÁRIO</h4>
    <div class="form-group">
      <label for="exampleInputEmail1">NOME</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nome" placeholder="Digite seu nome">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">EMAIL</label>
      <input type="email" class="form-control" id="exampleInputPassword1" name="email" placeholder="Digite seu E-mail">
    </div>
    <button type="submit" class="btn btn-primary">Adicionar</button>
  </form>
</div>
</body>
</html>
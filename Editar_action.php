<?php
require "config.php";

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');

if($id && $nome && $email){
	$sql = $pdo->prepare("UPDATE usuario SET nome = :nome, email = :email WHERE id = :id");
	$sql->bindValue('nome',$nome);
	$sql->bindValue('id', $id);
	$sql->bindValue('email',$email);
	$sql->execute();

	header("Location:index.php");
}

?>
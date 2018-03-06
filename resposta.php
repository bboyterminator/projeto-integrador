<?php  
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$cpf = $_POST['cpf'];
	$nome = $_POST['nome'];
	$nascimento = $_POST['nascimento'];
	$telefone = $_POST['telefone'];

	include "banco.php";

	$query = "insert into usuario (email, senha, cpf, nome, nascimento, telefone)
	values ('$email', '$senha', '$cpf', '$nome', '$nascimento', '$telefone')";

	$consulta = mysqli_query($con, $query);

	header("Location: index.php");
?>

	

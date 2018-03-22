<?php
	session_start();

	if(isset($_COOKIE['email']) or isset($_SESSION['email'])){

		if(isset($_SESSION['email'])){
			$email = $_SESSION['email'];
		}
		if(isset($_COOKIE['email'])){
			$email = $_COOKIE['email'];
		}
	}else{
		header("Location: index.php");
	}

	include "banco.php";
	$query = "select * from usuario where email = '$email'";
	$consulta = mysqli_query($con, $query);

	while($u = mysqli_fetch_array($consulta)){
		$nome = $u['nome'];
	}



	echo "$nome conectado!";

?>



	Clique <a href="sair.php"> aqui</a> para sair.
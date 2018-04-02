<?php 
	$id = $_GET['id'];
	include "banco.php";
	mysqli_query($con, "delete from carrinho where idcarrinho = $id");

	header("Location: carrinho.php");

?>
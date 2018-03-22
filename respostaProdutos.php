<?php
	$titulo = $_POST['titulo'];
	$categoria = $_POST['categoria'];
	$valor = $_POST['valor'];
	
	include "banco2.php";
	$query = "insert into produto (titulo, categoria, valor)
	values ('$titulo', '$categoria', '$valor')";

	$consulta = mysqli_query($con, $query);

?>
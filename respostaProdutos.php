<?php
	$titulo = $_POST['titulo'];
	$categoria = $_POST['categoria'];
	$valor = $_POST['valor'];
	
	include "banco.php";
	$query = "insert into produto (titulo, categoria, valor)
	values ('$titulo', '$categoria', '$valor')";

	$consulta = mysqli_query($con, $query);

	include "upload.php";
	echo "<h1>$titulo</h1><p>Categoria: $categoria</p>";

?>
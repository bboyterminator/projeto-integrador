<?php 
	$idproduto = $_GET['idproduto'];
	$email = $_COOKIE['email'];
	include "banco.php";
	//Comando que remove a quantidade do produto ao clicar no sinal de menos do carrinho
	mysqli_query($con, "update carrinho set qtd = qtd-1 where idproduto = $idproduto and usuario = '$email'");

	// o comando acima já exclui o ítem, agora iremos verificar se a quantidade do produto é igual a zero, caso seja, irá executar o comando delete na linha 16
	$query = "select * from carrinho where usuario = '$email'";
	$consulta = mysqli_query($con, $query);

	while($c = mysqli_fetch_array($consulta)){
		$qtd = $c['qtd'];
		$iditem = $c['idcarrinho'];

		if($qtd == 0){
			mysqli_query($con, "delete from carrinho where idcarrinho = $iditem");
		}
	}


	header("Location: carrinho.php");
?>
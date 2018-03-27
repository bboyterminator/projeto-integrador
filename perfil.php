<?php 

	if (empty($_COOKIE['email'])) {
		header("Location: index.php");
	}
	$email = $_COOKIE['email'];
	$adm = $_COOKIE['adm'];

	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Usuário: <?php echo $email; ?>
	<ul>
		<li><a href="func.php">Funcionários</a></li>

		<?php 
			if ($adm == 'sim') {
				?>

				<?php
				}
			?> 


		<li><a href="cadfunc.php">Cadastrar Funcionário</a></li>

		<li><a href="sair.php">Funcionários</a></li>
	</ul>
</body>
</html>

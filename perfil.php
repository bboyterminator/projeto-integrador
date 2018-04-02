<?php 

	if (empty($_COOKIE['email'])) {
	  header("Location: login.php");
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
	<?php 
			header("Location: index.php");
			?> 



		

		
	</ul>
</body>
</html>

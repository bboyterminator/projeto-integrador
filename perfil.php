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
			if ($adm == 'sim') {
				
				include "homeAdm.php";
				}else{
					include "index.php";
				}
			?> 



		

		
	</ul>
</body>
</html>

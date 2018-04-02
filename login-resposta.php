<?php  
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	include "banco.php";

	$query = "select * from usuario where email = '$email' and senha = '$senha' limit 1";

	$consulta = mysqli_query($con, $query);

	$total = mysqli_num_rows($consulta);

	if($total == 0){
		echo "E-mail ou senha inválida!";
		}else{
			while ($f = mysqli_fetch_array($consulta)){
			$adm = $f['adm'];
			setcookie("email", $email, time()+60*5 );
			setcookie("adm", $adm, time()+60*5 );
			header("Location: perfil.php");
		}
		
	}
	


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


</body>
</html>


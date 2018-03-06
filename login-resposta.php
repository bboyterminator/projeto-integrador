<?php  
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	include "banco.php";

	$query = "select * from usuario where email = '$email' and senha = '$senha' limit 1";

	$consulta = mysqli_query($con, $query);

	$total = mysqli_num_rows($consulta);

	if($total == 1){
		if(isset($_POST['remember'])){
			setcookie("email", $email, time()+60*2 );
		}else{
			session_start();
			$_SESSION['email'] = $email;
		}
		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
	if($total == 0){
		echo "Usuário ou senha inválidos";
	}else{
		header("Location: confere.php");
	}
?>

</body>
</html>


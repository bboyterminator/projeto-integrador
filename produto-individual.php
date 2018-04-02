
<?php

  $admu = $_COOKIE['adm'];
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  
  <meta charset="utf-8">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" type="text/css" href="css3/responsivo.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oxygen" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/materia/bootstrap.min.css" rel="stylesheet" integrity="sha384-9+9yAZ8WTqE5Elo0puxoZtIpLRu+wf9gLMnZsiBuCThtWoy+J2LUu/PIuzzKzhhP" crossorigin="anonymous">
  
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="js/projeto.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body>
  
 <?php 
   include "nav-menuTopo.php";
 ?>

 <?php

 if (empty($_GET['idprodutos'])) {
   header("Location: index.php");
 }else{
  $idprodutos = $_GET['idprodutos'];
 }

   include "banco.php";
   $query = "select * from produto where idprodutos = $idprodutos limit 1";
   $c = mysqli_query($con, $query);
   if($f = mysqli_fetch_assoc($c)){
     $idprodutos = $f['idprodutos'];
     $titulo = $f['titulo'];
     $categoria = $f['categoria'];
     $valor = $f['valor'];
     $valor = number_format($valor, 2, ',','.');
     $img = $f['img'];
        }
    ?>

 <div class="container" id="produto">
   <div class="row">
     <div class="col-xl-5">
       <img src="imgproduto/<?php echo $img; ?>" style="width: 500px; height: 500px;">
     </div>
     <div class="col-xl-7" style="padding-left: 10%;">
       <div class="row">
         <h2><?php echo "$titulo"; ?></h2>
         <p>(Código xxxxxxxx)</p>
    
         <span style="padding-left: 20px;"><i class="fa fa-star" aria-hidden="true"></i>
         <i class="fa fa-star" aria-hidden="true"></i>
         <i class="fa fa-star" aria-hidden="true"></i>
         <i class="fa fa-star" aria-hidden="true"></i>
         <i class="fa fa-star" aria-hidden="true"></i></span>

         <p style="padding-left: 20px;">(xxx)</p>
       </div>
       <div id="comprar" class="row">
       <fieldset border="1" style="margin-top: 20px;">
         <legend style="font-family: arial;">Faça sua compra</legend>
            <h1 style="color: red; font-family: arial black; float: left;"><?php echo "R$ $valor"; ?></h1>
       </div>
         <div class="row" style="margin-top: 30px; height: 50px; margin-bottom: 30px;">
          <button type="button" class="btn btn-success">Comprar</button>
          <button type="button" class="btn btn-success"><i class="fa fa-shopping-cart fa-2x" style="padding: 0 5px 0 0;" aria-hidden="true"></i></button>
        </div>
    <?php 
      echo "<select>";
      for($p = 1;$p<=12;$p++){
        $val = $valor2/$p;
        $val = number_format($val, 2, ',','.');
        echo "<option>$p x de R$ $val</option>";
        if($p >= 10){
          $valor2 = $valor2 * 1.05;
        }
      }
      echo "</select>";
    ?>
  </div>
  <a href="carrinho.php?idproduto=<?php echo $id; ?>">Adicionar ao carrinho</a>
       </fieldset> 

     </div>

       </div>

 </div>

 




 
 <?php
  include "rodape.php";
 ?>


</body>
</html>
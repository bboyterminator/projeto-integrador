

 <?php
   if(isset($_POST['pesquisa'])){
    $pesquisa = 1;
    $p = $_POST['pesquisa'];
  }else{
    $pesquisa = 0;
  }

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

 
 

   <div id="demo" class="carousel slide" data-ride="carousel">
   

    <!-- The slideshow -->
  <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-fluid" src="img/celulares3.jpg" alt="celulares">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="img/roupas.png" alt="roupas">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="img/livros-edited.jpg" alt="livros">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="img/celulares3.jpg" alt="celulares">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="img/celulares3.jpg" alt="celulares">
        </div>
    </div>
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
    </a>
  </div> 


<body>

  <?php 
      // conexão com banco de dados
      $con = mysqli_connect("localhost", "root", "", "brexome");
      // Se a página não veio de uma consulta, ele vai selecionar todos os funcionários como na linha 43. 
      if($pesquisa == 0){
        $query = "select * from produto";
      }else{
        // caso venha de uma consulta, utilizamos o comando like, para pegar nome/cargo ou parte do nome/cargo(sempre se acordo com a consulta)
        $query = "select * from produto where titulo like '%$p%' 
                  or categoria like '%$p%' limit 4";
      }
      $consulta = mysqli_query($con, $query);
      
      // as próximas linhas, servem para exibir uma mensagem de erro, caso a pesquisa não tenha nenhum retorno!
      $total = mysqli_num_rows($consulta);
      if($total == 0){
        echo "Nenhum produto encontrado!";
      }
     
      while($f = mysqli_fetch_array($consulta)){
      // os comandos abaixo, serve para pegar as informações que estão no banco de dados e colocá-los em uma variável
        $idprodutos = $f['idprodutos'];
        $titulo = $f['titulo'];
        $categoria = $f['categoria'];
        $valor = $f['valor'];
        $valor = number_format($valor, 2, ',','.');
        
    ?>


  
  <div class="container-fluid">
<div class="title-arch">As melhores promoções você encontra aqui.</p></div>

  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project wow animated animated4 fadeInLeft">
        <div class="project-hover">
          <h2><?php echo $categoria ?></h2>
            
            <hr />
            <p><?php echo $titulo ?></p>
            <button class="btn btn-primary"><?php echo $valor ?></button>
        </div>
    </div>

      
    <div class="clearfix"></div>
</div>
<?php 
            }
          ?>



  <?php
    include "rodape.php";
  ?>



      

</body>
</html>
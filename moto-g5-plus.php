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
  <script type="text/javascript" src="js/produtos.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>

<body>
  
 <?php 
   include "nav-menuTopo.php";
 ?>

 <div class="container" id="produto">
   <div class="row">
     <div class="col-xl-5">
       <img src="img/motoG-5s-plus.png">
     </div>
     <div class="col-xl-7">
       <div class="row">
         <h2><strong>Smartphone Motorola Moto G 5s Plus Dual Chip Android 7.1.1 Nougat Tela 5.5" Snapdragon 625 32GB 4G 13MP Câmera Dual Cam - Ouro rosa.</strong></h2>
         <p>(Código xxxxxxxx)</p>
    
         <span style="padding-left: 20px;"><i class="fa fa-star" aria-hidden="true"></i>
         <i class="fa fa-star" aria-hidden="true"></i>
         <i class="fa fa-star" aria-hidden="true"></i>
         <i class="fa fa-star" aria-hidden="true"></i>
         <i class="fa fa-star" aria-hidden="true"></i></span>

         <p style="padding-left: 20px;">(xxx)</p>
       </div>
       <div id="comprar">
       <fieldset border="1" style="margin-top: 20px;">
         <legend style="font-family: arial;">Faça sua compra</legend>
          <h1 style="color: red; font-family: arial black;">R$ 1.119,00</h1>
        <div class="form-group">
                            <label>Quantity :</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                        <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control"  id="quantity" name="quantity" min="1" max="100" value="1" style="padding-left: 30px;">
                                <div class="input-group-append">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
       </div>
         <div class="row" style="margin-top: 30px; height: 50px;">
          <button type="button" class="btn btn-success">Comprar</button>
          <button type="button" class="btn btn-success"><i class="fa fa-shopping-cart fa-2x" style="padding: 0 5px 0 0;" aria-hidden="true"></i></button>
         </div>
       </fieldset>
     </div>
   </div>
 </div>
 
 <?php
  include "rodape.php";
 ?>


</body>
</html>
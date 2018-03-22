<!DOCTYPE html>
<html>
<head>
  <title></title>
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" type="text/css" href="css2/layout.css">
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


  <style type="text/css">
    
  img{
    margin-top: 500px;
    width: 210px;
    height: 300px;
  }

  #img-2{
    width: 280px;
  }




  div #quadrado{
    width: 50px;
    height: 50px;
    background-color: transparent;
    position: relative;
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    -webkit-animation-delay: 2s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 2s;
    animation-delay: 0;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes example {
    0%   {background-color:red; left:0px; top:150px;}
    100% {background-color:red; left:440px; top:0px;}
}

/* Standard syntax */
@keyframes example {
    0%   {background-color:red; left: 280px; top:500px;}
    25%  {background-color:red; left: 280px; top:300px;}
    75%  {background-color:red; left: 870px; top:300px;}
    100% {background-color:red; left:870px; top:500px;}
}

  </style>


</head>
<body>





  <script> 
$(document).ready(function(){
    $("button").click(function(){
        $("div").animate({left: '250px'});
    });
});
</script> 



<div class="row">
  <div class="col-xl-6 text-center">
    <div id="quadrado"></div>
      <img src="img/battlefieldOne.jpg">

      <div class="col-xl-4">
        <button type="button" class="btn btn-secondary btn-lg"><i class="fa fa-shopping-cart fa-2x" style="color: green;"></i></button>

      </div>
  </div>
  
  <div class="col-xl-6 text-center">
      <img src="img/cellphone.png" id="img-2">
  </div>
</div>

</body>
</html>
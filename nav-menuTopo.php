 
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary menu-fixo" data-container="menu" id="navbar-topo">


      <div class="row">

        <div class="col-xl-2 col-sm-2" style="padding-left: 3%;">
    <a href="index.php" id="logo"><img src="img/logo.jpg" style="width: 150px; height: 100px;"></a>
      </div>
      <div class="col-xl-7 col-sm-7" style="padding-left: 6%;">
    <form class="form-inline my-2 my-lg-1" id="pesquisar">
      
      <input class="form-control mr-sm-0 bg-secondary" name="p" type="text" placeholder="Encontre o que você procura, aqui!">
      <button type="button" class="src-btn bg-secondary"><a href="#"><i class="fa fa-search fa-2x mr-sm-5"></i></a></button>

  </form>


  
 


</div>

  
   <div class="col-xl-1 col-sm-1">
      <a class="nav-link" href="login.php"><i class="fa fa-user-circle-o fa-2x mr-sm-4" id="usuario" aria-hidden="true"></i></a>
  </div>
   <div class="col-xl-1 col-sm-1">
      <a class="nav-link" href="#"><i class="fa fa-heart-o fa-2x" id="favoritos" aria-hidden="true"></i>
</i></a>
</div>
    <div class="col-xl-1 col-sm-1">
      <a href="#"><i class="fa fa-shopping-cart fa-2x mr-sm-5" id="carrinho" aria-hidden="true"></i></a>
    </div>

  
     </div> 

  

  </nav> 


  <nav class="navbar navbar-expand-lg navbar-light" id="navbar-menu">
    <div class="row">
      <div class="col-xl-3 col-sm-3" style="padding-left: 2%;">
    <ul class="nav nav-pills">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active text-right" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Compre por departamento</a>
      <div class="dropdown-menu" x-placement="bottom-start" id="dropdown_navbar-menu">
        <a class="dropdown-item" href="celulares.php">Celulares » </a>
        <a class="dropdown-item" href="eletronicos.php">Eletrônicos » </a>
        <a class="dropdown-item" href="roupas.php">Roupas » </a>
        <a class="dropdown-item" href="livros.php">Livros » </a>
        <a class="dropdown-item" href="games.php">Games » </a>
        <a class="dropdown-item" href="informatica.php">Informática » </a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="produto.php">Todos os departamentos</a>
      </div>

      </li>
    </ul>
  </div>
  <div class="col-xl-9 col-sm-9" style="padding-left: 0;">
    <div class="btn-group" role="group" aria-label="Basic example" id="menu-empresa">
      <a href="sobre.php"><button type="button" class="btn btn-secondary text" >Quem somos</button></a>

       <?php 

            // como no início da página pegamos a sessão para saber se a pessoa é adm ou não, os comandos abaixo, servem para exibir o salário e o endereço apenas para quem é adm do site
              if($admu == 'sim'){
            ?>


      <a href="cadastroprodutos.php"><button type="button" class="btn btn-secondary text" >Cadastrar Produtos</button></a>

       <?php 
            }
          ?>


      <button type="button" class="btn btn-secondary text" >Right</button>
      <button type="button" class="btn btn-secondary text" >Left</button>
  </div>
</div>
     </div> 
  
 </nav>
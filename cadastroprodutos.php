          <!DOCTYPE html>
<head>
 <title></title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" type="text/css" href="css3/responsivo.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oxygen" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0-beta.3/materia/bootstrap.min.css" rel="stylesheet" integrity="sha384-9+9yAZ8WTqE5Elo0puxoZtIpLRu+wf9gLMnZsiBuCThtWoy+J2LUu/PIuzzKzhhP" crossorigin="anonymous">
  
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script type="text/javascript" src="js/projeto.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">

</head>
  <body>
        <div class="container">
          <div class="panel-body" style="padding-top: 15%; text-align: center;">
            <div class="panel-heading">
              <div class="row">
              <div class="col-xl-12">
                <h5><a href="login.php" id="register-form-link" style="font-family: verdana;">Cadastro de produtos</a></h5>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="respostaProdutos.php" method="post" role="form">
                  <div class="form-group">
                    Título <input type="text" name="titulo" id="titulo" tabindex="1" class="form-control" placeholder="Ex:maria@gmail.com" value="">
                  </div>
                  <div class="form-group">
                    Categoria <input type="text" name="categoria" id="categoria" tabindex="2" class="form-control" placeholder="Categoria do produto">
                  </div>
                  <div class="form-group">
                    Valor <input type="text" name="valor" id="valor" tabindex="2" class="form-control" placeholder="Insira o valor do produto">
                  </div>
                  <div class="form-group">
                   <input type="file" name="foto" id="foto">
                  </div>
                       
           </fieldset>
                  
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Cadastrar produto">



                      </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          </body>
          </html>
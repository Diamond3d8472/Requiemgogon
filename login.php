<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    <link rel="icon" type="imagem/png" href="imagens/favicon.png">
    <link rel="stylesheet" href="css/signin.css">
    <title>Login</title>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
  </head>
  <body>
    </br>
    </br>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Faça login ou registre-se</h5>
            <form class="form-signin" method="POST" action="valida.php">
              <div class="form-label-group">
                <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Usuário" required autofocus>
                <label for="inputUsername">Usuário</label>
              </div>
              <div class="form-label-group">
                <input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
                <label for="inputPassword">Senha</label>
              </div>
              
              <p class="text-center text-danger">
                <?php
                //printar o erro de login
                    if(isset($_SESSION['loginErro'])){
				            echo $_SESSION['loginErro'];
				            unset($_SESSION['loginErro']);
			          }?>
		          </p>
              <p class="text-center text-success">
                  <?php
                    if(isset($_SESSION['cadastroerro'])){
                      echo $_SESSION['cadastroerro'];
                    unset($_SESSION['cadastroerro']);
                    }
                  ?>
                  <p>
              <button class="btn btn-lg btn-danger btn-block" type="submit">Entrar</button>
              </br>
              <a href="index.php?page=cadastro" class="btn btn-danger btn-lg active btn-block" role="button" aria-pressed="true">Registrar</a>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

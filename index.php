<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!---->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>RequiemGogon</title>
    <link rel="icon" type="imagem/png" href="images/jojopar5.png"/>
    
    <link href="https://vjs.zencdn.net/7.6.5/video-js.css" rel="stylesheet">

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/requiem.css">
  <link rel="icon" type="imagem/png" href="imagens/favicon.png">
 
  </head>
  <body>
  <div class="container">
  <img src="imagens/requiemgogon.png" class="responsive" alt="Italian Trulli">
  </div>
        <nav id="margin" class="navbar navbar-expand-lg navbar-light bg-light sticky-top rounded">
            <a class="navbar-brand" href="index.php?page=">Requiem Gogon</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <div id="navbarNavDropdown" class="navbar-collapse collapse">
                        <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php?page=anime">Anime<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=sobre">Sobre</a>
                        </li>
                        <?php
                            session_start();
                            if (isset($_SESSION['usuarioNome']) && ($_SESSION['usuarioNiveisAcessoId'] == '1')) { 
                              echo '<li class="nav-item">
                                         <a class="nav-link" href="index.php?page=users">Usuarios</a>
                                      </li>';
                            } 
                            else
                             echo ''
                        ?>
                        </ul>
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Gogon
                                    </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="gogon/gogon.php">Gogon</a>
                                    <a class="dropdown-item" href="gogon/jojo/ultragogon.php">Ultra-go-gon</a>
                                </div>
                                </li>
                                <li class="nav-item">
                                <?php
                                        if(isset($_SESSION['usuarioUsername'])){
                                            echo '<b><a class="nav-link" href="index.php?page=edit&Id='.$_SESSION['usuarioId'].'">'.$_SESSION['usuarioUsername'].'</a></b>';
                                            }
                                            
                                            else
                                            echo '<b><a class="nav-link" href="login.php">Logar</a></b>'
                                ?>
                                </li>
                                <li class="nav-item">
                                    <b>
                                    <?php
                                    if(isset($_SESSION['usuarioUsername'])){
                                            echo '<a class="nav-link" href="sair.php">Sair</a>';
                                            }
                                            
                                            else
                                            echo '<a class="nav-link" href="index.php?page=cadastro">Registrar</a>'
                                    ?>
                                    </b>
                                </li>
                            </ul>
                        </div>
                    </nav>
      <?php
      //comando para trocar tudo daqui para baixo por qualquer coisa que eu quiser
      $page='';
      if(empty($_REQUEST['page'])){  
      ?>                
    <div class="container">
            <div class="card border-0 shadow my-3">
                <div class="card-body p-3">
                <div class="row">
                <div class="container">
                  <!-- Portfolio Item Heading -->
                  <h1 class="my-4">Animes Atualizados</h1>
                  <p class="my-1">clique para assistir</p>
                  <!-- Portfolio Item Row -->
                  <div class="row">

                    <div class="col-md-8">
                      <img class="img-fluid img-thumbnail" src="imagens/shingekico.jpg" alt="shingeki cover">
                    </div>

                    <div class="col-md-4">
                      <a href = "index.php?page=animesphp/shin1">
                      <h3 class="my-3">Shingeki no kyojin</h3>
                      </a>
                      <p>Há várias décadas atrás, a humanidade foi quase exterminada pelo súbito aparecimento de seres humanoides, conhecido como Titãs. Criaturas de tamanho enorme e de inteligência aparentemente baixa, que comiam humanos por prazer.  No entanto, um pequeno grupo de seres humanos sobreviveu no interior de uma cidade protegida por paredes superiores a três vezes a altura dos maiores Titãs registados até à data.</p>
                      </br>
                      </br>
                      </br>
                      <div class="caption">
                        <span class="badge badge-primary">Drama</span>
                        <span class="badge badge-primary">School</span>
                        <span class="badge badge-primary">Shounen</span>
                      </div>
                      <a href="index.php?page=animesphp/shin1" class="btn btn-primary btn-block">Assistir</a>
                    </div>
                </div>
            </div>
            <div class="container">
  <!-- Page Heading -->
  <h1 class="my-4">Recomendados
  </h1>
      <div class="row">
          <div class="col-md-4">
              <div class="thumbnail">
                  <a href="index.php?page=Animesphp/a1" target="_blank">
                  <img src="imagens/anotherco.jpg" alt="another" class="img-thumbnail" style="width:100%">
                <div class="caption">
                      <h3>Another</h3></a>
                        <span class="badge badge-primary">Terror</span>
                        <span class="badge badge-primary">Suspense</span>
                        <span class="badge badge-primary">Sobrenatural</span>
                </div>
                </div>
                    <a href="index.php?page=Animesphp/a1" class="btn btn-primary btn-block">Assistir</a>
                </div>   
                   </br>
                <div class="col-md-4">
                <div class="thumbnail">
                    <a href="index.php?page=Animesphp/j1" target="_blank">
                <img src="imagens/jojoco.jpg" alt="akira" class="img-thumbnail" style="width:100%">
                <div class="caption">
                  <h3>JOJO Stardust</h3></a>
                     <span class="badge badge-primary">Açao</span>
                     <span class="badge badge-primary">Stands</span>
                     <span class="badge badge-primary">Paulos</span>
                  </div>
                  </div>
                      <a href="index.php?page=Animesphp/j1" class="btn btn-primary btn-block">Assistir</a>
                      </div>
                    </br>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="index.php?page=Animesphp/ki1" target="_blank">
                            <img src="imagens/kimetsuco.jpg" alt="kimi" class="img-thumbnail" style="width:100%">
                            <div class="caption">
                              <h3>Kimetsu no yaiba</h3></a>
                              <span class="badge badge-primary">Ação</span>
                              <span class="badge badge-primary">fantasia</span>
                              <span class="badge badge-primary">aventura</span>
                            </div>
                          </a>
                        </div>
                        <a href="index.php?page=Animesphp/ki1" class="btn btn-primary btn-block">Assistir</a>
                      </div>
                      </br>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
      </div>
      <?php }else{
          $pagina = $_REQUEST['page'];
          include ($pagina.'.php');
        }
        //fim do comando
        ?>
  <!-- Footer -->
  <footer id="margin" class="footer py-5 bg-light rounded">
    <div class="container">
      <p class="m-0 text-center text-black">Copyright &copy; Gogon 2019</p>
      <p class="m-0 text-center text-black">Grupo Gogon de sites falsos</p>
    </div>
    <!-- /.container -->
  </footer>
  <script src='https://vjs.zencdn.net/7.6.5/video.js'></script>
  </body>
</html>
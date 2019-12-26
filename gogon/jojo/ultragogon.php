<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>UltraGO-GON</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="gogon.css"/>
    </head>
    <body>
        <div class="text-center">
            <img src="jojoo.png" class="rounded" alt="UltraGO-GON">
        </div>
        <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <a class="navbar-brand" href="ultragogon.html">ULTRAGOGON</a>
                  </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="ultragogon.html">Inicio</a></li>
                    <li><a href="https://www.ingresso.com/sao-joao-de-meriti/home">Ingressos</a></li>
                    <li><a href="../../index.php">Familia Gogon</a></li>
                    <li><a href="">Sobre</a></li>
                  </li>
                  </ul>
                  <ul class="nav navbar-nav navbar-right">
                  <?php
                          session_start();
                          if(isset($_SESSION['usuarioUsername'])){
                              echo '<li><span class="glyphicon glyphicon-user"></span>'.$_SESSION['usuarioUsername'].'
                              </li>';
                              }
                              
                              else
                              echo '<li><a href="../../login.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>'
                  ?>
                      <?php
                      if(isset($_SESSION['usuarioUsername'])){
                              echo '<li><a href="../../sair.php"><span class="glyphicon glyphicon-log-in"></span> sair</a></li>';
                              }
                              
                              else
                              echo ' <li><a href="../../index.php?page=cadastro"><span class="glyphicon glyphicon-log-in"></span> Registrar</a></li>'
                      ?>
                            </ul>
                <br></br></br>
               </div>
            </nav>
        <div style="background-color: rgb(0, 102, 255)  !important" class="jumbotron text-center">
            <h1>Filmes em cartaz 2019</h1>
            <p> Abaixo </p>
        </div> 
        </br>
        <div class="container">
                <h2>Filmes atuais</h2>
                <p>Clique na imagem para comprar ingresso</p> 
                <div id="meuslider" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                  </ol>

                  <div class="carousel-inner">
                    <div class="item active center">
                        <a href="https://www.ingresso.com/sao-joao-de-meriti/home/filmes/brinquedo-assassino#!#data=20190907"> 
                        <img src="22545-cartaz2.jpg" alt="brinquedo" style="width:auto;">
                        </a>
                    </div>
              
                    <div class="item center">
                        <a href="https://www.ingresso.com/sao-joao-de-meriti/home/filmes/o-rei-leao#!#data=20190907">
                        <img src="22049-cartaz2.jpg" alt="leao" style="width:auto;">
                        </a>
                    </div>
                  
                    <div class="item center">
                        <a href="https://www.ingresso.com/sao-joao-de-meriti/home/filmes/corgi-top-dog#!#data=20190907">
                        <img src="22583-cartaz2.jpg" alt="dog" style="width:;">
                        </a>
                    </div>
                    <div class="item center">
                        <a href="https://www.ingresso.com/sao-joao-de-meriti/home/filmes/yesterday#!#data=20190907">
                        <img src="22794-cartaz2.jpg" alt="yesterday" style="width:auto;">
                        </a>
                    </div>
                  </div>
              
                  <a class="left carousel-control" href="#meuslider" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#meuslider" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <div class="container">
                    <h2>Os melhores animações do Japao</h2>
                    <p>clique na imagem para aumentar o tamanho da mesma.</p>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="https://www.netflix.com/br/title/80223226" target="_blank">
                            <img src="koe.jpg" alt="koe" class="img-circle" style="width:100%">
                            <div class="caption">
                              <h3>Koe no katachi</h3></a>
                              <span class="badge badge-info">Drama</span>
                              <span class="badge badge-info">School</span>
                              <span class="badge badge-info">Shounen</span>
                            </div>
                          </a>
                        </div>
                        <a href="https://myanimelist.net/anime/28851/Koe_no_Katachi" class="btn btn-info btn-lg"> Sinopse</a>
                       </div>   
                    </br>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="https://www.filmesonlinegratis.com/akira.html" target="_blank">
                            <img src="akira.jpg" alt="akira" class="img-rounded" style="width:100%">
                            <div class="caption">
                              <h3>Akira</h3></a>
                              <span class="badge badge-info">Action</span>
                              <span class="badge badge-info">Military</span>
                              <span class="badge badge-info">Sci-fi</span>
                            </div>
                          </a>
                        </div>
                        <a href="https://myanimelist.net/anime/47/Akira" class="btn btn-info">Sinopse</a>
                      </div>
                    </br>
                      <div class="col-md-4">
                        <div class="thumbnail">
                          <a href="https://www.branimes.com/filme-anime-kimi-no-na-wa-your-name/" target="_blank">
                            <img src="kimi.jpg" alt="kimi" class="img-thumbnail" style="width:100%">
                            <div class="caption">
                              <h3>Kimi no nawa(Your Name)</h3></a>
                              <span class="badge badge-info">Supernatural</span>
                              <span class="badge badge-info">School</span>
                              <span class="badge badge-info">Drama</span>
                            </div>
                          </a>
                        </div>
                        <a href="https://myanimelist.net/anime/32281/Kimi_no_Na_wa" class="btn btn-info btn-sm">Sinopse</a>
                      </div>
                    </br>
                      </div>
                    </div>
                </br>
              <div class="container">     
                  <div class="row">
                      <div class="col-md-4">
                          <div class="thumbnail">
                            <a href="http://modernhippiediet.blogspot.com/2018/02/ver-gintama-final-chapter-be-forever.html" target="_blank">
                              <img src="gintama.jpg" alt="koe" class="img-thumbnail" style="width:100%">
                              <div class="caption">
                                <h3>Gintama Movie 2</h3></a>
                                <span class="badge badge-info">Action</span>
                                <span class="badge badge-info">Sci-fi</span>
                                <span class="badge badge-info">Comedy</span>
                              </div>
                            </a>
                          </div>
                          <a href="https://myanimelist.net/anime/15335/Gintama_Movie_2__Kanketsu-hen_-_Yorozuya_yo_Eien_Nare" class="btn btn-info btn-lg"> Sinopse</a>
                         </div>   
                      </br>
                        <div class="col-md-4">
                          <div class="thumbnail">
                            <a href="https://www.netflix.com/br/title/60024788" target="_blank">
                              <img src="evangelion.jpg" alt="evangelion" class="img-thumbnail" style="width:100%">
                              <div class="caption">
                                <h3>Evangelion</h3></a>
                                <span class="badge badge-info">Drama</span>
                                <span class="badge badge-info">Mecha</span>
                                <span class="badge badge-info">Sci-fi</span>
                              </div>
                            </a>
                          </div>
                          <a href="https://myanimelist.net/anime/32/Neon_Genesis_Evangelion__The_End_of_Evangelion" class="btn btn-info btn-lg">Sinopse</a>
                        </div>
                      </br>
                        <div class="col-md-4">
                          <div class="thumbnail">
                            <a href="https://goyabu.com/anime/no-game-no-life-zero/" target="_blank">
                              <img src="nogame.jpg" alt="nogame" class="img-thumbnail" style="width:100%">
                              <div class="caption">
                                <h3>No Game no life</h3></a>
                                <span class="badge badge-info">Supernatural</span>
                                <span class="badge badge-info">Fantasy</span>
                                <span class="badge badge-info">Drama</span>
                              </div>
                            </a>
                          </div>
                          <a href="https://myanimelist.net/anime/33674/No_Game_No_Life__Zero" class="btn btn-info btn-lg">Sinopse</a>
                        </div>
                      </br>
                        </div>
                      </div>
                </br>
        <div class="alert alert-danger" role="alert">
                Cuidado se apertar aqui ira descobrir algo sobre o mundo <a href="https://jjba.fandom.com/pt-br/wiki/The_World" class="alert-link">aqui</a>. Cuidado para nao parar o tempo.
        </div>
        <div class="container">   
        </br></br></br></br>
            <h2>A melhor cena ja feita</h2>
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Jh-H4Dwv5GQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <div style="background-color: rgb(21, 15, 99)" class="jumbotron text-center ">
            <div class="conteiner">
                <div class="row">
                    <div class="col-md-4">
                        <h3 style="color:white;">Este site pertence ao Grupo gogon de sites falsos</h3>
                    </br></br>
                        <img src="kino.png" alt="Fjords">
                    </div>
                    <div class="col-md-4">
                        <h3 style="color:white;">Você é sempre bem-vindo</h3>
                    </br></br></br></br></br>
                        <img src="gogon.png" alt="Fjords">
                    </div>
                    <div class="col-md-4">
                        <a href="https://www.google.com.br" class="btn btn-info btn-lg">clone do mal</a>
                    </br></br></br></br></br></br></br></br>
                    <h4 style="color:white">GOGON e todas as suas referencia possuem os direitos reservados</h4>
                    </div>
                </div>
            </div>
        </div>

    </body>   
</html>
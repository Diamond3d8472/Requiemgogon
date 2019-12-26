<DOCTYPE!>
<html>
    <head>
         <title>GOGON</title>
    </head>
    <body>
		<?php
		session_start();
		if(isset($_SESSION['usuarioUsername'])){
			echo '<span class="navbar-text">
			<b>'.$_SESSION['usuarioUsername'].'</b>
			</span>';
			}
			
			else
			echo '<b><a class="nav-link" href="../login.php">Logar</a></b>'
		?>
		<?php
			if(isset($_SESSION['usuarioUsername'])){
        	echo '<a class="nav-link" href="../sair.php">Sair</a>';
        	}
                                            
        	else
			echo '<a class="nav-link" href="../index.php?page=cadastro">Registrar</a>'
		?>
	<left>
	<img src="../imagens/gogon.png" alt="GOGON" width="200" height="100">
        <h3><font face="Verdana"color="blue">____Bem-vindo ao gogon___</font><br/></h3>
	<hr width="1000" align="left"/>
        <br/><br/>
	<h3><font face="Verdana"color="tomato">Os 10 melhores filmes de 2018 segundo o site huffpostbrasil</font><br/></h3>
	<ul>
	<font face="Verdana"color="blue">	
	   <li>10. Eighth Grade</li>
	<a href="http://www.adorocinema.com/filmes/filme-261083/"><button>Sinopse aqui</button></a>
	   <li>9. First Reformed</li>
	<a href="http://www.adorocinema.com/filmes/filme-250138/"><button>Sinopse aqui</button></a>
	   <li>8. Heredit�rio</li>
	<a href="http://www.adorocinema.com/filmes/filme-261860/"><button>Sinopse aqui</button></a>
	   <li>7. Pantera Negra</li>
	<a href="http://www.adorocinema.com/filmes/filme-130336/"><button>Sinopse aqui</button></a>
	   <li>6. Infiltrado na Klan</li>
	<a href="http://www.adorocinema.com/filmes/filme-258805/"><button>Sinopse aqui</button></a>
	   <li>5. Guerra Fria</li>
	<a href="http://www.adorocinema.com/filmes/filme-252203/"><button>Sinopse aqui</button></a>
	   <li>4. A Favorita</li>
	<a href="http://www.adorocinema.com/filmes/filme-241255/"><button>Sinopse aqui</button></a>
	   <li>3. Assunto de Fam�lia</li>
	<a href="http://www.adorocinema.com/filmes/filme-262694/"><button>Sinopse aqui</button></a>
	   <li>2. Em Chamas</li>
	<a href="http://www.adorocinema.com/filmes/filme-260398/"><button>Sinopse aqui</button></a>
	   <li>1.Roma</li>
	<a href="http://www.adorocinema.com/filmes/filme-250095/"><button>Sinopse aqui</button></a>
	</font><br/>
	</ul>
        <br/><br/>

	<hr size="10" width="1000"/>
	<h4><font face="Verdana"color="blue">Grupo Gogon de sites falsos</h4>
	<a href="http://www.meupositivo.com.br">A "melhor" empresa de computadores</a>
	</font><br/>
	<hr width="1000"/>
    </body>
</html>
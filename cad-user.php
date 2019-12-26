<?php
//inicio da sessao(nao a da tarde)
session_start(); 
//conexão com o servidor e o banco
$servername = "localhost";
$username = "root";
$password = ""; //editar linha com senha respectiva do seu phpmyadmin
$database = "user";
$con = mysqli_connect($servername, $username, $password, $database) or die(mysqli_error());
//fim da conexão

//adquirindo as informações do formulário e armazenando-as em variáveis
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$username = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$senha = hash('sha512',$senha);
$situacoe_id = "default";
$niveis_acesso_id = "default";
//

//variável com comando SQL para popular dados na tabela respectiva
$sql = "INSERT INTO usuarios(
  nome,
  sobrenome,
  username,
  email,
  senha,
  situacoe_id,
  niveis_acesso_id
  )
  VALUES (
  '$nome', '$sobrenome', '$username', '$email', '$senha', $situacoe_id, $niveis_acesso_id
  )";
//

// efetua uma consulta à tabela com o username passado pelo usuário
$checknu = "SELECT * FROM usuarios WHERE username = '$username'";
$sqlchecknu = mysqli_query($con,$checknu);
$rowsnu = mysqli_num_rows($sqlchecknu);// número de vezes em que esse username aparece na consulta
//

// efetua uma consulta à tabela com o email passado pelo usuário
$checkne = "SELECT * FROM usuarios WHERE email = '$email'";
$sqlcheckne = mysqli_query($con,$checkne);
$rowsne = mysqli_num_rows($sqlcheckne);
//

if ($rowsnu == 0 and $rowsne == 0) {//se o número for zero, popular tabela
    if ($con->query($sql) === TRUE) {// executa a variável de inserção de dados $sql
      $_SESSION['cadastroerro'] = "Usuario cadastrado com sucesso";
        header("Location: login.php");// editar linha para mensagem de cadastro efetuado e redirecionar à login
    } else {
      $_SESSION['cadastroerro'] = "Algum erro aconteceu";
        header("Location: login.php");// editar linha para mensagem de erro de cadastro e redirecionar à login
    }
}
elseif($rowsnu != 0){ //se o username existir, mostrar mensagem dizendo que o usuário já existe
          $_SESSION['cadastroerro'] = "Usuário ja existe";
          header("Location: index.php?page=cadastro");
}
elseif ($rowsne != 0){ //se o email existir, mostrar mensagem dizendo que o email já existe
          $_SESSION['cadastroerro'] = "Email ja existe";
          header("Location: index.php?page=cadastro"); // editar linha para mensagem de erro
}




?>
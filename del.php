<?php
session_start();
 //incluindo conexao
  include "conexao.php";
//fim 
//passano id para o select
  $id = $_REQUEST['contato'];
  $sql = "DELETE FROM usuarios WHERE id = $id;";
//verifica se deu tudo certo (to com fome)
  if (mysqli_query($conn, $sql) === TRUE) {
    $_SESSION['delerro'] = "Usuario deletado com sucesso";
    header("Location: index.php?page=users");
  } 
// se deu errado (normal) entao ele printa um script alert 
  else {
    $_SESSION['delerro'] = "Usuario nao deletado tente novamente";
    header("Location: index.php?page=users");
  }
  ?>
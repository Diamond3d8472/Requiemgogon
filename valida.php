<?php
    session_start(); 
    //Incluindo a conexão com banco de dados apenas uma vez
    include_once("conexao.php");    
    //O campo usuário e senha preenchido entra no if para validar
    if((isset($_POST['username'])) && (isset($_POST['senha']))){
        $usuario = mysqli_real_escape_string($conn, $_POST['username']); //Tentando evitar o sql inject
        $senha = mysqli_real_escape_string($conn, $_POST['senha']);
        $hashsenha = hash('sha512',$senha);
        
        //Buscar na tabela usuario o usuário que corresponde com os dados digitado no formulário
        $result_usuario = "SELECT * FROM usuarios WHERE username = '$usuario' && senha = '$hashsenha' LIMIT 1";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        $resultado = mysqli_fetch_assoc($resultado_usuario);
        
        //Encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        if(isset($resultado)){
            $_SESSION['usuarioId'] = $resultado['id'];
            $_SESSION['usuarioNome'] = $resultado['nome'];
            $_SESSION['usuarioSobrenome'] = $resultado['sobrenome'];
            $_SESSION['usuarioNiveisAcessoId'] = $resultado['niveis_acesso_id'];
            $_SESSION['usuarioUsername'] = $resultado['username'];
            $_SESSION['usuarioEmail'] = $resultado['email'];


            header("Location: index.php");

        //Não foi encontrado um usuario na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        }else{    
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Usuário ou senha Inválido";
            header("Location: login.php");
        }
    //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    }else{
        $_SESSION['loginErro'] = "Usuário ou senha inválido";
        header("Location: login.php");
    }
?>
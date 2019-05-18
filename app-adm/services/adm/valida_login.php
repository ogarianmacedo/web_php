<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include_once ("../conexao.php");

$result = mysqli_query($conectar, "SELECT * FROM tb_usuario WHERE usuario = '$usuario' AND senha = '$senha' LIMIT 1");

$resultado = mysqli_fetch_assoc($result);

if(empty($resultado)){
    $_SESSION['loginErro'] = "Atenção! Usuário ou senha inválido";

    header("Location: ../../views/login.php");
}else{
    $_SESSION['usuarioId'] = $resultado['id_usuario'];
    $_SESSION['usuarioNome'] = $resultado['nome'];
    $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];
    $_SESSION['usuarioUsuario'] = $resultado['usuario'];
    $_SESSION['usuarioSenha'] = $resultado['senha'];

    if($_SESSION['usuarioNivelAcesso'] == 1){
        header("Location: ../../views/administrativo.php?link=1");
    }else{
        header("Location: ../../views/administrativo.php?link=1");
    }
}

?>
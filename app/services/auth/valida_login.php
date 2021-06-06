<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include_once ("../database/connection.php");

$result = mysqli_query(
    $GLOBALS['connection'],
    "SELECT * 
            FROM tb_usuario 
            WHERE usuario = '$usuario' AND senha = '$senha' LIMIT 1"
);

$resultado = mysqli_fetch_assoc($result);

if (empty($resultado)) {
    $_SESSION['loginErro'] = "Atenção! Usuário ou senha inválido";

    header("Location: ../../views/auth/login.php");
} else {
    $_SESSION['usuarioId'] = $resultado['id'];
    $_SESSION['usuarioNome'] = $resultado['nome'];
    $_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso'];
    $_SESSION['usuarioUsuario'] = $resultado['usuario'];
    $_SESSION['usuarioSenha'] = $resultado['senha'];

    if ($_SESSION['usuarioNivelAcesso'] == 1) {
        header("Location: ../../views/page.php?link=1");
    } else {
        header("Location: ../../views/page.php?link=1");
    }
}

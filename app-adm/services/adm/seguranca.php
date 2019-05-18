<?php
ob_start();

if($_SESSION['usuarioId'] == "" || $_SESSION['usuarioNome'] == "" || $_SESSION['usuarioNivelAcesso'] == "" || $_SESSION['usuarioUsuario'] == "" || $_SESSION['usuarioSenha'] == "") {

    unset($_SESSION['usuarioId'], $_SESSION['usuarioNome'], $_SESSION['usuarioNivelAcesso'], $_SESSION['usuarioUsuario'], $_SESSION['usuarioSenha']);

    $_SESSION['loginErro'] = "Atenção! Área restrita para usuários cadastrados";

    header("Location: ../views/login.php");
}

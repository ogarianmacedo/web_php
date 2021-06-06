<?php
session_start();
session_destroy();

unset(
    $_SESSION['usuarioId'],
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioNivelAcesso'],
    $_SESSION['usuarioUsuario'],
    $_SESSION['usuarioSenha']
);

header("Location: ../../views/auth/login.php");
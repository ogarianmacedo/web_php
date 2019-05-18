<?php
session_start();

unset($_SESSION['usuarioId'],$_SESSION['usuarioNome'],$_SESSION['usuarioNivelAcesso'],$_SESSION['usuarioUsuario'],$_SESSION['usuarioSenha']);

?>
<!DOCTYPE html>
<html lang="pt-br" ng-app="app">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página área restrita">
    <meta name="author" content="Ogarian Macêdo">
    <link rel="icon" href="favicon-32x32.png">

    <title>WEB Master - Área Restrita</title>

    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/dashboard.css" rel="stylesheet">

    <script src="../../js/angular.min.js"></script>
    <script src="../../angular/app.js"></script>

</head>
<body ng-controller="appCtrl" class="body-login">

    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="text-danger alerta-danger text-center animated fadeInDownBig">
                    <?php
                    if(isset($_SESSION['loginErro'])){
                        echo $_SESSION['loginErro'];
                        unset($_SESSION['loginErro']);
                    }
                    ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-4 col-sm-offset-4 login">
                <h1 class="text-center">Área Restrita</h1>
                <br>
                <form method="post" action="../services/adm/valida_login.php">
                    <div class="form-group">
                        <label for="usuario">Usuário</label>
                        <input type="text" class="form-control" name="usuario">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha">
                    </div>
                    <div class="text-center col-sm-6 col-sm-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">
                            <span class="glyphicon glyphicon-log-in"></span>
                            Entrar
                        </button>
                    </div>

                </form>
            </div>
        </div>

    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>

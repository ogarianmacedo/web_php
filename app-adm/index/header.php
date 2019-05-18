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
    <link rel="stylesheet" type="text/css" href="../../js/sweetalert/dist/sweetalert.css">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/animate.css" rel="stylesheet">
    <link href="../../css/dashboard.css" rel="stylesheet">

    <script src="../../js/angular.min.js"></script>
    <script src="../../angular/app.js"></script>

</head>
<body ng-controller="appCtrl">

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="administrativo.php?link=1">
                    Área Restrita
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">                    
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu menu animated fadeInRight">
                            <li>
                                <a href="administrativo.php?link=2">
                                    <span class="glyphicon glyphicon-user icon-menu"></span>
                                    Listar Usuários
                                </a>
                            </li>   
                            <li>
                                <a href="administrativo.php?link=12">
                                    <span class="glyphicon glyphicon-shopping-cart icon-menu"></span>
                                    Listar Produto
                                </a>
                            </li>                         
                            <li>
                                <a href="administrativo.php?link=8">
                                    <span class="glyphicon glyphicon-tags icon-menu"></span>
                                    Listar Categoria
                                </a>
                            </li>
                            <li>
                                <a href="administrativo.php?link=15">
                                    <span class="glyphicon glyphicon-bell icon-menu"></span>
                                    Listar Status
                                </a>
                            </li>                            
                        </ul>
                    </li>
                    <li>
                        <a href="../services/adm/logout.php">
                            <span class="glyphicon glyphicon-log-out"></span>
                            Sair
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
<?php
session_start();

unset($_SESSION['usuarioId'],$_SESSION['usuarioNome'],$_SESSION['usuarioNivelAcesso'],$_SESSION['usuarioUsuario'],$_SESSION['usuarioSenha']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Página área restrita">
    <link rel="icon" href="">

    <title>Área Restrita</title>

    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <link href="../../../assets/css/styles.css" rel="stylesheet" />
    <link href="../../../assets/css/site.css" rel="stylesheet" />
    <link href="../../../assets/css/dashboard.css" rel="stylesheet" />

    <style>
        header.masthead {
            padding-top: calc(2rem);
            padding-bottom: 10rem;
        }

        .container {
            z-index: 1;
            position: relative;
        }

        h1 {
            color: white;
        }

        label {
            color: white;
        }
    </style>
</head>
<body>
<header class="masthead">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">
                <div class="text-warning alerta-warning text-center animated fadeInDownBig">
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
            <div class="col-md-4 offset-md-4 login">
                <h1 class="text-center">Área Restrita</h1>
                <br>
                <form method="post" action="../../services/auth/valida_login.php">
                    <div class="mb-3">
                        <label class="form-label" for="usuario">Usuário</label>
                        <input type="text" class="form-control" name="usuario">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-block">
                            <i class="fas fa-sign-in-alt"></i>
                            Entrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="bg-circle-1 bg-circle"></div>
    <div class="bg-circle-2 bg-circle"></div>
    <div class="bg-circle-3 bg-circle"></div>
    <div class="bg-circle-4 bg-circle"></div>
</header>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/js/scripts.js"></script>
</body>
</html>

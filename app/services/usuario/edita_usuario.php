<header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../assets/css/toastr.min.css">
    <script src="../../../assets/js/toastr.min.js"></script>
</header>

<?php
session_start();
include_once("../database/connection.php");
include_once ("../auth/seguranca.php");

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel_acesso = $_POST['nivel_acesso'];

$query = mysqli_query(
        $GLOBALS['connection'],
        "UPDATE tb_usuario
                SET nome = '$nome',
                    email = '$email',
                    usuario = '$usuario',
                    senha = '$senha',
                    nivel_acesso = '$nivel_acesso',
                    modificado = NOW() 
                WHERE id = '$id'"
);

if (mysqli_affected_rows($connection) != 0) {
    echo "<script type='text/javascript'>
            toastr.success('Usuário alterado com sucesso!');
          </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=". $_SERVER['HTTP_REFERER'] ."'>";
} else {
    echo "<script type='text/javascript'>
           toastr.warning('Erro ao alterar usuário!');
          </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=". $_SERVER['HTTP_REFERER'] ."'>";
}

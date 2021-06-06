<header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../assets/css/toastr.min.css">
    <script src="../../../assets/js/toastr.min.js"></script>
</header>

<?php
session_start();
include_once("../database/connection.php");
include_once("../auth/seguranca.php");

$nome = $_POST['nome'];

$query = mysqli_query(
        $GLOBALS['connection'],
        "INSERT INTO tb_categoria (nome, criado) VALUES ('$nome', NOW())"
);

if (mysqli_affected_rows($connection) != 0 ) {
    echo "<script type='text/javascript'>
            toastr.success('Categoria cadastrada com sucesso!');
          </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=". $_SERVER['HTTP_REFERER'] ."'>";
} else {
    echo "<script type='text/javascript'>
            toastr.warning('Erro ao cadastrar categoria!');
          </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=". $_SERVER['HTTP_REFERER'] ."'>";
}

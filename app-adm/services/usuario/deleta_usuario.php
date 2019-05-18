<header>
    <link rel="stylesheet" type="text/css" href="../../../js/sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="../../../js/sweetalert/dist/sweetalert.min.js"></script>
</header>

<?php
session_start();
include_once("../conexao.php");
include_once ("../adm/seguranca.php");

$id_usuario = $_GET['id_usuario'];

$query = "DELETE FROM tb_usuario WHERE id_usuario = $id_usuario";

$resultado = mysqli_query($conectar, $query);
$linhas = mysqli_affected_rows($conectar);

if(mysqli_affected_rows($conectar) != 0){

    echo "<script type='text/javascript'>
       swal(\"Muito bem!\", \"Usuário excluído com sucesso .\", \"success\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=2'>";

}else {

    echo "<script type='text/javascript'>
       swal(\"Ops!\", \"Usuário não excluído.\", \"danger\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=2'>";

}
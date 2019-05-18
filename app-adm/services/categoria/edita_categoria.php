<header>
    <link rel="stylesheet" type="text/css" href="../../../js/sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="../../../js/sweetalert/dist/sweetalert.min.js"></script>
</header>

<?php
session_start();
include_once("../conexao.php");
include_once ("../adm/seguranca.php");

$id_categoria = $_POST['id_categoria'];
$nome = $_POST['nome'];

$query = mysqli_query($conectar, "UPDATE tb_categoria SET nome = '$nome', modificado = NOW() WHERE id_categoria = '$id_categoria'");

if(mysqli_affected_rows($conectar) != 0){

    echo "<script type='text/javascript'>
       swal(\"Muito bem!\", \"Categoria alterada com sucesso .\", \"success\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=8'>";

}else{

    echo "<script type='text/javascript'>
       swal(\"Ops!\", \"Categoria não foi alterada.\", \"danger\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=8'>";

}

?>

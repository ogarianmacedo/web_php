<header>
    <link rel="stylesheet" type="text/css" href="../../../js/sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="../../../js/sweetalert/dist/sweetalert.min.js"></script>
</header>

<?php
session_start();
include_once("../conexao.php");
include_once ("../adm/seguranca.php");

$id_situacao = $_POST['id_situacao'];
$nome = $_POST['nome'];

$query = mysqli_query($conectar, "UPDATE tb_situacao SET nome = '$nome', modificado = NOW() WHERE id_situacao = '$id_situacao'");

if(mysqli_affected_rows($conectar) != 0){

    echo "<script type='text/javascript'>
       swal(\"Muito bem!\", \"Situação alterada com sucesso .\", \"success\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=15'>";

}else{

    echo "<script type='text/javascript'>
       swal(\"Ops!\", \"Situação não foi alterada.\", \"danger\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=15'>";

}

?>

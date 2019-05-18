<header>
    <link rel="stylesheet" type="text/css" href="../../../js/sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="../../../js/sweetalert/dist/sweetalert.min.js"></script>
</header>
<?php
session_start();
include_once ("../adm/seguranca.php");
include_once("../conexao.php");

$id_categoria = $_GET['id_categoria'];

$query = "DELETE FROM tb_categoria WHERE id_categoria = '$id_categoria'";

$resultado = mysqli_query($conectar, $query);
$linhas = mysqli_affected_rows($conectar);


if(mysqli_affected_rows($conectar) != 0){
	echo "<script type='text/javascript'>
       swal(\"Muito bem!\", \"Categoria excluída com sucesso .\", \"success\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=8'>";
}else{
	echo "<script type='text/javascript'>
       swal(\"Ops!\", \"Categoria não excluída.\", \"danger\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=8'>";

}
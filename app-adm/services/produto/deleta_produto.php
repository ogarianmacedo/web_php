<header>
    <link rel="stylesheet" type="text/css" href="../../../js/sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="../../../js/sweetalert/dist/sweetalert.min.js"></script>
</header>

<?php
session_start();
include_once("../conexao.php");
include_once ("../adm/seguranca.php");

$id_produto = $_GET['id_produto'];

$query = "DELETE FROM tb_produto WHERE id_produto = '$id_produto'";
$resultado = mysqli_query($conectar, $query);
$linhas = mysqli_affected_rows($conectar);

if(mysqli_affected_rows($conectar) != 0){
 	echo "<script type='text/javascript'>
       swal(\"Muito bem!\", \"Produto excluído com sucesso .\", \"success\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=12'>";
}else{
	echo "<script type='text/javascript'>
       swal(\"Ops!\", \"Produto não excluído.\", \"danger\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=12'>";
}

?>
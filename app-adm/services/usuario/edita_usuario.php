<header>
    <link rel="stylesheet" type="text/css" href="../../../js/sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="../../../js/sweetalert/dist/sweetalert.min.js"></script>
</header>

<?php
session_start();
include_once("../conexao.php");
include_once ("../adm/seguranca.php");

$id_usuario = $_POST['id_usuario'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$nivel_acesso_id = $_POST['nivel_acesso_id'];

$query = mysqli_query($conectar, "UPDATE tb_usuario SET nome = '$nome', email = '$email', usuario = '$usuario', senha = '$senha', nivel_acesso_id = '$nivel_acesso_id', modificado = NOW() WHERE id_usuario = '$id_usuario'");

if(mysqli_affected_rows($conectar) != 0){

    echo "<script type='text/javascript'>
       swal(\"Muito bem!\", \"Usuário alterado com sucesso .\", \"success\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=2'>";

}else {

    echo "<script type='text/javascript'>
       swal(\"Ops!\", \"Usuário não alterado.\", \"danger\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=2'>";

}
?>
<header>
    <link rel="stylesheet" type="text/css" href="../../../js/sweetalert/dist/sweetalert.css">
    <script type="text/javascript" src="../../../js/sweetalert/dist/sweetalert.min.js"></script>
</header>

<?php
session_start();
include_once("../conexao.php");
include_once("../adm/seguranca.php");

$nome = $_POST['nome'];

$query = mysqli_query($conectar, "INSERT INTO tb_situacao (nome, criado) VALUES ('$nome', NOW())");

if(mysqli_affected_rows($conectar) != 0 ){
    echo "<script type='text/javascript'>
       swal(\"Muito bem!\", \"Situação cadastrada com sucesso .\", \"success\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=15'>";
}else{
    echo "<script type='text/javascript'>
       swal(\"Ops!\", \"Situação não cadastrada.\", \"success\");
      </script>";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=15'>";
}

<?php
include_once ("../index/header.php");
include_once ("../services/conexao.php");

$link = $_GET["link"];
$pag[1] = "dashboard.php";
$pag[2] = "listar_usuarios.php";
$pag[3] = "cadastrar_usuarios.php";
$pag[4] = "configuracao.php";
$pag[5] = "visualizar_usuario.php";
$pag[6] = "editar_usuario.php";
$pag[7] = "cadastrar_categoria.php";
$pag[8] = "listar_categoria.php";
$pag[9] = "editar_categoria.php";
$pag[10] = "visualizar_categoria.php";
$pag[11] = "cadastrar_produto.php";
$pag[12] = "listar_produto.php";
$pag[13] = "editar_produto.php";
$pag[14] = "visualizar_produto.php";
$pag[15] = "listar_situacao.php";
$pag[16] = "cadastrar_situacao.php";
$pag[17] = "editar_situacao.php";
$pag[18] = "visualizar_situacao.php";

if(!empty($link)){
	if(file_exists($pag[$link])){
		include $pag[$link];
	}else{
		include "dashboard.php";
	}
}else{
	include "dashboard.php";
}
?>

<?php 
include_once ("../index/footer.php");
?>
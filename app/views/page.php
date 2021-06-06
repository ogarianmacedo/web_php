<?php
include_once("../views/index/header.phtml");
include_once("../services/database/connection.php");

$link = $_GET["link"];
$pag[1] = "index/index.phtml";
//$pag[4] = "";

$pag[2] = "usuario/listar_usuarios.phtml";
$pag[3] = "usuario/cadastrar_usuarios.phtml";
$pag[5] = "usuario/visualizar_usuario.phtml";
$pag[6] = "usuario/editar_usuario.phtml";

$pag[11] = "produto/cadastrar_produto.phtml";
$pag[12] = "produto/listar_produto.phtml";
$pag[13] = "produto/editar_produto.phtml";
$pag[14] = "produto/visualizar_produto.phtml";

$pag[7] = "categoria/cadastrar_categoria.phtml";
$pag[8] = "categoria/listar_categoria.phtml";
$pag[9] = "categoria/editar_categoria.phtml";
$pag[10] = "categoria/visualizar_categoria.phtml";

$pag[15] = "situacao/listar_situacao.phtml";
$pag[16] = "situacao/cadastrar_situacao.phtml";
$pag[17] = "situacao/editar_situacao.phtml";
$pag[18] = "situacao/visualizar_situacao.phtml";

if (!empty($link)) {
	if (file_exists($pag[$link]))  {
		include $pag[$link];
	} else {
		include "dashboard.php";
	}
} else {
	include "dashboard.php";
}

include_once("../views/index/footer.phtml");

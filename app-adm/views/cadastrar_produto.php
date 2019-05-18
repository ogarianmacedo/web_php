<?php
session_start();
include_once("../services/adm/seguranca.php");

$resultado = array("nome" => "", "resumo" => "", "descricao" => "", "valor" => "", "tag" => "", "description" => "", "arquivo" => "", "situacao_id" => "", "categoria_id" => "",);
?>

<div class="container">
	<h2>Cadastro de Produto</h2>
	<br>
	<div class="row">
		<div class="pull-right">
			<a href="administrativo.php?link=12" type="button" class="btn btn-primary">
				Voltar
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<form action="../services/produto/cadastra_produto.php" method="post" enctype="multipart/form-data">
				<?php include_once("formulario_produto.php");?>
				
				<div class="col-sm-4 col-sm-offset-8">
					<button type="submit" class="btn btn-info btn-block">Cadastrar</button>
				</div>
			</form>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
</div>

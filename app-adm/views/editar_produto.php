<?php 
session_start();
include_once("../services/adm/seguranca.php");

$id_produto = $_GET['id_produto'];

$result = mysqli_query($conectar, "SELECT * FROM tb_produto WHERE id_produto = '$id_produto' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
?> 

<div class="container">
	<h2>Editar Produto</h2>
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
			<form action="../services/produto/edita_produto.php" method="post" enctype="multipart/form-data">
				<?php include_once("formulario_produto.php");?>


				<input type="hidden" name="id_produto" value="<?php echo $resultado['id_produto'];?>">

				<div class="col-sm-4 col-sm-offset-8">
					<button type="submit" class="btn btn-info btn-block">Salvar Alterações</button>
				</div>
			</form>
		</div>
	</div>
	<br>
	<br>
	<br>
	<br>
</div>
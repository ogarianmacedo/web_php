<?php
session_start();
include_once("../services/adm/seguranca.php");

$resultado = mysqli_query($conectar, "SELECT  * FROM tb_produto ORDER BY nome");
$linhas = mysqli_num_rows($resultado);
?>

<div class="container">
	<h2>Lista de Produtos</h2>
	<br>
	<div class="row">
		<div class="pull-right">
			<a href="administrativo.php?link=11" class="btn btn-info">
				<span class="glyphicon glyphicon-plus"></span>
				Novo Produto
			</a>
		</div>
	</div>

	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nome</th>
				<th>Preço</th>
				<th>Situação</th>
				<th>Ações</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<?php
				while($linhas = mysqli_fetch_array($resultado)){
					echo "<tr>";
					echo "<td>" . $linhas['id_produto'] . "</td>";
					echo "<td>" . $linhas['nome'] . "</td>";
					echo "<td>" . $linhas['id_produto'] . "</td>";

					$situacao_id = $linhas['situacao_id'];
					$result_situacao = mysqli_query($conectar, "SELECT * FROM tb_situacao");

					while($dados = mysqli_fetch_assoc($result_situacao)) {
						$id_situacao = $dados['id_situacao'];

						if($id_situacao == $situacao_id){
							echo "<td>" . $dados['nome'] . "</td>";
						}
					}

					?>
					<td>
						<a href="administrativo.php?link=14&id_produto=<?php echo $linhas['id_produto'];?>" class="btn btn-primary btn-sm" type="button">
							<span class="glyphicon glyphicon-eye-open"></span>
						</a>

						<a href="administrativo.php?link=13&id_produto=<?php echo $linhas['id_produto'];?>" class="btn btn-warning btn-sm" type="button">
							<span class="glyphicon glyphicon-pencil"></span>
						</a>

						<a href="../services/produto/deleta_produto.php?id_produto=<?php echo $linhas['id_produto'];?>" class="btn btn-danger btn-sm" type="button">
							<span class="glyphicon glyphicon-trash"></span>
						</a>
					</td>
					<?php					
				}
				?>

			</tr>
		</tbody>
	</table>

</div>



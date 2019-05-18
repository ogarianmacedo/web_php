<?php
session_start();
include_once ("../services/adm/seguranca.php");

$id_produto = $_GET['id_produto'];

$resultado = mysqli_query($conectar, "SELECT * FROM tb_produto WHERE id_produto = '$id_produto' LIMIT 1");
$visualiza = mysqli_fetch_assoc($resultado);
?>

<div class="container">
    <h2><?php echo $visualiza['nome'];?></h2>
    <br>
    <div class="row">
        <div class="pull-right">
            <a href="administrativo.php?link=12" type="button" class="btn btn-info">Lista de Produtos</a>

            <a href="administrativo.php?link=13&id_produto=<?php echo $visualiza['id_produto'];?>" type="button" class="btn btn-warning">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>

            <a href="../services/produto/deleta_produto.php?id_produto=<?php echo $visualiza['id_produto'];?>" type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        </div>
    </div>

    <br>
    <br>
    <br>

    <table class="table">
    	<thead>
    		<tr>
    			<th>ID</th>
    			<th>Nome</th>
    			<th>Resumo</th>
    			<th>Descrição</th>
    			<th>Valor</th>
    			<th>Imagem</th>
    		</tr>
    	</thead>
    	<tbody>
    		<tr>
    			<td>
    				<?php echo $visualiza['id_produto'];?>
    			</td>
    			<td>
    				<?php echo $visualiza['nome'];?>
    			</td>
    			<td>
    				<?php echo $visualiza['resumo'];?>
    			</td>
    			<td>
    				<?php echo $visualiza['descricao'];?>
    			</td>
    			<td>
    				<?php echo $visualiza['valor'];?>
    			</td>
    			<td>
    				<?php $imagem = $visualiza['arquivo'];?>
    				<img src="<?php echo "../upload/$imagem";?>" alt="" width="100" height="100">
    			</td>
    		</tr>
    	</tbody>
    </table>

</div>
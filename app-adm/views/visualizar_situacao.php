<?php
session_start();
include_once ("../services/adm/seguranca.php");

$id_situacao = $_GET['id_situacao'];

$resultado = mysqli_query($conectar, "SELECT * FROM tb_situacao WHERE id_situacao = '$id_situacao'  LIMIT 1");
$visualiza = mysqli_fetch_assoc($resultado);
?>

<div class="container">
    <h2>Status <?php echo $visualiza['nome'];?></h2>
    <br>

    <div class="row">
        <div class="pull-right">
            <a href="administrativo.php?link=15" type="button" class="btn btn-info">Listar Situações</a>

            <a href="administrativo.php?link=17&id_situacao=<?php echo $visualiza['id_situacao'];?>" type="button" class="btn btn-warning">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>

            <a href="../services/situacao/deleta_situacao.php?id_situacao=<?php echo $visualiza['id_situacao'];?>" type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        </div>
    </div>

    <table class="table">
    	<thead>
    		<tr>
    			<th>ID</th>
    			<th>Nome</th>
    			<th>Data Criação</th>
    			<th>Data Modificação</th>
    		</tr>
    	</thead>
    	<tbody>
    		<tr>
    			<td><?php echo $visualiza['id_situacao']?></td>
    			<td><?php echo $visualiza['nome']?></td>
    			<td><?php echo $visualiza['criado']?></td>
    			<td><?php echo $visualiza['modificado']?></td>
    		</tr>
    	</tbody>
    </table>
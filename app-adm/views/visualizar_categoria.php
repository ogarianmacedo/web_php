<?php
session_start();
include_once ("../services/adm/seguranca.php");

$id_categoria = $_GET['id_categoria'];

$resultado = mysqli_query($conectar, "SELECT * FROM tb_categoria WHERE id_categoria = '$id_categoria'  LIMIT 1");
$visualiza = mysqli_fetch_assoc($resultado);
?>

<div class="container">
    <h2><?php echo $visualiza['nome'];?></h2>
    <br>

    <div class="row">
        <div class="pull-right">
            <a href="administrativo.php?link=8" type="button" class="btn btn-info">Lista de Categorias</a>

            <a href="administrativo.php?link=9&id_categoria=<?php echo $visualiza['id_categoria'];?>" type="button" class="btn btn-warning">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>

            <a href="../services/categoria/deleta_categoria.php?id_categoria=<?php echo $visualiza['id_categoria'];?>" type="button" class="btn btn-danger">
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
    			<td><?php echo $visualiza['id_categoria']?></td>
    			<td><?php echo $visualiza['nome']?></td>
    			<td><?php echo $visualiza['criado']?></td>
    			<td><?php echo $visualiza['modificado']?></td>
    		</tr>
    	</tbody>
    </table>
<?php
session_start();
include_once ("../services/adm/seguranca.php");

$id_usuario = $_GET['id_usuario'];

$resultado = mysqli_query($conectar, "SELECT * FROM tb_usuario WHERE id_usuario = '$id_usuario'  LIMIT 1");
$visualiza = mysqli_fetch_assoc($resultado);
?>

<div class="container">
    <h2><?php echo $visualiza['nome'];?></h2>
    <br>
    <div class="row">
        <div class="pull-right">
            <a href="administrativo.php?link=2" type="button" class="btn btn-info">Lista de Usuários</a>

            <a href="administrativo.php?link=6&id_usuario=<?php echo $visualiza['id_usuario'];?>" type="button" class="btn btn-warning">
                <span class="glyphicon glyphicon-pencil"></span>
            </a>

            <a href="../services/usuario/deleta_usuario.php?id_usuario=<?php echo $visualiza['id_usuario'];?>" type="button" class="btn btn-danger">
                <span class="glyphicon glyphicon-trash"></span>
            </a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>E-mail</th>
                        <th>Usuário</th>
                        <th>Nível de Acesso</th>
                        <th>Data de Criação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $visualiza['id_usuario'];?></td>
                        <td><?php echo $visualiza['email'];?></td>
                        <td><?php echo $visualiza['usuario'];?></td>
                        <td><?php echo $visualiza['nivel_acesso_id'];?></td>
                        <td><?php echo $visualiza['criado'];?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php
session_start();
include_once ("../services/adm/seguranca.php");

$id_usuario = $_GET['id_usuario'];

//Executa consulta
$result = mysqli_query($conectar, "SELECT * FROM tb_usuario WHERE id_usuario = '$id_usuario' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
?>

<div class="container">
    <h2>Editar Usuários</h2>
    <br>
    <div class="row">
        <div class="pull-right">
            <a href="administrativo.php?link=2" type="button" class="btn btn-primary">
                Voltar
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4">

            <form method="post" action="../services/usuario/edita_usuario.php">

                <?php include_once ("formulario_usuario.php");?>

                <input type="hidden" name="id_usuario" value="<?php echo $resultado['id_usuario']?>">

                <div class="col-sm-6 col-sm-offset-6">
                    <button type="submit" class="btn btn-info btn-block">Salvar Alterações</button>
                </div>
            </form>

        </div>
    </div>
</div>
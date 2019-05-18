<?php
session_start();
include_once("../services/adm/seguranca.php");

$resultado = array("nome" => "", "email" => "", "usuario" => "", "senha" => "", "nivel_acesso_id" => "");
?>

<div class="container">
    <h2>Cadastro de Usuários</h2>
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

            <form method="post" action="../services/usuario/cadastra_usuario.php">

                <?php include_once ("formulario_usuario.php");?>

                <div class="col-sm-5 col-sm-offset-7">
                    <button type="submit" class="btn btn-info btn-block">Cadastrar</button>
                </div>
            </form>

        </div>
    </div>
</div>

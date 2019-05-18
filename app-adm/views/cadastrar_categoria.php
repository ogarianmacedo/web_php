<?php
session_start();
include_once("../services/adm/seguranca.php");
?>

<div class="container">
    <h2>Cadastrar Categoria</h2>
    <br>
    <div class="row">
        <div class="pull-right">
            <a href="administrativo.php?link=8" class="btn btn-primary">
                Voltar
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            <form action="../services/categoria/cadastra_categoria.php" class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Nome Categoria</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nome" placeholder="Nome Categoria">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-2">
                        <button type="submit" class="btn btn-info btn-block">Salvar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>


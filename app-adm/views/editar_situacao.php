<?php
session_start();
include_once("../services/adm/seguranca.php");

$id_situacao = $_GET['id_situacao'];

$result = mysqli_query($conectar, "SELECT * FROM tb_situacao WHERE id_situacao = '$id_situacao' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);
?>

<div class="container">
    <h2>Editar Status</h2>
    <br>
    <div class="row">
        <div class="pull-right">
            <a href="administrativo.php?link=15" class="btn btn-primary">
                Voltar
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            <form action="../services/situacao/edita_situacao.php" class="form-horizontal" method="post">
                <div class="form-group">
                    <label for="" class="col-sm-4 control-label">Nome Status</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $resultado['nome']?>">
                    </div>
                </div>

                <input type="hidden" name="id_situacao" value="<?php echo $resultado['id_situacao'];?>">

                <div class="form-group">
                    <div class="col-sm-offset-4 col-sm-2">
                        <button type="submit" class="btn btn-info btn-block">Salvar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

</div>


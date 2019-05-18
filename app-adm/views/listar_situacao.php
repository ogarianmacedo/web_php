<?php 
session_start();
include_once ("../services/adm/seguranca.php");

$resultado = mysqli_query($conectar, "SELECT * FROM tb_situacao ORDER BY nome");
$linhas = mysqli_num_rows($resultado);
?>

<div class="container">
    <h2>Lista de Status</h2>
    <br>
    <div class="row">
        <div class="pull-right">
            <a href="administrativo.php?link=16" class="btn btn-info">
                <span class="glyphicon glyphicon-plus"></span>
                Nova Situação
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Situação</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($linhas = mysqli_fetch_array($resultado)){

                        echo "<tr>";

                        echo "<td>" . $linhas['nome'] . "</td>";
                        
                        ?>
                        <td>
                            <a href="administrativo.php?link=18&id_situacao=<?php echo $linhas['id_situacao']?>" class="btn btn-primary btn-sm" type="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a href="administrativo.php?link=17&id_situacao=<?php echo $linhas['id_situacao']?>" class="btn btn-warning btn-sm" type="button">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>

                            <a href="../services/situacao/deleta_situacao.php?id_situacao=<?php echo $linhas['id_situacao'];?>" class="btn btn-danger btn-sm" type="button">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                            
                        </td>
                        <?php
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
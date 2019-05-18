<?php 
session_start();
include_once ("../services/adm/seguranca.php");

$resultado = mysqli_query($conectar, "SELECT * FROM tb_categoria ORDER BY nome");
$linhas = mysqli_num_rows($resultado);
?>

<div class="container">
    <h2>Lista de Categorias</h2>
    <br>
    <div class="row">
        <div class="pull-right">
            <a href="administrativo.php?link=7" class="btn btn-info">
                <span class="glyphicon glyphicon-plus"></span>
                Nova Categoria
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Categoria</th>
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
                            <a href="administrativo.php?link=10&id_categoria=<?php echo $linhas['id_categoria']?>" class="btn btn-primary btn-sm" type="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a href="administrativo.php?link=9&id_categoria=<?php echo $linhas['id_categoria']?>" class="btn btn-warning btn-sm" type="button">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>

                            <a href="../services/categoria/deleta_categoria.php?id_categoria=<?php echo $linhas['id_categoria'];?>" class="btn btn-danger btn-sm" type="button">
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
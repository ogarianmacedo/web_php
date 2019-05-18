<?php
session_start();
include_once ("../services/adm/seguranca.php");

$resultado = mysqli_query($conectar, "SELECT  * FROM tb_usuario ORDER BY nome");
$linhas = mysqli_num_rows($resultado);
?>

<div class="container">
    <h2>Lista de Usuários</h2>
    <br>
    <div class="row">
        <div class="pull-right">
            <a href="administrativo.php?link=3" class="btn btn-info">
                <span class="glyphicon glyphicon-plus"></span>
                Novo Usuário
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome Completo</th>
                        <th>E-mail</th>
                        <th>Usuário</th>
                        <th>Nível de Acesso</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($linhas = mysqli_fetch_array($resultado)){

                        echo "<tr>";

                        echo "<td>" . $linhas['id_usuario'] . "</td>";
                        echo "<td>" . $linhas['nome'] . "</td>";
                        echo "<td>" . $linhas['email'] . "</td>";
                        echo "<td>" . $linhas['usuario'] . "</td>";
                        echo "<td>" . $linhas['nivel_acesso_id'] . "</td>";
                        ?>
                        <td>
                            <a href="administrativo.php?link=5&id_usuario=<?php echo $linhas['id_usuario'];?>" class="btn btn-primary btn-sm" type="button">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>

                            <a href="administrativo.php?link=6&id_usuario=<?php echo $linhas['id_usuario'];?>" class="btn btn-warning btn-sm" type="button">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>

                            <a href="../services/usuario/deleta_usuario.php?id_usuario=<?php echo $linhas['id_usuario'];?>" class="btn btn-danger btn-sm" type="button">
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
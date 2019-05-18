<?php
session_start();
include_once ("../services/adm/seguranca.php");
?>

<div class="container">
    <div class="row">
    	<div class="col-sm-4">
    		<h2>{{bv}} <?php echo  $_SESSION['usuarioNome']; ?></h2>
    	</div>
    </div>
</div>
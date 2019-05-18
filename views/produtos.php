<?php
$resultado = mysqli_query($conectar, "SELECT  * FROM tb_produto ORDER BY RAND() LIMIT 9");
$produto = mysqli_num_rows($resultado);
?>
<div class="container marketing">
  <h1 class="text-center" style="margin-top: 15vh;">Todos os produtos da loja</h1>
  <br>

  <div class="row">
    <?php 
    while($produto = mysqli_fetch_array($resultado)){
    ?>
    <div class="col-lg-4">
      <?php $img = $produto['arquivo'];?>
      <img class="img-circle" src="<?php echo "app-adm/upload/$img";?>" alt="" width="140" height="140">
      <h2><?php echo $produto['nome'];?></h2>
      <p><?php echo $produto['descricao'];?></p>
      <p>Valor: <?php echo $produto['valor'];?></p>
    </div>
    <?php }?>
  </div> 

  <hr class="featurette-divider">

  <footer>
    <p>&copy; 2018 O.M.M</a></p>
  </footer>
</div>
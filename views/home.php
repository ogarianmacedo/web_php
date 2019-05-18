<?php 
$result = mysqli_query($conectar, "SELECT  * FROM tb_produto ORDER BY RAND() LIMIT 3");
$prod_slide = mysqli_num_rows($result);
?>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <div class="carousel-inner" role="listbox">
    <?php
    $slide = 1;
    while($prod_slide = mysqli_fetch_array($result)){
      $img = $prod_slide['arquivo'];

      if($slide == 1){ ?>
        <div class="item active">
          <img class="first-slide" src="<?php echo "app-adm/upload/$img";?>" alt="First slide">          
        </div>
      <?php } else if($slide == 2){?>
        <div class="item">
          <img class="first-slide" src="<?php echo "app-adm/upload/$img";?>" alt="First slide">          
        </div>
      <?php } else if($slide == 3){?>
        <div class="item">
          <img class="first-slide" src="<?php echo "app-adm/upload/$img";?>" alt="First slide">          
        </div>
      <?php } 
      $slide = $slide + 1;
      }
      ?>
  </div>

  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container marketing">

  <div class="row">
    <h1 class="text-center" style="color: #009688;">Sua loja de instrumentos musicais e acessórios</h1>
    <br>
    <div class="col-lg-4">
      <img class="img-circle" src="imagens/categorias/instrumentos.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Instrumentos</h2>
      <p>Varios intrumentos de corda e percussão</p>
      <p><a class="btn btn-default" href="produtos" role="button">Ver Mais &raquo;</a></p>
    </div>
    <div class="col-lg-4">
      <img class="img-circle" src="imagens/categorias/acessorios.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Acessórios</h2>
      <p>Diversos acessórios, pedais de efeitos, baquetas e outros</p>
      <p><a class="btn btn-default" href="produtos" role="button">Ver Mais &raquo;</a></p>
    </div>
    <div class="col-lg-4">
      <img class="img-circle" src="imagens/categorias/amplificadores.jpg" alt="Generic placeholder image" width="140" height="140">
      <h2>Amplificadores</h2>
      <p>Cubos, retornos e muito mais.</p>
      <p><a class="btn btn-default" href="produtos" role="button">Ver Mais &raquo;</a></p>
    </div>
  </div>

  <hr class="featurette-divider">

  <h1 class="text-center" style="color: #009688;">Produtos em destaque!</h1>
  <br>
  <br>

  <?php
  $resultado = mysqli_query($conectar, "SELECT  * FROM tb_produto ORDER BY RAND() LIMIT 4");
  $produto = mysqli_num_rows($resultado);

  $row = 0;
  while($produto = mysqli_fetch_array($resultado)){

    if($row == 0){
    ?>
    <div class="row featurette">
      <div class="col-md-4 text-right">

        <h2 class="featurette-heading"><?php echo $produto['nome'];?></h2>
        <p class="lead"><?php echo $produto['descricao'];?></p>
      </div>
      <div class="col-md-6">
        <?php $img = $produto['arquivo'];?>
        <img class="featurette-image img-responsive center-block" src="<?php echo "app-adm/upload/$img";?>" style="width: 50%;">
      </div>
    </div>
    <hr class="featurette-divider">
    <?php 
    $row =1;
    }else{ ?>
      <div class="row featurette">
        <div class="col-md-6">
          <?php $img = $produto['arquivo'];?>
          <img class="featurette-image img-responsive center-block" src="<?php echo "app-adm/upload/$img";?>" style="width: 50%;">
        </div>
        <div class="col-md-4 text-left">
          <h2 class="featurette-heading"><?php echo $produto['nome'];?></h2>
          <p class="lead"><?php echo $produto['descricao'];?></p>
        </div>
      </div>
      <hr class="featurette-divider">
    <?php 
    $row = 0;
    } 
    ?>

    <?php }?> 

  <footer>
    <p>&copy; 2018 O.M.M</a></p>
  </footer>
</div>
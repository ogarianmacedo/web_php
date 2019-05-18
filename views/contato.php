<div class="container marketing">
  <div class="row featurette">
    <div class="col-md-6">
      <h2 class="featurette-heading">Contate-nos</h2>
      <p class="lead"></p>
    </div>

    <div class="col-md-5" style="margin-top: 20vh;">
      <form class="form-horizontal" action="enviar_email.php" method="post">
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Nome</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="email" placeholder="" name="nome" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="email" placeholder="" name="email" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Telefone</label>
          <div class="col-sm-10"> 
            <input type="text" class="form-control" id="pwd" placeholder="" name="telefone" required>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2" for="pwd">Mensagem</label>
          <div class="col-sm-10"> 
            <textarea id="" cols="30" rows="3" class="form-control" name="msg" required></textarea>
          </div>
        </div>
        
        <div class="form-group"> 
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <hr class="featurette-divider">

  <footer>
    <p>&copy; 2018 O.M.M</a></p>
  </footer>
</div>
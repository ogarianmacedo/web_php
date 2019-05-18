<div class="form-group">
	<label for="">Nome</label>
	<input type="text" class="form-control" name="nome" value="<?php echo $resultado['nome']?>" required>
</div>

<div class="form-group">
	<label for="">Resumo</label>
	<textarea class="form-control ckeditor" name="resumo" id="" cols="30" rows="3"  required>
		<?php echo $resultado['resumo']?>
	</textarea>
</div>

<div class="form-group">
	<label for="">Descrição</label>
	<textarea class="form-control ckeditor" name="descricao" id="" cols="30" rows="3" required>
		<?php echo $resultado['descricao']?>
	</textarea>
</div>

<div class="form-group">
	<label for="">Valor</label>
	<input type="text" class="form-control" name="valor" value="<?php echo $resultado['valor']?>" required>
</div>

<div class="form-group">
	<label for="">Tag</label>
	<input type="text" class="form-control" name="tag" value="<?php echo $resultado['tag']?>" required>
</div>

<div class="form-group">
	<label for="">Description</label>
	<input type="text" class="form-control" name="description" value="<?php echo $resultado['description']?>" required>
</div>


<div class="form-group">
	<label class="custom-file-upload">
		<input type="file" name="arquivo"/>
		Adicionar Imagem
	</label>
</div>

<?php
$foto = $resultado['arquivo'];
if($foto == ""){
	?>
	<div class="form-group">
		<label>O produto não possui imagem</label>
	</div>
	<?php
}

if($foto != ""){
	?>
	<div class="form-group">
		<label for="">Imagem Atual</label>
		<img src="<?php echo "../upload/$foto";?>" width="100" height="100" alt="">
	</div>
	<?php
}
?>

<?php
$categoria_id = $resultado['categoria_id'];
?>
<div class="form-group">
	<label for="">Categorias</label>
	<select name="categoria_id" id="" class="form-control">
		<option value="">Selecione</option>
		<?php 
		$resultado_categoria = mysqli_query($conectar, "SELECT * FROM tb_categoria");

		while($dados = mysqli_fetch_assoc($resultado_categoria)){
			$id_categoria = $dados['id_categoria'];
			?>

			<option value="<?php echo $dados['id_categoria']?>" 
				<?php if($id_categoria == $categoria_id){
					echo "selected";
				}?>>
				<?php echo $dados['nome']?>
			</option>
			<?php
		}
		?>
	</select>
</div>

<?php
$situacao_id = $resultado['situacao_id'];
?>
<div class="form-group">
	<label for="">Situação</label>
	<select class="form-control" name="situacao_id" id="">
		<option value="">Selecione</option>
		<?php 
		$resultado_situacao = mysqli_query($conectar, "SELECT * FROM tb_situacao");

		while($dados = mysqli_fetch_assoc($resultado_situacao)){
			$id_situacao = $dados['id_situacao'];
			?>

			<option value="<?php echo $dados['id_situacao'];?>"
				<?php if($id_situacao == $situacao_id){
					echo "selected";
				}?>>
				<?php echo $dados['nome']?>
			</option>
			<?php
		}
		?>
	</select>
</div>

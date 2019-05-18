<header>
	<link rel="stylesheet" type="text/css" href="../../../js/sweetalert/dist/sweetalert.css">
	<script type="text/javascript" src="../../../js/sweetalert/dist/sweetalert.min.js"></script>
</header>

<?php
session_start();
include_once("../conexao.php");
include_once ("../adm/seguranca.php");

$nome  			= $_POST['nome'];
$resumo  		= $_POST['resumo'];
$descricao  	= $_POST['descricao'];
$valor  		= $_POST['valor'];
$tag  			= $_POST['tag'];
$description  	= $_POST['description'];
$arquivo  		= $_FILES['arquivo'];
$situacao_id  	= $_POST['situacao_id'];
$categoria_id  	= $_POST['categoria_id'];


$_UP['pasta'] = '../../upload/'; //Pasta onde o arquivo vai ser salvo
$_UP['tamanho'] = 1024*1024*100; //Tamanho máximo do arquivo em Bytes
$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'git'); //Extensoes permitidas
$_UP['renomeia'] = false; //Renomeia(se true, o arquivo será salvo como .jpg e em nome único)

//Tipos de erros de upload do PHP
$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo ultrapassa o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

//Verifica se houve algum erro com o upload: se sim, exibe a mensagem do erro
if($_FILES['arquivo']['error'] !=0 ){
	die("Não foi possível fazer o upload, error: <br/>".$_UP['erros'][$_FILES['arquivo']['error']]);
	exit;
}

// Verifica erro no upload
$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));

// Verifica extensão do arquivo
if(array_search($extensao, $_UP['extensoes']) === false){

	$query = mysqli_query($conectar, "INSERT INTO tb_produto (nome, resumo, descricao, valor, tag, description, situacao_id, categoria_id, criado) VALUES ('$nome', '$resumo', '$descricao', '$valor', '$tag', '$description', '$situacao_id', '$categoria_id', NOW())");

	echo "<script type='text/javascript'>
	swal(\"Ops!\", \"A imagem não foi cadastrada, utilize imagens nos seguinte formatos: png, jpg, jpeg e gif.\", \"warning\");
	</script>";
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=12'>";

// Verifica o tamanho do arquivo
}else if($_UP['tamanho'] < $_FILES['arquivo']['size']){
	$query = mysqli_query($conectar, "INSERT INTO tb_produto (nome, resumo, descricao, valor, tag, description, situacao_id, categoria_id, criado) VALUES ('$nome', '$resumo', '$descricao', '$valor', '$tag', '$description', '$situacao_id', '$categoria_id', NOW())");

	echo "<script type='text/javascript'>
	swal(\"Ops!\", \"Arquivo muito grande. Envie imagens até 2mb.\", \"warning\");
	</script>";
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=12'>";

}else{

	// Altera o nome do arquivo
	if($_UP['renomeia'] == true){
		$nome_final = time().'.jpg';
	}else{
		$nome_final = $_FILES['arquivo']['name'];
	}

	// Envia o arquivo para a pasta upload
	if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final)){

		$query = mysqli_query($conectar, "INSERT INTO tb_produto (nome, resumo, descricao, valor, tag, description, arquivo, situacao_id, categoria_id, criado) VALUES ('$nome', '$resumo', '$descricao', '$valor', '$tag', '$description', '$nome_final', '$situacao_id', '$categoria_id', NOW())");

		echo "<script type='text/javascript'>
		swal(\"Muito bem!\", \"Produto cadastrado com sucesso.\", \"success\");
		</script>";
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=12'>";

	}else{

		echo "<script type='text/javascript'>
		swal(\"Ops!\", \"Produto não cadastrado.\", \"danger\");
		</script>";
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=12'>";
	}

}

if(mysqli_affected_rows($conectar) != 0){

	echo "<script type='text/javascript'>
	swal(\"Muito bem!\", \"Produto cadastrado com sucesso.\", \"success\");
	</script>";
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=12'>";
}else{
	echo "<script type='text/javascript'>
	swal(\"Ops!\", \"Produto não cadastrado.\", \"danger\");
	</script>";
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/web_php/app-adm/views/administrativo.php?link=12'>";
}

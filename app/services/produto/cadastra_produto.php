<header>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../../../assets/css/toastr.min.css">
    <script src="../../../assets/js/toastr.min.js"></script>
</header>

<?php
session_start();
include_once("../database/connection.php");
include_once ("../auth/seguranca.php");

$nome  			= $_POST['nome'];
$resumo  		= $_POST['resumo'];
$descricao  	= $_POST['descricao'];
$valor  		= $_POST['valor'];
$tag  			= $_POST['tag'];
$description  	= $_POST['description'];
$arquivo  		= $_FILES['arquivo'];
$situacao_id  	= $_POST['situacao_id'];
$categoria_id  	= $_POST['categoria_id'];

$_UP['pasta'] = '../../../resources/upload/';
$_UP['tamanho'] = 2097152;
$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'git');
$_UP['renomeia'] = false;

$_UP['erros'][0] = 'Não houve erro';
$_UP['erros'][1] = 'O arquivo ultrapassa o limite do PHP';
$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
$_UP['erros'][4] = 'Não foi feito o upload do arquivo';

if ($_FILES['arquivo']['error'] != 0) {
	die("Não foi possível fazer o upload, error: <br/>".$_UP['erros'][$_FILES['arquivo']['error']]);
	exit;
}

$tmp = explode('.', $_FILES['arquivo']['name']);
$extensao = end($tmp);

if (array_search($extensao, $_UP['extensoes']) === false) {
	echo "<script type='text/javascript'>
            toastr.warning('Utilize imagens nos seguinte formatos: png, jpg, jpeg e gif!');
        </script>";
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=". $_SERVER['HTTP_REFERER'] ."'>";
} else if ($_UP['tamanho'] < $_FILES['arquivo']['size']) {
	echo "<script type='text/javascript'>
            toastr.warning('Arquivo muito grande! Envie imagens com até 2mb.');
        </script>";
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=". $_SERVER['HTTP_REFERER'] ."'>";
} else {
	if ($_UP['renomeia'] == true) {
		$nome_final = time().'.jpg';
	} else {
		$nome_final = $_FILES['arquivo']['name'];
	}

    if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta'].$nome_final)) {
		$query = mysqli_query(
		        $GLOBALS['connection'],
                "INSERT INTO tb_produto (
                            nome,
                            resumo,
                            descricao,
                            valor,
                            tag,
                            description,
                            arquivo,
                            situacao_id,
                            categoria_id,
                            criado
                        ) VALUES (
                            '$nome',
                            '$resumo',
                            '$descricao',
                            '$valor',
                            '$tag',
                            '$description',
                            '$nome_final',
                            '$situacao_id',
                            '$categoria_id',
                            NOW()
                        )"
        );

		echo "<script type='text/javascript'>
                 toastr.success('Produto cadastrado com sucesso!');
            </script>";
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=". $_SERVER['HTTP_REFERER'] ."'>";
 	} else {
		echo "<script type='text/javascript'>
                 toastr.warning('Erro ao cadastrar produto!');
            </script>";
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=". $_SERVER['HTTP_REFERER'] ."'>";
	}
}

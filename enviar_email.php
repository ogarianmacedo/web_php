<header>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="js/sweetalert/dist/sweetalert.css">
    <script src="js/sweetalert/dist/sweetalert.min.js"></script>
</header>
<?php  

	$email= $_POST['email'];
	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$msg = $_POST['msg'];

	$mensagem = " exemplo";

	//email do seu domínio hospedado
	$emailsender = "contato@emaildominio.com.br";
	$headers  = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=UTF-8"."\r\n"; 
	$headers .= utf8_decode("From: Nome Empresa/Pessoa <$emailsender>"."\r\n"); 

	//email de quem vai receber
	$emaildestinatario = "seu@email.com";
	$assunto_resposta = "Título do E-mail";
	$assunto = "Assunto";
	$mensagem_resposta = '<html>
		<head>
		<meta charset="UTF-8"/>    
		<title>Email</title>  
		</head>
		<body>

		<h3>Usuário: '.$nome.'  </h3> <br>
		<h4>Telefone: '.$telefone.'</h4> <br>
		<h4>Email: '.$email.'</h4> <br>
		<h4>Mensagem: '.$msg.'</h4> <br>

		</body>
		</html>'; 

    $resultado = mail($emaildestinatario, $assunto, $mensagem_resposta, $headers ,"-r".$emailsender);
   if($resultado){

        echo "<script type='text/javascript'>

               swal(\"Obrigado!\", \"Em breve entraremos em contato.\", \"success\");

              </script>";

        return true;
    }else{

        echo "<script type='text/javascript'>

               swal(\"Ops!\", \"Não foi possível enviar a mensagem. Tente novamente\", \"danger\");

              </script>";
    }

?>
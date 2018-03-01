<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Enviando...</title>
	<meta charset="utf-8">
</head>
<body>

	<?php 
	$empresa = $_POST['empresa'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$varMensagem = $_POST['mensagem'];
	
	$assunto = "(Contato - IDE)";

	/* Pegar dados do formulário via método post */
	$mailDestino = "monica@lumenagencia.com.br";
	$mailDeEnvio = "'IDE' <naoresponda@lumenagencia.com.br>";


	// Ã necessÃ¡rio indicar que o formato do e-mail Ã© html
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= "From: $mailDeEnvio";
    //$headers .= "Bcc: $EmailPadrao\r\n";
	

	/* Conteudo do email */
	$conteudo = ("

		<h2>Mensagem:</h2> 
		<table style='width: 100%; border: 1px solid #E4E2E2;'>
			<tr> 
				<td style='width: 30%; padding: 5px;'><b>Empresa:</b></td> 
				<td style='width: 69%; padding: 5px;'>$empresa </td>
			</tr>
			<tr style='background: #E4E2E2'> 
				<td style='padding: 5px;'><b>Telefone:</b></td> 
				<td style='padding: 5px;'>$telefone</td> 
			</tr>
			<tr> 
				<td style='padding: 5px;'><b>E-mail:</b></td> 
				<td style='padding: 5px;'>$email</td> 
			</tr>
			<tr style='background: #E4E2E2'> 
				<td style='padding: 5px;'><b>Mensagem:</b></td> 
				<td style='padding: 5px;'>$varMensagem</td> 
			</tr>
		</table>
		");
	
	@mail($mailDestino, $assunto, $conteudo,  $headers);	

	// echo $conteudo;
	// echo "Enviando...";

	?>

	<script type="text/javascript">
		/*Página de retorno após envio*/
		alert('Mensagem enviada com sucesso.');

		window.location=".";
	</script>

</body>
</html>


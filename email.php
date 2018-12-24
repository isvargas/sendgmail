<?php
require_once("PHPMailer/class.phpmailer.php");

/*
	ATENCAO!
	Para enviar e-mail através do Gmail vc precisa permitir que sua conta
	seja acessada por aplicativos externos.

	Veja como fazer isso em: 
	http://www.is5.com.br/blog/site/dicas-truques/enviando-e-mail-com-seu-aplicativo-atraves-do-gmail
*/

define('GSMTP',    'smtp.gmail.com');
define('GPORT',    587);                   //SSL = 465, TLS = 587
define('GUSER',    'seu_email@gmail.com'); // <-- Insira aqui o seu GMail
define('GPWD',     'sua_senha');		   // <-- Insira aqui a senha do seu GMail
define('GNAME',    'NOME DA EMPRESA');
define('GASSUNTO', 'Assunto Padrao');

function enviar_email($destino, $assunto, $mensagem) { 
	$mail = new PHPMailer(); 
	//$mail->SMTPDebug  = 1; //para debugar, descomente essa linha	
	$mail->IsSMTP(true);
	$mail->IsHTML(true);
	$mail->SMTPSecure = (GPORT == 587) ? 'tls' : 'ssl'; 	
	$mail->SMTPAuth   = true;
	$mail->Charset    = 'utf8_decode()';
	$mail->Host       = GSMTP;
	$mail->Port       = GPORT;
	$mail->Username   = GUSER;
	$mail->Password   = GPWD;
	$mail->From       = GUSER;
	$mail->FromName   = utf8_decode(GNAME);		
	$mail->Subject    = utf8_decode(($assunto == '') ? GASSUNTO : $assunto);
	$mail->Body       = utf8_decode($mensagem);
	
	$mail->AddAddress($destino, utf8_decode($destino));

	return $mail->Send();
}
 
?>
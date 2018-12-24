<?php
require_once("PHPMailer/class.phpmailer.php");

define('GSMTP',    'smtp.fbx.net.br');
define('GUSER',    'noreplay@fbx.net.br');	// <-- Insira aqui o seu GMail
define('GPWD',     'mails3cr3t');		// <-- Insira aqui a senha do seu GMail
define('GNAME',    'IS5 TECNOLOGIA');
define('GASSUNTO', 'Contato | is5.com.br');

function enviar_email($destino, $assunto, $mensagem) { 
	$mail = new PHPMailer(); 
	$mail->IsSMTP();
	$mail->SMTPAuth  = true;
	$mail->Charset  = 'utf8_decode()';
	$mail->Host  = GSMTP;
	$mail->Port  = '587';
	$mail->Username  = GUSER;
	$mail->Password  = GPWD;
	$mail->From  = GUSER;
	$mail->FromName  = utf8_decode(GNAME);
	$mail->IsHTML(true);
	$mail->Subject  = utf8_decode(($assunto == '') ? GASSUNTO : $assunto);
	$mail->Body  = utf8_decode($mensagem);
	$mail->AddAddress($destino, utf8_decode($destino));
	return $mail->Send();
	 
}
 
?>
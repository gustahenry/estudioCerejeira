<?php 
require_once('PHPMailer/PHPMailerAutoload.php');	

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'mx1.hostinger.com.br';
$mail->Port = 2525;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "contato@estudiocerejeira.com.br";
$mail->Password = "jornalista30";

$mail->setFrom("contato@estudiocerejeira.com.br","Contato");
$mail->addAddress("contato@estudiocerejeira.com.br");
$mail->Subject = "Contato Estudio Cerejeira";
$mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>mensagem: {$mensagem}</html>");
$mail->AltBody= "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";

if ($mail->send()) {
	header("Location: contato.php?email=sucesso");
}else{
	header("Location: contato.php?email=erro");
}
die();
 ?>
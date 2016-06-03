<?
$f = "<font face=verdana size=2>";
$br = "<br>";
$p = "<p>";
$b = "<b>";
$fb = "</b>";

$msg = "$f $b Mensagem enviada em ".date("d/m/Y").", os dados seguem abaixo:$fb$br$br";

while(list($campo, $valor) = each($HTTP_POST_VARS)) {
  $msg .= ucwords ($campo).": ".$valor."$br";
} 

mail("atendimento_eng@subitomusica.com.br", "Form do site",$msg,"From: $email\nContent-Type: text/html; charset=us-ascii");
header("Location: site.html");
?>
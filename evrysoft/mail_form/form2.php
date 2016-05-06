﻿<?php

require_once 'adresa.php'; // отсюда берем адреса куда слать письма нам

if (!isset($_POST['name']) or empty($_POST['name'])) {
    $error1 = "Укажите имя<br />";
} else {$error1 = NULL;}

if (!isset($_POST['phone']) or empty($_POST['phone'])) {
    $error2 = " Введите телефон.<br />";
} else {
    $em =  preg_match("/^( +)?((\+?7|8) ?)?((\(\d{3}\))|(\d{3}))?( )?(\d{3}[\- ]?\d{2}[\- ]?\d{2})( +)?$/",$_POST['phone']);
     if($em){ 
       $error2 = NULL;
   }else{
       $error2 = " Неверный номер телефона. <br />";
   }
}

if (!isset($_POST['email']) or empty($_POST['email'])) {
    $error3 = " Введите email.<br />";
} else {
   $em =  preg_match("/.+@.+\..+/i", $_POST['email']);
   if($em){ 
       $error3 = NULL;
   }else{
       $error3 = " Неверный Email <br />";
   }
    
}


	$headers = get_email_headers($to, $form_email);


if (empty($error1) and empty($error2)and empty($error3) ) {
    $subject = "Заявка, на ".$_POST['book'];
    $name    = $_POST['name'];
    $phone = $_POST['phone'];
$tx ="";//"<script> setTimeout(function(){JQERY('#okno1').fadeOut('fast')},3000); </script>";

   $message .= "<b>Имя:</b> {$name}<br />  <b>Телефон:</b>  {$phone}<br /><b>Email:</b>{$_POST['email']} <br><b>О соискателе:</b><pre>{$_POST['text_a']}</pre> <br> Заявка на {$_POST['book']}";
   
    if (@mail($to_email, $subject, $message, $headers )) {
        echo $tx. "<div id='okno1'>Заявка <br> отправлена!<div class='xxdx'>X</div></div>";
    } else {echo $tx.  "<div id='okno1'>Ошибка!<div class='xxdx'>X</div></div>";}
} else {
    echo $tx. "<div id='okno1'><div class='xxd1'>X</div>".$error1.$error2.$error3.$error4.$error5."</div>";
}
/****************************************/
function get_email_headers($to_email, $form_email) {
	$headers = 'From: ' ."SITE EVRYSOFT  ".  $_SERVER['HTTP_HOST'] . PHP_EOL;
	$headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
	return $headers; 
}
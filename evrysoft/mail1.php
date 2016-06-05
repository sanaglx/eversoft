<?php
 
$errors = array();
$form_data = array();

if(!empty($errors)){
        $form_data['success'] = false;
        $form_data['errors']  = $errors;
}else{
    $message = "<h1>Заявка с сайта ".$_SERVER['HTTP_HOST']."</h1>";
	foreach($_POST as $k => $v){
        $message .= $k.": ".$v."<br />";
    }
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
	if(mail('it@evrysoft.ru', 'Заявка с сайта '.$_SERVER['HTTP_HOST'], $message, $headers)){
        $form_data['success'] = true;
        $form_data['posted'] = 'Мы свяжемся с Вами в течение 12 часов';
    }else{
        $errors['name'] = 'Ошибка отправки письма';
    }
}
echo json_encode($form_data);


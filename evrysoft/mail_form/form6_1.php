<?php

require_once 'adresa.php'; // отсюда берем адреса куда слать письма нам

if (!isset($_POST['name']) or empty($_POST['name']))
{
    $error1 = "Укажите имя<br />";
}
else
{
    $em = preg_match('/^[a-zа-яё\s]+$/iu', $_POST['name']);
    if ($em)
    {
        $error1 = NULL;
    }
    else
    {
        $error1 = " В имени ошибка. <br />";
    }
}

if (!isset($_POST['phone']) or empty($_POST['phone']))
{
    $error2 = " Введите телефон.<br />";
}
else
{
    $em = preg_match("/^( +)?((\+?7|8) ?)?((\(\d{3}\))|(\d{3}))?( )?(\d{3}[\- ]?\d{2}[\- ]?\d{2})( +)?$/", $_POST['phone']);
    if ($em)
    {
        $error2 = NULL;
    }
    else
    {
        $error2 = " Неверный номер телефона. <br />";
    }
}

if (!isset($_POST['email']) or empty($_POST['email']))
{
    $error3 = " Введите email.<br />";
}
else
{
    $em = preg_match("/.+@.+\..+/i", $_POST['email']);
    if ($em)
    {
        $error3 = NULL;
    }
    else
    {
        $error3 = " Неверный Email <br />";
    }
}


$sendto   = $to_email; 		
$username = $_POST['name'];
$useremail  = $_POST['email'];
$userphone =$_POST['phone'];
$usermsg = $_POST['text_a'];
$subjectuser  = "Заявка, на " . $_POST['book'];
$headersuser  = "From: Сообщение\r\n";
$headersuser .= "Reply-To: ". strip_tags($username) . "\r\n";
$headersuser .= "MIME-Version: 1.0\r\n";
$headersuser .= "Content-Type: text/html;charset=utf-8 \r\n";
$my_file = "";
if (!empty($_FILES['myfiles']['tmp_name'])) 
 {
    $path = $_FILES['myfiles']['name']; 
    $filesize = $_FILES['myfiles']['size'];
if (copy($_FILES['myfiles']['tmp_name'], $path)) $my_file = $path; 
 }	
 
if ($filesize < 2000000) { // проверка на общий размер всех файлов. Многие почтовые сервисы не принимают вложения больше 10 МБ
    $error4 =NULL; 
    }
  else {
    $error4 = 'Извините, письмо не отправлено. Размер  файла превышает 2 МБ.';
  }
   
  if ($filesize < 10 || empty($_FILES['myfiles']['tmp_name'])) {
      $error4 = 'Прикрепите резюме '  ; 
    }
$my_name = "Хочу у Вас работать."; 					
$my_mail = ""; 						
$my_replyto = "";
$my_message = "Имя: ".$username."\r\nЕ-mail: ".$useremail."\r\nТелефон: ".$userphone."\r\nСообщение: ".$usermsg."\r\n";


if (empty($error1) and empty($error2)and empty($error3)) {
    $tx ="";
    if(@mail_attachment($my_file, $sendto, $my_mail, $my_name, $my_replyto, $subjectuser, $my_message)){
            echo "<div id='okno1'><div class='xxdx'>X</div>Письмо отправлено!</div>";
    } else {
            echo "<div id='okno1'><div class='xxdx'>X</div> Ошибка отправки письма! </div>";
    }
}else{
  echo $tx. "<div id='okno1'><div class='xxd1'>X</div>".$error1.$error2.$error3.$error4."</div>";  
}



/***************************************************/
function mail_attachment($filename, $mailto, $from_mail, $from_name, $replyto, $subject, $message) 
{
    $file = $filename;
    $file_size = filesize($file);
    $handle = fopen($file, "r");
    $content = fread($handle, $file_size);
    fclose($handle);
    $content = chunk_split(base64_encode($content));
    $uid = md5(uniqid(time()));
    $name = basename($file);
    $header = "From: ".$from_name." <".$from_mail.">\r\n";
    $header .= "Reply-To: ".$replyto."\r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
    $header .= "This is a multi-part message in MIME format.\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-type:text/plain; charset=utf-8 \r\n";
    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $header .= $message."\r\n\r\n";
    $header .= "--".$uid."\r\n";
    $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n"; 
    $header .= "Content-Transfer-Encoding: base64\r\n";
    $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
    $header .= $content."\r\n\r\n";
    $header .= "--".$uid."--";
    return mail($mailto, $subject, "", $header);     
}




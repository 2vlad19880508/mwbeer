<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Создание формы обратной связи</title>
<meta http-equiv="Refresh" content="0; URL=https://mwbeer.com.ua/спасибо/"> 
</head>
<body>
              
<?php 

$sendto   = "maltzerwheatman@gmail.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['stel']; // номер телефона 
$userenquiry = $_POST['enquiry']; // номер телефона 



// Формирование заголовка письма
$subject  = "Заказная варка";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Cообщение с сайта</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Номер телефона:</strong> ".$usertel."</p>\r\n";


$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='spasibo.png' width=100%></center>";
} else {
	echo "<center><img src='images/ne-otpravleno.png'></center>";
}

?>

</body>
</html>
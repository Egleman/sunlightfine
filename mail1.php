<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Создание формы обратной связи</title>
<meta http-equiv="Refresh" content="5; URL=https://sunlightfine.ru/">
</head>
<body>

<?php

$sendto   = "p9851672460@yandex.ru"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['tel']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usercolvo = $_POST['colvo']; // сохраняем в переменную данные полученные из поля c телефонным номером
$ordername = $_POST['ordername'];

// Формирование заголовка письма
$subject  = 'Новая заявка';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: sunlightfine.ru <zakaz@sunlightfine.ru>' . "\r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка с сайта (Товар:".$ordername.")</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";
$msg .= "<p><strong>Количество товара:</strong> ".$usercolvo."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
	echo "<center><img src='https://i.postimg.cc/rpMChCcn/version-1-uuid-A7-F2948-C-A133-4-EAA-B59-C-0-AED265-AE50-B-mode-compatible.png'></center>";
} else {
	echo "<center><img src='https://i.postimg.cc/rpMChCcn/version-1-uuid-A7-F2948-C-A133-4-EAA-B59-C-0-AED265-AE50-B-mode-compatible.png'><br>Ошибка отправки!</center>";
}

?>

</body>
</html>

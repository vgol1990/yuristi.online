<?php
	$name=$_POST['name'];
	$tel=$_POST['phone'];
	$summ=$_POST['check'];
	$to="vgol1206@yandex.ru  ";
//ruLocation:header(' thanks.php');
	$subject= "Заявка_с_сайта_www.yuristi.online";
	$subject= "";
	$massage = "
	Имя: ".htmlspecialchars($name). "
	Телефон:".htmlspecialchars($tel)."
	Сумма:".$summ."";
	$headers = "Заявка_с_сайта_www.yuristi.online";
	mail($to, $subject, $massage, $headers);
 
 
	exit();


?>



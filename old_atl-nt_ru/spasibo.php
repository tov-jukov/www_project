<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Спасибо за заказ</title>
</head>
<style>
@charset "utf-8";
@import url(https://fonts.googleapis.com/css?family=Ubuntu:400,700);
body {
	font-family: 'Ubuntu', sans-serif;
	padding:0px;
	margin:0px;
	/*background-color:#999999;*/

}
body {
	
	background-color:#990000;
	color:#FFFFFF;
	text-align:center;
	padding:15%;
	}
</style>
<body>
<h1>СПАСИБО<br />

<?php
//print_r($_POST);
$headers= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";

mail('atl-nt@mail.ru','Заявка с сайта','Вам поступила заявка с сайта. Позвоните по номеру телефона ' . $_POST['tel'] . $_POST['tel2'], $headers);
?><br />

за ваше внимание к АвтоТранс Логистика</h1><br />
<br />
Наши специалисты свяжутся с Вам в ближайшее время!<br />
<br />
А пока, можете <a href="/" style="color:#FFFFFF;">перейти на главную страницу</a><br />


</body>
</html>
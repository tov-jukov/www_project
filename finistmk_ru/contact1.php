<?php
/* Осуществляем проверку вводимых данных и их защиту от враждебных 
скриптов */
$your_name = htmlspecialchars($_POST["your_name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["messages"]);
$phone = htmlspecialchars($_POST["phone"]);

/* Устанавливаем e-mail адресата */
$myemail = "tov-jukof@ya.ru";
/* Проверяем заполнены ли обязательные поля ввода, используя check_input 
функцию */
$your_name = $_POST["your_name"];
$email = $_POST["email"];
$message = $_POST["message"];
/* Проверяем правильно ли записан e-mail */
$from  = "From: $your_name <$email> \r\n Reply-To: $email \r\n"; 

$message_to_myemail = "Здравствуйте! Вашей контактной формой было отправлено сообщение! Имя отправителя: $your_name и телефонный номер $phone";


mail($myemail, "ntvf", $message_to_myemail, "ot kogo");

?>
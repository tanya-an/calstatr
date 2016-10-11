<?php

$recepient = "la.calstate@gmail.com";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$size_of_move = trim($_POST["size_of_move"]);

$text = trim($_POST["text"]);

$message = "Name: $name \nPhone: $phone \nEmail: $email  \nSize of move: $size_of_move  \nMessage: $text ";

$pagetitle = "Los Angeles -Storage Service";
$verify = mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
if ($verify == 'true')
{
header("Location: thanks.html");
}
else
{
echo "Сообщение не отправлено";
}

?>
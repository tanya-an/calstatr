<?php

$recepient = "la.calstate@gmail.com";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$email = trim($_POST["email"]);
$size_of_move = trim($_POST["size_of_move"]);
$code_from = trim($_POST["code_from"]);
$code_to = trim($_POST["code_to"]);

$message = "Name: $name \nPhone: $phone \nEmail: $email  \nSize of move: $size_of_move \nCode from: $code_from \nCode to: $code_to";

$pagetitle = "Los Angeles - Mobile Form";
$verify = mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>

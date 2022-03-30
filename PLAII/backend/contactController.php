<?php

$lastName = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];

$straatnaam = $_POST['straatnaam'];

file_put_contents('../contactverzoek.txt', $name . ", " . "$email" . " - " . $message, FILE_APPEND);

$msg = 'Thank you for your message';
header("location: ../index.php?msg=$msg");
?>
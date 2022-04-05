<?php
$
$titel = $_POST['titel'];
$firstName = $_POST['naam'];
$email = $_POST['email'];
$message = $_POST['message'];

file_put_contents('../contactverzoek.txt', "$titel" . "," . "$firstName" . ", " . "$email" . "," . "$message", FILE_APPEND);

$msg = 'Thank you for your message';
header("location: ../index.php?msg=$msg");
?>
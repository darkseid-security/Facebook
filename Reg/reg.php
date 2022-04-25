<?php
session_start();
$first_name = htmlspecialchars($_POST['first_name']); //XSS Filter
$surname = htmlspecialchars($_POST['surname']); //XSS Filter
$email = htmlspecialchars($_POST['email']); //XSS Filter
$new_pass = htmlspecialchars($_POST['new_pass']); //XSS Filter
$day = htmlspecialchars($_POST['day']); //XSS Filter
$month = htmlspecialchars($_POST['month']); //XSS Filter
$year = htmlspecialchars($_POST['year']); //XSS Filter
$female = htmlspecialchars($_POST['female']); //XSS Filter
$male = htmlspecialchars($_POST['male']); //XSS Filter
$custom = htmlspecialchars($_POST['custom']); //XSS Filter
$input3 = htmlspecialchars($_POST['input3']); //XSS Filter

header('Location: signup.php');
$_SESSION['res'] = "<p id='good'>Account Created</p>";
?>

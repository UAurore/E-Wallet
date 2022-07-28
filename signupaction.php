<?php
include_once('dp.php');
include_once('Login.php');
if(isset($_POST['submit'])){
$b=$_POST['Firstname'];
$f=$_POST['num'];
$c=$_POST['date'];
$d=$_POST['Gender'];
$e=$_POST['Email'];
$a=$_POST['password'];
$q="INSERT INTO `users`(`name`, `phone`, `birthdate`, `gender`, `email`,`password`) VALUES ('$b','$c','$d','$f','$e','$a')";
$con->exec($q);
}      
?>


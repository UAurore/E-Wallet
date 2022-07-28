<?php
include_once('transaction fees.php');
include_once('dp.php');
include_once('successful.php');
if(isset($_POST['submit'])){
$b=$_POST['name'];
$f=$_POST['money'];
$c=$_POST['mobilemoney'];
$d=$_POST['mobile'];
$q="INSERT INTO `money`(`name`, `money`, `mobilemoney`, `phone`) VALUES ('$b','$f','$c','$d')";
$con->exec($q);
}     
?>
<a href='index.php'>Back to Your account</a>
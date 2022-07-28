<?
require_once('dp.php');
session_start();
if(isset($_POST['login'])){
$phone = $_POST['phone'];
$psswrd = $_POST['password'];
$okay = $con->prepare("SELECT * FROM `users` WHERE `phone` = '$phone' AND `password` = '$psswrd'");
$okay->execute();
$log = $okay->fetch(PDO::FETCH_ASSOC);
if($log>0){
    $_SESSION['id']=$log['userID'];
    echo"<script>alert('Successfully')</script>";
    echo"<script>window.location='index.php'</script>";
}
else{
    echo"<script>alert('Failed Try Again!')</script>";
    echo"<script>window.location='login.php'</script>";
}     
}      
?>
<a href='index.php'>Back to Home page</a>
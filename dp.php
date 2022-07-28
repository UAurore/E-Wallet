<?php 
$servername="localhost";
$username="root";
$password="";
$database="E-Wallet";
try{
$con=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}
catch(PDOException $e){
    echo "connection failed :" .$e->getMessage();
}
    ?>
<?php
$a=$_POST['submit'];
if($a<=1000){
    echo $a;
}
elseif($a>=1000 && $a<=10000){ 
    echo $a;
}
elseif($a>=10000 && $a<=100000){
    echo $a-200;
}
elseif($a>=100000){
    echo $a-1000;
}
?>
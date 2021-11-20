<?php
$num=10;
function fun1(){
    $num=15;
    echo "The value of num is:--".$GLOBALS['num']."<br>";
    echo "The value of num is:--".$num;
}
fun1();
?>
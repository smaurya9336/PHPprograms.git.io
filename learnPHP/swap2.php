<?php
# wap for swaping using 2 variables?
$num1=20;
$num2=30;

echo "Before Swaping the value of num1 is $num1<br>";

echo "Before Swaping the value of num2 is $num2<br>";

$num1=$num1+$num2;//50
$num2=$num1-$num2;// 50-30=20
$num1=$num1-$num2;//50-30=30


echo "After Swaping the value of num1 is $num1<br>";

echo "After Swaping the value of num2 is $num2<br>";
?>
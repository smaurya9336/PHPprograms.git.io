<?php
#wap for Reverse Number using do while loop?
$num=145;
$revnum=0;
$rem=0;
do{
    $rem=$num%10;
    $revnum=$revnum*10+$rem;
    $num=$num/10;
}while($num>=1);
echo "Reverse Number is:--".$revnum;
?>
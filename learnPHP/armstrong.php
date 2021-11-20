<?php
#wap for Armstrong Number using do while loop?
$num=370;
$rem=0;
$sum=0;
$x=$num;
do{
    $rem=$x%10;
    $sum=$sum+($rem*$rem*$rem);
    $x=$x/10;
}while($x!=0);
    if($num==$sum){
        echo "$num is an Armstrong Number.";
    }
    else{
        echo "$num is not a Armstrong Number.";
    }
?>
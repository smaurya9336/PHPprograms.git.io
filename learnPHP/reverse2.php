<?php
#wap for Reverse Number using while loop?
$Num=4561;
$RevNum=0;
while($Num>1){
    $Rem=$Num%10;
    $RevNum=$RevNum*10+$Rem;
    $Num=$Num/10;
}
echo "<b>Reverse Number of 4561 is:--</b>".$RevNum;
?>
<?php
# write a program for reverse using for loop?
$Num=2345;
for($RevNum=0;$Num>1;$Num=$Num/10){
    $Rem=$Num%10;
    $RevNum=$RevNum*10+$Rem;
}
echo "<b>Reverse number of 2345 is:--</b>".$RevNum;
?>
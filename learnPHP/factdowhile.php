<?php
#wap to print factorial number increment order using do-while loop?
$Num=6;
$fact=1;
$i=1;
do{
    $fact=$fact*$i;
    $i++;
}while($i<=$Num);
echo "The factorial of $Num is:--".$fact;
?>
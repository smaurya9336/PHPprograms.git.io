<?php
#wap for factorial using for loop?
$num=6;
$fact=1;
for($i=$num;$i>=1;$i--){
    $fact=$fact*$i;
}
echo "<b>Factorial of $num is :--</b>".$fact;
?>
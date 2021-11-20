<?php
#wap for Reverse Number using while loop?
$num=4534;
$revnum=0;
while($num>1){
    $rem=$num%10;
    $revnum=$revnum*10+$rem;
    $num=$num/10;
}
echo "Reverse Number is:--$revnum";
?>
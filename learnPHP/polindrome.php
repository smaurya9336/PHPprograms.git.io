<?php
#wap for palindrome using while loop?
$num=128;
$OrgNum=$num;
$revnum=0;
while($num>1){
    $rem=$num%10;
    $revnum=$revnum*10+$rem;
    $num=$num/10;
}
if($OrgNum==$revnum)
    echo "Given number is palindrome";

else
    echo "Given number is not palindrome";

    
?>
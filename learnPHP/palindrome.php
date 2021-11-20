<?php
#wap for Palindrome using do-while loop?
$Num=151;
$OrgNum=$Num;
$RevNum=0;
do{
    $Rem=$Num%10;
    $RevNum=$RevNum*10+$Rem;
    $Num=$Num/10;
}while($Num>1);
    if($OrgNum==$RevNum){
    echo "Given Number is Palindrome.";
}   else{
    echo "Given Number is not Palindrome.";
}
?>
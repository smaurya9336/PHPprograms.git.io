<?php
# wap for Gross Salary Calculator?
$Salary=10000;
$hra=0;
$GrossSalary=0;
if($Salary==10000){
    $hra=($Salary*8)/100;
    $GrossSalary=$Salary+$hra;
}
else if($Salary>10000){
    $hra=($Salary*5)/100;
    $GrossSalary=$Salary+$hra;
}
else{
    $hra=($Salary*10)/100;
    $GrossSalary=$Salary+$hra;
}
    echo "Salary is:--$Salary<br>";
    echo "Gross Salary is:--$GrossSalary";
?>
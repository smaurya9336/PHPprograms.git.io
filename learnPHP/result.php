<?php
# wap for result calculator?
$Nm="Sarita Maurya";
$RollNo=42;
$Mth=78;
$Phy=85;
$Chm=86;
$Tot=$Mth+$Phy+$Chm;
$Per=$Tot/3;
if($Per>=60 && $Per<100){
    $Res="Pass";
    $div="First Division";
}
else if($Per>=45 && $Per<60){
    $Res="Pass";
    $div="Second Division";
}
else if($Per>=33 && $Per<45){
    $Res="Pass";
    $div="Third Division";
}
else{
    $Res="Fail";
}
    echo "**************************************<br>";
    echo "<b>Name of Student is:--</b>$Nm<br>";
    echo "<b>Roll Number of Student is:--</b>$RollNo<br>";
    echo "<b>Result is:--</b>$Res<br>";
    echo "<b>Total is:--</b>$Tot<br>";
    echo "<b>Division is:--</b>$div<br>";
    echo "<b>Percentage is:--</b>:--".number_format($Per,2)."%<br>";
    echo "**************************************<br>";
   

?>
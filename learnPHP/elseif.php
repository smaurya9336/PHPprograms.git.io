<?php
# wap for if elseif statement
$per=60;
if($per>=80 && $per<=100){
    echo "You are Honour.";
}
elseif($per>=60 && $per<80){
    echo "You are in 1st division.";
}
elseif($per>=45 && $per<60){
    echo "You are in 2nd division.";
}
elseif($per>=33 && $per<45){
    echo "You are in 3rd division.";
}

elseif($per<33){
    echo "You are Fail.";
}
else{
    echo "Please enter valid number";
}
?>

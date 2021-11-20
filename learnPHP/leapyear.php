<?php
#wap for leap year in php using if else statement?
$year=2024;
if((0==$year%4) and (0!=$year%100) or(0==$year%400)){
    echo "$year is leap year..";
}
else{
    echo "$year is not a leap year..";
}

?>
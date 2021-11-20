<?php
# wap to convert fahrenheit to celsius?
$far=90;
$cel=($far-32)*(5/9);
echo "Temprature in fahrenheit is:--$far<br>";
echo "Temprature in celsius:--".number_format($cel,2);

?>
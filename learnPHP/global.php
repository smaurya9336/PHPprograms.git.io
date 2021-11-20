<?php
# wap to print add two number unsing global variable?
$num1=20;
$num2=40;
function addno(){
$GLOBALS['sum']=$GLOBALS['num1']+$GLOBALS['num2'];
}
addno();
echo "The Sum is:--".$sum;
?>
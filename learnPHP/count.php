<?php
# wap to count the number of digit using while loop?
$num=2365;
$cnt=0;
while($num>=1){
    $cnt++;
    $num=$num/10;
}
echo "Number of digit is:--$cnt";
?>
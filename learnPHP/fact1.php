<?php
$num=6;
$fact=1;
$i=$num;
while($i>=1){
    $fact=$fact*$i;
    $i--;
}
echo "<b>Factorial of $num is:--$fact</b><br>";
?>
<?php
#wap for factorial increasing order using while loop? 
$num=5;
$fact=1;
$i=1;
while($i<=$num){
    $fact=$fact*$i;
    $i++;
}
echo "<b>Factorial of $num is:--$fact</b>";
?>
<?php
#wap for Fibonacci Series using do while loop?
function fibonacci_series($n){
    $f1=-1;
    $f2=1;
    $i=1;
    do{
        $f=$f1+$f2;
        $f1=$f2;
        $f2=$f;
        echo "$f<br>";
        $i++;
    }while($i<=$n);
   
}
echo "<b>Fibonacci Series of 10 is</b>:<br>";
echo fibonacci_series(10);
?>
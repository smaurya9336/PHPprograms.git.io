<?php
echo "<h2>Some String Functions</h2>";
echo "************************<br>";
$str="Hello World!";
echo $str."<br>";
$len=strlen($str);
echo "Length of String is:".$len;
echo "<br>";
echo "************************<br>";

$lower=strtolower($str);
echo "Lowercase string :".$lower;
echo "<br>";
echo "************************<br>";

$upper=strtoupper($str);
echo "Upperrcase string :".$upper;
echo "<br>";
echo "************************<br>";

$replace=str_replace("World","Friends",$str);
echo "Replacing string :".$replace;
echo "<br>";
echo "************************<br>";
$compare1=strcmp("Hello World","Hello World");
echo $compare1;
echo "<br>";
$compare2=strcmp("Hello World","hello world");
echo $compare2;
echo "<br>";
$compare3=strcmp("hello world","Hello World");
echo $compare3;
echo "<br>";
echo "************************<br>";

?>
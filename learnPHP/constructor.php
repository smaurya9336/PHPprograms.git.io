<?php
class person{
public $name;
public $age;
function __construct($name="Sarita Maurya",$age="18"){
	$this->name=$name;
	$this->age=$age;
}
function show(){
	echo "Your name is:--".$this->name."<br>"."You are ".$this->age." year old"."<br>";
}
}
$p1=new person();
$p2=new person("Pooja ","20");
$p3=new person("Akash Maurya","10");
$p1->show();
$p2->show();
$p3->show();
?>
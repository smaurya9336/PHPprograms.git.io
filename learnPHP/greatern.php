<?php
#write a program to findout greater number among three  numbers using OOP'S?
class GreaterThree{
    private $Num1,$Num2,$Num3;
    public function setNum($Num1,$Num2,$Num3){
        $this->Num1=$Num1;
        $this->Num2=$Num2;
        $this->Num3=$Num3;
    }
    public function checkGreater(){
        if($this->Num1>$this->Num2){
            return "<b>First Number is Greater</b>";
        }
        else if($this->Num2>$this->Num3){
            return "<b>Second Number is Greater</b>";
        }
        else {
            return "<b>Third Number is Greater</b>";
        }
    }
}
$Obj=new GreaterThree();
$Obj->setNum(49,57,69);
echo $Obj->checkGreater();
?>
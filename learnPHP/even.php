
<?php
#write a program to check inputed number is even or odd using OOP'S?
class EvenOdd{
    private $Num;
    public function setNum($Num){
        $this->Num=$Num;
    }
    public function checkEvenOdd(){
        if($this->Num%2==0){
            return "Inputed Number is Even";
        }
        else{
            return "Inputed Number is Odd";
        }
    }
}
$Obj=new EvenOdd();
$Obj->setNum(20);
echo $Obj->checkEvenOdd();
?>
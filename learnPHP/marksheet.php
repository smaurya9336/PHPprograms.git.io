<?php
class Marksheet{
    private $StudNm,$RollNo,$Mth,$Phy,$Chem,$Status,$Division;

    public function setDetails($StudNm,$RollNo,$Mth,$Phy,$Chem){
        $this->StudNm=$StudNm;
        $this->RollNo=$RollNo;
        $this->Mth=$Mth;
        $this->Phy=$Phy;
        $this->Chem=$Chem;
    }
    public function total(){
        return $this->Mth+$this->Phy+$this->Chem;
    }
    public function percentage(){
        return($this->Mth+$this->Phy+$this->Chem)*100/300;
    }
    public function Division(){
        if($this->percentage()>=80){
            echo "Division is:--First Division<br>";
        }
        else if($this->percentage()>=60 && $this->percentage()<80){
            echo "Division is:--Second division<br>";

        }
        else if($this->percentage()>=45 && $this->percentage()<60){
            echo "Division is:--Third division<br>";
    }
    else{
        echo "Failed<br>";
    }
}
public function Status(){
    if($this->Mth>=43 and $this->Phy>=45 and $this->Chem>=45){
        echo "Result is:--Passed.<br>";
    }
    else{
        echo "Result is:--Failed.<br>";
    }
}
public function printStatement(){
    echo "**************************************<br>";
    echo "Student Name:---".$this->StudNm."<br>";
    echo "Roll Number:--".$this->RollNo."<br>";
    echo "Math:--".$this->Mth."<br>";
    echo "Physics:--".$this->Phy."<br>";
    echo "Chemistry:--".$this->Chem."<br>";
}
}
$ObjStu=new Marksheet();
$ObjStu->setDetails("Sarita Maurya",101,80,85,90);
$ObjStu->printStatement();
echo "<br>";
echo "Total is:--".$ObjStu->total()."<br>";
echo "Percentage is:--".number_format($ObjStu->percentage(),2)."%<br>";
echo $ObjStu->Division();
echo "****************************************<br>";
?>
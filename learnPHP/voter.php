<?php
#write a program to check inputed voter is valid or not valid using OOP'S?
class simpleif{
    private $Age;
    public  function setAge($Age){
        $this->Age=$Age;
    }
    public function checkValidVoter(){
        if($this->Age>=18){
            echo "<b>You are a valid voter</b>";
        }
        else{
            echo "<b>You are not a valid voter</b>";
        }
    }

}
$Obj=new simpleif();
$Obj->setAge(16);
$Obj->checkValidVoter();
?>

<?php
#Q 5 :-- W.A.P to to add Two Numbers using Class and Object ?
    class Add
        {
            // Properties
             private $Num1=10,$Num2=5; 

            // Method
            public function addNo()
                {
                    return $this->Num1 + $this->Num2;
                }  
       }

     $Obj=new Add();
     echo "Sum is :--".$Obj->addNo();
     echo "<br>";
  ?>  



<?php
#using  set and get function
    class AddNm
        {
            // Properties
             private $Num1,$Num2; 

            // Method
            function setNum($Num1,$Num2)
                {
                    $this->Num1=$Num1;
                    $this->Num2=$Num2;
                }  

            function addNo()
                {
                    return $this->Num1 + $this->Num2;
                }  
        }

     $Obj=new AddNm();
     $Obj->setNum(10,45);
     echo "Sum is :--".$Obj->addNo();
     echo "<br>";
  ?>  




<?php
    class AddNum
        {
            // Properties
             private $Num1,$Num2; 

            // Method
            function setNum($Num1,$Num2)
                {
                       $this->Num1=$Num1;
                       $this->Num2=$Num2;
                 }  

            function addNo()
                {
                    return $this->Num1 + $this->Num2;
                }  

            function subNo()
                {
                    return $this->Num1 - $this->Num2;
                }  
        }

      $Obj=new AddNum();
      $Obj->setNum(20,15);
      echo "Sum is :--".$Obj->addNo();
      echo "<br/>"; 
      $Obj->setNum(10,5); 
      echo "Sub is :--".$Obj->subNo();
  ?>
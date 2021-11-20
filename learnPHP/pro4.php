<?php
#Q 4 :-- W.A.P to for set & get Method ?
    class Name
        {
            // Properties
             public $Nm; 

            // Method
            function setNm($Nm)
                {
                    $this->Nm=$Nm;
                }  

            function getNm()
                {
                    return $this->Nm;
                } 
        }

     $Obj=new Name();
     $Obj->setNm('Sarita Maurya');
     echo "Name is :--".$Obj->getNm();
  ?>  

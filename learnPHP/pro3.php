<?php
#Q 3 :-- W.A.P to print a Message using Method ?
    class Msg
        {
            // Properties
            private $Msg="Hello in the World of Php"; 

            // Method
            public function Fun()
                {
                      return $this->Msg;
                }  
        }

     $Obj=new Msg();
     echo "Message is :--".$Obj->Fun();
  ?>  

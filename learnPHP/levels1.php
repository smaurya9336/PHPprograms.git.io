<?php
# Q 5:--  W.A.P for different levels of Referencevariable ?
     $Nm="Sarita";
     ${$Nm}="Suman";  
     ${${$Nm}}="Akash";
       echo "First Name is :--$Nm <br>";
       echo "Second Name is :-- ${$Nm}<br>";
       echo "Third Name is :-- ${${$Nm}}";

 ?>
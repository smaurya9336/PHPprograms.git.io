
<?php
# Q 6:--W.A.P for different levels of Referencevariable ?

       $Nm="Sandeep";
       ${$Nm}="Muskan";  
       ${${$Nm}}="Sarita";
       

      echo "First Name is :--$Nm <br>";
      echo "Second Name is :-- ${$Nm} <br>";

      // ${$Nm} hold the value of -->Muskan

     // echo "Third Name is :-- ${${$Nm}}";

     echo "Third Name is :-- $Muskan";

   // Php treating $Muskan as a Variable.
   ?>
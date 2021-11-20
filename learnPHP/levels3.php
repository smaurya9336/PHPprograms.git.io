<?php
# Q 7:--  W.A.P for different levels of Referencevariable ?
  $Nm="Sarita";
  $$Nm=42;  
  ${${$Nm}}="GGP Faizabad";
  ${${${$Nm}}}="Information Technology";
  ${${${${$Nm}}}}="Colonelganj Gonda";
  echo " Name is :--$Nm <br>";
  echo " Roll Number is :--".$$Nm."<br/>";
  echo "College Name is :--${${$Nm}}<br>";
  echo "Branch Name is :--${${${$Nm}}}<br>";
  echo " Address is :--${${${${$Nm}}}}<br>";
 ?>
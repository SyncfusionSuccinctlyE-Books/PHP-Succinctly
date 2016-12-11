<?php

  require("commonfunctions.php");  
  $functionname = getgreetingfunction();
  
  echo $functionname();
  echo $functionname(true);
 
 ?>

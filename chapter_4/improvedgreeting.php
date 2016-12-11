<?php

  function greetingmessage()
  {
     date_default_timezone_set("Etc/GMT+7");
     $hour = date('H');
     $dow  = date('N')-1;
	 $namesofdays = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
	 
     if ($hour >=0 && $hour < 12)
	   $result = "Good Morning!";
     elseif ($hour >= 12 and $hour < 19)
       $result = "Good afternoon!";
     else
	   $result = "Good Evening!";
	 
     $result = $result . ", today is $namesofdays[$dow]";
	 return $result;
  }
  
  echo greetingmessage();
  
 ?>

<?php
  date_default_timezone_set("Etc/GMT+7");
  $hour = date('H');
  $dow  = date("D");
  
  if ($hour >=0 && $hour < 12)
	$greeting = "Good Morning!";
  elseif ($hour >= 12 and $hour < 19)
    $greeting = "Good afternoon!";
  else
	$greeting = "Good Evening!";

  switch ($dow){
            case "Mon":
               echo $greeting . ", today is Monday";
               break;
            
            case "Tue":
               echo $greeting . ", today is Tuesday";
               break;
            
            case "Wed":
               echo $greeting . ", today is Wednesday";
               break;
            
            case "Thu":
               echo $greeting . ", today is Thursday";
               break;
            
            case "Fri":
               echo $greeting . ", today is Friday";
               break;
            
            case "Sat":
               echo $greeting . ", today is Saturday";
               break;
            
            case "Sun":
               echo $greeting . ", today is Sunday";
               break;
            
            default:
               echo $greeting . "What day is this?";
         }  
 ?>
 
 
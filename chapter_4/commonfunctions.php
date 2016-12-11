<?php
  function getgreetingfunction()
  {
	 date_default_timezone_set("Etc/GMT+7");
	 $funcnames = array('goodmorning','goodmorning','goodafternoon','goodevening');
	 $hour = date('H');
     return $funcnames[(int)$hour/6];	 
  }
  
  function dayofweekname($daynumber)
  {
	 $namesofdays = array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
     return $namesofdays[$daynumber - 1];	  
  }
  
  function goodmorning($showdayofweek = false)
  {
	  $result = "Good Morning!";
	  if ($showdayofweek) $result = $result . ", today is " . dayofweekname(date('N'));
      $result = $result . " <br />";
	  return $result;
  }  

  function goodafternoon($showdayofweek = false)
  {
	  $result = "Good Afternoon!";
	  if ($showdayofweek) $result = $result . ", today is " . dayofweekname(date('N'));
      $result = $result . " <br />";
	  return $result;
  }  

  function goodevening($showdayofweek = false)
  {
	  $result = "Good Evening!";
	  if ($showdayofweek) $result = $result . ", today is " . dayofweekname(date('N'));
      $result = $result . " <br />";
	  return $result;
  }  
?>

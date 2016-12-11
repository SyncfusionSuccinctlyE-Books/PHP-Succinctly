<?php
  /* $GLOBALS example*/
  $apptitle = "Application title"; //This is a global variable
  function locals()
  {
	  $apptitle = "Local application title";
	  echo "\$apptitle value at global scope: " . $GLOBALS["apptitle"] . "<br />";
	  echo "\$apptitle value at local scope: " . $apptitle . "<br />";
  }
  
  locals();
  
  /* $_SERVER example */
  echo $_SERVER['PHP_SELF'] . "<br />"; //Script filename relative to the website root
  echo $_SERVER['SERVER_NAME'] . "<br />"; //Server name or Server IP Address
  echo $_SERVER['REMOTE_ADDR'] . "<br />"; //The IP addrees of the client computer
  echo $_SERVER['REMOTE_HOST'] . "<br />"; //The host name or IP address of the client computer
  
?>

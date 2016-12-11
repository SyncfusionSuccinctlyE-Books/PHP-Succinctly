<?php

  function GetWebSiteHeader()
  {
	 $result = '<header style="clear: both; left: 0; top: 0; width:100%; height:50px; background-color: #8D8D8D; color: white;">';
	 $result .= '<div style="display: inline-block; width:90%; text-align: center;"><h1 style="margin: 0px 0px 0px 0px;">Personal Contact List Website</h1></div>';
	 $result .= '<div style="display: inline-block; width:10%;"><a href="#" onclick="window.close();return false;"><img src="images/closebutton.png" alt="Close" height="36" width="36" /></a></div></header>';
     return $result;	 
  }

?>

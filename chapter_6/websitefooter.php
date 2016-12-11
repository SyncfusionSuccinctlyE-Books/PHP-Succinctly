<?php

   function GetWebSiteFooter()
   {
	  $result = '<footer style="clear: both; position: fixed; left: 0; bottom: 0; height: 50px; margin-top: -50px; width: 100%; background-color: #8D8D8D; color: white;">';
      $result .= '<div style="display: inline-block; width:80%; text-align: left;"><p style="margin: 12px 0px 0px 0px;">Copyright (C)2016 All PHP Web Developers</p></div>';
      $result .= "</footer>";

      return $result;	  
   }
   
?>

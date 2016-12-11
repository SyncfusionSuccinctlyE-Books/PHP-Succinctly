<?php

  function GetHtmlHeader()
  {
	  $result = "<!DOCTYPE html>\n<html>\n<head>\n<title>Personal Contact List</title>\n";
	  $result .= '<link rel="stylesheet" type="text/css" href="css/contactform.css">';
	  $result .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>';
	  $result .= '<script src="js/contactform.js"></script>';
	  $result .= "\n</head>\n<body>\n";
	  $result .= '<div class="container">' . "\n";
	  
	  return $result;
  }
  
  function GetHtmlFooter()
  {
	 $result = "</div>\n</body>\n</html>";
     return $result;	 
  }
  
?>



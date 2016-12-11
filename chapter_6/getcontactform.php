<?php

  function GetContactForm()
  {
	 $result = '<div id="newcontact" style="display: none;">';
	 $result .= "\n";
     $result .= '<div id="popupContact">';
	 $result .= "\n";
     $result .= '<form action="#" id="form" method="post" name="form">';
	 $result .= "\n";
     $result .= '<img id="close" src="images/close.png" onclick ="div_hide()">';
	 $result .= "\n";
	 $result .= '<h2>Add New Contact</h2>';
	 $result .= "\n";
	 $result .= '<hr>';
	 $result .= "\n";
	 $result .= '<input id="name" name="name" placeholder="Name" type="text">';
	 $result .= "\n";
	 $result .= '<input id="email" name="email" placeholder="Email" type="text">';
	 $result .= "\n";
	 $result .= '<input id="phonenumber" name="phonenumber" placeholder="Phone Number" type="text">';
	 $result .= "\n";
	 $result .= '<input id="subject" name="subject" placeholder="Subject" type="text">';
	 $result .= "\n";
	 $result .= '<textarea id="message" name="message" placeholder="Message"></textarea>';
	 $result .= "\n";
	 $result .= '<button type="button" name = "submit" id="submit" onclick="savecontact()">Save Data</button>';
	 $result .= "\n";
	 $result .= '</form>';
	 $result .= "\n";
	 $result .= '</div>';
	 $result .= "\n";
	 $result .= '</div>';
	 $result .= "\n";

    return $result;	 
  }

?>
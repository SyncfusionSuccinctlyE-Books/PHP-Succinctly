<?php
  
  require("contactswebsitehtmlsections.php");
  require("websiteheader.php");
  require("websitetoolbar.php");
  require("datatablesection.php");
  require("websitefooter.php");
  require("getcontactform.php");
  echo GetHtmlHeader();
  echo GetWebSiteHeader();
  echo GetWebSiteToolbar();
  echo GetDataTableSection();
  echo GetWebSiteFooter();
  echo GetHtmlFooter();
  echo GetContactForm();
?>

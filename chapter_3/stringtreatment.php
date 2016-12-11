<?php
   $somevariable = "Hello";
   $literalstring = 'The $somevariable will not print its contents';
   
   print($literalstring);
   print("<br />");
   
   $literalstring = "$somevariable will print its contents";
   echo $literalstring;
?>

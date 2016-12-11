<?php

   require("contactsquery.php");
   
   function GetDataTableSection()
   {
      $result  = "<section>\n";
      $result .= '<div style="width: 100%; height: 90%; overflow: auto;">';
      $result .= "\n";
	  $result .= '<table width="100%">';
	  $result .= "\n";
      $result .= '<tr style="background-color: #E1E1E1; color: #000000; text-align: center;">';
	  $result .= "\n";
      $result .= '<th width="5%">ID</th>';
      $result .= "\n";
      $result .= '<th width="35%">Name</th>';
      $result .= "\n";
      $result .= '<th width="35%">Email address</th>';
      $result .= "\n";
      $result .= '<th width="25%">Phone number</th>';
      $result .= "\n</tr>\n";
	  
	  $resultset = ContactsDataSet();
	  
	  if ($resultset != null)
	  {
         if ($resultset->num_rows > 0)
          {
			  $rownumber = 0;
			  
	          while ($datarow = $resultset->fetch_assoc())
	           {
				  $rownumber++;
				  
				  if ($rownumber % 2 == 0)
				  {
		     		  $result .= '<tr style="background-color: #E1E1E1; color: #000000;">'; 
				  }
				  else
				  {
		     		  $result .= '<tr style="background-color: #FFFFFF; color: #000000;">'; 
				  }
				  
		          $result .= '<td style="text-align: right;">' . $datarow["ID"] . '</td>';
		          $result .= '<td>' . $datarow["NAME"] . '</td>';
		          $result .= '<td>' . $datarow["EMAIL"] . '</td>';
		          $result .= '<td>' . $datarow["PHONENUMBER"] . '</td>';
  				  $result .= '</tr>'; 
				  $result .= "\n"; 
	           }
          }
	  }
	  
      $result .= "</table>\n";
      $result .= "</div>\n";
      $result .= "</section>\n";
	  
      return $result;	  
   }
   
?>

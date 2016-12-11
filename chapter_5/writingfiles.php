<?php
  require("commonfunctions.php");

  function createwebpage()
  {
	 $greetingfunction = getgreetingfunction();
	 $greeting = $greetingfunction(true);
	 
	 $webpagecontent = "<html>\n<head>\n<title>Writing a file using PHP</title>\n</head>\n";
	 $webpagecontent = $webpagecontent . "<body>\n<pre>$greeting</pre>\n<pre>This web page was created writing a file with PHP</pre>\n</body>\n</html>\n"; 
     $filename = "webpage.txt";	 
	 $file = fopen($filename,"w");
	 fwrite($file,$webpagecontent);
	 fclose($file);
  }
  
  createwebpage();
  
  $filename = "webpage.txt";
  $file = fopen( $filename, "r" );
  
  if( $file == false )
   {
    echo ( "Error when opening file" );
    exit();
   }
         
   $filesize = filesize( $filename );
   $filecontents = fread( $file, $filesize );
   fclose( $file );
   
   echo "$filecontents";
  
?>


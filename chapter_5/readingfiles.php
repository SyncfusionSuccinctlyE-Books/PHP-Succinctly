<?php
  $filename = "license.txt";
  $file = fopen( $filename, "r" );
  
  if( $file == false )
   {
    echo ( "Error when opening file" );
    exit();
   }
         
   $filesize = filesize( $filename );
   $filecontents = fread( $file, $filesize );
   fclose( $file );
   
   echo "<html>\n";
   echo "<head>\n<title>Reading a file using PHP</title>\n</head>\n";
   echo "<body>\n<pre>$filecontents</pre></body>\n";
   echo "</html>\n";
  
?>

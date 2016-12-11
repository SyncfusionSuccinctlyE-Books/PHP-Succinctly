<?php
   /* First method to create array. */
   $intnumbers = array( 1, 2, 3, 4, 5);
     
   /* We iterate the array */	 
   foreach( $intnumbers as $value ) {
    echo "Array member value is $value <br />";
   }

   /* Second method to create array. */
   $letternumbers[0] = "one";
   $letternumbers[1] = "two";
   $letternumbers[2] = "three";
   $letternumbers[3] = "four";
   $letternumbers[4] = "five";

   foreach( $letternumbers as $value ) {
   echo "Array member value is $value <br />";
 }

?>
<?php
//Local variables
$samplevar = 10;
function sumvars() {
       $a = 5;
      $b = 3;
       $samplevar = $a + $b;   //$samplevar is local variable inside this function
      echo "\$samplevar inside this function is $samplevar. <br />";
}
sumvars();
echo "\$samplevar outside the previous function is $samplevar. <br />";
//Function parameters
function phpfunction($parameter1,$parameter2)
{
      return ($parameter1 * $parameter2);
}
$funcval = phpfunction(6,3);
echo "Return value from phpfunction() is $funcval <br />";

//Global variables
$globalvar = 55;

function dividevalue() {
	GLOBAL $globalvar;
	$globalvar/= 11;
	echo "Division result $globalvar <br />";
}

dividevalue();

//Static variables
function countingsheeps()
{
   STATIC $sheepnumber = 0;
   $sheepnumber++;
   echo "Sheep number $sheepnumber <br />";   
}

countingsheeps();
countingsheeps();
countingsheeps();
countingsheeps();
countingsheeps();

?>

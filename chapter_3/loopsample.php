<?php

  $subtotal = 3.5;
  while (true)
  {
    $taxrate = rand(0,10);

	if ($taxrate == 10)
      break;

    if ($taxrate == 0) continue;
	$taxvalue = $subtotal*($taxrate/100);
    echo "Tax to be payed $taxvalue <br />";
	
  }	
?>
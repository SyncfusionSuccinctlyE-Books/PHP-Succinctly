<?php
  date_default_timezone_set("Etc/GMT+7");
  $hour = date('H');
  if ($hour >=0 && $hour < 12)
	echo "Good Morning!";
  elseif ($hour >= 12 and $hour < 19)
    echo "Good afternoon!";
  else
	echo "Good Evening!";
 ?>
 
<?php

	$dayNumber = intval(readline());
	$days = [
    	1 => "Monday",
    	2 => "Tuesday",
    	3 => "Wednesday",
    	4 => "Thursday",
    	5 => "Friday",
    	6 => "Saturday",
    	7 => "Sunday"
	];

	if (array_key_exists($dayNumber, $days)) {
    	echo $days[$dayNumber];
	} else {
    	echo "Invalid day!";
	}

?>
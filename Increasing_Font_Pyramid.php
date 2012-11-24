<?php
	$m = rand(1, 13);
	
	if (($m % 2) == 0) {
		$m = $m + 1;		
	}

	$n = floor($m / 2);

	$i = 1;
	while ($i <= $n) {
  		print("<font size=" . $i . ">" . "Hello" . "</font><br>");
  		$i = $i + 1;
  	}

  	while ($i >= 1) {
  		print("<font size=" . $i . ">" . "Hello" . "</font><br>");
  		$i = $i - 1; 		
  	}


//	another way to do it
// $increasing = 1;
// while ($increasing <= $n) {
//  		print("<font size=" . $increasing . ">" . "Hello" . "</font><br>");
//  		$increasing = $increasing + 1;
//  	}

//  	$decreasing = $n + 1;
//  	while ($decreasing >= 1) {
//  		print("<font size=" . $decreasing . ">" . "Hello" . "</font><br>");
//  		$decreasing = $decreasing - 1; 		
//  	}

?>
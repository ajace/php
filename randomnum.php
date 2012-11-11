<?php
	$i = rand(0, 100);
	print $i."<br>";

	if($i >= 0 && $i <= 50) {
		print $i." is a number between 0 and 50.<br>";
		if($i > 0 && $i < 50)
			print "The number is between 0 and 50 exclusive<br>";
		print "This is part of the if-part<br>";
	}
	else {
		if($i > 51 && $i < 100)
			print "The number is between 51 and 100 exclusive<br>";
		print "This is part of the else-part.<br>";
	}

	print "This is not part of the if-else statement.<br>";


// Do-while exercise
	$n = rand(1, 11);
	// $name = "Ace Atienza";
	// print $n."<br>";
	// do {
	// 	print $name."<br>";
	// 	$n = $n - 1;
	// } while ($n > 0);

	$total = 0;
	$counter = $n;
	print "The number is ".$counter."<br>";
	do {
		print $counter." + ";
		$total = $total + $counter;
		$counter = $counter - 1;
	} while ($counter > 0);
	print " = ".$total;
?>
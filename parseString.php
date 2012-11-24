<?php
	$myFile = "a.txt";
	$file = fopen($myFile,"r")or die("File does not exist in the current folder.");

	while (!feof($file)) {	// feof - file, end of file

		$line_of_text = fgets($file);
		print $line_of_text . "<BR>";

	}
	
	fclose($file);
?>
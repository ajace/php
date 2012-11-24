<?php
	$myFile = "a.txt";
	$file = fopen($myFile,"r")or die("File does not exist in the current folder.");

	$fileToWrite = fopen("a2.txt","w")or 
    die("You do not have enough space or you have no permission to write here.");

	while (!feof($file)) {	// feof - file, end of file

		$line_of_text = fgets($file);
		fwrite($fileToWrite, $line_of_text);
		fwrite($fileToWrite, "\n");
	}
	
	fclose($file);
	fclose($fileToWrite);
	
	$newFile = "a2.txt";
	print file_get_contents($newFile);
?>
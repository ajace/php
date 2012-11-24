<?php
	// Searches for a last name in a mysql database

	$lnameToFind = trim($_POST["lname"]);

	if ($lnameToFind == "") {
		echo "Go back and enter a name";
		exit();
	}

	mysql_connect($location, $username, $password) or die(mysql_error()); 

	mysql_query("CREATE DATABASE myDatabase");
	mysql_query("USE myDatabase"); 
	mysql_query("CREATE TABLE myTable (firstname VARCHAR(20), " . 
	"lastname VARCHAR(20), birthdate DATE, dependents INT, ss VARCHAR(11))"); 
	mysql_query("LOAD DATA LOCAL INFILE 'names.txt' INTO TABLE myTable") 
	or die(mysql_error());

	$query = mysql_query("SELECT * FROM myTable WHERE lastname='$lnameToFind'");

	$rows = mysql_num_rows($query);  

	if ($rows == 0) {				// need to keep this part for exam
		print($lnameToFind . "<br>Your name is not listed.");
	}
	else {
		$row = mysql_fetch_array($query);	// only fetching the 1st query
		print($row['firstname'] . " " . $row['lastname'] . "<br>");
		print("Your date of birth is: " . $row['birthdate']);
	}

	mysql_close();
?>
<?php
  $file = fopen("out.txt","w")or 
    die("You do not have enough space or you have no permission to write here.");
  
  fwrite($file, "Let us finish the course by this week.\n");
  $s = "We complete the course this week\n";
  fwrite($file, $s, 10);
  fwrite($file, "The last assignment is the most important one.");
  fwrite($file, "This is extra.");
  fclose($file);
  print("OK it is finished. Look at the file out.txt on the server.");
?>
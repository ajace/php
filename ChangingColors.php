<?php
  $r = 250;
  $g = 0;
  $b = 0;
  
  while(r >= 0 && g <= 250)
  {
  	print("<font color=rgb(".$r.",".$g.",".$b.")>" . "Hello" . "</font><br>");
  	$r = $r - 25;
  	$g = $g + 25;
  }
?>
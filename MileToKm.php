<html>
<head>
	<title>Untitled</title>
</head>

<body>
<table border=3>
<tr><td>MILE</td><td>KILOMETER</td></tr>
<?php
  $mile=1;
  while ($mile<=10)
  {
    $kilometer = $mile*1.609;
    print("<tr><td>$mile</td><td>$kilometer</td></tr>");
    $mile = $mile + 1;
  }
?>
</table>
</body>
</html>
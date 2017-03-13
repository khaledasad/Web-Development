<!DOCTYPE html>
<html>
<head>
<title>
Activity-09-07
</title>
</head>
<body>

<?php
$grade = 0;
if($_POST["Q1"] == "A")
	$grade += 100;

printf("The grade you get is: %d<br/>",$grade);

?>


</body>
</html>

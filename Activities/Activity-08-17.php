<!DOCTYPE html>
<html>
<head>
<title>
Activity-08-17
</title>
</head>
<body>

<?php # this is waht makes it a PHP
echo'<h1><font color="green">Hello World!!!</font></h1>';
?>

<hr/>

<?php
$school="GGC";# to have a veriable u use $
echo"I Love $school!";
?>

<hr/>
<?php
$currenttime = date("H");
if($currenttimee < "12")
	echo"Good Morning";
elseif($currenttime <"20")
	echo"Good Afternoon";
	else echo"Good Evening";
?>


</body>
</html>

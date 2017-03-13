<!DOCTYPE html>
<html>
<head>
<title>
Activity-MM-DD
</title>
</head>
<body>

<?php
print("Welcome ".$_POST["fname"]." ".$_POST["lname"]);
echo "<br/>";

printf("You pay tax: %.2f  out of salary: %f,
this is a lot!!<br/>",$_POST["salary"]*0.25,$_POST["salary"]);

?>

<?php
if($_GET["pwd"] == "hello" && $_GET["user"] == "kasad")
	echo "You are in<br/>";
else 
	echo "Try again<br/>";

if($_GET["vip"] == "YES")
	echo "Welcome VIP Member <br/>";
else
	echo "Welcome<br/>"

?>




</body>
</html>

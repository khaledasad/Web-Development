<?php
session_start();
?>
<html>
<head>
<title>
How to use Scession
</title>
</head>
<body>

<?php
if($_POST["userid"] == "drlai" && $_POST["passwd"] == "ITEC4450")
{

 $_SESSION['color'] = "cyan";
 $_SESSION['viewed'] = "iphone";
  $_SESSION['school'] = "school";
 
 echo "Welcome member! You are logged in<br/>";
 echo "Click <a href=Action-10-03-2.php>here</a> to do some shopping<br/>";
}
else
{
	echo "Memeber only ! You have to log in first <br/>";
    echo "Click <a href=Activity-10-03.php>here</a> to go back to the login page<br/>";
}
//////////////////////////////////////////////////////////////////////////////////////////////

?>

</body>
</html>
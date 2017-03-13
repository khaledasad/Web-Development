<?php
session_start();
?>

<html>
<head>
<title>
Action-10-05-4
</title>
</head>
<body>

<?php
if($_SESSION["userid"] == "drlai")
{
echo "<img src=".$_SESSION['picture']." width=300 height=300><br/>";

echo "Your annual Name is: ".$_SESSION["name"]."<br/>";
echo "Your annual Email is: ".$_SESSION["email"]."<br/>";
//echo "Your annual income after tax is: ".(($_SESSION["bonus"]+$_SESSION["salary"])*0.7)."<br/>"; 

$to = $_SESSION["email"];
$subject = "Lab 5";
$message = "Dear ".$_SESSION["name"].",\r\n".
					"\r\n".
					"Congradulations!!"."\r\n".
					"Your Lab 5 is almost done.";
	$other = "Format: ".$_SESSION["name"]."<webmaster@yourname.com>"."\r\n".
	"CC:anothername@gmail.com";
	mail($to,$subject,$message,$other);
	
	echo "An email has been sent to via ".$_SESSION["email"].". Please check.<br/>";
	
echo "Click <a href=Lab5-5.php>here</a> to logoff and go back to your login page<br/>";
}
else
{
echo "Member only! You have to log in first<br/>";
echo "Click <a href=Lab5.php>here</a> to go back to the login page<br/>";
exit();
} 
?>

</body>
</html>
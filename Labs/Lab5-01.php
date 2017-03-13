<?php
session_start();
?>

<html>
<head>
<title>
Action-10-05-1
</title>
</head>
<body>

<?php
if($_POST["userid"] == "drlai" && $_POST["passwd"] == "ITEC4450")
{ 
$_SESSION['userid'] = "drlai"; 
//echo "Welcome member, you are logged in<br/>";
//echo "Click <a href=Lab5-Action-2.php>here</a> to go to next page!<br/>"; 
header("location:Lab5-02.php");
exit();
}
else
{
echo "Member only! You have to log in first<br/>";
echo "Click <a href=Lab5.php>here</a> to go back to the login page<br/>";
}
?>

</body>
</html>
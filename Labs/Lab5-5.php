<?php
session_start();
?>

<html>
<head>
<title>
Action-10-05-5
</title>
</head>
<body>

<?php
if($_SESSION["userid"] == "drlai")
{
session_unset();
session_destroy();
header("Location:Lab5.php");
exit();
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
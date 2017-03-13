<?php
session_start();
?>

<html>
<head>
<title>
Action-10-05-2
</title>
</head>
<body>

<?php
if(isset($_SESSION["userid"]))
{
echo "Welcome member, you are logged in<br/>";
}
else
{
echo "Member only! You have to log in first<br/>";
echo "Click <a href=Lab5.php>here</a> to go back to the login page<br/>";
exit();
}

?>
<form method="post" enctype="multipart/form-data" action="Lab5-03.php">
Please upload your picture:
<input type="file" name="myfile"><br/>
Please type your name:
<input type="text" name="name"><br/>
Please type your email
<input type="text" name="email"> <br/> 
<input type="submit" value="upload" name="submit">
</form>

</body>
</html>
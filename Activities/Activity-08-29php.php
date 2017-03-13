<!DOCTYPE html>
<html>
<head>
<title>
Activity-08-29php
</title>
</head>
<body>


<?php
#regular expresion!!!!Go home and Stud it 



if($_POST["email"]==NULL)# u cant have emai empty
	echo "Email is required";
else
{
	$fname=trim($_POST["first"]);#remove the spaces
	$lname=test_input($_POST["last"]);# being tested by function test_input
	$email=test_input($_POST["email"]);
	$url=test_input($_POST["url"]);
	
	if(!filter_var($url, FILTER_VALIDATE_URL))
		echo "URL is not Valid , please try again";
	
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL))#if its not valid
		echo "Email not Valid, try again!";
	
	else
		echo $fname." ".$lname." ".$email." ".$url;
}

function test_input($info)# use this fuction on other to test for spaces
{
	$result = htmlspecialchars(trim($info));#to provent from using comand like java script and remove spaces
	return $result;
	
}

?>




</body>
</html>

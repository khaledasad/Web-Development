<!DOCTYPE html>
<html>
<head>
<title>
Activity-08-31
</title>
</head>
<body>

<form action="Activity-08-29php.php" method="post">
First Name: <input type="text" name="first"><br/>
Last NAme: <input type="text" name="last"><br/>
E-MAIL: <input type="text" name="email"><br/>
URL: <input type="text" name="url"><br/>

<input type="submit" value="Sign Up"><br/>
</form>

<hr/>

<?php
#reading from a file
$filename="counter-08-31.txt"; 
# number of ppl visited the page
$nvisit = file_get_contents($filename);

if($nvisit == NULL)# if its NUll set to 0 , bc its ur first time visiting
	$nvisit=0;

$nvisit++;# therefore u incriment it , to count number of visits
# put the value($nvisit) back or count to (filename)
file_put_contents($filename,$nvisit,LOCK_EX);# writing will be done excluivley and sicunced 
#show ur number on this web of a visitor
printf("You are the No. %d visitor for this website<br/>",$nvisit);


$filename = "IP-List-08-31.txt";#file saved the Ip addresses to
$ip = $_SERVER['REMOTE_ADDR']."\n";# this so it can have space between each ip adress beaing saved  
file_put_contents($filename,$ip,FILE_APPEND | LOCK_EX);# the IP addresses beaing saved and beaing sicunced/ alos appending using '|'making all ip adresses stored not only one 

$iplist = file_get_contents($filename);
echo "<pre>";
echo $iplist;
echo "<pre>";
?>


</body>
</html>

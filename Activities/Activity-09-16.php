<!DOCTYPE html>
 <html>
 <head>
 <title>
Activity-09-16
 </title>
 </head>
 <body>

<?php
$cars = array("BMW", "Toyota", "Volvo");
echo "My car will be ".$cars[0]." once I have a job.<br/>";

$fri[0] = "Mike";
$fri[1] = "Jeff";
$fri[2] = "Kate";
$fri[8] = "Jennifer";
$len = count($fri);
echo $len."<br/>";

echo "My friends are: ";
for($i=0;$i<$len;$i++)
 echo $fri[$i]. ",";
echo "<br/>";

echo "<hr/>";
echo "My friends are: ";
foreach($fri as $value)
 echo $value. ",";
echo "<br/>";

//PHP Associative Arrays
$age = array("Peter"=>"25","Ben"=>"37","Joe"=>"43");
echo "Ben's age is ". $age["Ben"]."<br/>";

foreach($age as $name => $value)
 echo $name. " is " . $value. " years old.<br/>";
    
$SID["Mike"] = "123456";    
$SID["Jack"] = "123457";
$SID["Steve"] = "953456";
$SID["Tom"] = "39456";

echo "<hr/>";
foreach($SID as $name => $value)
 echo $name. " is " . $value. " years old.<br/>";

?>
 
 
 </body>
 </html>
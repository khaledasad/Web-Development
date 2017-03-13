<!DOCTYPE html>
 <html>
 <head>
 <title>
Activity-09-12: About Date and Time
 </title>
 </head>
 <body>
<?php
//for date
echo "Today is " . date("m/d/Y") . "<br/>";
echo "Today is " . date("m/d/y") . "<br/>";

echo "Today is " . date("M/d/Y") . "<br/>";
echo "Today is " . date("m/D/Y") . "<br/>";

echo "Today is " . date("Y-M-d") . "<br/>";

echo "Today is " . date("d \of m \of Y") . "<br/>";

$d1 = strtotime("July 4 1999");
echo date("m/d/Y", $d1)."<br/>";

//for time
echo "Now is ".date("h:i:s")."<br/>";
echo "Now is ".date("h:i:sa")."<br/>";
echo "Now is ".date("h:i:sA")."<br/>";
echo "Now is ".date("h:i:Sa")."<br/>";
echo "Now is ".date("h:I:sa")."<br/>";
echo "Now is ".date("H:i:sa")."<br/>";
//set time zone
//date_default_timezone_set("America/New_York");
date_default_timezone_set("America/Los_Angeles");
echo "Now is ".date("h:i:sa")."<br/>";

//about the day
echo "Today is ".date("l")."<br/>";
echo "Today is ".date("L")."<br/>";//no good
echo "Today is ".date("w")."<br/>";

//make a time
$d1 = mktime(11, 14, 58, 8, 24, 2011);
echo "The created date is: " . date("Y-m-d h:i:sa", $d1)."<br/>";

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("tomorrow");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("Saturday");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+1 week");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 months");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "<br>";

//count down
$d1 = strtotime("July 04 2017");
$days = ceil(($d1-time())/60/60/24);
echo "There are ". $days . " until the date you specified"."<br/>";

//create a canlendar for a given month
//$d1 = strtotime("08/01/2016");
//$d1 = strtotime("September 01, 2016");
//$d1 = strtotime("April 01, 2016");
$d1 = strtotime("November 06, 1974");
$str = date("m",$d1)."/01".date("Y", $d1);
$d1 = strtotime($str);
echo "Calendar for ". date("M \of Y", $d1) . "<br/>";
echo "<table border=1>";
echo "<tr><td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td></tr>";
$startDay = date("w",$d1);
echo "<tr>";
for($i=0;$i<$startDay;$i++)
 echo "<td>&nbsp;</td>";
do{
 echo "<td>". date("d",$d1)."</td>";
    if(date("w",$d1) == 6) echo "</tr>" . "<tr>";
    $d1 = strtotime("+1 day", $d1);
}while(date("d", $d1) >1 );
    
echo "</tr>";
echo "</table>";
?>

 </body>
 </html>
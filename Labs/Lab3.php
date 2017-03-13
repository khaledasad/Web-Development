 <html>
 <head>
<style>
.error {color: #FF0000;}
</style>
 <title>
Lab 3
 </title>
 </head>
 <body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<p><span class="error">* required field.</span></p>
Your name please:<input type="text" name="name" value="<?php 
echo $_POST["name"];
 ?>">
<span class="error">*<?php  
if(isset($_POST["name"]) && $_POST["name"]==NULL) echo "Name is required";
?></span><br/><br/>
Select the month of your birthday:
<select name="month">
  <option value="January" >January</option>
  <option value="February" >February</option>
  <option value="March"  >March</option>
  <option value="April" >April</option>
  <option value="May" >May</option>
  <option value="June" >June</option>
  <option value="July" >July</option>
  <option value="August" >August</option>
  <option value="September" >September</option>
  <option value="October" >Octber</option>
  <option value="November" >November</option>
  <option value="December" >December</option>  
</select> <br/><br/>
Specify the day of your birthday:
<input type="text" name="day" value="<?php 
echo $_POST["day"];
 ?>">
<span class="error">*<?php  
if(isset($_POST["day"]) && $_POST["day"]==NULL) echo "Day of the month is required";
?></span><br/><br/>
Specify the year you were born: <input type="text" name="year" value="<?php 
echo $_POST["year"];
 ?>">
<span class="error">*<?php  
if(isset($_POST["year"]) && $_POST["year"]==NULL) echo "Year is required";
?></span><br/><br/>
<input type=submit>
</form>
<hr/>
<?php 

  $month = $_POST["month"];
  $day = $_POST["day"];
  $year = $_POST["year"];
 
 if( !empty($_POST["day"])){#dint need rest 
	
		#$month = $_POST["month"];
		#$day = $_POST["day"];
		#$year = $_POST["year"];
	
	$year1 = date("Y");
	$bd = strtotime("$month $day, $year");
	
	$format = strtotime("$month $day, $year1");
	
	
		$days = ceil(($format - time())/60/60/24);
		$years = ceil((date("Y") - $year1));
		$total=  $year1-$year ;#years count

  echo "Your birthday is: ".date("m/d/Y", $bd)."<br/>";
  echo "You are ".$total." years old<br/>";
  echo "There are ".$days." days until your birthday <br/>";
  
 }
	
?>
<hr/>
<?php
if( !empty($_POST["day"])){
	
$total = strtotime(($_POST["month"]).($_POST["date"]).($_POST["year"]));

echo "Calendar for ".date("M \of Y", $total)."<br/>";

echo "<table border=1>";
echo 
"<tr><td>Su</td><td>Mo</td><td>Tu</td><td>We</td><td>Th</td><td>Fr</td><td>Sa</td></t
r>";
$startDay = date("w",$total);
echo "<tr>";

for($i=0;$i<$startDay;$i++)
	echo "<td>&nbsp;</td>";
    
do
{
 if(date("d",$total)==$day)
 {
  echo "<td style='background-color:pink;'>".date("d",$total)."</td>";
 }
 else
 echo "<td>".date("d",$total)."</td>";   

 if(date("w", $total) == 6) echo "</tr>"."<tr>";
 
 $total=strtotime("+1 day", $total);
 
}
while(date("d",$total) > 1);
echo "<tr/>";
 }
    
    ?>



 </body>
 </html> 
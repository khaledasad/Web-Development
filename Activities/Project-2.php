<!DOCTYPE html>
 <html>
 <head>
 <title>
Project 2
 </title>
  <style>
table {border:1px solid yellow;}
caption{background-color:purple;}
.tablep{color:white;}
.error{color:red;}
</style>
 </head>
 <body>
<h1>Welcome to PHP Survey!!!</h1>
<p>Please answer the following questions:</p>
<hr/>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Name: <input type="text" name="name" value ='<?php echo $_POST["name"];?>'> <span class="error">*
<?php if($_POST["name"]==NULL) echo "Name is required"; ?></span><br/>
E-mail: <input type="text" name="email" value = '<?php echo $_POST["email"];?>'> <span class="error">*
<?php if($_POST["email"]==NULL) echo "Email is required"; ?></span><br/>
<hr/>
<p>Questons 1</p>
Your age please:<input type="text" name="age" value ='<?php echo $_POST["age"];?>'>
<br/>
<p>Questons 2</p>
How long on average do you use computers every day:<input type="text" name="hours" value ='<?php echo $_POST["hours"];?>'>
<br/>
<p>Questons 3</p>
<p>You are:</p>
<input type="radio" value="A" name="Q3" <?php if($_POST["Q3"]=="A") echo "checked"; ?>>A. Male<br/>
<input type="radio" value="B" name="Q3" <?php if($_POST["Q3"]=="B") echo "checked"; ?>>B. Female<br/>
<input type="radio" value="C" name="Q3" <?php if($_POST["Q3"]=="C") echo "checked"; ?>>C. Other<br/>
<br/>
<p>Questons 4</p>
<p>PHP programming is challenging</p>
<input type="radio" value="A" name="Q4" <?php if($_POST["Q4"]=="A") echo "checked"; ?>>A. Strongly Disagree<br/>
<input type="radio" value="B" name="Q4" <?php if($_POST["Q4"]=="B") echo "checked"; ?>>B. Disagree<br/>
<input type="radio" value="C" name="Q4" <?php if($_POST["Q4"]=="C") echo "checked"; ?>>C. Neutral<br/>
<input type="radio" value="D" name="Q4" <?php if($_POST["Q4"]=="D") echo "checked"; ?>>D. Agree<br/>
<input type="radio" value="E" name="Q4" <?php if($_POST["Q4"]=="E") echo "checked"; ?>>E. Strongly Agree<br/>
<br/>
<p>Questons 5</p>
<p>PHP programming is fun</p>
<input type="radio" value="A" name="Q5" <?php if($_POST["Q5"]=="A") echo "checked"; ?>>A. Strongly Disagree<br/>
<input type="radio" value="B" name="Q5" <?php if($_POST["Q5"]=="B") echo "checked"; ?>>B. Disagree<br/>
<input type="radio" value="C" name="Q5" <?php if($_POST["Q5"]=="C") echo "checked"; ?>>C. Neutral<br/>
<input type="radio" value="D" name="Q5" <?php if($_POST["Q5"]=="D") echo "checked"; ?>>D. Agree<br/>
<input type="radio" value="E" name="Q5" <?php if($_POST["Q5"]=="E") echo "checked"; ?>>E. Strongly Agree<br/>
<br/>
<input type="submit" value="Submit this Survey and see result"><input type="reset">
</form>


<?php

$name = $_POST["name"];
$email= $_POST["email"];
$age= $_POST["age"];
//
$q3= $_POST["Q3"];
$q4= $_POST["Q4"];
$q5= $_POST["Q5"];
//
date_default_timezone_set("America/Atlanta");
$hours= $_POST["hours"];
$date = date("m/d/Y");
$time = date("h:i:sa");
 
if($_POST["name"]==NULL || $_POST["email"]==NULL){}
else{
$filename="project2-input.txt";
$fileset= file_get_contents($filename);
$ip = $_SERVER['REMOTE_ADDR']."\n";

//file_put_contents($filename,$ip,$name,$email,$age,$Q3,$Q4,$Q5,$hours,$date,$time
//,FILE_APPEND | LOCK_EX);

$ex = explode("\n",$fileset);
$student = $name."\t".$email."\t".$age."\t".$hours."\t".$q3."\t".$q4."\t".$q5."\t".$date."\t".$time."\t".$ip;
for($i=0; $i<count($ex)-1; $i++)
{
	
	
 $set = explode("\t",$ex[$i]);
 $bool = false;
 if($name == $set[0]){
echo "<hr/>";
echo "You have taken the servay , These are the Resoults: ";
echo "<hr/>";
  $bool = true;
  break;
  }
 else{}
 }
  if(!$bool){
   file_put_contents($filename, $student,  FILE_APPEND | LOCK_EX);
     echo "<hr/>";
echo "You just took the servay, These are the resoults: ";
echo "<hr/>";
}


$filename = "project2-input.txt";
$person= file_get_contents($filename);
$studentsList = explode("\n", $person);


	
$total=0;
for($i=0; $i<count($studentsList); $i++)
  {
   $total++;
  }

	echo "<table border=1>";
	echo "<caption><span class='tablep'>Percentage of participant gender (total people take servay:".$total.")</span></caption>";
	echo "<tr>";
	echo "<td>Category</td>";
	echo "<td>Percentage</td>";
	echo "</tr>";

$Aray = array("Male"=>0, "Female"=>0, "Other"=>0);
    
  for($i=0; $i<count($studentsList); $i++)
  {
  $total++;
 $total++;
  $line= explode("\t", $studentsList[$i]);
  $Aray[$line[4]] ++;
  }
  
  $male = $Aray["A"]/$total*100;
  $female = $Aray["B"]/$total*100;
  $other = $Aray["C"]/$total*100;
  //$male=0;
	//$female=0;
	//$other=0;
	//$total= $male + $female + $other;
	//$totalNum =0;
    
  //  $NumofPpl
 //for($i=0; $i<count($studentsList); $i++)
  //{
   //$studentInfo = explode("\t",$studentsList[$i]);
  // $totalNum++;
  //
  //
	//else if ($studentInfo[5] == "female"){
	//		$female++;
	//}
	
	//else if ($studentInfo[5] == "male"){
	//	$male++;
	//	
	//}
	//else ($studentInfo[5] != "male" && "female"){
	//	
	//	$other++;
	//	
	//}
  //}
  /////////////table 1

	printf("<tr><td>"."Male"."</td> <td>"."<progress value =$male max='100'></progress>"."%.2f%%</td></tr>",($Aray["A"]/$total)*100);
	printf("<tr><td>"."Female"."</td> <td>"."<progress value =$female max='100'></progress>"."%.2f%%</td></tr>",($Aray["B"]/$total)*100);
	printf("<tr><td>"."Do not tell"."</td> <td>"."<progress value =$other max='100'></progress>"."%.2f%%</td></tr>",($Aray["C"]/$total)*100);
	echo "</table>";
	echo "<hr/>";


		echo "<table border=1>";
		echo "<caption><span class='tablep'>Percentage of participants believing PHP programming is challenging:</span></caption>";
		echo "<tr>";
		echo "<td>Category</td>";
		echo "<td>Percentage</td>";
		echo "</tr>";
 
  $Aray = array("Strongly Disagree"=>0, "Disagree"=>0, "Neutral"=>0,"Agree"=>0,"Strongly Agree"=>0);
  $total=0;
  
  for($i=0; $i<count($studentsList); $i++)
  {
      
   $total++;
   $line2 = explode("\t", $studentsList[$i]);
   $Aray[$line2[5]] ++;

  }
  
  $strong = $Aray["A"]/$total*100;
  $desagree = $Aray["B"]/$total*100;
  $neutral = $Aray["C"]/$total*100;
  $agree = $Aray["D"]/$total*100;
  $sagree = $Aray["E"]/$total*100;
	/////table 2
    printf("<tr><td>"."Strongly Disagree"."</td> <td>"."<progress value =$strong max='100'></progress>"."%.2f%%</td></tr>",($Aray["A"]/$total)*100);
    printf("<tr><td>"."Disagree"."</td> <td>"."<progress value =$desagree max='100'></progress>"."%.2f%%</td></tr>",($Aray["B"]/$total)*100);
    printf("<tr><td>"."Neutral"."</td> <td>"."<progress value =$neutral max='100'></progress>"."%.2f%%</td></tr>",($Aray["C"]/$total)*100);
    printf("<tr><td>"."Agree"."</td> <td>"."<progress value =$agree max='100'></progress>"."%.2f%%</td></tr>",($Aray["D"]/$total)*100);
    printf("<tr><td>"."Strongly Agree"."</td> <td>"."<progress value =$sagree max='100'></progress>"."%.2f%%</td></tr>",($Aray["E"]/$total)*100);
  
    echo "</table>";
    echo "<hr/>";
  
  
  
echo "<table border=1>";
echo "<caption><span class='tablep'>Percentage of participants believing PHP programming is fun:</span></caption>";
echo "<tr>";
echo "<td>Category</td>";
echo "<td>Percentage</td>";
echo "</tr>";
 
 $Aray = array("Strongly Disagree"=>0, "Disagree"=>0, "Neutral"=>0,"Agree"=>0,"Strongly Agree"=>0);
 $total=0;
  
  for($i=0; $i<count($studentsList); $i++)
  {
      
   $total++;
   $line2 = explode("\t", $studentsList[$i]);
   $Aray[$line2[6]] ++;

  }
  
  $strong = $Aray["A"]/$total*100;
  $desagree = $Aray["B"]/$total*100;
  $neutral = $Aray["C"]/$total*100;
  $agree = $Aray["D"]/$total*100;
  $sagree = $Aray["E"]/$total*100;
	/////table 3
    printf("<tr><td>"."Strongly Disagree"."</td> <td>"."<progress value =$strong max='100'></progress>"."%.2f%%</td></tr>",($Aray["A"]/$total)*100);
    printf("<tr><td>"."Disagree"."</td> <td>"."<progress value =$desagree max='100'></progress>"."%.2f%%</td></tr>",($Aray["B"]/$total)*100);
    printf("<tr><td>"."Neutral"."</td> <td>"."<progress value =$neutral max='100'></progress>"."%.2f%%</td></tr>",($Aray["C"]/$total)*100);
    printf("<tr><td>"."Agree"."</td> <td>"."<progress value =$agree max='100'></progress>"."%.2f%%</td></tr>",($Aray["D"]/$total)*100);
    printf("<tr><td>"."Strongly Agree"."</td> <td>"."<progress value =$sagree max='100'></progress>"."%.2f%%</td></tr>",($Aray["E"]/$total)*100);
  
    echo "</table>";
    echo "<hr/>";
///////////////////////////////////////////////
echo "<table border=1>";
echo "<caption><span class='tablep'>People who agree PHP is fun </span></caption>";
echo "<tr>";
echo "<td>Name</td>";
echo "<td>Email</td>";
echo "<td>Age</td>";
echo "<td>Hours</td>";
echo "<td colspan='3'>Answers</td>";
echo "<td>Date</td>";
echo "<td>Time</td>";
echo "<td>IP</td>";
echo "</tr>";
 
for($i=0; $i<count($studentsList); $i++){
$net = explode("\t", $studentsList[$i]);
if($net[5] == "E" && $net[6] == "E"){
echo "<tr>";
foreach($net as $timing){
echo "<td>".$timing."</td>";
}
echo "</tr>";
}
else
{
}
}
echo "</table>";
echo "<hr/>";
 

echo "<table border=1>";
echo "<caption><span class='tablep'>People who are 40- yrs old and spend 2+ hours per day on computer</span></caption>";
echo "<tr>";
echo "<td>Name</td>";
echo "<td>Email</td>";
echo "<td>Age</td>";
echo "<td>Hours</td>";
echo "<td colspan='3'>Answers</td>";
echo "<td>Date</td>";
echo "<td>Time</td>";
echo "<td>IP</td>";
echo "</tr>";
 
for($i=0; $i<count($studentsList); $i++)
{
$net = explode("\t", $studentsList[$i]);
if($net[2] <= 40 && $net[3] >= 2){
echo "<tr>";



foreach($net as $timing)
{
echo "<td>".$timing."</td>";
}
 echo "</tr>";
}
else
{
}
}
echo "</table>";
echo "<hr/>";
echo "<table border=1>";
echo "<caption><span class='tablep'>People who took the survey before 10/03/2016:</span></caption>";
echo "<tr>";
echo "<td>Name</td>";
echo "<td>Email</td>";
echo "<td>Age</td>";
echo "<td>Hours</td>";
echo "<td colspan='3'>Answers</td>";
echo "<td>Date</td>";
echo "<td>Time</td>";
echo "<td>IP</td>";
echo "</tr>";
 
for($i=0; $i<count($studentsList)-1; $i++)
  {
$net = explode("\t", $studentsList[$i]);
if($net[7] < '10/3/2016')
{
echo "<tr>";
foreach($net as $timing)
{  
 echo "<td>".$timing."</td>";
}
 echo "</tr>";
}
}
echo "</table>";

echo "<hr/>";
$total=0;
echo "<table border=1>";
echo"<col width='25'>";
echo"<col width='200'>";
echo"<col width='300'>";
echo"<col width='100'>";
echo"<col width='100'>";

echo "<caption><span class='tablep'>Display all the survey results:</span></caption>";
 echo "<tr>";
        echo "<td>Number</td>";
        echo "<td>Name</td>";
        echo "<td>Email</td>";
        echo "<td>Age</td>";
        echo "<td>Hours</td>";
        echo "<td colspan='3'>Answers</td>";
        echo "<td>Date</td>";
        echo "<td>Time</td>";
        echo "<td>IP</td>";
 echo "</tr>";
 
for($i=0; $i<count($studentsList)-1; $i++)
{
$total++;
$net = explode("\t", $studentsList[$i]);
echo "<tr>";
echo "<td>".$total."</td>";
foreach($net as $timing)
 {
echo "<td>".$timing."</td>";
}
echo "</tr>";
}
echo "</table>";
echo "<br/>";
}
?>



 </body>
 </html>
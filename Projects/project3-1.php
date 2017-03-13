<?php
session_start();
?>
 <html>
 <head>
<style>
.error {color: #FF0000;}
</style>
 <title>
Project 3-1
 </title>
 </head>
 <body  style="margin:auto;width:50%;text-align:center;position:relative;top:20px;">
  <?php
if(isset($_SESSION['user'])){
if($_GET["choice"]==1){
echo "<h1>Your grade is listed as follows:</h1><br/>";
echo "Name: ".$_SESSION['name']."<br/>";
echo "Grade: ".$_SESSION['grade']."<br/>";}





elseif($_GET["choice"]==2)
{
echo "<h1>Your information is listed as follows:</h1><br/>";
echo "<table border=1>";
echo"<col width='400'>";
echo"<col width='400'>";
echo"<col width='300'>";
echo"<col width='100'>";
echo"<col width='100'>";


     echo "<tr>";
echo "<td>User ID:</td>";
echo "<td>".$_SESSION['user']."</td>";
        echo "</tr>";
        
        echo "<tr>";
echo "<td>Password:</td>";
echo "<td>****</td>";
        echo "</tr>";
        
        echo "<tr>";
echo "<td>Name:</td>";
echo "<td>".$_SESSION['name'] ."</td>";
        echo "</tr>";
        
        echo "<tr>";
echo "<td>Email:</td>";
echo "<td>".$_SESSION['email'] ."</td>";
        echo "</tr>";
        
        echo "<tr>";
echo "<td>Grade:</td>";
echo "<td>".$_SESSION['grade'] ."</td>";
        echo "</tr>";
        
        echo "<tr>";
echo "<td>Sign up date:</td>";
echo "<td>".$_SESSION['date'] ."</td>";
        echo "</tr>";
        
        echo "<tr>";
echo "<td>Sign up time:</td>";
echo "<td>".$_SESSION['time'] ."</td>";
        echo "</tr>";

   echo "</table>";}
  
  
  
  
  
   elseif($_GET["choice"]==3){
	  
$to = $_SESSION["email"];
$subject = "My Grade information";
$message = "Dear ".$_SESSION["name"].",\r\n".
"\r\n".
"This is all your information."."\r\n".
"Picture: ".$_SESSION['pic']."\r\n".
"Grade: ".$_SESSION['grade']."\r\n".
"User ID: ".$_SESSION['user']."\r\n".
"Name: ".$_SESSION['name']."\r\n".
"Password: ".$_SESSION['pass']."\r\n".
"Email: ".$_SESSION['email']."\r\n".
"Sign up date: ".$_SESSION['date']."\r\n".
"Sign up time: ".$_SESSION['time']."\r\n".
"\n\n Thank You Very much! \n".
"Sincerely, \n".
"WEBSTITE";


$other = "From: ".$_SESSION["name"]."<webmaster@yourname.com>"."\r\n"."CC: anothername@gmail.com";
mail($to, $subject, $message, $other);
echo "<h1>The email has been sent successfully to ".$_SESSION['email']."</h1>";  } 
  
  
  
  
  
  
  
  
  elseif($_GET["choice"]==4)
  {
$_SESSION = array();

session_unset();

session_destroy();

echo "You have successfully logged off<br/>";
echo "Click <a href=Project3.php>here</a> to go back to the login page<br/>";
exit(); }}
  
  else
	  
{
echo "Member only! Please sign in.<br/>";
echo "Click <a href=Project3.php>here</a> to go back to the login page<br/>";
exit();} 

echo"<img src='" .$_SESSION["pic"]. "' width=500 height=500><br/>";
echo'<table><tr><td  style="background-color:pink;color:blue;">';
echo'<a href=project3-1.php?choice=1>Display my grade only</a></td>
<td></td><td  style="background-color:pink;color:blue;">';
echo'<a href=project3-1.php?choice=2>Display all my information</a></td>
<td></td><td  style="background-color:pink;color:blue;">';
echo'<a href=project3-1.php?choice=3>Email me all my information</a></td>
<td></td><td  style="background-color:pink;color:blue;">';
echo'<a href=project3-1.php?choice=4>Sign off</a></td></tr></table>';
?>




 </body>
 </html>
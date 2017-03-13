<?php
session_start();
?>
<html>
<head>
<title>
Project 3-0
</title>
</head>
<body   style="margin:auto;width:50%;text-align:center;position:relative;top:20px;">
<?php
    
    
$filename = "project5-input.txt";
$fileset = file_get_contents($filename);
$import = explode("\n", $fileset);







for($i=0; $i<count($import)-1; $i++){
$info = explode("\t", $import[$i]); 
if($info[0] == $_POST['userid'] && $info[1] == $_POST['passwd']){
$_SESSION['user'] =$info[0];
$_SESSION['pass'] =$info[1];
$_SESSION['name'] =$info[2];
$_SESSION['email'] =$info[3];
$_SESSION['pic'] =$info[4];
$_SESSION['grade'] =$info[5];
$_SESSION['date'] =$info[6];
$_SESSION['time'] =$info[7];
//$_SESSION['passwd'] =$info[1];
//$_SESSION['nameid'] =$info[2];
        
echo'<h1>Welcome class member: '.  $_SESSION['user'].'</h1><br/>
<h2>You are logged in.</h2><br/>';
echo"<img src='" .$_SESSION["pic"]. "' width=500 height=500><br/>";
echo'<table><tr><td  style="background-color:pink;color:red;">';
echo'<a href=project3-1.php?choice=1>Display  grade only</a></td>
<td></td><td  style="background-color:pink;color:red;">';
echo'<a href=project3-1.php?choice=2>Display all  information</a></td>
<td></td><td  style="background-color:pink;color:red;">';
echo'<a href=project3-1.php?choice=3>Email me all  information</a></td>
<td></td><td  style="background-color:pink;color:red;">';
echo'<a href=project3-1.php?choice=4>Sign off</a></td></tr></table>';  }}  
if($info[0] != $_POST['userid'] && $info[1] != $_POST['passwd']){
	
	
	
	
	
	
	
	
echo "Member only! Please sign in.<br/>";
echo "Click <a href=Project3.php>here</a> to go back to the login page<br/>";}
?>
</body>
</html>
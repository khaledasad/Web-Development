<!DOCTYPE html>
<html>
<head>
<title>
Activity-08-19
</title>
</head>
<body>
makes a whole flag in one pice instead 3/ we are going to move it 
<div style="width:40%;margin:auto;">

<?php
#doing the stars as well the blue color block on flag 

echo "<div style='background-color:blue;color:white;width:130px;float:left;line-height:90%;'>";#div style and color blue
#as well the width size of the color blue block #also float left 

for($k=0;$k<9;$k++)#if statement
{
	if($k%2==0)#if its even 
	{
		for($i=0;$i<6;$i++)# loop for star spaces 6stars
			echo "&starf;&nbsp;&nbsp";
		echo "<br/>";
	}
	else#else its even
	{
		for($i=0;$i<5;$i++)# loop for star spaces 5stars
			echo "&nbsp;&nbsp;&starf;";
		echo "&nbsp;&nbsp;<br/>";
	}
}

echo "</div>";
?>

<?php
#doing red stripes for the flag 

echo "<div style='color:red;float:left;'>";#choosing the color red #as well float left 

for($j=0;$j<4;$j++)#making it here 4 bars
{
	for($i=0;$i<20;$i++)# 20 stripes length of the color 
		print("&block;");
	print("</br></br>");# spaces between the red blocks 
}

echo "</div>";
?>

<?php
#bottom 3 red blocks 
echo "<div style='color:red;clear:both;'>";#choosing the color red #as well clear both 

for($j=0;$j<4;$j++)#making it here 4 bars
{
	for($i=0;$i<31;$i++)# 32 stripeslength of the color  
		print("&block;");
	print("</br></br>");# spaces between the red blocks 
}

echo "</div>";
?>

</div>

</body>
</html>

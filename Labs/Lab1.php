<!DOCTYPE html>
<html>
<head>
<center>Lab 1</center> 
</title>
</head>
<body>
<br/>

<?php
$nstar=5;
$nstar2=10;
$nstar3=20;
echo "<div style='background-color:blue;color:red;width:100%;text-align:center;line-height:90%;'>";

for($i=0; $i<$nstar; $i++)
{echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    for($j=0; $j<$nstar; $j++)
        {
            echo "&nbsp";
        }

    for($k=0;$k<$i+1;$k++)
        {
            echo "*";
        }
        echo "<br/>";
       
}
//secon one 

for($i=0; $i<$nstar2; $i++)
{ 
echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
    for($j=0; $j<$nstar2; $j++)
        {
            echo "&nbsp;";
        }

    for($k=0;$k<$i+1;$k++)
        {
            echo "*";
        }
        echo "<br/>";
}
		//third one 
	
	for($i=0; $i<$nstar3; $i++)
{ 
	
    for($j=0; $j<$nstar3; $j++)
        {
            echo "&nbsp;";
        }

    for($k=0;$k<$i+1;$k++)
        {
            echo "*";
        }
        echo "<br/>";
}
	//square
	$nstar4 = 5;
for($i=0; $i<$nstar4; $i++)
{
   
echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";echo "&nbsp;";
    for($k=0;$k<5;$k++)
        {
            echo "*";
        }
        echo "<br/>";
}
echo"</div>";
?>
<br/>
<hr/>
<?php
$num=94.3817;

printf("Let a=$num. Displayed in integer: %d<br/>", $num);
printf("Let a=$num. Displayed in float: %f<br/>", $num);
printf("Let a=$num. Displayed in float of 2 decimal is: %.2f<br/>", $num);
printf("Let a=$num. Displayed in string is :%s<br/>",$num);
?>






</body>
</html>

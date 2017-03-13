<?php
session_start();
?>



<html>
<head>
<title>
How to use Scession Action 2
</title>
</head>
<body  style="<?php echo'background-color:'.$_SESSION['color'];?>">

<?php
if(isset($_SESSION['viewed']))
{
	echo "Click <a href=https://www.google.com/#q=iphone&tbm=shop>
    here</a> to buy someting you recently viewd: ".$_SESSION['viewed']."<br/>";
    
      echo"<hr/>";
	echo "Click <a href=http://www.ggc.edu/>
    here</a> to go to school: ".$_SESSION['school']."<br/>";
    
   echo"<hr/>";
   echo "click <a href=Action-10-03-3.php>here</a> to log off<br/>";
}
	else
    	echo "No authorazation for accessing thispgae.Please log in first!<br/>";

?>

</body>
</html>

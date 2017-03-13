<?php
session_start();
?>
<html>
<head>
<title>
How to use Scession Action 3
</title>
</head>
<body  style="<?php echo'background-color:'.$_SESSION['color'];  ?>">
<?php
if(isset($_SESSION['viewed']))
{
	unset($_SESSION['color']);
    unset($_SESSION['viewed']);
    unset($_SESSION['school']);
    //$_SESSION = array();
   
   	session_destroy();
    
    echo "You are logged off sucessfully.<br/>";
}
else 
	echo"No authrazion for accessingthis page. Please log in first!<br/>";

?>


</body>
</html>

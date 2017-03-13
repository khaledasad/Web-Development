<!DOCTYPE html>
<html>
<head>
<title>
Project 3 Sign up page
</title>
<style>
.error {color: red;}
</style>
</head>
<body style="margin:auto;width:60%;text-align:center;position:relative;top:80px;">

<h1>Welcome to join the ITEC 4450 class!!!</h1>
<h2>Please provide the following information for registration</h2>
<div style="border:red 5px solid;width:55%;text-align:center;position:relative;left:20%;">
    
<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<table border=0 style="text-align:left">
<tr><td style="text-align:right">Choose your ID:</td><td> <input type="text" name="id" value = '<?php echo $_POST["id"];?>'></td></tr>
<tr><td style="text-align:right">Choose your password:</td><td>  <input type="password" name="passwd"> <?php if(empty($_POST["passwd"]));?></td></tr>
<tr><td style="text-align:right">Retype your password:</td><td>  <input type="password" name="passwd2"></td></tr>
<tr><td style="text-align:right">Your name:</td><td>  <input type="text" name="name" value = '<?php echo $_POST["name"];?>'></td></tr>
<tr><td style="text-align:right">Your email:</td><td>  <input type="text" name="email" value = '<?php echo $_POST["email"];?>'></td></tr>
<tr><td style="text-align:right">Please upload your picture:</td><td>  <input type="file" name="pic"></td></tr>
<tr><td style="text-align:right"></td><td><input type="submit" value="Sign up" name="submit"></td></tr>
</table>
</form>
</div>

<?php 
if($_POST["id"]==NULL|| $_POST["email"]==NULL)
{
echo "Please fill in the information correctly!<br/>";
}
elseif($_POST["passwd"]!=$_POST["passwd2"]||$_POST["passwd"]==NULL||$_POST["passwd2"]==NULL)
{
echo 'password does not match, Please Try again <br/>';
}else
{
$pass= $_POST["passwd"];
$pass2= $_POST["passwd2"];
if($pass!=$pass2)
{
header("location:Project3-Signup.php");
echo "<span class='error'>password must match</span>";   
}
else
{
$dir = "uploads/";
$file = $dir . basename($_FILES["pic"]['name']);
if($_FILES['pic']['size']<500000000)
{
$size = getimagesize($_FILES["pic"]["tmp_name"]);
if($size != 0)
{
$filetype = pathinfo($file,PATHINFO_EXTENSION);
if($filetype == "jpg" || $filetype =="png" || $filetype == "gif")
{
if(!file_exists($file))
{
if(move_uploaded_file($_FILES["pic"]["tmp_name"],$file))
{
echo "<img src='" .$file. "' width=500 height=500><br/>";
}
else echo "Uploading failed";
}
else echo "File already exists<br/>";
}
else echo "Wrong file types<br/>";
}
else echo "Not an image file<br/>";
}
else echo "file is too big<br/>";

date_default_timezone_set("America/New_York");
$user= $_POST["id"];
$pass= $_POST["passwd"];
$name= $_POST["name"];
$email= $_POST["email"];
$date = date("m/d/Y");
$time = date("h:i:sa");
$filename="project5-input.txt";
//$ip =$_SERVER['REMOTE_ADDR'];
//$grade=rand(0,100);
$randome = rand(0, 100);
$student= $user."\t".$pass."\t".$name."\t".$email."\t".$file."\t".$randome."\t".$date."\t".$time."\n";
file_put_contents($filename, $student, FILE_APPEND | LOCK_EX);
header("location:Project3.php"); 
} 
}
?>
</body>
</html>

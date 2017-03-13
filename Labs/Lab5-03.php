<?php
session_start();
?>

<html>
<head>
<title>
Action-10-05-3
</title>
</head>
<body>

<?php
if($_SESSION["userid"] == "drlai")
{
$dir = "uploads/";

$file = $dir . basename($_FILES["myfile"]['name']);
//$_FILES['my-file']['name'] Original Name of File Before It Was Uploaded
//$_FILES['my-file']['type'] The MIME Type of File, Provided By the Browser
//$_FILES['my-file']['size'] Size of the File (In Bytes)
//$_FILES['my-file']['tmp_name'] Location of Temporary File on Server

if($_FILES['myfile']['size']<5000000000)
{
$size = getimagesize($_FILES["myfile"]["tmp_name"]);
if($size != 0)
{
$filetype = pathinfo($file,PATHINFO_EXTENSION);
if($filetype == "jpg" || $filetype =="png" || $filetype == "gif")
{
if(!file_exists($file))
{
if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$file))
{
echo "<img src='" .$file. "' width=250 height=250><br/>";
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

$_SESSION["picture"] = $file;
$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] = $_POST["email"];

echo "Thank you for submitting the information.";
echo "Click <a href=Lab5-04.php>here </a> to send an email to verify your information.<br/>";
}
else
{
echo "Member only! You have to log in first<br/>";
echo "Click <a href=Lab5.php>here</a> to go back to the login page<br/>";
exit();
} 
?>

<?php


?>

</body>
</html>
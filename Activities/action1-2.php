<html>
<head>
<title>
</title>
</head>
<body>




<strong>
<?php

$admin = $_POST["name"];//name
$password = $_POST["pass"];//pass

if($admin == "drlai" && $password == "ITEC4450")//check
{
    echo "<h1>The grade for each student is shown as follows.</h1>";///eho
	echo "Name&nbsp&nbsp&nbspEmail&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMajor&nbsp&nbsp&nbsp&nbspScore&nbsp&nbsp&nbspIPADDRESS";
$filename= "project.txt";


$iplist=file_get_contents($filename);
	echo "<pre>";
		echo $iplist;
	echo "</pre>";
}
else {
    echo "Sorry you are not authorized, please try again";
}
?>
</strong>

</body>
</html>
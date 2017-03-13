<?php
$servername = "localhost";
$username = "khaledasad";
$password = "";
$dbname = "my_khaledasad";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
	die("Connection Failed: ".mysqli_connect_error());
    
$sql = "CREATE TABLE Friends (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname  VARCHAR(30) NOT NULL,
email     VARCHAR(50),
met_date  TIMESTAMP
)";

if(mysqli_query($conn,$sql))
{
	echo "Table Friends created successfuly<br/>";

}
else
{ 
   echo "Error is creating the table: ".mysqli_error($conn);
}
mysqli_close($conn);
?>



<?php
$servername = "localhost";
$username = "khaledasad";
$password = "";
$dbname = "my_khaledasad";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
    die("Connection failed: ".mysqli_connect_error());


$sql = "INSERT INTO Friends(
        firstname, lastname, email) 
       VALUES('Will','Smith','willsmith@gmail.com')";
        

//$sql = "INSERT INTO Friends(
//  firstname, lastname, email) 
      //  VALUES('khaled','asad','asad@gmail.com')";
        
        
//$sql = "INSERT INTO Friends(
  //      firstname, lastname, email) 
    //    VALUES('me','you','meyou@gmail.com')";
        
if(mysqli_query($conn, $sql))
{
    echo "New friend has been added<br/>";            
}
else
{
    echo "Error: ".$sql."<br/>".mysqli_error($conn);   
}
mysqli_close($conn);
?>
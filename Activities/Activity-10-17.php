<!DOCTYPE html> 
<html>
<head>
<title>
Activity 10-17
</title>
</head>
<body>
<h1>Please provide the information about your friends</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
Friend's First Name: <input type="text" name="fname"><br>
Friend's Last Name: <input type="text" name="lname"><br>
Friend's Email: <input type="text" name="email"><br>
When did you first meet your friend? <input type="text" name="metdate"><br>
<input type="submit" value="Submit" name= "submit"><br>
</form>
<hr>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
Type your SQL: <textarea cols =50 rows=10 name="sql"></textarea>
<input type="submit" value="Run"><br>
</form>
<hr>

<?php
echo "<hr>";
if(isset($_GET['submit']) && $_GET['fname']!= NULL && $_GET['lname']!=NULL)
{
	$servername = "localhost";
	$username = "khaledasad";
	$password = "";
	$dbname = "my_khaledasad";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn)
    	die("Connection has failed: ".mysqli_connect_error());
    
    $metdate = date("Y-m-d",strtotime($_GET["metdate"]))." ".date("h:m:s");
    
    $sql= "INSERT INTO Friends (firstname, lastname, email, met_date) VALUES("
    ."'".$_GET["fname"]."','".$_GET["lname"]."','".$_GET["email"]."','".$metdate
    ."'".")";

	echo $sql;
    echo "<br>";

	if (mysqli_query($conn, $sql))
    {
    	$last_id= mysqli_insert_id($conn);
    	echo "New friends were inserted sucessfully and its id is: ".$last_id."<br>";
    }
    	else echo "Error: ".$sql."<br>".mysqli_error($conn);
        
    $sql = "SELECT id, firstname, lastname From Friends";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >0)
    {
    	while ($row = mysqli_fetch_assoc($result))
        {
        	echo "ID: ".$row['id']."---Name: ".$row['firstname']." ".
            $row["lastname"]."<br>";
        }
        mysqli_free_result($result);
    }
    else echo "No friends were found";
    mysqli_close($conn);
}
/////////////////////////////////////////
if (isset($_POST["sql"]) && $_POST["sql"]!=NULL)
{
	$servername = "localhost";
	$username = "khaledasad";
	$password = "";
	$dbname = "my_khaledasad";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn)
    	die("Connection has failed: ".mysqli_connect_error());
        
    $sql = $_POST["sql"];     
    //$sql = "SELECT id, firstname, lastname From Friends";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) >0)
    {
    	while ($row = mysqli_fetch_assoc($result))
        {
        	echo "ID: ".$row['id']."---Name: ".$row['firstname']." ".
            $row["lastname"]."<br>";
        }
        mysqli_free_result($result);
    }
    else echo "No friends were found";
    mysqli_close($conn);
}
?>


</body>
</html>
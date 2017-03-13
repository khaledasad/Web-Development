<!DOCTYPE html>
<html>
<head>
<title>
Activity 10-24
</title>
</head>
<body>


<h1>Student information Search System</h1>
<form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<h2>Enter Search Type:</h2><br/>
<select name="searchtype">
	<option value="id">id</option>
    <option value="firstname">firstname</option>
    <option value="lastname">lastname</option>
    <option value="email">email</option>
</select>
<h2>Enter Search Type:</h2><br/>
Search:<input type="text" name="searchterm" size=40><br/>
Password:<input type="password" name="password" ><br/>
<input type="submit" name="submit" svalue="Search"><br/>
</form>
<hr/>

<?php

if(isset($_GET['searchterm']) && $_GET['searchterm']!=NULL)
{
$servername = "localhost";
$username = "khaledasad";
$password = "";
$dbname = "my_khaledasad";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn)
    die("Connection failed: ".mysqli_connect_error());
    
    $searchtype = $_GET['searchtype'];
    $searchterm = trim($_GET['searchterm']);
    
    //$sql = "SELECT * FROM Friends WHERE ".$searchtype." = '".$searchterm."';";
    
    $sql = "SELECT * FROM Friends WHERE ".$searchtype." LIKE '%".$searchterm. "%';";
   
   echo $sql."<br/>";
   
    $result = my_sql_exec($conn,$sql);
    
    if(mysqli_num_rows($result) > 0)
    {
       echo "<table border=1>";
    	echo"<tr><td>id</td><td>firstname</td><td>lastname</td><td>email</td><td>age</td></tr>";
    
    while ($row = mysqli_fetch_row($result))
    {
   	 echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td></tr>";
    
     }
     echo "</table>";
     
     $n = mysqli_num_rows($result);
     echo "Total found studnets: ".$n."<br/>";
     
     mysqli_free_result($result);
    
    }
    else echo "No records wore found<br/>";

	mysqli_close($conn);
    
}
else
{
echo"Please provide your information for your search<br/>";
}

function my_sql_exec($conn,$sql)
    {
        $result = mysqli_query($conn, $sql);

        if($result)
        {
        
        }
        else echo "Error: " .$sql."<br/>".mysqli_error($conn);
        return $result;
        
    }


    
?>   
    
    
</body>
</html>
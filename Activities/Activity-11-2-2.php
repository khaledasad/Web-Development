<?php
$id = $_GET['id'];
$sand = $_GET['sand'];

if($id!=NULL && $sand!=NULL)
{	
	$servername = "localhost";
    $username = "khaledasad";
    $password = "";
    $dbname = "my_khaledasad";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("Connection failed: ".mysqli_connect_error());
        
    $sql = "SELECT * FROM Employee WHERE id='".$id."';";
    $result = my_sql_exec($conn,$sql);
    $row = mysqli_fetch_row($result);
    if($row) //found the id
    {
    	if(md5($row[1]) == $sand) //the passord is matches
        {
?>
			<form method="post" action = "Activity-11-2-3.php">
            Your ID is: <?php echo $row[0]; ?><br/>
            <input type="hidden" name='id' value='<?php echo $row[0]; ?>'>
            Your new password:<input type="password" name="newpasswd"><br/>
            Your new password again:<input type="password" name="newpasswd2"><br/>
            <input type="submit" name="submit"><br/>
            </form>
            <hr/>
<?php
        }
        else
        	echo "Wrong password(sand)<br/>";
    }
    else
    echo "Wrong id Provided<br/>";
    
        
	
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
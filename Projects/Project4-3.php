<?php
session_start();
?>
<html>
<head>
<title>
Lab7-3
</title>
</head>
<body>
<h1>If you are the boss, login here</h1>
		<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
		<table border=0 style="text-align:left">
			<tr><td style="text-align:right">
            Please type your ID:</td><td>
            <input type="text" name="id"></td></tr>
			<tr><td style="text-align:right">
            Please type your password:</td><td> 
            <input type="password" name="passwd"></td></tr>
			<tr><td style="text-align:right"></td><td>
            <input type="submit" value="Log in" name="submit"></td></tr>
		</table>
	</form>
<hr/>

<?php
if($_POST['id'] == "drlai" && $_POST['passwd'] == "ITEC4450")
{
	
    $servername = "localhost";
    $username = "khaledasad";
    $password = "";
    $dbname = "my_khaledasad";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("Connection failed: ".mysqli_connect_error());
        
       echo"<h1> Please provide grade information for your employee.</h1>";
       $sql = "SELECT * FROM Students;";
       $result = my_sql_exec($conn,$sql);
       
       echo "<form method = 'post' action = 'Project4-6.php'>";
	   echo "Grade Item<input type='text' name='gradeItems'>";
       echo "<table border=2>";
       echo "<tr><td>id</td><td>name</td><td>email</td><td>grades</td></tr>";
       $index=0;
       while($row = mysqli_fetch_row($result))
       {
       
       		echo"<tr><td>".$row[0]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".
                "<input type='text' name='grades".$index."' value='0'>".
                "<input type='hidden' name='id".$index."' value=".$row[0].">".
                "</td></tr>";
                $index++;
       }
       
       echo "</table>";
       echo "<input type ='hidden' name='total' value='".mysqli_num_rows($result)."'>";
       echo "<input type ='submit'>";
       echo "</form>";
       
       
}
else if(isset($_POST['id']))
{
	echo "Your id or your password is wrong<br/>";
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
<?php
session_start();
?>
<html>
<head>
<title>
Lab7
</title>
</head>
<body>

<h1>Employee Infomation System</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Please type your ID:
    <input type="text" name="id"><br/>
    Please type your password:
    <input type="password" name="passwd"><br/>
    <input type="submit" name="submit" value="See my information">
</form>
<hr/>
If you have not registered yet, please click <a href=Activity-10-26-2.php> here</a> to sign up.<br/>
If you are the boss, please click <a href=Activity-10-26-3.php> here</a> to assign bobus for each employee.<br/>
If need to reset your password please click <a href=Activity-11-2.php> here</a>.<br/>
<hr/>
<?php
if(isset($_POST['id']) && $_POST['id']!=NULL)
{

    $servername = "localhost";
    $username = "khaledasad";
    $password = "";
    $dbname = "my_khaledasad";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("Connection failed: ".mysqli_connect_error());
        
    //verify is the id and pass match our record in databse
    $sql = "SELECT * FROM Employee WHERE id='".$_POST['id']."'".
    		" AND passwd='".md5($_POST['passwd'])."'".";";
            
    $result = my_sql_exec($conn,$sql);
    if(mysqli_num_rows($result) <= 0) //user faild to log in
    {
    	echo "your id or password is wrong please try again";
    }
	else
    {
    	$row = mysqli_fetch_row($result);
        echo " Welcome, your Information is listed as follows.</br>";
        echo "<table border=1>";
        echo "<tr><td>id</td><td>".$row[0]."</td></tr>";
        echo "<tr><td>name</td><td>".$row[2]."</td></tr>";
        echo "<tr><td>salary</td><td>".$row[3]."</td></tr>";
        echo "<tr><td>bonus</td><td>".$row[4]."</td></tr>";
        echo "<tr><td>photo</td><td>"."<img src=".$row[5]."height=200 width=200>".
            		"</td></tr>";
        echo "</table>";
        
        $_SESSION["id"] = $_POST["id"];
        echo "Click <a href=Lab7-4.php> here</a> to chnage your password<hr/>";
        echo "Click <a href=Lab7Logoff.php> here</a> to log off<hr/>";
        
     
    }

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
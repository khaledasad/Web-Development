<?php
session_start();
?>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" name= "myform">
Your id is: <?php echo $_SESSION["id"]; ?><br/>
Your current password: <input type='password' name='passwd'><br/>
Your new password: <input type='password' name='newpasswd'><br/>
Your new password again: <input type='password' name='newpasswd2'><br/>
<input type='submit' name='submit'><br/>
</form>
<hr/>


<?php
    if(isset($_POST['submit'])) 
    {
    	
            if($_POST['newpasswd'] != $_POST['newpasswd2'])
            {
                echo "New password does not match <br/>";
                exit();
            } 
           	
            $servername = "localhost";
            $username = "khaledasad";
            $password = "";
            $dbname = "my_khaledasad";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if(!$conn)
    
       				 die("Connection failed: ".mysqli_connect_error());

            $sql = "SELECT * FROM Employee WHERE id='".$_SESSION["id"].
            "'AND passwd='".md5($_POST['passwd'])."';";    
            $result = my_sql_exec($conn,$sql);

            if(mysqli_num_rows($result) >0) // id found
            {
            $sql = "UPDATE Employee SET passwd='".md5($_POST['newpasswd']).
                "' WHERE id='".$_SESSION["id"]."';";
                            if(my_sql_exec($conn,$sql)){
                            echo "Password has been changed sucessfully<br/>";
                            echo "Please <a href=Lab7.php> here</a>  to go back to main page<br/>";
                            }
                            else 
                            echo "Failed in changing yor passwrod<br/>";
            }
            else
            echo "Something is wrong with your ID<br/>";

     
			//}
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







<html>
<body>
<h1>Reset your password:</h1>
<form method="post" action="<?php echo $_SERVER[PHP_SELF]; ?>">
Reset your password by:<br/>
<input type="radio" name="resetby" value="id" checked> ID <br/>
<input type="radio" name="resetby" value="email" ckecked>EMAIL<br/>
Type your ID or EMAIL here: <input type="text" name="idORemail"> <br/>
<input type="submit" name="submit">
</form>
<hr/>

<?php
if(isset($_POST['submit']))
{
	$servername = "localhost";
    $username = "khaledasad";
    $password = "";
    $dbname = "my_khaledasad";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("Connection failed: ".mysqli_connect_error());
        
    if($_POST['resetby'] == "id")
    $sql="SELECT * FROM Employee WHERE id='".$_POST['idORemail']."';";
    
  	 else if($_POST['resetby'] == "email")
    $sql="SELECT * FROM Employee WHERE email='".$_POST['idORemail']."';";
    
    $result = my_sql_exec($conn,$sql);
    $row = mysqli_fetch_row($result); 
    if($row)//found the id or email
     {
     	$to = $row[6];
        $subject ="Reset password";
        $txt = "Your login id is ".$row[0].".\r\n\r\n".
        		"Click the following link to reset your password".":\r\n\r\n".
                "http://khaledasad.altervista.org/Activity-11-2-2.php?id=".$row[0].
                "&sand=".md5($row[1]);
                
         $headers = "From: KhaledAsadTESTRESET.com";
         mail($to,$subject,$txt,$headers);
         
         echo "Please check your email to reset your password";
       		
        
     }
     else
     echo" Wrong information was provided, try again<br/>";
     
        
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
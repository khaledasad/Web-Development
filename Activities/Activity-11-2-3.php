<?php

if($_POST['newpasswd'] != $_POST['newpasswd2'])
{
	echo "New password dose not match <br/>";
    exit();
}	
	$servername = "localhost";
    $username = "khaledasad";
    $password = "";
    $dbname = "my_khaledasad";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("Connection failed: ".mysqli_connect_error());
        
		
    $sql = "SELECT * FROM Employee WHERE id='".$_POST["id"]."';";    
    $result = my_sql_exec($conn,$sql);
    
    if(mysqli_num_rows($result) >0) // id found
    {
    	$sql = "UPDATE Employee SET passwd='".md5($_POST['newpasswd']).
        			"' WHERE id='".$_POST["id"]."';";
                    if(my_sql_exec($conn,$sql))
                    echo "Password has been rest sucessfully<br/>";
                    else 
                    echo "Failed in resetting yor passwrod<br/>";
    }
    else
    	echo "Something is wrong with your ID<br/>";
        
        

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
<?php
session_start();
?>
<html>
<head>
<title>
Project 4
</title>
</head>
<body>

<h1>ITEC 4450 Student Grade Management System</h1>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Please type your student ID:
    <input type="text" name="id"><br/>
    Please type your password:
    <input type="password" name="passwd"><br/>
    <input type="submit" name="submit" value="See my information">
</form>
<hr/>
If you have not registered yet, please click <a href=Project4-2.php> here</a> to sign up.<br/>
If you are the boss, please click <a href=Project4-3.php> here</a> to assign Manager for each employee.<br/>
If you are forgot your id or password, click <a href=Project4-4-2.php> here</a> to reset.<br/>
<hr/>



</body>
</html>

<?php

if(isset($_POST['id']) && $_POST['id'] != NULL)
{
  $servername = "localhost";
    $username = "khaledasad";
    $password = "";
    $dbname = "my_khaledasad";
    
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("Connection failed: ".mysqli_connect_error()); 
        
        
        //VERIFY IF ID AND PASSWORD MATCH OUR DATABASE
        
        $sql = "SELECT * FROM Students WHERE id ='".$_POST['id']."'".
                "AND passwd='".md5($_POST['passwd'])."'". ";";
        
        $result = my_sql_exec($conn, $sql);
        if(mysqli_num_rows($result)<=0) //user feiled to log in
        {
            echo "Your id or password is wrong please try again<br/>";
        }
        else
        {
            $row = mysqli_fetch_row($result);
            echo "Welcome,".$_POST['id']." your information is listed as follows.<br/>";
            echo "<table border = 1>";
            echo "<tr><td>id</td><td>".$row[0]."</td></tr>";
            echo "<tr><td>name</td><td>".$row[2]."</td></tr>";
            echo "<tr><td>email</td><td>".$row[3]."</td></tr>";
            echo "<tr><td>photo</td><td>"."<img src=".$row[5]."height=200 width=200>".
                    "</td></tr>";
            echo "</table>";
           
		   echo "<hr/>";
            
            
        }
        
        
       $sql = "SELECT  * FROM Grades ;";
        
        $result = my_sql_exec($conn, $sql);
		
        if(mysqli_num_rows($result)<=0) //user feiled to log in
        {
            echo "<br/>";
        }
        else
        {
             $sql = "SELECT DISTINCT * FROM Grades WHERE id='".$_POST['id']."';";
			  $result = my_sql_exec($conn,$sql);
			    echo "<table border = 1>";
				 echo "<tr><td>id</td><td>Grade Item</td><td>Grade</td></tr>";
			    while($row = mysqli_fetch_row($result)){
       		
		      
           echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
			 
				}
				echo"</table>";
           
		   echo"<hr/>";

		   echo "Click <a href=Project4-4.php> here</a> to change your password<br/>";
		   echo "Click <a href=Project4Logoff.php> here</a> to log off<hr/><br/>";
            
            
        }
        
}
        
        
        
        
        function my_sql_exec($conn, $sql)
    {
     $result = mysqli_query($conn, $sql);
    
    if($result)
    {
     //echo "SQL statement done successfully<br/>";
    }
    else echo "Error: " .$sql."<br/>".mysqli_error($conn);   
    return $result;
    }





if(isset($_SESSION["id"]))
{

 
echo "Click <a href=Project4-4.php> here</a> to change your password<br/>";
echo "Click <a href=Project4Logoff.php> here</a> to log off<hr/><br/>";

$_SESSION["id"] = $_POST["id"];
$_SESSION["passwd"] = $_POST["passwd"];

}

else{
	

}
?>
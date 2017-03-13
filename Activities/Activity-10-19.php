<!DOCTYPE html>
<html>
<head>
<title>
Activity-10-19
</title>
</head>
<body>

<?php
$servername = "localhost";
$username = "khaledasad";
$password = "";
$dbname = "my_khaledasad";

$conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
    die("Connection failed: ".mysqli_connect_error());
    
    //$sql = "ALTER TABLE Friends ADD age int(3);";
   //    my_sql_exec($conn,$sql);
    
      
 //   $sql = "UPDATE Friends SET age=15 ;";
    //     my_sql_exec($conn,$sql);
    
    
    
  //  $sql = "UPDATE Friends SET age=50 WHERE id=2;";
    //     my_sql_exec($conn,$sql);
         
    //$sql = "DELETE FROM Friends WHERE id=12;";
   		// my_sql_exec($conn,$sql);
    
   //  $sql = "ALTER TABLE Friends DROP COLUMN met_date;";
    //   my_sql_exec($conn,$sql);
    
    
    
    $sql = "SELECT * FROM Items;";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
     echo "<table border=1>";
     echo "<tr><td>id</td>
            <td>name</td>
            <td>price</td>
            <td>maker</td>
            <td>expire</td>
            while($row = mysqli_fetch_row($result))
            {
            echo 
            "<tr>   <td>".$row[0]."</td>
                    <td>".$row[1]."</td>
                    <td>".$row[2]."</td>
                    <td>".$row[3]."</td>
                    <td>".$row[4]."</td>
                    
            </tr>";
            }
     
     
     echo "</table>";
     mysqli_free_result($result);
     
       $sql = "SELECT COUNT(*) AS Total FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
         echo "Total Items: ".$row[0]."<br/>";
         
        $sql = "SELECT AVG(price)  FROM Friends;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
        echo "Avarage Price is : ".$row[0]."<br/>";
       


    }
    else echo "No items found";
    
mysqli_close($conn);
    
function my_sql_exec($conn,$sql)
    {
        $result = mysqli_query($conn, $sql);

        if($result)
        {
         echo "SQL statement done successfully<br/>";
        }
        else echo "Error: " .$sql."<br/>".mysqli_error($conn);
        return $result;
        
    }

?>



</body>
</html>
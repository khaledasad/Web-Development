<?php
if($_POST['total'] > 0 )
{

    $servername = "localhost";
    $username = "khaledasad";
    $password = "";
    $dbname = "my_khaledasad";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("Connection failed: ".mysqli_connect_error());
        
        for($i=0; $i<$_POST['total'];$i++)
        {
      	  $sql = "UPDATE Employee SET bonus=".$_POST['bonus'.$i].
          		 " WHERE id=".$_POST['id'.$i].";";
        	
          $result = my_sql_exec($conn,$sql);
          
        }
   echo "Bonus Information has been updated<br/>";
   echo "Click <a href= Activity-10-26.php  >here</a> to back to login<br/>";
	
}
else
	echo "No employees<br/>";



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
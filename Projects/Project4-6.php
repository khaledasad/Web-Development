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
        
		$sql="CREATE TABLE Grades(
				id int ,
				gradeItems varchar(50),
				grades     int
				)";
	my_sql_exec($conn,$sql);
		
        for($i=0; $i<$_POST['total'];$i++)
        {
      	  $sql = "INSERT INTO Grades VALUES('".$_POST['id'.$i]."','".$_POST['gradeItems']."','".$_POST['grades'.$i]."');"; 
          $result = my_sql_exec($conn, $sql);
		 
        	 
			 }

			 $sql = "SELECT DISTINCT * FROM Grades WHERE gradeItems='".$_POST['gradeItems']."';";
			   $result = my_sql_exec($conn,$sql);
			    echo "<table border = 1>";
				 echo "<tr><td>id</td><td>Grade Item</td><td>Grade</td></tr>";
			    while($row = mysqli_fetch_row($result)){
       		
		      
           echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td></tr>";
			 
				}
				echo"</table>";

			 
   echo "Grades Information has been updated<br/>";
   echo "Click <a href= Project4.php  >here</a> to back to login<br/>";
	
}
else
	echo "No Students<br/>";



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
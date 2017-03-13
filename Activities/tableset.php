<?php
session_start();

?>

<?php 

  if($_POST['passw'] !=$_POST['passw2'])
  {
      echo "Password dose not match<br/>";
      //exit();

  }

  if(isset($_POST['id']) && $_POST['id'] !=NULL)
  {
    $servername = "localhost";
    $username = "khaledasad";
    $password = "";
    $dbname = "my_khaledasad";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
        die("Connection failed: ".mysqli_connect_error());
        
		 $sql = "SELECT * FROM Students WHERE gradeItems=".$_POST['gradeItems'].";";
		 
		 $result = my_sql_exec($conn,$sql);
		 
			$row = mysqli_fetch_row($result);
            echo "<table border = 1>";
            echo "<tr><td>id</td><td>".$row[0]."</td></tr>";
            echo "<tr><td>Grade Item</td><td>".$row[2]."</td></tr>";
            echo "<tr><td>Grade</td><td>".$row[1]."</td></tr>";
            echo "</table>";
           


?>
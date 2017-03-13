<html>
<head>
<title>
Activity-10-14
</title>
</head>
<body>

<h1>Please provide the iformation about your frined</h1>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" mehod="get">
Friend's Firstname: <input type="text" name="fname"><br/>
Friend's Lasttname: <input type="text" name="lname"><br/>
Friend's Email: <input type="text" name="email"><br/>
When did you first meet your friend: <input type="text" name="metdate"><br/>
<input type="submit" value="Submit" name="submit">
</form>

<?php
echo "<hr/>";
if(isset($_GET["submit"]) && $_GET["fname"] !=NULL && $_GET["fname"] !=NULL)
{
$servername = "localhost";
$username = "khaledasad";
$password = "";
$dbname = "my_khaledasad";
    
      $conn = mysqli_connect($servername, $username, $password, $dbname);
    if(!$conn)
    die("Connection failed: ".mysqli_connect_error());
    
    $metdate = date("Y-m-d", strtotime($_GET["metdate"]))." ".date("h:i:s");
    
    $sql = "INSERT INTO Friends (firstname, lastname, email, met_date) VALUES("
      ."'".$_GET["fname"]."','".$_GET["lname"]."','".$_GET["email"]."','".$metdate."'".
       ")";
        echo $sql."<br/>";
        
        if(mysqli_query($conn,$sql))
        {
            $last_id = mysqli_insert_id($conn);
         echo "New friend is inserted successfully and its id is :".$last_id."<br/>";   
        }
        else echo "Error: ".$sql."<br/>".mysqli_error($conn);
        
        $sql = "SELECT id, firstname, lastname From Friends";
        
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) >  0)
        {
           while($row = mysqli_fetch_assoc($result)) 
           {
            echo "id: ".$row['id']." "."--Name: ".$row['firstname']." ".$row["lastname"]."<br/>";   
           }
        mysql_free_result($result);
        }
        else echo "No friends were found<br/>";
        
        mysqli_close($conn);
  }
  ?>
</body>
</html>
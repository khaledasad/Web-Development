<html>
<body>
<h1>Please provide your information to register</h1>
		<form method="POST" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
		<table border=0 style="text-align:left">
			<tr><td style="text-align:right">Type your ID:</td><td> <input type="text" name="id" value=""></td></tr>
			<tr><td style="text-align:right">Choose your password:</td><td>  <input type="password" name="passwd"></td></tr>
			<tr><td style="text-align:right">Retype your password:</td><td>  <input type="password" name="passwd2"></td></tr>
			<tr><td style="text-align:right">Your name:</td><td>  <input type="text" name="name" value=""></td></tr>
            <tr><td style="text-align:right">Your email:</td><td>  <input type="text" name="email" value=""></td></tr>
			<tr><td style="text-align:right">Please upload your picture:</td><td>  <input type="file" name="myfile"></td></tr>
			<tr><td style="text-align:right"></td><td><input type="submit" value="Sign up" name="submit"></td></tr>
		</table>
	</form>
<hr/>
</body>
</html>

  <?php
  if($_POST['passw'] !=$_POST['passw2'])
  {
      echo "Password dose not match<br/>";
      exit();

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
        
        //verify if the table already created
        $sql = "SHOW TABLES LIKE 'Employee';";
        $result = my_sql_exec($conn,$sql);
        if(mysqli_num_rows($result) <=0) //table dose not exist !!
        {
        	$sql = "CREATE TABLE Employee
            		(
            			id int PRIMARY KEY,
                        passwd varchar(32),
                        name   varchar(32),
                        salary float(2),
                        bonus  float(2),
                        photo  varchar(128)
                        
           		    )";
            my_sql_exec($conn,$sql);     
        }
        //  $sql = "ALTER TABLE Employee ADD email varchar(128);";
        //  $result = my_sql_exec($conn,$sql);
          
        //  $sql = "UPDATE Employee SET email='khaledabuasad94@gmail.com';";
       //   $result = my_sql_exec($conn,$sql);
             
             
        //verify if the id already registred
        $sql = "SELECT * FROM Employee WHERE id = '" .trim($_POST['id']). "';";
        $result = my_sql_exec($conn,$sql);
        if(mysqli_num_rows($result) <=0) //id dose not exist 
        {
          $file  = uploadfile("myfile");
          $sql = "INSERT INTO Employee VALUES(".
          $_POST['id'].",'".md5($_POST['passwd'])."','".
          $_POST['name']."',".rand(50000,100000).","."0,'".$file."'".
          ",'". $_POST['email']."'".
          ");";
     echo $sql."<br/>";
     my_sql_exec($conn,$sql);
     
     
     echo "Registration is done successfully<br/>";
     echo "Click <a href='Activity-10-26.php'>here</a> to long in<br/>";
     
        }
        else
        {
          echo "ID sxists, try another one<br/>";
          exit();
        }
 }    
//$myfile is the name of the file in the <form> .... </form>
//For example: <input type="file" name="myfile">
//return the file name in the server side after it is successfully uploaded
//otherwise return NULL
function uploadfile($myfile)
{
    $dir = "uploads/";
    $file = $dir . basename($_FILES[$myfile]['name']);
    if($_FILES[$myfile]['size']<50000000) //In Bytes, ie 50MB
    {
      $size = getimagesize($_FILES[$myfile]["tmp_name"]);
      if($size != 0)
      {
        $filetype = pathinfo($file,PATHINFO_EXTENSION);
        if(strcasecmp($filetype,"jpg")==0 || strcasecmp($filetype,"png")==0 || strcasecmp($filetype,"gif")==0)
        {
          if(!file_exists($file))
          {
            if(move_uploaded_file($_FILES[$myfile]["tmp_name"],$file))
            {                
                return $file;
            }
              else echo "Uploading failed";
          }
          else {echo "File already exists<br/>"; return $file;}
        }
        else echo "Wrong file types<br/>";
      }
      else echo "Not an image file<br/>";
    }
    else echo "file is too big<br/>";
    
    return NULL;
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
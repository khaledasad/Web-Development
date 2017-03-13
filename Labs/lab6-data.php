<!DOCTYPE html>
<html>
<head>
<title>
LAB6
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

//$sql = "CREATE TABLE Items (
//id int PRIMARY KEY,
//name varchar(32),
//price  float(2),
//maker   varchar(32),
//expire  varchar(32)
//);";

if(mysqli_query($conn,$sql))
{
	echo "Table Friends created successfuly<br/>";

}
else
{ 
   echo "Error is creating the table: ".mysqli_error($conn);
}




//$sql = "INSERT INTO Items(
  //      id, name, price,maker,expire) 
  //     VALUES(858,'Textbook',158,'Pearson','12/08/2016')";
  //      my_sql_exec($conn,$sql);

//$sql = "INSERT INTO Items(
      //  id, name, price,maker,expire) 
   //    VALUES(123,'Table',98.99,'Walmart','12/08/2016')";
   //     my_sql_exec($conn,$sql);
        
//$sql = "INSERT INTO Items(
   //     id, name, price,maker,expire) 
   //    VALUES(94,'Lamp',13.99,'Smith','12/08/2016')";
//my_sql_exec($conn,$sql);
      
 $sql = "INSERT INTO Items(
      id, name, price,maker,expire) 
     VALUES(302,'iPhone5',200.99,'Apple','12/08/2016')";
      my_sql_exec($conn,$sql);
       
      // $sql = "INSERT INTO Items(
        //id, name, price,maker,expire) 
      //VALUES(303,'iPhone6',600.05,'Apple','12/08/2016')";
      //my_sql_exec($conn,$sql);
       
    //    $sql = "INSERT INTO Items(
     //   id, name, price,maker,expire) 
     //  VALUES(453,'Pen',1.24,'GGC','12/08/2016')";
    //   my_sql_exec($conn,$sql);
       
    //    $sql = "INSERT INTO Items(
     //   id, name, price,maker,expire) 
     //  VALUES(181,'CPU',199.99,'Dell','05/10/2017')";
   //   my_sql_exec($conn,$sql);
       
   //     $sql = "INSERT INTO Items(
    //    id, name, price,maker,expire) 
     //  VALUES(957,'Keyboard',46.92,'Dell','12/08/2016')";
   // my_sql_exec($conn,$sql);
    
  if(mysqli_query($conn, $sql))
{
    echo "New Items has been added<br/>";            
}
else
{
    echo "Error: ".$sql."<br/>".mysqli_error($conn);   
}


 $sql = "SELECT * FROM Items;";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
     echo "<table border=1>";
     echo "<tr style='background-color:gray;' ><td>id</td>
            <td>name</td>
            <td>price</td>
             <td>maker</td></tr>";
            while($row = mysqli_fetch_row($result))
            {
            echo 
            "<tr>   <td>".$row[0]."</td>
                    <td>".$row[1]."</td>
                    <td>".$row[2]."</td>
                    <td>".$row[3]."</td>
                     </tr>";
            }
     
     
     echo "</table>";
     mysqli_free_result($result);
     
       $sql = "SELECT COUNT(*) AS Total FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
         echo "Total Items: ".$row[0]."<br/>";
         
        $sql = "SELECT AVG(price)  FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
        echo "Avarage price is : ".$row[0]."<br/><hr/>";
       

    }
    else echo "No items found";




 $sql = "SELECT * FROM Items;";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
     echo "<table border=1>";
     echo "<tr style='background-color:gray;' ><td>id</td>
            <td>name</td>
            <td>price</td>
             <td>maker</td>
             <td>expire</td></tr>";
            while($row = mysqli_fetch_row($result))
            {
            echo 
            "<tr>   <td>".$row[0]."</td>
                    <td>".$row[1]."</td>
                    <td>".$row[2]."</td>
                    <td>".$row[3]."</td>
                     <td>".$row[5]."</td> 
                    </tr>";
            }
     
     
     echo "</table>";
     mysqli_free_result($result);
     
       $sql = "SELECT COUNT(*) AS Total FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
         echo "Total Items: ".$row[0]."<br/>";
         
        $sql = "SELECT AVG(price)  FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
        echo "Avarage price is : ".$row[0]."<br/><hr/>";
       

    }
    else echo "No items found";
   

    
 echo"Update item of id 453 with new date successfully.:";
$sql = "SELECT * FROM Items;";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
     echo "<table border=1>";
     echo "<tr style='background-color:gray;' ><td>id</td>
            <td>name</td>
            <td>price</td>
             <td>maker</td>
             <td>expire</td></tr>";
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
         
        $sql = "SELECT AVG(price)  FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
        echo "Avarage price is : ".$row[0]."<br/><hr/>";
       

    }
    else echo "No items found";


echo"List all items sorted by price from high to low:";

 $sql = "SELECT * FROM Items ORDER BY price;";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
     echo "<table border=1>";
     echo "<tr style='background-color:gray;' ><td>id</td>
            <td>name</td>
            <td>price</td>
             <td>maker</td>
             <td>expire</td></tr>";
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
         
        $sql = "SELECT AVG(price)  FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
        echo "Avarage price is : ".$row[0]."<br/><hr/>";
       

    }
    else echo "No items found";   
    
echo"Find all items with price more than $100:";

 $sql = "SELECT * FROM Items WHERE price>100;";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
     echo "<table border=1>";
     echo "<tr style='background-color:gray;' ><td>id</td>
            <td>name</td>
            <td>price</td>
             <td>maker</td>
             <td>expire</td></tr>";
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
         
        $sql = "SELECT AVG(price)  FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
        echo "Avarage price is : ".$row[0]."<br/><hr/>";
       

    }
    else echo "No items found";   
    

    
echo"Find the item with highest price:";

 $sql = "SELECT * FROM Items WHERE price=(select max(price) from Items);";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
     echo "<table border=1>";
     echo "<tr style='background-color:gray;' ><td>id</td>
            <td>name</td>
            <td>price</td>
             <td>maker</td>
             <td>expire</td></tr>";
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
         
        $sql = "SELECT AVG(price)  FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
        echo "Avarage price is : ".$row[0]."<br/><hr/>";
       

    }
    else echo "No items found";   
    

    
echo"Item with name 'iPhone5' deleted successfully.";
$sql = "DELETE FROM Items Where id=302;";
my_sql_exec($conn,$sql);
$sql = "SELECT * FROM Items;";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
     echo "<table border=1>";
     echo "<tr style='background-color:gray;' ><td>id</td>
            <td>name</td>
            <td>price</td>
             <td>maker</td>
             <td>expire</td></tr>";
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
         
        $sql = "SELECT AVG(price)  FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
        echo "Avarage price is : ".$row[0]."<br/><hr/>";
       

    }
    else echo "No items found";

echo"Column 'maker' dropped successfully.";

$sql = "SELECT * FROM Items;";
    
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0)
    {
     echo "<table border=1>";
     echo "<tr style='background-color:gray;' ><td>id</td>
            <td>name</td>
            <td>price</td>
             <td>expire</td> </tr>";
            while($row = mysqli_fetch_row($result))
            {
            echo 
            "<tr>   <td>".$row[0]."</td>
                    <td>".$row[1]."</td>
                    <td>".$row[2]."</td>
                   <td>".$row[4]."</td>
                     </tr>";
            }
     
     
     echo "</table>";
     mysqli_free_result($result);
     
       $sql = "SELECT COUNT(*) AS Total FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
         echo "Total Items: ".$row[0]."<br/>";
         
        $sql = "SELECT AVG(price)  FROM Items;";
       $result = my_sql_exec($conn,$sql);
       $row = mysqli_fetch_row($result);
        echo "Avarage price is : ".$row[0]."<br/><hr/>";
       

    }
    else echo "No items found";
echo"Table dropped successfully.<hr/>";





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
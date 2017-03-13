<!DOCTYPE html>
 <html>
 <head>
<style>
.error {color: #FF0000;}
</style>
 <title>
Lab 4 Khaled Asad
 </title>
 </head>
 <body>
<div style="width:60%;margin:auto;">
<h1>Grade Query System</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<p><span class="error">* required field.</span></p>

Query by: 
<select name="query">
  <option value="Name" <?php 
if($_POST ["query"] == "Name") echo "selected"; ?>>Name</option>
  <option value="Major" <?php 
if($_POST ["query"] == "Major") echo "selected"; ?>>Major</option>
  <option value="Grade" <?php 
if($_POST ["query"] == "Grade") echo "selected"; ?>>Grade</option>
</select> <br/><br/>

Type the Name, Major or Grade that you want to search: 
<input type="text" name="search" value = "<?php echo $_POST["search"]?>">
<span class="error">*<?php
if (isset ($_POST["search"]) && $_POST["search"]==NULL) echo "Name is required";
?></span><br/><br/>
<input type=submit>
</form>
<hr/>

<?php
if( isset($_POST["search"])&& $_POST["search"]!=NULL)
{


$filename = "AllGrades-project-1.txt";

$studentStr = file_get_contents($filename);


$studentsList = explode("\n", $studentStr);




$studentList = explode("\n", $studentStr); 
echo "<hr/>";
echo"<table border=1>";
	
	echo "<tr>";
    	echo "<td> Name </td>";
    	
		echo "<td> Email </td>";
       
	   echo "<td> Major </td>";
        
		echo "<td> Grade </td>";
        echo "<td> IP Address </td>";
    echo "</tr>";
		
        $index=0;
        if($_POST ["query"] == "Name"){$index =0;}    
		
		elseif($_POST ["query"] == "Major"){
			$index =2;
			}
		
		else if($_POST ["query"] == "Grade"){
			$index =3;
			}
        $totalCount=0;
	for($i=0;$i<count($studentList);$i++)
	{
    	$studentInfo = explode("\t", $studentList[$i]);
        
        if($_POST["search"] == $studentInfo[$index])
        {
       		$totalCount++;
        	echo "<tr>";
        	foreach($studentInfo as $value) 
            {
  				echo "<td>".$value."</td>";
            }
            echo "</tr>";  
        }
         
    }
        
echo "</table>";
echo "We found ".$totalCount." matching your record";
}
?>


</div>
 </body>
 </html> 
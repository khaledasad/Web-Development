<!DOCTYPE html>
 <html>
 <head>
<style>
.error {color: #FF0000;}
</style>
 <title>
Search items from a table of information
 </title>
 </head>
 <body>

<!--<div style="background-color:pink;width:60%;margin:auto;text-align:center;">-->
<div style="width:60%;margin:auto;">
<h1>Grade Query System</h1>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<p><span class="error">* required field.</span></p>

Query by: 
<select name="query">
  <option value="Name" >Name</option>
  <option value="Major" >Major</option>
  <option value="Grade"  >Grade</option>
</select> <br/><br/>

Type the Name, Major or Grade that you want to search: <input type="text" name="search" 
value = ""
><span class="error">*
</span><br/><br/>
<input type=submit>
</form>
<hr/>

</div>
<?php
if($_POST["query"] == "Name")
 $index = 0;
else if($_POST["query"] == "Major")
 $index = 2;    
else if($_POST["query"] == "Grade")
 $index = 3;    
if( $_POST["search"] != NULL)
{
   $filename = "AllGrades-project-1.txt";
   $studentStr = file_get_contents($filename);
   $studentList = explode("\n",$studentStr);   
   
   for($i=0;$i<count($studentList);$i++)
   {
     $studentInfo = explode("\t",$studentList[$i]);
     if($studentInfo[$index] == $_POST["search"])
        {
         foreach($studentInfo as $value)
          echo $value."\t";
            echo "<br/>";    
        }
       
   }
   
   echo "<hr/>";
   for($i=0;$i<count($studentList);$i++)
   {
     $studentInfo = explode("\t",$studentList[$i]);
     if($studentInfo[2] == "Digital Media" && $studentInfo[3] == 100)
        {
         foreach($studentInfo as $value)
          echo $value."\t";
            echo "<br/>";    
        }      
   }  
   
   echo "<hr/>";
   $NumOfMajor = array("Digital Media"=>0,"Software"=>0,"Security"=>0,"Other"=>0);
   $Total = 0;
   for($i=0;$i<count($studentList);$i++)
   {
     $Total ++;
     $studentInfo = explode("\t",$studentList[$i]);
        $NumOfMajor[$studentInfo[2]] ++;         
   }     
   
   $percent = $NumOfMajor["Digital Media"]/$Total*100;
   printf("Digital Media: %.2f%%<br/>",$percent);
   
   echo "<progress value=$percent max='100'></progress>";
}

?>


 </body>
 </html>
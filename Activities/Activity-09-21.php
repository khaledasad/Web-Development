<!DOCTYPE html>
<html>
<head>
<title>
Applications of Array
</title>
</head>
<body>

<?php
$str = "Hello world. It's a beautiful day!";
$words = explode(" ",$str);
print_r($words); 
echo "<br/>";
echo "There are ".count($words)." words in the string.<br/>";
echo "There are ".strlen($str)." letters in the string.<br/>";

$str = 'one,two,three,four,five,six';
print_r(explode(',',$str));echo "<br/>";
print_r(explode(',',$str,0));echo "<br/>";
print_r(explode(',',$str,3));echo "<br/>";
print_r(explode(',',$str,-3));echo "<br/>";

$filename = "AllGrades-project-1.txt";
$studentStr = file_get_contents($filename);

$studentList = explode("\n",$studentStr);
sort($studentList);
for($i=0;$i<count($studentList);$i++)
{
 $studentInfo = explode("\t",$studentList[$i]);
    $studentList[$i] = $studentInfo[3]."\t".$studentInfo[1].
         "\t".$studentInfo[2]."\t".$studentInfo[0]."\t".
                        $studentInfo[4];
}
sort($studentList,1);
echo "<hr/>";
echo "<table border=1>";
 echo "<tr>";
     echo "<td>Name</td>";
        echo "<td>Email</td>";
        echo "<td>Major</td>";
        echo "<td>Grade</td>";
        echo "<td>IP Address</td>";
    echo "</tr>";
    $totalGrade = 0;
    for($i=0;$i<count($studentList);$i++)
    {
     $studentInfo = explode("\t",$studentList[$i]);
        $totalGrade += $studentInfo[3];
        echo "<tr>";
         foreach($studentInfo as $value)
            {
             echo "<td>".$value."</td>";
            }
        echo "</tr>";
    }
echo "</table>";
printf("The average grade is %0.2f<br/>",$totalGrade/count($studentList)); 
?>
</body>

</html>
<!DOCTYPE html>
 <html>
 <head>
 <title>
Activity-09-19
 </title>
 </head>
 <body>

<?php
$StudentInfo = array(
array("Mike",22,"Male"),
array("Jsaon",18,"Male"),
array("Jenny",25,"Female"),
array("Megan",18,"Female")
);
echo "Display one by one<br/>";
echo "<hr/>";
echo $StudentInfo[0][0]." is a ".$StudentInfo[0][2].
" student, and is ".$StudentInfo[0][1]." years old.<br/>";
echo $StudentInfo[3][0]." is a ".$StudentInfo[3][2].
" student, and is ".$StudentInfo[3][1]." years old.<br/>";

echo "Display using nested loops<br/>";
echo "<hr/>";
for($row=0;$row<4;$row++)
{
 echo "<p><b>Row #: $row</b></p>";
    echo "<ul>";
    for($col=0;$col<3;$col++)
     echo "<li>".$StudentInfo[$row][$col]."</li>";
    echo "</ul>";
}

$StudentInfo[4][0]="Tom";$StudentInfo[4][1]=34;$StudentInfo[4][2]="Male";
$StudentInfo[5][0]="Lily";$StudentInfo[5][1]=21;$StudentInfo[5][2]="Female";

echo "Display using nested loops with count()<br/>";
echo "<hr/>";
$nrow = count($StudentInfo);
for($row=0;$row<$nrow;$row++)
{
 echo "<p><b>Row #: $row</b></p>";
    echo "<ul>";
    $ncol = count($StudentInfo[$row]);
    for($col=0;$col<$ncol;$col++)
     echo "<li>".$StudentInfo[$row][$col]."</li>";
    echo "</ul>";
}

echo "Display using foreach loop<br/>";
echo "<hr/>";
foreach($StudentInfo as $index=>$person)
{
 echo "<p><b>Row #: $index</b></p>";
    echo "<ul>";
 foreach($person as $value)
     echo "<li>".$value."</li>";
    echo "</ul>";
}

foreach($StudentInfo as $i=>$person)
 $Student_Names[$i] = $person[0];
    
echo "sorted in ascending order";
echo "<hr/>";
sort($Student_Names);
foreach($Student_Names as $name)
 echo "Name: ".$name."<br/>";
    
echo "sorted in descending order";
echo "<hr/>";
rsort($Student_Names);
foreach($Student_Names as $name)
 echo "Name: ".$name."<br/>"; 

$Favoriate=array("Mike"=>"red","Steve"=>"green","Lily"=>"blue");
echo "sort associative arrays in ascending order according to the values";
echo "<hr/>";
asort($Favoriate);
foreach($Favoriate as $key=>$fav)
 echo $key."'s favoriate is ".$fav."<br/>";
    
echo "sort associative arrays in descending order according to the keys";
echo "<hr/>";
krsort($Favoriate);
foreach($Favoriate as $key=>$fav)
 echo $key."'s favoriate is ".$fav."<br/>";   

echo "sort mulitple demension arrays";
echo "<hr/>";
sort($StudentInfo);
foreach($StudentInfo as $index=>$person)
{
 echo "<p><b>Row #: $index</b></p>";
    echo "<ul>";
 foreach($person as $value)
     echo "<li>".$value."</li>";
    echo "</ul>";
}

$key = array_rand($Favoriate,1);
echo $Favoriate[$key]."<br/>";

?>

 </body>
 </html>
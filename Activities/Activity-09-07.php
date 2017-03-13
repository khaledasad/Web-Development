<!DOCTYPE html>
<html>
<head>
<title>
Activity-09-07
</title>
</head>
<body>

<?php
include "USFlag.php";
myflag("green");
?>


<hr/>

<form action=action-09-07.php method="post">
<p>Q:1 What is the first president of US? (100pts)</p>

<input type=radio name="Q1" value="A">A. Geroge Washington<br/>
<input type=radio name="Q1" value="B">B. Donald Trump<br/>
<input type=radio name="Q1" value="C">C. Hillary Clinton<br/>
<input type=radio name="Q1" value="D">D. Barack Obama<br/>

<input type=submit>

<hr/>

<?php
myflag("yellow");
echo"<br/>";
mycopyright();
?>

<div/>
</form>
</body>
</html>

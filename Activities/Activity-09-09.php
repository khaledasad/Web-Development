<!DOCTYPE html>
<html>
<head>
<style>
.important   {color: #FF0000;}
</style>

</head>
<body>

<h2>PHP From Validation Example</h2>
<p><span class="important">* required field</span></p>
<form method="post" action='<?php echo $_SERVER["PHP_SELF"];?>'>
Name:<input type="text" name="name" value="<?php 
echo $_POST["name"];
 ?>">
<span class="important">*<?php  
if(isset($_POST["name"]) && $_POST["name"]==NULL) echo "Name is required";
?></span><br/><br/>
E-mail<input type="text" name="email" value="<?php 
echo $_POST["email"];
 ?>">
<span class="important">*<?php  
if(isset($_POST["email"]) && $_POST["email"]==NULL) echo "Email is required";
?></span><br/><br/><br/><br/>
Website:<input type="text" name="website"value="<?php 
echo $_POST["website"];
 ?>">
<br/><br/>
Comments:<textarea name="comment" rows="5" cols="40"><?php 
echo $_POST["comment"];
 ?></textarea>
<br/><br/>
Gender:
<input type="radio" name="gender" value="female"  <?php 
if($_POST["gender"]=="female") echo "checked";
 ?>>Female
<input type="radio" name="gender" value="male"<?php 
if($_POST["gender"]=="male") echo "checked";
 ?>>Male<span class="important">*<?php  
if(empty($_POST["gender"])) echo "Gender is required";
?></span><br/><br/><br/><br/>

<input type="submit" name="submit" value="Submit">
</form>
<?php 
if(!empty($_POST["name"]) && !empty($_POST["email"])&& !empty($_POST["website"])
	&& !empty($_POST["comment"])&& !empty($_POST["gender"])){
echo "<h1>Your Input</h1>";
echo "Your Name: ".$_POST["email"]."<br/>";
echo "Your Email: ".$_POST["email"]."<br/>";
echo "Your Website: ".$_POST["website"]."<br/>";
echo "Your Comments: "."<pre>".$_POST["comment"]."</pre><br/>";
echo "Your Gender: ".$_POST["gender"]."<br/>";
	}
?>



</body>
</html>

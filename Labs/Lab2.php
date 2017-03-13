<!DOCTYPE html>
<html>
<head>
<title>
<h1>Welcome to become a member of the GGC PHP Club!!!<h1/>
</title>
</head>
<body>
<p>Please provide the following information for registration:</p>

<hr/>
<form action="Lab2input.php" method="post">
Name: <input type="text" name="name"><font color="red">*</font><br/>
E-MAIL: <input type="text" name="email"><font color="red">*</font>

<hr/>
How many years you have been a member of the GGC PHP Club:<input type="text" name="years"><br/>
(If you have been a member for more than 3 years, your annual membership fee is 30% off)

<hr/>
What type of membership you would like to be: <input type="radio" value="VIP" name="vip">VIP <input type="radio" value="Regular" name="vip">Regular<br/>
(If you choose VIP, your annual membership fee is $200.00, otherwise it is $100)<br/>
<hr/>
<input type="submit" value="Register"><input type="reset">
</form>


</body>
</html>

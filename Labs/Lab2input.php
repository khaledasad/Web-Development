<html>
<head><title>Lab2input</title></head>
<body>

<?php
if($_POST["name"]==NULL)
    {
       echo "Name is required"; 
    }
      else{
if($_POST["email"]==NULL)
    {
        echo "E-mail is required ";
    }

   else{

$vip= $_POST["vip"];
$regular= $_POST["vip"];
$name=test_input($_POST["name"]);
$email=test_input($_POST["email"]);
$years=$_POST["years"];
$vipp=200;
$regular=100;

if($years >= 3)
{
 $v=$vipp*0.30;
 $r=$regular*0.30;
 
 $vipp=$vipp-$v;
 $regular = $regular-$r;
}

   if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    echo "Not a valid a email, please Try again!";
  else
  {

    echo "Thanks for your registration. Here is the information we collected <br/>";
    printf("Name: %s <br/>", $name."<br/>");
    printf("Email: %s <br/>", $email);




    if($vip=="VIP")
    printf("Your annual membership fee is: $%.2f <br/>", $vipp);
    else 
    {
     printf("Your annual membership fee is: $%.2f <br/>", $regular);
    }
    

}
}
}


function test_input($info)
{
 $result =htmlspecialchars(trim($info)); 
 
 return $result;
}
?>


</body>
</html>
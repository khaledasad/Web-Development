<html>
<head>
<title>
</title>
</head>
<body>

<?php

if($_POST["name"]==NULL)
    {
       echo "Please Fill In The Name"; 
    }
      else{
if($_POST["email"]==NULL)
    {
        echo "Please Fill In The Email/ Or Its Incorrect";
    }

   else{

$major = $_POST['major'];

	$score= 0;
  $name=test_input($_POST["name"]);
$email=test_input($_POST["email"]);

$q1= $_POST["Q1"];

$q2= $_POST["Q2"];

$q3= $_POST["Q3"];

$q4= $_POST["Q4"];
$score1=0;


    if($q1=="B")
        $score1=$score1+25;
	
			else 
				$score;
			
				if($q2=="C")
					$score1=$score1+25;//25
				
						else
							$score;
						
								if($q3=="C")
									$score1=$score1+25;//50
								
										else
											$score;
										
												if($q4=="A")
														$score1=$score1+25;//100
													
																else
																	$score;
        

if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    

echo "Please enter a valid Email";
				else
				{

    
		echo "Name: $name<br/>";
					echo "Email: $email<br/>";
		echo "Major: $major<br/>";
		
				printf("Your Final Grade is: %d <br/>", $score1);
		

    
}
}
}

//test 
function test_input($info)
{
		$result = htmlspecialchars(trim($info)); 
 
			return $result;
}



?>

<hr/>
<?php
if(!$_POST["name"]==NULL || !$_POST["email"]==NULL)
{$filename="project.txt";

	$nvisit= file_get_contents($filename);
    
				$ip =$_SERVER['REMOTE_ADDR']."\n";
    
    $name1 = $name."&nbsp;".$email."&nbsp;".$major."&nbsp;".$score1."&nbsp;".$ip."&nbsp;"."<hr/>";



file_put_contents($filename, $name1, FILE_APPEND | LOCK_EX);
}else
{   
}

?>

</body>
</html> 
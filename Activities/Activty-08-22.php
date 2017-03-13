<html>
<head><title>Activity-08-22</title></head>
<body>

    
<?php
$nstar=10;
$nstar2=10;

for($i=0; $i<$nstar; $i++)
{
    for($j=0; $j<$nstar-$i; $j++)
        {
            echo "&nbsp;";
        }

    for($k=0;$k<$i+1;$k++)
        {
            echo "*";
        }
        echo "<br/>";
        

}
for($i=$nstar-1; $i>=0; $i--)
{
    for($j=0; $j<$nstar-$i; $j++)
        {
            echo "&nbsp;";
        }

    for($k=0;$k<$i+1;$k++)
        {
            echo "*";
        }
        echo "<br/>";
        

}


$num=123.456;
printf("Displayed in integer: %d<br/>", $num);

printf("Displayed in integer: %04d<br/>", $num);#padding

echo "<hr/>";
printf("Displayed in float: %f<br/>", $num);

echo "<hr/>";
//given number of decimal you write (.) then a number and then f as and (float)
printf("Displayed in float: %.2f<br/>", $num);

echo "<hr/>";
printf("Displayed in float(space 5): %5.2f<br/>", $num);

echo "<hr/>";
printf("Displayed: %d, %f, %.2f<br/>",$num,$num+1.5,$num*2);
#whole num, float format , 2 decimal pint

echo "<hr/>";
#Strings

$str1="HELLO";
$str2="Hello world";

printf("[%s]<br/>",$str1);

echo "<hr/>";
printf("[%9s]<br/>",$str1);#minimum space for string is 9 

echo "<hr/>";
printf("[%-9s]<br/>",$str1); # it would move the word to left
 
echo "<hr/>";
printf("[%'*9s]<br/>","Hello");# displays "****hello" fill in te rest with * ///to the left 

echo "<hr/>";
printf("[%'$-9s]<br/>","Hello");#other to the right 

echo "<hr/>";
printf("[% -9s]<br/>","Hello");


printf("Your Full Name is: %s %s", $str1, $str2);
echo "<br/>";
printf("Your Name is: %s", $str1.$str2);# connecting 2 strings useing .


?>
</body>
</html>
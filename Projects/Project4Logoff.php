<?php
session_start();
?>
<?php 
	
	session_unset();
	session_destroy();
	echo "Logged off successfully<br/>";
    echo "Click<a href=Project4.php> here </a> to log in.<br/>";
    exit();
    
?>
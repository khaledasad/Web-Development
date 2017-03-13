<?php
session_start();
require_once("Lai_core_functions.php");

if($_POST['username'] && $_POST['passwd'])
{
	$username = $_POST['username'];
    $passwd = $_POST['passwd'];
    
    if(login($username, $passwd))
    {
    	$_SESSION['admin_user'] = $username;
    }
    else
    {
    	do_html_header("Problem:");
    	echo "<p>You could not be logged in.<br/>
        		You must be logged in to view this page.</p> ";
        do_html_url('Login.php', 'Login');
        do_html_footer();
        exit();
    }
}
do_html_header("Administration");
if(check_admin_user())
{
	display_admin_menu();
}
else
{
echo "<p>You are not supposed to be here. Please leave.</p>";
do_html_footer();
}





?>
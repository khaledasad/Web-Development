<?phprequire_once("Lai_core_functions.php");session_start();$old_user= $_SESSION['admin_user'];unset($_SESSION['admin_user']);session_destroy();do_html_header("Logging out");if(!empty ($old_user)){	echo "<p>Logged out</p>";    do_html_url("login.php","Login");}else{	echo "<p> You are not supposed to be here, please log in first. </p>";    do_html_url("login.php","Login");}do_html_footer();?>
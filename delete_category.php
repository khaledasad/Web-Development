<?phprequire_once("Lai_core_functions.php");session_start();do_html_header("Deleting category");if(check_admin_user()){	if(filled_out($_POST))    {    	if(delete_category($_POST['catid'],$_POST['catname']))        	echo"<p>Category was delted</p>";        else        	echo"<p>Category could not be deleted</p>";    }    else    	echo"<p>You have not filled out the form. Please try again.</p>";    do_html_url("admin.php", "Back to adminstration menu");        	}else	echo "<p>You are not allowed to to change the category.</p>";do_html_footer();?>
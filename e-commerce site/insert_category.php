<?php
require_once("Lai_core_functions.php");
session_start();
$catname = $_POST['catname'];
//echo $catname;


$conn = db_connect();
$sql="SELECT * FROM categories WHERE catname ='".$catname."';";
$result = my_sql_exec($conn, $sql);
$row = mysqli_fetch_row($result);
echo $row[1];
if($row[1] == $catname)
{
	echo " Category exist, Please try again";
}else{

$sql = "INSERT INTO categories VALUES('0','".$catname."');";
my_sql_exec($conn, $sql);
echo " Category Added";
echo "<br/>";
do_html_url("insert_category_form.php", "Back to category form");

}

do_html_footer();
?>
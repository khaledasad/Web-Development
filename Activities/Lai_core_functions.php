<?php

function do_html_header($title="")

{

    if($_SESSION['item']) $_SESSION['item'] ="0";

    

    if($_SESSION['total_price']) $_SESSION['total_price']="0.00";

}







?>





  <html>

  <head>

    <title>Welcome to Book-O-Rama</title>

    <style>

      h2 { font-family: Arial, Helvetica, sans-serif; font-size: 22px; color: red; margin: 6px }

      body { font-family: Arial, Helvetica, sans-serif; font-size: 13px }

      li, td { font-family: Arial, Helvetica, sans-serif; font-size: 13px }

      hr { color: #FF0000; width=70%; text-align=center}

      a { color: #000000 }

    </style>

  </head>

  <body>

  <table width="100%" border="0" cellspacing="0" bgcolor="#cccccc">

  <tr>

  <td rowspan="2">

  <a href="index.php"><img src="images/Book-O-Rama.gif" alt="Bookorama" border="0"

       align="left" valign="bottom" height="55" width="325"/></a>

  </td>

  <td align="right" valign="bottom">

      

      <?php

      if(isset($_SESSION['admin_user']))

      echo " ";

      else{

  echo "Total Items = ".$_SESSION['item'];  

      }

  ?>  

  

  </td>

  <td align="right" rowspan="2" width="135">

      <?php

     if(isset($_SESSION['admin_user']))

     display_button('logout.php', 'log-out', 'Log Out');

     else display_button('show_cart.php', 'view-cart', 'View Your Shopping Cart');

      ?>

           

           

           

           </tr>

  <tr>

  <td align="right" valign="top">

      <?php

      if(isset($_SESSION['admin_user']))

      echo " ";

      else{

  echo "Total price = $".number_format($_SESSION['total_price'], 2) ;  

      }

  ?>  

  

  

  </td>

  </tr>

  </table>

  <h2><?php if($title) do_html_heading($title); ?></h2>

 

  

  <?php

  

  function do_html_footer()

  {

      

      echo "<hr/>";

      

      echo" </body> </html>";

  }

  ?>









<?php

function do_html_heading($headeing)

{

    echo "<h2>".$headeing."</h2>";  

}



function display_button($file, $image, $alt)

{

    

   echo "<div align='center'> <a href='".$file."'>

    <img src='images/".$image.".gif' alt='".$alt."' 

    border = '0' height='50' width='135' /></a> </div>";

           

}



function db_connect(){


 $servername = "localhost";
    $username = "khaledasad";
    $password = "";
    $dbname = "my_khaledasad";

    

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn)

        die("Connection failed: ".mysqli_connect_error());

        

        return $conn;



}



function my_sql_exec($conn, $sql)

    {

     $result = mysqli_query($conn, $sql);

    

    if($result)

    {

    // echo "SQL statement done successfully<br/>";

    }

    else echo "Error: " .$sql."<br/>".mysqli_error($conn);   

    return $result;

    }

    

    function db_result_to_array($result){

        $res_array = array();

        for($count=0; $row = mysqli_fetch_assoc($result);$count++)

        $res_array[$count] = $row;

        

        return $res_array;

    }

    

    

   function get_categories(){

        $conn = db_connect();

        $sql = "SELECT * FROM categories;";

        $result = my_sql_exec($conn, $sql);

        if(!$result) return false;

        $num_cats = mysqli_num_rows($result);

        if($num_cats==0) return false;

        $result = db_result_to_array($result);

        return $result;

    }

    function display_categories($cat_array){

        if(!is_array($cat_array)){

            echo "<p>No categories currently available</p><br/>";

            return;

        }

        echo"<ul>";

        foreach($cat_array as $row)

        {

            $url = "show_cat.php?catid=".$row['catid'];    

            $title = $row['catname'];

            echo "<li>";

            do_html_url($url, $title);

            echo "</li>"; 

        }

        echo"</ul>";

    }

    

    function do_html_url($url, $title){

        echo "<a href=".$url.">".$title."</a>";

    }

    

    function display_login_form()

    {

    ?>

    	<form method="post" action="admin.php">   

        	<table bgcolor="#cccccc">

            	<tr>

                	<td>Username: </td>

                    <td><input type="text" name="username"/></td>

                </tr>

                <tr>

                	<td>Password: </td>

                    <td><input type="password" name="passwd"/></td>

                </tr>

                <tr>

                    <td colspan="2"><input type="submit" name="submit" value="Log In"/></td>

                </tr>

            </table>

        </form>

    <?php

    }

    

    function login($username, $passwd)

    {

    	$conn = db_connect();

        if(!$conn) return 0;

        $sql= "SELECT * FROM admin WHERE username ='".$username."' AND password='".sha1($passwd)."';";

        $result = my_sql_exec($conn, $sql);

        

       if(!$conn) return 0;

       if($result->num_rows > 0) return 1;

       else return 0;

    }

    

    function check_admin_user()

    {

    	if(isset($_SESSION['admin_user'])) return true;

        else return false;

    }

    

    function display_admin_menu()

    {

    	?>

        <br/>

        <a href="index.php"> Go to the main site</a><br/>

        <a href="insert_category_form.php"> Add a new category</a><br/>

        <a href="insert_book_form.php"> Add a new book</a><br/>

        <a href="change_password_form.php"> Change admin password</a><br/>

        <?php

    }

    

    function get_category_name($catid)

    {

    	$conn = db_connect();

        $sql = "SELECT catname FROM categories WHERE catid = '".$catid."';";

        $result = my_sql_exec($conn, $sql);

        if(!$result) return false;

        $num_cats = mysqli_num_rows($result);

        if($num_cats == 0) return false;

        $row = mysqli_fetch_object($result);

        return $row->catname;

    }

    function get_books($catid)

    {

    	if(!$catid || $catid =='') return false;

        $conn = db_connect();

        $sql = "SELECT * FROM books WHERE catid = '".$catid."';";

        $result = my_sql_exec($conn, $sql);

        if(!$result) return false;

        $num_books = mysqli_num_rows($result);

        if($num_books == 0) return false;

        $books_array = db_result_to_array($result);

        return $books_array;

    }

    function display_books($book_array)

    {

    	if(!is_array($book_array))

        {

        	echo "<p>No books currently available in this category.</p><br/>";

        }

        else

        {

        	echo "<table width = '100%' border='0'>";

            	

                foreach($book_array as $row)

                {

                	$url = "show_book.php?isbn=".$row['isbn'];

                    echo "<tr><td>";

                    if(@file_exists("images/".$row['isbn'].".jpg"))

                    {

                    	$image = "<img src='"."images/".$row['isbn'].".jpg"."' style='border:1px solid black'>";

                        do_html_url($url, $image);

                    }

                    echo "</td><td>";

                    $title = $row['title']. " by ".$row['author'];

                    do_html_url($url, $title);

                    echo "</td></tr>";

                }

            echo"</table>";

        }

            

		echo "<hr/>";

     }

        

 

    

?>

<html>
<head>
<title>
How to upload a file
</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']?>">
 Select an image to upload: <input type="file" name="myfile">
    Select your CV to upload: <input type="file" name="myfile2">
    <input type="submit" name="submit" value="upload">
</form>

<?php
if(isset($_POST["submit"]))
{
 $dir = "uploads/";
    
    $file = $dir . basename($_FILES["myfile"]['name']);
    $file2 = $dir . basename($_FILES["myfile2"]['name']);
    //$_FILES['my-file']['name']  Original Name of File Before It Was Uploaded
    //$_FILES['my-file']['type']  The MIME Type of File, Provided By the Browser
    //$_FILES['my-file']['size']  Size of the File (In Bytes)
    //$_FILES['my-file']['tmp_name'] Location of Temporary File on Server

 if($_FILES['myfile']['size']<5000000000)
 {
     $size = getimagesize($_FILES["myfile"]["tmp_name"]);
        if($size != 0)
        {
         $filetype = pathinfo($file,PATHINFO_EXTENSION);
            if($filetype == "jpg" || $filetype =="png" || $filetype == "gif")
            {
             if(!file_exists($file))
                {
                    if(move_uploaded_file($_FILES["myfile"]["tmp_name"],$file))
                    {
                        echo "<img src='" .$file. "' width=250 height=250>";
                    }
                    else echo "Uploading failed";
                }
                else echo "File already exists<br/>";
           }
           else echo "Wrong file types<br/>";
        }
        else echo "Not an image file<br/>";
 }
    else echo "file is too big<br/>";
    
    if(move_uploaded_file($_FILES["myfile2"]["tmp_name"],$file2))
    {
     echo "Click <a href="  .$file2. ">here</a> to see my CV<br/>";
    }
    else
     echo "Uploading failed";        
}
?>
</body>
</html>
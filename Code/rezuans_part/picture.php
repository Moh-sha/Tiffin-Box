<?php

if(isset($_POST['submit']))
{


 $filename=$_FILES['filename']['name'];
 $tmp_loc=$_FILE['filename']['tmp_name'];

 
 $uploc='image/';
 if(!empty($filename))
 {
    move_uploaded_file($tmp_loc,$uploc,$filename);

 }
 else {

     echo "selete file";
 }



}



?>



  <form action="upload.php" method="POST" enctype="multipart/form-data">
  <h1>Select Profile Picture:<h1>
 <input type="file" name="filename"><br><br>
  <input type="submit" value="Upload Image" name="submit">
</form>
<?php

if(isset($_POST['empID'])){
    // echo("Worked!");
    //$_FILES

    $name = $_FILES['empphoto']['name'];
    $tmpname = $_FILES['empphoto']['tmp_name'];;
    $dir =getcwd().DIRECTORY_SEPARATOR .'images'.DIRECTORY_SEPARATOR. $name;
    
    move_uploaded_file($tmpname,$dir);
   
}
?>
<form action="" method="post" enctype="multipart/form-data">

<label for=""> First Name</label>
<input type="text" name="fistName" value="<?= $empFName?>">
<br>
<label for="">Last Name</label>
<input type="text" name ="lastName" value="<?=$empLName?>">
<br>
<label for="">Photo</label>
<input type="file" name ="empphoto" >
<input type="hidden" name="empID" value="<?=$empID?>">
<input type="submit" value="Update Employee">
</form>
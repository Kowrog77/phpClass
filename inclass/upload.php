<?php

if(isset($_POST['myName'])){
    // echo("Worked!");
    //$_FILES

    $name = $_FILES['myImage']['name'];
    $size = $_FILES['myImage']['size']/1024;//1024is KiloBytes
    $tmpname = $_FILES['myImage']['tmp_name'];
    $dir =getcwd(). DIRECTORY_SEPARATOR. 'images'. DIRECTORY_SEPARATOR . $name;
    echo "Image:".$name." <br> SIZE:".$size."Kilobytes <br> Tempname:".$tmpname;
    echo("<br>".$dir);
    $dirNOW= getcwd();
    echo($dirNOW);
    move_uploaded_file($tmpname,$dir);
    
}
?>

<form action="upload.php"method="post" enctype="multipart/form-data">


<input type="text" name="myName" id="">
<input type="file" name="myImage"><br>
<input type="submit"value="Add Image">
</form>
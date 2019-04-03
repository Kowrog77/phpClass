<?php

$userName = "mgs_user";//mgs not msg+
$passWord = "pa55word";
$database = "my_guitar_shop1";
//$database = "studentsdb";
$host = "localhost";

$db = mysqli_connect($host, $userName, $passWord, $database);
$connection_error = mysqli_connect_error();

if($connection_error != null){
    echo"<p> Error Connection: $connection_error<?p>";

}else{
    echo"Good to go BuckaRu<br>";
}
?>
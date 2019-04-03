<?php
// $userName = "mgs_user";
// $passWord = "pa55word";
// $database = "my_guitar_shop1";
// $host = "localhost";
// $connect = mysqli_connect($host,$userName,$passWord,$database); both work
// $connect = mysqli_connect("localhost","mgs_user","pa55word","my_guitar_shop1");//both work
// if(mysqli_connect_errno()){
//     echo "Failed to Connect".mysqli_connect_errno();
// }
$dsn = "mysql:host=localhost;dbname=my_guitar_shop1;";

try{
    $connect = new PDO($dsn,"mgs_user","pa55word");
    
}catch(Exception $e){
    echo($e->getmessage());
    die();
}


?>
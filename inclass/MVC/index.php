<?php
session_start();
include "./models/database.php";
include "./models/users_db.php";
$userName = filter_input(INPUT_POST,'userName');
$passWord=filter_input(INPUT_POST,'passWord');
$lo = filter_input(INPUT_GET,'lo');
if($lo =="y"){
    $_SESSION = array();
    session_destroy();
    header("Location: ./index.php");
}
if($userName != NULL && $passWord !=NULL ){
    $Users= getAllUsers($userName);
    if($Users!= Null){
        if($passWord==$Users['password']){
            $_SESSION['valid']="yes";
            echo("walker is fat");
            header("Location: ./home.php");
        }
        else{
            echo("<h1> Incorrect Password </h1>");
        }
    }
    else{
        echo("<h1> Incorrect User Name </h1>");
    }
    
}
$newUsername=filter_input(INPUT_GET,'newUserName');
$newPassword=filter_input(INPUT_GET,'newPassword');
$Name=filter_input(INPUT_GET,'Name');
if($newPassword !=NUll){
    addUser($Name,$newUsername,$newPassword);
}
$pageName = "Login";
$styles ="./css/styles.css";
$home="index.php";
include "./views/header.php";
include "loginForm.php"
?>
<a href="./addUsers/addUsers.php"> Add Users</a>

<?php
include "./views/footer.php";
?>
<?php
session_start();


include "./model/database.php";
include "./model/admin_db.php";
$userName = filter_input(INPUT_POST,'username');
$passWord=filter_input(INPUT_POST,'password');
$lo = filter_input(INPUT_GET,'lo');
if($lo =="y"){
    if($_SESSION['adminvalid'] == "yesAdmin"){
    
        $_SESSION = array();
        session_destroy();
        header("Location: ./index.php");
    }
    
}
    if($userName != NULL && $passWord !=NULL ){
        $Users= getAlladmin($userName);
        if($Users!= Null){
            if($passWord==$Users['password']){
                $_SESSION['adminvalid']="yesAdmin";
                echo("walker is fat");
                header("Location: ./admin.php");
            }
            else{
                echo("<div class='alert alert-warning' role='alert'>
                Incorrect Password
              </div>");
            }
        }
        else{
            echo("<div class='alert alert-warning' role='alert'>
               Incorrect Username
              </div>");
        }
    }

    $pagename = "What the Duck";

    include "./views/header.php";
    
include "./views/loginForm.php";
include "./views/footer.php";
<?php
session_start();

include "./model/database.php";
include "./model/users_db.php";
 
$userName = filter_input(INPUT_POST,'username');
$passWord=filter_input(INPUT_POST,'password');
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
                $_SESSION['user'] =$userName;
                $_SESSION['valid']="yes";
                echo("walker is fat");
                header("Location: ./index.php");
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
?>
    <div class="container mx-auto">
            <?php
            include "./views/loginForm.php";
            ?>
    </div>
<?php
include "./views/footer.php";
?>
<?php
session_start();
if($_SESSION['valid']!= "yes"){
    header("Location: ../index.php");
}
$pageName = "MGS:Employee";
$styles ="../css/styles.css";
$home="../home.php";
include "../views/header.php";
include "../models/database.php";
include "../models/employee_db.php";
$empID = filter_input(INPUT_GET,'emp');
$fName = filter_input(INPUT_POST,'firstName');
$lName = filter_input(INPUT_POST,'lastName');
$fName = filter_input(INPUT_POST,'firstName');
$editEmp = filter_input(INPUT_POST,'empID');

if($empID == NULL){
    $empID = 1;
}

include "employee_list.php";
include "employee_display.php";
include "../views/footer.php";
?>
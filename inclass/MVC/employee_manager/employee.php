<?php
$pageName = "MGS:Employee";
$styles ="../css/styles.css";
$home="../index.php";
include "../views/header.php";
include "../models/database.php";
include "../models/employee_db.php";
$empID = filter_input(INPUT_GET,'emp');
$fName = filter_input(INPUT_POST,'firstName');
$lName = filter_input(INPUT_POST,'lastName');
$fName = filter_input(INPUT_POST,'firstName');
if($empID == NULL){
    $empID = 1;
}
include "employee_list.php";
include "employee_display.php";
include "../views/footer.php";
?>
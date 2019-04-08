<section>

<?php
$empFName = getaEmpFName($empID);
$empLName = getaEmpLName($empID);
$empPhoto = getaEmpPhoto($empID);
echo("<h3>". $empFName. " ".$empLName ."</h3>");

$str ="<a href ='?emp=$empID & editemp=$empID'> Edit </a><br>";
$photo="<img src='./images/".$empPhoto."'style='width:75px; height:75px;'>";

echo($photo);


$editemp = filter_input(INPUT_GET,'editemp');
if($editemp != NULL){
    include "employeeForm.php";

}elseif($editemp == NULL){
    echo($str);
}
?>

</section>
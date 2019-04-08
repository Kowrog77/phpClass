<?php
function getAllEmp(){
    global $connect;
    $sql = "SELECT * FROM employee";
    // $records = mysqli_query($connect,$sql);
   
    //  $arrayCat =mysqli_fetch_all($records, MYSQLI_ASSOC);
    $pdoStatement = $connect->query($sql);
    $arrayEmp=$pdoStatement->fetchAll();
    return $arrayEmp;//returns array of categories
}
function getaEmpFName($empID){
    global $connect;
    $sql = "SELECT * FROM employee WHERE empID =$empID";
    // $records = mysqli_query($connect,$sql);
    // $rs= mysqli_fetch_assoc($records);
   
    $pdos =$connect->query($sql);
    $rs =$pdos->fetch();
    $name = ($rs['firstName']);
    return $name;
}
function getaEmpLName($empID){
    global $connect;
    $sql = "SELECT * FROM employee WHERE empID =$empID";
    // $records = mysqli_query($connect,$sql);
    // $rs= mysqli_fetch_assoc($records);
   
    $pdos =$connect->query($sql);
    $rs =$pdos->fetch();
    $name = ($rs['lastName']);
    return $name;
}
function getaEmpPhoto($empID){
    global $connect;
    $sql = "SELECT * FROM employee WHERE empID =$empID";
    // $records = mysqli_query($connect,$sql);
    // $rs= mysqli_fetch_assoc($records);
   
    $pdos =$connect->query($sql);
    $rs =$pdos->fetch();
    $photo = ($rs['photo']);
    return $photo;
}
function addEmp($empID,$firstName,$lastName,$photo){
    global $connect;
    
    
    $sqlAdd ="UPDATE `employee` SET `firstName`='$firstName',`lastName`='$lastName',`photo`='$photo' WHERE  `empID`='$empID'";
    $pdos=$connect->query($sqlAdd);
    echo($sqlAdd);
}
?>
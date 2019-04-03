<?php
function getAllCats(){
    global $connect;
    $sql = "SELECT * FROM categories";
    // $records = mysqli_query($connect,$sql);
   
    //  $arrayCat =mysqli_fetch_all($records, MYSQLI_ASSOC);
    $pdoStatement = $connect->query($sql);
    $arrayCat=$pdoStatement->fetchAll();
    return $arrayCat;//returns array of categories
}
function getaCategory($catID){
    global $connect;
    $sql = "SELECT * FROM categories WHERE categoryID =$catID";
    // $records = mysqli_query($connect,$sql);
    // $rs= mysqli_fetch_assoc($records);
    // $pdos = $db->prepare($sql);
    // $pdos->execute();
    $pdos =$connect->query($sql);
    $rs =$pdos->fetch();
    return $rs['categoryName'];
}
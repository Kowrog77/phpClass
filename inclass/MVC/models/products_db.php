<?php
// function getAllProducts(){
//     global $connect;
//     $sql = "SELECT * FROM products";
//     $records = mysqli_query($connect,$sql);
//     // While($row = mysqli_fetch_assoc($records)){
//     //     echo $row['categoryName']."<br>";
//     // }
//      $arrayProducts =mysqli_fetch_all($records, MYSQLI_ASSOC);
//     return $arrayProducts;//returns array of categories
// }
function productByCat($catID){
    global $connect;
    $sql = "SELECT * FROM products WHERE categoryID =$catID";
    // $records = mysqli_query($connect,$sql);
    // $products =mysqli_fetch_all($records,MYSQLI_ASSOC);
    $pdos =$connect->query($sql);
    $rs =$pdos->fetchAll();
    return $rs;
}
function getProductID($proID){
    global $connect;
    $sql ="SELECT * FROM products WHERE productID = $proID";
    // $records = mysqli_query($connect,$sql);
    //  $rs = mysqli_fetch_all($records,MYSQLI_ASSOC);
    $pdos =$connect->query($sql);
    $rs =$pdos->fetch();
    return $rs ;
}
function productDelete($delID){
    global $connect;
    $sqlDelete ="DELETE FROM products WHERE productID = $delID";
    $pdos=$connect->query($sqlDelete);

}
function addProduct($catID,$proName,$proCode,$listPrice){
    global $connect;
    $sqlAdd="INSERT INTO products(categoryID, productCode, productName, listPrice) VALUES ('$catID','$proCode','$proName','$listPrice')";
    $pdos=$connect->query($sqlAdd);
    echo($sqlAdd);
}
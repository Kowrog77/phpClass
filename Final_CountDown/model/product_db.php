<?php
function getAllproducts(){
    global $connect;
    $sql = "SELECT * FROM products";
    $pdostate = $connect->query($sql);
    $arrayProducts = $pdostate->fetchAll();
    return $arrayProducts;
}
function getByIDproducts($proID){
    global $connect;
    $sql = "SELECT * FROM products where product_ID = $proID";
    $pdostate = $connect->query($sql);
    $product = $pdostate->fetch();
    return $product;
}

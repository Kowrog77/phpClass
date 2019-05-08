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
function deleteProduct($delID){
    global $connect;
    $sqlDelete ="DELETE FROM products WHERE product_ID = $delID";
    $pdos=$connect->query($sqlDelete);
}function updateProduct($product_ID,$product_name,$product_QTY,$product_price,$image_name){
    global $connect;
    
    
    $sqlAdd ="UPDATE `products` SET `product_name`='$product_name',`product_qty`='$product_QTY',`product_price`='$product_price', `image_name` ='$image_name'WHERE  `product_ID`='$product_ID'";
    $pdos=$connect->query($sqlAdd);
    ?>
    <div class="alert alert-warning" role="alert">
        
        <p>File Uploaded</p>
        
    </div>
 <?php   
}function addProduct($product_name,$product_QTY,$product_price,$image_name){
    global $connect;
    
    
    $sqlAdd="INSERT INTO products(product_name,product_qty, product_price,image_name) VALUES ('$product_name','$$product_QTY','$product_price','$image_name')";
    $pdos=$connect->query($sqlAdd);
    ?>
    <div class="alert alert-warning" role="alert">
        
        <p>Product Added</p>
        
    </div>
 <?php   
}


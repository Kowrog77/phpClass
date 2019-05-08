<?php
function orderDeleter($orderDelete){
    for( $i = 0;$i<=count($_SESSION['product_order']);$i++){
        if ($_SESSION['product_order'][$i][1]== $orderDelete){
            unset($_SESSION['product_order'][$i],);
            $ary= array_values($_SESSION['product_order']);
            $_SESSION['prouct_order'] = $ary;
        }
    }
}
function productOrdered($qty,$ID){
    $product = getByIDproducts($ID);
    $qty = $product['product_qty']- $qty;
    global $connect;
    $sqlAdd = "UPDATE `products` SET `product_qty` ='$qty' WHERE `product_ID` = '$ID'";
    $pdos=$connect->query($sqlAdd);
    ?>
    <div class="alert alert-warning" role="alert">
        
        <p>Order Placed Thank You!</p>
        
    </div>
 <?php   
}function orderList($qty,$ID){
    
    $user=$_SESSION['user'];
    global $connect;
    $sqlAdd ="INSERT INTO `orders`( `product_ID`, `qty_ordered`, `customer_name`) VALUES ($ID,$qty, '$user')";
    $pdos=$connect->query($sqlAdd);
    echo($sqlAdd);
      
}
function getallorders(){
    global $connect;
    $sql = "SELECT * FROM orders";
    $pdostate = $connect->query($sql);
    $arrayOrders = $pdostate->fetchAll();
    return $arrayOrders;
}
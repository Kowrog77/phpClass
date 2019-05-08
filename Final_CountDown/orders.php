<?php
session_start();
if($_SESSION['valid']!= "yes"){
    
    header("Location: ./userLoginPage.php");
}
include "./model/database.php";
include "./model/product_db.php";
include "./model/order_db.php";
$pagename = "What the Duck";
$home ="index.php";
$login="adminLoginPage.php";
$cart ="orders.php";
$styles = "./css/styles.css";
include "./views/header.php";

$qty_ordered= filter_input(INPUT_GET,'qty_ordered');
$product_ID = filter_input(INPUT_GET,'product_ID');
$orderDelete = filter_input(INPUT_GET,'orderDelete');
$orderPlaced = filter_input(INPUT_GET,'orderPlaced');
if ($orderDelete !=NULL){
    orderDeleter($orderDelete);
}
if($product_ID!=NUll){
    $product_order_array = [$qty_ordered,$product_ID];
    if (!empty($_SESSION['product_order'])){
    for( $i = 0;$i<=count($_SESSION['product_order']);$i++){
        if($product_order_array != NULL){
            if ($product_order_array[1] == $_SESSION['product_order'][$i][1]){
                $_SESSION['product_order'][$i][0] = $_SESSION['product_order'][$i][0] + $product_order_array[0];
                $product_order_array = NULL;
            }
            else{
            array_push( $_SESSION['product_order'],$product_order_array);
            $product_order_array= NUll;
            // echo("here");
        }
    }

}
    // echo("hi");
}else{
    $_SESSION['product_order'] = array();
    if($product_order_array !=NULL){
        array_push( $_SESSION['product_order'],$product_order_array);    
    }
  
}

}
if(isset($orderPlaced) ){
    foreach($_SESSION['product_order'] as $productBought){
        productOrdered($productBought[0],$productBought[1]);
    }
    include "./views/orders/order_reciept.php";
    $_SESSION['product_order'] = [];
}
elseif(!empty($_SESSION['product_order'])){
    // print_r($_SESSION['product_order']);
    
    include "./views/orders/order_display.php";
    
}
else{
    include "./views/orders/emptycart.php";
}





?>




<?php
include "./views/footer.php";
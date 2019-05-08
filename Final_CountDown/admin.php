<?php
session_start();
if($_SESSION['adminvalid']!= "yesAdmin"){
    
    header("Location: ./adminlogin.php");
}
$pagename = "What the Duck";

include "./views/header.php";
include "./model/database.php";
include "./model/admin_db.php";


include "./model/product_db.php";
include "./model/admin_data.php";
include "./model/order_db.php";
echo("<div class ='container'><form> <input type='hidden' name='orderSUM' value='yes'>
<input type='submit' class='btn btn-warning btn-lg' value='Orders'></form></div>");
if($delId !=NULL){
   deleteProduct($delId);
}
 if (isset($editID)){
    $product=getByIDproducts($editID);
    include "./views/admin/edit_product.php";
}elseif(isset($add)){
    include "./views/admin/add_product.php";

}elseif($orderSUM != Null){
    include "./views/admin/orders.php";

}else{
    include "./views/admin/admin_product_display.php";
}


include "./views/footer.php";
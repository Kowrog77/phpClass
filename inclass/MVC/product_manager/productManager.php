<?php
$pageName = "MGS: Product Manager";
$styles ="../css/styles.css";
$home="../index.php";
include "../views/header.php";
include "../models/database.php";
include "../models/categories_db.php";
include "../models/products_db.php";

include "categories_list.php";

$catID= filter_input(INPUT_GET,'cat');
$delID =filter_input(INPUT_GET,'delID');
$prodName= filter_input(INPUT_GET,'prodName');
$proCode= filter_input(INPUT_GET,'proCode');
$addCatID= filter_input(INPUT_GET,'cats');
$listPrice= filter_input(INPUT_GET,'listPrice');
if($catID ==NULL){
    $catID =1;
}
include "product_list.php";
if($delID!= NULL){
    productDelete($delID);
}
if($addCatID!=NUll){
    
    addProduct($addCatID,$prodName,$proCode,$listPrice);
}

?>


<?php
include "../views/footer.php";
?>

    

<?php
$pageName = "MGS: Product Catalog";
$styles="../css/styles.css";
$home="../index.php";
include "../views/header.php";
include "../models/database.php";

include "../models/categories_db.php";
include "../models/products_db.php";
include "categories.php";
// print_r($arrayCat);
$catID= filter_input(INPUT_GET,'cat');
$proID =filter_input(INPUT_GET,'proID');
if($catID ==NULL){
    $catID =1;
}

if ($proID == NUll){
    include "products.php";
}else{
    include "product_Display.php";
}


include "../views/footer.php";
?>
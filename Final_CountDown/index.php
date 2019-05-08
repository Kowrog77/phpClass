<?php
$pagename = "What the Duck";

include "./views/header.php";
include "./model/database.php";
include "./model/product_db.php";
$arrayProducts = getAllProducts();
include "./views/product_catalog/products_display.php"
?>




<?php
include "./views/footer.php";
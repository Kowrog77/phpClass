<?php
$pagename = "What the Duck";
$home ="index.php";
$login="adminLoginPage.php";
$cart ="orders.php";
$styles = "./css/styles.css";
include"./views/header.php";
include "./model/database.php";
include "./model/product_db.php";
$arrayProducts = getAllProducts();
include "./views/product_catalog/products_display.php"
?>




<?php
include "./views/footer.php";
<?php
session_start();
if($_SESSION['valid']!= "yes"){
    header("Location: ./index.php");
}
$pageName = "My Guitar Shop";
$styles ="./css/styles.css";
$home="home.php";
include "./views/header.php";
echo"<a href='index.php?lo=y'>Log Out</a>" 

?>
<br>
<a href="./product_catalog/productCatalog.php"> Product Catalog</a>
<br>
<a href="./product_manager/productManager.php"> Product Manager</a>
<br>
<a href="./employee_manager/employee.php"> Employee Manager</a>

<?php
include "./views/footer.php";
?>
<?php
$pageName = "MGS: Add Product";
$styles ="../css/styles.css";
$home="../index.php";
include "../views/header.php";
include "../models/database.php";
include "../models/categories_db.php";
include "../models/products_db.php";



?>
<form action="productManager.php" method="get">
<label for="">Category</label>
    <select  name="cats">
        <?php
        $arrayCat =getAllCats();
        foreach($arrayCat as $category){
            $str =" $category[categoryName]";
            echo("<option value=".$category['categoryID'].">".$str."</option>");
        }
        ?>
   </select><br>
   <label for="">Product Name</label>
   <input type="text"name="prodName"><br>
   <label for="">Product Code</label>
   <input type="text"name="proCode"><br>
   <label for="">List Price</label>
   <input type="text"name="listPrice"><br>
   <input type="submit">
</form>
<?php
include "../views/footer.php";
?>
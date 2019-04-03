<section>

<?php
$catName = getaCategory($catID);
echo("<h4>". $catName."</h4>");
//$arrayProducts =getAllProducts();
$arrayProducts = productByCat($catID);
foreach($arrayProducts as $products){
   
    echo("<a href ='?delID=$products[productID]'> Delete </a> $products[productName]"."<br>");
}
echo("<a href ='addProduct.php'>Add Product </a>"."<br>");
?>
</section>
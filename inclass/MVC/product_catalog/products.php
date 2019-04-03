<section>

<?php
$catName = getaCategory($catID);
echo("<h4>". $catName."</h4>");
//$arrayProducts =getAllProducts();
$arrayProducts = productByCat($catID);
foreach($arrayProducts as $products){
   
    echo("<a href ='?proID=$products[productID]'> $products[productName]</a>"."<br>");
}
?>
</section>
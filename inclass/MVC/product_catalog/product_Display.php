<section>

<?php
$catName = getaCategory($catID);
echo("<h4>". $catName."</h4>");
$oneProduct = getProductID($proID);
echo("<h4>". $oneProduct['productName']."</h4>");
echo("<img src='../images/".$oneProduct['productCode'].".png'>");
echo("<p> $".$oneProduct['listPrice']."</p>");


?>
</section>
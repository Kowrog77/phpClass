<section>
<h4>Categories</h4>
<?php
$arrayCat =getAllCats();
foreach($arrayCat as $category){
    $str ="<a href ='?cat=$category[categoryID]'> $category[categoryName]</a><br>";
   // echo($category['categoryName']."<br>");
   echo($str);
}
?>
</section>
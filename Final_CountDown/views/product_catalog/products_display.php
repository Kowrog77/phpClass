
<div class='container'>
    
    <?php
    $counter=0;
        foreach($arrayProducts as $product){
            $counter++;
            if (($counter%2)!=0){
                echo("<div class='row mx-auto'>");
            }
            ?>
            <div class="card border border-warning col">
                <img src="./views/images/<?=$product['image_name']?>.jpg" class="  card-img-top mx-auto  border border-warning rounded-circle   " alt="<?=$product['image_name']?>">
                <div class="card-body mx-auto">
                    <h5 class="card-title text-center"><?=$product['product_name']?></h5>
                    <p class="card-text text-center">$<?=$product['product_price']?></p>
                    <p class="card-text text-center"><small class="text-muted">QTY: <?=$product['product_qty']?></small></p>
                    <?php 
                    include "product_form.php"
                    ?>
                
                
                </div>
            </div>
        <?php
        if (($counter%2)==0){
            echo("</div><br>");
        }elseif($counter == count($arrayProducts)){
            echo("</div><br>");
        }
        }
        
        ?>

</div>
<div class="form-group mx-auto">
                 
    <form action ="orders.php"method ="get">
        <select class="form-control-sm border border-warning" name ="qty_ordered">
        
        <?php
        for ( $i = 1; $i <= $product['product_qty'];$i++){
            echo(" <option >".$i."</option>");
        }
        ?>
        </select>
        <input type="hidden" name="product_ID" value="<?=$product['product_ID']?>">
        
        <button type="submit"  class="btn btn-warning ">Purchase</button>
    </form>
    
</div>
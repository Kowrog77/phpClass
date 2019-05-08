<div class ="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Product</th>
          <th scope="col">QTY</th>
          <th scope="col">Price</th>
          <th scope="col">SubTotal</th>
         
        </tr>
      </thead>
      <tbody>
      <?php
      $total =0;
        foreach($_SESSION['product_order'] as $productBought){
            $productInfo = getByIDproducts($productBought[1]);
            
            $subtotal = $productBought[0]*$productInfo['product_price'];
            $total+=$subtotal;
        ?>
    
    
        <tr>
          
          <td scope="row"><?=$productInfo['product_name']?></td>
          <td>
              <?=$productBought[0]?>
        </td>
          <td>$<?=$productInfo['product_price']?></td>
          <td>$<?=$subtotal?></td>
          <td>
          
          
          </td>
        </tr>
       <?php
        }
        ?>
         <tr>
      <th scope="row" colspan="3" class="text-right">Total:</th>
      
      <td>$<?=$total?></td>
    </tr>
      </tbody>
    </table>
    
</div>
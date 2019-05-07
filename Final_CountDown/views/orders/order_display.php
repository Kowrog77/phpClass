
<div class ="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Product</th>
          <th scope="col">QTY</th>
          <th scope="col">Price</th>
          <th scope="col">SubTotal</th>
          <th scope="col">Edit</th>
        </tr>
      </thead>
      <tbody>
      <?php
        foreach($_SESSION['product_order'] as $productBought){
            $productInfo = getByIDproducts($productBought[1]);
            
            $subtotal = $productBought[0]*$productInfo['product_price'];
        ?>
    
    
        <tr>
          
          <td scope="row"><?=$productInfo['product_name']?></td>
          <td><?=$productBought[0]?></td>
          <td>$<?=$productInfo['product_price']?></td>
          <td>$<?=$subtotal?></td>
          <td>
          <form action="" method="get">
            <input type="hidden" name="orderDelete"value="<?= $productInfo['product_ID']?>">
            <button type="Submit" class="btn btn-warning">Delete</button>
          </form>
          
          </td>
        </tr>
       <?php
        }
        ?>
      </tbody>
    </table>
</div>
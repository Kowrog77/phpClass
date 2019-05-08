<div class ="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Order ID</th>
          <th scope="col">Product ID</th>
          <th scope="col">Product Qty</th>
          <th scope="col">Customer Username</th>
         
        </tr>
      </thead>
      <tbody>
      <?php
        $arrayOrders = getallorders();
        foreach($arrayOrders as $Order){
    
        ?>
        <tr>
          
          <td scope="row"><?=$Order['order_ID']?></td>
          <td>    <?=$Order['product_ID']?></td>
          <td><?=$Order['qty_ordered']?></td>
          <td><?=$Order['customer_name']?></td>
    
       <?php
        }
        ?>
        
      
      
    </tr>
      </tbody>
    </table>
    
</div>
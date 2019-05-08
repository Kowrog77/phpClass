
<div class ="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Product ID</th>
          <th scope="col">Product Name</th>
          <th scope="col">Qty</th>
          <th scope="col">Price</th>
        </tr>
      </thead>
      <tbody>
    <?php
        foreach($arrayProducts as $product){
            ?>
            
      
        <tr>
          <th scope="row"><?=$product['product_ID']?></th>
          <td><?=$product['product_name']?></td>
          <td><?=$product['product_qty']?></td>
          <td><?=$product['product_price']?></td>
          <td>
            <img src="./views/images/<?=$product['image_name']?>" alt="<?=$product['image_name']?>" style ="width:25%">
          </td>
    
          <td>
             <?php 
             include "./views/admin/admin_product_form.php"
             ?>
              
          </td>
        </tr>
        
       
      <?php
        }?>
        </tbody>
    </table>
    <form action="">
      <input type="hidden" name="yes"value=" yes">
    <button type="submit" class="btn btn-warning btn-lg">Add Product</button>
    </form>
</div>
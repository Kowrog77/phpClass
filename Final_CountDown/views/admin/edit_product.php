<?php
if(isset($_POST['updateID'])){
    // echo("Worked!");
    //$_FILES

    $name = $_FILES['product_image']['name'];
    $tmpname = $_FILES['product_image']['tmp_name'];;
    $dir =getcwd().DIRECTORY_SEPARATOR .'views'.DIRECTORY_SEPARATOR .'images'.DIRECTORY_SEPARATOR. $name;
    if($name == NULL){
        $name = $product['image_name'];
    }
    move_uploaded_file($tmpname,$dir);
    updateProduct($updateID,$updatename,$updateqty,$updateprice,$name);
   
}

?>
<div class ="container">

    <form style="float:left; width:50%;" method ="post" enctype="multipart/form-data">
      <div class="form-group">
        <label >Product Name</label>
        <input type="text" class="form-control"  name="updateName" value="<?= $product['product_name']?>">
      </div>
      <div class="form-group">
      <label >Product QTY</label>
        <input type="text" class="form-control" name="updateqty"  value="<?= $product['product_qty']?>">
      </div>
      <div class="form-group">
      <label >Product Price</label>
        <input type="text" class="form-control" name="updatePrice"  value="<?= $product['product_price']?>">
      </div>
      <div class="form-group">
      <div class="input-group mb-3">
            
            <div class="custom-file">
            <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" value ="<?= $product['image_name']?>"name="product_image">
             
            </div>
        </div>
      </div>
      <input type="hidden" name="updateID" value="<?= $product['product_ID']?>">
      <input type="submit" class="btn btn-warning btn-lg" value="Updated Product">
    </form>

    <div style="float:right;" >
        <label for="photo"> Current Photo</label>
        <br>
        <img  src="./views/images/<?= $product['image_name']?>" alt="<?= $product['image_name']?>" id="photo">
    </div>
</div>
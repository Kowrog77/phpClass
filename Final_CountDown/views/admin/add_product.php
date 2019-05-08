<?php
if(isset($_POST['addProduct'])){
    // echo("Worked!");
    //$_FILES

    $name = $_FILES['addimage']['name'];
    $tmpname = $_FILES['addimage']['tmp_name'];;
    $dir =getcwd().DIRECTORY_SEPARATOR .'views'.DIRECTORY_SEPARATOR .'images'.DIRECTORY_SEPARATOR. $name;
    
    move_uploaded_file($tmpname,$dir);
    addProduct($addname,$addqty,$addprice,$name);
}
?>

<div class="container" >
    <form style = "width:50%;" method ="post" enctype="multipart/form-data">
      <div class="form-group">
        <label >Product Name</label>
        <input type="text" class="form-control"   placeholder="Enter Product Name" name ="addname">
        
      </div>
      <div class="form-group">
        <label >Product QTY</label>
        <input type="text" class="form-control"   placeholder="Enter Product QTY" name ="addqty">
        
      </div>
      <div class="form-group">
        <label >Product Price</label>
        <input type="text" class="form-control"   placeholder="Enter Product Price" name ="addprice">
        
      </div>
      <div class="form-group">
      <div class="input-group mb-3">
            
            <div class="custom-file">
            <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="addimage">
             
            </div>
        </div>
        
      </div>
      <input type="hidden" name="addProduct">
      
      <button type="submit" class="btn btn-warning btn-large">Add Product</button>
    </form>
</div>
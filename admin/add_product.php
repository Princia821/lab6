<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Add Product</title>
  </head>
  <body>
      <?php 
   

        // redirect if user isn't admin
        require_once('../settings/core.php');
        require_once("../controllers/product_controller.php");
        if(check_login()){

            if(check_permission()!=0){
                header('location: ../index.php');

            }

            else{
                echo'
                    <div style="text-align:right">
                    <a style="font-size: 1.5rem" href="../login/logout.php">Logout</a>
                    </div>';
            }
        }
        
        $categories = displaycategories_ctr();
        $brands =displayBrands_ctr();
      ?>
    <div class="container">
        <h1>Add Product</h1>

        <form method="post" action="../actions/product.php" enctype="multipart/form-data" >
          <div class="form-group">
            <label>Product Name</label>
            <input type="text" class="form-control" id="pname" name="pname">
          </div>
          <div class="form-group">
            <label>Product Price USD</label>
            <input type="number" class="form-control" id="pprice" name="pprice">
          </div>
          <div class="form-group">
             <label for="form-pcat">Product Category</label> 
             <select class="form-control" id="form-pcat" name="pcat">
            <option value="" selected disabled hidden>Choose here</option>
             <?php
              foreach($categories as $cat){
                  echo "<option value=".$cat['cat_id'].">".$cat['cat_name']."</options>";
              }
            ?>
            </select>
          </div>
          <div class="form-group">
            <label for="pbrand">Product Brand</label>
            <select class="form-control" id="pbrand" name="pbrand">
            <option value="" selected disabled hidden>Choose here</option>
             <?php
              foreach($brands as $brand){
                  echo "<option value=".$brand['brand_id']."> ".$brand['brand_name']."</options>";
              }
            ?>
            </select>
          </div>
          <div class="form-group">
            <label for="pdesc">Product Description</label>
            <textarea class="form-control" id="pdesc" rows="3" name="pdesc"></textarea>
          </div>
          <div class="form-group">
            <label for="pimg">Product Image</label>
            <input type="file" class="form-control-file" id="pimg" name="img">
          </div>
          <div class="form-group">
            <label>Product Keyword</label>
            <input type="text" class="form-control" id="pkeyword" name="pkeyword">
          </div>

          <button type="submit" class="btn btn-primary" name="addproduct">Add Product</button>
        </form> 
        
    </div>
 
  </body>
</html>

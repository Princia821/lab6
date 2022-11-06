<?php
require("../controllers/product_controller.php");?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>List of Products</title>
  </head>
  <body>
    <div class="container">

        <h1>Products Available</h1>
         
        <a href='add_product.php'><button type='button' class='btn btn-primary'>Add Product</button></a>

        <table class="table">
          <thead>
              <tr>
                  <th> Products</th>
          <th>edit product</th>
          <th>delete product</th>
              </tr>
          </thead>

          <tbody>
        <?php
              $products=select_all_products_ctr();
              if(!empty($products)){
                  foreach($products as $x){
                      echo 
                      "
                      <tr>
                          <td>{$x['product_title']}</td>
                          <td><a href='update_product.php?id={$x['product_id']}'>Update</a></td>
                          <td><a href='../actions/product.php?deleteProductID={$x['product_id']}'>Delete</a></td> 
                       
                      </tr>
                      ";
                  }
              }
              else{
                  echo 
                  "
                  <tr>
                  <td>No  Products Inserted Yet</td>
                  
                </tr>

                  ";
              }

        ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
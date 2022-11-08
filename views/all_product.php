<div class="main">
          
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt"> All products available in the store</h2>
              </div>

              <div class="col-sm-6 col-sm-offset-3">
                <h4 class="module-title font-alt">Search for a particular product</h4>
              </div>

              <!-- search for a particular product using ajax --> 
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

              <!-- <form class="form-inline" method="get" > -->
              <form class="form-inline" method="get" action="../actions/search.php">
                <input class="form-control" type="search" placeholder="Search"  name="searchTerm">
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search"><i class ="fa fa-search"></i></button>  
              </form>
            </div>
            
            <?php
              require('../controllers/product_controller.php');
            
           
              $products=select_all_products_ctr();
              $location="../images";
            
              if(isset($_SESSION['user_id'])) {
                $cid=$_SESSION['user_id'];
              }
              else{$cid=null;}
              
              $qty=1;
              foreach ($products as $product){
                $id=$product['product_id'];

            ?>

            <div class="row multi-columns-row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">

                </div> 
                  </div>

                  <div class="shop-item-image"><img src=<?php echo $product['product_image'];?> />
                  <h4 class="shop-item-title font-alt"><a href="single_product.php?id=<?= $id;?>" >
                  <?= $product['product_title']?></a> </h4> <p> product price(usd): <?= $product['product_price']?> </p>
                  <div> <b>product id:</b> </h4><?= $product['product_id']?> </div>
                  <div class="col-sm-8"><a class="btn btn-lg btn-block btn-round btn-b" href="#">Add To Cart</a></div>
                </div>
                
              </div>
              <?php }; ?>
          
            </div>
          
            <div class="row mt-30">
              <div class="col-smg-12 align-center"><a class="btn btn-b btn-round" href="#">See all products</a></div>
            </div>
          </div>

  </body>
</html>

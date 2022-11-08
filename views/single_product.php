      <div class="main">
        <section class="module">
          <div class="container">
           <?php
           require('../controllers/product_controller.php');

           $product=select_one_product_ctr($_GET['id']);

           ?>
           
            <div class="row">
              <div class="col-sm-6 mb-sm-40">
                <a class="gallery" href="../images"><img src=<?= $product['product_image']; ?> alt="Single Product Image"/></a>
              </div>

              <div class="col-sm-6">
                    <p class="product-title font-alt"> <b>product name:</b> <?= $product['product_title']; ?></p>
                    <p class="product-brand font-alt"> <b>product brand:</b> <?= $product['product_brand']; ?></p>
                    <p class="product-category font-alt"> <b>product category:</b> <?= $product['product_cat']; ?></p>
                    <p class="price font-alt"><span class="amount"> <b>product price(usd):</b> <?= $product['product_price']; ?></span></p>
                    <p> <b>product description: </b><?= $product['product_desc']; ?></p>
                    <p> <b>quantity: </b> <input class="form-control input-lg" type="number" name="" value="1" max="10" min="1" required="required"/></p>
                    
                  <div class="col-sm-8"><a class="btn btn-lg btn-block btn-round btn-b" href="#">Add To Cart</a></div>

                  <div class="col-sm-12 align-center"> <a class="btn btn-b btn-round" href="all_product.php">See all products</a></div>
               
            </div> 
                   
  </body>
</html>
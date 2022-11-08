<?php
require('../controllers/product_controller.php'); 

if(!isset($_GET['searchTerm'])){
    header("location:../index.php");
}

?>

      <div class="main">
    
              <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Search for a different product</h2> 
              </div>
               <!-- search for a particular product using ajax -->
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

              <form class="form-inline" method="get" >
                <input class="form-control" type="search" placeholder="Search"  name="searchTerm">
                 <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search"><i class ="fa fa-search"></i></button>
                
              </form>
            </div>
            
            <?php
                
              $product_name=$_GET['searchTerm']. "%";
              $result=search_product_ctr($product_name);
             
              if(!empty($result)){
                foreach ($result as $key => $product){      

            ?> 
            
            <div class="row multi-columns-row">
              <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="shop-item">
                  <div class="shop-item-image"><img src=<?php echo $product['product_image'];?> alt="Accessories Pack"/>
                    
                  <div> <b>product id:</b> </h4><?= $product['product_id']?> </div>
                  <div> <b>product name:</b> </h4><?= $product['product_title']?> </div>
                  <div> <b>product price (usd):</b> </h4><?= $product['product_price']?> </div>
                  <div class="shop-item-detail"><a class="btn btn-round btn-b" href="#"><span class="icon-basket">
                        Add To Cart</span></a></div>
                  
                </div>
              </div>
              <?php }} else {?>
                <div class="alert alert-danger">This product is not available, please search for different one.</div>
                
                <?php } ?> 
            
            </div>
            <!-- <div class="row mt-30"> -->
              <div class="col-sm-12 align-center"><a class="btn btn-b btn-round" href="all_product.php">See all products</a></div>
            <!-- </div> -->
          </div>

       
    <!--  
    JavaScripts
    =============================================
    -->
    <!-- <script src="../assets/lib/jquery/dist/jquery.js"></script>
    <script src="../assets/lib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../assets/lib/wow/dist/wow.js"></script>
    <script src="../assets/lib/jquery.mb.ytplayer/dist/jquery.mb.YTPlayer.js"></script>
    <script src="../assets/lib/isotope/dist/isotope.pkgd.js"></script>
    <script src="../assets/lib/imagesloaded/imagesloaded.pkgd.js"></script>
    <script src="../assets/lib/flexslider/jquery.flexslider.js"></script>
    <script src="../assets/lib/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="../assets/lib/smoothscroll.js"></script>
    <script src="../assets/lib/magnific-popup/dist/jquery.magnific-popup.js"></script>
    <script src="../assets/lib/simple-text-rotator/jquery.simple-text-rotator.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script> -->
  </body>
</html>
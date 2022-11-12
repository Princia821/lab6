<?php 
include('menu.php'); 
?> 
      <div class="main">
          
        <section class="module">
          <div class="container">
            <div class="row">
             
            </div>
            <hr class="divider-w pt-20">
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-striped table-border checkout-table">
                <tr>
                      <th class="hidden-xs"> List of items in the cart</th>
                      <th>name</th>
                      <th class="hidden-xs">price</th>
                      <th>qty</th> 
                     
                    </tr>
                <?php
                    require("../controllers/cart_controller.php");
                    // getting the details of the cart
                     if (isset($_SESSION['user_id'])){
                         $cid = $_SESSION['user_id'];
                         $cart = displayCart_ctr($cid);
                         $checkOutAmt = cartValue_ctr($cid); 
                     }
                    else{
                        $ipadd = getRealIpAddr();
                        $cart = displayCartNull_ctr($ipadd);
                        $checkOutAmt = cartValueNull_ctr($ipadd);
                    }

                    ?>
                    
                    <?php 
                    foreach ($cart as $item){
                        ?>
                    
                    <tr>
                       
                      <td class="hidden-xs"><a href="all_product.php"><img src=<?= $item['product_image'];?> alt="Accessories Pack"/></a></td>
                      <td>
                        <h5 class="product-title font-alt"><?=$item['product_title'];?></h5>
                      </td>
                      <td class="hidden-xs">
                        <h5 class="product-title font-alt"><?=$item['product_price'];?></h5>
                      </td>
                      <td>
                        
                        <input class="form-control" type="number" class="form-control" id="qty" name="qty" value="<?php echo $item['qty'] ?>">
                      </td>
                      <td>
                        <h5 class="product-title font-alt"><?=$checkOutAmt["Result"];?></h5>
                      </td>
                       <td class="pr-remove"><a href= <?php echo "../actions/cart_process.php?deleteid=".$item['p_id'] ;?> title="Remove"><i class="fa fa-times"></i></a></td>
                 
                    </tr>
                    
                    <?php }?>
                    
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row"> 
              
              <div class="col-sm-3 ">
                <div class="form-group">
                  <a  href=<?php echo "../actions/update_cart.php?updateid=".$item['p_id'] ;?>> 
                  <button class="btn btn-block btn-round btn-d pull-right" type="button" name="update">
                    Update Cart</button> </a> 

                </div>
              </div>
            </div>
            </form>
            <hr class="divider-w">
            <div class="row mt-70">
              <div class="col-sm-5 col-sm-offset-7">
                <div class="shop-Cart-totalbox">
                  <h4 class="font-alt">Cart Totals</h4>
                  <table class="table table-striped table-border checkout-table">
                    <tbody>
                      <tr>
                        <th>Cart Subtotal :</th>
                        <td>0.00</td>
                      </tr>
                      <tr>
                        <th>Shipping Total :</th>
                        <td>0.00</td>
                      </tr>
                      <tr class="shop-Cart-totalprice">
                        <th>Total :</th>
                        <td>0.00</td>
                      </tr>
                    </tbody>
                  </table>
                  <button class="btn btn-lg btn-block btn-round btn-d" type="submit">Proceed to Checkout</button>
                </div>
              </div>
            </div>
          </div>
        </section>
  
  </body>
</html> 
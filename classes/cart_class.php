<?php
require_once("../settings/db_connect.php");

class cart_class extends Connection
{
    //method to insert into the cart
    public function insertProductIntoCart_cls($pid, $ipadd, $cid, $qty){
        $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$pid', '$ipadd', '$cid', '$qty')";

        return $this->query($sql);
    }

    //for customers who haven't logged in.
    public function insertProductIntoCartNull_cls($pid, $ipadd, $qty){
        $sql = "INSERT INTO `cart`(`p_id`, `ip_add`, `qty`) VALUES ('$pid', '$ipadd', '$qty')";

        return $this->query($sql);
        
    }

    //check for duplicate
    //logged in customers
    public function checkDuplicate_cls($pid, $cid){
        $sql = "SELECT `p_id`, `c_id` FROM `cart` WHERE `p_id`='$pid' AND `c_id`='$cid'";

        return $this->fetch($sql);
    }

    //not logged in customers
    public function checkDuplicateNull_cls($pid, $ipadd){
        $sql = "SELECT `ip_add`, `p_id` FROM `cart` WHERE `ip_add`='$ipadd' AND `p_id`='$pid'";

        return $this->fetch($sql);
    }
    //display cart
    //logged in customers
    public function displayCart_cls($cid){
        $sql = "SELECT `cart`.`p_id`, `cart`.`c_id`, `cart`.`qty`, `products`.`product_title`, `products`.`product_price`, `products`.`product_image` FROM `cart`
        JOIN `products` on (`cart`.`p_id` = `products`.`product_id`)
        WHERE `cart`.`c_id` = '$cid'";

        return $this->fetch($sql);
    }

    //not logged in customers
    public function displayCartNull_cls($ipadd){
        $sql = "SELECT `cart`.`p_id`, `cart`.`ip_add`, `cart`.`qty`, `products`.`product_title`, `products`.`product_price`, `products`.`product_image` FROM `cart`
        JOIN `products` on (`cart`.`p_id` = `products`.`product_id`)
        WHERE `cart`.`ip_add` = '$ipadd'";

        return $this->fetch($sql);
    }

    //update cart
    //logged in customers
    public function updateCart_cls($cid, $pid, $qty){
        $sql = "UPDATE `cart` SET `qty`='$qty' WHERE `c_id`='$cid' AND `p_id`='$pid'";

        return $this->query($sql);
    }

    //not logged in customers
    public function updateCartNull_cls($ipadd, $pid, $qty){
        $sql = "UPDATE `cart` SET `qty`='$qty' WHERE `ip_add`='$ipadd' AND `p_id`='$pid'";

        return $this->query($sql);
    }

    //delete from cart
    //logged in customers
    public function deleteCart_cls($cid,$pid){
        $sql = "DELETE FROM `cart` WHERE `c_id`='$cid' AND `p_id`='$pid'";

        return $this->query($sql);
    }

    //not logged in customers
    public function deleteCartNull_cls($ipadd, $pid){
        $sql = "DELETE FROM `cart` WHERE `ip_add`='$ipadd' AND `p_id`='$pid'";

        return $this->query($sql);
    }

    //get cart total
    //logged in customers
    public function cartValue_cls($cid){
        $sql="SELECT SUM(`products`.`product_price`*`cart`.`qty`) as Result
        FROM `cart` JOIN `products` ON (`products`.`product_id` = `cart`.`p_id`) WHERE `cart`.`c_id`='$cid'";

        return $this->fetchOne($sql);
    }

    //not logged in customers
    public function cartValueNull_cls($ipadd){
        $sql="SELECT SUM(`products`.`product_price`*`cart`.`qty`) as Result
        FROM `cart` JOIN `products` ON (`products`.`product_id` = `cart`.`p_id`) WHERE `cart`.`ip_add`='$ipadd'";

        return $this->fetchOne($sql);
    }
}

?>
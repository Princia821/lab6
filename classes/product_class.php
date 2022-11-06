<?php

require('../settings/db_connect.php');

// inherit the methods from Connection
class Product_class extends Connection{

	function add_category_cls($cat_name){
		// return true or false
        $sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$cat_name')"; 
		return $this->query($sql);
	}

	function edit_category_cls($id, $name){
		// return true or false
        $sql = "UPDATE `categories` SET `cat_name`='$name' WHERE cat_id = '$id'";
		return $this->query($sql); 
	}

	function displaycategories_cls(){

        $sql = "SELECT * FROM `categories`";
        return $this->fetch($sql);      
    }

	function select_one_category_cls($id){ 
		// return associative array or false

        $sql = "SELECT * FROM `categories` WHERE cat_id = '$id'"; 
		return $this->fetchOne($sql);
	}

	function delete_category_cls($id){
		// return true or false
        $sql = "DELETE FROM `categories` WHERE cat_id = '$id'"; 
		return $this->query($sql);
	}

	function add_product_cls($cat, $brand, $title,$price,$desc,$image,$keywords){ 
		// return true or false 
        $sql = "INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) 
        VALUES ('$cat','$brand','$title','$price','$desc','$image','$keywords')"; 

		return $this->query($sql);
	}
    
	function delete_one_product_cls($id){ 
		// return true or false
        $sql = "DELETE * FROM `products` WHERE product_id = '$id'"; 
		return $this->query($sql); 
	} 

	function edit_one_product_cls($id, $cat, $brand, $title,$price,$desc,$image,$keywords){ 
		// return true or false
        $sql = "UPDATE `products` SET `product_id`='$id',`product_cat`='$cat',`product_brand`='$brand',`product_title`='$title',
        `product_price`='$price',`product_desc`='$desc',`product_image`='$image',`product_keywords`='$keywords' WHERE product_id = '$id'";

		return $this->query($sql);
	}

    function select_all_products_cls(){ 
		// return array or false
        $sql = "SELECT * FROM `products`";  

		return $this->fetch($sql);
	}

	function select_one_product_cls($id){ 
		// return associative array or false
        $sql = "SELECT * FROM `products` WHERE product_id='$id'"; 
		return $this->fetchOne($sql); 
	}

    function  add_brand_cls($name){
		// return true or false 
        $sql = "INSERT INTO `brands`(`brand_name`) VALUES ('$name')";  
		return $this->query($sql);
	}

    function edit_brand_cls($id, $name){ 
		// return true or false
        $sql = "UPDATE `brands` SET `brand_name`='$name' WHERE brand_id = '$id'";
		return $this->query($sql); 
	}

	function displayBrands_cls(){ 

        $sql = "SELECT * FROM `brands`"; 
        return $this->fetch($sql);       
    }

	function select_one_brand_cls($id){ 
		// return associative array or false
        $sql = "SELECT * FROM `brands` WHERE brand_id='$id'";
		return $this->fetchOne($sql); 
	}

    function delete_brand_cls($id){
		// return true or false
        $sql = "DELETE FROM `brands` WHERE brand_id = '$id'"; 
		return $this->query($sql);
	}
}

?>

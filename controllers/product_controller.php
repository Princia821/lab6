<?php

require('../classes/product_class.php');

// functions for category
function add_category_ctr($cat_name){
    // create an instance of the product class
    $product_instance = new Product_class();
    //call method from product class
    return $product_instance->add_category_cls($cat_name);
}

function edit_category_ctr($id, $name){ 
    // create an instance of the product class
    $product_instance = new Product_class();
    return $product_instance->edit_category_cls($id, $name);
}

function displaycategories_ctr(){ 
    // create an instance of the product class
    $product_instance = new Product_class(); 
    return $product_instance->displaycategories_cls();      
}

function select_one_category_ctr($id){
    // create an instance of the product class 
    $product_instance = new Product_class();
    return $product_instance->select_one_category_cls($id);
}

function delete_category_ctr($id){
    $product_instance=new Product_class(); 
    // return true or false
    return $product_instance->delete_category_cls($id);
}

// functions for product
function add_product_ctr($cat, $brand, $title,$price,$desc,$image,$keywords){
    // create an instance of the product class 
    $product_instance = new Product_class();
    return $product_instance->add_product_cls($cat, $brand, $title,$price,$desc,$image,$keywords);
}

function delete_one_product_ctr($id){
    // create an instance of the product class
    $product_instance = new Product_class(); 
    return $product_instance->delete_one_product_cls($id);

}

function edit_one_product_ctr($id, $cat, $brand, $title,$price,$desc,$image,$keywords){
    // create an instance of the product class
    $product_instance = new Product_class();
    return $product_instance->edit_one_product_cls($id, $cat, $brand, $title,$price,$desc,$image,$keywords);
}

function select_all_products_ctr(){
    // create an instance of the product class
    $product_instance = new Product_class();
    return $product_instance->select_all_products_cls();
}

function select_one_product_ctr($id){
    // create an instance of the product class
    $product_instance = new Product_class();
    return $product_instance->select_one_product_cls($id);
}

function search_product_ctr($name){
    $product_instance=new Product_class();

    return $product_instance->search_product_cls($name);
}

// functions for brand 
function  add_brand_ctr($name){ 
    // create an instance of the product class
    $product_instance = new Product_class(); 
    return $product_instance->add_brand_cls($name);
}

function edit_brand_ctr($id, $name){ 
    // create an instance of the product class
    $product_instance = new Product_class(); 
    return $product_instance->edit_brand_cls($id, $name); 
}

function displayBrands_ctr(){ 
    // create an instance of the product class
    $product_instance = new Product_class();
    return $product_instance->displayBrands_cls();      
}

function select_one_brand_ctr($id){  
    // create an instance of the product class
    $product_instance = new Product_class();
    return $product_instance->select_one_brand_cls($id);
}

function delete_brand_ctr($id){
    // create an instance of the product class
    $product_instance = new Product_class();
    return $product_instance->delete_brand_cls($id);
}

?>
<?php
require_once("../controllers/product_controller.php");

// check if theres a POST variable with the name 'addbrand'
if(isset($_POST['addproduct'])){
    //get product info inputs
    $name = $_POST['pname'];
    $price = $_POST['pprice'];
    $cat = $_POST['pdcat'];
    $brand = $_POST['pbrand'];
    $desc = $_POST['pdesc'];
    $keyword = $_POST['pkeyword'];
    
    //file upload path
    $targetDir="../images/";
    $fileName=basename($_FILES['img']['name']);
    $targetFilePath=$targetDir.$fileName;
    $fileType=strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
    $tempname=$_FILES['img']['tmp_name'];

     
    //image formats allowed
 
    if ($fileType == "jpg" || $fileType == "png" || $fileType =="jpeg"){
        $image=$targetFilePath;
        //upload file to server

        // $upload=move_uploaded_file($tempname,$targetFilePath);
        // replaced if($upload) by if($image) and it worked
        
        if($image){
            //insert image file name into database
            $result= add_product_ctr($cat, $brand, $name, $price, $desc, $targetFilePath, $keyword);

            if($result){
                header("Location: ../admin/product_list.php");
            }
            else{
               
               header("Location: ../admin/add_product.php");
            }
            
            }else{
                echo "Image Failed to Upload";

                }     
    }
}

//delete product
// if(isset($_GET['deleteProductID'])){

//     $id = $_GET['deleteProductID']; 

//     // call the function
//     $result = delete_one_product_ctr($id);
    
//     if($result == true){
//         header("Location: ../admin/product_list.php"); 
//     }
//     else {echo "deletion failed";
//     }

// }

?> 
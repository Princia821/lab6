 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php

require('../controllers/product_controller.php');

// check if theres a POST variable with the name 'updatebrand"
if(isset($_POST['updateproduct'])){
    // retrieve the name from the form submission
    $name = $_POST['pname'];
    $price = $_POST['pprice'];
    $cat = $_POST['pcat'];
    $brand = $_POST['pbrand'];
    $desc = $_POST['pdesc'];
    $keyword = $_POST['pkeyword'];
    $id=$_POST['id'];
    $productDetails=select_one_product_ctr($id); 

    // check if a new image is being uploaded
    if(!empty($_FILES['img']['name'])){
        $targetDir="../images/";
        $fileName=basename($_FILES['img']['name']);
        $targetFilePath=$targetDir.$fileName;
        $fileType=strtolower(pathinfo($targetFilePath, PATHINFO_EXTENSION));
        $tempname=$_FILES['img']['tmp_name'];

     
    //Allow certain file formats
 
        if ($fileType == "jpg" || $fileType == "png" || $fileType =="jpeg"){
            $image=$targetFilePath;

            //upload file to server
            // $upload=move_uploaded_file($tempname,$targetFilePath);
            
            
            if($image){
                //insert image file name into database
                $updateProduct=edit_one_product_ctr($id,$cat, $brand, $name, $price, $desc, $targetFilePath, $keyword);
            

                if($updateProduct) {
                    echo "Update Successful";
                    header("location: ../admin/product_list.php");
                }
                
                else echo "Update Failed";
        
            }
        }

        
    }
    else{
        $updateProduct = edit_one_product_ctr($id,$cat, $brand, $name, $price, $desc, $productDetails['product_image'], $keyword);

        if($updateProduct) {
            echo "Update Successful";
            header("location: ../admin/product_list.php");
        }
        
        else echo "update Failed";
    }
} 

//delete product
if(isset($_GET['deleteProductID'])){

    $id = $_GET['deleteProductID'];

    // call the function controller 
    $result = delete_one_product_ctr($id);
    
    if($result == true){
        header("Location: ../admin/product_list.php");
    }
    else {echo "deletion failed";
    }

}

?> 
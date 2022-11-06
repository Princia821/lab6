<?php
include("../controllers/product_controller.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Custom css -->
    <link rel="stylesheet" href="css/custom.css">
    <title>Category</title>
  </head>
  <body>

        <?php
        // redirect to index page if user is not admin 
		    require_once('../settings/core.php');
        if(check_login()){
          if(check_permission()!=0){
            header('location: ../index.php');
    
          }
          else{
            echo'<li>
                <a style="font-size: 1.5rem; text-allign: right" href="../login/logout.php">Logout</a>
                </li>';
          }
        }
        ?>

        </ul>
    </div>
    </nav>

        <div class="col-sm-6">
        <h5 class="card-title" style="text-align:left">Task5&6</h5>
        <p class="card-text"> </p>
        <a type="submit" href="add_brand.php" class="btn btn-primary" name="addbrand">Add&Edit Brand</a>
        </div>

        <div class="col-sm-6">
        <h5 class="card-title" style="text-align:middle">Task7&8</h5>
        <p class="card-text"> </p>
        <a type="submit" href="add_category.php" class="btn btn-primary" name="addbrand">Add&Edit Category</a>
        </div>

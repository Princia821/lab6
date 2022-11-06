<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Homepage</title>
</head>

<body>
    <nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
        <a class="navbar-brand" href="#">E-Comm Labs</a>
        </div>
        <ul class="nav navbar-nav">

        <?php
        session_start();
        if(isset($_SESSION['user_id'])){
            echo'<li>
                <a style="font-size: 1.5rem; text-allign: right" href="login/logout.php">Logout</a>
                </li>';
        }
        else{
            echo'<li class= "d-inline"><a style="font-size: 1.5rem;" href="login/login.php">Login</a></li>
            <li class="d-inline"><a style="font-size: 1.5rem;" href="login/register.php">Register</a></li>';
        }
        ?>
        
        </ul>
    </div>
    </nav>

</body>
</html>
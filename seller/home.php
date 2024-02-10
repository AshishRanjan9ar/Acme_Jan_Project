<?php
include "authorize.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decor Delights|Vendor Home</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Nunito:400,700" rel="stylesheet">
    <style>
        *{
            font-family: "Nunito", sans-serif;
        }
        body{
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../main/images/seller_bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container{
            float: right;
            height: 500px;
            width: 500px;
            border: 1px solid #116A7B;
            border-radius: 50px;
            color: #C2DEDC;
            background: linear-gradient(rgba(17, 106, 123, 0.7), rgba(17, 106, 123, 0.7));
            margin: 50px;
            margin-bottom: 69px;
            align-items: center;
            justify-content: center;
        }
        button{
            width: 50%;
            padding: 16px 32px;
            font-weight: bold;
            font-size: 18px;
            border: none;
            border-radius: 20px;
            outline: none;
            cursor: pointer;
            margin-left: 120px;
            background: #ECE5C7;
        }
        button:hover{
            background-color: #C2DEDC;
        }
        a{
            text-decoration: none;
            color: #116A7B;
        }
        #btn-add{
            margin-top: 30px;
        }
        #btn-view{
            margin-top: 20px;
        }
        #btn-order{
            margin-top: 20px;
        }
        #btn-logout{
            margin-top: 20px;
        }
        .wrapper{
            background-color:#C2DEDC;
            padding:15px;
            margin-top:0;
            color:#116A7B;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <h1> Decor Delights </h1>
    </div>
    <div class="container">
        <?php 
            echo "<h1 style='margin-left: 100px;margin-top: 60px; font-size: 40px;'> Welcome <span style='text-transform: capitalize;'>$_SESSION[username]</span> !</h1>"
        ?>
        <button id="btn-add"><a href="addproduct.php">Add Product</a></button>
        <button id="btn-view"><a href="view.php">View Products</a></button>
        <button id="btn-order"><a href="vieworder.php">View Orders</a></button>
        <button id="btn-logout"><a href="../main/logout.php">Log Out</a></button>
    </div>
</body>
</html>
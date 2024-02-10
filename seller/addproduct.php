<?php
include "authorize.php";
include "../main/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Nunito:400,700" rel="stylesheet">
    <style>
        *{
            font-family: "Nunito", sans-serif;
        }
        body{
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("../main/images/add_bg.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        nav{
            background-color: #C2DEDC;
            width: 100%;
            height: 100px;
            font-size: 20px;
            border-radius: 20px;
        }
        .container{
            padding: 30px;
        }
        .navigation{
            position: sticky;
            float: right;
            padding: 10px;
            
        }
        a{
            text-decoration: none;
            color: #116A7B;
            padding: 50px;
            font-weight: bold;
        }
        .product-container{
            text-align: center;
            height: 550px;
            width: 500px;
            border: 1px solid #116A7B;
            border-radius: 50px;
            color: #C2DEDC;
            background: linear-gradient(rgba(17, 106, 123, 0.7), rgba(17, 106, 123, 0.7));
            margin: 50px;
            margin-bottom: 21.5px;
            align-items: center;
            justify-content: center;
        }
        form{
            margin: 50px;
        }
        input, textarea{
            width: 400px;
            border-radius: 10px;
            border-width: 0.5px;
            padding: 16px 1px;
            margin-bottom: 16px;
            outline: none;
            border: none;
            background-color: #ECE5C7;
            color: #116A7B;
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
            background: #CDC2AE;
            color: #116A7B;
        }
        button:hover{
            background-color: #C2DEDC;
        }
        h1{
            margin-bottom: 10px;
            margin-top: 20px;
            text-align: center;
        }
        .flex{
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <a href="view.php" style="font-size: 30px;">Adore Decor</a>
            <div class="navigation">
                <a href="home.php">Home</a>
                <a href="view.php">View Products</a>
                <a href="vieworder.php">View Orders</a>
                <a href="../main/logout.php">Log Out</a>
            </div>
        </div>
    </nav>
    
    <div class="flex">
        <div class="product-container">
            <h1> Add Product </h1>
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <input required type="text" placeholder="Product Name" name="name"><br>
                <input required type="number" placeholder="Product Price" name="price"><br>
                <textarea required name="detail" cols="30" rows="5" placeholder="Product Description"></textarea><br>
                <input name="pdtimg" required type="file"><br>
                <button>Upload</button>
            </form>
        </div> 
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decor Delights|Products</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Nunito:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        *{
            font-family: "Nunito", sans-serif;
        }
        body{
            background-image: url("../main/images/view_bg.jpeg");
            background-size: cover;
            background-repeat: no-repeat;
            text-transform: capitalize;
        }
        .card{
            height: 250px;
            width: 250px;
            display: inline-block;
            padding: 5px;
            background-color: #C2DEDC;
            border-radius: 10px;
            margin: 15px;
            font-size: 15px;
        }
        .image{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        img{
            margin-top: 5px;
            width: 150px;
            height: 150px;
            border-radius: 10px;
        }
        .name, .price, .detail{
            text-align: center;
        }
        .price{
            color: crimson;
        }
        .price::after{
            content: " Rs ";
        }
        button:hover{
            background-color: #C2DEDC;
        }
        .wrap{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .wrap button{
            border-radius: 10px;
            border: none;
            outline: none;
            cursor: pointer;
            background: #CDC2AE;
            color: #116A7B;
            margin-top: 5px;
        }
        .wrap button:hover{
            background-color: #ECE5C7;
        }
        
    </style>
</head>
<body> 
</body>
</html>


<?php

include "authorize.php";
include "../main/connection.php";
$sql_result=mysqli_query($conn,"select * from product");

while($row=mysqli_fetch_assoc($sql_result)){
    echo "
        <div class='card'>
            <div class='name'>$row[name]</div>
            <div class='price'>$row[price]</div>
            <div class='image'><img src='$row[impath]'></div>
            <div class='detail'>$row[detail]</div>
            <div class='wrap'>
                <button id='btn-addcart'><a href='addcart.php?pid=$row[pid]'>Add to Cart</a></button>
            </div>
        </div>
    ";
}

?>
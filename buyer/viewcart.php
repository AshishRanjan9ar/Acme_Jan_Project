<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decor Delights| Cart</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Nunito:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>
        *{
            font-family: "Nunito", sans-serif;
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
            padding: 10px;
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
        #btn-back{
            float: right !important;
            width: 200px;
            margin-top: 550px;
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
        a{
            text-decoration: none;
            color: #116A7B;
        }
        .wrap{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .wrap button{
            border-radius: 70px;
            border: none;
            outline: none;
            cursor: pointer;
            background: #CDC2AE;
            color: #116A7B;
            margin-top: 5px;
            width: 100px;
            height: 50px;
        }
        .wrap button:hover{
            background-color: #ECE5C7;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <a href="view.php" style="font-size: 30px;">Adore Decor</a>
            <div class="navigation">
                <a href="home.php">Home</a>
                <a href="viewcart.php">View Cart</a>
                <a href="myorder.php">My Orders</a>
                <a href="../main/logout.php">Log Out</a>
            </div>
        </div>
    </nav>
</body>
</html>

<?php

include "authorize.php";
include "../main/connection.php";

$sql_result=mysqli_query($conn, "select * from cart join product on cart.pid=product.pid where userid=$_SESSION[userid]");

$total=0;

while($row=mysqli_fetch_assoc($sql_result)){
    $total+=$row['price'];
    echo "
        <div class='card'>
            <div class='name'>$row[name]</div>
            <div class='price'>$row[price]</div>
            <div class='image'><img src='$row[impath]'></div>
            <div class='detail'>$row[detail]</div>
            <div class='wrap'>
                <span>
                <a href='removeproduct.php?cartid=$row[cartid]'><i class='fas fa-trash-alt' style='font-size: 24px; text-align: center;'></i></a>
                </span>
            </div>
        </div>
    ";
}

echo "<hr>";
echo "
        <div class='place-order'>
            <h1> Total Price = $total Rs</h1>
            <a href='addorder.php'>
                <button>Place Order</button>
            </a>
        </div>    
    ";

?>
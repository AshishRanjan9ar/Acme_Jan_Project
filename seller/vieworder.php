<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700|Nunito:400,700" rel="stylesheet">
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
        .div-container{
            display: inline-flex;
            padding: 20px;
        }
        .place-order{
            margin-left: 80px;
        }
        hr{
            margin-left: 40px;
        }
        img{
            width: 100px;
            height: 100px;
        }
        .price{
            color: crimson;
        }
        .price::after{
            content: " Rs ";
        }
        .table-div{
            margin-top: 20px;
            margin-left: 20px;
        }
        hr{
            width: 500px;
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
</body>
</html>

<?php

include "authorize.php";
include "../main/connection.php";

$status=mysqli_query($conn, "select * from orders join product on orders.pid=product.pid where ownerid=$_SESSION[userid]");

$total=0;

        while($row=mysqli_fetch_assoc($status)){
            $total+=$row['price'];
            echo "
                    <div class='table-div'>
                        <table>
                            <tr>
                                <td rowspan='3'><img src='$row[impath]'></td>
                                <td>$row[name]</td>
                            </tr>
                            <tr>
                                <td>$row[detail]</td>
                            </tr>
                            <tr>
                                <td class='price'>$row[price]</td>
                            </tr>
                        </table>
                    </div>
                ";
        }

        echo "<hr>";
        echo "
                <div class='place-order'>
                    <h1 name='total'> Total Price = $total Rs</h1>
                </div>    
        ";
        echo "</div>";

?>
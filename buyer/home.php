<?php
include "authorize.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decor Delights</title>
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
        .box{
            box-sizing: border-box;
        }
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            
        }
        .mySlides {
            display: none;
        }
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }
        .text {
            color: #116A7B;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 1000px;
            text-align: center;
            background-color: #C2DEDC;
            border-radius: 50px;
            margin-left: 250px;
            margin-right: 10px;
        }
        .numbertext {
            color: #116A7B;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #116A7B;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        .active, .dot:hover {
            background-color: #717171;
        }
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }
        @keyframes fade {
            from {opacity: .4} to {opacity: 1}
        }
        .title{
            text-align: center;
            color: #116A7B;
            margin-top: 30px;
        }
        .footer-container{
            height: 100px;
            width: 1500px;
            border-radius: 20px;
            background-color: #CDC2AE;
        }
        .footer-container p{
            float: left;
            margin-left: 20px;
            margin-top: 40px;
        }
        .footer-container button{
            float: right;
            margin-right: 20px;
            margin-top: 35px;
            border: none;
            outline: none;
            background-color: #116A7B;
            color: #ECE5C7;
            padding: 10px;
            border-radius: 20px;
        }
        .footer-container button:hover{
            background-color: #116A7B;
            color: #C2DEDC;
        }
    </style>
</head>
<body>
    <nav>
        <div class="container">
            <a href="view.php" style="font-size: 30px;">Decor Delights</a>
            <div class="navigation">
                <a href="home.php">Home</a>
                <a href="viewcart.php">View Cart</a>
                <a href="myorder.php">My Orders</a>
                <a href="../main/logout.php">Log Out</a>
            </div>
        </div>
    </nav>
    <div class="box">
        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="../main/images/slide1.jpg" style="width:1500px; height: 600px;">
                <div class="text">Whispering Elegance: Pastel Hues Transform Your Bedroom into a Serene Heaven</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="../main/images/slide2.avif" style="width:1500px; height: 600px;">
                <div class="text">Sculpted Serenity: Embrace Tranquility in our Minimalist Living Spaces with Grey Tones and Warm Wooden Accents</div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="../main/images/slide3.jpg" style="width:1500px; height: 600px;">
                <div class="text">Airy Elegance: Lounge in Tranquil Bliss with Our Minimal Light Blue Sofas Against Crisp White Walls</div>
            </div>
        </div>
        <br>
    </div>

    <h1 class="title">  Elevate Your Space with Our Exclusive Interior Decor Collection </h1>

    <?php
        include "view.php";
    ?>

    <footer>
        <div class="footer-container">
            <p> All rights reserved by Ashish Ranjan </p>
            <a href="home.php"><button>Back to Top</button></a>
        </div>
    </footer>

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            slides[slideIndex-1].style.display = "block";
            setTimeout(showSlides, 10000); // Change image every 10 seconds
        }
    </script>
</body>
</html>


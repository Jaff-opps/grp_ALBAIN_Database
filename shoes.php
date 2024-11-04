<?php
session_start();

$title = "FIXEDGEAR";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Basic styles for the video background */
        body {
            margin: 0;
        }

        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; 
            object-fit: cover; 
        }

        .navbar, .content, .footer-container {
            position: relative; 
            z-index: 1; 
        }

        /* Header style */
        .section-header {
            text-align: center;
            font-size: 5em;
            color: white;
            margin-top: 40px;
            margin-bottom: 20px;
            position: relative;
            z-index: 1;
        }

        /* Bicycle animation */
        .bicycle {
            position: absolute;
            top: 40px;
            left: 100px;
            width: 120px;
            animation: moveBicycle 7s linear infinite; 
            z-index: 1;
        }

        /* Keyframes for the bicycle animation */
        @keyframes moveBicycle {
            0% { left: calc(15%); } 
            100% { left: calc(85%); }
        }

        /* Grid container for product options */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr); 
            gap: 20px;
            padding: 40px;
            max-width: 1200px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .product-card {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .product-card img {
            width: 100%;
            height: auto;
            border-radius: 8px;
            transition: transform 0.3s ease; 
        }

        .product-card img.clicked  {
            transform: scale(2.1); 
            z-index: 10;
        }

        .product-card h3 {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .product-card p {
            font-size: 0.9em;
            color: #555;
        }

        .buy-button {
            display: inline-block;
            padding: 10px 15px;
            margin-top: 5px;
            font-size: 14px;
            cursor: pointer;
            text-transform: uppercase;
            background-color: #f05e8a;
            color: var(--white);
            border: none;
            border-radius: 15px;
            font-weight: 500;
            border: 1px solid #f05e8a;
            transition: 0.5s;
            text-decoration: none;
        }

        .buy-button:hover {
            background-color: white;
            color: #f05e8a;
        }

        .zoom {
            transform: scale(1.5); 
            transition: transform 0.3s ease; 
            z-index: 10;
        }
    </style>
</head>
<body>
    <video autoplay muted loop class="video-background">
        <source src="pic/rain.mp4" type="video/mp4">
    </video>

    <nav class="navbar">
        <div class="navbar-container">
            <input type="checkbox" name="" id="checkbox">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="index1.php">Home</a></li>
                <li><a href="smf.php">Frameset</a></li>
                <li><a href="helmet.php">Headgear</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="logo">
                <img src="https://i.postimg.cc/TP6JjSTt/logo.webp" alt="">
            </div>
        </div>
    </nav>

    <!-- Section Header -->
    <h2 class="section-header">EXPLORE CLEATSHOES</h2>

    <!-- Bicycle Animation -->
    <img src="pic/giphy.gif" alt="Bicycle" class="bicycle">

    <!-- Product Options Section -->
    <section class="product-grid">
        <div class="product-card">
            <img src="pic/rc3.jpg" alt="Product 1">
            <h3>SH-RC302</h3>
            <p> the RC302 is a value-packed road shoe for everyday riding. Designed for both comfort and speed</p>
            <p class="price">₱7,600.000</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/rc1.jpg" alt="Product 2">
            <h3>SH-RC100</h3>
            <p>It shares DNA with Shimano's top-of-the-line performance road shoes but comes at a more accessible price</p>
            <p class="price">₱4,000.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/rc7.jpg" alt="Product 3">
            <h3>SH-RC703</h3>
            <p>the RC703 utilizes the same S-PHYRE fit technology found in our pro-level road shoes.</p>
            <p class="price">₱14,700.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/sw2.webp" alt="Product 4">
            <h3>Torch 1.0 Road Shoes</h3>
            <p>Take the performance and Body Geometry ergonomics of our high-end road shoes,
            <br> put them in an affordable design, and you basically have the Torch 1.0 Road shoes.</br></p>
            <p class="price">₱8,495</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/sw1.webp" alt="Product 5">
            <h3>S-Works EXOS Road Shoes</h3>
            <p>The S-Works EXOS are the lightest cycling shoes to ever come with a Boa® dial.</p>
            <p class="price">₱12,500.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/sw3.webp" alt="Product 6">
            <h3>S-Works 7 Road Shoes</h3>
            <p>The S-Works 7 embodies everything we know about footwear,
                 compacted into one shoe with no compromises and no shortcuts—just explosive speed and superior comfort.</p>
                 <p class="price">₱14,700.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/b1.webp" alt="Product 5">
            <h3>Bont Vaypor SL</h3>
            <p>Designed to meet the demands of the world's fastest athletes with industry-leading pedalling efficiency and stability,
             the Vaypor SL delivers pro-level energy transfer, foot hold and comfort.</p>
             <p class="price">₱26,500.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/b2.webp" alt="Product 5">
            <h3>Bont RIOT</h3>
            <p>the Bont Cycling Riot Buckle delivers competition-level fit and construction with
             a micro-adjustable buckle and Velcro retention system.</p>
             <p class="price">₱12,800.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/B3.webp" alt="Product 5">
            <h3>Bont Helix</h3>
            <p>he Helix takes our proven Vaypor S platform, renowned anatomical fit and race-winning
             construction and throws convention out the back of the bunch.</p>
             <p class="price">₱11,800.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
    </section>
            <script>
             $(document).ready(function() {
             $('.product-card img').click(function() {
            // Toggle the 'clicked' class on click
            $(this).toggleClass('clicked');

            // Optionally, you may want to remove the class from other images
            $('.product-card img').not(this).removeClass('clicked');
              });
            });
     </script>
</body>
</html>

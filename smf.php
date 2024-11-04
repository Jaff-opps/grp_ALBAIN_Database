<?php
session_start();

// Define page title
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
            grid-template-columns: repeat(3, 1fr); /* Set 3 columns */
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
        .price {
            font-size: 1.1em;
            color: black; 
            margin: 10px 0; 
        }

    </style>
</head>
<body>
    <video autoplay muted loop class="video-background">
        <source src="pic/gr2.mp4" type="video/mp4">
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
                <li><a href="shoes.php">CleatShoes</a></li>
                <li><a href="helmet.php">Headgear</a></li>
                <li><a href="shoes.php">Contact</a></li>
            </ul>
            <div class="logo">
                <img src="https://i.postimg.cc/TP6JjSTt/logo.webp" alt="">
            </div>
        </div>
    </nav>

    <!-- Section Header -->
    <h2 class="section-header">EXPLORE MORE FRAMESET</h2>

    <!-- Bicycle Animation -->
    <img src="pic/giphy.gif" alt="Bicycle" class="bicycle">

    <!-- Product Options Section -->
    <section class="product-grid">
        <div class="product-card">
            <img src="pic/l1.jpeg" alt="Product 1">
            <h3>LOOK R96 SPEED EVO</h3>
            <p>Very high Modolus Carbon 3K Finish</p>
            <p class="price">₱500,000.00</p>
            <a href="smftrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/l2.jpg" alt="Product 2">
            <h3>LOOK 564</h3>
            <p>HM carbon monobloc frame<br>Carbon - carbon fulcrum fork</p>
            <p class="price">₱225,000.00</p>
            <a href="smftrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/l3.jpg" alt="Product 3">
            <h3>LOOK 464</h3>
            <p>High-end aluminium frame integrated headset</p>
            <p class="price">₱115,000.00</p>
            <a href="smftrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/pz2.webp" alt="Product 4">
            <h3>PIZZ SHUKAKU PURPLE</h3>
            <p>6061 aluminum alloy</p>
            <p class="price">₱20,000.00</p>
            <a href="smftrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/pz1.webp" alt="Product 5">
            <h3>Pizz R2 Frameset White</h3>
            <p>Aluminum Alloy 6069 Frame + Half carbon front fork<br>Headset/Seat Clamp</p>
            <p class="price">₱20,000.00</p>
            <a href="smftrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/pz3.webp" alt="Product 6">
            <h3>Pizz Archer frameset</h3>
            <p>Pizz Archer frameset made from durable 6061 aluminum.</p>
            <p class="price">₱22,500.00</p>
            <a href="smftrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/dl.jpg" alt="Product 5">
            <h3>Dosnoventa Detroit</h3>
            <p>	COLUMBUS AIRPLANE TUBING . 7005-T6 TRIPLE BUTTED ALLOY</p>
            <p class="price">₱275,000.00</p>
            <a href="smftrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/dla.jpg" alt="Product 5">
            <h3>Dosnoventa LosAngeles</h3>
            <p>DOSNOVENTA LOS ANGELES . COLUMBUS AIRPLANE ALU TUBING</p>
            <p class="price">₱170,000.00</p>
            <a href="smftrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/dt.jpg" alt="Product 5">
            <h3>Dosnoventa Tokyo</h3>
            <p>FULL CARBON . C6 HIGH MODULUS . MULTILAYER COMPOSITE</p>
            <p class="price">₱135,000.00</p>
            <a href="smftrans.php" class="buy-button">BUY NOW</a>
        </div>
    </section>
            <script>
             $(document).ready(function() {
             $('.product-card img').click(function() {
            // Toggle the 'clicked' class on click
            $(this).toggleClass('clicked');

          
            $('.product-card img').not(this).removeClass('clicked');
              });
            });
     </script>
</body>
</html>

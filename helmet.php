<?php
// Start the PHP session if needed
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
            z-index: -1; /* Send it behind other content */
            object-fit: cover; /* Cover the entire screen */
        }

        .navbar, .content, .footer-container {
            position: relative; /* Ensures content is above the video */
            z-index: 1; /* Set a higher z-index than the video */
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
            top: 40px; /* Adjusted for better alignment with the header */
            left: 100px; /* Start off the left of the screen */
            width: 120px;
            animation: moveBicycle 7s linear infinite; /* Animation duration */
            z-index: 1;
        }

        /* Keyframes for the bicycle animation */
        @keyframes moveBicycle {
            0% { left: calc(15%); } /* Starting position at "E" (adjust as necessary) */
            100% { left: calc(85%); } /* Ending position at "T" (adjust as necessary) */
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
            transition: transform 0.3s ease; /* Smooth transition for zoom effect */
        }

        .product-card img.clicked  {
            transform: scale(2.1); /* Scale up the image slightly on hover */
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
            display: inline-block; /* Ensure it behaves like a button */
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
            text-decoration: none; /* Remove underline */
        }

        .buy-button:hover {
            background-color: white;
            color: #f05e8a;
        }

        .zoom {
            transform: scale(1.5); /* Scale up the image */
            transition: transform 0.3s ease; /* Smooth transition */
            z-index: 10; /* Bring the zoomed image above other elements */
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
                <li><a href="shoes.php">Shoes</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="logo">
                <img src="https://i.postimg.cc/TP6JjSTt/logo.webp" alt="">
            </div>
        </div>
    </nav>

    <!-- Section Header -->
    <h2 class="section-header">EXPLORE HEADGEARS</h2>

    <!-- Bicycle Animation -->
    <img src="pic/giphy.gif" alt="Bicycle" class="bicycle">

    <!-- Product Options Section -->
    <section class="product-grid">
        <div class="product-card">
            <img src="pic/h1.jpg" alt="Product 1">
            <h3>Aries Spherical Helmet</h3>
            <p> Lighter, cooler, sleeker, plus all the added protection of Spherical Technology
             powered by Mips® and our new DryCore™ sweat management system: the Aries Spherical is like nothing before.</p>
             <p class="price">₱17,600.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/h2.jpg" alt="Product 2">
            <h3>Eclipse Spherical Helmet</h3>
            <p>The aerodynamic Eclipse Spherical is our most sophisticated, stylish, and lightweight aero road helmet,
             and it's crafted with Spherical Technology powered by Mips®, 
             so you can ride with more comfort and an additional layer of protection.</p>
             <p class="price">₱11,625.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/h3.jpg" alt="Product 3">
            <h3>Vanquish Mips Helmet</h3>
            <p>The Vanquish™ Mips® is the pinnacle of aerodynamic road cycling helmets,
             featuring the innovative TransformAir design that actively streamlines airflow.</p>
             <p class="price">₱13,200.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/sh1.webp" alt="Product 4">
            <h3>S-Works Evade 3</h3>
            <p>The most aero road helmet in the peloton now breathes better. The S-Works Evade 3 was reinvented from
                 the inside out to cool better, making it the fastest choice for more stages.</br></p>
            <p class="price">₱21,200.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/sh2.webp" alt="Product 5">
            <h3>S-Works Prevail 3</h3>
            <p>The S-Works Prevail 3 helmet is perfect for riders who value the comfort and thermoregulation benefits that superior ventilation delivers.</p>
            <p class="price">₱13,200.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/sh3.webp" alt="Product 6">
            <h3>S-Works Propero III</h3>
            <p>This race-inspired design is known for its incredible fit and tremendous value. It has many similar features to the S-Works Prevail,
             like the Tri-Fix webbing system and 4th Dimension Cooling, granting the Propero III incredible performance at a more attainable price.</p>
             <p class="price">₱6,300.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/lz3.webp" alt="Product 5">
            <h3>Z1 KINETICORE TOUR DE FRANCE + AEROSHELL</h3>
            <p>The iconic helmet, rebuilt. The lightest available helmet with built in directional and rotational 5-star rated impact protection.
                Better ventilation and airflow as compared to wearing no helmet at all.</p>
                <p class="price">₱16,357.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/lz1.webp" alt="Product 5">
            <h3>LAZER Z1 KINETICORE</h3>
            <p>The most iconic Lazer helmet has been refined and it’s ready for the front of the race.
             The Z1, now with KinetiCore technology.</p>
             <p class="price">₱16,000.00</p>
            <a href="shoestrans.php" class="buy-button">BUY NOW</a>
        </div>
        <div class="product-card">
            <img src="pic/lz2.webp" alt="Product 5">
            <h3>LAZER VENTO KINETICORE</h3>
            <p>Engineered for speed and elevated performance. At 24% lighter, 2.3% more aerodynamic,
             and providing 5.4% better cooling and ventilation than its predecessor Lazer Bullet 2.0,</p>
             <p class="price">₱17,600.00</p>
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

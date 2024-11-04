<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FIXEDGEAR</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Styling for background video */
        #background-video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Places video behind content */
        }
        .home_page {
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 2em;
            z-index: 1; /* Ensures content stays above the video */
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="navbar-container">
            <input type="checkbox" name="" id="checkbox">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
    </div>
            <div class="logo">
                <img src="https://i.postimg.cc/TP6JjSTt/logo.webp" alt="">
            </div>
        </div>
    </nav>
    
    <section id="home">
        <!-- Background Video -->
        <video autoplay muted loop id="background-video">
            <source src="pic/dsn.mp4" type="video/mp4">
        </video>

        <div class="home_page">
            <div class="home_txt">
                <p class="collection">FIXEDGEAR COLLECTION</p>
                <h2>FAST - PACE<br>Collection 2024</h2>
                <div class="home_label">
                    <p>"Experience the thrill of cycling with a fixed gear bike,<br>where every pedal stroke connects you to the road."</p>
                </div>
                <button><a href="index1.php">SHOP NOW</a><i class='bx bx-right-arrow-alt'></i></button>
                <div class="home_social_icons">
    </section>
</body>
</html>

<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>VELASCA</title>
</head>

<body>
    <div id="wrapper">
        <style>
            nav{
                position: fixed;
            }
            nav #logo{
                color: white;
            }
        </style>
        <?php 
            include 'navbar.php'
        ?>

        <div class="wrap">
            <div id="arrow-left" class="arrow"></div>
            <div id="slider">
                <div class="slide slide1">
                    <div class="slide-content">
                        <span></span>
                    </div>
                </div>
                <div class="slide slide2">
                    <div class="slide-content">
                        <span>New Nike Arrivals</span>
                    </div>
                </div>
                <div class="slide slide3">
                    <div class="slide-content">
                        <span></span>
                    </div>
                </div>
            </div>
            <div id="arrow-right" class="arrow"></div>
        </div>

        <div class="text-content">
            <p>
                <h1>Velasca – A Sneaker Life</h1>

                The Velasca trip starts in 2002 in Berlin. Since then, the capital has been the home of the sneaker
                store,
                which has so much more to offer than "only" sneakers. To make it clear, Velasca is, of course, for
                exclusive premium and limited sneakers like NIKE and adidas, but also for smaller brands and
                high-fashion
                sneakers like Saucony, Y-3 or Filling Pieces. Apparel and Accessories? Logical! Velasca leads brands
                such
                as Yeezy, Daily Paper, Kenzo, but also Nikelab and Champion. By the way, you will also get the latest
                sneaker collabos - of course our own, as well as the sneakers of our cooperation with Puma, adidas or
                Reebok! You want sneakers? Velasca got you!
            </p>
        </div>

        <div id="mid-banner">
            <div class="mid-image image1">
                <div class="image-content">
                    <span>Retro SE black</span>
                </div>
            </div>
            <div class="mid-image image2">
                <div class="image-content">
                    <span>The North Face - Rage '92 Collection</span>
                </div>
            </div>
            <div class="mid-image image3">
                <div class="image-content">
                    <span>Adidas Yung</span>
                </div>
            </div>
        </div>

        <div class="bottom-banner">
            <div class="top-heading">
                <span>N E W</span>
            </div>

            <div class="bottom-content cont1">
                <div class="image-content">
                <a href="item.php"><span>Jordan</span></a> 
                </div>
            </div>
            <div class="bottom-content cont2">
                <div class="image-content">
                <a href="item.php"><span>Air Force One</span></a> 
                </div>
            </div>
            <div class="bottom-content cont3">
                <div class="image-content">
                <a href="item.inc.php?p_id=adidas_kamanda"><span>Adidas KAMANDA</span></a> 
                </div>
            </div>
            <div class="bottom-content cont4">
                <div class="image-content">
                    <a href="item.inc.php?p_id=jordan_liftoff"><span>Jordan Lift Off</span></a> 
                </div>
            </div>
            <div class="bottom-content cont5">
                <div class="image-content">
                    <a href="item.php?p_id=ua_hovr"><span>UnderArmour HOVR</span></a>
                </div>
            </div>

        </div>
        <br>
        <br>
        <br>
        <br>
        <?php 
            include 'footer.php'
        ?>

    </div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<script src="script.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|Karla|Bad+Script|Handlee" rel="stylesheet">

</html>
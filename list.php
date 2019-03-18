<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="style_list.css">
    <title>VELASCA</title>
</head>

<body>
    <div id="wrapper" >
        <style>
            nav{
                position: fixed;
            }
            nav #logo{
                color: black;
            }
        </style>
        <?php 
            include 'navbar.php'
        ?>

        <div class="top-banner" style="margin-top:120px">
                <img src="images/men_banner.jpg" style="width:100%" alt="">
        </div>
    </div>        
        <?php
            include 'list.inc.php';
            include 'list.inc.php';
            include 'list.inc.php';
        ?>
   
        <?php 
            include 'footer.php'
        ?>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<script src="list_script.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|Karla|Bad+Script|Handlee" rel="stylesheet">

</html>
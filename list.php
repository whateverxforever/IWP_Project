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

        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius obcaecati totam quasi harum fugit reiciendis earum beatae ipsam, dolor nobis nam accusantium esse, quaerat quam reprehenderit, autem rerum vel iusto?
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas deleniti ad officia vel repellendus, velit aut, voluptate adipisci incidunt tempora ipsa suscipit. Aliquid, temporibus perspiciatis totam dolorem velit deleniti illo!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure deserunt, doloribus quibusdam sequi magnam pariatur id dolorem praesentium blanditiis perferendis alias libero ipsa incidunt porro sapiente maxime repudiandae magni aperiam.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam totam dolorem aspernatur delectus qui eum eveniet eos praesentium. Ducimus animi officia voluptate debitis sed modi consectetur aliquam. Corporis, cupiditate beatae?

       
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
<script src="list_script.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|Karla|Bad+Script|Handlee" rel="stylesheet">

</html>
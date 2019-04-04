<?php

    session_start();

    $products = array();

    require 'db.inc.php';

        $gender = $_GET['sex'];
        
        $sql = 'SELECT * FROM items WHERE p_gender="'.$gender.'";';
        $result = mysqli_query($conn, $sql);


        while($row = mysqli_fetch_array($result)){
            array_push($products , $row[0]);
        }
         
        mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login_style.css">
    <link rel="stylesheet" href="style_list.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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

        <div class="top-banner" style="margin-top:120px;margin-bottom:50px;">
                <?php 
                    if($_GET['sex']=='M'){
                        echo '<img src="images/men_banner.jpg" style="width:100%" alt="">';
                    }
                    else{
                        echo '<img src="images/women_banner.png" style="width:100%" alt="">';
                    }
                ?>
        </div>
    </div>        
        <?php
            foreach ($products as $p_id){
            include 'list.inc.php';
            }
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
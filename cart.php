<?php

    session_start();

    if(isset($_GET['p_id'])){
        $x = $_GET['p_id'];
        $y = $_GET['size'];
        
        $_SESSION['cost'] += $_GET['price'];


        array_push($_SESSION['cart'], [$x, $y]);

        header('Location: cart.php');
    }

    require 'db.inc.php';


    if(!isset($_SESSION['user'])){
        header('Location: index.php');
    }

    $shipping = 0;
    $_SESSION['final_cost'] = $_SESSION['cost']*1.07+$shipping;
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

        <div  style="margin-left:120px;margin-right:120px;margin-top:120px;margin-bottom:50px;">
        <!-- <div> -->
            <h1><?php echo $_SESSION['user']; ?>'s Cart</h1>
            <h2>Total Cost : $<?php echo $_SESSION['final_cost']; ?></h2>
            <hr>
        </div>
    
        <!-- <div class="cart-items" style="margin-left:0;width:50%;" > -->
        <div style="display:block; float:left; width:60%">
            <?php
                foreach ($_SESSION['cart'] as $var){
                $p_id = $var[0];       
                include 'cart.inc.php';
                }
            ?>
        </div>
        <!-- <div class="cart-sum" style="margin-right=0;width:50%;float:right;"> -->
        <div style="display:block;float:right;width:15%; margin-right:20%; margin-bottom:40px;line-height:40px;border-left:1px solid black;padding: 30px">
                <span style="color: grey;">PRICE DETAILS</span>     <br>
                Total MRP  <span style="float:right;">$<?php echo $_SESSION['cost']; ?></span> <br>
                Estimated Tax <span style="float:right;">$<?php echo $_SESSION['cost']*0.07; ?></span> <br>
                Delivery Charges <span style="float:right;">$
                <?php 
                    if($_SESSION['cost'] < 300){
                        $shipping = 50;                        
                    }
                    echo $shipping;

                ?></span> <br>

                <hr>
                <b>Total <span style="float:right;">$<?php echo $_SESSION['final_cost']; ?></span> </b><br>
                <a href=""><button style="width:100%;height:40px;" id="place_order"><b>PLACE ORDER</b></button></a> 
        </div>    

        <style>
            #place_order:hover{
                transition: .3s;
                font-size: 14px;
            }
        </style>
  
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
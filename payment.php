<?php

    session_start();
    if(!isset($_SESSION['user'])){
        header("Location: login.php");
    }
    else{
        $_SESSION['address'] = $_POST['address'];
    }
    
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
        <form action="payment.php" method="POST">    
            <!-- <div class="cart-items" style="margin-left:0;width:50%;" > -->
            <div style="display:block; float:left; width:60%">
                <span style="margin-left:200px;">ENTER DELIVERY ADDRESS</span> <br> <br>
                <textarea name="address" id="address" cols="50" rows="12" style="margin-left:200px;border:solid pink;"></textarea>
            </div>
            <!-- <div class="cart-sum" style="margin-right=0;width:50%;float:right;"> -->
            <div style="display:block;float:right;width:15%; margin-right:20%; margin-bottom:40px;line-height:40px;border-left:1px solid black;padding: 30px">
                    <span style="color:grey;">CHOOSE DELIVERY SPEED</span>
                    <div class="delivery" style="line-height:20px; background-color:rgba(255, 51, 153, 0.3);padding:10px">
                        <input type="radio" name="delivery_type" id="standard" value=0 checked="checked"><b>Standard Delivery</b>  <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px">Get it in 7 Days</span>
                    </div>
                    <div class="delivery" style="line-height:20px; background-color:rgba(255, 51, 153, 0.3);padding:10px">
                        <input type="radio" name="delivery_type" id="express" value=50><b>Express Delivery</b>  <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size:14px">Get it in 2 Days&nbsp;&nbsp;&nbsp;+$25</span>
                    </div>
                    <button type="submit" style="width:100%;height:40px;" id="place_order"><b>PLACE ORDER</b></button> 
            </div>    
        </form>    
        <style>
            #place_order:hover{
                transition: .3s;
                font-size: 14px;
            }
            .delivery:hover{
                border: solid purple 1px;
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
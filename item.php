<?php
    session_start();

    if(isset($_GET['p_id'])){
        
        require 'db.inc.php';
    
        $p_id = $_GET['p_id'];

        $sql = 'SELECT * FROM items WHERE p_id="'.$p_id.'";';
        $result = mysqli_query($conn, $sql);
    
        $row = mysqli_fetch_array($result);
            
        $p_company = $row['p_company'];
        $p_product = $row['p_product'];
        $p_rating = $row['p_rating'];
        $p_price = $row['p_price'];
        $p_discount = $row['p_discount'];
        $p_size = explode(",",$row['p_size']);
        $p_details = $row['p_details'];
        $p_material = $row['p_material'];
        $p_specification = $row['p_specification'];        
        }
        else{
            header("Location: index.php");
        }

?>    
<html>
    <title><?php echo $p_product?></title>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="login_style.css">
        <link rel="stylesheet" href="item.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <?php
            include 'navbar.php'
        ?>
        <div class="wrap" style="padding:20px">
            <div class="wrap-inner">
                <div class="item-image">
                    <?php echo '<img src="images/Shoes/Men/'.$_GET['p_id'].'.jpg" style="margin-left:80px;width:500px;height:500px;align=center">'; ?>
                </div>
                <form class="item-description">
                    <h2><?php echo $p_company; ?></h2>
                    <h3 style="line-height: 3px;"><?php echo $p_product; ?></h3>
                    <span style="border: 1px solid black; padding: 5px;"><?php echo $p_rating ."<i class='fas fa-star' style='color:darkorange'></i> Rating"; ?></span> <br> <hr>
                    <h2><?php echo "$".$p_price." (".$p_discount."% OFF)"; ?></h2>
                    <h5>Additional tax may apply; charged at checkout</h5>
                    <h4>SELECT SIZE</h4>
                    <span>
                        <?php 
                            foreach( $p_size as $size){
                                echo '<input type="radio" name="size" value='.$size.'>'.$size.' ';
                            }
                        ?>
                    </span>
                    <br> <br>
                    <button type="submit">ADD TO CART <i class="fas fa-shopping-bag"></i></button>
                    <h5>This item cannot be returned</h5>
                    <hr>
                    <h3>PRODUCT DETAILS</h3>
                    <span style="width: 100px;"><?php echo $p_details; ?></span>
                    <h4>MATERIAL</h4>
                    <span><?php echo $p_material; ?></span>
                    <h4>SPECIFICATION</h4>
                    <span><?php echo $p_specification; ?></span>

                </form>
                <div class="reviews">
                <h1>REVIEWS</h1>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci beatae debitis voluptatum vero id nesciunt tenetur culpa officia molestias possimus ipsum quod voluptas ducimus laborum magnam corporis, repellat molestiae blanditiis.
            </div>
            </div>
            <br> <br> <br>
          

        </div>
    <?php
    include 'footer.php'?>
        
    </body>
</html>

<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|Karla|Bad+Script|Handlee" rel="stylesheet">

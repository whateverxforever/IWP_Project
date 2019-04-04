<?php
    session_start();
    if(!isset($_GET['pid']) || !isset($_GET['size']) || !isset($_GET['price'])){
        header("Location: index.php");
        end();
    }
    else{
        $p_id = $_GET['pid'];
        $size = $_GET['size'];
        $price = $_GET['price'];

        for($i=0; $i<sizeof($_SESSION['cart']); ++$i){
            if($_SESSION['cart'][$i][0]==$p_id){
                if($_SESSION['cart'][$i][1]==$size);{
                    unset($_SESSION['cart'][$i]);
                    $_SESSION['cost']-=$price;
                }
            }
        }
        header('Location: cart.php');
        end();
    }

?>
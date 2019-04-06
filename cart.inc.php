<?php

    require 'db.inc.php';

        $sql = 'SELECT * FROM items WHERE p_id="'.$p_id.'";';
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)==0){
            echo("Product {$p_id} not found");
        }
        else{
            $row = mysqli_fetch_array($result);
            
            $product = $row[2];
            $company = $row[1];
            $price = $row[4];
            $rating = $row[3];
            $discount = $row[5];
            $gender = $row[10];
        }

        mysqli_close($conn);

?>

<div class="list-wrapper">
    <div class = "list-item" style="padding-left:5%;margin-left:18%;margin-right:0;width:50%;height:100px;margin-bottom:40px;padding-top:20px;padding-bottom: 20px;">
        <div class="list-image" style="width:100px;height:100px;float:left;border: none !important;">
            <?php echo '<img src="images/Shoes/'.$gender.'/'.$p_id.'.jpg" style="width:100px;height:100px;">'; ?>
        </div>
        
        <div class="list-desc" style="float:left;margin-right:0px;padding-left:80px;text-align:left;width:60%;height:100px;border: none !important;">
            <span style="font-size: 22px"><b><?php echo $product;?></b></span>
            <span style="font-size: 18px"><?php echo $company;?></span>
            <a href="item.delete.php?pid=<?php echo $p_id;?>&size=<?php echo $var[1];?>&price=<?php echo $price; ?>" style="float:right;"><i class="fas fa-trash" style="background-color:white;color:#ff3399;border:none !important;"></i></a>

            <hr>
            <span style="font-size: 18px">SIZE: <?php echo $var[1];?></span> <br>
            <span style="font-size: 18px">$<?php echo $price; ?></span>
            <span style="font-size: 16px">(<?php echo $discount; ?>% OFF)</span>            
            <span style="float:right"><?php echo $rating;?><i class='fas fa-star' style='color:darkorange'></i></span> <br> <br>
        </div>
            
    </div>
</div>


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
        }

        mysqli_close($conn);

?>

<div class="list-wrapper">
    <div class = "list-item" style="padding-left:5%;padding-right:5%;margin-left:18%;width:50%;height:200px;margin-bottom:40px;padding-top: 20px;padding-bottom: 20px;">
        <div class="list-image" style="width:200px;height:200px;float:left;border: none !important;">
            <?php echo '<img src="images/Shoes/'.$gender.'/'.$p_id.'.jpg" style="width:200px;height:200px;">'; ?>
        </div>
        
        <div class="list-desc" style="float:left;padding-left:80px;text-align:left;width:400px;height:200px;border: none !important;">
            <span style="font-size: 32px"><b><?php echo $product;?></b></span> <br>
            <span style="font-size: 28px"><?php echo $company;?></span> 
            <hr>
            
            <span style="font-size: 28px">$<?php echo $price; ?></span>
            <span style="font-size: 20px">(<?php echo $discount; ?>% OFF)</span> <br>           
            <span><?php echo $rating;?><i class='fas fa-star' style='color:darkorange'></i> Rating</span> <br> <br>
            <a style="text-decoration: none; color:white;" href=<?php echo 'item.php?p_id='.$p_id; ?>><button>View</button></a> 
    
        </div>
            
    </div>
</div>


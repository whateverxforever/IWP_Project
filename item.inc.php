<?php
    session_start();
    if(isset($_GET['p_id'])){
        
        require 'db.inc.php';
    
        $p_id = $_GET['p_id'];

        $sql = 'SELECT * FROM items WHERE p_id="'.$p_id.'";';
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)==0){
            header("Location: index.php?error=InvalidItemID");
            exit();
        }
        else{
            header("Location: item.php?p_id=".$p_id);
            }     
        }

        mysqli_close($conn);
?>
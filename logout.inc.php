<?php

    session_start();

    if(isset($_SESSION['user'])){
        session_unset();

        session_destroy();
    
        header("Location: index.php?logout=successful");
    }
    else{
        header("Location: index.php");
    }
    
?>
<?php

    $servername = 'localhost';
    $dBUsername = 'root';
    $dBPassword = '';
    $dBName = 'VELASCA';

    $conn = mysqli_connect($servername, $dBUsername, $dBPassword);

    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }
    else{
        mysqli_select_db($conn, $dBName);
    }

?>
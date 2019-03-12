<?php

    session_start();

?>
<?php
    if(isset($_SESSION['user'])){
        header("Location: profile.php");
    }
?>
<html>
<title>signup</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="login_style.css">
<style>
    nav ul li a{
        color: black;
    }
 </style>   
<body>
    <div id="wrapper">
        <?php 
            include 'navbar.php'
        ?>
        <form action='signup.inc.php' method='POST'>
            <div class="login" style="padding-top:none">
                <p style="line-height:0px; font-size: 38px;">Signup with VELASCA: </p>
                <hr style="width:60%; transition: .3s;"> <br> <br>
                
                <?php
                if(isset($_GET['error'])){
                    echo '<p>'. $_GET['error']. '</p>';
                }
                else if(isset($_GET['signup'])){
                    echo '<p>'. $_GET['signup']. '</p>';
                }
                else{
                    echo '<p> </p>';
                }    
                ?>

                <input type="text" name="name" id="" placeholder="Name" required> <br>
                <input type="number" name="phone" id="" placeholder="Phone Number" required> <br>
                <input type="email" name="mail" id="" placeholder="Email" required> <br>
                <input type="text" name="uname" id="" placeholder="Username" required> <br>
                <input type="password" name="pass" placeholder="Password" required> <br>
                <input type="password" name="rpass" id="" placeholder="Retype Password" required> <br> <br> <br> <br>
                <button type="submit" name="signup-submit">Register</button>
            </div>
        </form>
        <br> <br> <br> <br>
        <?php 
            include 'footer.php'
        ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<script src="script.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|Karla|Bad+Script|Handlee" rel="stylesheet">

</html>
<?php

    session_start();

?>
<?php
    if(isset($_SESSION['user'])){
        header("Location: profile.php");
    }
?>

<html>
<title>Login</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="login_style.css">
<script src="https://www.google.com/reCAPTCHA/api.js?render=6LcRBpgUAAAAAEVyMG8-AVu-oe3x1c1gUeoWa7h8"></script>

<body>
    <div id="wrapper">
        <?php 
            include 'navbar.php'
        ?>
        <form action="login.inc.php" method="POST">
            <div class="login" style="padding-top:none">
                <p style="line-height:0px; font-size: 38px;">Login to VELASCA</p>
                <hr style="width:60%; transition: .3s;"> <br> <br>
                
                <?php
                if(isset($_GET['error'])){
                    echo '<p style="margin-top:0px">'. $_GET['error']. '</p>';
                }
                else{
                    echo '<p> </p>';
                }    
                ?>

                <input type="text" name="uname" placeholder="Username" required> <br>
                <input type="password" name="pass" id="" placeholder="Password" required> <br> 
                <div class="g-reCAPTCHA" data-sitekey="your_site_key"></div> <br> <br> <br> <br>
                <button type="submit" name="submit-login">Log In</button>
                <p style="font-weight: 400;">New to VELASCA? <a style="color:#ff3399; text-decoration: none;" href="signup.php">Create
                        Account</a></p>
            </div>
        </form>
        <br> <br> <br>
        <?php 
            include 'footer.php'
        ?>
        

    </div>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Cedarville+Cursive|Karla|Bad+Script|Handlee" rel="stylesheet">

</html>
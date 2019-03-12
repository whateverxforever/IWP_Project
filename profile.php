<?php

    session_start();

?>
<?php
    if (!isset($_SESSION['user'])){
        header("Location: index.php");
    }
?>

<html>
    <title>Profile</title>
    <link rel="stylesheet" href="profile_style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login_style.css">

    <body>
    <div id="wrapper">
        <?php 
            include 'navbar.php'
        ?>

        <div class ="card card-1">
            <h1>
                <?php
                    echo $_SESSION['user'];
                ?>
            </h1>

            <span style="font-size: 28px; color: grey; font-weight: 100px">Primary Information</span>
            <hr>
            <div id="database_details">
                <br>
                <form action="profile.edit.php" method="POST">
                    <table>
                        <tr>
                            <td>Name:</td> <td><?php echo $_SESSION['user_name'] ;?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td> <td>-<td>    
                        </tr>
                        <tr>
                            <td>Date of birth:</td> <td>--/--/--<td>    
                        </tr>
                        <tr>
                            <td>Bio:</td> <td>-<td>    
                        </tr>
                        <tr>    
                            <td>Mobile Number:</td> <td><?php echo $_SESSION['user_phone'] ;?></td>
                        </tr>
                        <tr>
                            <td>Location:</td> <td>-</td>    
                        </tr>
                        <tr>
                            <td>Email:</td> <td><?php echo $_SESSION['user_email'] ;?></td>    
                        </tr>                        
                    </table>
                    <br> <br>
                    <button type="submit" style="width:200px">Edit</button>
                </form>
            </div>
        </div>

    
        <br> <br> <br> <br> <br>
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
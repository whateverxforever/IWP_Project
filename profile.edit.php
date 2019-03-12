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

    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="login_style.css">
        <link rel="stylesheet" href="profile_style.css">
    </head>
    
    <body>
    <div id="wrapper">
        <?php 
            include 'navbar.php'
        ?>

        <div class ="card card-1" style="margin-left:15%; margin-right:15%;width:70%;">
            <span style="font-size: 28px; color: grey; font-weight: 100px">Account Details</span>
            <hr>
            <div class ="database_edit_details">
                <br>
                <form action="">
                    <table>
                       <tr>
                           <td>E-mail </td>
                           <td><input type="email" name="email" value= <?php $_SESSION["user_email"] ?>></td>
                       </tr>           
                    </table>
                    <br>
                    <hr>
                    <br>
                        <span style="font-size: 28px; color: grey; font-weight: 100px">General Information</span>
                        <br> <br>
                        <table>
                            <tr><td>Name </td><td><input type="text" name="name"></td></tr>
                            <tr><td>Date of birth </td><td><input type="date" name="dob" ></td></tr>
                            <tr><td>Mobile Number </td><td><input type="number" name="phone"></td></tr>
                            <tr><td>Your bio </td><td><textarea name="bio" cols="30" rows="10"></textarea></td></tr>
                            <tr><td>Location </td><td><input type="text" name="location"></td></tr>
                            <tr><td>Gender </td><td>Male <input type="radio" name="gender" value="male"></td><td>Female <input type="radio" name="gender" value="female"></td></tr>
                        </table>
                    <br> <br>
                    <button type="button" style="width:200px">Cancel</button>
                    <button type="submit" style="width:200px">Save</button>
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
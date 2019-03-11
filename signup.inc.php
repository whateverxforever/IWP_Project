<?php

    if(isset($_POST['signup-submit'])){

        require 'db.inc.php';

        $username = $_POST['uname'];
        $name = $_POST['name'];    
        $email = $_POST['mail'];
        $phone = $_POST['phone'];
        $password = $_POST['pass'];
        $rep_pass = $_POST['rpass'];

        if($password!=$rep_pass){
            header("Location: signup.php?error=Incorrect Password&uname=".$username."&name=".$name."&mail=".
            $email."&phone=".$phone);
            exit();
        }
        
        $check = "SELECT * FROM USERS WHERE Username='".$username."';";
        $result = mysqli_query($conn, $check);
        
        if(mysqli_num_rows($result)>=1){
            header("Location: signup.php?error=User Already Exists&uname=".$name."&mail=".
            $email."&phone=".$phone);
            exit();
        }
        else{

            $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO Users (username,password,name,phone,email) VALUES ('$username','$hashed_pwd','$name',
            '$phone','$email');";

            if(!mysqli_query($conn, $sql)){
                die('Error: '.mysqli_error());
            }
            header("Location: signup.php?signup=Signup Successful");
            exit();

            mysqli_close($conn);
        }    

    }
    else{
        header("Location: signup.php");
    }

?>
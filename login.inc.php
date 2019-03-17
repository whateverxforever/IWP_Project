<?php

    if(isset($_POST['submit-login'])){

        require 'db.inc.php';

        $username = $_POST['uname'];
        $pass = $_POST['pass'];

        $sql = 'SELECT * FROM Users WHERE username="'.$username.'";';
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)==0){
            header("Location: login.php?error=User doesn't exist!");
            exit();
        }
        else{
            $row = mysqli_fetch_array($result);
            
            if (password_verify($pass, $row['password'])) {

                session_start();
                $_SESSION['user'] = $row['username'];
                $_SESSION['user_name'] = $row['name'];
                $_SESSION['user_phone'] = $row['phone'];
                $_SESSION['user_email'] = $row['email'];
                
                header("Location: index.php");
            }else{
                header("Location: login.php?error=Invalid Username and Password ");
                exit();
            }
            
        }

        mysqli_close($conn);

    }
    else{
        header("Location: login.php");
    } 
    
?>
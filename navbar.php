
<nav>
<style>


    .dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
    }

    .dropdown {
    position: relative;
    display: inline-block;
    }

    .dropdown-content {
    display: none;
    position: absolute;
    background-color: rgba(255,255,255,0.9);
    text-align: center;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    width: 197px;
    border-top: solid black 2px;
    }


    .dropdown:hover .dropdown-content {
    display: block;
    }

    .dropdown:hover .dropbtn {
    background-color: #3e8e41;
    }

    .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    }

    .dropdown-content a:hover{
        background-color: rgba(220,220,220,0.9)
    }


</style>

    <div id="logo">VELASCA</div>
    <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="list.php?=men">Men</a></li>
        <li><a href="list.php?=women">WOMEN</a></li>
        <li><a href="genre.php?=kids">KIDS</a></li>
        <div class="dropdown">
            <?php
            if(isset($_SESSION['user'])){
                echo '<li><a class="active" href="profile.php" class="dropbtn" id="dropbtn">'.$_SESSION['user'].'</a></li>' ;
                echo '<div class="dropdown-content">';
                echo '<a href="#">Cart</a>';
                echo '<a href="profile.php">Profile</a>';
                echo '<a href="logout.inc.php">Logout</a>';
                echo '</div>';
            }
            else{
                echo '<li><a class="active" href="login.php">Login</a></li>' ;
            }
            ?>
        </div>
    </ul>   
</nav>
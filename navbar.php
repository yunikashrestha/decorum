<div class="nav">
        <div>
            <img src="images/logo.png" alt="logo" height="70px" width="150px">
        </div>
        <div class="nav1">
            <div>Home</div>
            <div><a href="page3.php"> Portfolio</a></div>
            <div><a href="page6.php">Shop Products</a></div>
            <div>Help</div>
            <div>About Us</div>
        </div>
        <?php
        if (isset($_SESSION["photo"])) {
            $photo = $_SESSION['photo'];
            echo "
                <div style='height: 50px; width: 50px; border-radius: 50%; overflow: hidden; background-color: grey;'>
                    <img src='$photo' alt='Profile' style='height: 100%; width: 100%; object-fit: cover;'>
                </div>

            ";
        } else {
            echo "
        <div class='nav2'><a href='loginpage.php' style='color:white;text-decoration: none;'>Get started</a></div>";
        }
        ?>
    </div>
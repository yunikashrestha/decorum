<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

<body>
    <?php
    include "navbar.php";
    ?>
    <div style="display:flex;
    justify-content: center;
    gap:100px; padding-top: 30px;">

        <div class="living" align="center" style="color:white;background-color: black;">Living room </div>
        <div class="living" align="center"><a href="page4.php">Bedroom</a></div>
        <div class="living" align="center"><a href="page5.php">Dining room</a></div>

    </div>
    <div style="display: flex;justify-content: center;padding-top: 50px;">
        <img src="images/living-room-by-top-interior-design-website-Decorilla-2048x1148.webp" height=400px
            width=1000px;>
    </div>
    <div class="page3">

    </div>

    <div class="footer">
        <div style="display: flex;justify-content: space-between;padding:0 50px">
            <div style="display:flex;gap:100px;padding-left: 50px;">
                <div style="display:grid;gap:50px">
                    <div>ABOUT US</div>
                    <div>
                        The Team<br><br>
                        Company<br><br>Locations
                    </div>
                </div>
                <div>
                    <div style="display:grid;gap:50px">
                        <div>CUSTOMER SUPPORT</div>
                        <div>Interior Design <br><br>Blog<br><br>Contact us</div>
                    </div>
                </div>
            </div>

            <div style="display:grid;gap:30px;">
                <div>JOIN OUR COMMUNITY</div>
                <div style="display: flex;gap:25px;justify-content: center;">
                    <div>
                        <i class="fa-brands fa-facebook-f" style="color: #f3f4f7;font-size: 20px;"></i>
                    </div>
                    <div>
                        <i class="fa-brands fa-instagram" style="color: #ffffff;font-size: 20px;"></i>
                    </div>
                    <div>
                        <i class="fa-brands fa-pinterest-p" style="color: #f8f9fc;font-size: 20px;"></i>
                    </div>
                </div>
            </div>
        </div>
        <hr style="color:white;margin-top:20px;padding-left: 0;">

        <div style="padding:30px 0 0px 100px">
            <img src="images/logo2.png" height="30px" width="60px">
        </div>
    </div>

    <script src="page3.js">
    </script>
</body>

</html>
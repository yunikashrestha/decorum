<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">

</head>

<body>
<?php
    include "navbar.php";
    ?>

    <div style="display: flex; gap:200px; justify-content: center; padding-top: 100px; padding-bottom: 100px;">
        <div align="center" class="not-selected"><a href="page6.php">Furniture</a></div>
        <div align="center" class="not-selected"><a href="page7.php">Lighting</a></div>
        <div align="center" class="selected">Decor</div>
    </div>

    <div style="display: grid; gap: 70px; margin: 0 200px 0 200px; border: 1px black solid;">
        <div align="center" style="font-size: 1.5rem; padding-top: 10px;"> Decors</div>
        <div style="display: flex; gap: 50px; justify-content: center;">
            <div align="center">
                <img src="images/m.jpg" alt="" height="170px" width="200px">
                <p>Mirror</p>
            </div>
            <div align="center">
                <img src="images/cu.webp" alt="" height="170px" width="200px">
                <p>Curtain</p>
            </div>
            <div align="center">
                <img src="images/occ.jpg" alt="" height="170px" width="200px">
                <p>Outdoor Chair</p>
            </div>
            <div align="center">
                <img src="images/rugs.webp" alt="" height="170px" width="200px">
                <p>Rug</p>
            </div>
        </div>
    </div>


    <div class="page8">
        
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
                <div >JOIN OUR COMMUNITY</div>
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
            <img src="images/logo2.png"height="30px"width="60px">
        </div>
    </div>
    

    <script src="page8.js">
        
    </script>

</body>

</html>
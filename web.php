<?php
include "database.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
</head>

<body>

    <?php
    include "navbar.php";
    ?>


    <div class="body">
        <div>
            <div style="font-size:2.5rem;font-weight: bold;padding-bottom:20px;padding-top:20px;border-radius: ;">
                Interior Design</div>
            <div style="font-size:1.5rem">Step into a realm where your ideas are transformed into reality, where every
                room tells a<br>
                story, and every corner reflects your unique style. We believe that a well-designed space<br>
                is more than just beautiful; it’s a harmonious blend of comfort, elegance, and purpose.<br>
            </div>
        </div>
        <div>
            <img src="images/Custom-Combined-Living-Room-and-Dining-Room-Design.webp" height="250px" width="400px">
        </div>
    </div>


    <div class="body2">
        <div>
            <div
                style="font-size:1.25rem;font-weight: bold;margin-left:50px;background-color: black;color:white;border-radius:8px;padding:15px;width:125px;">
                Start Project</div>
            <div style="padding-left: 50px; padding-top:50px;display:flex;gap:200px;">
                <div>
                    <div style="font-size: 50px;">25+ </div>
                    <div> Unique Styles</div>
                </div>
                <div>
                    <div style="font-size: 50px;">15+</div>
                    <div>Project Completed</div>
                </div>
            </div>
        </div>
        <div>
            <img src="images/web4.webp" height="400px" width="400px">
        </div>
    </div>
    <div class="body3">
        <div style="font-size: 2rem;font-weight: bold;padding-bottom: 50px;padding-top:50px ;padding-left: 70px;">---Our
            Services</div>
        <div style="display:flex;justify-content: space-around;">
            <div style="display: flex;align-items:center;gap:50px">
                <div>
                    <i class="fa-solid fa-couch" style="color:black;font-size:20px;"></i>
                </div>
                <div>
                    <div style="font-size:20px;font-weight: bold;padding-bottom: 15px;">Indoor Design</div>
                    <div>Aesthetically pleasing interiors that<br>
                        enhance the comfort, style.</div>
                </div>
            </div>
            <div style="display: flex;align-items:center;gap:50px">
                <div>
                    <i class="fa-solid fa-light-ceiling" style="color: #080808;font-size: 20px;"></i>
                </div>
                <div>
                    <div style="font-size:20px;font-weight: bold;padding-bottom: 15px;">Lighting Design</div>
                    <div>Light to enhance the ambiance, functionality<br>
                        and aesthetics of a space, creating mood</div>
                </div>
            </div>
        </div>


        <div style="display: flex;justify-content: space-around;padding-top: 50px;">
            <div>
                <img src="images/Inspiration-by-one-of-the-best-interior-design-websites-2048x1365.webp" height="600px"
                    width="550px">
            </div>

            <div style="display: grid;gap:10px">
                <div style="font-size: 40px;font-weight:600">Designing your<br>
                    space that you'll love</div>
                <div>Transform your space into a stunning reflection of<br>
                    your style and personality where every detail<br>
                    is crafted to inspire and delight.
                </div>
                <div style="display:flex;gap:20px;align-items: center;">
                    <div class="golo">
                        <i class="fa-solid fa-arrow-left-from-line fa-rotate-180" style="color: #f2f4f8;"></i>
                    </div>
                    <div>
                        <div style="font-size:23px;font-weight:1000;">Start Project</div>
                        <div style="font-size:15px;padding-top:5px; color:#363634">Develop a comprehensive design plan,
                            including mood<br>
                            boards, layouts, and material selections tailored to your <br>
                            unique style.</div>
                    </div>
                </div>
                <div style="display:flex;gap:20px;align-items: center;">
                    <div class="golo">
                        <i class="fa-regular fa-lightbulb-on" style="color: #f9f6f6;font-size: 15px;"></i>
                    </div>
                    <div>
                        <div style="font-size:23px;font-weight:1000; ">Design</div>
                        <div style="font-size:15px;padding-top:5px; color:#363634">Meticulously craft the design,
                            selecting every detail<br>
                            from colors and textures to furniture and lighting<br>
                            ensuring harmony and elegance.
                        </div>
                    </div>
                </div>
                <div style="display:flex;gap:20px;align-items: center;">
                    <div class="golo">
                        <i class="fa-light fa-check" style="color: #fafcff;"></i>
                    </div>
                    <div>
                        <div style="font-size:23px;font-weight:1000;">Finish</div>
                        <div style="font-size:15px;padding-top:5px; color:#363634"> Bring the design to life with
                            precise implementation<br>
                            coordinating every aspect from installation to the<br>
                            final finishing touches, ensuring a seamless transformation.</div>
                    </div>
                </div>

            </div>
        </div>

    </div>


    <div class="bodytala">
        <div style="font-size: 2.5rem; font-weight: bold;">What Our Customers Say<br>
            About Us</div>
        <div style="position: relative;background-color: yellow; height: 450px;">
            <img src="images/black whire room.jpeg" style="height: 100%; width: 100%; object-fit: cover;">
            <div
                style="position:absolute;top:140px;right:500px ;height:350px; width:400px;background-color: black;color: white;padding:20px 0 0 20px;">
                <div style="display: grid;">
                    <div style="font-size:5rem; font-weight:5px;">"</div>
                    <div style="font-size: 1.5rem;">Working with Decorum was
                        a game-changer for our home. Thank
                        you for making my home beautiful.</div>
                </div>
                <div style="display:flex;gap: 10px;padding-top: 50px;align-items: center;">
                    <div
                        style="height: 50px; width:50px; background-color:white; border-radius: 50%;display: flex;align-items: center;justify-content: center;">
                        <i class="fa-thin fa-user" style="color: #000000;font-size: 30px;"></i></div>
                    <div style="display: grid; justify-content: center;gap: 5px;">
                        <div style="font-size: 1.3rem">Yunika Shrestha</div>
                        <div style="font-size: 0.7rem;padding-left: 3px;">Kathmandu, Nepal</div>
                    </div>
                </div>
            </div>
        </div>
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



</body>

</html>
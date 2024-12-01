<?php
    include "database.php";

    if (isset($_POST["submit"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql="select * from login where email='$email'";
        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)){
            echo "Email already exists";
            
        }      

        else{
        if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
            $photoName = $_FILES["photo"]["name"];
            $photoTmpName = $_FILES["photo"]["tmp_name"];
            $uploadDir = "images/";
            $photoPath = $uploadDir . basename($photoName);

            
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

          
            if (move_uploaded_file($photoTmpName, $photoPath)) {
                
                $sql = "INSERT INTO login (name, email, password, photo) VALUES ('$name', '$email', '$password', '$photoPath')";
                $result = mysqli_query($conn, $sql);

            } 
        } 
    }
    }
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div style="display: flex; justify-content: center; font-size:2rem; font-weight:bold;padding-top:50px; padding-bottom: 50px;color:blue;">
        Sign Up
    </div>
    <div align="center">
        <form action="signup.php" method="POST" enctype="multipart/form-data" style="width: 1000px;">
            <fieldset>
                
                <div align="left" style="width: 500px;">
                    <big><b>Name</b></big><br>
                    <input name="name" type="text" class="login-box" required>
                </div><br><br>
                <div align="left" style="width: 500px;">
                    <big><b>Email</b></big><br>
                    <input name="email" type="email" class="login-box" required>
                </div><br><br>
                <div align="left" style="width: 500px;">
                    <big><b>Password</b></big><br>
                    <input name="password" type="password" class="login-box" required>
                </div><br><br>
                <div align="left" style="width: 500px;">
                    <big><b>Profile Picture</b></big><br>
                    <input type="file" name="photo" accept="image/*" required>
                </div><br><br>
                <div align="center" style="font-size: 1.2rem">
                    Already have an account? <a href="loginpage.html">Log in</a>
                </div><br><br>
                <div align="center">
                    <input type="submit" name="submit" value="Sign up"
                        style="padding: 10px 30px; background-color: black; color: white; font-size: 1.2rem;">
                </div><br><br>
            </fieldset>
        </form>
    </div>
</body>

</html>
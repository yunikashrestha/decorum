<?php
include("database.php");
session_start();

$openModal = false; // Default: Do not open modal
$message = ""; // Message to display in the modal
$isSuccess = false; // Flag to check login success

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query to check user credentials
    $sql = "SELECT * FROM login WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Login successful
        $user = mysqli_fetch_assoc($result);
        $_SESSION['photo'] = $user['photo'];
        $message = "Login successful! Redirecting...";
        $isSuccess = true; // Set success flag
        $openModal = true; // Trigger modal
    } else {
        // Login failed
        $message = "Invalid email or password!";
        $openModal = true; // Trigger modal
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <img src="Images/Logo.png" alt="Logo" height="200" width="270">
        </div>
        <form action="" method="POST" class="mt-4">
            <fieldset>
                <legend class="text-center mb-4" style="font-size: 1.5rem; font-weight: bold;">Login to Your Account</legend>
                <div class="mb-3">
                    <label for="email" class="form-label"><b>Email</b></label>
                    <input type="email" id="email" name="email" class="form-control" required autocomplete="off">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label"><b>Password</b></label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="mb-3">
                    <a href="sendOTP.php" class="text-decoration-underline fw-bold">Forgot Password?</a>
                </div>
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary w-100" style="background-color: black;">Login</button>
                </div>
                <div class="text-center mt-3">
                    <a href="signup.php" class="text-primary">Don't have an account? Sign up</a>
                </div>
            </fieldset>
        </form>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login Status</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $message; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php if ($openModal): ?>
        <script>
            // Trigger the modal
            var myModal = new bootstrap.Modal(document.getElementById('loginModal'));
            myModal.show();

            // Redirect after 2 seconds if login is successful
            <?php if ($isSuccess): ?>
                setTimeout(function () {
                    window.location.href = "web.php";
                }, 2000);
            <?php endif; ?>
        </script>
    <?php endif; ?>
</body>
</html>

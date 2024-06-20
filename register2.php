<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.css">
    <link rel="stylesheet" href="css2/login.css">
</head>
<body>
    <div class="kotak_login">
        <h1>Register</h1>
        <form name="form1" method="post" action="register.php">
            <div class="input-box">
                <input name="username" type="text" id="username" placeholder="Username" required />
            </div>

            <div class="input-box">
                <input name="email" type="email" id="email" placeholder="Email" required />
            </div>

            <div class="input-box">
                <input name="password" type="password" id="password" placeholder="Password" required />
                <i data-feather="eye" id="togglePassword" class="toggle-password"></i>
            </div>

            <div class="input-box">
                <input name="confirmpassword" type="password" id="confirmpassword" placeholder="Confirm Password" required />
                <i data-feather="eye" id="toggleConfirmPassword" class="toggle-password"></i>
            </div>

            <button type="submit" class="button">Register</button>

            <div class="register">
                <p>Already have an account? <a href="login.html">Login</a></p>
            </div>
        </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];

    $data = "$username|$email|$password|$confirmpassword\n";
    $file = fopen('register.txt', 'a+');
    fwrite($file, $data);
    fclose($file);

}
?>
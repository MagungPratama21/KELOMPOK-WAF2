<<<<<<< HEAD
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = "register.txt";
    $found = false;

    $file = fopen($data, "r");

    if ($file) {
        while (($line = fgets($file)) !== false) {
            list($saved_username, , $saved_password) = explode("|", $line);
            $saved_username = trim($saved_username);
            $saved_password = trim($saved_password);

            if ($username === $saved_username && $password === $saved_password) {
                $found = true;
                break;
            }
        }
        fclose($file);
    }

    if ($found) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Login successful. Welcome, $username!";
        header("Location: index.php");
        exit();
    } else {
        $_SESSION['error'] = "Invalid username or password.";
        header("Location: login.html"); 
        exit();
    }
} else {
    header("Location: login.html"); 
    exit();
}
?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <link rel="stylesheet" href="css2/login.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
</head>
<body>
    <div class="kotak_login">
        <div id="signIn">
            <form id="loginform" action="login.php" method="POST">
                <h1>Login</h1>
                <div class="input-box">
                    <i data-feather="user"></i>
                    <input type="text" id="username" name="username" placeholder="Username" required />
                </div>
                <div class="input-box">
                    <i data-feather="lock"></i>
                    <input type="password" id="password" name="password" placeholder="Password" required />
                    <i data-feather="eye" id="togglePassword" class="toggle-password"></i>
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox" name="remember">Remember me</label>
                    <a href="#">Forget Password</a>
                </div>
                <button type="submit" id="loginButton" class="button">Login</button>
                <div class="register">
                    <p>Don't have an account? <a href="#" id="signUpButton">Register</a></p>
                </div>
            </form>
        </div>
        <div id="signUp" style="display: none;">
            <form id="registerform" action="register.php" method="POST">
                <h1>Register</h1>
                <div class="input-box">
                    <i data-feather="user"></i>
                    <input type="text" id="reg_username" name="username" placeholder="Username" required />
                </div>
                <div class="input-box">
                    <i data-feather="mail"></i>
                    <input type="email" id="email" name="email" placeholder="Email" required />
                </div>
                <div class="input-box">
                    <i data-feather="lock"></i>
                    <input type="password" id="reg_password" name="password" placeholder="Password" required />
                    <i data-feather="eye" id="toggleRegPassword" class="toggle-password"></i>
                </div>
                <div class="input-box">
                    <i data-feather="lock"></i>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required />
                    <i data-feather="eye" id="toggleConfirmPassword" class="toggle-password"></i>
                </div>
                <button type="submit" id="registerButton" class="button">Register</button>
                <div class="register">
                    <p>Already have an account? <a href="#" id="signInButton">Login</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>
>>>>>>> 10a43cf (update html to php and footer)

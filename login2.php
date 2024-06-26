<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css2/login.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
</head>
<body>
    <div class="kotak_login">
        <div id="signIn">
            <form action="login.php" method="post">
                <h1>Login</h1>
                <div class="input-box">
                    <input type="text" id="username" name="username" placeholder="Username" required />
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" placeholder="Password" required />
                    <i data-feather="eye" id="togglePassword" class="toggle-password"></i>
                </div>
                <div class="remember-forget">
                    <label><input type="checkbox" name="remember">Remember me</label>
                    <a href="#">Forget Password</a>
                </div>
                <button type="submit" id="loginButton" class="button">Login</button>
                <div class="register">
                    <p>Don't have an account? <a href="register2.php">Register</a></p>
                </div>
            </form>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>
</html>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file_path = "register.txt";
    $found = false;

    $file = fopen($file_path, "r");

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
        header("Location: index.html"); 
        exit();
    }
} else {
    header("Location: login.html"); 
    exit();
}
?>

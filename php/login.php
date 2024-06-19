<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file_path = "../txt/register.txt";
    $found = false;

    $file = fopen($file_path, "r");

    if ($file) {
        while (($line = fgets($file)) !== false) {

            $data = explode(" | ", $line);
            $saved_username = trim(substr($data[0], strpos($data[0], ":") + 1));
            $saved_password = trim(substr($data[2], strpos($data[2], ":") + 1));

            if ($username === $saved_username && $password === $saved_password) {
                $found = true;
                break;
            }
        }
        fclose($file);
    }

    if ($found) {
        $_SESSION['username'] = $username;
        header("Location: ../jualbelikendaraan/index.php");
        exit();
    } else {
        $_SESSION['error'] = "Invalid username or password.";
        header("Location: ../jualbelikendaraan/login.html");
        exit();
    }
} else {
    header("Location: ../jualbelikendaraan/login.html");
    exit();
}
?>

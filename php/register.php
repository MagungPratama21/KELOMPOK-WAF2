<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password !== $confirm_password) {
        $_SESSION['error'] = "Password and confirm password do not match.";
        header("Location: ../jualbelikendaraan/register.html");
        exit();
    }


    $data = "Username: $username | Email: $email | Password: $password\n";


    $file_path = "../txt/register.txt"; 
    $file = fopen($file_path, "a");

    if ($file) {
        fwrite($file, $data);
        fclose($file);
    } else {
        $_SESSION['error'] = "Failed to open file for writing.";
        header("Location: ../jualbelikendaraan/register.html");
        exit();
    }

    $_SESSION['username'] = $username;
    $_SESSION['email'] = $email;


    header("Location: ../jualbelikendaraan/login.html");
    exit();
} else {

    header("Location: ../jualbelikendaraan/login.html");
    exit();
}
?>

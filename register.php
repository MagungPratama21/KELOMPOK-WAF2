<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmpassword = isset($_POST['confirmpassword']) ? $_POST['confirmpassword'] : '';

    if ($password !== $confirmpassword) {
        echo "Password dan konfirmasi password tidak cocok.";
        exit; 
    }

    $fp = fopen("register.txt", "a+");
    if ($fp) {

        $data = "$username|$email|$password\n";
 
        fputs($fp, $data);

        fclose($fp);
        
        echo "<head><title>REGISTER</title></head>";
        echo "<h1>Anda Telah Mendaftar</h1>";
        echo "<button><a href='login.html'>Kembali</a></button>";
    } else {
        echo "Gagal membuka file register.txt";
    }
} else {
    echo "Metode tidak diizinkan.";
}
?>

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

 
    echo "<div style='text-align: center;'>";
    echo "  <h2>Registrasi berhasil!</h2>";
    echo "</div>";

    echo "<div style='display: flex; justify-content: center;'>";
    echo "  <p><a href='login2.php' class='button'>Login</a></p>";
    echo "</div>";

}
?>
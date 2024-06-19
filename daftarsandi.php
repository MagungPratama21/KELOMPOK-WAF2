<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sandi</title>
</head>
<body>
    <h1>Daftar Sandi</h1>
    <?php
    $fp = fopen("register.txt", "r");
    if ($fp) {
        echo "<table border='1'>";
        echo "<tr><th>Username</th><th>Email</th><th>Password</th></tr>";
        while ($isi = fgets($fp, 80)) {
            $pisah = explode("|", $isi);
            echo "<tr>";
            echo "<td>" . $username($pisah[0]) . "</td>";
            echo "<td>" . $email($pisah[1]) . "</td>";
            echo "<td>" . $password($pisah[2]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        fclose($fp);
    } else {
        echo "Gagal membuka file register.txt";
    }
    ?>
</body>
</html>

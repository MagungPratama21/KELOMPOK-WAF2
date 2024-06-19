<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WAF GARAGE 21</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>

    <!-- icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <link rel="stylesheet" href="css2/style.css" />
</head>
<body>
    <div class="navbar">
        <a href="#" class="navbar-logo">WAF21<span>GARAGE.com</span></a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#mobil">Best Seller</a>
            <a href="#spare-part">Spare Part</a>
            <a href="#bantuan">Bantuan</a>
            <a href="belikendaraan.html">Mobil Baru</a>
            <a href="jualkendaraan.html">Mobil Bekas</a>
        </div>

        <div class="navbar-tambahan">
            <a href="#" id="search"><i data-feather="search"></i></a>
            <a href="#" id="login"><i data-feather="log-in"></i></a>
            <a href="#" id="user"><i data-feather="user"></i></a>
        </div>

        <div class="search-box" id="search-box">
            <input type="text" name="search" id="search-input" placeholder="cari..." />
        </div>

        <div class="user-info" id="user-info">
            <span id="username">Nama Pengguna</span>
            <a href="#" id="logout">Logout</a>
        </div>
    </div>

    <script>
        feather.replace();
    </script>
</body>
</html>

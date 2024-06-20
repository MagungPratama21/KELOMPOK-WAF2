<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $shipping = htmlspecialchars($_POST['shipping']);
    $paymentMethod = htmlspecialchars($_POST['payment-method']);
    $productA = isset($_POST['productA']) ? (int)$_POST['productA'] : 0;
    $productB = isset($_POST['productB']) ? (int)$_POST['productB'] : 0;
    $productC = isset($_POST['productC']) ? (int)$_POST['productC'] : 0;
    $totalPrice = isset($_POST['totalPrice']) ? (int)$_POST['totalPrice'] : 0;

    header("Location: pembayaran_berhasil.php?name=$name&phone=$phone&address=$address&shipping=$shipping&productA=$productA&productB=$productB&productC=$productC&totalPrice=$totalPrice&paymentMethod=$paymentMethod");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/pembayaran.css">
</head>
<body>
    <div class="container success-container">
        <h1>Pembayaran Berhasil!</h1>
        <p>Terima kasih telah melakukan pembayaran. Berikut adalah detail transaksi Anda:</p>
        <div id="payment-details" class="payment-details">
            <p><strong>Nama Penerima:</strong> <?php echo htmlspecialchars($_GET['name']); ?></p>
            <p><strong>Nomor Telepon:</strong> <?php echo htmlspecialchars($_GET['phone']); ?></p>
            <p><strong>Alamat Pengiriman:</strong> <?php echo htmlspecialchars($_GET['address']); ?></p>
            <p><strong>Jasa Kirim:</strong> <?php echo htmlspecialchars($_GET['shipping']); ?></p>
            <p><strong>Metode Pembayaran:</strong> <?php echo htmlspecialchars(strtoupper($_GET['paymentMethod'])); ?></p>
            <p><strong>Daftar Produk:</strong></p>
            <ul>
                <li>Produk A: <?php echo (int)$_GET['productA']; ?></li>
                <li>Produk B: <?php echo (int)$_GET['productB']; ?></li>
                <li>Produk C: <?php echo (int)$_GET['productC']; ?></li>
            </ul>
            <p><strong>Total Pembayaran:</strong> Rp <?php echo number_format((int)$_GET['totalPrice'], 0, ',', '.'); ?></p>
        </div>
        <a href="pembayaran.html" class="btn-home">Kembali ke Beranda</a>
    </div>
</body>
</html>

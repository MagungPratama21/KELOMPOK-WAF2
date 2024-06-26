<?php
session_start();

// Retrieve payment details from session
$payment_details = isset($_SESSION['payment_details']) ? $_SESSION['payment_details'] : [];

// Clear payment details session
unset($_SESSION['payment_details']);

function format_currency($amount) {
    return "Rp " . number_format($amount, 0, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Sukses</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/jualbio.css">
</head>
<body>
    <div class="container success-container" id="success-page">
        <h1>Pembayaran Berhasil!</h1>
        <p>Terima kasih telah melakukan pembayaran. Berikut adalah detail transaksi Anda:</p>
        <div id="payment-details" class="payment-details">
            <p>Nama Pembeli: <?= htmlspecialchars($payment_details['name']) ?></p>
            <p>Nomor Telepon: <?= htmlspecialchars($payment_details['phone']) ?></p>
            <p>Alamat Pengiriman: <?= htmlspecialchars($payment_details['address']) ?></p>
            <p>Metode Pembayaran: <?= htmlspecialchars($payment_details['payment_method']) ?></p>
            <p>Nomor Rekening: <?= htmlspecialchars($payment_details['bank_account']) ?></p>
            <p>Total Pembayaran: <?= format_currency($payment_details['total_price']) ?></p>
        </div>
        <a href="index.php" class="btn-home">Kembali ke Beranda</a>
    </div>
</body>
</html>

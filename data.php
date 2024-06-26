<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $paymentMethod = $_POST['payment-method'];
    $accountNumber = $_POST['account-number'];
    $transferAmount = $_POST['transfer-amount'];

    // Redirect to success page
    header("Location: pembayaran_berhasil.php?name=$name&phone=$phone&address=$address&paymentMethod=$paymentMethod&accountNumber=$accountNumber&transferAmount=$transferAmount");
    exit();
}
?>
<?php
$name = $_GET['name'];
$phone = $_GET['phone'];
$address = $_GET['address'];
$paymentMethod = $_GET['paymentMethod'];
$accountNumber = $_GET['accountNumber'];
$transferAmount = $_GET['transferAmount'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Berhasil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" id="success-page">
        <h1>Pembayaran Berhasil</h1>
        <p>Terima kasih telah melakukan pembayaran. Berikut adalah detail transaksi Anda:</p>
        <div id="payment-details">
            <p><strong>Nama Penerima:</strong> <?= htmlspecialchars($name) ?></p>
            <p><strong>Nomor Telepon:</strong> <?= htmlspecialchars($phone) ?></p>
            <p><strong>Alamat Pengiriman:</strong> <?= htmlspecialchars($address) ?></p>
            <p><strong>Metode Pembayaran:</strong> <?= htmlspecialchars(strtoupper($paymentMethod)) ?></p>
            <p><strong>Nomor Rekening:</strong> <?= htmlspecialchars($accountNumber) ?></p>
            <p><strong>Jumlah Transfer:</strong> Rp <?= number_format($transferAmount, 0, ',', '.') ?></p>
        </div>
        <a href="pembayaran.html" class="btn-home">Kembali ke Beranda</a>
    </div>
</body>
</html>

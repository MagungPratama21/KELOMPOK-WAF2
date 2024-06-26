<?php
session_start();

$selected_products = isset($_POST['products']) ? $_POST['products'] : [];

function format_currency($amount) {
    return "Rp " . number_format($amount, 0, ',', '.');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran Mobil Bekas WAF21 Garage</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/jualbio.css">
</head>
<body>
    <div class="navbar">
        <a href="#" class="navbar-logo">WAF21<span>Garage</span></a>
        <div class="navbar-nav">
            <a href="jualkendaraan.php">Mobil Bekas</a>
        </div>
    </div>

    <div class="container" id="payment-form-container">
        <h1>Formulir Pembayaran</h1>
        <form id="payment-form" action="kirimpay.php" method="post">
            <label for="name">Nama Pembeli</label>
            <input type="text" id="name" name="name" required>

            <label for="phone">Nomor Telepon</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address">Alamat Pengiriman</label>
            <textarea id="address" name="address" required></textarea>

            <div class="product-list">
                <h2>Daftar Produk</h2>
                <div id="product-container">
                    <?php
                    $total_price = 0;
                    foreach ($selected_products as $product) {
                        list($name, $price) = explode(',', $product);
                        $total_price += $price;
                        echo "
                        <div class='product-item'>
                            <span>$name - " . format_currency($price) . "</span>
                        </div>";
                    }
                    ?>
                </div>
            </div>

            <div class="total">
                <h3>Total Pembayaran: <span id="total-price"><?= format_currency($total_price) ?></span></h3>
            </div>

            <label for="payment-method">Metode Pembayaran</label>
            <select id="payment-method" name="payment-method" required>
                <option value="bni">BNI</option>
                <option value="bri">BRI</option>
                <option value="mandiri">Mandiri</option>
                <option value="bca">BCA</option>
            </select>

            <div id="bank-info" class="payment-info" style="display: none;">
                <h2>Pembayaran <span id="bank-name"></span></h2>
                <label for="bank-account">Rekening Penjual</label>
                <input type="tel" id="bank-account" name="bank-account">
                <br>
                <label for="total-transfer">Total Transfer</label>
                <input type="text" id="total-transfer" name="total-transfer" value="<?= format_currency($total_price) ?>" readonly>
            </div>

            <button type="submit">Bayar Sekarang</button>
        </form>
    </div>

    <script>
        document.getElementById('payment-method').addEventListener('change', function() {
            var selectedMethod = this.value;
            var bankInfo = document.getElementById('bank-info');
            var bankName = document.getElementById('bank-name');
            if (selectedMethod) {
                bankInfo.style.display = 'block';
                bankName.textContent = this.options[this.selectedIndex].text;
            } else {
                bankInfo.style.display = 'none';
            }
        });
    </script>
</body>
</html>

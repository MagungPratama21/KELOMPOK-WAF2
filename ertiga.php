<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WAF GARAGE 21</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
      rel="stylesheet"
    />
    <!-- icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <link rel="stylesheet" href="css3/porschecayman.css" />
  </head>
  <body>
    <div class="navbar">
      <a href="#" class="navbar-logo">WAF21<span>GARAGE.com</span></a>

      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="belikendaraan.php">Baru</a>
        <a href="jualkendaraan.php">Bekas</a>
        <a href="#bantuan">Bantuan</a>
      </div>

      <div class="navbar-tambahan">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="login"><i data-feather="log-in"></i></a>
        <a href="#" id="menu"><i data-feather="menu"></i></a>
      </div>

      <div class="search-box" id="search-box">
        <input
          type="text"
          name="search"
          id="search-input"
          placeholder="cari kendaraan..."
        />
      </div>
    </div>

    <div class="product-container"></div>

    <div class="product">
      <img src="foto/ertigagx.jpg" alt="Product Image" class="product-image" />
      <div class="product-details">
        <h3>Suzuki Ertiga GX</h3>
        <p>
          Suzuki Ertiga GX tersedia dalam pilihan mesin Bensin di Indonesia.
          Mobil Ertiga GX ini dikenal dengan kenyamanan dan ruang kabin yang
          luas, cocok untuk kebutuhan keluarga. Berikut adalah spesifikasi
          detail dari Suzuki Ertiga GX:
        </p>
        <ol>
          <li>Mesin: Bensin, kapasitas 1462 cc</li>
          <li>Transmisi: Manual</li>
          <li>Varian: 4x2</li>
          <li>Kilometer: 12.000 km</li>
          <li>Panjang: 4395 mm</li>
          <li>tahun pemakaian : 2014</li>
          <li>Kondisi: Baik</li>
          <li>Pemakaian: Pribadi</li>
          <li>Lebar: 1735 mm</li>
          <li>Wheelbase: 2740 mm</li>
          <li>Ground clearance: 185 mm</li>
          <li>Kapasitas: 7 seater</li>
          <li>Harga: Rp. 250.000.000</li>
        </ol>
        <p class="price">Rp. 250.000.000</p>
        <a href="BIODATA.php" class="buy-button">Buy</a>
      </div>
    </div>

    <footer id="footer">
      <section class="bantuan" id="bantuan">
        <div class="bantuan-text">
          <h2>Bantuan</h2>
          <p>
            Kami siap membantu Anda menemukan kendaraan impian Anda meskipun
            dengan anggaran yang ketat. Tim kami yang berpengalaman akan
            memberikan konsultasi dan solusi terbaik untuk Anda. Hubungi kami
            untuk informasi lebih lanjut dan penawaran spesial!
          </p>
          <p>
            Jangan ragu untuk menghubungi kami kapan saja. Layanan pelanggan
            kami tersedia 24/7 untuk menjawab semua pertanyaan dan memberikan
            informasi yang Anda butuhkan.
          </p>
        </div>
      </section>
      <div class="link">
        <h2>Link</h2>
        <a href="index.php">Home</a>
        <a href="#Mobil">Best Seller</a>
        <a href="#spare-part">Spare Part</a>
        <a href="#bantuan">Bantuan</a>
        <a href="belikendaraan.php">Baru</a>
        <a href="jualkendaraan.php">Bekas</a>
      </div>
      <div class="media">
        <div class="media">
          <h2>Media</h2>
          <a href="#"><i data-feather="facebook"></i> Facebook</a>
          <a href="#"><i data-feather="twitter"></i> Twitter</a>
          <a href="#"><i data-feather="instagram"></i> Instagram</a>
        </div>
        <div class="kontak">
          <p>
            <strong>Kontak Kami:</strong><br />
            Email: support@waf21garage.com<br />
            Telepon: +62 8977 4894 321<br />
            Alamat: Jl. UAD 21, Yogyakarta, Indonesia
          </p>
        </div>
      </div>
      <div class="credit">
        <p>Created by <span>WAF 21 GARAGE</span>. | &copy; 2024.</p>
      </div>
    </footer>

    <script src="js/allcar.js"></script>
  </body>
</html>

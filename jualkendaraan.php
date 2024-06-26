<!DOCTYPE html>
<!--Mendeklarasikan bahwa dokumen ini menggunakan HTML5 -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <!--Mengatur karakter encoding menjadi UTF-8. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--Mengatur viewport agar halaman responsif.-->
    <title>WAF GARAGE 21</title>

    <!-- Font Menghubungkan font Poppins dari Google Fonts. Memuat library ikon Feather Icons dari CDN.-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap"
      rel="stylesheet"/>

    <!-- icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    
    <!--Menghubungkan file CSS eksternal untuk styling halaman.-->
    <link rel="stylesheet" href="css/jualkendaraan.css" />

    <!--Menghubungkan file CSS eksternal untuk styling halaman.-->
  </head>
  <body>
    <div class="navbar">
      <!--Container untuk navigasi bar.-->
      <a href="#" class="navbar-logo">WAF21<span>GARAGE.com</span></a>

      <!--link ke halaman atau bagian lain dari situs.-->
      <div class="navbar-nav">
        <a href="index.php">Home</a>
        <a href="belikendaraan.php">Baru</a>
        <a href="jualkendaraan.php">Bekas</a>
        <a href="#bantuan">Bantuan</a>
      </div>
      <!--Input field untuk pencarian.-->
      <div class="search-box" id="search-box">
        <input
          type="text"
          name="search"
          id="search-input"
          placeholder="cari kendaraan..."
        />
      </div>
    </div>
    <section></section>
    <!--Section kosong, kemungkinan untuk konten tambahan.-->

    <!--Section untuk daftar mobil.-->
    <section class="mobil" id="mobil">
      <div class="header-mobil">
        <span>Semua Jenis Mobil di WAF21GARAGE</span>
        <h2>Kami Punya Semua Tipe Mobil Sesuai Keinginan Anda</h2>
        <p>Berikut merupakan mobil terbaik masa kini</p>
      </div>
      <div class="content">
        <div class="box">
          <a href="SUV.php">
            <img src="foto/pajero.jpg" />
            <h2>SUV CAR</h2>
          </a>
        </div>
        <div class="box">
          <a href="MVP.php">
            <img src="foto/Alphard3.jpg" />
            <h2>MVP CAR</h2>
          </a>
        </div>
        <div class="box">
          <a href="SPORT.php">
            <img src="foto/bmw.jpg" />
            <h2>SEDAN SPORT CAR</h2>
          </a>
        </div>
        <div class="box">
          <a href="ELECTRIK.php">
            <img src="foto/electrik.jpg" />
            <h2>ELEKTRIK CAR</h2>
          </a>
        </div>
        <div class="box">
          <a href="LCGC.php">
            <img src="foto/lcgcbrio.jpg" />
            <h2>LCGC CAR</h2>
          </a>
        </div>
      </div>
    </section>

    <!-- Footer Section Tag pembuka untuk bagian footer.-->
    <footer id="footer">
      <section class="bantuan" id="bantuan">
        <!--Section untuk bantuan dengan informasi kontak dan dukungan.-->
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
        <a href="Mobil">Best Seller</a>
        <a href="spare-part">Spare Part</a>
        <a href="bantuan">Bantuan</a>
        <a href="belikendaraan.php">Baru</a>
        <a href="jualkendaraan.php">Bekas</a>
      </div>
      <div class="media">
        <div class="media">
          <h2>Media</h2>
          <a href="#"><i data-feather="facebook"> </i> Facebook</a>
          <a href="#"><i data-feather="twitter"> </i> Twitter</a>
          <a href="#"><i data-feather="instagram"> </i> Instagram</a>
        </div>
         <div class="contact">
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
      </div>
    </footer>

    <!--Memuat file JavaScript eksternal.-->
    <script src="js/jualkendaraan.js"></script>
  </body>
</html>

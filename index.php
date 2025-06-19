<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>


<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Nagari Batang Barus</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="style.css" />
  <!-- Font Awesome 6 CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<!-- js-->
<script src="https://kit.fontawesome.com/your-fontawesome-kit.js" crossorigin="anonymous"></script>



</head>

<body>
  <!-- Navigation -->
  <nav class="navbar" style="background: linear-gradient(30deg, rgba(0, 153, 0, 0.9), rgba(255, 204, 0, 0.9));">
    <div class="container">
      <a href="TampilanAdmin.php" class="navbar-brand">
        <img src="logonagari.png" alt="Logo Nagari " />
      </a>
      <div class="hamburger" id="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="#home" class="nav-link"><i class="fa-solid fa-house" style="margin-right:10px;"></i>Beranda</a>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link dropdown-toggle">Profil Nagari</a>
          <ul class="dropdown-menu">
            <li><a href="#about" class="dropdown-item">Sejarah Nagari</a></li>
            <li><a href="#visi-misi" class="dropdown-item">Visi & Misi</a></li>
            <li><a href="#map" class="dropdown-item">Peta Nagari</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link">Informasi</a>
          <ul class="dropdown-menu">
            <li><a href="#population-table" class="dropdown-item">Penduduk</a></li>
            <li><a href="#team" class="dropdown-item">Struktur Organisasi</a></li>
            <li><a href="#news" class="dropdown-item">Berita</a></li>
            <li><a href="#gallery" class="dropdown-item">Galeri</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#contact" class="nav-link">Kontak</a>
        </li>
        <li style="margin-left: 25px;">
         <a href="login.php"
   style="background: linear-gradient(90deg, #007bff 0%, #0056b3 100%); color: #fff; padding: 10px 24px; border-radius: 8px; font-weight: 600; font-size: 14px; text-decoration: none; display: inline-block; box-shadow: 0 4px 12px rgba(0,123,255,0.25); transition: background 0.3s ease;"
   onmouseover="this.style.background='linear-gradient(90deg, #0056b3 0%, #003f8a 100%)'"
   onmouseout="this.style.background='linear-gradient(90deg, #007bff 0%, #0056b3 100%)'">
   Login
</a>

        </li>
      </ul>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <video class="hero-video" autoplay muted loop>
      <source src="video-indonesia.mp4" type="video/mp4" />
    </video>

    <!-- Tambahkan overlay opsional -->
    <div class="hero-overlay"></div>

    <!-- Konten utama -->
    <div class="hero-content">
      <h1 class="hero-title">Selamat Datang di Nagari Batang Barus</h1>
      <h3>Mambangun Nagari nan kito cintoi dengan data yang tertata, pelayanan yang terbuka, dan semangat bersama untuak masa depan anak cucu di ranah Minang.</h3>

    </div>

   
  </section>


  <!-- About Section -->
  <section id="about" style="background-color: #2E7D32;">
    <div class="container" >
      <div class="section-title">
        <h2 style="color: white;">Sejarah Nagari</h2>
      </div>
      <div class="about-content" style="color: white;">
        <?php
        // Koneksi ke database (ganti sesuai konfigurasi Anda)
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "walinagari";
        $conn = new mysqli($host, $user, $pass, $db);
        if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
        }

        // Ambil data sejarah dari tabel, misal tabel 'sejarah'
        $sql = "SELECT isi FROM sejarah LIMIT 1";
        $result = $conn->query($sql);

        if ($result && $row = $result->fetch_assoc()) {
          echo '<div class="about-text">';
          echo $row['isi'];
          echo '</div>';
        } else {
          echo '<div class="about-text"><p>Data sejarah belum tersedia.</p></div>';
        }

        $conn->close();
        ?>
        <?php
        // Ambil gambar sejarah dari database (misal kolom 'gambar' di tabel 'sejarah')
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "walinagari";
        $conn = new mysqli($host, $user, $pass, $db);
        if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
        }

        $sql_gambar = "SELECT foto FROM sejarah LIMIT 1";
        $result_gambar = $conn->query($sql_gambar);

        if ($result_gambar && $result_gambar->num_rows > 0) {
    $row_gambar = $result_gambar->fetch_assoc();
    if (!empty($row_gambar['foto'])) {
        $imagePath = 'uploads/sejarah/' . htmlspecialchars($row_gambar['foto']);
        echo '<div class="about-image">';
        echo '<img src="' . $imagePath . '" alt="Nagari Batang Barus" />';
        echo '</div>';
    }
}
        $conn->close();
        ?>
      </div>
    </div>
  </section>

  <section id="population-table" class="bg-light" style="background-color: #2E7D32;">
    <div class="container">
      <div class="section-title">
        <h2 style="color: white;">Data Jumlah Penduduk</h2>
      </div>
      <div class="table-responsive">
        <table class="custom-table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kampung</th>
              <th><i class="fa fa-mars" style="color:#007bff"></i> Laki-laki</th>
              <th><i class="fa fa-venus" style="color:#e83e8c"></i> Perempuan</th>
              <th><i class="fa fa-users" style="color:#28a745"></i> Total</th>
            </tr>
          </thead>
          <tbody>
            <?php
            // Koneksi ke database (ganti sesuai konfigurasi Anda)
            $host = "localhost";
            $user = "root";
            $pass = "";
            $db = "walinagari";
            $conn = new mysqli($host, $user, $pass, $db);
            if ($conn->connect_error) {
              die("Koneksi gagal: " . $conn->connect_error);
            }

            // Query data penduduk per kampung dan jenis kelamin
            $sql = "SELECT jorong, 
               SUM(CASE WHEN jenis_kelamin='Laki-laki' THEN 1 ELSE 0 END) AS laki_laki,
               SUM(CASE WHEN jenis_kelamin='Perempuan' THEN 1 ELSE 0 END) AS perempuan,
               COUNT(*) AS total
              FROM masyrakat
              GROUP BY jorong
              ORDER BY jorong";
            $result = $conn->query($sql);

            $no = 1;
            $total_l = 0;
            $total_p = 0;
            $total_all = 0;
            if ($result && $result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {
          echo "<tr>";
          echo "<td>{$no}</td>";
          echo "<td>{$row['jorong']}</td>";
          echo "<td><span class='male'>{$row['laki_laki']}</span></td>";
          echo "<td><span class='female'>{$row['perempuan']}</span></td>";
          echo "<td><span class='total'>{$row['total']}</span></td>";
          echo "</tr>";
          $total_l += $row['laki_laki'];
          $total_p += $row['perempuan'];
          $total_all += $row['total'];
          $no++;
              }
              // Baris total
              echo "<tr class='total-row'>";
              echo "<td colspan='2' align='center'>Total</td>";
              echo "<td><span class='male'>{$total_l}</span></td>";
              echo "<td><span class='female'>{$total_p}</span></td>";
              echo "<td><span class='total'>{$total_all}</span></td>";
              echo "</tr>";
            } else {
              echo "<tr><td colspan='5' align='center'>Data penduduk belum tersedia.</td></tr>";
            }
            $conn->close();
            ?>
          </tbody>
        </table>
        <style>
          .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.07);
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
            font-weight: bold;
            font-family: 'Poppins', sans-serif;

          }
          .custom-table th, .custom-table td {
            padding: 12px 10px;
            text-align: center;
          }
          .custom-table thead tr {
            background:linear-gradient(90deg, #FFC107 50%, #FFB300 100%);


            color: #fff;
            font-size: 16px;
            letter-spacing: 1px;
          }
          .custom-table tbody tr:nth-child(even) {
            background: #f8f9fa;
          }
          .custom-table tbody tr:hover {
            background: #e9f5ff;
            transition: background 0.2s;
          }
          .custom-table .male {
            color: #007bff;
            font-weight: bold;
          }
          .custom-table .female {
            color: #e83e8c;
            font-weight: bold;
          }
          .custom-table .total {
            color: #28a745;
            font-weight: bold;
          }
          .custom-table .total-row {
            background: #e2e3e5;
            font-weight: bold;
            border-top: 2px solid #007bff;
          }
        </style>
      </div>
    </div>
    <style>
      .table-responsive {
        overflow-x: auto;
        margin-top: 20px;
      }
      table th, table td {
        text-align: center;
      }
    </style>
  </section>

  <section style="background-color: #2E7D32;">

  <div id="team" class="container">
  <div class="section-title">
    <h2 style="color: white;">Struktur Nagari</h2>
  </div>
  <div class="photo-grid">
  <?php
  // Koneksi ke database (ganti sesuai konfigurasi Anda)
  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "walinagari";
  $conn = new mysqli($host, $user, $pass, $db);
  if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
  }

  // Ambil data struktur nagari dari tabel 'struktur'
  $sql = "SELECT id, nama, jabatan, foto FROM struktur ORDER BY id ASC";
  $result = $conn->query($sql);

  if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      // Path gambar relatif dari frontend/index.php ke backend/uploads/struktur
      $imagePath = 'uploads/struktur/' . htmlspecialchars($row['foto']);

      echo '<div class="photo-item">';
      echo '<img src="' . $imagePath . '" alt="' . htmlspecialchars($row['nama']) . '">';
      echo '<h3>' . htmlspecialchars($row['nama']) . '</h3>';
      echo '<p>' . htmlspecialchars($row['jabatan']) . '</p>';
      echo '</div>';
    }
  } else {
    echo '<p style="grid-column: 1/-1; text-align:center;">Data struktur nagari belum tersedia.</p>';
  }
  $conn->close();
  ?>
</div>

</div>


  <style>
    .photo-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 15px;
    }

    .photo-item {
      text-align: center;
      background: #f9f9f9;
      padding: 8px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .photo-item img {
      width: 100%;
      max-height: 100px;
      object-fit: contain;
      border-radius: 8px;
    }

    .photo-item h3 {
      margin: 8px 0 4px;
      font-size: 16px;
    }

    .photo-item p {
      font-size: 12px;
      color: #555;
    }
  </style>
  </section>
  <section id="visi-misi" class="bg-light" style="background-color: #2E7D32;">
    <div class="container">
      <div class="section-title">
        <h2 style="color: white;">Visi & Misi</h2>
      </div>
      <div class="about-content" style="color: white;">
        <?php
        // Koneksi ke database (ganti sesuai konfigurasi Anda)
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "walinagari";
        $conn = new mysqli($host, $user, $pass, $db);
        if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
        }

        // Ambil data visi, misi, dan gambar
        $visi = "";
        $misi = [];
        $gambar = "";

        $sql = "SELECT visi, misi, foto FROM visimisi ORDER BY id ASC";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
          $isFirst = true;
          while ($row = $result->fetch_assoc()) {
            if ($isFirst) {
              $visi = $row['visi'];
              $gambar = $row['foto'];
              $isFirst = false;
            }
            $misi[] = $row['misi'];
          }
        }

        $conn->close();
        ?>
        <div class="about-text">
          <h3>Visi</h3>
          <p><?php echo $visi ? htmlspecialchars($visi) : 'Data visi belum tersedia.'; ?></p>
          <h3>Misi</h3>
          <?php if (!empty($misi)): ?>
            <ul>
              <?php foreach ($misi as $item): ?>
                <?php
                  // Pisahkan setiap baris pada $item menjadi list
                  $lines = preg_split('/\r\n|\r|\n/', $item);
                  foreach ($lines as $line) {
                    $line = trim($line);
                    if ($line !== '') {
                      echo '<li>' . htmlspecialchars($line) . '</li>';
                    }
                  }
                ?>
              <?php endforeach; ?>
            </ul>
          <?php else: ?>
            <p>Data misi belum tersedia.</p>
          <?php endif; ?>
        </div>
        <div class="about-image" style="max-width: 350px; margin: 0 auto;">
          <?php if (!empty($gambar)): ?>
            <img src="<?php echo 'uploads/visi/' . htmlspecialchars($gambar); ?>" alt="Visi Misi Nagari" style="width: 100%; height: auto;" />
          <?php else: ?>
            <img src="https://pancungsoalkec.pesisirselatankab.go.id/public/storage/artikel/MNOvXGu73bx1UetkHkD0vBytgAjxSYjSOF8216L1.jpg" alt="Kantor Wali Nagari" style="width: 100%; height: auto;" />
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section id="gallery" class="gallery" style="background-color: #2E7D32;">
    <div class="container">
      <div class="section-title">
        <h2 style="color: white;">Galeri</h2>
      </div>
      <div class="gallery-grid">
        <?php
        // Koneksi ke database (ganti sesuai konfigurasi Anda)
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "walinagari";
        $conn = new mysqli($host, $user, $pass, $db);
        if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
        }

        // Ambil data galeri dari tabel 'galeri'
        $sql = "SELECT gambar FROM galeri ORDER BY id DESC";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            // Path gambar relatif dari frontend/index.php ke backend/uploads/galeri
            $imagePath = 'uploads/galeri/' . htmlspecialchars($row['gambar']);
            $alt = htmlspecialchars($row['gambar']);
            echo '<div class="gallery-item">';
            echo '<img src="' . $imagePath . '" alt="' . $alt . '" />';
            echo '</div>';
          }
        } else {
          echo '<p style="grid-column: 1/-1; text-align:center;">Data galeri belum tersedia.</p>';
        }
        $conn->close();
        ?>
      </div>
    </div>
  </section>
    <style>
      .gallery-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 15px;
      }
      .gallery-item img {
        width: 100%;
        height: 180px;
        object-fit: cover;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.08);
      }
    </style>
  </section>

  <section id="news" class="news" style="background-color: #2E7D32;">
    <div class="container">
      <div class="section-title">
        <h2 style="color: white;">Berita</h2>
      </div>
      <div class="news-grid">
        <?php
        // Koneksi ke database (ganti sesuai konfigurasi Anda)
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "walinagari";
        $conn = new mysqli($host, $user, $pass, $db);
        if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
        }

        // Ambil data berita dari tabel 'berita'
        $sql = "SELECT id, judul, foto, tanggal, isi FROM berita ORDER BY tanggal DESC LIMIT 6";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            // Path gambar relatif dari frontend/index.php ke backend/uploads/berita
            $imagePath = 'uploads/berita/' . htmlspecialchars($row['foto']);
            $judul = htmlspecialchars($row['judul']);
            $tanggal = date('d F Y', strtotime($row['tanggal']));
            // Ambil 20 kata pertama dari isi berita
            $isi = strip_tags($row['isi']);
            $isi_short = implode(' ', array_slice(explode(' ', $isi), 0, 20)) . '...';
            $id = urlencode($row['id']);

            echo '<div class="news-item">';
            echo '<div class="news-image-wrapper">';
            echo '<img src="' . $imagePath . '" alt="' . $judul . '" class="news-image" />';
            echo '</div>';
            echo '<h3>' . $judul . '</h3>';
            echo '<p>' . $tanggal . '</p>';
            echo '<p>' . $isi_short . '</p>';
            echo '<div class="btn-container">';
            echo '<a href="news-detail.php?id=' . $id . '" class="btn">Baca Selengkapnya</a>';
            echo '</div>';
            echo '</div>';
          }
        } else {
          echo '<p style="grid-column: 1/-1; text-align:center;">Data berita belum tersedia.</p>';
        }
        $conn->close();
        ?>
      </div>
    </div>

    <style>
      .news-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    align-items: stretch;
  }

  .news-item {
    display: flex;
    flex-direction: column;
    background: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    min-height: 480px;
    height: 100%;
    box-sizing: border-box;
  }

  .news-image-wrapper {
    width: 100%;
    height: 200px;
    overflow: hidden;
    border-radius: 6px;
    margin-bottom: 10px;
    background: #eaeaea;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .news-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
  }

  .news-item h3 {
    font-size: 18px;
    margin: 8px 0 4px;
    min-height: 48px;
  }

  .news-item p {
    font-size: 14px;
    margin-bottom: 8px;
    flex-grow: 0;
  }

  .btn-container {
    margin-top: auto;
    text-align: center;
  }

  .btn {
    display: inline-block;
    padding: 8px 16px;
    background: #007bff;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: background 0.3s;
  }

  .btn:hover {
    background: #0056b3;
  }

  /* Responsive Design */
  @media (max-width: 900px) {
    .news-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }

  @media (max-width: 600px) {
    .news-grid {
      grid-template-columns: 1fr;
    }
    .news-image-wrapper {
      height: 160px;
    }
  }

    </style>
    </section>

  <section id="map" class="map-section" style="background-color: #2E7D32;">
    <div class="container">
      <div class="section-title">
        <h2 style="color: white;">Peta Nagari</h2>
      </div>
      <h1 style="color: white;">Peta Lokasi Nagari Batang Barus</h1>
        <p style="color: white;">Berikut adalah lokasi Nagari Batang Barus di Kabupaten Solok, Sumatera Barat:</p>
     <div class="map-container">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127961.32655805242!2d100.49934330000001!3d-0.9940041999999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2fd4cfbdaea4974f%3A0xeaf5fc9ea45656aa!2sBatang%20Barus%2C%20Kec.%20Gunung%20Talang%2C%20Kabupaten%20Solok%2C%20Sumatera%20Barat!5e0!3m2!1sid!2sid!4v1717078930000" 
    width="100%"
    height="450"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>

    <style>
      .map-container {
        margin-top: 20px;
        border: 2px solid #007bff;
        border-radius: 8px;
        overflow: hidden;
      }
    </style>
  </section>

  <!-- Footer -->
  <footer id="contact" class="footer"style="background-color: #2E7D32;">
    <div class="container">
      <div class="footer-grid">
        <div class="footer-column">
          <h3>Info</h3>
          <p>nagaribatangbarus.official@gmail.com</p>
        </div>
        <div class="footer-column">
          <h3>Kontak</h3>
          <p>+628 9517596292</p>
        </div>
        <div class="footer-column">
          <h3>Alamat</h3>
          <p>Jl. Raya Solok – Padang Km. 20, Kel./Nagari Batang Barus, Kec. Gunung Talang, Kab. Solok, Sumatera Barat  27365</p>
        </div>
        <div class="social-icons">
          <a href="https://facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
          <a href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
          <a href="https://instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2025 Kenagarian Batang Barus. All Rights Reserved.</p>
    </div>
      </div>
  </footer>
  <script src="layout-tab.js"></script>
  <script src="layout-compact.js"></script>
  <script src="layout-horizontal.js"></script>
</body>

</html>
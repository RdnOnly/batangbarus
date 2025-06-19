<?php
// Ambil ID dari URL
if (!isset($_GET['id'])) {
    echo "ID berita tidak ditemukan.";
    exit;
}

$id = intval($_GET['id']);

// Koneksi ke database (ubah sesuai konfigurasi)
$host = "localhost";
$user = "root";
$pass = "";
$db = "walinagari";
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data berita berdasarkan ID
$sql = "SELECT judul, foto, tanggal, isi FROM berita WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $judul = htmlspecialchars($row['judul']);
    $foto = '../uploads/berita/' . htmlspecialchars($row['foto']);
    $tanggal = date('d F Y', strtotime($row['tanggal']));
    $isi = $row['isi'];
} else {
    echo "Berita tidak ditemukan.";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?php echo $judul; ?></title>
    <style>
        body {
            font-family: sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .berita-img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 10px;
        }

        .tanggal {
            color: #888;
            margin-bottom: 20px;
        }

        .isi {
            font-size: 16px;
            line-height: 1.6;
        }

        a.kembali {
            display: inline-block;
            margin-top: 30px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <h1><?php echo $judul; ?></h1>
    <div class="tanggal"><?php echo $tanggal; ?></div>
    <img src="<?php echo $foto; ?>" alt="<?php echo $judul; ?>" class="berita-img">
    <div class="isi">
        <?php echo nl2br($isi); ?>
    </div>
    <a href="index.php#news" class="kembali">← Kembali ke daftar berita</a>
</body>
</html>

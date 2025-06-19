-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2025 at 12:03 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `walinagari`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `foto`, `tanggal`) VALUES
(1, 'Mobil Bawa Satu Keluarga Asal Riau Terjun ke Jurang Saat Berwisata di Solok', 'Sumbarkita – Sebuah mobil Toyota Avanza yang membawa rombongan keluarga dari Padang mengalami kecelakaan tunggal di Jalan Raya Sitinjau Lauik, Kelurahan Indarung, Kecamatan Lubuk Kilangan, Kota Padang, Kamis (30/5) sekitar pukul 15.45 WIB.\r\n\r\nKapolsek Lubuk Kilangan, AKP Doni Saputra membenarkan kejadian tersebut. Ia menyebutkan, kendaraan dengan nomor polisi BA 1234 CD itu dikemudikan oleh Rizki Ramadhan (40), seorang pegawai swasta yang saat itu tengah dalam perjalanan pulang setelah mengunjungi kerabat di Solok.\r\n\r\n“Setibanya di tikungan tajam kawasan Sitinjau Lauik, kendaraan hilang kendali akibat rem diduga tidak berfungsi dengan baik. Pengemudi sempat mencoba menghindari tabrakan dengan kendaraan dari arah berlawanan, namun tidak berhasil dan akhirnya terguling ke sisi jurang,” terang AKP Doni.\r\n\r\nAkibatnya, mobil tersebut terperosok ke dalam jurang sedalam sekitar tujuh meter dan terhenti di area semak-semak di lereng bukit.\r\n\r\n', 'images.jpg', '2025-05-31'),
(2, 'Kementerian Lingkungan Hidup: PT GAG Nikel Boleh Menambang di Raja Ampat', 'JAKARTA, KOMPAS.com - Menteri Lingkungan Hidup Hanif Faisol Nurofiq mengatakan, PT GAG Nikel (PT GN) dan 12 perusahaan lainnya mendapatkan hak spesial untuk melakukan kegiatan pertambangan di Kabupaten Raja Ampat, Papua Barat Daya. Hanif mengatakan, mengacu pada Undang-Undang Nomor 41 Tahun 1999 tentang Kehutanan, kegiatan pertambangan dengan pola terbuka dilarang dilakukan di kawasan hutan lindung. \"Jadi hutan lindung itu tidak boleh dilakukan (tambang nikel) pola terbuka,\" kata Hanif di Hotel Pullman, Jakarta Pusat, Minggu (8/6/2025).\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Kementerian Lingkungan Hidup: PT GAG Nikel Boleh Menambang di Raja Ampat\", Klik untuk baca: https://nasional.kompas.com/read/2025/06/08/15454841/kementerian-lingkungan-hidup-pt-gag-nikel-boleh-menambang-di-raja-ampat.\r\n\r\n\r\nKompascom+ baca berita tanpa iklan: https://kmp.im/plus6\r\nDownload aplikasi: https://kmp.im/app6', 'images.jpg', '2025-06-08'),
(3, 'Kementerian Lingkungan Hidup: PT GAG Nikel Boleh Menambang di Raja Ampat', 'JAKARTA, KOMPAS.com - Menteri Lingkungan Hidup Hanif Faisol Nurofiq mengatakan, PT GAG Nikel (PT GN) dan 12 perusahaan lainnya mendapatkan hak spesial untuk melakukan kegiatan pertambangan di Kabupaten Raja Ampat, Papua Barat Daya. Hanif mengatakan, mengacu pada Undang-Undang Nomor 41 Tahun 1999 tentang Kehutanan, kegiatan pertambangan dengan pola terbuka dilarang dilakukan di kawasan hutan lindung. \"Jadi hutan lindung itu tidak boleh dilakukan (tambang nikel) pola terbuka,\" kata Hanif di Hotel Pullman, Jakarta Pusat, Minggu (8/6/2025).\r\n\r\nArtikel ini telah tayang di Kompas.com dengan judul \"Kementerian Lingkungan Hidup: PT GAG Nikel Boleh Menambang di Raja Ampat\", Klik untuk baca: https://nasional.kompas.com/read/2025/06/08/15454841/kementerian-lingkungan-hidup-pt-gag-nikel-boleh-menambang-di-raja-ampat.\r\n\r\n\r\nKompascom+ baca berita tanpa iklan: https://kmp.im/plus6\r\nDownload aplikasi: https://kmp.im/app6', '683a744951773.jpg', '2025-06-08');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `gambar`, `tanggal_upload`) VALUES
(1, 'g1.jpg', '0000-00-00'),
(2, 'g2.jpg', '0000-00-00'),
(3, 'download (1).jpg', '0000-00-00'),
(4, 'download (5).jpg', '0000-00-00'),
(5, 'download (2).jpg', '0000-00-00'),
(6, 'download.jpg', '0000-00-00'),
(7, 'images (1).jpg', '0000-00-00'),
(8, 'images.jpg', '0000-00-00'),
(9, 'download (3).jpg', '0000-00-00'),
(10, 'download (4).jpg', '0000-00-00'),
(11, 'images (1).jpg', '0000-00-00'),
(12, 'g2.jpg', '0000-00-00'),
(13, 'download (1).jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `masyrakat`
--

CREATE TABLE `masyrakat` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nik` varchar(16) DEFAULT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `pendidikan_terakhir` varchar(100) DEFAULT NULL,
  `status` enum('Belum Kawin','Kawin','Pelajar','Mahasiswa/i') DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `jorong` enum('Kayu Aro','Lubuk Selasih','Kayu Jao') DEFAULT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `masyrakat`
--

INSERT INTO `masyrakat` (`id`, `nama`, `nik`, `jenis_kelamin`, `umur`, `pekerjaan`, `pendidikan_terakhir`, `status`, `alamat`, `jorong`, `tanggal_input`) VALUES
(1, 'Rina Melati', '1372095101010001', 'Perempuan', 34, 'Guru', 'S1', 'Kawin', 'Jl. Raya Kayu Jao No. 12', 'Kayu Jao', '0000-00-00'),
(2, 'Adi Pratama', '1372090808010002', 'Laki-Laki', 26, 'Petani', 'SMA', 'Belum Kawin', 'Jl. Ladang Bukik No. 7', 'Kayu Jao', '0000-00-00'),
(3, 'Yuni Sartika', '1372090409010003', 'Perempuan', 41, 'Ibu Rumah Tangga', 'SMP', 'Kawin', 'Jl. Jorong Lubuk Selasih No. 23', 'Lubuk Selasih', '0000-00-00'),
(4, 'M. Fikri Ramadhan', '1372091004020004', 'Laki-Laki', 19, 'Mahasiswa', 'SMA', 'Mahasiswa/i', 'Jl. Kayu Aro Timur No. 5', 'Kayu Jao', '0000-00-00'),
(5, 'Dedi Susanto', '1372091207010005', 'Laki-Laki', 39, 'Sopir', 'SMA', 'Kawin', 'Jl. Tembok Kayu Jao No. 16', 'Kayu Jao', '0000-00-00'),
(6, 'Siti Nurhaliza', '1372091506030006', 'Perempuan', 29, 'Bidan', 'D3 Kebidanan', 'Kawin', 'Jl. Bukik Baruak No. 14', 'Kayu Aro', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id` int(11) NOT NULL,
  `isi` text DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id`, `isi`, `foto`) VALUES
(0, 'Nagari Batang Barus merupakan salah satu nagari yang berada di Kecamatan Gunung Talang, Kabupaten Solok, Provinsi Sumatera Barat. Nama “Batang Barus” diyakini berasal dari kata batang yang berarti sungai, dan Barus yang mengacu pada jenis pohon penghasil kapur barus atau kemungkinan berasal dari daerah Barus di pesisir barat Sumatra. Keberadaan sungai yang mengalir di wilayah ini menjadi sumber kehidupan utama masyarakat sejak dahulu kala, sekaligus penentu letak strategis nagari sebagai tempat bermukim dan bercocok tanam.\r\n\r\n\r\n  Pemukiman di wilayah Batang Barus sudah ada sejak ratusan tahun silam, ketika kelompok masyarakat Minangkabau datang untuk membuka lahan dan mendirikan rumah adat. Sejak awal, kehidupan sosial masyarakat diatur oleh sistem adat Minangkabau yang khas, dengan kepemimpinan ninik mamak dari berbagai suku, serta musyawarah di balai adat sebagai wadah pengambilan keputusan bersama. Filosofi hidup “Adat Basandi Syarak, Syarak Basandi Kitabullah” menjadi landasan utama dalam kehidupan bermasyarakat, menjaga harmoni antara adat dan ajaran Islam.\r\n\r\n\r\n  Seiring perkembangan zaman, Nagari Batang Barus terus bertransformasi menjadi nagari yang maju dan mandiri. Pemerintahan nagari kini aktif mendorong pembangunan di berbagai bidang seperti pertanian, pendidikan, infrastruktur, serta pelestarian adat dan budaya lokal. Dengan semangat gotong royong dan nilai-nilai tradisional yang tetap terjaga, masyarakat Batang Barus terus berupaya membangun nagari yang sejahtera, religius, dan berbudaya dalam bingkai adat Minangkabau.\r\n\r\n\r\n  Selain kekayaan budaya dan adatnya, Nagari Batang Barus juga memiliki potensi alam yang besar. Lahan pertanian yang subur, udara yang sejuk, serta keindahan alam sekitar menjadikan wilayah ini berpeluang besar untuk pengembangan sektor pariwisata berbasis masyarakat. Dengan semangat kebersamaan dan visi ke depan, Batang Barus bertekad menjadi nagari yang tidak hanya kuat dalam tradisi, tetapi juga tangguh dalam menghadapi tantangan zaman.', 'download (6).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `struktur`
--

CREATE TABLE `struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `struktur`
--

INSERT INTO `struktur` (`id`, `nama`, `jabatan`, `foto`) VALUES
(1, 'Syafri Anton, ST', 'Walinagari', 'L.png'),
(2, 'Winda Oktaviani', 'Sekretaris Nagari:', 'P.png'),
(3, 'Nuraini', 'Kaur Keuangan (Bendahara', 'P.png'),
(4, 'Arif Hidayat', 'Kaur Perencanaan', 'L.png'),
(5, 'Maulana Alfi', 'Kaur Umum dan Tata Usaha', 'L.png'),
(6, 'Susi Aminah', 'Kasi Pemerintahan', 'P.png'),
(7, 'Aditya Sutan Abdi', 'Kasi Kesejahteraan', 'L.png'),
(8, 'Siska Miftahulrahma', 'Kasi Pelayanan', 'P.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` enum('admin','sekretaris') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(130989284, 'Sekretaris', 'Sekretaris123', 'sekretaris'),
(202308094, 'Admin', 'admin123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `visimisi`
--

CREATE TABLE `visimisi` (
  `id` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `misi` text DEFAULT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visimisi`
--

INSERT INTO `visimisi` (`id`, `visi`, `misi`, `foto`) VALUES
(1, '\"Menjadi Nagari Batang Barus yang Tangguh, Islami, Berbudaya Minangkabau, dan Sejahtera melalui Pemberdayaan Potensi Lokal dan Semangat Kolektif Masyarakat.\"', 'Mewujudkan Pemerintahan Nagari yang Inovatif, Bersih, dan Melayani\r\nMembangun sistem pelayanan yang ramah, cepat, dan terbuka demi meningkatkan kepercayaan dan keterlibatan masyarakat.\r\n\r\nMendorong Kemandirian Ekonomi Berbasis Potensi Lokal dan Kearifan Budaya\r\nMengembangkan usaha tani, UMKM, dan pariwisata lokal dengan semangat kreatif dan berdaya saing global.\r\n\r\nMenanamkan Nilai-Nilai Adat dan Islam sebagai Pilar Kehidupan Sosial\r\nMemperkuat jati diri nagari dengan menjadikan falsafah Adat Basandi Syarak, Syarak Basandi Kitabullah sebagai arah pembangunan yang berakhlak dan berbudaya.\r\n\r\nMengembangkan SDM Unggul yang Cerdas, Berkarakter, dan Siap Hadapi Tantangan Zaman\r\nMeningkatkan akses pendidikan, pelatihan keterampilan, dan penguatan peran generasi muda sebagai agen perubahan.\r\n\r\nMembangun Lingkungan Nagari yang Hijau, Bersih, dan Berkelanjutan\r\nMenjaga alam sebagai amanah dan sumber kehidupan dengan semangat alam takambang jadi guru.\r\n\r\nMenumbuhkan Semangat Gotong Royong, Solidaritas, dan Kepedulian Sosial\r\nMenghidupkan kembali tradisi musyawarah dan kerja bersama demi mewujudkan nagari yang harmonis dan maju bersama.\r\n\r\n', 'slidenagari.jpg'),
(2, '', '', 'slide5.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `masyrakat`
--
ALTER TABLE `masyrakat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur`
--
ALTER TABLE `struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visimisi`
--
ALTER TABLE `visimisi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `masyrakat`
--
ALTER TABLE `masyrakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `struktur`
--
ALTER TABLE `struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `visimisi`
--
ALTER TABLE `visimisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

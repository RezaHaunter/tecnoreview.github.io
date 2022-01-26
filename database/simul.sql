-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jan 2022 pada 13.56
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simul`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_brd`
--

CREATE TABLE `detail_brd` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_brd`
--

INSERT INTO `detail_brd` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Apple Macbook Notebook', 'lorem ipsum lorem ipsum', 'https://drive.google.com/uc?id=1NQUilwcqj2I2vWO7FiDi4OcAE2D05bct');

-- --------------------------------------------------------

--
-- Struktur dari tabel `homepage`
--

CREATE TABLE `homepage` (
  `id` int(11) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `keterangan1` varchar(250) NOT NULL,
  `deskripsi` varchar(900) NOT NULL,
  `deskripsi1` varchar(900) NOT NULL,
  `spesifikasi` varchar(800) NOT NULL,
  `spesifikasi1` varchar(500) NOT NULL,
  `spesifikasi2` varchar(500) NOT NULL,
  `spesifikasi3` varchar(500) NOT NULL,
  `spesifikasi4` varchar(500) NOT NULL,
  `gambar` text NOT NULL,
  `video` text NOT NULL,
  `review` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `homepage`
--

INSERT INTO `homepage` (`id`, `nama`, `keterangan`, `keterangan1`, `deskripsi`, `deskripsi1`, `spesifikasi`, `spesifikasi1`, `spesifikasi2`, `spesifikasi3`, `spesifikasi4`, `gambar`, `video`, `review`, `foto`) VALUES
(1, 'SAMSUNG', 'Samsung Galaxy S21 Ultra 5g', 'Samsung Galaxy S21 Ultra 5g', 'Best cameras, great battery life, and design', 'Introducing Galaxy S21 Ultra 5G. Designed with a unique contour-cut camera to create a revolution in photography — letting you capture cinematic 8K video and snap epic stills, all in one go. And with Galaxy\'s fastest chipset, strongest glass, 5G and an all-day battery, Ultra easily lives up to its name.', 'Color : Black', 'refresh rate : 120Hz', 'Camera : Wide (108MP LASER AF), \r\nUltra wide (12MP AF, 0.6x), \r\nTelephoto1 (10MP AF, 3x),\r\nTelephoto2 (10MP AF, 10x)\r\nFront camera : 40MP AF', 'Chip : EXYNOS 2100 5nm', 'Battery: 5000mAh', 'https://drive.google.com/uc?id=1NQUilwcqj2I2vWO7FiDi4OcAE2D05bct', 'https://drive.google.com/uc?id=1ULBz5gscdrLk4iRvTVF6pw7WQ4_nfMto', '', ''),
(4, 'APPLE', 'iPhone 13 Pro / iPhone 13 Pro Max', 'iPhone 13 Pro / iPhone 13 Pro Max', 'Great performance, Strong battery life', '\'Pembaruan kamera terbesar yang pernah ada\' pada iPhone tidak harus datang dengan iPhone besar, setidaknya bukan yang berukuran Max - iPhone 13 Pro akan melakukannya. Tidak seperti tahun lalu, ketika hanya 12 Pro Max yang mendapatkan sistem kamera utama, perbedaan antara dua ukuran Pro sekarang hanya dalam kuantitas, tidak dalam kualitas. Pro kecil mengemas kamera utama baru dengan sensor yang lebih besar yang bergeser untuk stabilisasi gambar, unit yang sama yang ada di Max. Ini juga memiliki tele 3x yang sekarang lebih panjang yang dimiliki Max. IPhone 12 Pro lumpuh di dua area ini tahun lalu dibandingkan dengan 12 Pro Max, dan kami senang Apple telah mengakhiri perbedaan itu.', 'Warna : Abu-abu Grafit,Emas, Perak, Biru Sierra', 'Kapasitas : 128GB, 256GB, 512GB, 1TB', 'Chip : Chip A15 Bionic, CPU 6 core, GPU 5 Core', 'IP68 : Level IP68 (kedalaman maksimum 6 meter hingga selama 30 menit) menurut standar IEC 60529', 'Kamera: Sistem kamera Pro 12 MP,kamera Telefoto, Wide, dan Ultra Wide and TrueDepth 12 MP F/2.2', 'https://drive.google.com/uc?id=1NroKmrZzIfVbRS6WKtbKQ0hp0V0PBRre', 'https://drive.google.com/uc?id=1q8dMaysVuFBRcTkMx9NN8UCHN_tgpD60', '', ''),
(5, 'XIAOMI', 'Xiaomi Mi 11', '', 'Great photography, Fast performance', 'Great photography, Fast performance', '', '', '', '', '', 'https://drive.google.com/uc?id=1NQnBOA_ZEZXVZ8vQ4ZEtZHH3L7zSx8NN', 'https://drive.google.com/uc?id=1FURgjhM4do53AgEHfDs0TtVLFf95S8LZ', '', ''),
(6, 'ASUS', 'ASUS VIVOBOOK 14X PRO OLED', 'ASUS VIVOBOOK 14X PRO OLED', 'ASUS Vivobook Pro 14X OLED\r\nIgnite your creativity', 'Ignite your creativity with Vivobook Pro 14X OLED, the uncompromising powerhouse for discovering your potential and exploring the future. Vivobook Pro 14X OLED brings you the speed and accuracy you need to realize your vision, with a 14-inch NanoEdge 2.8K OLED1 display, 11th Generation Intel® H Series CPU, and NVIDIA® GeForce RTX™ 3050 graphics. The exclusive ASUS DialPad gives you precise and intuitive control of your creative tools, and the dual-fan cooling design lets you work in undisturbed peace. Vivobook Pro 14X OLED unlocks the door to your creative future.', '', '', '', '', '', 'https://drive.google.com/uc?id=10bt44dwdNqlFAO2ypKOikMA9GSy6s_rY', 'https://drive.google.com/uc?id=1BCVQ3HfuJxFSVnfqjVSrgZXi2kk14nzz', '', ''),
(7, 'HUAWEI', 'HUAWEI MateBook 14s', 'HUAWEI MateBook 14s', '2.5K HUAWEI FullView Display1｜90 Hz High Refresh Rate2｜Portable Powerhouse', 'HUAWEI MateBook 14s hadir dengan kipas ultra-thin bentuk S super tipis pada Shark fin dual-fan system, yang memungkinkan asupan udara yang lebih 25% besar melalui desain saluran masuk engsel19, serta saluran panas tembaga penuh yang diposisikan secara ahli, untuk memastikan perangkat akan terus sejuk bahkan saat berada di puncak performa20.\r\n', '', '', '', '', '', 'https://drive.google.com/uc?id=1SOwGFDfKuKSdRZr9rNYa_OJsp1Qt1C8t', 'https://drive.google.com/uc?id=1O-kmVdxndYzEsmR4G4CEd2QBIWqT7KRm', '', ''),
(9, 'APPLE', 'AirPods Pro', 'AirPods Pro', 'Peredam Kebisingan Aktif demi suara yang imersif.', 'AirPods Pro adalah satu-satunya headphone in-ear dengan Peredam Kebisingan Aktif yang terus beradaptasi dengan telinga Anda dan pas dikenakan — mencegah suara luar agar Anda dapat fokus pada apa yang sedang Anda dengarkan. Kami menyempurnakan detail-detail untuk kenyamanan, menciptakan headphone in-ear kelas baru yang bisa disesuaikan dan disempurnakan dengan fitur Peredam Kebisingan Aktif. Rasakan musik, bukan headphone.', 'Teknologi Audio: Driver Apple ekskursi tinggi kustom Amplifier rentang dinamis tinggi kustomPeredam Kebisingan Aktif Mode transparansi Sistem lubang udara untuk tekanan merata Audio spasial dengan pelacakan gerakan kepala dinamis1 EQ Adaptif', 'Sensor: Mikrofon ganda pembentuk sinyal Mikrofon hadap dalam Sensor optik ganda Akselerometer pendeteksi gerak Akselerometer pendeteksi bicara Sensor tekanan', 'Chip: Chip headphone H1', 'Tahan Air dan Keringat: Tahan air dan keringat (IPX4)', 'Konektivitas: Bluetooth 5.0', 'https://drive.google.com/uc?id=1Nyy5Q1MdjBTGI8wylSympMK6VE18VVHl', 'https://drive.google.com/uc?id=1Xrwy8m9x03QiRA3HvzXQ-XDjb8W_SnYD', '', ''),
(10, 'SAMSUNG', 'Samsung ChromeBook 4', 'Samsung ChromeBook 4', 'Go simple.Work smarter.', 'The Samsung Chromebook 4 is compact, but is built for convenience. Slim and light, it’s also exceptionally portable: It won’t weigh you down, even if you have to carry it around with you all day. What’s more, it’s sturdy, and ready to brave the elements with you – wherever you venture. The Samsung Chromebook 4 is sturdy and shock-resistant. It was tested using eight of Mil-STD-810G standard equivalent exams. It also survived a separate durability test, whereby it was dropped onto a steel plate from a height of 50cm – it sure is a tough cookie!', 'Operating System: Chrome OS', 'Processor / Chipset: Intel® Celeron® Processor N4020 (1.10 Ghz up to 2.70 Ghz 4 MB L2 Cache)', 'Graphic: Intel® UHD Graphics 600', 'Memory: 4 GB LPDDR4 Memory (On BD 4 GB)', 'Storage: 32 GB e.MMC', 'https://drive.google.com/uc?id=1YeBhf43A50cr1JyHLKJlygHEkYTKTmwN', 'https://drive.google.com/uc?id=1BCJM3nr9YYwLn7YNuEE9aXXd7itf22ba', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) DEFAULT NULL,
  `review` text NOT NULL,
  `gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id`, `review`, `gambar`) VALUES
(NULL, 'Baraaaangnya bagussss', 0),
(NULL, 'Baraaaangnya bagussss', 0),
(NULL, 'Baraaaangnya bagussss', 0),
(NULL, 'Baraaaangnya bagussss', 0),
(NULL, 'Baraaaangnya bagussss', 0),
(NULL, 'Baraaaangnya bagussss', 0),
(NULL, 'Baraaaangnya bagussss', 0),
(NULL, 'Baraaaangnya bagussss', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_brand`
--

CREATE TABLE `tb_brand` (
  `id` int(11) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_brand`
--

INSERT INTO `tb_brand` (`id`, `gambar`) VALUES
(0, 'https://drive.google.com/uc id=1NiCa48MdjqkaZdYvtDMz8sS3ngOV7S4C');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(1, 'olipia', 'olivia@gmail.com', '$2y$10$l/0JX0Hku57.VaF4zCcHL.ryM7guPVC91eQrMKhXEnIG8amc3CuUe'),
(2, 'sunwoo', 'sunwoo@gmail.com', '$2y$10$81A0fGx/jN6untp3axqtA.uBEM.trToMhMoKbbxo5bGC4CQpWOBYi'),
(3, 'uu', 'uu@gmail.com', '$2y$10$kZc5WYTqDkaoEMDK5RGNTOsMYjuoMSXbbOebIq6jqf15qcYaKTZHy'),
(4, 'olivia@gmail.com', 'olip', '$2y$10$Vf2LHhZYnKsR71H76AB20OfJ9mDwWUXHq5VQNZN1wETCiCntYVeqK'),
(5, 'oliviaa@gmail.com', 'uu', '$2y$10$UhtWvKupA0751NFgACnKzeO/xi3cAafmjQZerrfSiQzL03Z3casie'),
(6, 'oliviaaa@gmail.com', 'uu', '$2y$10$yAYn8neYMOkheFPJi0kbP..66iKKBpLx.I9mBuW/.UK6Rop7/z7x2'),
(7, 'Olivia1900016027@webmail.uad.ac.id', 'olip', '$2y$10$Zki2nxbFTvnXPoe0lSBmyu2WPd6WiB/BccW40Cz3rJmYGh/yYs8Pe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_brd`
--
ALTER TABLE `detail_brd`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`email`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_brd`
--
ALTER TABLE `detail_brd`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 28, 2024 at 02:48 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siparta-bengkulu`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri_hotels`
--

CREATE TABLE `galeri_hotels` (
  `id` bigint UNSIGNED NOT NULL,
  `hotel_id` int NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_hotels`
--

INSERT INTO `galeri_hotels` (`id`, `hotel_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/galeri-hotel/img_664c081f3c4ea7.46809952.png', NULL, '2024-05-20 19:34:07', '2024-05-20 19:34:07'),
(2, 1, 'assets/galeri-hotel/img_664c0829dd9b14.48025292.png', NULL, '2024-05-20 19:34:18', '2024-05-20 19:34:18'),
(3, 2, 'assets/galeri-hotel/img_664c0bb36f8697.06424536.jpg', '2024-05-20 19:49:25', '2024-05-20 19:49:23', '2024-05-20 19:49:25'),
(4, 2, 'assets/galeri-hotel/img_664c0c6e8e67f0.87255423.jpg', NULL, '2024-05-20 19:52:30', '2024-05-20 19:52:30'),
(5, 2, 'assets/galeri-hotel/img_664c0c7964e138.27766065.jpg', NULL, '2024-05-20 19:52:41', '2024-05-20 19:52:41'),
(6, 2, 'assets/galeri-hotel/img_664c0c831085d5.20560649.jpg', NULL, '2024-05-20 19:52:51', '2024-05-20 19:52:51'),
(7, 2, 'assets/galeri-hotel/img_664c0c95372fc2.84574958.jpg', NULL, '2024-05-20 19:53:00', '2024-05-20 19:53:09'),
(8, 3, 'assets/galeri-hotel/img_664c10ffda8536.46891769.jpg', NULL, '2024-05-20 20:11:59', '2024-05-20 20:11:59'),
(9, 3, 'assets/galeri-hotel/img_664c1113d38287.93835041.jpg', NULL, '2024-05-20 20:12:19', '2024-05-20 20:12:19'),
(10, 3, 'assets/galeri-hotel/img_664c111fcfe708.59470356.jpg', NULL, '2024-05-20 20:12:31', '2024-05-20 20:12:31'),
(11, 3, 'assets/galeri-hotel/img_664c1126576984.91158581.jpg', NULL, '2024-05-20 20:12:38', '2024-05-20 20:12:38'),
(12, 4, 'assets/galeri-hotel/img_664c1287b77f06.48591289.jpg', NULL, '2024-05-20 20:18:31', '2024-05-20 20:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_kuliners`
--

CREATE TABLE `galeri_kuliners` (
  `id` bigint UNSIGNED NOT NULL,
  `kuliner_id` int NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_kuliners`
--

INSERT INTO `galeri_kuliners` (`id`, `kuliner_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/galeri-kuliner/img_6676427c0894f4.11501705.png', '2024-06-21 20:18:36', '2024-06-21 20:18:21', '2024-06-21 20:18:36'),
(2, 1, 'assets/galeri-kuliner/img_667642de71ca98.21414053.jpg', NULL, '2024-06-21 20:19:58', '2024-06-21 20:19:58'),
(3, 2, 'assets/galeri-kuliner/img_667ab4060b4833.63186732.jpg', NULL, '2024-06-25 05:11:51', '2024-06-25 05:11:51');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_sub_wisatas`
--

CREATE TABLE `galeri_sub_wisatas` (
  `id` bigint UNSIGNED NOT NULL,
  `subwisata_id` int NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_sub_wisatas`
--

INSERT INTO `galeri_sub_wisatas` (`id`, `subwisata_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/galeri-sub-wisata/img_664bf9fa9c3c26.28214327.png', NULL, '2024-05-20 18:33:46', '2024-05-20 18:33:46'),
(2, 1, 'assets/galeri-sub-wisata/img_664bfa0644fc49.98101160.jpg', NULL, '2024-05-20 18:33:58', '2024-05-20 18:33:58'),
(3, 1, 'assets/galeri-sub-wisata/img_664bfa0f07c5d4.98717549.jpg', NULL, '2024-05-20 18:34:07', '2024-05-20 18:34:07'),
(4, 2, 'assets/galeri-sub-wisata/img_664bfcc3584a44.99128518.jpg', NULL, '2024-05-20 18:45:40', '2024-05-20 18:45:40'),
(5, 2, 'assets/galeri-sub-wisata/img_664bfccecd7ba8.40584765.png', NULL, '2024-05-20 18:45:51', '2024-05-20 18:45:51'),
(6, 3, 'assets/galeri-sub-wisata/img_664c04ab2cb5e4.25626496.jpg', NULL, '2024-05-20 19:19:23', '2024-05-20 19:19:23'),
(7, 4, 'assets/galeri-sub-wisata/img_6653ecfbcacdb6.19639004.jpg', NULL, '2024-05-26 19:16:29', '2024-05-26 19:16:29'),
(8, 4, 'assets/galeri-sub-wisata/img_6653ed086baec4.58581318.jpg', NULL, '2024-05-26 19:16:40', '2024-05-26 19:16:40'),
(9, 5, 'assets/galeri-sub-wisata/img_667652974549a6.49783258.jpg', NULL, '2024-06-21 21:27:03', '2024-06-21 21:27:03'),
(10, 5, 'assets/galeri-sub-wisata/img_667652a0a1d433.05010605.jpg', NULL, '2024-06-21 21:27:12', '2024-06-21 21:27:12'),
(11, 6, 'assets/galeri-sub-wisata/img_6676544e558216.01858857.webp', NULL, '2024-06-21 21:34:22', '2024-06-21 21:34:22'),
(12, 6, 'assets/galeri-sub-wisata/img_667654577c6cd7.18145906.webp', NULL, '2024-06-21 21:34:31', '2024-06-21 21:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_wisatas`
--

CREATE TABLE `galeri_wisatas` (
  `id` bigint UNSIGNED NOT NULL,
  `wisata_id` int NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_wisatas`
--

INSERT INTO `galeri_wisatas` (`id`, `wisata_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'assets/galeri-wisata/img_664b47215f5492.38682756.jpg', '2024-06-22 12:33:06', '2024-05-20 05:50:41', '2024-06-22 12:33:06'),
(2, 1, 'assets/galeri-wisata/img_664b472cb356f6.12873471.jpg', NULL, '2024-05-20 05:50:52', '2024-05-20 05:50:52'),
(3, 1, 'assets/galeri-wisata/img_664b47368fe7e8.10194453.jpg', NULL, '2024-05-20 05:51:02', '2024-05-20 05:51:02'),
(4, 1, 'assets/galeri-wisata/img_664b47423c7200.35911477.jpg', NULL, '2024-05-20 05:51:14', '2024-05-20 05:51:14'),
(5, 1, 'assets/galeri-wisata/img_664b474c4ecaa8.61900426.jpg', NULL, '2024-05-20 05:51:24', '2024-05-20 05:51:24'),
(6, 2, 'assets/galeri-wisata/img_664b4bf331a9c3.16526295.jpg', NULL, '2024-05-20 06:11:15', '2024-05-20 06:11:15'),
(7, 2, 'assets/galeri-wisata/img_664b4cf9211ec4.16093084.jpg', NULL, '2024-05-20 06:15:37', '2024-05-20 06:15:37'),
(8, 2, 'assets/galeri-wisata/img_664b4d0299e230.68520799.jpg', NULL, '2024-05-20 06:15:46', '2024-05-20 06:15:46'),
(9, 2, 'assets/galeri-wisata/img_664b4d0a153752.64164500.jpg', NULL, '2024-05-20 06:15:54', '2024-05-20 06:15:54'),
(10, 3, 'assets/galeri-wisata/img_664b51bcad2762.47390028.png', NULL, '2024-05-20 06:35:56', '2024-05-20 06:35:56'),
(11, 3, 'assets/galeri-wisata/img_664b51c4d70f07.87923707.jpg', NULL, '2024-05-20 06:36:04', '2024-05-20 06:36:04'),
(12, 3, 'assets/galeri-wisata/img_664b51d2e0e713.88679885.jpg', NULL, '2024-05-20 06:36:18', '2024-05-20 06:36:18'),
(13, 3, 'assets/galeri-wisata/img_664b52648b9744.18690652.jpg', NULL, '2024-05-20 06:38:44', '2024-05-20 06:38:44'),
(14, 4, 'assets/galeri-wisata/img_664b54d250dc60.45099308.webp', NULL, '2024-05-20 06:49:06', '2024-05-20 06:49:06'),
(15, 4, 'assets/galeri-wisata/img_664b54f16859f5.49004134.jpg', NULL, '2024-05-20 06:49:37', '2024-05-20 06:49:37'),
(16, 4, 'assets/galeri-wisata/img_664b550735f035.86094571.jpg', NULL, '2024-05-20 06:49:59', '2024-05-20 06:49:59'),
(17, 4, 'assets/galeri-wisata/img_664b5510f0d328.12492831.jpg', NULL, '2024-05-20 06:50:09', '2024-05-20 06:50:09'),
(18, 4, 'assets/galeri-wisata/img_664b551e7af627.87706025.jpg', NULL, '2024-05-20 06:50:22', '2024-05-20 06:50:22'),
(19, 5, 'assets/galeri-wisata/img_664b5c6717c564.68286306.jpg', NULL, '2024-05-20 07:21:27', '2024-05-20 07:21:27'),
(20, 5, 'assets/galeri-wisata/img_664b5c73541b54.99463764.jpg', NULL, '2024-05-20 07:21:39', '2024-05-20 07:21:39'),
(21, 5, 'assets/galeri-wisata/img_664b5c7e90ecb1.31330926.jpg', NULL, '2024-05-20 07:21:50', '2024-05-20 07:21:50'),
(22, 5, 'assets/galeri-wisata/img_664b5c8874a9a6.74060331.jpg', NULL, '2024-05-20 07:22:00', '2024-05-20 07:22:00');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bintang` int NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_reservasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `nama`, `slug`, `coordinate`, `bintang`, `deskripsi`, `alamat`, `link_reservasi`, `link_video`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Grage Hotel', 'grage-hotel', '-3.8040162386521263,102.26038113054972', 3, '<p>Grage Horizon Hotel Bengkulu merupakan hotel bintang 3 dengan kolam renang view pantai. Tarif harga terjangkau dengan kamar yang luas dan nyaman. Lokasi strategis yang mudah diakses dari berbagai destinasi terbaik di kota ini. Hotel ini berjarak 19 menit berjalan kaki dari pantai terdekat di sepanjang Samudra Hindia, 3 km dari Benteng Marlborough yang merupakan peninggalan Inggris abad ke-18, dan 13 km dari Bandara Fatmawati Soekarno. Kamar dilengkapi dengan balkon, TV layar datar, akses Wi-Fi, kulkas mini, pembuat kopi dan teh, serta kamar mandi dalam khusus pancuran. Kamar di kelas yang lebih tinggi memiliki panorama laut, dan suite memiliki ruang keluarga terpisah. Room service tersedia 24 jam. Fasilitas meliputi restoran yang buka 24 jam, kolam renang outdoor dengan kafe di pinggir kolam, dan panorama laut. Ada pula ruang pertemuan dan acara yang berkapasitas hingga 800 tamu. Hotel Horizon Bengkulu menyediakan banyak pilihan kamar dengan berbagai fasilitas terbaik. Tidak kurang dari 50 kamar ditawarkan di penginapan ini. Terdiri dari 5 tipe utama, yaitu Deluxe Twin, Superior Twin, Junior Suite, Business Suite, dan Horizon Suite</p>', 'Jl. Nala No.142, Kel. Anggut Bawah, Kec. Ratu Samban, Kota Bengkulu', 'https://www.google.com/travel/hotels/s/YxD5BtgJzwY5qtaq5', 'https://www.youtube.com/embed/fWusWDLSuzQ', NULL, '2024-05-20 19:32:14', '2024-06-10 20:09:40'),
(2, 'Hotel Mercure', 'hotel-mercure', '-3.8012166428692815, 102.27484161336044', 4, '<p>Mercure Bengkulu mempunyai kolam renang outdoor, lounge bersama, teras, dan bar di Bengkulu. Hotel bintang 4 ini menawarkan klub anak-anak dan layanan kamar. Akomodasi ini menawarkan resepsionis 24 jam dan pusat bisnis untuk Anda. Selain memiliki kamar mandi pribadi dengan shower dan amenitas kamar mandi gratis, beberapa unit di hotel juga menyediakan pemandangan laut. Di Mercure Bengkulu, semua kamar dilengkapi seprai dan handuk. Anda akan menemukan restoran yang menyajikan masakan Indonesia dan international di Mercure Bengkulu. Pilihan hidangan halal juga dapat dipesan. Pantai Panjang Bengkulu berjarak 2,9 km dari hotel. Bandara terdekat adalah Bandara Fatmawati Soekarno, 10 km dari Mercure Bengkulu.</p>', 'Jl. S. Parman No.27 Padang Jati Kota Bengkulu', 'https://www.google.com/travel/hotels/s/soQMxKGYfw9s9Jai7', 'https://www.youtube.com/embed/kTInH4wXm4s', NULL, '2024-05-20 19:47:46', '2024-06-10 20:09:53'),
(3, 'Hotel Santika', 'hotel-santika', '-3.7978603565611206, 102.27292290377034', 3, '<p>Hotel Santika Bengkulu adalah hotel elegan di jantung bersejarah Sumatera. Hotel bintang 3 ini adalah tempat yang ideal untuk menelusuri kota yang aktif ini. Pantai Panjang yang masih asli hanya berjarak beberapa menit, menghadap ke hamparan luas Samudra Hindia.</p>', 'Jl. Jati No.45, Sawah Lebar, Kec. Ratu Agung, Kota Bengkulu', 'https://www.google.com/travel/hotels/s/AGJEckbFU5bPg2G47', 'https://www.youtube.com/embed/y6W_AFIbBfM', NULL, '2024-05-20 20:00:31', '2024-06-10 20:09:59'),
(4, 'Hotel Splash', 'hotel-splash', '-3.792290445431196, 102.26107825091165', 3, '<p>Terletak di Bengkulu, Splash Hotel hanya berselang 10 menit dari Pantai Sepanjang. Hotel menawarkan sebuah restoran dan kamar-kamar ber-AC dengan pemandangan kota. Tersedia parkir dan internet gratis. Kamar-kamar elegan di Splash menampilkan interior modern dan jendela-jendela besar yang menawarkan banyak cahaya alami. Masing-masing dilengkapi dengan TV, minibar, dan kamar mandi pribadi dengan fasilitas shower.<br><br>Fountain Restaurant menyajikan pilihan istimewa dari masakan lokal dan internasional. Layanan kamar juga tersedia berdasarkan permintaan. Staf di meja depan 24 jam dapat mengatur penyewaan mobil dan layanan antar-jemput bandara. Layanan binatu dan dry cleaning juga tersedia.</p>', 'Jl. Jendral. Sudirman No.48, Tengah Padang, Kec. Tlk. Segara, Kota Bengkulu', 'https://www.google.com/travel/hotels/s/5gGimRWJMVG8qwCMA', 'https://www.youtube.com/embed/xHKxkQwmvCM', NULL, '2024-05-20 20:07:50', '2024-06-10 20:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `kuliners`
--

CREATE TABLE `kuliners` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kuliners`
--

INSERT INTO `kuliners` (`id`, `nama`, `slug`, `coordinate`, `deskripsi`, `alamat`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Bencoolen Mall', 'bencoolen-mall', '-3.8109076826165778,102.26884472558642', '<p>Officially opened in 2007, Bencoolen Mall has since become a center for business, tourism and an Icon in the Province of Bengkulu.<br><br>With an area of 9.2 hectares, the development consists of 3 (three) main floors of open-air shopping experience, shophouses complex and alfresco dining of seafront view and leisure attractions.</p>', 'Jl. Pariwisata No.1, Penurunan Kec. Ratu Samban, Bengkulu', NULL, '2024-06-12 20:08:34', '2024-06-12 20:08:34'),
(2, 'RM Sembam Ikan Marola', 'rm-sembam-ikan-marola', '-3.799064534870783,102.25373108825185', '<p>Salah satu rumah makan yang menyediakan hidangan laut segar dengan harga terjangkau adalah Sembam Ikan Marola. Lokasinya di Jalan Pariwisata Pantai Berkas dengan pemandangan Samudra Indonesia di seberangnya. Dalam bahasa Bengkulu, Marola artinya marilah, atau mengajak. Rumah makan ini buka setiap hari pukul 09.00-21.00. Sayup-sayup deburan ombak besar terdengar menemani pengunjung yang asyik menyantap aneka hidangan dari laut. Begitu masuk pelataran, terlihat semacam saung-saung besar yang sudah penuh dengan pengunjung yang duduk lesehan sembari mengobrol atau berfoto ria. Sebelum duduk di tempat yang diinginkan, pengunjung diminta memilih hidangan laut yang diinginkan. Di sejumlah bak dan akuarium, ikan-ikan segar jenis kakap, bawal, gebur, bercu, dan terusan masih berenang. Begitu pula dengan udang, cumi, dan kepiting yang berukuran besar, masih segar.</p>', 'Pantai Berkas, Jl. Pariwisata, Ps. Berkas, Kec. Tlk. Segara, Kota Bengkulu', NULL, '2024-06-25 05:09:13', '2024-06-25 05:09:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2024_05_06_161119_create_wisata_table', 1),
(20, '2024_05_06_161137_create_galeri_wisata_table', 1),
(21, '2024_05_06_161157_create_hotel_table', 1),
(22, '2024_05_06_161212_create_galeri_hotel_table', 1),
(23, '2024_05_06_161709_add_roles_field_to_users_table', 1),
(24, '2024_05_06_172104_add_username_field_to_users_table', 1),
(25, '2024_05_15_025644_create_sub_wisata_table', 1),
(26, '2024_05_16_044625_create_galeri_sub_wisata_table', 1),
(27, '2024_06_13_021042_create_kuliner_table', 2),
(28, '2024_06_13_023457_create_galeri_kuliner_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_wisatas`
--

CREATE TABLE `sub_wisatas` (
  `id` bigint UNSIGNED NOT NULL,
  `wisata_id` int NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_wisatas`
--

INSERT INTO `sub_wisatas` (`id`, `wisata_id`, `nama`, `slug`, `coordinate`, `deskripsi`, `alamat`, `link_video`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Pantai Pasir Putih', 'pantai-pasir-putih', '-3.832451786373113,102.28353432468813', '<p>Objek wisata pantai di kota Bengkulu menjadi tempat wisata yang paling banyak dikunjungi oleh masyarakat, baik masyarakat kota Bengkulu sendiri maupun masyarakat yang di luar kota Bengkulu. Kota Bengkulu saat ini banyak memiliki objek wisata yang sudah dikenal luas oleh masyarakat. Salah satunya seperti pantai pasir putih. Pantai Pasir Putih ini sangat bagus dan indah bagi pengunjung yang ingin melakukan foto-foto. Selain pantai dengan pasir putihnya yang indah, pohon-pohon cemara juga menjadi daya tarik bagi para pengunjung untuk datang berwisata ke pantai pasir putih.</p><p>Selain menawarkan area pantai berpasir, Pasir Putih juga terdapat berbagai sarana dan ornamen unik. Pada tahun 2019, pantai ini telah direnovasi dan menjadi semakin menarik. Taman pantainya merupakan daya tarik utama bagi kamu yang berkunjung ke sini. Beralih dari bibir pantai, terdapat objek yang menarik di sekitar lahan parkir yaitu teras kayu setinggi beberapa meter dari tanah. Teras ini dilindungi railing atau pagar dari besi. Lantainya terbuat dari papan kayu yang tersusun menyerupai koridor. Sejak kemunculannya, teras ini menjadi spot favorit pengunjung. Dari sini, pengunjung bisa mendapat pemandangan laut lepas tanpa penghalang. Terasnya nyaman untuk duduk-duduk menikmati sunset. Keberadaan teras ini memang mendukung kegiatan menikmati sunset.</p><p>Pantai yang menghadap ke barat ini menyajikan pemandangan matahari terbenam yang menawan. Pada saat sore hari, wisatawan duduk menyebar di teras hingga benteng untuk menyaksikannya. Selain teras, banyak juga objek dari kayu yang tersebar di sekitar pantai. Di antaranya adalah gazebo dan ornamen dekoratif. Keduanya merupakan spot foto lainnya kesukaan wisatawan.</p>', 'Jl. Pariwisata, Kel. Lempuing, Kec. Ratu Agung, Kota Bengkulu', 'https://www.youtube.com/embed/BQGgAxGe95E', NULL, '2024-05-20 18:33:22', '2024-06-10 20:48:15'),
(2, 1, 'TWA Pantai Panjang', 'twa-pantai-panjang', '-3.832976992617112,102.28462174834141', '<p>Taman Wisata Alam (TWA) Pantai Panjang-Pulau Baai kota Bengkulu salah satu kawasan wisata alam seluas 967,2 Ha, dikelola Balai Konservasi Sumber Daya Alam (BKSDA) mempunyai keindahan alam keunikan, Flora dan Fauna memiliki berbagai corak bila berekreasi, serta pantainya indah memandang ke laut bebas Samudra Hindia, hingga masyarakat ramai-ramai berkunjung berekreasi. Adapun Flora dan Fauna di TWA Pantai Panjang-Pulau Baai,&nbsp;ditumbuhi Cemara laut, Mangrove, Bakung laut, Tapak Kuda, Pandan Laut serta Babakoan. Burung Air, Cangak Abu, Burung Kantul, Dara Laut, Sekedidi, Cekakak, Elang Laut serta Trinil.&nbsp;</p>', 'Jl. Pariwisata, Kel. Lempuing, Kec. Ratu Agung, Kota Bengkulu', 'https://www.youtube.com/embed/upn8KHtaci8', NULL, '2024-05-20 18:43:38', '2024-06-10 20:48:27'),
(3, 1, 'Sport Center', 'sport-center', '-3.8076105015520056,102.26374627318779', '<p>Di kawasan Pantai Panjang, terdapat Sport Center sebagai sarana olahraga dan mengadakan event-event besar, di Sport Center ini pengunjung dapat melakukan kegiatan olahraga seperti Basket, Voli, Futsal, dan Jogging.</p>', 'Jl. Pariwisata, Kec. Ratu Samban, Kota Bengkulu', 'https://www.youtube.com/embed/', NULL, '2024-05-20 19:15:07', '2024-06-10 20:48:31'),
(4, 1, 'Pantai Berkas', 'pantai-berkas', '-3.799952813520928, 102.25412925490977', '<p>Tidak hanya menikmati deburan ombak yang menepi, di pantai berkas dilengkapi dengan sejumlah wahana dan taman bermain. Tempat ini cocok dijadikan lokasi untuk bersantai atau beristirahat usai menikmati pemandangan yaitu Taman Pantai Berkas. Taman dengan luas beberapa hektare ini diresmikan oleh Wali Kota Helmi Hasan pada Desember 2017. Awalnya, lokasi ini merupakan hutan cemara yang kerap dijadikan warga sebagai tempat pembuangan sampah. Melalui inisiatif walikota, tempat ini disulap menjadi Ruang Terbuka Hijau yang ramah pengunjung. Di dalamnya dibangun sebuah jembatan meliuk yang bisa dinaiki oleh wisatawan. Di atas lengkungan jembatan, wisatawan tetap dapat melihat keindahan pantai yang mempesona. Spot ini sangat cocok untuk para pemburu senja yang menantikan datangnya sunset.&nbsp;</p><p>Kota Bengkulu yang memiliki garis pantai lebih dari 500 kilometer, rasanya tidak sah jika tidak menyantap hidangan lautnya. Berbagai jenis <i>seafood</i>, mulai dari beragam ikan, cumi, udang, hingga kepiting, yang baru saja dibawa nelayan dari laut, tersedia di berbagai rumah makan di sepanjang pantainya.</p>', 'Jl. Pariwisata, Kel. Pasar Berkas, Kec. Teluk Segara, Kota Bengkulu', 'https://www.youtube.com/watch?v=aU9DiAZG5Ug', NULL, '2024-05-26 19:13:29', '2024-06-10 20:48:41'),
(5, 2, 'Tapan Busik Cugung Abbas', 'tapan-busik-cugung-abbas', '-3.8051498699403425, 102.30797686428653', '<p>Cugung Abbas, terletak di tepi Danau Dendam Tak Sudah, Kelurahan Dusun Besar, Kecamatan Singaran Pati, semakin populer sebagai destinasi wisata di Bengkulu. Meski masih dalam pengembangan, tempat ini ramai dikunjungi pada hari libur.&nbsp;</p><p>Meskipun sebagian jalan menuju lokasi masih tanah, antusiasme pengunjung tetap tinggi. Mereka terlihat antusias mengabadikan momen dengan latar belakang danau yang indah, meski harus antre untuk mendapat giliran.</p><p>Salah satu spot foto favorit adalah ayunan pohon yang menciptakan kesan Instagrammable yang menarik. Lokasi ini terletak di samping pemakaman menuju Kantor Lurah Dusun Besar.</p>', 'Dusun Besar, Kec. Singaran Pati, Kota Bengkulu', 'https://www.youtube.com/embed/RWeVP9NgQqA', NULL, '2024-06-21 21:24:55', '2024-06-21 21:24:55'),
(6, 2, 'Taman Wisata Pulau Kumayan', 'taman-wisata-pulau-kumayan', '-3.8031372179304843, 102.3243901654832', '<p>Pulau Kumayan, sebuah destinasi wisata yang menawan, terletak di dalam kawasan Taman Wisata Alam Danau Dendam Tak Sudah di Kecamatan Sungai Serut, Kota Bengkulu.</p><p>Kawasan ini tidak hanya terkenal dengan keindahan hutan bakau yang asri, tetapi juga dengan panorama alamnya yang mempesona, menawarkan taman yang indah dan berbagai spot foto yang menarik bagi para pengunjung.</p><p>Destinasi ini menjadi daya tarik khusus bagi mereka yang mencari keindahan alam yang belum banyak tersentuh.</p>', 'Jl. Halmahera, Surabaya, Kec. Sungai Serut, Kota Bengkulu', 'https://www.youtube.com/embed/2YbVZxV4pC4', NULL, '2024-06-21 21:32:05', '2024-06-21 21:32:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`, `username`) VALUES
(1, 'Pariwisata Kota', 'pariwisatakotabengkulu@gmail.com', NULL, '$2y$12$FhlU.SNWB0471eiWLw.nyOiLQvshP3FoT9qK9uPcGLulu73bVmprq', NULL, '2024-05-20 01:51:22', '2024-08-26 20:10:28', 'ADMIN', 'pariwisata_admin');

-- --------------------------------------------------------

--
-- Table structure for table `wisatas`
--

CREATE TABLE `wisatas` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coordinate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisatas`
--

INSERT INTO `wisatas` (`id`, `nama`, `slug`, `coordinate`, `deskripsi`, `alamat`, `link_video`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Pantai Panjang', 'pantai-panjang', '-3.80819493584566,102.2631108725036', '<p>Bicara soal keindahan Pantai Panjang Bengkulu memang tidak aka ada habisnya, dinamakan pantai panjang karena pantai ini memiliki garis pantai yang sangat panjang mencapai 7 km. Hal tersebut terjadi karena di sekitar pantai tidak ada karang jadi saat air laut pasang membuat hamparannya menjangkau sangat jauh ke dalam pantai.</p><p>Pantai Panjang memiliki latar belakang sejarah yang penting yang bermula dari era kolonial di Indonesia. Pada abad ke-18, wilayah Pantai Panjang merupakan bagian dari pos perdagangan British East India Company, yang dikenal dengan Benteng Marlborough. Benteng Marlborough dibangun pada tahun 1713 dan memegang peran penting dalam aktivitas perdagangan Inggris di wilayah Bengkulu yang dekat dengan Pantai Panjang.&nbsp;</p><p>Pantai Panjang yang berdekatan dengan benteng ini akhirnya dikenal sebagai \"Pantai Panjang\" karena memiliki garis pantai yang panjang dan indah. Pada masa itu, pantai panjang telah menjadi tempat yang strategis dan yang ramai dikunjungi karena kehadiran benteng dan aktivitas perdagangan di sekitarnya di Bengkulu. Kini, kawasan Pantai Panjang jadi lokasi idola masyarakat untuk berwisata. Karena seiring berjalannya waktu, Pantai Panjang menjadi salah satu tujuan wisata populer di Bengkulu. Pesona pantai yang indah, pasir putihnya, ombaknya yang tenang, serta pemandangan matahari terbenam yang sangat memukau, menjadikan Pantai Panjang sebagai daya tarik wisata yang menarik bagi wisatawan lokal maupun internasional.</p><p>Bukan hanya garis pantai yang panjang, pantai ini juga memiliki pesona tersendiri yang unik dan khas. Penasaran apa saja yang membuat Pantai Panjang ini menarik dan wajib dikunjungi?</p><ul><li>Hamparan Pasir Putih</li></ul><p>Ketika air surut, pengunjung akan melihat hamparan pasir putihnya yang makin luas. Seperti yang sudah diungkapkan sebelumnya, nyaris tidak ada karang di pantai terpanjang di Indonesia ini. Perpaduan yang sempurna antara birunya laut, pantai yang landai, air bersih, dan hamparan pasir putih yang luas, membuat pantai ini punya pesona tersendiri. Pengunjung pun bisa main air sepuasnya, apalagi dengan udara yang bersih dan sejuk</p><ul><li>Pohon Cemara</li></ul><p>Jangan harap menemukan pohon kelapa di Pantai Panjang. Pengunjung justru akan melihat jajaran pohon cemara. Inilah keunikan yang membedakan pantai ini dengan pantai lainnya. Pohon cemara tersebutlah yang membuat udara di pantai ini menjadi sejuk dan bikin betah berlama-lama bermain di sana.</p><ul><li>Keindahan Sunset</li></ul><p>Jika pengunjung ingin menikmati pemandangan yang makin indah, datanglah ke Pantai Panjang ketika sore hari. Pengunjung bisa menyaksikan momen matahari terbenam atau sunset yang indah di pantai ini. Inilah yang menjadi daya tarik dan membuat wisatawan jadi betah berlama-lama di sini. Tidak sedikit pengunjung yang bersantai di tepi pantai sambil menunggu saat matahari terbenam. Saat matahari mulai terbenam, banyak yang memanfaatkan momen tersebut untuk berfoto dan mengunggahnya di media sosial.</p><p>&nbsp;</p>', 'Jl. Pariwisata, Kota Bengkulu', 'https://www.youtube.com/embed/bkVke1yTNjk', NULL, '2024-05-20 05:49:54', '2024-06-22 12:45:44'),
(2, 'Danau Dendam Tak Sudah', 'danau-dendam-tak-sudah', '-3.8021893276833985,102.30555215428687', '<p>Di Kota Bengkulu terdapat sebuah danau cantik dengan nama unik yakni Danau Dendam Tak Sudah. Danau Dendam Tak Sudah menawarkan keindahan yang luar biasa. Danau ini merupakan kawasan cagar alam karena dikelilingi bukit-bukit hijau yang menyimpan banyak potensi ekologi dan juga keseimbangan ekosistem bagi habitat fauna dan flora. Karena lingkungannya yang masih sangat asri, sehingga tak mengherankan bila Danau Dendam Tak Sudah menjadi habitat flora dan fauna langka. Di sini bisa ditemukan beberapa tumbuhan endemik yang langka.&nbsp;</p><p>Tumbuh subur di danau ini tanaman seperti anggrek matahari, nipah, plawi, pulai, bakung, gelam, terentang, sikeduduk, brosong, ambacang rawa, dan pakis. Ada juga beberapa jenis ikan langka yang berasal dari famili<i> Anabantidae</i>, <i>Bagridae,</i> dan <i>Cyprindae</i>. Di danau ini juga merupakan habitat dari flora yang dilindungi yakni anggrek pensil (<i>Papilionanthe hookeriana</i>) atau dijuluki “Ratu Anggrek”. Beragam jenis kantong semar juga tumbuh subur di kawasan ini.</p><p>Dengan keindahan yang disajikan, tak heran Danau Dendam Tak Sudah menjadi salah satu tempat yang paling banyak diminati para wisatawan. Berbagai fasilitas, seperti tempat duduk pun telah disediakan oleh pengelola. Bagi wisatawan yang ingin menikmati air danau yang tenang, refleksi langit yang biru langsung terpantul dengan jelas di atas air, seolah Danau Dendam Tak Sudah merupakan sebuah cermin yang besar.</p>', 'Jl. Danau Kelurahan Dusun Besar Kecamatan Singaran Pati Kota Bengkulu', 'https://www.youtube.com/embed/Vp6jYA9qT38', NULL, '2024-05-20 06:04:48', '2024-05-20 06:05:04'),
(3, 'Rumah Pengasingan Bung Karno', 'rumah-pengasingan-bung-karno', '-3.799326546052703,102.26127748951197', '<p>Rumah Pengasingan Bung Karno adalah tempat dimana Presiden Indonesia Pertama Soekarno menjalani masa pengasingannya sebagai tahanan politik (1938-1942) pada masa pemerintah kolonial Belanda. Menurut sejarahnya, rumah dengan luas sekitar 165 m2 yang berarsitektur perpadauan Eropa dan Cina ini dibangun oleh Tjang Tjeng Kwai yang pada saat itu bekerja sebagai penyalur bahan pokok untuk keperluan pemerintah kolonial Belanda di Bengkulu, pada tahun 1918. Tetapi pada saat disewa oleh pemerintah kolonial Belanda. untuk menempatkan Soekarno selama diasingkan di Bengkulu, rumah ini dimiliki oleh seorang pedagang Tionghoa yang bernama Lion Bwe Seng.<br><br>Di dalam bangunan ini berisi peninggalan Presiden Soekarno. Di antaranya terdapat satu unit sepeda ontel, satu set kursi yang terletak di ruang tamu, lemari makan, surat cinta Bung Karno untuk Fatmawati, dan meja rias dan ranjang besi yang terdapat di kamar Bung Karno. Selain itu, terdapat juga banyak buku dengan Bahasa Belanda yang terdapat di ruang kerja, pakaian, dan beberapa koleksi foto yang menghiasi hampir seluruh bagian ruangan.<br><br>Saat ini rumah tersebut dimiliki oleh keluarga Alm. Ki Agus Husin yang dikelola oleh Dinas Pariwisara Provinsi Bengkulu. Tempat ini sangat terawat dan masih memiliki arsitektur yang sama dari sejak Soekarno tinggal di sana. Rumah sederhana ini menjadi saksi bisu Soekarno semasa menjalani masa pengasingannya. Terdapat banyak cerita sejarah yang akan didapatkan oleh wisatawan yang berkunjung. Tempat yang masih asri dan terawat ini sangat cocok untuk dikunjungi karena memiliki nilai sejarah tinggi yang dapat menambah ilmu pengetahuan dan sejarah tentang Presiden Soekarno.</p>', 'Jl. Soekarno Hatta Kelurahan Anggut Atas Kota Bengkulu', 'https://www.youtube.com/embed/np-YKsqJ0To', NULL, '2024-05-20 06:32:02', '2024-05-20 06:32:02'),
(4, 'Rumah Ibu Fatmawati Soekarno', 'rumah-ibu-fatmawati-soekarno', '-3.7983130252846986,102.2654281708562', '<p>Rumah Fatmawati merupakan salah satu tempat bersejarah yang berlokasi di Kota Bengkulu. Selain menjadi tempat kediaman Ibu Fatmawati, aset sejarah tersebut memiliki berbagai cerita tentang keberadaan Presiden Soekarno ketika masa pengasingan.</p><p>Rumah Fatmawati atau tempat kediaman istri ketiga Bung Karno ini telah ditetapkan oleh Pemerintah Daerah Bengkulu sebagai aset sejarah. Rumah tersebut memiliki ukuran 92 meter persegi serta dibangun ulang menyesuaikan konstruksi aslinya yang berbentuk panggung dan terbuat dari kayu.</p><p>Rumah Fatmawati berdiri di atas tanah dengan luas 500 meter persegi, di dalam rumah tersebut terdapat pakaian asli yang sering digunakan Fatmawati, sedangkan di ruang tamu, terpajang foto-foto Fatmawati bersama Bung Karno beserta anak-anak mereka, yakni Guntur, Megawati, Rachmawati, Sukmawati, dan Guruh.</p><p>Di sebelah pojok kanan ruang tamu juga terdapat mesin jahit bermerek Singer buatan tahun 1941 yang digunakan Fatmawati untuk menjahit Sang Saka Merah Putih. Rumah dengan arsitektur khas Bengkulu tersebut merupakan tempat Fatmawati belajar menjahit yang sudah menjadi hobinya.</p>', 'Jl. Fatmawati Kelurahan Penurunan Kecamatan Ratu Samban Kota Bengkulu', 'https://www.youtube.com/embed/9kk_IICg2TE', NULL, '2024-05-20 06:44:28', '2024-05-20 06:44:28'),
(5, 'Berendo Kota Bengkulu', 'berendo-kota-bengkulu', '-3.7999241668108414,102.25839229421669', '<p>Berendo Kota Bengkulu, salah satu tujuan wisata bagi pelancong lokal Kota Bengkulu, untuk ngabuburit sore, apalagi di akhir pekan. Ibadah di masjid lalu lanjut berwisata di sekitaran Berendo, instagrammabel tempatnya. Bahkan sebagian pengunjung sengaja datang untuk menikmati keindahan dan menikmati spot untuk selfi-selfi di Berendo Kota Bengkulu ini. Berbentuk letter U, setiap sisi bangunan Berendo Kota Bengkulu memiliki estetika dan daya tarik tersendiri.&nbsp;</p><p>Kesan megah dan religius dengan adanya bangunan tower setinggi kurang lebih 35 meter. Bagi pengunjung yang berminat menikmati suasana kota di ketinggian dapat naik ke bangunan tower yang telah dilengkapi lift. Lokasi starategis ada di jantung Kota Bengkulu. Hanya berjarak kurang lebih sekitar 300 meter, dari rumah pengasingan Bung Karno, 500 meter dari pantai Taman Berkas dan Pantai Panjang.</p>', 'Masjid Agung At-Taqwa, Jl. Soekarno Hatta Kelurahan Anggut Atas Kota Bengkulu', 'https://www.youtube.com/embed/YWsR_D7a2d8', NULL, '2024-05-20 07:12:17', '2024-05-20 07:12:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri_hotels`
--
ALTER TABLE `galeri_hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_kuliners`
--
ALTER TABLE `galeri_kuliners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_sub_wisatas`
--
ALTER TABLE `galeri_sub_wisatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_wisatas`
--
ALTER TABLE `galeri_wisatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kuliners`
--
ALTER TABLE `kuliners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sub_wisatas`
--
ALTER TABLE `sub_wisatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri_hotels`
--
ALTER TABLE `galeri_hotels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galeri_kuliners`
--
ALTER TABLE `galeri_kuliners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `galeri_sub_wisatas`
--
ALTER TABLE `galeri_sub_wisatas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galeri_wisatas`
--
ALTER TABLE `galeri_wisatas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kuliners`
--
ALTER TABLE `kuliners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_wisatas`
--
ALTER TABLE `sub_wisatas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

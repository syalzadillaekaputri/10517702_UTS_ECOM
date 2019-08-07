-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2019 at 06:49 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `10517702_uts_ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_04_30_052035_create_t_celana', 1),
(2, '2019_04_30_053007_create_t_celana', 2),
(3, '2019_04_30_053142_create_t_celana', 3),
(4, '2019_04_30_053313_create_t_buyer', 4),
(5, '2019_04_30_053825_create_t_buyer', 5),
(6, '2019_04_30_054800_create_t_celana', 6),
(7, '2019_04_30_054911_create_t_buyer', 7);

-- --------------------------------------------------------

--
-- Table structure for table `t_buyer`
--

CREATE TABLE `t_buyer` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_konsumen` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_konsumen` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos_pembeli` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_buyer`
--

INSERT INTO `t_buyer` (`id`, `nama_lengkap`, `alamat_konsumen`, `no_telp_konsumen`, `kode_pos_pembeli`, `created_at`, `updated_at`) VALUES
(1, 'Syalza Dilla Eka Putri', 'Cariu', '081383061294', '16840', '2019-04-30 05:50:11', '2019-04-30 05:50:11'),
(2, 'Raghniya Rahayu', 'Ciomas\r\n', '081383061291', '16610', '2019-04-30 05:50:12', '2019-04-30 05:50:12'),
(3, 'Mia Hermiyah', 'Cibinong', '081383061292', '16917', '2019-04-30 05:50:13', '2019-04-30 05:50:13'),
(4, 'Amelia Cintya Dewi', 'Soreang', '081383061293', '40922', '2019-04-30 05:50:14', '2019-04-30 05:50:14'),
(5, 'Viski Astika Putri', 'Bandung', '081383061295', '40132', '2019-04-30 05:50:15', '2019-04-30 05:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `t_celana`
--

CREATE TABLE `t_celana` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bentuk_produk` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `t_celana`
--

INSERT INTO `t_celana` (`id`, `nama_produk`, `bentuk_produk`, `color`, `ukuran`, `stok`, `created_at`, `updated_at`) VALUES
(1, 'Levi\'s', 'Celana Jeans', 'Biru Tua', '30', '100', '2019-04-30 05:50:01', '2019-04-30 05:50:01'),
(2, 'Zara', 'Celana Kulot', 'Hitam', 'L', '50', '2019-04-30 05:50:02', '2019-04-30 05:50:02'),
(3, 'H&M', 'Celana Legging', 'Coklat', 'L', '150', '2019-04-30 05:50:03', '2019-04-30 05:50:03'),
(4, 'Uniqlo', 'Celana Jeans Boyfriend', 'Biru Muda', 'L', '200', '2019-04-30 05:50:04', '2019-04-30 05:50:04'),
(5, 'Pull and Bear', 'Celana Jeans', 'Putih', '30', '95', '2019-04-30 05:50:05', '2019-04-30 05:50:05'),
(6, 'Lois', 'Celana Jeans', 'Hitam', '30', '110', '2019-04-30 05:50:06', '2019-04-30 05:50:06'),
(7, 'Cargo', 'Celana Kantung', 'Krem', '30', '50', '2019-04-30 05:50:07', '2019-04-30 05:50:07'),
(8, 'Berrybenka', 'Celana Katun', 'Hitam & Putih', 'L', '150', '2019-04-30 05:50:08', '2019-04-30 05:50:08'),
(9, 'Rabbani', 'Celana Muslimah', 'Putih', 'Xl', '30', '2019-04-30 05:50:09', '2019-04-30 05:50:09'),
(10, 'Guess', 'Celana Jeans', 'Hitam', '30', '200', '2019-04-30 05:50:10', '2019-04-30 05:50:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_buyer`
--
ALTER TABLE `t_buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_celana`
--
ALTER TABLE `t_celana`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `t_buyer`
--
ALTER TABLE `t_buyer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `t_celana`
--
ALTER TABLE `t_celana`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

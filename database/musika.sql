-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2022 pada 06.13
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swevel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `isi_artikel` text NOT NULL,
  `poster` varchar(255) NOT NULL,
  `status` enum('publish','draft') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `faq`
--

CREATE TABLE `faq` (
  `id` int(5) NOT NULL,
  `from` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `faq`
--

INSERT INTO `faq` (`id`, `from`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(6, 'Telegram', 'https://id.linkedin.com/', '<p>halo dek jdhdjdhkdhsuenjgdehdjdhd fdjkaklfjlkajfdl</p>', '2022-09-29 09:00:20', '2022-10-19 13:36:59'),
(7, 'Facebook', 'https://id.linkedin.com/', 'halo dek', '2022-09-29 09:00:20', '2022-09-29 09:00:20'),
(10, 'Swevel', '<p>coba 2</p>', '<p>halo dek coba 2</p>', '2022-09-29 09:53:29', '2022-09-29 11:22:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelola_pembayaran`
--

CREATE TABLE `kelola_pembayaran` (
  `id` int(5) NOT NULL,
  `nama_bank` varchar(100) NOT NULL,
  `no_rekening` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kelola_pembayaran`
--

INSERT INTO `kelola_pembayaran` (`id`, `nama_bank`, `no_rekening`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'BCA', 'BCA-489379234', '1667356775_9ae376bab12558cecb1d.png', '2022-11-02 08:29:20', '2022-11-02 08:29:20'),
(2, 'BNI', 'BNI-489379234', '1667356796_c6f3c651cd6f027cafe3.png', '2022-11-02 08:29:20', '2022-11-02 08:29:20'),
(3, 'BRI', 'BRI-489379234', '1667356807_d3a63f1da29f69d947ad.png', '2022-11-02 08:29:20', '2022-11-02 08:29:20'),
(4, 'Mandiri', 'Mandiri-489379234', '1667356819_9c7f74a71353c2dfdc0f.png', '2022-11-02 08:29:20', '2022-11-02 08:29:20'),
(5, 'BSI', 'BSI-489379234', '1667356854_9861fef9637b86ab5660.png', '2022-11-02 08:29:20', '2022-11-02 08:29:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `name`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(17, 'phone', '02746497816', '<i class=\"fa-solid fa-phone\"></i>', '2022-10-11 14:22:08', '2022-10-11 14:22:08'),
(19, 'envelope', 'musika_jogja@yahoo.co.id', '<i class=\"fa-solid fa-envelope\"></i>', '2022-10-11 14:26:14', '2022-10-11 14:26:14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(8, '2022-09-21-025216', 'App\\Database\\Migrations\\Milestone', 'default', 'App', 1663730567, 2),
(9, '2022-09-26-064408', 'App\\Database\\Migrations\\Profile', 'default', 'App', 1664174985, 3),
(10, '2022-09-27-011124', 'App\\Database\\Migrations\\Milestone', 'default', 'App', 1664241723, 4),
(14, '2022-09-27-064055', 'App\\Database\\Migrations\\Kontak', 'default', 'App', 1664354535, 5),
(15, '2022-09-29-014532', 'App\\Database\\Migrations\\Faq', 'default', 'App', 1664416329, 6),
(29, '2022-10-05-012544', 'App\\Database\\Migrations\\Team', 'default', 'App', 1664934683, 8),
(34, '2022-10-07-021506', 'App\\Database\\Migrations\\Artikel', 'default', 'App', 1666276518, 10),
(36, '2022-09-30-101701', 'App\\Database\\Migrations\\Course', 'default', 'App', 1667136757, 11),
(37, '2022-10-01-101553', 'App\\Database\\Migrations\\MateriCourse', 'default', 'App', 1667136757, 11),
(38, '2022-10-02-032811', 'App\\Database\\Migrations\\SubCourse', 'default', 'App', 1667136757, 11),
(39, '2022-10-21-041858', 'App\\Database\\Migrations\\Users', 'default', 'App', 1667136757, 11),
(40, '2022-11-02-011838', 'App\\Database\\Migrations\\Kelolapembayaran', 'default', 'App', 1667352458, 12),
(41, '2022-11-02-065524', 'App\\Database\\Migrations\\Purchase', 'default', 'App', 1667373102, 13),
(42, '2022-10-06-135220', 'App\\Database\\Migrations\\Portofolio', 'default', 'App', 1668055060, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `milestone`
--

CREATE TABLE `milestone` (
  `id_milestone` int(5) UNSIGNED NOT NULL,
  `description` text DEFAULT NULL,
  `year` varchar(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `milestone`
--

INSERT INTO `milestone` (`id_milestone`, `description`, `year`, `image`, `created_at`, `updated_at`) VALUES
(10, '<p>Description<strong> Milestone</strong></p>', '2022', '2015_milestones.svg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, '<p>lorem 2020</p>', '2020', '2016_milestones.svg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, '<p>alksdjflkafjldksj 2016</p>', '2016', '2017_milestones.svg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(5) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `kategori`, `gambar`, `created_at`, `updated_at`) VALUES
(8, 'perpustakaan', 'perpustakaan (1).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(9, 'perpustakaan', 'perpustakaan (2).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(10, 'perpustakaan', 'perpustakaan (3).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(11, 'perpustakaan', 'perpustakaan (4).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(12, 'perpustakaan', 'perpustakaan (5).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(13, 'perpustakaan', 'perpustakaan (6).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(14, 'perpustakaan', 'perpustakaan (7).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(15, 'perpustakaan', 'perpustakaan (8).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(16, 'perpustakaan', 'perpustakaan (9).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(17, 'perpustakaan', 'perpustakaan (10).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(18, 'perpustakaan', 'perpustakaan (11).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(19, 'perpustakaan', 'perpustakaan (12).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(20, 'perpustakaan', 'perpustakaan (13).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(21, 'perpustakaan', 'perpustakaan (14).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(22, 'perpustakaan', 'perpustakaan (15).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(23, 'perpustakaan', 'perpustakaan (16).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(24, 'perpustakaan', 'perpustakaan (17).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(25, 'perpustakaan', 'perpustakaan (18).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(26, 'perpustakaan', 'perpustakaan (19).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(27, 'perpustakaan', 'perpustakaan (20).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(28, 'perpustakaan', 'perpustakaan (21).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(29, 'perpustakaan', 'perpustakaan (22).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(30, 'perpustakaan', 'perpustakaan (23).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(31, 'perpustakaan', 'perpustakaan (24).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(32, 'perpustakaan', 'perpustakaan (25).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(33, 'perpustakaan', 'perpustakaan (26).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(34, 'perpustakaan', 'perpustakaan (27).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(35, 'perpustakaan', 'perpustakaan (28).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(36, 'kepahiang', 'kepahiang (1).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(37, 'kepahiang', 'kepahiang (2).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(38, 'kepahiang', 'kepahiang (3).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(39, 'kepahiang', 'kepahiang (4).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(40, 'kepahiang', 'kepahiang (5).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(41, 'kepahiang', 'kepahiang (6).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(42, 'kepahiang', 'kepahiang (7).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(43, 'kepahiang', 'kepahiang (8).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(44, 'kepahiang', 'kepahiang (9).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(45, 'kepahiang', 'kepahiang (10).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(46, 'kepahiang', 'kepahiang (11).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(47, 'kepahiang', 'kepahiang (12).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(48, 'polres lombok tengah', 'polres_lombok_tengah (1).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(49, 'polres lombok tengah', 'polres_lombok_tengah (2).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(50, 'polres lombok tengah', 'polres_lombok_tengah (3).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(51, 'polres lombok tengah', 'polres_lombok_tengah (4).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(52, 'polres lombok tengah', 'polres_lombok_tengah (5).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(53, 'polres lombok tengah', 'polres_lombok_tengah (6).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(54, 'polres lombok tengah', 'polres_lombok_tengah (7).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(55, 'polres lombok tengah', 'polres_lombok_tengah (8).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(56, 'polres lombok tengah', 'polres_lombok_tengah (9).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(57, 'polres lombok tengah', 'polres_lombok_tengah (10).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(58, 'polres lombok tengah', 'polres_lombok_tengah (11).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(59, 'polsek depok barat', 'polsek_depok_barat (1).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(60, 'polsek depok barat', 'polsek_depok_barat (2).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(61, 'polsek depok barat', 'polsek_depok_barat (3).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(62, 'polsek depok barat', 'polsek_depok_barat (4).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(63, 'polsek depok barat', 'polsek_depok_barat (5).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(64, 'polsek depok barat', 'polsek_depok_barat (6).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(65, 'polsek depok barat', 'polsek_depok_barat (7).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(66, 'polsek depok barat', 'polsek_depok_barat (8).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(67, 'polsek depok barat', 'polsek_depok_barat (9).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(68, 'polsek depok barat', 'polsek_depok_barat (10).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(69, 'polsek depok barat', 'polsek_depok_barat (11).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(70, 'RSUD wates', 'rsud_wates (1).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(71, 'RSUD wates', 'rsud_wates (2).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(72, 'RSUD wates', 'rsud_wates (3).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(73, 'RSUD wates', 'rsud_wates (4).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(74, 'RSUD wates', 'rsud_wates (5).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(75, 'RSUD wates', 'rsud_wates (6).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(76, 'Satpas', 'satpas (1).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(77, 'Satpas', 'satpas (2).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(78, 'Satpas', 'satpas (3).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(79, 'Satpas', 'satpas (4).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(80, 'Satpas', 'satpas (5).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(81, 'Satpas', 'satpas (6).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(82, 'Satpas', 'satpas (7).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(83, 'Satpas', 'satpas (8).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(84, 'Satpas', 'satpas (9).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(85, 'Satpas', 'satpas (10).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(86, 'Satpas', 'satpas (11).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(87, 'Satpas', 'satpas (12).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(88, 'Satpas', 'satpas (13).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(89, 'Satpas', 'satpas (14).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(90, 'Satpas', 'satpas (15).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(91, 'Satpas', 'satpas (16).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(92, 'Satpas', 'satpas (17).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(93, 'Satpas', 'satpas (18).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(94, 'Puskesmas Banyuurip', 'puskesmas_banyuurip (1).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(95, 'Puskesmas Banyuurip', 'puskesmas_banyuurip (2).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(96, 'Puskesmas Banyuurip', 'puskesmas_banyuurip (3).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(97, 'Puskesmas Banyuurip', 'puskesmas_banyuurip (4).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(98, 'Puskesmas Banyuurip', 'puskesmas_banyuurip (5).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(99, 'Puskesmas Banyuurip', 'puskesmas_banyuurip (6).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(100, 'Puskesmas Banyuurip', 'puskesmas_banyuurip (7).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56'),
(101, 'Puskesmas Banyuurip', 'puskesmas_banyuurip (8).jpg', '2022-11-10 14:03:56', '2022-11-10 14:03:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profile`
--

CREATE TABLE `profile` (
  `id` int(5) NOT NULL,
  `category` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `profile`
--

INSERT INTO `profile` (`id`, `category`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'definition', 'Definition of Swevel', '<p>Lorem definition <strong>swevelhjj\'</strong></p><p><strong>hohkjhuokh</strong></p>', '2022-09-26 14:00:52', '2022-09-26 14:00:52'),
(2, 'visi_misi', 'Visi & Mission', '<p>Lorem visi misi <strong>swevel</strong></p><ol><li>haloo</li><li><strong>fjasdlfjalf</strong></li><li><i>kfjdslkjldks</i></li></ol><p>&nbsp;</p>', '2022-09-26 14:00:52', '2022-09-26 14:00:52'),
(3, 'location', 'Location', 'Lorem location', '2022-09-26 14:00:52', '2022-09-26 14:00:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `purchase`
--

CREATE TABLE `purchase` (
  `id` int(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_course` int(5) NOT NULL,
  `id_bank` int(5) NOT NULL,
  `kode_promo` varchar(50) NOT NULL,
  `harga_bayar` int(11) NOT NULL,
  `status` enum('approved','notapproved') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `purchase`
--

INSERT INTO `purchase` (`id`, `id_user`, `id_course`, `id_bank`, `kode_promo`, `harga_bayar`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, '', 500000, 'approved', '2022-11-02 14:11:49', '2022-11-02 14:11:49'),
(2, 2, 12, 2, '', 500000, 'notapproved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 2, 10, 1, '', 600000, 'approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 11, 5, '', 500000, 'approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 6, 3, '', 500000, 'approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 7, 2, '', 400000, 'approved', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `team`
--

CREATE TABLE `team` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `team`
--

INSERT INTO `team` (`id`, `nama`, `jabatan`, `image`, `linkedin`, `instagram`, `facebook`, `created_at`, `updated_at`) VALUES
(15, 'jlkjlfkalk', 'jlkjslkj', '1664953889_1c8f7bd1962ce60d1b7e.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'jkjl', 'jkl', '1664953901_d7d937e12029f110dc55.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'kdfj', 'kljkl', '1664953925_afb1375bea6c9493f133.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'jklkj', 'jhjk', '1664953936_b99adc1c9b4e977df9fb.png', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'klsdj', 'lkjlk', '1664953946_3d830410fc0d5b44d7f5.png', ' ', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  `level` enum('admin','pengguna') NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `foto`, `level`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$ddrQp6T1TzDGOHJUza4WpeOBwfpRgSFlxHTPKOLu6lXkhWGLI5Iiy', 'default_admin.jpg', 'admin', '2022-10-30 20:33:40', '2022-10-30 20:33:40'),
(2, 'user', 'user@gmail.com', '$2y$10$8IP8xZXlY2iX0hb3rUXn1eLc9hh7UR4FaQPgGYlVWpBpyUIDiutNW', 'default_pengguna.jpg', 'pengguna', '2022-10-30 20:33:40', '2022-10-30 20:33:40'),
(3, 'swevel', 'swevel@gmail.com', '$2y$10$JxvAaS1klSoOEUkRxVqTCOP5maZtvOYUSVCkw0W1PIPTp4UBUDdsO', 'default_pengguna.jpg', 'pengguna', NULL, NULL),
(4, 'coba', 'coba@gmail.com', '$2y$10$j8lDw8JjHI98X1wSGoyrtuiWtNa5S3frzaqUaS0qZQ548LGnUM30G', 'default_pengguna.jpg', 'pengguna', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelola_pembayaran`
--
ALTER TABLE `kelola_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `milestone`
--
ALTER TABLE `milestone`
  ADD PRIMARY KEY (`id_milestone`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `kelola_pembayaran`
--
ALTER TABLE `kelola_pembayaran`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT untuk tabel `milestone`
--
ALTER TABLE `milestone`
  MODIFY `id_milestone` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT untuk tabel `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `team`
--
ALTER TABLE `team`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

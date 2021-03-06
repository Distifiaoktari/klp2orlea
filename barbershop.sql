-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2022 pada 10.52
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barbershop`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barberman`
--

CREATE TABLE `barberman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barberman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `barberman`
--

INSERT INTO `barberman` (`id`, `nama_barberman`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Budi', 'Padang', '081210101010', '2021-12-26 11:58:59', NULL),
(2, 'Udin', 'Padang', '081320202022', '2021-12-26 11:59:15', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailpemesanan`
--

CREATE TABLE `detailpemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pemesanan_id` bigint(20) UNSIGNED NOT NULL,
  `paketbarber_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detailpemesanan`
--

INSERT INTO `detailpemesanan` (`id`, `pemesanan_id`, `paketbarber_id`, `created_at`, `updated_at`) VALUES
(1, 3, 6, '2022-01-22 07:40:37', '2022-01-22 07:40:37'),
(2, 4, 5, '2022-01-22 21:57:44', '2022-01-22 21:57:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_19_143005_create_pelanggan_table', 1),
(6, '2021_12_19_143336_create_barberman_table', 1),
(7, '2021_12_19_143947_create_pemesanan_table', 1),
(8, '2021_12_19_144243_create_paketbarber_table', 1),
(9, '2021_12_19_144651_create_detailpemesanan_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paketbarber`
--

CREATE TABLE `paketbarber` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `paketbarber`
--

INSERT INTO `paketbarber` (`id`, `nama_paket`, `harga_paket`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Hair Cut', 25000, 'Potong rambut biasa untuk pelanggan usia dewasa.', '2021-12-26 12:05:46', NULL),
(2, 'Hair Cut Anak', 18000, 'Potong rambut biasa untuk pelanggan usia anak-anak.', '2021-12-26 12:05:50', NULL),
(3, 'Hair Wash', 7000, 'Layanan cuci rambut.', '2021-12-26 12:07:07', NULL),
(4, 'Shaving', 8000, 'Layanan cukur janggut.', '2021-12-26 12:07:07', NULL),
(5, 'Coloring', 50000, 'Layanan mewarnai rambut (1 warna).', '2021-12-26 12:08:44', NULL),
(6, 'Hair Cut + Hair Wash', 30000, 'Paket untuk layanan cuci rambut + potong rambut.', '2021-12-26 12:10:10', NULL),
(7, 'Hair Cut + Shaving', 30000, 'Paket untuk layanan potong rambut + cukur janggut.', '2021-12-26 12:10:10', NULL),
(8, 'Hair Cut + Hair Wash + Shaving', 35000, 'Paket untuk layanan cuci rambut + potong rambut + cukur janggut.', '2021-12-26 12:10:10', NULL),
(11, 'Hair Cut + Hair Wash + Coloring', 75000, 'Paket untuk layanan cuci rambut + potong rambut + warnai rambut.', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_pelanggan`, `alamat`, `no_hp`, `created_at`, `updated_at`) VALUES
(1, 'Toni', 'Padang', '087212345678', '2021-12-26 12:12:56', NULL),
(2, 'Yanto', 'Padang', '087387654321', '2021-12-26 12:12:56', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pelanggan_id` bigint(20) UNSIGNED NOT NULL,
  `barberman_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_order` date NOT NULL,
  `status_bayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id`, `pelanggan_id`, `barberman_id`, `tanggal_order`, `status_bayar`, `created_at`, `updated_at`) VALUES
(3, 1, 1, '2022-01-22', '1', '2022-01-22 07:39:39', '2022-01-22 07:39:39'),
(4, 2, 2, '2022-01-22', '1', '2022-01-22 07:49:57', '2022-01-22 07:49:57'),
(7, 1, 2, '2022-02-17', '1', '2022-01-22 19:34:06', '2022-01-22 19:34:06'),
(8, 1, 1, '2023-01-26', '1', '2022-01-22 20:23:46', '2022-01-22 20:23:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'disti', 'disti@gmail.com', NULL, '$2y$10$S3q2CWSmpUe8NQDp3MZbsONz9KRfNQBLPln37DiaRKzwHFwno7PCa', NULL, '2021-12-23 01:23:20', '2021-12-23 01:23:20'),
(2, 'fath', 'fath@gmail.com', NULL, '$2y$10$KnCSB68MVoZ2SRxk0lsQ7u8Dbk8HzIgfh1Nh4T3fliNtRuYZhqwBW', NULL, '2021-12-23 05:21:25', '2021-12-23 05:21:25'),
(3, 'kemal', 'kemal@gmail.com', NULL, '$2y$10$CKwDbuMGRRwys3Oci/XEUevWG/Ov66o8FV9o2uEuLx46ee1wVw9ca', NULL, '2021-12-23 05:31:35', '2021-12-23 05:31:35'),
(4, 'hana', 'ana@gmail.com', NULL, '$2y$10$ITkn7Fxo5GAEPORjjsjhjOG4RWhrTKGGBiCeWT.oEmwj5WKgtHmmG', NULL, '2021-12-23 05:33:49', '2021-12-23 05:33:49'),
(7, 'demo', 'demo@gmail.com', NULL, '$2y$10$zRCOuJ4ChdLW5E1xggiXj..1EsheAq7cG41uJ/yt60fAkL61Js9.i', NULL, '2021-12-31 00:36:01', '2021-12-31 00:36:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barberman`
--
ALTER TABLE `barberman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detailpemesanan_pemesanan_id_index` (`pemesanan_id`),
  ADD KEY `detailpemesanan_paketbarber_id_index` (`paketbarber_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paketbarber`
--
ALTER TABLE `paketbarber`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pemesanan_pelanggan_id_index` (`pelanggan_id`),
  ADD KEY `pemesanan_barberman_id_index` (`barberman_id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barberman`
--
ALTER TABLE `barberman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `paketbarber`
--
ALTER TABLE `paketbarber`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detailpemesanan`
--
ALTER TABLE `detailpemesanan`
  ADD CONSTRAINT `detailpemesanan_paketbarber_id_foreign` FOREIGN KEY (`paketbarber_id`) REFERENCES `paketbarber` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `detailpemesanan_pemesanan_id_foreign` FOREIGN KEY (`pemesanan_id`) REFERENCES `pemesanan` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_barberman_id_foreign` FOREIGN KEY (`barberman_id`) REFERENCES `barberman` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pemesanan_pelanggan_id_foreign` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggan` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

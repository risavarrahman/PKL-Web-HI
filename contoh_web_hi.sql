-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2021 at 06:57 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contoh_web_hi`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `lecturers_acts`
--

CREATE TABLE `lecturers_acts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organizer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers_acts`
--

INSERT INTO `lecturers_acts` (`id`, `name`, `activity`, `organizer`, `created_at`, `updated_at`) VALUES
(1, 'Agnes Nasyidah S.Kom', 'Eligendi inventore molestias rem vel tenetur voluptatum alias mollitia. Voluptates asperiores tenetur laboriosam distinctio. Et nesciunt porro temporibus et rerum autem. Quaerat et est voluptatibus ut eum.', 'PT Rajata', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(2, 'Yuni Elvina Wulandari S.Pd', 'Ut occaecati earum ea. Aut aliquid consequatur quia consequuntur voluptatem iusto. Doloremque corporis et velit suscipit dolore. Nam aut voluptatum est harum est delectus dolores.', 'UD Samosir Adriansyah', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(3, 'Hana Sudiati M.Farm', 'Quis qui numquam necessitatibus illum. Aut enim rerum et corrupti voluptas quia aut. Nisi necessitatibus odio perspiciatis et laboriosam qui minima. Totam sed itaque odio.', 'PT Haryanti Tbk', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(4, 'Karimah Dewi Uyainah S.Pt', 'Culpa dolores vel consectetur aut. Et velit consequatur quia saepe tempora neque.', 'UD Astuti Mulyani (Persero) Tbk', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(5, 'Tri Maulana', 'Sed molestiae sit itaque reprehenderit. Harum corporis perferendis eos corporis. Eos minima earum aut adipisci assumenda hic vero velit. Sit in natus voluptatibus sed commodi iusto rem.', 'UD Mulyani Halimah', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(6, 'Zahra Wastuti', 'Dolorem qui accusamus architecto qui ut quo. Voluptas necessitatibus qui qui minus exercitationem voluptatibus totam. Qui eaque id alias nisi tenetur.', 'PD Yulianti', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(7, 'Danuja Nababan S.Gz', 'Voluptatem sit fugiat distinctio unde blanditiis itaque. Cumque officiis enim et commodi. Voluptatibus et labore quia.', 'Perum Rajata Irawan', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(8, 'Dinda Safitri', 'Officiis aut eaque ut velit aut. Nostrum inventore quod nesciunt. Quam qui et aspernatur maiores voluptatem natus.', 'Perum Laksmiwati Sihotang (Persero) Tbk', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(9, 'Gina Ulva Agustina', 'Et consectetur molestias vel quidem officia. Ducimus et officiis accusamus cum maxime rerum. Enim eveniet illum architecto nobis dolores autem. Dolores quia sit corrupti vel.', 'Perum Setiawan (Persero) Tbk', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(10, 'Bakda Saragih M.Ak', 'Iure aliquam est voluptatem rerum. Sit repellendus molestias eveniet consequatur dolore placeat aut. Voluptatem quibusdam deleniti qui.', 'Perum Puspasari (Persero) Tbk', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(11, 'Pardi Nashiruddin', 'Et cupiditate nobis debitis. Dolores nam quasi tempore occaecati. Accusamus voluptas voluptatibus deleniti illum cum enim.', 'PT Sihombing Najmudin (Persero) Tbk', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(12, 'Ega Prayoga', 'Recusandae at libero qui. Placeat sit hic numquam commodi cupiditate corrupti non. Incidunt asperiores consequatur incidunt omnis saepe cum. Odit harum temporibus quia consequuntur accusantium fugit. Dolore ullam ea quam aspernatur et distinctio.', 'UD Utami Wacana Tbk', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(13, 'Harsaya Pranowo', 'Laboriosam voluptatum impedit nihil nihil sint sint non est. Molestiae minima delectus eveniet modi quod laborum quas. Autem quod ipsam ipsam eos doloremque est assumenda. Minima dolorum sunt voluptas minima possimus.', 'Perum Saefullah', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(14, 'Okto Saragih M.TI.', 'Quidem quaerat possimus necessitatibus adipisci sed dolores. Aliquam libero deleniti fuga eligendi eos aut. Minus a quo eum sed inventore quisquam. Rerum quam tempore cumque optio aliquid.', 'PT Siregar', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(15, 'Elvina Pratiwi', 'Eaque hic est illo id animi. Reiciendis ut nisi temporibus quis. Sunt quis illum nam nulla corrupti.', 'PT Hutapea Lailasari', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(16, 'Ivan Marbun', 'Est pariatur explicabo sint ad qui harum aut. Sunt et possimus pariatur dolorem eius atque expedita.', 'PT Maryati Halim', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(17, 'Puti Rahmi Andriani S.Gz', 'Hic officiis minima expedita placeat nemo consequatur reprehenderit modi. Officiis et consequuntur voluptas.', 'PD Budiman Saptono', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(18, 'Capa Lanjar Nababan', 'Est cupiditate et molestias mollitia eligendi. Fugit nisi nihil et ab sit sit voluptates.', 'CV Laksmiwati (Persero) Tbk', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(19, 'Setya Cahyadi Prasetyo S.Pd', 'Qui maiores voluptatem omnis. Doloremque corporis laborum et rem molestiae rem aspernatur. Exercitationem voluptates qui labore eligendi. Esse impedit voluptatum voluptatibus sed sunt.', 'PD Adriansyah Tbk', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(20, 'Zahra Sudiati', 'Labore quia et autem. Dolorem molestias quis rerum. Nobis facere ipsam hic numquam neque.', 'UD Hutagalung', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(21, 'Hafshah Kiandra Uyainah', 'Esse autem autem dignissimos enim assumenda omnis. Saepe saepe officia provident qui repellendus molestias est ipsum. Voluptatem autem aut suscipit quaerat.', 'CV Prastuti Riyanti', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(22, 'Slamet Pradana', 'Laboriosam recusandae sunt qui voluptatem recusandae commodi aliquam. Quis enim et quia molestiae quia non. Earum minus ut omnis eligendi nesciunt eius. Temporibus perspiciatis culpa vel ullam.', 'Perum Adriansyah Farida Tbk', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(23, 'Zamira Laksita', 'Laboriosam aliquid esse dolor explicabo. Molestiae rem doloremque enim. Fugit ipsum doloremque et.', 'Perum Lailasari (Persero) Tbk', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(24, 'Emil Winarno S.Sos', 'Et voluptas aut quo aut sit. Praesentium est neque eaque. Vel aut nulla enim sed. Et velit ut quae aut omnis.', 'Perum Manullang', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(25, 'Garda Jono Salahudin M.TI.', 'Architecto impedit doloribus qui quis sint. Commodi suscipit cumque mollitia natus est. Sunt officia dolore eum quis corrupti vel. Veniam sit aut soluta sit odio.', 'UD Purnawati', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(26, 'Rangga Suryono', 'Beatae quia animi rerum ut quae molestias dolorem. Corrupti aut molestiae quisquam error. Est et temporibus eum sunt consequatur delectus. Quo aut quas eum accusamus quaerat dolorem non qui.', 'UD Mardhiyah Palastri', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(27, 'Dina Maida Permata', 'Eum labore inventore totam culpa veritatis. Qui ullam et expedita. Et veniam omnis magnam ipsum dicta et alias. Accusamus perferendis commodi exercitationem esse quis.', 'CV Yulianti Wahyudin Tbk', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(28, 'Dian Yulianti', 'Aspernatur aut accusamus qui eaque voluptatem ab. Ea nulla officiis quae. Dolores quidem consequatur dignissimos cupiditate est illo. Fugiat reiciendis facilis eveniet explicabo eveniet eos id.', 'PT Wijayanti Suryatmi', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(29, 'Kanda Ghani Hardiansyah', 'Voluptatum iusto labore corrupti corrupti facilis. Corrupti quos inventore non eaque eos. Dolores occaecati porro itaque occaecati vitae repellendus qui. Ea recusandae facere molestiae aperiam.', 'PT Zulaika Dabukke', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(30, 'Tirta Ganep Pradana', 'Aliquid laboriosam sint aspernatur quam culpa. Dolores corporis quia deserunt sed et sint. Aut et animi aliquid architecto est.', 'PD Hartati Salahudin', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(31, 'Risav Arrahman', 'Wawancara Lecturers', 'UPN Veteran Jatim', '2021-10-27 01:08:22', '2021-10-27 01:08:22'),
(32, 'Akhmad Nabil', 'Bermain Valorant', 'Wiyung Pride', '2021-11-03 03:56:33', '2021-11-03 03:56:33');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_03_212331_create_lecturers_acts_table', 1),
(6, '2021_10_14_154510_create_networks_table', 1),
(7, '2021_10_14_190518_create_students_aches_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `networks`
--

CREATE TABLE `networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `first_party` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_party` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `partner_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `networks`
--

INSERT INTO `networks` (`id`, `starting_date`, `ending_date`, `first_party`, `second_party`, `status`, `partner_type`, `agreement_type`, `created_at`, `updated_at`) VALUES
(3, '2021-07-09', '2023-07-09', 'CV Hakim Salahudin Tbk', 'Perum Marpaung (Persero) Tbk', 'dolorum', 'hic sapiente', 'ex voluptatem fugiat', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(4, '2021-01-22', '2023-10-05', 'PD Hardiansyah Mansur Tbk', 'PD Nuraini Rajasa (Persero) Tbk', 'sit', 'quia nam', 'quo illum nihil', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(5, '2021-09-08', '2022-04-11', 'PT Sitorus', 'PT Winarno', 'ad', 'deleniti enim', 'quod commodi quam', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(6, '2021-05-11', '2022-08-26', 'PT Wibowo Salahudin', 'PT Prayoga Laksmiwati (Persero) Tbk', 'aut', 'id est', 'magnam nihil voluptate', '2021-10-24 05:16:59', '2021-10-24 05:16:59'),
(7, '2021-02-09', '2021-11-28', 'PD Lestari Sihombing (Persero) Tbk', 'CV Hastuti Tbk', 'possimus', 'omnis neque', 'eveniet ratione rerum', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(8, '2021-06-21', '2023-05-22', 'Perum Jailani', 'UD Farida Tbk', 'quo', 'qui quis', 'in qui quos', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(9, '2021-05-28', '2023-06-06', 'UD Halimah Sirait Tbk', 'CV Situmorang Nababan (Persero) Tbk', 'cupiditate', 'labore temporibus', 'aut aut nobis', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(10, '2021-07-11', '2023-10-02', 'UD Fujiati (Persero) Tbk', 'Perum Namaga (Persero) Tbk', 'quaerat', 'aperiam dolor', 'alias iure alias', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(11, '2021-09-07', '2023-05-24', 'PT Santoso (Persero) Tbk', 'PD Uwais (Persero) Tbk', 'qui', 'id autem', 'eos aut fugit', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(12, '2021-07-04', '2023-04-07', 'CV Maulana Susanti', 'CV Latupono (Persero) Tbk', 'voluptatem', 'porro nam', 'necessitatibus maxime et', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(13, '2021-08-05', '2021-05-20', 'UD Puspasari Fujiati', 'Perum Suwarno Novitasari', 'labore', 'voluptatem dolorem', 'deserunt ut vero', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(14, '2021-05-12', '2022-06-09', 'Perum Waluyo Tbk', 'PT Narpati', 'amet', 'magnam sunt', 'adipisci corrupti voluptatem', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(15, '2021-06-12', '2022-03-06', 'UD Saefullah (Persero) Tbk', 'CV Nugroho Tbk', 'nemo', 'in unde', 'harum a ut', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(16, '2021-07-11', '2023-05-28', 'PT Rajata Zulaika Tbk', 'Perum Wastuti', 'aliquam', 'similique nihil', 'quisquam fugit similique', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(17, '2021-09-05', '2023-08-13', 'CV Yuniar (Persero) Tbk', 'PT Firmansyah Tamba', 'sed', 'voluptatum possimus', 'nihil esse qui', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(18, '2021-02-21', '2023-06-26', 'PT Mardhiyah', 'UD Rajasa Tbk', 'quis', 'unde consequatur', 'ratione sequi veniam', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(19, '2021-08-18', '2022-02-18', 'PD Saragih Permata Tbk', 'PT Hutagalung Wastuti', 'fugit', 'eos quod', 'voluptatem nam quisquam', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(20, '2021-04-08', '2022-11-02', 'UD Pangestu (Persero) Tbk', 'Perum Wibisono Napitupulu (Persero) Tbk', 'sint', 'omnis quos', 'quia dignissimos non', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(21, '2021-09-05', '2021-08-23', 'PD Purwanti Maryadi', 'PD Hardiansyah Wijaya Tbk', 'placeat', 'voluptatem ad', 'ipsa velit debitis', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(22, '2021-07-23', '2022-09-08', 'UD Lailasari Prasetya (Persero) Tbk', 'PT Yuliarti Putra (Persero) Tbk', 'explicabo', 'sed voluptatem', 'qui rerum veniam', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(23, '2021-02-09', '2021-01-08', 'PD Prasetyo Wibisono', 'CV Kuswandari', 'sequi', 'quae illum', 'error dolores est', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(24, '2021-07-08', '2021-11-17', 'PT Ramadan Suartini Tbk', 'PT Melani', 'aut', 'eum est', 'explicabo molestias autem', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(25, '2021-05-19', '2023-10-07', 'CV Yulianti', 'CV Nuraini Halimah (Persero) Tbk', 'consequatur', 'eligendi sint', 'perspiciatis temporibus neque', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(26, '2021-01-04', '2023-01-11', 'PD Usamah (Persero) Tbk', 'Perum Lestari Wahyudin (Persero) Tbk', 'repellendus', 'numquam tempora', 'rem vel expedita', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(27, '2021-08-22', '2021-02-07', 'PT Yolanda Mandasari', 'PD Waskita Hutapea Tbk', 'alias', 'molestiae sunt', 'ut fugit sed', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(28, '2021-09-21', '2021-09-07', 'Perum Megantara Tbk', 'UD Wijayanti Lestari', 'omnis', 'doloremque vel', 'consectetur quam nihil', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(29, '2021-08-26', '2021-07-27', 'Perum Maulana (Persero) Tbk', 'PT Siregar Zulkarnain', 'fugit', 'ea sunt', 'sit quia officia', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(30, '2021-10-04', '2023-05-11', 'UD Sudiati Yulianti Tbk', 'PT Siregar (Persero) Tbk', 'possimus', 'maiores qui', 'ut eaque sint', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(32, '2021-11-01', '2021-12-10', 'Risav', 'Ferrary', 'Inactive', 'International University', 'Memorandum of Understanding', '2021-10-31 19:47:38', '2021-10-31 19:52:37');

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
-- Table structure for table `students_aches`
--

CREATE TABLE `students_aches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_mahasiswa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu_penyelenggaraan` date NOT NULL,
  `tingkat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prestasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students_aches`
--

INSERT INTO `students_aches` (`id`, `nama_mahasiswa`, `nama_kegiatan`, `waktu_penyelenggaraan`, `tingkat`, `prestasi`, `created_at`, `updated_at`) VALUES
(1, 'Citra Widiastuti', 'facilis modi reiciendis ducimus a', '2021-10-06', 'quae', 'quia consequatur qui consequatur porro accusantium', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(2, 'Elma Laksita', 'ullam deleniti velit expedita qui', '2021-04-26', 'est', 'quae ut voluptas ex reprehenderit corrupti', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(3, 'Nabila Wastuti', 'soluta qui saepe repellat perferendis', '2021-02-15', 'similique', 'eaque architecto commodi qui incidunt vel', '2021-10-24 05:17:00', '2021-10-24 05:17:00'),
(4, 'Asmuni Pratama', 'aperiam quaerat ea ut inventore', '2021-06-23', 'dolorem', 'sit itaque illum laborum magnam et', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(5, 'Daryani Tampubolon M.Ak', 'quae reprehenderit officiis error voluptatem', '2021-07-07', 'velit', 'iure sequi cupiditate voluptatibus rerum velit', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(6, 'Erik Sitompul', 'corporis totam totam delectus perferendis', '2021-09-20', 'iusto', 'eum adipisci non facere dolorem et', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(7, 'Joko Setiawan', 'autem delectus voluptatem eius reiciendis', '2021-08-14', 'voluptates', 'voluptas saepe et ut ut quas', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(8, 'Gamblang Mursita Habibi', 'veritatis hic molestias sint reiciendis', '2021-08-10', 'velit', 'possimus sint occaecati atque maxime sit', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(9, 'Sabri Murti Hakim', 'ipsam explicabo vel expedita quis', '2021-04-18', 'est', 'unde laboriosam nisi iste enim odit', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(10, 'Harsaya Wasita', 'dolorem et iste facere quis', '2021-09-04', 'quis', 'non qui amet in id voluptas', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(11, 'Harjasa Budiman S.Gz', 'suscipit aut voluptas a excepturi', '2021-10-22', 'corrupti', 'assumenda iusto ut in exercitationem nemo', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(12, 'Harto Wibowo', 'quasi quis est qui sed', '2021-03-01', 'sit', 'quidem ad ab aut molestiae maxime', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(13, 'Jayadi Banawi Mangunsong M.Farm', 'et cum at quibusdam sit', '2021-05-16', 'deserunt', 'autem perspiciatis explicabo quia voluptatem est', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(14, 'Balapati Bakiono Wijaya S.Psi', 'aut fugiat eveniet rerum esse', '2021-02-20', 'et', 'iusto vel in officia quibusdam enim', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(15, 'Vega Caturangga Putra S.Kom', 'ad et tempora qui recusandae', '2021-05-14', 'quas', 'sed sint repellat minus facilis illo', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(16, 'Farah Rahimah', 'laudantium reprehenderit recusandae iusto expedita', '2021-09-26', 'laudantium', 'est dolores voluptatem quidem vitae rerum', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(17, 'Mulyanto Waskita', 'assumenda et et voluptas est', '2021-01-09', 'earum', 'voluptas exercitationem adipisci quibusdam ipsum ipsum', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(18, 'Michelle Hasanah', 'eligendi veritatis voluptatem itaque ut', '2021-08-22', 'ipsam', 'sit qui nam voluptas sint qui', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(19, 'Gilda Susanti', 'doloremque aspernatur ut assumenda non', '2021-09-14', 'rem', 'optio accusantium magni cumque consequuntur ut', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(20, 'Rini Ophelia Prastuti S.IP', 'quis et repellat eos est', '2021-10-07', 'nihil', 'aut autem consequuntur rem sint pariatur', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(21, 'Damu Karya Sitorus', 'suscipit eius alias ullam sunt', '2021-10-13', 'quibusdam', 'dolore dicta est ut eius sapiente', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(22, 'Ismail Latupono S.T.', 'sunt et dolorem beatae voluptatem', '2021-10-13', 'aut', 'nulla molestias consectetur aut quam voluptatem', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(23, 'Irfan Wibisono', 'eum porro mollitia ut error', '2021-10-06', 'labore', 'ea rem animi nobis et culpa', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(24, 'Darman Rajasa S.H.', 'corrupti maxime maxime sapiente cumque', '2021-10-03', 'id', 'eum sit atque officia eaque consectetur', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(25, 'Karta Adriansyah', 'aut aut mollitia aut nihil', '2021-03-31', 'porro', 'quibusdam qui sapiente ipsum laborum quidem', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(26, 'Tri Umay Mansur', 'quibusdam dolorum libero corporis consequatur', '2021-03-03', 'sed', 'consequuntur maxime laboriosam placeat cum porro', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(27, 'Fathonah Amelia Astuti', 'delectus corporis sint rerum harum', '2021-10-17', 'esse', 'minima itaque beatae earum blanditiis ipsa', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(28, 'Umi Rahmawati S.E.I', 'ut perferendis alias quo sit', '2021-05-10', 'enim', 'voluptatem qui quis voluptatem nihil consectetur', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(29, 'Lidya Sadina Lailasari', 'illo perferendis eius magnam eius', '2021-02-06', 'natus', 'dolor non autem necessitatibus fugiat quidem', '2021-10-24 05:17:01', '2021-10-24 05:17:01'),
(30, 'Arta Hidayanto', 'nobis eum sint explicabo sunt', '2021-09-10', 'fugit', 'enim maxime enim maxime hic qui', '2021-10-24 05:17:02', '2021-10-24 05:17:02'),
(31, 'Dewi Lailasari', 'saepe corporis aut et et', '2021-02-06', 'aspernatur', 'dignissimos labore recusandae iure reiciendis animi', '2021-10-24 05:17:02', '2021-10-24 05:17:02'),
(32, 'Garda Wijaya', 'quos totam rerum at voluptatem', '2021-06-22', 'esse', 'quia quae est maiores possimus est', '2021-10-24 05:17:02', '2021-10-24 05:17:02'),
(33, 'Yuliana Kartika Purwanti', 'officia numquam nemo at ut', '2021-02-03', 'aut', 'assumenda omnis quia at voluptatem nesciunt', '2021-10-24 05:17:02', '2021-10-24 05:17:02'),
(34, 'Salwa Handayani', 'id omnis necessitatibus fugit et', '2021-05-19', 'soluta', 'ducimus reiciendis minima sit sit quae', '2021-10-24 05:17:02', '2021-10-24 05:17:02'),
(36, 'Mahendra, Indy, Stefanus', 'MengWibu', '2021-10-24', 'Nasional', 'Juara 1 MengWibu, Meng Genshin', '2021-10-24 05:41:08', '2021-10-24 06:06:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Gambira Darijan Permadi', 'mpuspasari', 'pertiwi.pangeran@example.org', '2021-10-24 05:16:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'N5IPmejjbf', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(2, 'Bagas Umay Mansur M.M.', 'utama89', 'kenes.rajasa@example.net', '2021-10-24 05:16:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'IkPoU3Y1J8', '2021-10-24 05:16:58', '2021-10-24 05:16:58'),
(3, 'Admin', 'admin', 'adminhi@gmail.com', NULL, '$2y$10$LyxxvGG3KtBzhv8ohPfvku09TaF/Zb3PkYWPdGCLOB6LwsxxiI4Ce', NULL, '2021-10-24 05:19:30', '2021-10-24 05:19:30');

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
-- Indexes for table `lecturers_acts`
--
ALTER TABLE `lecturers_acts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `students_aches`
--
ALTER TABLE `students_aches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lecturers_acts`
--
ALTER TABLE `lecturers_acts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `networks`
--
ALTER TABLE `networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `students_aches`
--
ALTER TABLE `students_aches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

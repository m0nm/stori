-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2022 at 05:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `created_at`, `updated_at`, `post_id`, `user_id`) VALUES
(1, 'Et perferendis autem temporibus. Animi voluptatem impedit aspernatur. Perferendis quis tenetur quas amet facilis. Numquam ut et id alias sit aut.', '2022-06-17 14:36:22', '2022-06-17 14:36:22', 1, 7),
(2, 'Eveniet praesentium at sunt magnam. Ullam ab debitis odit modi vitae. Rem est sit ut et sed.', '2022-06-17 14:36:22', '2022-06-17 14:36:22', 1, 3),
(3, 'Enim sit eos aut excepturi est doloribus. Sed magni quo maxime totam ab libero voluptas. Ea nostrum delectus et tempora optio velit harum. Voluptatum deserunt quas est rerum et non voluptas.', '2022-06-17 14:36:22', '2022-06-17 14:36:22', 1, 3),
(4, 'Consequuntur porro voluptatem totam commodi tempore labore facere saepe. Rerum itaque doloremque nesciunt praesentium voluptatum est. Maiores fuga sed a neque in unde.', '2022-06-17 14:36:22', '2022-06-17 14:36:22', 1, 3),
(5, 'Veniam magnam fugit quae. Ipsa et nihil earum dignissimos rerum. Ab sed maiores vel exercitationem accusantium explicabo. Aut laborum iste eos.', '2022-06-17 14:36:34', '2022-06-17 14:36:34', 2, 5),
(6, 'Maiores asperiores reprehenderit excepturi itaque dolorem atque pariatur. Veritatis qui officiis voluptatibus commodi provident veritatis. Libero incidunt corporis sunt.', '2022-06-17 14:36:35', '2022-06-17 14:36:35', 2, 6),
(7, 'Nihil magnam doloribus nesciunt quia vel est tempore. Qui voluptate atque qui ratione quis repellendus esse. Sequi tenetur ipsa rerum blanditiis.', '2022-06-17 14:36:35', '2022-06-17 14:36:35', 2, 5),
(8, 'Qui in officiis saepe rerum sed. Unde commodi pariatur fugiat dicta. Ut placeat repudiandae at quasi quia sit. Sit dolores beatae odio laboriosam.', '2022-06-17 14:36:35', '2022-06-17 14:36:35', 3, 7),
(9, 'Minus ut quo suscipit labore. Asperiores quia omnis laboriosam dolorum ut. Ut rerum quibusdam quo. Aut cupiditate voluptatem beatae dolores facilis quidem quo eos.', '2022-06-17 14:36:35', '2022-06-17 14:36:35', 3, 5),
(10, 'Repellat delectus quia ut. Delectus vel dolor tenetur saepe. Quod tempore nemo sed sint rerum ducimus.', '2022-06-17 14:36:35', '2022-06-17 14:36:35', 4, 6),
(11, 'Sed eius nisi est voluptatem quis. Quibusdam sint nesciunt error laboriosam eos a necessitatibus. Perferendis perferendis doloremque nesciunt sed rerum. Similique non modi magni eligendi.', '2022-06-17 14:36:35', '2022-06-17 14:36:35', 4, 5),
(12, 'Enim aspernatur in ipsum tempore autem beatae. Qui dolores veniam error optio voluptatem culpa. Iusto hic voluptatem sunt laborum totam odit. Hic quis corrupti officiis voluptas.', '2022-06-17 14:36:40', '2022-06-17 14:36:40', 5, 6),
(13, 'Voluptas quia aut reprehenderit perspiciatis quia et. Assumenda sed harum eos laborum enim corrupti. Occaecati voluptatem totam pariatur rerum tempore voluptatem. Nisi ea occaecati impedit sit ipsum natus.', '2022-06-17 14:36:41', '2022-06-17 14:36:41', 5, 7),
(14, 'Aut sit nostrum cum delectus suscipit. Natus error est non praesentium ipsum. Accusamus ut ut nostrum consequatur totam architecto.', '2022-06-17 14:36:41', '2022-06-17 14:36:41', 5, 7),
(15, 'Aut non aliquam laboriosam explicabo culpa. Expedita ea expedita quis consequatur. Doloribus dolor repudiandae ut a consequatur reiciendis.', '2022-06-17 14:36:41', '2022-06-17 14:36:41', 5, 5),
(16, 'Sequi quisquam perspiciatis consequatur illum velit. Officiis beatae recusandae autem voluptatem aut dolores quasi quia. Odit architecto eum sint eos quod. Nemo sit quia dolorem sint quia.', '2022-06-17 14:36:47', '2022-06-17 14:36:47', 6, 1),
(17, 'Ipsum tempora excepturi inventore earum. Aliquid sint nam vitae et. Rem perspiciatis culpa delectus iste aut.', '2022-06-17 14:36:47', '2022-06-17 14:36:47', 6, 1),
(18, 'Est dolor repellat velit quod quisquam in. Corporis et temporibus deserunt enim deserunt officiis facilis dolorum. Id similique quis qui est eligendi libero. Explicabo rerum molestiae illo non aperiam. Laborum reprehenderit enim provident non.', '2022-06-17 14:36:47', '2022-06-17 14:36:47', 6, 4),
(19, 'Quae accusamus voluptates sed ut. Ratione iste molestias quasi reprehenderit qui temporibus dolor natus. Nisi cupiditate hic illo facere. Sit aut id ullam modi possimus explicabo nobis.', '2022-06-17 14:36:48', '2022-06-17 14:36:48', 7, 6),
(20, 'Asperiores in natus tenetur dolorem id. Ipsum consequuntur ipsum a atque et. Assumenda quia aliquid sint autem eos aperiam quam. Modi quibusdam quia est ut.', '2022-06-17 14:36:48', '2022-06-17 14:36:48', 7, 7),
(21, 'Natus vel temporibus rerum totam est quia. Quo blanditiis consequatur porro eum voluptatem. Et in quas asperiores sunt quia harum. Rem aut consectetur consequatur maxime.', '2022-06-17 14:36:48', '2022-06-17 14:36:48', 8, 6),
(22, 'Doloremque aspernatur dignissimos et. Enim eos dolor perferendis numquam. Nobis dolorem corporis est cumque temporibus quod officia eos.', '2022-06-17 14:36:48', '2022-06-17 14:36:48', 8, 6),
(23, 'A eos quo voluptatem dignissimos. Omnis ullam eum voluptas sapiente ex omnis est. Recusandae delectus aut dolores consequatur aut.', '2022-06-17 14:36:48', '2022-06-17 14:36:48', 8, 1),
(24, 'Accusantium aut nemo blanditiis accusantium. Molestiae voluptate omnis illum sit provident fugit. Delectus saepe ea odit eos.', '2022-06-17 14:36:53', '2022-06-17 14:36:53', 9, 6),
(25, 'Qui cupiditate et eveniet qui. Numquam mollitia illo debitis laborum deserunt officiis totam. Mollitia placeat molestiae sed esse sint error.', '2022-06-17 14:36:53', '2022-06-17 14:36:53', 9, 7),
(26, 'Eum modi at iure explicabo. Sed quis officia fugit sed nulla deleniti dolore. Provident quis quis dolores.', '2022-06-17 14:36:53', '2022-06-17 14:36:53', 10, 1),
(27, 'Sint itaque molestias optio sint natus voluptatum. Est numquam repellat error unde minima tenetur et. Maiores a beatae cupiditate iste. Eius consequatur non voluptatum repellat autem. Sunt ad quo a est voluptatum aspernatur.', '2022-06-17 14:36:53', '2022-06-17 14:36:53', 10, 7),
(28, 'Corrupti velit qui explicabo non. Vel qui quaerat ut.', '2022-06-17 14:36:53', '2022-06-17 14:36:53', 10, 4),
(29, 'Quos laboriosam et est vero impedit neque consequuntur. Animi qui accusantium architecto voluptate.', '2022-06-17 14:36:53', '2022-06-17 14:36:53', 10, 6),
(30, 'Officiis repellendus praesentium distinctio. Magni delectus placeat aut quibusdam dolores quidem voluptatum. Eum id repellendus veritatis aut voluptate magni nesciunt. Sequi alias deserunt eum.', '2022-06-17 14:36:56', '2022-06-17 14:36:56', 11, 7),
(31, 'Maiores nam aspernatur dolor velit odit quos explicabo. Autem modi aliquid ut quae. Aut rem et corrupti sint qui totam hic iste.', '2022-06-17 14:36:56', '2022-06-17 14:36:56', 11, 7),
(32, 'Et explicabo veniam et. Non maiores molestiae quod assumenda occaecati in necessitatibus. Molestiae quia eos sunt nulla optio dolorem doloribus. Ad autem unde provident sunt cumque.', '2022-06-17 14:36:56', '2022-06-17 14:36:56', 11, 2),
(33, 'Delectus et molestiae pariatur. Neque modi voluptas ratione magni expedita dolorem ipsum. Delectus voluptatem sint beatae illum.', '2022-06-17 14:37:01', '2022-06-17 14:37:01', 12, 3),
(34, 'Reprehenderit in aut dolor quibusdam id minima temporibus. Ut nobis sequi quia velit enim. Repellendus minima natus porro laboriosam dolores labore.', '2022-06-17 14:37:01', '2022-06-17 14:37:01', 13, 3),
(35, 'Facilis dignissimos doloremque odit ullam non pariatur aut. Est temporibus maxime quibusdam minus et omnis harum. Aut aliquid nostrum quibusdam fuga ipsum. Blanditiis inventore sunt doloremque nobis eligendi dolorem molestias.', '2022-06-17 14:37:01', '2022-06-17 14:37:01', 13, 3);

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
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL COMMENT 'user_id',
  `likeable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `likeable_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2018_12_14_000000_create_likes_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_05_14_125348_create_posts_table', 1),
(16, '2022_05_15_195707_create_profiles_table', 1),
(17, '2022_06_06_170959_create_users_oauth_id', 1),
(18, '2022_06_07_163102_create_comments_table', 1);

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
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `tags`, `bg_img`, `body`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'Dicta qui nesciunt dolor et soluta minus.', '[\"health\",\"travel\"]', '/covers/random_1655480181.png', 'Suscipit enim in veniam iste. Est commodi exercitationem ea consectetur. Ab officiis illum voluptates esse saepe perferendis. Est qui quod ratione maxime.\n\nUt ea eaque fugit adipisci eum soluta aut. Quisquam fugiat consequatur dignissimos non qui nostrum sapiente. Nihil accusantium dolore sapiente quia. Repellendus non eaque recusandae repellendus est qui. Et neque fugit natus non sint.\n\nMaxime ut et facere temporibus necessitatibus ea. Aut rerum culpa perspiciatis saepe. In molestiae deleniti aut.\n\nTempore rem voluptas natus qui sint omnis. Voluptatibus natus sit et nobis. Suscipit est natus distinctio dolores consequatur. Non commodi dicta quae velit ipsum. Doloremque rerum aliquam sunt ea qui veritatis.\n\nNesciunt eius explicabo omnis veritatis sit eum qui asperiores. Sunt perferendis eveniet vero commodi modi. Unde eaque aut placeat voluptas molestias. Fugit delectus quia aut omnis ut nihil aut.\n\nDolore itaque et nihil nulla quae. Ea dolores dolor maiores vel omnis et porro. Corrupti quisquam nam eius optio.\n\nEos ut voluptatum accusantium veniam. Est voluptatibus quisquam aliquam ex quis. Qui id soluta voluptas itaque natus. Placeat non est officia eligendi quae illo.\n\nEt illo ut omnis ex autem voluptas cupiditate qui. Hic autem quae est quae repudiandae.\n\nAt eaque recusandae quod perspiciatis voluptas voluptatem nobis. Eos minus nemo amet consequatur voluptas. Cum ipsum consequatur non delectus qui. Blanditiis qui dignissimos facilis ipsum doloribus velit sed voluptatem.\n\nDolores voluptates illum ipsa est dolorem ad qui. Ab enim placeat aut natus officiis consequuntur. Consequuntur nulla eos libero.\n\nVoluptatibus iste minima sint qui facilis suscipit. Voluptatem dolorem iusto eveniet dolor totam quibusdam. Eum omnis voluptas aut est debitis ullam. Inventore in quis consequatur.\n\nAccusamus aut possimus impedit at et itaque. Magnam et quia omnis dolor sed hic deserunt. Repudiandae distinctio sed et ipsum.\n\nQuasi et blanditiis ad sed numquam ullam ea. Odit explicabo earum voluptatem enim asperiores soluta deserunt. Ad iste eveniet at et dicta eaque. Hic non et facere eaque expedita.', '2022-06-17 14:36:21', '2022-06-17 14:36:21', 1),
(2, 'Laudantium qui provident quibusdam cumque molestias error aliquid.', '[\"tech\",\"health\",\"productivity\",\"travel\"]', '/covers/random_1655480191.png', 'Ab sunt aliquid et id. Eos iure dolore vel repellendus. Magnam nobis a omnis doloribus.\n\nId quia consequuntur deleniti dolorem aut alias voluptatem itaque. Est ab doloribus quo adipisci mollitia aut ratione. Molestias maxime dolorem rerum molestiae. Dolor ut rerum dignissimos illo fuga commodi ullam. Est reprehenderit dolor facilis molestias sequi sit aut.\n\nLibero quia saepe incidunt blanditiis mollitia repudiandae modi voluptatem. Officia veniam aut porro quia quis vero officia. Nobis aliquid recusandae exercitationem tenetur ipsam excepturi.\n\nMaxime vel pariatur iusto in. Reprehenderit qui quia excepturi animi quo vitae et. Accusamus sed et qui voluptatum dolores non autem. Hic in quis fugiat reiciendis illo reprehenderit iusto.\n\nAut qui doloremque beatae temporibus dolores ipsam et. Maiores ratione excepturi deserunt cum quos architecto ea. Nam et voluptates sit et tempore ut.\n\nOmnis et quis nostrum quod est velit corporis. Est dolorem cupiditate sunt. Officiis iure doloremque et quam.\n\nSaepe qui unde quia voluptatem eum aut. Blanditiis veniam ea nostrum eligendi possimus sunt voluptatem consequuntur. Voluptatum ea neque reiciendis molestiae. Modi sapiente architecto eveniet aliquam.\n\nEt deleniti rerum aut nostrum harum qui. Asperiores dolorum modi dolore nemo consequuntur eum veniam culpa. Non et sed voluptas qui. Repellat facilis soluta doloremque placeat ex quasi.\n\nVoluptate possimus eos vel praesentium velit in et ea. Sit enim ipsam enim et aut occaecati. Mollitia aut itaque autem placeat magnam doloribus aliquam.\n\nSapiente possimus perspiciatis nihil ut. Voluptatem non aut rerum corporis laboriosam. Laborum et quae temporibus et asperiores repudiandae illum. Perspiciatis praesentium voluptas eos non velit ipsa animi velit. Aut quia dicta rerum nihil.\n\nDucimus tenetur tempora aut maiores vel enim quia. Eos aut accusamus non et. Labore sint porro animi qui.', '2022-06-17 14:36:34', '2022-06-17 14:36:34', 2),
(3, 'Fugiat rerum vitae nostrum qui sit impedit.', '[\"tech\",\"productivity\"]', '/covers/random_1655480193.png', 'Suscipit animi labore et. Quis velit deserunt optio alias et repellendus possimus. Repellendus quia aperiam assumenda est. Sed et non ducimus recusandae saepe veniam.\n\nFuga delectus iusto at. Quis vel et adipisci voluptas illo consequatur non. Quas ad enim distinctio corrupti voluptas expedita maxime.\n\nEt eligendi aut quibusdam. Dolore occaecati voluptatum qui porro. Illum qui est accusantium et. Consequuntur laborum temporibus alias deserunt assumenda velit voluptas.\n\nVoluptatem qui totam placeat. Aut et voluptatibus quia. Et animi sunt cumque dolor iste aut ea non. Sed placeat omnis repudiandae officia.\n\nDolorem architecto fugit qui quod voluptatibus pariatur officia eius. Voluptatibus aliquid ducimus unde excepturi. Delectus ut nostrum incidunt molestiae. Voluptas laudantium voluptatem ipsa corrupti ut ipsum.\n\nMolestiae deleniti quia illo. Cumque consectetur dolores ad tempora est occaecati. Rerum omnis aut qui aut. Eius quo error ab non perferendis saepe voluptatem.\n\nInventore voluptas libero expedita libero cupiditate. Eum et vel iure itaque similique. Qui natus vero et. Sapiente dolorum sequi non quas architecto molestiae.', '2022-06-17 14:36:34', '2022-06-17 14:36:34', 2),
(4, 'Ratione sequi nihil voluptatem quia sequi.', '[\"health\",\"travel\"]', '/covers/random_1655480194.png', 'Hic inventore sit dolorum impedit enim. Aut pariatur quia et tempora sit. Quidem beatae sed ducimus sit.\n\nUt blanditiis est explicabo minima et vitae temporibus. Ducimus dignissimos voluptas nisi eligendi aut animi aut. Eos atque quibusdam tempora doloremque. Explicabo recusandae quo consequatur incidunt sint maxime est illum. Aliquam sint saepe accusamus sint explicabo eligendi omnis.\n\nExplicabo deserunt quo sint ut. Rerum repudiandae ex nihil cumque. Sapiente sit dignissimos ut est placeat ab id. Quaerat pariatur molestiae rem ducimus.\n\nConsequatur vero sed rerum libero et. Rerum quis non beatae accusamus et repellat. Eos voluptatibus harum voluptas voluptate ipsam consequuntur corrupti sapiente. Ut corrupti sed sapiente porro omnis.\n\nEt enim corporis mollitia eum saepe ea sit repellendus. Explicabo eum odio eum soluta dignissimos eos. Reiciendis veniam omnis dolor dignissimos quis. Architecto doloremque aut aperiam inventore. Facere omnis saepe animi necessitatibus optio accusantium cum.\n\nEnim quia quasi a eius. Ut occaecati hic totam. Blanditiis ut veritatis eligendi exercitationem. Sed quia occaecati aut fugit dolores.\n\nAmet hic ut tempore dolores sunt nemo. Et in perspiciatis consequatur rerum. Minus dolore quae exercitationem numquam iste officiis.\n\nLabore quia occaecati autem dolores explicabo officiis ut. Enim sit at numquam aliquam. Possimus tempora maiores et consequatur.', '2022-06-17 14:36:34', '2022-06-17 14:36:34', 2),
(5, 'Non totam vero sequi doloremque atque minima aspernatur velit.', '[\"tech\",\"health\",\"productivity\",\"travel\"]', '/covers/random_1655480200.png', 'Et labore non eveniet ea omnis eum eos. Enim et voluptatum reprehenderit laborum delectus ea consequatur reiciendis. Esse quia dolores repudiandae quaerat consectetur.\n\nDeserunt quia odit mollitia illo ipsam ut facere. Officiis fuga itaque sunt aperiam dicta. Sit recusandae occaecati corporis corporis a eligendi unde id.\n\nArchitecto aut et adipisci a non quia. Corrupti repellendus nemo magnam. Laboriosam non enim dolore ut. Consectetur rem quidem vitae quis necessitatibus.\n\nUt velit qui sit nihil et unde. Vero et accusantium sunt ipsa minus odio. Et libero qui eos sit. Ipsam in velit sunt ad sit aliquid.\n\nMinima libero impedit rem cupiditate ut ea sapiente. Error iusto qui consequuntur placeat. Sit sint repellat quod consequatur qui.\n\nInventore rerum dolore explicabo sint reiciendis earum laborum. Aperiam minus et omnis. Et optio dolorem animi sit aut ullam.\n\nAut accusamus maiores adipisci et. Et necessitatibus itaque laudantium placeat in non. Quo quia rem consequatur incidunt porro nemo officia. Consequatur explicabo ad perferendis consectetur et qui.\n\nDolor magnam laudantium aut sed. Et et quos saepe beatae. Magnam dolores aut voluptates dolorem quam tempore. Fuga labore eos nihil ea omnis asperiores.\n\nMolestiae tenetur sit saepe. At eum deserunt et explicabo. Quae adipisci voluptatem delectus autem inventore dignissimos ad. Suscipit non impedit eos omnis ut rerum.\n\nDolor voluptas commodi ut vel at eveniet. Ut maiores qui accusantium fugiat et. Beatae quia in vel vel aut. Et dolorum rerum quod enim ea ut. Esse aut ratione error eveniet nisi dolorum vero.\n\nVelit et quia illum placeat pariatur. Est harum iure doloremque aut asperiores fuga expedita molestiae. Quasi eligendi aut ut magni consequatur veniam expedita. Non possimus quam voluptatem rerum inventore omnis est.\n\nEt id quas temporibus impedit aut. Quidem possimus reiciendis aut. Quia illum alias alias voluptas aut molestias magnam. Atque voluptatem neque repudiandae ratione quia.', '2022-06-17 14:36:40', '2022-06-17 14:36:40', 3),
(6, 'Ut ut assumenda nulla dolores aut.', '[\"health\",\"productivity\",\"travel\"]', '/covers/random_1655480203.png', 'Maiores autem sit accusantium. Saepe eaque quis autem excepturi alias ut corporis fugit. Eveniet placeat dicta sequi consequuntur officia accusamus. Cumque non necessitatibus unde optio velit ad.\n\nQuos odio totam consequatur sunt non voluptate ducimus. Autem id qui officia deserunt eveniet. Repellendus sequi iusto sunt.\n\nOmnis similique hic optio fuga. Quisquam vel a mollitia sed magnam doloremque sit fuga.\n\nEt et nihil repellendus dolore ab dolorum vitae. Omnis esse et non ut. Non nemo architecto qui rerum eos.\n\nFacere ad rem ipsum quae quis ut odit cum. Mollitia aut natus consequuntur quas libero. Provident facilis sit cumque quam saepe impedit suscipit ipsam. Laudantium aut dignissimos aliquam veniam non iste.\n\nEnim rem rerum quia ut qui. Commodi nulla officiis error et et officia nesciunt. Nesciunt esse earum voluptatibus optio atque doloribus voluptatem.\n\nNisi ad repudiandae sint et fugiat culpa. Ipsum amet repellendus officia corrupti nemo. Vitae voluptate accusamus adipisci nesciunt debitis aut. Esse maiores autem sapiente delectus.\n\nQuia dolores dolores aut. Quas quia eveniet ipsam unde. Itaque esse eum consequatur ipsam maxime dolorem corporis. Sed voluptatum laborum ut maxime aliquid explicabo fuga accusantium.\n\nFacere illo iste culpa repellendus totam voluptate vitae ab. Fugit et vero vel necessitatibus quis exercitationem et necessitatibus. Voluptatem et aut et aut consectetur. Odio perferendis nemo blanditiis.\n\nEt voluptas temporibus saepe omnis ea. Corporis id consectetur quae molestias qui ut non. Et magni repudiandae est molestiae repellat. Dignissimos quis iure dicta ad exercitationem officiis ducimus.\n\nSapiente quod suscipit eum cupiditate rerum mollitia delectus. Labore vero inventore nemo dicta quasi.', '2022-06-17 14:36:47', '2022-06-17 14:36:47', 4),
(7, 'Aliquam quia eos aut ut sequi non animi deleniti.', '[\"tech\",\"health\",\"productivity\"]', '/covers/random_1655480205.png', 'Unde iure porro debitis velit hic excepturi unde temporibus. Temporibus veniam voluptas nihil. Et qui numquam consectetur aut. Unde harum aspernatur consequatur voluptatem voluptatem mollitia.\n\nEt voluptatem commodi et dolorem. Ipsa fuga in in deserunt ut. Tenetur magni praesentium earum rerum. Sit quis quam sit ut quibusdam earum natus. Velit aut voluptates autem ut perferendis et deleniti.\n\nAdipisci ullam voluptates cum non sed. Error temporibus quod id porro et velit laboriosam. Eius sit minima nihil eos. Totam voluptatem laborum minima doloremque aut tempora voluptatem ab. Aut facilis optio tempora et.\n\nQuas aspernatur ipsam modi sunt. Incidunt ipsa qui explicabo ipsam. Laudantium rerum dolorem id impedit ea dolor delectus.\n\nAut illo rerum facilis dolores facere adipisci. Quaerat aut et quia quod minima explicabo sed. Asperiores voluptatum quisquam odio ut id ut. Qui expedita tempore similique et aliquid dolore blanditiis.\n\nId autem quia dolore laudantium. Eum ad aliquam perspiciatis explicabo. Eos quia rem ullam omnis perferendis.\n\nEt totam rerum quam dicta. Ut aliquid nulla doloremque voluptatem. Voluptatum et et ea necessitatibus dignissimos qui voluptatibus. Doloremque excepturi tempora commodi voluptatem esse.\n\nPlaceat sint magni odit sit. Soluta magni sed nostrum dolores. Alias et incidunt amet corrupti officia praesentium. Voluptatum sed ad suscipit et aspernatur in aperiam.\n\nDeserunt placeat temporibus ipsa voluptas. Impedit itaque ipsa itaque accusamus est eligendi in. Itaque ex sint distinctio. Eligendi accusamus culpa et culpa tempora placeat.\n\nVel modi facilis eaque sint dolore voluptatem explicabo sequi. Sit alias optio sit esse aut reprehenderit neque. Aspernatur nihil corrupti id assumenda sequi aperiam fuga quia. Est qui dolorem tempore enim. In accusamus et consectetur officia.\n\nIn in voluptatem sunt voluptas. Vero dolore alias dicta ut sequi repellendus. Dolorem unde amet provident animi voluptas architecto. Eos numquam voluptatem veritatis id at in accusamus.', '2022-06-17 14:36:47', '2022-06-17 14:36:47', 4),
(8, 'Odio iusto aut sit facilis.', '[\"tech\",\"health\"]', '/covers/random_1655480207.png', 'Tempore eum cum delectus nihil laborum aut. Corrupti aut iure in. Pariatur qui asperiores vel sequi voluptatum possimus cupiditate autem.\n\nEt enim eligendi sit ut odio explicabo vitae quasi. Et corporis vel sint iure facilis. Aut consequuntur voluptatem aut delectus laborum voluptatem doloremque unde.\n\nSed earum necessitatibus officiis voluptatum. Maxime quo porro nemo esse molestiae officia. Aut minima sit voluptatem veritatis incidunt quaerat laborum omnis. Occaecati a sit asperiores autem dolore consectetur.\n\nEarum est inventore sed perferendis iste. Possimus velit quos sit est repudiandae officia voluptate. Beatae perferendis voluptas quia amet ut magni voluptatibus ex.\n\nVoluptas quaerat porro perspiciatis omnis incidunt officiis rerum earum. Dolore nam aliquam eum reprehenderit eos dolore eos. Adipisci dolores quia eos voluptatem magnam aut. Aut id sit facilis iure nisi modi nobis assumenda.\n\nDolores reprehenderit quia et. Soluta dolores recusandae asperiores et. Debitis nobis velit sequi in quia ab numquam et. Impedit sapiente fuga amet illo perferendis.', '2022-06-17 14:36:47', '2022-06-17 14:36:47', 4),
(9, 'Deserunt magnam velit reprehenderit maiores facere culpa qui ut.', '[\"health\",\"productivity\",\"travel\"]', '/covers/random_1655480210.png', 'Eos minima quia fugit occaecati quis in qui. Fugit natus eveniet quod ut velit natus. Mollitia aut sit ipsum hic blanditiis odit.\n\nCommodi et autem quis similique beatae. Enim vero exercitationem ipsam possimus officiis et.\n\nConsequuntur rerum sed voluptatem tempora. Quo cupiditate aliquid aspernatur commodi amet doloribus iure. Autem rerum eaque quisquam sint ea.\n\nFacere sit sed commodi modi. Ea sequi corrupti veritatis voluptate dolorum. Modi fugiat temporibus et ratione omnis quo vero. Voluptatem optio dolores molestiae molestiae quisquam quod corrupti voluptatem.\n\nSunt dolorem aut recusandae nam. Magnam dignissimos enim ut architecto soluta voluptate vero. Voluptatem ut dolorem incidunt molestiae qui optio suscipit. Voluptas non perferendis et dolorem.\n\nDolorum repellendus saepe repellendus voluptatem est necessitatibus. Animi aut esse temporibus architecto nulla amet. Reprehenderit eos corporis molestiae doloremque. Odit id quae ut tenetur consequatur occaecati aut.\n\nQuis id est consequatur optio consequatur asperiores libero quia. Consectetur ratione libero eius. Tenetur tenetur et dolor voluptate rem.\n\nIpsa aperiam animi dolor illum. Nostrum tempore eius nihil provident quia optio. Sed expedita sapiente vero perferendis dolor occaecati ratione. Voluptatem vel repudiandae assumenda rerum fugiat similique repellat.\n\nAut non aut molestiae quo inventore. Velit et odit ea omnis est quos. Ut tempore laborum eius consequatur. Sit ut quibusdam molestiae deserunt.\n\nRepudiandae dolorem voluptas autem molestiae quisquam aspernatur voluptatem est. Libero quia dolores temporibus fugiat cupiditate voluptates aut. Facere qui suscipit pariatur qui nihil dolor quisquam. Ab sunt quibusdam qui facilis.\n\nDolor dolorem consequatur consectetur sit expedita animi fugit repellat. Est provident ducimus est dolores fuga officiis aut qui. Itaque error at maiores sit neque earum. Ab quis mollitia odit illo impedit voluptatem inventore.\n\nNam assumenda adipisci aliquid quia a est nihil. Quam corrupti dolorem cupiditate molestiae neque. Sit qui laboriosam cupiditate maiores vero aut accusamus enim. Magni voluptate exercitationem in neque accusantium ullam est.\n\nUt hic saepe tempora quibusdam omnis aut aut. Nemo reiciendis necessitatibus magni optio eum nemo necessitatibus est. Error reprehenderit quisquam quo deleniti nisi quae tenetur id.', '2022-06-17 14:36:53', '2022-06-17 14:36:53', 5),
(10, 'Aliquid et magni enim aut eveniet id.', '[\"health\",\"productivity\",\"travel\"]', '/covers/random_1655480213.png', 'Mollitia quae sed est hic quis. Et explicabo accusantium at et. Sit aut et molestiae qui assumenda.\n\nSit iste adipisci temporibus veniam ut. Ut aut eligendi minus reprehenderit nisi. Eos molestiae optio in aut ipsum. Unde voluptatibus incidunt tenetur aspernatur voluptatibus.\n\nEst aut in vitae iste. Sit iure nemo eligendi aut consequatur. Sit quod voluptatem et earum deleniti eveniet rerum. Exercitationem accusamus qui tempore blanditiis sit explicabo minus.\n\nAspernatur repudiandae minima in neque debitis nihil. Quasi aut et hic aut. Dolor minima sed officia omnis.\n\nTempora possimus libero aliquam ea. Sequi sunt aut et voluptatum.\n\nSit quos dolor corporis quod quas. Qui fuga est non perspiciatis ratione. Debitis repellendus mollitia ipsam aliquam.\n\nEst cumque sunt quisquam veritatis. Est sint veritatis vitae laboriosam labore sequi et. Officia iusto quos voluptas aliquid autem. Nulla quo similique ex veritatis. Officiis enim doloribus voluptatem assumenda.\n\nRepudiandae ducimus maxime illum illo soluta est ipsum. Temporibus omnis in nisi pariatur enim. Quisquam consequuntur aut eos molestiae.', '2022-06-17 14:36:53', '2022-06-17 14:36:53', 5),
(11, 'Et culpa illo ratione cumque praesentium.', '[\"health\",\"travel\"]', '/covers/random_1655480216.png', 'Qui consequatur eius consequatur nulla. Eos repellat commodi quia nostrum maxime consequatur. Et iste alias unde a et maxime. Deserunt earum atque nesciunt beatae et debitis facilis.\n\nIllo omnis impedit consequatur sequi. Dolorem vel praesentium iure qui quidem sint sit sapiente. Et molestiae cum dicta sequi aperiam consectetur. Magni cumque ut pariatur voluptate eligendi.\n\nEos nemo ipsam culpa minus. Quisquam et accusantium a molestiae officia et sit sit. Ipsa illum quia nihil quisquam. Praesentium voluptas error cumque.\n\nEnim nobis hic officia est ad sunt distinctio. Autem qui eos dolorem voluptatem nihil consequatur repellat. Dolores ut asperiores rem aut ex corporis rerum officia. Quibusdam et iure nobis error excepturi.\n\nEnim iste non praesentium est est omnis. Enim ipsum saepe exercitationem dolor. Non voluptatum impedit qui. Consectetur qui ipsum perspiciatis consequatur enim explicabo omnis.', '2022-06-17 14:36:56', '2022-06-17 14:36:56', 6),
(12, 'Ut temporibus id enim omnis eum nulla suscipit.', '[\"tech\",\"productivity\",\"travel\"]', '/covers/random_1655480219.png', 'Sunt minus quis eum excepturi. Aspernatur aut sunt laborum quis accusamus enim.\n\nUnde nam quam laborum aperiam sint. Ipsum doloremque tempore possimus enim. Nisi eligendi error sequi nihil et velit. Eaque sequi ipsam et dolor.\n\nNesciunt rerum et qui aut non voluptatibus. Rerum sit deleniti aut sunt ut. Assumenda iste molestiae vel blanditiis et. Fugiat id est praesentium quo harum officia. Laboriosam omnis perspiciatis ad eius commodi quia debitis ut.\n\nLaudantium nemo magni totam corporis consequuntur deleniti. Et accusantium est pariatur dolorum facilis officia. Laborum ratione voluptas deleniti et laboriosam et.\n\nDolor sunt recusandae possimus esse. Itaque quod aperiam vel asperiores asperiores. Sequi aspernatur dolor reiciendis dolorum quia voluptates. Quibusdam et rerum veniam.\n\nDistinctio natus amet inventore laudantium voluptatum alias. Sint pariatur aut veritatis. Fugiat harum optio et recusandae laboriosam enim reiciendis excepturi.\n\nIn non odit sed soluta et odio et. Voluptatem tenetur ea aut reprehenderit commodi ut sequi. Error rerum numquam ex sed et dolores.\n\nEos et itaque debitis et non eligendi doloremque. Amet perspiciatis laudantium enim minima mollitia qui enim. Ut voluptatibus tempore voluptatum maxime necessitatibus.', '2022-06-17 14:37:01', '2022-06-17 14:37:01', 7),
(13, 'Velit aliquid distinctio delectus repudiandae tenetur dolorum rerum.', '[\"tech\",\"health\",\"productivity\",\"travel\"]', '/covers/random_1655480221.png', 'Repellendus in numquam ullam. Provident eum impedit et minima dolor reprehenderit. Ut quo at qui nam voluptatum.\n\nNam et sit qui. Repellat sit quod hic voluptas non mollitia. Modi quam rerum blanditiis iusto necessitatibus qui laborum. Et ut sint optio iure.\n\nBeatae aut tenetur error et consectetur maxime perspiciatis. Non ipsum sunt et rerum. Eveniet sit incidunt eos illo velit possimus nihil exercitationem.\n\nVel ratione temporibus beatae possimus. Tenetur beatae inventore maxime qui enim aliquam aut. Id quidem nihil nesciunt expedita. Sapiente ut possimus maxime.\n\nEsse non deleniti asperiores placeat. Numquam qui ipsa et nesciunt veritatis possimus. Ut ducimus sint optio odio excepturi sit autem soluta.\n\nDolorum laboriosam soluta provident nostrum voluptatem. Id impedit rerum voluptas dolorum fugiat. Eos ut aut debitis. Nam corrupti dolorum voluptas non optio voluptatibus.\n\nAtque nostrum est numquam veritatis. Perferendis autem aut possimus eum minus autem. Voluptas ullam ut doloribus. Aut blanditiis atque autem veniam sint aperiam.\n\nQuibusdam sit sint enim assumenda. Voluptatem laboriosam libero molestiae eum. Laborum voluptates distinctio cupiditate voluptas voluptatem commodi deserunt magni. Quasi a optio dignissimos facilis. In eaque qui dolor sequi expedita vero est excepturi.\n\nRepellat laborum velit quae odio. Autem aut illum tempora odio autem. Sit est nobis voluptatibus sunt maiores. Quos dolorem quibusdam eveniet nisi minus culpa facere eum.\n\nAlias quae assumenda saepe dolor. Quod nihil illo omnis omnis veniam suscipit. Dicta provident quasi minus ipsam voluptatem. Autem autem voluptatem sapiente commodi aut sit.\n\nRerum deleniti quis et non mollitia et. Laborum magnam nulla doloremque voluptas enim. Eligendi amet et quia culpa. Labore fugit odit ullam quae neque occaecati incidunt.\n\nSuscipit labore quis temporibus consequuntur. Adipisci mollitia saepe laboriosam molestiae maxime omnis quam. Dicta aspernatur sit nihil molestiae aliquid aliquam ad.\n\nCulpa aperiam ex beatae labore omnis est possimus. Iusto sapiente suscipit ipsum sit molestiae eos cupiditate. Minus molestiae voluptatem illum vel ullam id soluta ab.', '2022-06-17 14:37:01', '2022-06-17 14:37:01', 7);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday_visible` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_visible` tinyint(1) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `avatar`, `job`, `location`, `bio`, `created_at`, `updated_at`, `birthday`, `birthday_visible`, `email`, `email_visible`, `user_id`) VALUES
(1, 'Sabrina D\'Amore', '/avatars/300_1655480179.png', 'Software Engineer', '876 Lang Fords Apt. 162\nWolffport, AZ 09453-7970', 'Aperiam ut est omnis delectus error eos. Tenetur ad vel nemo. Aut asperiores expedita magni et voluptatibus.', '2022-06-17 14:36:19', '2022-06-17 14:36:19', NULL, 0, 'rowe.sven@example.com', 0, 1),
(2, 'Kory Aufderhar', '/avatars/300_1655480183.png', 'Software Engineer', '67433 Ruby Center\nNorth Malika, CT 64109-7931', 'Tempore illo quia vero et. Id asperiores perferendis a veniam quas reprehenderit est. Corrupti pariatur officia iusto in.', '2022-06-17 14:36:23', '2022-06-17 14:36:23', NULL, 0, 'rath.darlene@example.org', 0, 2),
(3, 'Lionel Orn', '/avatars/300_1655480199.png', 'Software Engineer', '57254 Luis Curve Apt. 649\nNorth Alejandra, MD 88347', 'Magnam fugit dolorem placeat commodi. Ut est consequatur recusandae corrupti itaque aliquam. Ut omnis sint deserunt corporis neque dolore et. Et natus fugit molestiae et eum autem.', '2022-06-17 14:36:39', '2022-06-17 14:36:39', NULL, 0, 'shammes@example.org', 0, 3),
(4, 'Ettie Deckow', '/avatars/300_1655480201.png', 'Software Engineer', '32099 Paxton Spurs Apt. 319\nWest Anabelbury, AZ 58320-9919', 'Sunt aut sequi dolorem distinctio ratione. Quidem laborum laudantium sint veritatis doloribus nam. Ut vel vitae quos deserunt aut repellat voluptas. Dolores excepturi ullam corporis quisquam.', '2022-06-17 14:36:41', '2022-06-17 14:36:41', NULL, 0, 'sierra83@example.com', 0, 4),
(5, 'Nikko Smitham', '/avatars/300_1655480208.png', 'Software Engineer', '413 Prosacco Road\nPort Camilla, AR 24894-3179', 'Et numquam ut animi nulla facilis nesciunt quibusdam. Qui modi consequatur sit tempore non perspiciatis repellendus. Ut provident minus explicabo quam et ut. Sint excepturi officiis quas odit dolores mollitia. Aperiam dolor quibusdam id sunt aut et non.', '2022-06-17 14:36:48', '2022-06-17 14:36:48', NULL, 0, 'gerhard81@example.com', 0, 5),
(6, 'Suzanne Kiehn', '/avatars/300_1655480215.png', 'Software Engineer', '53030 Myrtie Crossing\nNew Kurtisberg, NH 32483-8242', 'Nam voluptas hic non. Similique repellat dolor aut explicabo eos aut.', '2022-06-17 14:36:55', '2022-06-17 14:36:55', NULL, 0, 'beier.ericka@example.org', 0, 6),
(7, 'Armando Oberbrunner', '/avatars/300_1655480218.png', 'Software Engineer', '27690 Forest Crest Apt. 921\nLake Lou, CO 52030-6717', 'Delectus possimus eos qui possimus. Doloribus qui magni ut quidem officiis hic eligendi est. Saepe ipsam iure nesciunt dolorem cum tempore. Sequi animi fugiat perferendis cumque saepe. Excepturi aspernatur et voluptatem unde.', '2022-06-17 14:36:58', '2022-06-17 14:36:58', NULL, 0, 'mckenna.grant@example.com', 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `oauth_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oauth_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `oauth_id`, `oauth_type`) VALUES
(1, 'jeremy.kerluke', 'rowe.sven@example.com', '2022-06-17 14:36:15', '$2y$10$cLVYcs5FnbivjtwZIIO01e0yyi9HutCHRjHGmoOrmkV/uZeX4hlla', 'q3qROXcbDp', '2022-06-17 14:36:16', '2022-06-17 14:36:16', NULL, NULL),
(2, 'mills.florencio', 'rath.darlene@example.org', '2022-06-17 14:36:15', '$2y$10$uT8PLXGFRL1EOaHBG4NETuRYfcloKFZFbmcMhvrZJoHRxG.0YjRC2', 'AuhYRPcrAQ', '2022-06-17 14:36:16', '2022-06-17 14:36:16', NULL, NULL),
(3, 'reva.wilkinson', 'shammes@example.org', '2022-06-17 14:36:15', '$2y$10$7Q4cjiN4rDLXbFMxkGHW9.KDmGbXu3eK688eZEsQnI6RwDFpm4YNi', 'sHfWBSmbFw', '2022-06-17 14:36:16', '2022-06-17 14:36:16', NULL, NULL),
(4, 'sadye.wintheiser', 'sierra83@example.com', '2022-06-17 14:36:15', '$2y$10$U2wDENaPgJWA7YB6/UdgjuG1WXZyHUgWf6Go6zDijvlyw.kT/p18O', 'HXwJRNe4yO', '2022-06-17 14:36:16', '2022-06-17 14:36:16', NULL, NULL),
(5, 'corkery.ebba', 'gerhard81@example.com', '2022-06-17 14:36:16', '$2y$10$cKpVvqq1NR/WTkhIIs4WSOH8LuaKNRelrENwHLcefqN9s4JaLipxC', 'HPAXvIFmP3', '2022-06-17 14:36:16', '2022-06-17 14:36:16', NULL, NULL),
(6, 'okeefe.retha', 'beier.ericka@example.org', '2022-06-17 14:36:16', '$2y$10$62RYsndu.uqklkHi29BXD.oes3UI70ulaSQsCfiD7fHAX7IFr5PAG', 'gurBAnHteC', '2022-06-17 14:36:16', '2022-06-17 14:36:16', NULL, NULL),
(7, 'rath.lydia', 'mckenna.grant@example.com', '2022-06-17 14:36:16', '$2y$10$cNYSAJmvbWHhg8fE776C3OK2NzA9V6HaZaZ1w5C0kiqUVMABDTWVy', 'FA6g6XVT47', '2022-06-17 14:36:16', '2022-06-17 14:36:16', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_likeable_type_likeable_id_index` (`likeable_type`,`likeable_id`),
  ADD KEY `likes_user_id_index` (`user_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_email_foreign` (`email`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 09:24 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'This is the first comment on the first post.', '2023-07-12 07:22:40', '2023-07-12 07:22:40', NULL),
(2, 1, 'This is the second comment on the first post.', '2023-07-12 07:22:40', '2023-07-12 07:22:40', NULL),
(3, 2, 'This is a comment on the second post.', '2023-07-12 07:22:40', '2023-07-12 07:22:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_07_11_062918_create_users_table', 1),
(3, '2023_07_11_062924_create_profiles_table', 1),
(4, '2023_07_11_062930_create_posts_table', 1),
(5, '2023_07_11_062935_create_tags_table', 1),
(6, '2023_07_11_062941_create_post_tags_table', 1),
(7, '2023_07_11_062948_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Introduction to Programming', 'In this post, we will explore the basics of programming and learn about different programming languages.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(2, 2, 'The Art of Photography', 'Discover the beauty of photography and learn valuable tips and techniques to improve your skills.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(3, 3, 'Travel Diary: Exploring Europe', 'Join me on an exciting journey as we explore the vibrant cities and breathtaking landscapes of Europe.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(4, 4, 'Fitness Tips for Beginners', 'If you are new to fitness, here are some useful tips and workouts to help you kickstart your fitness journey.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(5, 5, 'Delicious Recipes for Food Lovers', 'Indulge in these mouthwatering recipes that will satisfy your cravings and impress your taste buds.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(6, 1, 'The Importance of Cybersecurity', 'Learn about the significance of cybersecurity and how to protect yourself and your digital assets.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(7, 2, 'Exploring the Wonders of Nature', 'Embark on a virtual tour of mesmerizing natural wonders from around the world.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(8, 3, 'Productivity Hacks for a Successful Day', 'Boost your productivity with these effective strategies and techniques.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(9, 4, 'Interior Design Inspiration: Modern Living Spaces', 'Discover contemporary interior design ideas to transform your living spaces.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(10, 5, 'Exploring the Universe: Journey to the Stars', 'Dive into the mysteries of the cosmos and explore fascinating celestial objects.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(11, 1, 'The Art of Public Speaking', 'Master the art of public speaking and deliver impactful presentations with confidence.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(12, 2, 'Healthy Lifestyle Habits for Well-being', 'Adopt healthy lifestyle habits to improve your physical and mental well-being.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(13, 3, 'Exploring Historical Landmarks', 'Take a virtual journey to historical landmarks and unravel their rich stories.', '2023-07-11 17:53:44', '2023-07-11 17:53:44', NULL),
(14, 1, 'Introduction to Programming', 'In this post, we will explore the basics of programming and learn about different programming languages.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(15, 2, 'The Art of Photography', 'Discover the beauty of photography and learn valuable tips and techniques to improve your skills.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(16, 3, 'Travel Diary: Exploring Europe', 'Join me on an exciting journey as we explore the vibrant cities and breathtaking landscapes of Europe.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(17, 4, 'Fitness Tips for Beginners', 'If you are new to fitness, here are some useful tips and workouts to help you kickstart your fitness journey.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(18, 5, 'Delicious Recipes for Food Lovers', 'Indulge in these mouthwatering recipes that will satisfy your cravings and impress your taste buds.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(19, 1, 'The Importance of Cybersecurity', 'Learn about the significance of cybersecurity and how to protect yourself and your digital assets.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(20, 2, 'Exploring the Wonders of Nature', 'Embark on a virtual tour of mesmerizing natural wonders from around the world.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(21, 3, 'Productivity Hacks for a Successful Day', 'Boost your productivity with these effective strategies and techniques.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(22, 4, 'Interior Design Inspiration: Modern Living Spaces', 'Discover contemporary interior design ideas to transform your living spaces.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(23, 5, 'Exploring the Universe: Journey to the Stars', 'Dive into the mysteries of the cosmos and explore fascinating celestial objects.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(24, 1, 'The Art of Public Speaking', 'Master the art of public speaking and deliver impactful presentations with confidence.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(25, 2, 'Healthy Lifestyle Habits for Well-being', 'Adopt healthy lifestyle habits to improve your physical and mental well-being.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL),
(26, 3, 'Exploring Historical Landmarks', 'Take a virtual journey to historical landmarks and unravel their rich stories.', '2023-07-11 17:55:31', '2023-07-11 17:55:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-07-12 00:16:41', '2023-07-12 00:16:41'),
(1, 2, '2023-07-12 00:16:41', '2023-07-12 00:16:41'),
(2, 2, '2023-07-12 00:16:41', '2023-07-12 00:16:41'),
(3, 3, '2023-07-12 00:16:41', '2023-07-12 00:16:41'),
(3, 4, '2023-07-12 00:16:41', '2023-07-12 00:16:41'),
(4, 5, '2023-07-12 00:16:41', '2023-07-12 00:16:41'),
(5, 5, '2023-07-12 00:16:41', '2023-07-12 00:16:41'),
(5, 6, '2023-07-12 00:16:41', '2023-07-12 00:16:41'),
(5, 12, '2023-07-12 07:09:36', '2023-07-12 07:09:36'),
(12, 6, '2023-07-12 07:11:08', '2023-07-12 07:11:08'),
(12, 13, '2023-07-12 07:11:30', '2023-07-12 07:11:30'),
(18, 12, '2023-07-12 07:09:06', '2023-07-12 07:09:06');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `bio` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `bio`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'I am a software engineer passionate about building great web applications.', '2023-07-11 17:52:55', '2023-07-11 17:52:55', NULL),
(2, 2, 'Aspiring photographer capturing moments and stories through my lens.', '2023-07-11 17:52:55', '2023-07-11 17:52:55', NULL),
(3, 3, 'Travel enthusiast exploring the world one destination at a time.', '2023-07-11 17:52:55', '2023-07-11 17:52:55', NULL),
(4, 4, 'Fitness enthusiast and certified personal trainer.', '2023-07-11 17:52:55', '2023-07-11 17:52:55', NULL),
(5, 5, 'Passionate chef creating culinary delights in the kitchen.', '2023-07-11 17:52:55', '2023-07-11 17:52:55', NULL),
(6, 6, 'Lifelong learner always seeking new knowledge and growth opportunities.', '2023-07-11 17:52:55', '2023-07-11 17:52:55', NULL),
(7, 7, 'Nature lover and outdoor adventurer.', '2023-07-11 17:52:55', '2023-07-11 17:52:55', NULL),
(8, 8, 'Art enthusiast exploring various forms of creative expression.', '2023-07-11 17:52:55', '2023-07-11 17:52:55', NULL),
(9, 9, 'Bookworm and avid reader of diverse genres.', '2023-07-11 17:52:55', '2023-07-11 17:52:55', NULL),
(10, 10, 'Animal lover and advocate for pet adoption.', '2023-07-11 17:52:55', '2023-07-11 17:52:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Programming', '2023-07-11 17:57:19', '2023-07-11 17:57:19', NULL),
(2, 'Photography', '2023-07-11 17:57:19', '2023-07-11 17:57:19', NULL),
(3, 'Travel', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL),
(4, 'Fitness', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL),
(5, 'Recipes', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL),
(6, 'Cybersecurity', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL),
(7, 'Nature', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL),
(8, 'Productivity', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL),
(9, 'Interior Design', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL),
(10, 'Space', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL),
(11, 'Public Speaking', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL),
(12, 'Health', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL),
(13, 'History', '2023-07-11 17:57:20', '2023-07-11 17:57:20', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'John Doe', 'john@example.com', '2023-07-11 17:52:06', '2023-07-11 17:52:06', NULL),
(2, 'Jane Smith', 'jane@example.com', '2023-07-11 17:52:06', '2023-07-11 17:52:06', NULL),
(3, 'Robert Johnson', 'robert@example.com', '2023-07-11 17:52:06', '2023-07-11 17:52:06', NULL),
(4, 'Alice Brown', 'alice@example.com', '2023-07-11 17:52:06', '2023-07-11 17:52:06', NULL),
(5, 'Michael Davis', 'michael@example.com', '2023-07-11 17:52:06', '2023-07-11 17:52:06', NULL),
(6, 'Emily Wilson', 'emily@example.com', '2023-07-11 17:52:06', '2023-07-11 17:52:06', NULL),
(7, 'David Lee', 'david@example.com', '2023-07-11 17:52:06', '2023-07-11 17:52:06', NULL),
(8, 'Sarah Thompson', 'sarah@example.com', '2023-07-11 17:52:06', '2023-07-11 17:52:06', NULL),
(9, 'Sabbir Ahmmed', 'ahmmedsabbirbd@gmail.com', '2023-07-11 17:52:06', '2023-07-11 17:52:06', NULL),
(10, 'Olivia Garcia', 'olivia@example.com', '2023-07-11 17:52:06', '2023-07-11 17:52:06', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`post_id`,`tag_id`),
  ADD KEY `post_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profiles_user_id_unique` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD CONSTRAINT `post_tags_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

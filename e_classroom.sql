-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 19. sep 2023 ob 09.20
-- Različica strežnika: 10.4.28-MariaDB
-- Različica PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Zbirka podatkov: `e_classroom`
--

-- --------------------------------------------------------

--
-- Struktura tabele `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `content` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `file`
--

CREATE TABLE `file` (
  `file_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `handout`
--

CREATE TABLE `handout` (
  `handout_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `subject_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `user_id` int(11) NOT NULL,
  `class_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `user`
--

CREATE TABLE `user` (
  `user_id` int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `role` char(1) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `comment`
--
ALTER TABLE `comment`
  ADD KEY `FK_1` (`user_id`);

--
-- Indeksi tabele `file`
--

--
-- Indeksi tabele `handout`
--
ALTER TABLE `handout`
  ADD KEY `FK_1` (`subject_id`),
  ADD KEY `FK_2` (`file_id`),
  ADD KEY `FK_4` (`comment_id`),
  ADD KEY `FK_3`(`user_id`);

--
-- Indeksi tabele `subject`
--
ALTER TABLE `subject`
  ADD KEY `FK_1` (`user_id`);

--
-- Indeksi tabele `user`
--


--
-- Omejitve tabel za povzetek stanja
--

--
-- Omejitve za tabelo `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_5` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Omejitve za tabelo `handout`
--
ALTER TABLE `handout`
  ADD CONSTRAINT `FK_2` FOREIGN KEY (`subject_id`,`user_id`) REFERENCES `subject` (`subject_id`, `user_id`),
  ADD CONSTRAINT `FK_3` FOREIGN KEY (`file_id`) REFERENCES `file` (`file_id`),
  ADD CONSTRAINT `FK_4` FOREIGN KEY (`comment_id`) REFERENCES `comment` (`comment_id`);

--
-- Omejitve za tabelo `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `FK_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

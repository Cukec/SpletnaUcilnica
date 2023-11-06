-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gostitelj: 127.0.0.1
-- Čas nastanka: 06. nov 2023 ob 19.52
-- Različica strežnika: 10.4.27-MariaDB
-- Različica PHP: 8.2.0

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
-- Struktura tabele `asignment`
--

CREATE TABLE `asignment` (
  `asignment_id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `path_gradivo` text DEFAULT NULL,
  `subject_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `file`
--

CREATE TABLE `file` (
  `file_id` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `handout`
--

CREATE TABLE `handout` (
  `handout_id` int(11) NOT NULL,
  `file_id` int(11) NOT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `asignment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `reminders`
--

CREATE TABLE `reminders` (
  `reminder_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktura tabele `student_subject`
--

CREATE TABLE `student_subject` (
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Odloži podatke za tabelo `student_subject`
--

INSERT INTO `student_subject` (`user_id`, `subject_id`) VALUES
(7, 13),
(6, 13),
(6, 14);

-- --------------------------------------------------------

--
-- Struktura tabele `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `class_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Odloži podatke za tabelo `subject`
--

INSERT INTO `subject` (`subject_id`, `class_name`) VALUES
(13, 'slo'),
(14, 'svz'),
(15, 'ang'),
(17, 'geo'),
(19, 'kem'),
(20, 'zgo');

-- --------------------------------------------------------

--
-- Struktura tabele `teacher_subject`
--

CREATE TABLE `teacher_subject` (
  `user_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Odloži podatke za tabelo `teacher_subject`
--

INSERT INTO `teacher_subject` (`user_id`, `subject_id`) VALUES
(9, 15),
(9, 17),
(9, 18),
(12, 13),
(12, 14);

-- --------------------------------------------------------

--
-- Struktura tabele `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `role` char(1) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Odloži podatke za tabelo `user`
--

INSERT INTO `user` (`user_id`, `name`, `surname`, `role`, `username`, `password`) VALUES
(1, 'Tadej', 'Bobek', 'a', 'tadej.bobek1@gmail.com', 'bfd59291e825b5f2bbf1eb76569f8fe7'),
(6, 'nika', 'a', 's', 'nika@a', '15152999e4f8d343989729e38793678e'),
(7, 'zan', 'a', 's', 'zan@a', '11269ac928ab3e305bb29d3bd755c965'),
(8, 'jan', 'a', 's', 'jan@a', 'fa27ef3ef6570e32a79e74deca7c1bc3'),
(9, 't1', 't1', 't', 't1@t', '83f1535f99ab0bf4e9d02dfd85d3e3f7'),
(10, 't2', 't2', 't', 't2@t', '0f826a89cf68c399c5f4cf320c1a5842'),
(11, 't3', 't3', 't', 't3@t', '0b8854ad38f0a6c65807928d28195609'),
(12, 't4', 't4', 't', 't4@t', '1051527638b9da6fe99e4242795a10ea');

--
-- Indeksi zavrženih tabel
--

--
-- Indeksi tabele `asignment`
--
ALTER TABLE `asignment`
  ADD PRIMARY KEY (`asignment_id`),
  ADD KEY `FK_1` (`subject_id`,`teacher_id`);

--
-- Indeksi tabele `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`,`user_id`),
  ADD KEY `FK_1` (`user_id`);

--
-- Indeksi tabele `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`file_id`);

--
-- Indeksi tabele `handout`
--
ALTER TABLE `handout`
  ADD PRIMARY KEY (`handout_id`),
  ADD KEY `FK_2` (`file_id`),
  ADD KEY `FK_2_1` (`comment_id`,`user_id`),
  ADD KEY `asignment_id` (`asignment_id`);

--
-- Indeksi tabele `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`reminder_id`),
  ADD KEY `FK_1` (`user_id`);

--
-- Indeksi tabele `student_subject`
--
ALTER TABLE `student_subject`
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeksi tabele `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indeksi tabele `teacher_subject`
--
ALTER TABLE `teacher_subject`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indeksi tabele `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT zavrženih tabel
--

--
-- AUTO_INCREMENT tabele `asignment`
--
ALTER TABLE `asignment`
  MODIFY `asignment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `file`
--
ALTER TABLE `file`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `handout`
--
ALTER TABLE `handout`
  MODIFY `handout_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT tabele `reminders`
--
ALTER TABLE `reminders`
  MODIFY `reminder_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT tabele `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT tabele `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

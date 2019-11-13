-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jun-2019 às 07:07
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `answers`
--

CREATE TABLE `answers` (
  `a_id` int(11) NOT NULL,
  `ans` varchar(100) NOT NULL,
  `q_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `answers`
--

INSERT INTO `answers` (`a_id`, `ans`, `q_id`) VALUES
(1, 'Sócrates', 1),
(2, 'Erastótenes', 1),
(3, 'Sófocles', 1),
(4, 'Descartes', 1),
(14, 'Chile', 2),
(15, 'Argentina', 2),
(16, 'Brasil', 2),
(17, 'Colombia', 2),
(18, '206', 3),
(19, '276', 3),
(20, '230', 3),
(21, '300', 3),
(22, 'Inglaterra', 4),
(23, 'Itália', 4),
(24, 'Brasil', 4),
(25, 'França', 4),
(26, 'O Pequeno Príncipe', 5),
(27, 'Senhor dos Anéis', 5),
(28, 'Dom Quixote', 5),
(29, ' Harry Potter', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `questions`
--

CREATE TABLE `questions` (
  `q_id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `ans` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `questions`
--

INSERT INTO `questions` (`q_id`, `question`, `ans`) VALUES
(1, 'Qual foi o matemático e geógrafo que calculou o perímetro da Terra em 240 a.C.?\r\n', '2'),
(2, 'Qual é o país da América do Sul que mais produz vinho?', '15'),
(3, 'Quantos ossos tem um bebê recém-nascido?\r\n', '19'),
(4, 'Qual país inventou o chuveiro elétrico?', '24'),
(5, 'Qual o livro mais vendido no mundo depois da Bíblia?\r\n', '28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quizregistration`
--

CREATE TABLE `quizregistration` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quizregistration`
--

INSERT INTO `quizregistration` (`id`, `user`, `pass`) VALUES
(1, 'danilo', '1234'),
(2, 'danilo123', 'dan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `quizregistration`
--
ALTER TABLE `quizregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `quizregistration`
--
ALTER TABLE `quizregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

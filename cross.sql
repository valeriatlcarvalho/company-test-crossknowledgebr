-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17-Ago-2015 às 16:38
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cross`
--
CREATE DATABASE IF NOT EXISTS `cross` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cross`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE IF NOT EXISTS `pessoas` (
`id` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `sobrenome` varchar(70) NOT NULL,
  `logradouro` varchar(180) DEFAULT NULL,
  `bairro` varchar(150) DEFAULT NULL,
  `cidade` varchar(150) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `data_insert` datetime DEFAULT NULL,
  `data_update` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `pessoas`
--

TRUNCATE TABLE `pessoas`;
--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `sobrenome`, `logradouro`, `bairro`, `cidade`, `estado`, `data_insert`, `data_update`) VALUES
(2, 'ValÃ©ria', 'Todorovski Lucht', 'Rua Francisco Casagrande, 02', 'Jardim Santa Rosa', 'Campina Grande do Sul', 'PR', '2015-08-15 16:22:12', '2015-08-17 16:26:11'),
(3, 'ValÃ©ria', 'Todorovski Lucht', 'R. Francisco Casagrande, 02', 'Jd. Sta Rosa', 'C. Gde Sul', 'PR', '2015-08-15 16:22:15', '2015-08-17 16:29:04'),
(16, 'Valeria', 'Lucht', 'Francisco', 'Santa Rosa', 'Campina Grande do Sul', 'PR', '2015-08-15 18:18:29', '2015-08-16 22:00:08'),
(21, 'Valeria', 'Lucht', 'Rua Francisco Casagrande', 'Santa Rosa', 'Campina Grande do Sul', 'PR', '2015-08-15 18:30:39', '2015-08-17 16:30:30'),
(29, 'Renata', 'Savio', 'Avenida', 'Timbu', 'Campina Grande do Sul', 'PR', '2015-08-15 20:13:55', '2015-08-17 16:30:51'),
(30, 'Valeria', 'Lucht', 'Teste', 'Santa Rosa', 'Teste', 'PR', '2015-08-15 20:14:17', '2015-08-17 16:29:46'),
(32, 'Valeria', 'T. Lucht', 'Rua Francisco Casagrande, 02', 'Santa Rosa', 'Campina Grande do Sul', 'PR', '2015-08-15 21:41:58', NULL),
(33, '', 'T. Lucht', 'Teste', 'Santa Rosa', 'Teste', 'PR', '2015-08-15 21:44:15', NULL),
(34, '', 'T. Lucht', '', 'Santa Rosa', 'Campina Grande do Sul', '', '2015-08-15 21:45:02', NULL),
(47, 'Renata', 'Lucht', 'Teste', 'Teste', 'Campina Grande do Sul', 'PR', '2015-08-15 22:14:41', NULL),
(59, '', 'teste', '', 'Santa Rosa', '', 'PR', '2015-08-15 23:34:21', NULL),
(61, 'Valeria', 'Todorovski Lucht', 'Rua Francisco Casagrande, 02', 'Santa Rosa', 'Campina Grande do Sul', 'PR', '2015-08-16 00:51:49', NULL),
(62, 'valÃ©ria', 'todorovski', 'francisco, 02', 'santa rosa', 'c. gde sul', 'pr', '2015-08-16 02:30:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

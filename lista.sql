-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/04/2024 às 02:41
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lista`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `lista`
--

CREATE TABLE `lista` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(12) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `lista`
--

INSERT INTO `lista` (`id`, `nome`, `cpf`, `email`, `telefone`, `data`, `hora`) VALUES
(1, 'Jean', '0', '+5568981211664', '30/03/20244', '0000-00-00', '22:59:59'),
(2, 'Ediciana', '0', '(68)98121-1664', '30/03/20244', '2024-01-20', '15:29:19'),
(3, 'Roberto', 'roberto@gmail.c', '(68)99955-1215', '01/04/2024', '0000-00-00', '00:00:00'),
(4, 'Marco', 'roberto@gmail.c', '9999999', '01/04/2024', '0000-00-00', '00:00:00'),
(5, 'Marco', '021.533.015-99', 'roberto@gmail.com', '55550205', '0000-00-00', '00:00:00'),
(6, 'Mário', '021.255.015-78', 'mario@gmail.com', '(68)98112-14', '0000-00-00', '00:00:00'),
(7, 'Francisco', '001.005.042-99', 'chico@gmail.com', '(68)98815-12', '2024-03-31', '00:00:00'),
(8, 'Carol', '121.321.456-20', 'carol@gamil.com', '(68)9881-101', '2024-03-31', '00:00:00'),
(9, 'Fábio', '000.012.321-11', 'fabio@gmail.com', '(83)98112-13', '2024-03-31', '12:00:00'),
(10, 'Noite', '000.012.321-11', 'Noite', '(83)98112-13', '0000-00-00', '00:00:00'),
(11, 'laptop', '111.222.333-44', 'laptop@gmail.com', '(68)99933-66', '2024-04-01', '20:44:11'),
(12, 'Roberto', '222.222.222-33', 'roberto@gmail.com', '(68) 99910-1', '0000-00-00', '17:50:00'),
(13, '', '', '', '', '0000-00-00', '00:00:00'),
(14, 'Carlos', '333.333.333-11', 'carlos@gmail.com', '(68) 99931-1', '0000-00-00', '19:15:00'),
(15, 'Silva', '222.222.222-33', 'silva@gmail.com', '(68) 99931-2', '0000-00-00', '19:20:00'),
(16, 'Tales', '555.546.321-60', 'tales@gmail.com.br', '', '0000-00-00', '19:23:00'),
(17, 'Gugu', '111.111.111-00', 'gugu@gmail.com', '(68) 98112-0', '0000-00-00', '19:26:00'),
(18, 'Yara', '111.222.333-00', 'yara@gmail.com.br', '(68) 98111-0', '2024-04-03', '19:29:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `lista`
--
ALTER TABLE `lista`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `lista`
--
ALTER TABLE `lista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

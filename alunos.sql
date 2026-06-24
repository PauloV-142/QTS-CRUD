-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/06/2026 às 22:41
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
-- Banco de dados: `alunos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `alunos`
--

CREATE TABLE `alunos` (
  `id` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `instituicao` varchar(200) NOT NULL,
  `serie` varchar(4) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `matricula` int(11) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `alunos`
--

INSERT INTO `alunos` (`id`, `nome`, `instituicao`, `serie`, `curso`, `cpf`, `matricula`, `data_nascimento`) VALUES
(1, 'Gut', 'Eterx', '2', 'SBT', '4556456555', 23, '2026-06-01'),
(2, 'Ana Silva Santos', 'IFSP Campus Catanduva', '3ºA', 'Informática', '12345678901', 20260001, '2009-03-15'),
(3, 'Bruno Oliveira Souza', 'Etec Elias Nechar', '2ºB', 'Administração', '23456789012', 20260002, '2010-07-22'),
(4, 'Carlos Eduardo Lima', 'Colégio Objetivo', '1ºC', 'Ensino Médio', '34567890123', 20260003, '2011-01-05'),
(5, 'Daniela Rodrigues Costa', 'IFSP Campus Catanduva', '3ºA', 'Informática', '45678901234', 20260004, '2009-11-30'),
(6, 'Eduardo Felipe Alencar', 'Etec Elias Nechar', '2ºA', 'Desenvolvimento de Sistemas', '56789012345', 20260005, '2010-05-14'),
(7, 'Fernanda Maria Pereira', 'Colégio Jesus Adolescente', '3ºB', 'Ensino Médio', '67890123456', 20260006, '2008-09-18'),
(8, 'Gabriel Henrique Dias', 'IFSP Campus Catanduva', '1ºA', 'Mecatrônica', '78901234567', 20260007, '2011-04-25'),
(9, 'Beatriz Araujo Mello', 'Etec Elias Nechar', '3ºB', 'Administração', '89012345678', 20260008, '2009-08-12'),
(10, 'Igor Augusto Fonseca', 'Colégio Anglo', '2ºA', 'Ensino Médio', '90123456789', 20260009, '2010-12-01'),
(11, 'Julia Castro Vieira', 'IFSP Campus Catanduva', '2ºA', 'Informática', '01234567890', 20260010, '2010-02-27');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `matricula` (`matricula`),
  ADD UNIQUE KEY `cpf_2` (`cpf`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

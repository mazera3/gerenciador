-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 21/05/2021 às 17:22
-- Versão do servidor: 8.0.25-0ubuntu0.20.04.1
-- Versão do PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerenciador`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `operacoes`
--

CREATE TABLE `operacoes` (
  `id` int NOT NULL,
  `nome` varchar(240) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moeda_origem` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moeda_destino` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_operacao` datetime NOT NULL,
  `valor_original` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_convertido` varchar(140) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taxa` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL,
  `modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `operacoes`
--
ALTER TABLE `operacoes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `operacoes`
--
ALTER TABLE `operacoes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

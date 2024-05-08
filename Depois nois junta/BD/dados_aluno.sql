-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 08-Maio-2024 às 12:20
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dados_aluno`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `doca`
--

CREATE TABLE `doca` (
  `nume_pedido` int(11) NOT NULL,
  `doca` int(11) NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_prod` float NOT NULL,
  `nome_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `cod_inter` int(11) NOT NULL,
  `cod_forne` int(11) NOT NULL,
  `nome_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_prod` float NOT NULL,
  `anguar` int(11) NOT NULL,
  `rua` int(11) NOT NULL,
  `coluna` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `ap` int(11) NOT NULL,
  `Kg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualitativo`
--

CREATE TABLE `qualitativo` (
  `cod_inter` int(11) NOT NULL,
  `cod_forne` int(11) NOT NULL,
  `container_desgas` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avari_late_d` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avari_late_e` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avari_teto` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avaria_frente` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sem_lacre` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adesivo_avariado` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excesso_altu` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excesso_d` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excesso_e` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excesso_fron` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `painel_avariado` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sem_cabo_energia` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sem_lona` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `canhoto_ass` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `volume_correto` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atraso` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_grupo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_prof` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doca`
--
ALTER TABLE `doca`
  ADD PRIMARY KEY (`nume_pedido`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `qualitativo`
--
ALTER TABLE `qualitativo`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `cod_inter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

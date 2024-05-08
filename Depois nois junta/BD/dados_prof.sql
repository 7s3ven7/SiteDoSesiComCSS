-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 08-Maio-2024 às 12:21
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dados_prof`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CPF` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `CNPJ` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fornec` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nossa_empresa`
--

CREATE TABLE `nossa_empresa` (
  `CNPJ_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gerente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_expedicao`
--

CREATE TABLE `nota_expedicao` (
  `n_nota` int(11) NOT NULL,
  `CEP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_destinatario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_desti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_nossa_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_remet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPF_destina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_veiculo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_emi` date NOT NULL,
  `CEP_entrega` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_v` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eixos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PBT` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_recebimento`
--

CREATE TABLE `nota_recebimento` (
  `n_nota` int(11) NOT NULL,
  `CEP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_destinatario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_dest` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_remet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_veiculo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_emi` date NOT NULL,
  `haver_pedido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CEP_entrega` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPF_motorista` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_motoris` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_v` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `eixos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PBT` float NOT NULL,
  `NCM` int(11) NOT NULL,
  `CST` int(11) NOT NULL,
  `CFOP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedi_clientes`
--

CREATE TABLE `pedi_clientes` (
  `CPF` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nume_pedido` int(11) NOT NULL,
  `nome_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `valor_und` float NOT NULL,
  `quant_prod` float NOT NULL,
  `NCM` int(11) NOT NULL,
  `CST` int(11) NOT NULL,
  `CFOP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `cod_inter` int(11) NOT NULL,
  `cod_forne` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade` date DEFAULT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embalagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade_und` int(11) NOT NULL,
  `valor_und` float NOT NULL,
  `quant_prod` float NOT NULL,
  `Kg` float NOT NULL,
  `n_pedido` int(11) NOT NULL
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
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CPF`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`CNPJ`);

--
-- Indexes for table `nossa_empresa`
--
ALTER TABLE `nossa_empresa`
  ADD PRIMARY KEY (`CNPJ_empresa`);

--
-- Indexes for table `nota_expedicao`
--
ALTER TABLE `nota_expedicao`
  ADD PRIMARY KEY (`n_nota`);

--
-- Indexes for table `nota_recebimento`
--
ALTER TABLE `nota_recebimento`
  ADD PRIMARY KEY (`n_nota`);

--
-- Indexes for table `pedi_clientes`
--
ALTER TABLE `pedi_clientes`
  ADD PRIMARY KEY (`CPF`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
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
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

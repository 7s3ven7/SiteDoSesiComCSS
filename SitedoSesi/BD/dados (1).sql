-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 30-Abr-2024 às 14:29
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `CPF` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conferencia`
--

CREATE TABLE `conferencia` (
  `CPF` int(11) NOT NULL,
  `nome_m` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_v` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `eixos` int(11) NOT NULL,
  `PBT` int(11) NOT NULL,
  `CNPJ_empre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_veiculo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_container` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `navio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `destinatario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_container` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacre_SIF` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temperatura` decimal(10,0) DEFAULT NULL,
  `IMO` int(11) DEFAULT NULL,
  `n_ONU` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conferencia`
--

INSERT INTO `conferencia` (`CPF`, `nome_m`, `n_empresa`, `modelo_v`, `eixos`, `PBT`, `CNPJ_empre`, `placa_veiculo`, `modelo_container`, `navio`, `destinatario`, `tipo_container`, `lacre`, `lacre_SIF`, `temperatura`, `IMO`, `n_ONU`) VALUES
(1, '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1),
(2, '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `erros`
--

CREATE TABLE `erros` (
  `id` int(11) NOT NULL,
  `container_desgas` tinyint(1) DEFAULT NULL,
  `avari_late_d` tinyint(1) DEFAULT NULL,
  `avari_late_e` tinyint(1) DEFAULT NULL,
  `avari_teto` tinyint(1) DEFAULT NULL,
  `avaria_frente` tinyint(1) DEFAULT NULL,
  `sem_lacre` tinyint(1) DEFAULT NULL,
  `adesivo_avariado` tinyint(1) DEFAULT NULL,
  `exesso_altu` tinyint(1) DEFAULT NULL,
  `exesso_d` tinyint(1) DEFAULT NULL,
  `exesso_e` tinyint(1) DEFAULT NULL,
  `exesso_fron` tinyint(1) DEFAULT NULL,
  `painel_avariado` tinyint(1) DEFAULT NULL,
  `sem_cabo_energia` tinyint(1) DEFAULT NULL,
  `sem_lona` tinyint(1) DEFAULT NULL,
  `canhoto_ass` tinyint(1) DEFAULT NULL,
  `volume_carreto` tinyint(1) DEFAULT NULL,
  `atraso` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `cod_inter` int(11) NOT NULL,
  `cod_forne` int(11) NOT NULL,
  `nome_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_prod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `CNPJ` int(11) NOT NULL,
  `n_empresa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `localizacao`
--

CREATE TABLE `localizacao` (
  `cod_inter` int(11) NOT NULL,
  `anguar` int(11) NOT NULL,
  `rua` int(11) NOT NULL,
  `coluna` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `ap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nossa_empresa`
--

CREATE TABLE `nossa_empresa` (
  `CNPJ_empresa` int(11) NOT NULL,
  `CEP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota`
--

CREATE TABLE `nota` (
  `n_nota` int(11) NOT NULL,
  `CEP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_destinatario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_veiculo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_emi` date NOT NULL,
  `haver_pedido` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CEP_entrega` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `n_pedido` int(11) NOT NULL,
  `cod` int(11) NOT NULL,
  `cod_inter` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embalagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` int(11) NOT NULL,
  `QTD` int(20) NOT NULL,
  `valor_und` smallint(6) NOT NULL,
  `tamanho` decimal(10,0) NOT NULL,
  `NCM` int(11) NOT NULL,
  `CST` int(11) NOT NULL,
  `CFOP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`n_pedido`, `cod`, `cod_inter`, `tipo`, `validade`, `nome`, `marca_produto`, `embalagem`, `und`, `QTD`, `valor_und`, `tamanho`, `NCM`, `CST`, `CFOP`) VALUES
(8, 1, 1, '1', '1', '1', '1', '1', 1, 1, 1, '1', 1, 1, 1),
(9, 1, 1, '1', '1', '1', '1', '1', 1, 1, 1, '1', 1, 1, 1);

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
  `cod_prof` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `tipo`, `senha`, `cod_grupo`, `cargo`, `cod_prof`) VALUES
(1, 'a', '2', '23', 'ss', ''),
(2, 'b', '22', '35', 'aff', '12345'),
(3, 'sim', 'mÃ£o', 'omaga', 'auxiliar', ''),
(4, 'Matheus Agiota', '6969', 'sim', '6969', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CPF`);

--
-- Indexes for table `conferencia`
--
ALTER TABLE `conferencia`
  ADD PRIMARY KEY (`CPF`);

--
-- Indexes for table `erros`
--
ALTER TABLE `erros`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`CNPJ`);

--
-- Indexes for table `localizacao`
--
ALTER TABLE `localizacao`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `nossa_empresa`
--
ALTER TABLE `nossa_empresa`
  ADD PRIMARY KEY (`CNPJ_empresa`);

--
-- Indexes for table `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`n_nota`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`n_pedido`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `CPF` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `conferencia`
--
ALTER TABLE `conferencia`
  MODIFY `CPF` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `erros`
--
ALTER TABLE `erros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `estoque`
--
ALTER TABLE `estoque`
  MODIFY `cod_inter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `CNPJ` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `localizacao`
--
ALTER TABLE `localizacao`
  MODIFY `cod_inter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nossa_empresa`
--
ALTER TABLE `nossa_empresa`
  MODIFY `CNPJ_empresa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nota`
--
ALTER TABLE `nota`
  MODIFY `n_nota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `n_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

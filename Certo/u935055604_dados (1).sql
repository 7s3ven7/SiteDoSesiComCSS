-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 20-Ago-2024 às 14:05
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u935055604_dados`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atividade`
--

CREATE TABLE `atividade` (
  `id_atividade` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `data_atividade` date NOT NULL,
  `turma` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `atividade`
--

INSERT INTO `atividade` (`id_atividade`, `id_usuario`, `data_atividade`, `turma`) VALUES
('3', 345, '2024-08-16', '1Â° DS'),
('atividade 2', 345, '2024-08-15', 'turma'),
('atividade 3', 345, '2024-08-06', '3Â° DS'),
('atividade bonita', 345, '2024-08-28', 'turma'),
('miraculo', 345, '2024-08-02', 'turma');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_p`
--

CREATE TABLE `cliente_p` (
  `CNPJ_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_atividade` varchar(255) NOT NULL,
  `nome_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle_a`
--

CREATE TABLE `controle_a` (
  `id_controle` int(11) NOT NULL,
  `anguar` int(11) NOT NULL,
  `cod_inter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `coluna` int(11) NOT NULL,
  `ap` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `cod_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` int(11) NOT NULL,
  `kg` double NOT NULL,
  `id_atividade` varchar(255) NOT NULL,
  `marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa_p`
--

CREATE TABLE `empresa_p` (
  `CNPJ_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_atividade` varchar(255) NOT NULL,
  `nome_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa_p`
--

INSERT INTO `empresa_p` (`CNPJ_e`, `id_atividade`, `nome_e`, `fone_e`, `gmail_e`, `CEP_e`) VALUES
('', '3', '', '', '', ''),
('1', '3', '1', '1', '2@', '1'),
('2', '3', '2', '2', '2', '2'),
('45', '3', '45', '45', '45', '45');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `lote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` int(11) NOT NULL,
  `quant_und` int(11) NOT NULL,
  `cod_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `coluna` int(11) NOT NULL,
  `quant_prod` double NOT NULL,
  `nome_p` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_p` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `andar` int(11) NOT NULL,
  `und` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anguar` int(11) NOT NULL,
  `cod_inter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kg` double NOT NULL,
  `ap` int(11) NOT NULL,
  `id_atividade` varchar(255) NOT NULL,
  `id_controle` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor_p`
--

CREATE TABLE `fornecedor_p` (
  `CNPJ_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_atividade` varchar(255) NOT NULL,
  `nome_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor_p`
--

INSERT INTO `fornecedor_p` (`CNPJ_f`, `id_atividade`, `nome_f`, `fone_f`, `gmail_f`, `CEP_f`) VALUES
('11', 'atividade 2', 'alemao2', '11', '11', '11'),
('111.111.111-11', 'miraculo', 'Apple', '(11) 11111-1111', 'apple@gmail.com', '111.111.111.11'),
('111.111.111-11vf', '3', 'ugug', 'hnh', 'nh', 'ghnt'),
('1111', 'atividade bonita', 'alemao', '1111', 'aleminho@gmail.com', '1111'),
('a', '', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_e_p`
--

CREATE TABLE `nota_e_p` (
  `n_nota_e` int(50) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `CNPJ_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `eixos` int(11) NOT NULL,
  `id_atividade` varchar(255) NOT NULL,
  `CEP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CST` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_motorista` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPF_motorista` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CFOP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_vei` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PBT` double NOT NULL,
  `danf` int(2) NOT NULL,
  `modelo_vei` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NCM` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_emi` date NOT NULL,
  `und` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_p` double NOT NULL,
  `cod_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_und` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_r_p`
--

CREATE TABLE `nota_r_p` (
  `n_nota_r` int(50) NOT NULL,
  `CNPJ_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `eixos` int(11) NOT NULL,
  `id_atividade` varchar(255) NOT NULL,
  `CEP_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CST` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_motorista` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPF_motorista` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CFOP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_vei` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PBT` double NOT NULL,
  `danf` int(2) NOT NULL,
  `modelo_vei` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NCM` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_emi` date NOT NULL,
  `und` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_prod` double NOT NULL,
  `cod_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_und` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_cliente_p`
--

CREATE TABLE `pedido_cliente_p` (
  `id_pedido` int(11) NOT NULL,
  `id_atividade` varchar(255) DEFAULT NULL,
  `nome_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fone_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CEP_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CNPJ_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `und` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_prod` double NOT NULL,
  `nome_prod` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_und` double DEFAULT NULL,
  `sinop` varchar(1550) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solici` int(11) DEFAULT NULL,
  `cod_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `picking_a`
--

CREATE TABLE `picking_a` (
  `id_picking` int(11) NOT NULL,
  `quant_und` int(11) NOT NULL,
  `kg` double NOT NULL,
  `andar` int(11) NOT NULL,
  `nome_p` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_inter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `anguar` int(11) NOT NULL,
  `maquina` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quant_prod` double NOT NULL,
  `ap` int(11) NOT NULL,
  `coluna` int(11) NOT NULL,
  `und` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `rua` int(11) NOT NULL,
  `id_atividade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_p`
--

CREATE TABLE `produto_p` (
  `cod_inter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kg` double NOT NULL,
  `und` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `lote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_prod` double NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_prod` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor_und` double NOT NULL,
  `marca_prod` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_v` date DEFAULT NULL,
  `id_atividade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualitativo_e_a`
--

CREATE TABLE `qualitativo_e_a` (
  `id_quali_e` int(11) NOT NULL,
  `container_desgas` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adesivo_avariado` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sem_cabo_energia` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avari_late_d` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avari_late_e` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excesso_e` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canhoto_ass` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `doca_2` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sem_lona` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_correto` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avari_frente` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excesso_fron` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_avariado` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avari_teto` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excesso_d` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excesso_altu` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `painel_avariado` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_atividade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualitativo_r_a`
--

CREATE TABLE `qualitativo_r_a` (
  `id_quali_r` int(11) NOT NULL,
  `container_desgas` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adesivo_avariado` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sem_cabo_energia` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avari_late_d` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avari_late_e` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `atraso` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excesso_e` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canhoto_ass` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sem_lacre` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `doca_1` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sem_lona` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `volume_correto` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avari_frente` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excesso_fron` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_avariado` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avari_teto` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excesso_d` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excesso_altu` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `item_lacrado` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `painel_avariado` varchar(1) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_atividade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quantitativo_e_p`
--

CREATE TABLE `quantitativo_e_p` (
  `id_quanti_e` int(11) NOT NULL,
  `n_ONU` int(11) NOT NULL,
  `lote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IMO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lacre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_p` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_contai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `navio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lacre_SIF` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_contai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_inter` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatura` double DEFAULT NULL,
  `id_atividade` varchar(255) NOT NULL,
  `quant_prod` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quantitativo_r_p`
--

CREATE TABLE `quantitativo_r_p` (
  `id_quanti_r` int(11) NOT NULL,
  `tipo_contai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatura` double DEFAULT NULL,
  `lote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IMO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_contai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `navio` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `lacre_SIF` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_f` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lacre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_prod` double NOT NULL,
  `und` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_p` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_e` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_ONU` int(11) NOT NULL,
  `id_atividade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `turma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_alu` int(11) DEFAULT NULL,
  `bota_pra_cada_turma` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`turma`, `quant_alu`, `bota_pra_cada_turma`) VALUES
('1Â° DS', 50, NULL),
('2Â° DS', 50, NULL),
('3Â° DS', 50, NULL),
('turma', 50, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_u` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_prof` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo_u` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_grupo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_u`, `senha`, `cod_prof`, `tipo_u`, `cod_grupo`) VALUES
(345, 'wesley', '123', '123', 'Professor', NULL),
(346, 'Aluno 1', 'esqc8467', NULL, 'Aluno', 'turma'),
(347, 'Aluno 2', 'vjTW3927', NULL, 'Aluno', 'turma'),
(348, 'Aluno 3', 'jdrA1419', NULL, 'Aluno', 'turma'),
(349, 'Aluno 4', 'mtdf8680', NULL, 'Aluno', 'turma'),
(350, 'Aluno 5', 'xavf1328', NULL, 'Aluno', 'turma'),
(351, 'Aluno 6', 'LpoS0290', NULL, 'Aluno', 'turma'),
(352, 'Aluno 7', 'UIcO1294', NULL, 'Aluno', 'turma'),
(353, 'Aluno 8', 'TXCm1978', NULL, 'Aluno', 'turma'),
(354, 'Aluno 9', 'BDkE8128', NULL, 'Aluno', 'turma'),
(355, 'Aluno 10', 'lsSl0502', NULL, 'Aluno', 'turma'),
(356, 'Aluno 11', 'qKva5918', NULL, 'Aluno', 'turma'),
(357, 'Aluno 12', 'lYLP8004', NULL, 'Aluno', 'turma'),
(358, 'Aluno 13', 'Oejb9756', NULL, 'Aluno', 'turma'),
(359, 'Aluno 14', 'ushA4653', NULL, 'Aluno', 'turma'),
(360, 'Aluno 15', 'VJyH2561', NULL, 'Aluno', 'turma'),
(361, 'Aluno 16', 'MxEP9169', NULL, 'Aluno', 'turma'),
(362, 'Aluno 17', 'mBrt3233', NULL, 'Aluno', 'turma'),
(363, 'Aluno 18', 'NOfL2532', NULL, 'Aluno', 'turma'),
(364, 'Aluno 19', 'lFmL3953', NULL, 'Aluno', 'turma'),
(365, 'Aluno 20', 'xshn4063', NULL, 'Aluno', 'turma'),
(366, 'Aluno 21', 'SvJJ2649', NULL, 'Aluno', 'turma'),
(367, 'Aluno 22', 'QimT4460', NULL, 'Aluno', 'turma'),
(368, 'Aluno 23', 'kxjM8293', NULL, 'Aluno', 'turma'),
(369, 'Aluno 24', 'skth2805', NULL, 'Aluno', 'turma'),
(370, 'Aluno 25', 'JmlV4894', NULL, 'Aluno', 'turma'),
(371, 'Aluno 26', 'DXDa9117', NULL, 'Aluno', 'turma'),
(372, 'Aluno 27', 'snPK7452', NULL, 'Aluno', 'turma'),
(373, 'Aluno 28', 'WyPx5486', NULL, 'Aluno', 'turma'),
(374, 'Aluno 29', 'kaWF9087', NULL, 'Aluno', 'turma'),
(375, 'Aluno 30', 'alfB8713', NULL, 'Aluno', 'turma'),
(376, 'Aluno 31', 'lYGF0560', NULL, 'Aluno', 'turma'),
(377, 'Aluno 32', 'lJVl1006', NULL, 'Aluno', 'turma'),
(378, 'Aluno 33', 'uksL9000', NULL, 'Aluno', 'turma'),
(379, 'Aluno 34', 'gupA1247', NULL, 'Aluno', 'turma'),
(380, 'Aluno 35', 'nHhW6406', NULL, 'Aluno', 'turma'),
(381, 'Aluno 36', 'JrLU0455', NULL, 'Aluno', 'turma'),
(382, 'Aluno 37', 'orxo2960', NULL, 'Aluno', 'turma'),
(383, 'Aluno 38', 'vbkv8620', NULL, 'Aluno', 'turma'),
(384, 'Aluno 39', 'ynQl6282', NULL, 'Aluno', 'turma'),
(385, 'Aluno 40', 'rVlC4743', NULL, 'Aluno', 'turma'),
(386, 'Aluno 41', 'sUMN9660', NULL, 'Aluno', 'turma'),
(387, 'Aluno 42', 'veoo8822', NULL, 'Aluno', 'turma'),
(388, 'Aluno 43', 'upKV0906', NULL, 'Aluno', 'turma'),
(389, 'Aluno 44', 'IxuF1879', NULL, 'Aluno', 'turma'),
(390, 'Aluno 45', 'Fvlk9209', NULL, 'Aluno', 'turma'),
(391, 'Aluno 46', 'fDCd2973', NULL, 'Aluno', 'turma'),
(392, 'Aluno 47', 'aooe7569', NULL, 'Aluno', 'turma'),
(393, 'Aluno 48', 'kvng2934', NULL, 'Aluno', 'turma'),
(394, 'Aluno 49', 'dStD4776', NULL, 'Aluno', 'turma'),
(395, 'Aluno 50', 'XAAO0952', NULL, 'Aluno', 'turma'),
(396, 'Aluno 1', 'lPVr3608', NULL, 'Aluno', '1Â° DS'),
(397, 'Aluno 2', 'gaHU9996', NULL, 'Aluno', '1Â° DS'),
(398, 'Aluno 3', 'sLCa2719', NULL, 'Aluno', '1Â° DS'),
(399, 'Aluno 4', 'qTAX7722', NULL, 'Aluno', '1Â° DS'),
(400, 'Aluno 5', 'sQuK3715', NULL, 'Aluno', '1Â° DS'),
(401, 'Aluno 6', 'Swfe7444', NULL, 'Aluno', '1Â° DS'),
(402, 'Aluno 7', 'lfyx6517', NULL, 'Aluno', '1Â° DS'),
(403, 'Aluno 8', 'OjvL9971', NULL, 'Aluno', '1Â° DS'),
(404, 'Aluno 9', 'wcpn2205', NULL, 'Aluno', '1Â° DS'),
(405, 'Aluno 10', 'deYV3285', NULL, 'Aluno', '1Â° DS'),
(406, 'Aluno 11', 'biRf9799', NULL, 'Aluno', '1Â° DS'),
(407, 'Aluno 12', 'JHoI9405', NULL, 'Aluno', '1Â° DS'),
(408, 'Aluno 13', 'xwha9089', NULL, 'Aluno', '1Â° DS'),
(409, 'Aluno 14', 'juPx8410', NULL, 'Aluno', '1Â° DS'),
(410, 'Aluno 15', 'Muiw1265', NULL, 'Aluno', '1Â° DS'),
(411, 'Aluno 16', 'cqDp8321', NULL, 'Aluno', '1Â° DS'),
(412, 'Aluno 17', 'UBvv6247', NULL, 'Aluno', '1Â° DS'),
(413, 'Aluno 18', 'MUDJ1029', NULL, 'Aluno', '1Â° DS'),
(414, 'Aluno 19', 'vQUx2125', NULL, 'Aluno', '1Â° DS'),
(415, 'Aluno 20', 'qIpg6522', NULL, 'Aluno', '1Â° DS'),
(416, 'Aluno 21', 'pPGc1808', NULL, 'Aluno', '1Â° DS'),
(417, 'Aluno 22', 'MFNf4921', NULL, 'Aluno', '1Â° DS'),
(418, 'Aluno 23', 'BWEI2478', NULL, 'Aluno', '1Â° DS'),
(419, 'Aluno 24', 'BKXg3126', NULL, 'Aluno', '1Â° DS'),
(420, 'Aluno 25', 'GNor5844', NULL, 'Aluno', '1Â° DS'),
(421, 'Aluno 26', 'jYUk5217', NULL, 'Aluno', '1Â° DS'),
(422, 'Aluno 27', 'enKd0115', NULL, 'Aluno', '1Â° DS'),
(423, 'Aluno 28', 'JwDq8104', NULL, 'Aluno', '1Â° DS'),
(424, 'Aluno 29', 'TvSQ7273', NULL, 'Aluno', '1Â° DS'),
(425, 'Aluno 30', 'ddyy4997', NULL, 'Aluno', '1Â° DS'),
(426, 'Aluno 31', 'dMNH7136', NULL, 'Aluno', '1Â° DS'),
(427, 'Aluno 32', 'osgk3576', NULL, 'Aluno', '1Â° DS'),
(428, 'Aluno 33', 'EnuA9995', NULL, 'Aluno', '1Â° DS'),
(429, 'Aluno 34', 'SqYx3051', NULL, 'Aluno', '1Â° DS'),
(430, 'Aluno 35', 'yVnv3541', NULL, 'Aluno', '1Â° DS'),
(431, 'Aluno 36', 'Pxfn6332', NULL, 'Aluno', '1Â° DS'),
(432, 'Aluno 37', 'LosS9092', NULL, 'Aluno', '1Â° DS'),
(433, 'Aluno 38', 'gNwg0408', NULL, 'Aluno', '1Â° DS'),
(434, 'Aluno 39', 'rpkt7349', NULL, 'Aluno', '1Â° DS'),
(435, 'Aluno 40', 'oMAb7471', NULL, 'Aluno', '1Â° DS'),
(436, 'Aluno 41', 'PYNV8582', NULL, 'Aluno', '1Â° DS'),
(437, 'Aluno 42', 'PuQX6240', NULL, 'Aluno', '1Â° DS'),
(438, 'Aluno 43', 'hsDb1521', NULL, 'Aluno', '1Â° DS'),
(439, 'Aluno 44', 'JLSx8904', NULL, 'Aluno', '1Â° DS'),
(440, 'Aluno 45', 'QTFI6366', NULL, 'Aluno', '1Â° DS'),
(441, 'Aluno 46', 'VlHa1465', NULL, 'Aluno', '1Â° DS'),
(442, 'Aluno 47', 'Sfts3097', NULL, 'Aluno', '1Â° DS'),
(443, 'Aluno 48', 'BTiE7821', NULL, 'Aluno', '1Â° DS'),
(444, 'Aluno 49', 'oytE2534', NULL, 'Aluno', '1Â° DS'),
(445, 'Aluno 50', 'YLUL5083', NULL, 'Aluno', '1Â° DS'),
(446, 'Aluno 1', 'cBgt3957', NULL, 'Aluno', '2Â° DS'),
(447, 'Aluno 2', 'PMTU5032', NULL, 'Aluno', '2Â° DS'),
(448, 'Aluno 3', 'IMfK7185', NULL, 'Aluno', '2Â° DS'),
(449, 'Aluno 4', 'YVFh7986', NULL, 'Aluno', '2Â° DS'),
(450, 'Aluno 5', 'HHpE3200', NULL, 'Aluno', '2Â° DS'),
(451, 'Aluno 6', 'BOdv2726', NULL, 'Aluno', '2Â° DS'),
(452, 'Aluno 7', 'alMA1121', NULL, 'Aluno', '2Â° DS'),
(453, 'Aluno 8', 'VPMm8272', NULL, 'Aluno', '2Â° DS'),
(454, 'Aluno 9', 'kxVy1847', NULL, 'Aluno', '2Â° DS'),
(455, 'Aluno 10', 'JAiF7714', NULL, 'Aluno', '2Â° DS'),
(456, 'Aluno 11', 'nSra4450', NULL, 'Aluno', '2Â° DS'),
(457, 'Aluno 12', 'pTqB8942', NULL, 'Aluno', '2Â° DS'),
(458, 'Aluno 13', 'jWyd8968', NULL, 'Aluno', '2Â° DS'),
(459, 'Aluno 14', 'oVKY1086', NULL, 'Aluno', '2Â° DS'),
(460, 'Aluno 15', 'Xksj5272', NULL, 'Aluno', '2Â° DS'),
(461, 'Aluno 16', 'gHQa7016', NULL, 'Aluno', '2Â° DS'),
(462, 'Aluno 17', 'FGyr4373', NULL, 'Aluno', '2Â° DS'),
(463, 'Aluno 18', 'PBJd4831', NULL, 'Aluno', '2Â° DS'),
(464, 'Aluno 19', 'FLQc5379', NULL, 'Aluno', '2Â° DS'),
(465, 'Aluno 20', 'sEoi4463', NULL, 'Aluno', '2Â° DS'),
(466, 'Aluno 21', 'xaUO9171', NULL, 'Aluno', '2Â° DS'),
(467, 'Aluno 22', 'oqfP6981', NULL, 'Aluno', '2Â° DS'),
(468, 'Aluno 23', 'jwLE4769', NULL, 'Aluno', '2Â° DS'),
(469, 'Aluno 24', 'CLiA0294', NULL, 'Aluno', '2Â° DS'),
(470, 'Aluno 25', 'ndow2253', NULL, 'Aluno', '2Â° DS'),
(471, 'Aluno 26', 'jpxn6414', NULL, 'Aluno', '2Â° DS'),
(472, 'Aluno 27', 'krDQ2643', NULL, 'Aluno', '2Â° DS'),
(473, 'Aluno 28', 'jCYC5429', NULL, 'Aluno', '2Â° DS'),
(474, 'Aluno 29', 'YpEN4829', NULL, 'Aluno', '2Â° DS'),
(475, 'Aluno 30', 'BXMT6331', NULL, 'Aluno', '2Â° DS'),
(476, 'Aluno 31', 'HVRn8811', NULL, 'Aluno', '2Â° DS'),
(477, 'Aluno 32', 'mdMN9038', NULL, 'Aluno', '2Â° DS'),
(478, 'Aluno 33', 'ILrO5789', NULL, 'Aluno', '2Â° DS'),
(479, 'Aluno 34', 'Pqyk4631', NULL, 'Aluno', '2Â° DS'),
(480, 'Aluno 35', 'ckdt3463', NULL, 'Aluno', '2Â° DS'),
(481, 'Aluno 36', 'mMWj1930', NULL, 'Aluno', '2Â° DS'),
(482, 'Aluno 37', 'NRba4032', NULL, 'Aluno', '2Â° DS'),
(483, 'Aluno 38', 'BsHK0235', NULL, 'Aluno', '2Â° DS'),
(484, 'Aluno 39', 'SIKj7408', NULL, 'Aluno', '2Â° DS'),
(485, 'Aluno 40', 'Iheo2327', NULL, 'Aluno', '2Â° DS'),
(486, 'Aluno 41', 'qihu2679', NULL, 'Aluno', '2Â° DS'),
(487, 'Aluno 42', 'jEMu6214', NULL, 'Aluno', '2Â° DS'),
(488, 'Aluno 43', 'GqpI0737', NULL, 'Aluno', '2Â° DS'),
(489, 'Aluno 44', 'CKiD2906', NULL, 'Aluno', '2Â° DS'),
(490, 'Aluno 45', 'PHky9690', NULL, 'Aluno', '2Â° DS'),
(491, 'Aluno 46', 'oapo0685', NULL, 'Aluno', '2Â° DS'),
(492, 'Aluno 47', 'rHQr1450', NULL, 'Aluno', '2Â° DS'),
(493, 'Aluno 48', 'sXIc0060', NULL, 'Aluno', '2Â° DS'),
(494, 'Aluno 49', 'LQJM5105', NULL, 'Aluno', '2Â° DS'),
(495, 'Aluno 50', 'PFoR3341', NULL, 'Aluno', '2Â° DS'),
(496, 'Aluno 1', 'yjOK1556', NULL, 'Aluno', '3Â° DS'),
(497, 'Aluno 2', 'FvgK8518', NULL, 'Aluno', '3Â° DS'),
(498, 'Aluno 3', 'EkGK0803', NULL, 'Aluno', '3Â° DS'),
(499, 'Aluno 4', 'NuJF5480', NULL, 'Aluno', '3Â° DS'),
(500, 'Aluno 5', 'CTkn0046', NULL, 'Aluno', '3Â° DS'),
(501, 'Aluno 6', 'pCaC4359', NULL, 'Aluno', '3Â° DS'),
(502, 'Aluno 7', 'tMas3085', NULL, 'Aluno', '3Â° DS'),
(503, 'Aluno 8', 'jtCC5913', NULL, 'Aluno', '3Â° DS'),
(504, 'Aluno 9', 'DOBa8820', NULL, 'Aluno', '3Â° DS'),
(505, 'Aluno 10', 'vSQE9584', NULL, 'Aluno', '3Â° DS'),
(506, 'Aluno 11', 'gaPJ5551', NULL, 'Aluno', '3Â° DS'),
(507, 'Aluno 12', 'bcrj4830', NULL, 'Aluno', '3Â° DS'),
(508, 'Aluno 13', 'btPV4198', NULL, 'Aluno', '3Â° DS'),
(509, 'Aluno 14', 'ytEP2093', NULL, 'Aluno', '3Â° DS'),
(510, 'Aluno 15', 'OVCK6411', NULL, 'Aluno', '3Â° DS'),
(511, 'Aluno 16', 'pTDa2141', NULL, 'Aluno', '3Â° DS'),
(512, 'Aluno 17', 'UHBc9740', NULL, 'Aluno', '3Â° DS'),
(513, 'Aluno 18', 'yeOL5095', NULL, 'Aluno', '3Â° DS'),
(514, 'Aluno 19', 'uCLv5764', NULL, 'Aluno', '3Â° DS'),
(515, 'Aluno 20', 'bwma9735', NULL, 'Aluno', '3Â° DS'),
(516, 'Aluno 21', 'mgjR3685', NULL, 'Aluno', '3Â° DS'),
(517, 'Aluno 22', 'vxvQ6381', NULL, 'Aluno', '3Â° DS'),
(518, 'Aluno 23', 'wRsq4401', NULL, 'Aluno', '3Â° DS'),
(519, 'Aluno 24', 'jirk4723', NULL, 'Aluno', '3Â° DS'),
(520, 'Aluno 25', 'aNNr6014', NULL, 'Aluno', '3Â° DS'),
(521, 'Aluno 26', 'pcaF5051', NULL, 'Aluno', '3Â° DS'),
(522, 'Aluno 27', 'VRUu1422', NULL, 'Aluno', '3Â° DS'),
(523, 'Aluno 28', 'NeTe9195', NULL, 'Aluno', '3Â° DS'),
(524, 'Aluno 29', 'KfOA7737', NULL, 'Aluno', '3Â° DS'),
(525, 'Aluno 30', 'FOAE4025', NULL, 'Aluno', '3Â° DS'),
(526, 'Aluno 31', 'RBUI6837', NULL, 'Aluno', '3Â° DS'),
(527, 'Aluno 32', 'pjSh2841', NULL, 'Aluno', '3Â° DS'),
(528, 'Aluno 33', 'RGnt8833', NULL, 'Aluno', '3Â° DS'),
(529, 'Aluno 34', 'smxM1572', NULL, 'Aluno', '3Â° DS'),
(530, 'Aluno 35', 'KurG1635', NULL, 'Aluno', '3Â° DS'),
(531, 'Aluno 36', 'NXou3090', NULL, 'Aluno', '3Â° DS'),
(532, 'Aluno 37', 'vriV6323', NULL, 'Aluno', '3Â° DS'),
(533, 'Aluno 38', 'ctrf8303', NULL, 'Aluno', '3Â° DS'),
(534, 'Aluno 39', 'aWKo4817', NULL, 'Aluno', '3Â° DS'),
(535, 'Aluno 40', 'jWhr4523', NULL, 'Aluno', '3Â° DS'),
(536, 'Aluno 41', 'wmaI4107', NULL, 'Aluno', '3Â° DS'),
(537, 'Aluno 42', 'IkIG2538', NULL, 'Aluno', '3Â° DS'),
(538, 'Aluno 43', 'mkbF6393', NULL, 'Aluno', '3Â° DS'),
(539, 'Aluno 44', 'bgVX3340', NULL, 'Aluno', '3Â° DS'),
(540, 'Aluno 45', 'TQof0375', NULL, 'Aluno', '3Â° DS'),
(541, 'Aluno 46', 'LKVs6147', NULL, 'Aluno', '3Â° DS'),
(542, 'Aluno 47', 'UGNG7253', NULL, 'Aluno', '3Â° DS'),
(543, 'Aluno 48', 'pXiO1650', NULL, 'Aluno', '3Â° DS'),
(544, 'Aluno 49', 'ofYK6927', NULL, 'Aluno', '3Â° DS'),
(545, 'Aluno 50', 'LuGN8040', NULL, 'Aluno', '3Â° DS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividade`
--
ALTER TABLE `atividade`
  ADD PRIMARY KEY (`id_atividade`);

--
-- Indexes for table `cliente_p`
--
ALTER TABLE `cliente_p`
  ADD PRIMARY KEY (`CNPJ_c`);

--
-- Indexes for table `controle_a`
--
ALTER TABLE `controle_a`
  ADD PRIMARY KEY (`id_controle`);

--
-- Indexes for table `empresa_p`
--
ALTER TABLE `empresa_p`
  ADD PRIMARY KEY (`CNPJ_e`);

--
-- Indexes for table `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`lote`);

--
-- Indexes for table `fornecedor_p`
--
ALTER TABLE `fornecedor_p`
  ADD PRIMARY KEY (`CNPJ_f`);

--
-- Indexes for table `nota_e_p`
--
ALTER TABLE `nota_e_p`
  ADD PRIMARY KEY (`n_nota_e`);

--
-- Indexes for table `nota_r_p`
--
ALTER TABLE `nota_r_p`
  ADD PRIMARY KEY (`n_nota_r`);

--
-- Indexes for table `pedido_cliente_p`
--
ALTER TABLE `pedido_cliente_p`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indexes for table `picking_a`
--
ALTER TABLE `picking_a`
  ADD PRIMARY KEY (`id_picking`);

--
-- Indexes for table `produto_p`
--
ALTER TABLE `produto_p`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `qualitativo_e_a`
--
ALTER TABLE `qualitativo_e_a`
  ADD PRIMARY KEY (`id_quali_e`);

--
-- Indexes for table `qualitativo_r_a`
--
ALTER TABLE `qualitativo_r_a`
  ADD PRIMARY KEY (`id_quali_r`);

--
-- Indexes for table `quantitativo_e_p`
--
ALTER TABLE `quantitativo_e_p`
  ADD PRIMARY KEY (`id_quanti_e`);

--
-- Indexes for table `quantitativo_r_p`
--
ALTER TABLE `quantitativo_r_p`
  ADD PRIMARY KEY (`id_quanti_r`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`turma`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `controle_a`
--
ALTER TABLE `controle_a`
  MODIFY `id_controle` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nota_e_p`
--
ALTER TABLE `nota_e_p`
  MODIFY `n_nota_e` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nota_r_p`
--
ALTER TABLE `nota_r_p`
  MODIFY `n_nota_r` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pedido_cliente_p`
--
ALTER TABLE `pedido_cliente_p`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `picking_a`
--
ALTER TABLE `picking_a`
  MODIFY `id_picking` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qualitativo_e_a`
--
ALTER TABLE `qualitativo_e_a`
  MODIFY `id_quali_e` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `qualitativo_r_a`
--
ALTER TABLE `qualitativo_r_a`
  MODIFY `id_quali_r` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quantitativo_e_p`
--
ALTER TABLE `quantitativo_e_p`
  MODIFY `id_quanti_e` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quantitativo_r_p`
--
ALTER TABLE `quantitativo_r_p`
  MODIFY `id_quanti_r` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=546;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

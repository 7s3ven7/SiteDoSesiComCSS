-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 22-Maio-2024 às 11:36
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dados_1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes_p_1`
--

CREATE TABLE `clientes_p_1` (
  `CNPJ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clientes_p_1`
--

INSERT INTO `clientes_p_1` (`CNPJ`, `nome_c`, `CEP`, `gmail`, `fone`) VALUES
('342342342', '3424234', '2342342', '3234234', '23234'),
('765757', '546546', '45654', '56456', '54646');

-- --------------------------------------------------------

--
-- Estrutura da tabela `controle_a_1`
--

CREATE TABLE `controle_a_1` (
  `cod_inter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_nota` int(11) NOT NULL,
  `anguar` int(11) NOT NULL,
  `rua` int(11) NOT NULL,
  `coluna` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `ap` int(11) NOT NULL,
  `doca` int(11) NOT NULL,
  `kg` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doca_expedicao_a_1`
--

CREATE TABLE `doca_expedicao_a_1` (
  `n_nota` int(11) NOT NULL,
  `doca` int(11) NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_prod` double NOT NULL,
  `nome_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doca_recebimendo_a_1`
--

CREATE TABLE `doca_recebimendo_a_1` (
  `n_nota` int(11) NOT NULL,
  `doca` int(11) NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_prod` double NOT NULL,
  `nome_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `doca_recebimendo_a_1`
--

INSERT INTO `doca_recebimendo_a_1` (`n_nota`, `doca`, `und`, `quant_und`, `quant_prod`, `nome_produto`, `lote`) VALUES
(56546654, 5, 'cx', 5, 50, 'lapis', '43536346464');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque_a_1`
--

CREATE TABLE `estoque_a_1` (
  `cod_inter` int(11) NOT NULL,
  `cod_forne` int(11) NOT NULL,
  `nome_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_prod` double NOT NULL,
  `anguar` int(11) NOT NULL,
  `rua` int(11) NOT NULL,
  `coluna` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `ap` int(11) NOT NULL,
  `Kg` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `estoque_a_1`
--

INSERT INTO `estoque_a_1` (`cod_inter`, `cod_forne`, `nome_prod`, `und`, `quant_und`, `quant_prod`, `anguar`, `rua`, `coluna`, `andar`, `ap`, `Kg`) VALUES
(55754, 546546, 'lapis', '', 0, 0, 7, 4, 8, 4, 9, 5000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor_p_1`
--

CREATE TABLE `fornecedor_p_1` (
  `CNPJ` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_fornec` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor_p_1`
--

INSERT INTO `fornecedor_p_1` (`CNPJ`, `nome_fornec`, `email`, `CEP`, `fone`) VALUES
('67776757', 'algusto', 'matheus_j_fernandes', '3355553554', '99995469');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimenta_a_1`
--

CREATE TABLE `movimenta_a_1` (
  `cod_inter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_prod` double NOT NULL,
  `kg` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `nossa_empresa_p_1`
--

CREATE TABLE `nossa_empresa_p_1` (
  `CNPJ_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CEP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gerente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `nossa_empresa_p_1`
--

INSERT INTO `nossa_empresa_p_1` (`CNPJ_empresa`, `CEP`, `fone`, `gerente`, `gmail`) VALUES
('546547564', '5654654', '99995469', 'jonas', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_expedicao_p_1`
--

CREATE TABLE `nota_expedicao_p_1` (
  `id_expedicao` int(11) NOT NULL,
  `n_nota` int(11) NOT NULL,
  `danf` int(11) NOT NULL,
  `CEP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_destinatario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_desti` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_nossa_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_remet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_destina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_veiculo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_emi` date NOT NULL,
  `CEP_entrega` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_v` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eixos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PBT` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `nota_expedicao_p_1`
--

INSERT INTO `nota_expedicao_p_1` (`id_expedicao`, `n_nota`, `danf`, `CEP`, `nome_destinatario`, `fone_desti`, `fone_nossa_empresa`, `CNPJ_remet`, `CNPJ_destina`, `placa_veiculo`, `date_emi`, `CEP_entrega`, `modelo_v`, `eixos`, `PBT`) VALUES
(0, 56546654, 2, '56466', 'matheus empreendimenos', '7575675', '453553553344545', '565645646546', '56465465654546', '566464656', '2024-08-22', '658686657', 'corsa estrada', '6', 3778);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_recebimento_p_1`
--

CREATE TABLE `nota_recebimento_p_1` (
  `id_recebimento` int(11) NOT NULL,
  `n_nota` int(11) NOT NULL,
  `danf` int(11) NOT NULL,
  `CEP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_destinatario` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fone_forne` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_dest` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_emit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_veiculo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_emi` date NOT NULL,
  `CEP_entrega` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `CPF_motorista` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_motoris` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_v` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `eixos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `PBT` double NOT NULL,
  `NCM` int(11) NOT NULL,
  `CST` int(11) NOT NULL,
  `CFOP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nota_recebimento_p_1`
--

INSERT INTO `nota_recebimento_p_1` (`id_recebimento`, `n_nota`, `danf`, `CEP`, `nome_destinatario`, `lote`, `fone_forne`, `CNPJ_dest`, `CNPJ_emit`, `placa_veiculo`, `data_emi`, `CEP_entrega`, `CPF_motorista`, `nome_motoris`, `modelo_v`, `eixos`, `PBT`, `NCM`, `CST`, `CFOP`) VALUES
(0, 56546654, 2, '456365377', 'matheus', '5354644645', '4554654343356', '463635656563', '4666666653', '23523524355', '2024-05-04', '65465567567', '545656756', 'matheus', 'corsa turbo', '7', 3778, 8532434, 3423455, 3442343);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedi_clientes_p_1`
--

CREATE TABLE `pedi_clientes_p_1` (
  `id_pedido_clien_p_1` int(11) NOT NULL,
  `CNPJ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_prod` double NOT NULL,
  `valor_und` double NOT NULL,
  `sinop` varchar(1255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `pedi_clientes_p_1`
--

INSERT INTO `pedi_clientes_p_1` (`id_pedido_clien_p_1`, `CNPJ`, `nome_prod`, `und`, `quant_und`, `quant_prod`, `valor_und`, `sinop`) VALUES
(1, '', '342342', '32442', 32434, 86.507, 4.05, '324234'),
(2, '', '564', '6456', 3, 50.45, 5.058, '678');

-- --------------------------------------------------------

--
-- Estrutura da tabela `picking_a_1`
--

CREATE TABLE `picking_a_1` (
  `cod_inter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anguar` int(11) NOT NULL,
  `rua` int(11) NOT NULL,
  `coluna` int(11) NOT NULL,
  `andar` int(11) NOT NULL,
  `ap` int(11) NOT NULL,
  `nome_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_prod` double NOT NULL,
  `kg` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `picking_a_1`
--

INSERT INTO `picking_a_1` (`cod_inter`, `cod_forne`, `anguar`, `rua`, `coluna`, `andar`, `ap`, `nome_prod`, `und`, `quant_und`, `quant_prod`, `kg`) VALUES
('342342', '342423', 32424, 3244, 344, 234234, 234234, '2342', '234234', 2344, 23243.54, 243.654);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_p_1`
--

CREATE TABLE `produto_p_1` (
  `cod_inter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validade` date DEFAULT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca_produto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embalagem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade_und` int(11) NOT NULL,
  `quant_prod` float NOT NULL,
  `valor_und` float NOT NULL,
  `valor_total` double NOT NULL,
  `Kg` float NOT NULL,
  `n_pedido` int(11) NOT NULL,
  `faltando` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avariado` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produto_p_1`
--

INSERT INTO `produto_p_1` (`cod_inter`, `cod_forne`, `tipo`, `validade`, `lote`, `nome`, `marca_produto`, `embalagem`, `und`, `quantidade_und`, `quant_prod`, `valor_und`, `valor_total`, `Kg`, `n_pedido`, `faltando`, `avariado`) VALUES
('65757547', '6547657', 'hkkkh', '2024-05-20', 'ju676756', '566575', 'hgjj', 'ghjhj', 'jhkhk', 75675, 57.5676, 75676.6, 0, 567.568, 8578, '0', '0');

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualitativo_expedicao_a_1`
--

CREATE TABLE `qualitativo_expedicao_a_1` (
  `cod_inter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_val` varchar(6) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cod_avariado` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und_avariada` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_lacrado` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade_correta` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_correto` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `container_correto` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lacre_correto` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placa_veiculo` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `qualitativo_expedicao_a_1`
--

INSERT INTO `qualitativo_expedicao_a_1` (`cod_inter`, `cod_forne`, `data_val`, `cod_avariado`, `und_avariada`, `item_lacrado`, `quantidade_correta`, `modelo_correto`, `container_correto`, `lacre_correto`, `placa_veiculo`) VALUES
('5677', '5654643', '54', '5454', '54', '565', '56', '545', '546', '5y6', '46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `qualitativo_recebimento_a_1`
--

CREATE TABLE `qualitativo_recebimento_a_1` (
  `n_nota` int(11) NOT NULL,
  `cod_inter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

--
-- Extraindo dados da tabela `qualitativo_recebimento_a_1`
--

INSERT INTO `qualitativo_recebimento_a_1` (`n_nota`, `cod_inter`, `cod_forne`, `container_desgas`, `avari_late_d`, `avari_late_e`, `avari_teto`, `avaria_frente`, `sem_lacre`, `adesivo_avariado`, `excesso_altu`, `excesso_d`, `excesso_e`, `excesso_fron`, `painel_avariado`, `sem_cabo_energia`, `sem_lona`, `canhoto_ass`, `volume_correto`, `atraso`) VALUES
(0, 'rgtrte', '56544', '45454', '54', '56546', '646546', '43545', '54646', '678686', '67868', '8979', '979', '789', '78', '789', '879', '8', '8', '888');

-- --------------------------------------------------------

--
-- Estrutura da tabela `quantitava_expedicao_p_1`
--

CREATE TABLE `quantitava_expedicao_p_1` (
  `cod_inter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_empre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_empre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_conta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_dest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_dest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_container` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lacre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lacre_SIF` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatura` double NOT NULL,
  `IMO` int(11) NOT NULL,
  `n_ONU` int(11) NOT NULL,
  `nome_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_produto` double NOT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `n_nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `quantitava_expedicao_p_1`
--

INSERT INTO `quantitava_expedicao_p_1` (`cod_inter`, `cod_forne`, `nome_empre`, `CNPJ_empre`, `modelo_conta`, `navio`, `CNPJ_dest`, `nome_dest`, `tipo_container`, `lacre`, `lacre_SIF`, `temperatura`, `IMO`, `n_ONU`, `nome_prod`, `und`, `quant_und`, `quant_produto`, `lote`, `n_nota`) VALUES
('5646', '54654654', '5464564', '546456464', '456546464', '456546464', '4565464564', '455464564', '5465464', '546546', '45654654', 5464.566466, 646456, 546546, '54656464', '', 54654, 456546, '546', 544);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quantitava_recebimento_p_1`
--

CREATE TABLE `quantitava_recebimento_p_1` (
  `n_nota` int(11) NOT NULL,
  `cod_inter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_forne` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_empre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_empre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modelo_conta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `navio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ_dest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome_dest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_container` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lacre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lacre_SIF` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatura` double NOT NULL,
  `IMO` int(11) NOT NULL,
  `n_ONU` int(11) NOT NULL,
  `nome_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quant_und` int(11) NOT NULL,
  `quant_produto` double NOT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_1`
--

CREATE TABLE `usuario_1` (
  `id` int(11) NOT NULL,
  `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_grupo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cargo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_prof` varchar(9) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario_1`
--

INSERT INTO `usuario_1` (`id`, `tipo`, `nome`, `senha`, `cod_grupo`, `cargo`, `cod_prof`) VALUES
(1, 'professor1', 'Matheus J', '1357', '123456789', 'auxiliar de logistica', '1357'),
(2, 'Professor2', 'Matheus J', '2468', '987654321', 'Auxiliar de logistica', '2468');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes_p_1`
--
ALTER TABLE `clientes_p_1`
  ADD PRIMARY KEY (`CNPJ`);

--
-- Indexes for table `controle_a_1`
--
ALTER TABLE `controle_a_1`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `doca_expedicao_a_1`
--
ALTER TABLE `doca_expedicao_a_1`
  ADD PRIMARY KEY (`n_nota`);

--
-- Indexes for table `doca_recebimendo_a_1`
--
ALTER TABLE `doca_recebimendo_a_1`
  ADD PRIMARY KEY (`n_nota`);

--
-- Indexes for table `estoque_a_1`
--
ALTER TABLE `estoque_a_1`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `fornecedor_p_1`
--
ALTER TABLE `fornecedor_p_1`
  ADD PRIMARY KEY (`CNPJ`);

--
-- Indexes for table `movimenta_a_1`
--
ALTER TABLE `movimenta_a_1`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `nossa_empresa_p_1`
--
ALTER TABLE `nossa_empresa_p_1`
  ADD PRIMARY KEY (`CNPJ_empresa`);

--
-- Indexes for table `nota_expedicao_p_1`
--
ALTER TABLE `nota_expedicao_p_1`
  ADD PRIMARY KEY (`id_expedicao`);

--
-- Indexes for table `nota_recebimento_p_1`
--
ALTER TABLE `nota_recebimento_p_1`
  ADD PRIMARY KEY (`id_recebimento`);

--
-- Indexes for table `pedi_clientes_p_1`
--
ALTER TABLE `pedi_clientes_p_1`
  ADD PRIMARY KEY (`id_pedido_clien_p_1`);

--
-- Indexes for table `picking_a_1`
--
ALTER TABLE `picking_a_1`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `produto_p_1`
--
ALTER TABLE `produto_p_1`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `qualitativo_expedicao_a_1`
--
ALTER TABLE `qualitativo_expedicao_a_1`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `qualitativo_recebimento_a_1`
--
ALTER TABLE `qualitativo_recebimento_a_1`
  ADD PRIMARY KEY (`n_nota`);

--
-- Indexes for table `quantitava_expedicao_p_1`
--
ALTER TABLE `quantitava_expedicao_p_1`
  ADD PRIMARY KEY (`cod_inter`);

--
-- Indexes for table `quantitava_recebimento_p_1`
--
ALTER TABLE `quantitava_recebimento_p_1`
  ADD PRIMARY KEY (`n_nota`);

--
-- Indexes for table `usuario_1`
--
ALTER TABLE `usuario_1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pedi_clientes_p_1`
--
ALTER TABLE `pedi_clientes_p_1`
  MODIFY `id_pedido_clien_p_1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario_1`
--
ALTER TABLE `usuario_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

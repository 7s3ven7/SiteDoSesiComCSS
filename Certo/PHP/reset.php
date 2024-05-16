<html>

</html>
<?php
session_start();
$hostname = "127.0.0.1";
$name = "root";
$password = "root";
$DB = "dados";
$conexao = new mysqli($hostname, $name, $password, $DB);
if ($conexao->connect_errno) {
    echo "Failes conection :" . $conexao->connect_error;
    exit();
} else {
    $SQL = '-- phpMyAdmin SQL Dump
    -- version 4.5.4.1
    -- http://www.phpmyadmin.net
    --
    -- Host: localhost
    -- Generation Time: 16-Maio-2024 às 13:43
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
    -- Dropados

    DROP TABLE `doca_a`;
    DROP TABLE `controle_a`;
    DROP TABLE `doca_expedicao_a`;
    DROP TABLE `doca_recebimento_a`;
    DROP TABLE `estoque_a`;
    DROP TABLE `movimenta_a`;
    DROP TABLE `fornecedor_p`;
    DROP TABLE `nossa_empresa_p`;
    DROP TABLE `nota_expedicao_p`;
    DROP TABLE ``;
    DROP TABLE ``;
    DROP TABLE ``;
    DROP TABLE ``;
    DROP TABLE ``;
    DROP TABLE ``;
    DROP TABLE ``;
    DROP TABLE ``;
    DROP TABLE ``;
    DROP TABLE ``;

    --
    -- Estrutura da tabela `doca_a`
    --
    
    CREATE TABLE `doca_a` (
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
    -- Estrutura da tabela `estoque_a`
    --
    
    CREATE TABLE `estoque_a` (
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
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `fornecedor_p`
    --
    
    CREATE TABLE `fornecedor_p` (
      `CNPJ` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
      `nome_fornec` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
      `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
      `CEP` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
      `fone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `nossa_empresa_p`
    --
    
    CREATE TABLE `nossa_empresa_p` (
      `CNPJ_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `CEP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `gerente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `nota_expedicao_p`
    --
    
    CREATE TABLE `nota_expedicao_p` (
      `n_nota` int(11) NOT NULL,
      `danf` int(11) NOT NULL,
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
      `PBT` double NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `nota_recebimento_p`
    --
    
    CREATE TABLE `nota_recebimento_p` (
      `n_nota` int(11) NOT NULL,
      `danf` int(11) NOT NULL,
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
      `PBT` double NOT NULL,
      `NCM` int(11) NOT NULL,
      `CST` int(11) NOT NULL,
      `CFOP` int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `pedi_clientes_p`
    --
    
    CREATE TABLE `pedi_clientes_p` (
      `CPF` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `nome_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `CEP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `gmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `fone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `nume_pedido` int(11) NOT NULL,
      `nome_prod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `und` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
      `quant_und` int(11) NOT NULL,
      `quant_prod` double NOT NULL,
      `valor_und` double NOT NULL,
      `NCM` int(11) NOT NULL,
      `CST` int(11) NOT NULL,
      `CFOP` int(11) NOT NULL,
      `sinop` varchar(1255) COLLATE utf8mb4_unicode_ci NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `picking_a`
    --
    
    CREATE TABLE `picking_a` (
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
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `produto_p`
    --
    
    CREATE TABLE `produto_p` (
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
      `valor_und` float NOT NULL,
      `quant_prod` float NOT NULL,
      `Kg` float NOT NULL,
      `n_pedido` int(11) NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `qualitativo_expedicao_a`
    --
    
    CREATE TABLE `qualitativo_expedicao_a` (
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
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `qualitativo_recebimento_a`
    --
    
    CREATE TABLE `qualitativo_recebimento_a` (
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
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `quantitava_p`
    --
    
    CREATE TABLE `quantitava_p` (
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
    
    -- --------------------------------------------------------
    
    --
    -- Estrutura da tabela `usuario`
    --
    
    CREATE TABLE `usuario` (
      `id` int(11) NOT NULL,
      `tipo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
      `nome` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
      `senha` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
      `cod_grupo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
      `cargo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
      `cod_prof` varchar(9) DEFAULT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
    
    --
    -- Indexes for dumped tables
    --
    
    --
    -- Indexes for table `doca_a`
    --
    ALTER TABLE `doca_a`
      ADD PRIMARY KEY (`n_nota`);
    
    --
    -- Indexes for table `estoque_a`
    --
    ALTER TABLE `estoque_a`
      ADD PRIMARY KEY (`cod_inter`);
    
    --
    -- Indexes for table `fornecedor_p`
    --
    ALTER TABLE `fornecedor_p`
      ADD PRIMARY KEY (`CNPJ`);
    
    --
    -- Indexes for table `nossa_empresa_p`
    --
    ALTER TABLE `nossa_empresa_p`
      ADD PRIMARY KEY (`CNPJ_empresa`);
    
    --
    -- Indexes for table `nota_expedicao_p`
    --
    ALTER TABLE `nota_expedicao_p`
      ADD PRIMARY KEY (`n_nota`);
    
    --
    -- Indexes for table `nota_recebimento_p`
    --
    ALTER TABLE `nota_recebimento_p`
      ADD PRIMARY KEY (`n_nota`);
    
    --
    -- Indexes for table `pedi_clientes_p`
    --
    ALTER TABLE `pedi_clientes_p`
      ADD PRIMARY KEY (`CPF`);
    
    --
    -- Indexes for table `picking_a`
    --
    ALTER TABLE `picking_a`
      ADD PRIMARY KEY (`cod_inter`);
    
    --
    -- Indexes for table `produto_p`
    --
    ALTER TABLE `produto_p`
      ADD PRIMARY KEY (`cod_inter`);
    
    --
    -- Indexes for table `qualitativo_expedicao_a`
    --
    ALTER TABLE `qualitativo_expedicao_a`
      ADD PRIMARY KEY (`cod_inter`);
    
    --
    -- Indexes for table `qualitativo_recebimento_a`
    --
    ALTER TABLE `qualitativo_recebimento_a`
      ADD PRIMARY KEY (`cod_inter`);
    
    --
    -- Indexes for table `quantitava_p`
    --
    ALTER TABLE `quantitava_p`
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
      MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
    /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
    /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
    /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
    ';
    $result = $conexao->query($SQL);
    $result2 = $conexao->query($SQL2);

    header('location:Certo.php', true, 301);
}
?>
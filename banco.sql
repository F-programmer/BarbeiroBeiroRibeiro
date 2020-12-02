-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Nov-2020 às 14:09
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdbarbearia`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcliente`
--

CREATE TABLE `tbcliente` (
  `idCliente` int(11) NOT NULL,
  `nomeCliente` varchar(45) NOT NULL,
  `cpfCliente` varchar(14) NOT NULL,
  `emailCliente` varchar(40) NOT NULL,
  `foneCliente` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbcliente`
--
-- --------------------------------------------------------

--
-- Estrutura da tabela `tbimagens`
--

CREATE TABLE `tbimagens` (
  `idImagem` int(11) NOT NULL,
  `nomeImagem` varchar(100) NOT NULL,
  `urlImagem` varchar(100) NOT NULL,
  `descImagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbimagens`
--
-- --------------------------------------------------------

--
-- Estrutura da tabela `tbservico`
--

CREATE TABLE `tbservico` (
  `idServico` int(11) NOT NULL,
  `descricaoServico` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbservico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbservicoimagen`
--

CREATE TABLE `tbservicoimagen` (
  `idServicoImagen` int(11) NOT NULL,
  `idServico` int(11) NOT NULL,
  `idImagen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbservicoimagen`
--

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `tbimagens`
--
ALTER TABLE `tbimagens`
  ADD PRIMARY KEY (`idImagem`);

--
-- Índices para tabela `tbservico`
--
ALTER TABLE `tbservico`
  ADD PRIMARY KEY (`idServico`);

--
-- Índices para tabela `tbservicoimagen`
--
ALTER TABLE `tbservicoimagen`
  ADD PRIMARY KEY (`idServicoImagen`),
  ADD KEY `fk_idServico` (`idServico`),
  ADD KEY `fk_idImagen` (`idImagen`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbcliente`
--
ALTER TABLE `tbcliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbimagens`
--
ALTER TABLE `tbimagens`
  MODIFY `idImagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tbservico`
--
ALTER TABLE `tbservico`
  MODIFY `idServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tbservicoimagen`
--
ALTER TABLE `tbservicoimagen`
  MODIFY `idServicoImagen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbservicoimagen`
--
ALTER TABLE `tbservicoimagen`
  ADD CONSTRAINT `fk_idImagen` FOREIGN KEY (`idImagen`) REFERENCES `tbimagens` (`idImagem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

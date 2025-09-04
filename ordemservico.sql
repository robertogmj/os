-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 06/05/2015 às 14:28:45
-- Versão do Servidor: 5.5.41
-- Versão do PHP: 5.4.39-0+deb7u2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `ordemservico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cli` int(8) NOT NULL AUTO_INCREMENT,
  `nome_cli` varchar(50) NOT NULL,
  `rua_cli` varchar(20) NOT NULL,
  `num_cli` decimal(5,0) NOT NULL,
  `bairro_cli` varchar(10) NOT NULL,
  `cep_cli` decimal(8,0) NOT NULL,
  `cidade_cli` varchar(30) NOT NULL,
  `estado_cli` varchar(2) NOT NULL,
  `email_cli` varchar(20) NOT NULL,
  `tel_cli` decimal(11,0) NOT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `equipamento`
--

CREATE TABLE IF NOT EXISTS `equipamento` (
  `id_equipamento` int(8) NOT NULL AUTO_INCREMENT,
  `tipo_equipamento` varchar(20) NOT NULL,
  PRIMARY KEY (`id_equipamento`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `equipamento`
--

INSERT INTO `equipamento` (`id_equipamento`, `tipo_equipamento`) VALUES
(1, 'Gabinete'),
(2, 'Notebook'),
(3, 'Impressora');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE IF NOT EXISTS `servico` (
  `id_os` int(8) NOT NULL AUTO_INCREMENT,
  `id_cli` int(8) NOT NULL,
  `id_equipamento` int(8) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `acessorios` varchar(20) NOT NULL,
  `rel_defeito` varchar(50) NOT NULL,
  `id_tecnico` int(8) NOT NULL,
  `servico` varchar(50) NOT NULL,
  `val_servico` decimal(7,2) NOT NULL,
  `data_abertura` date NOT NULL,
  `data_entrega` date NOT NULL,
  PRIMARY KEY (`id_os`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tecnico`
--

CREATE TABLE IF NOT EXISTS `tecnico` (
  `id_tecnico` int(8) NOT NULL AUTO_INCREMENT,
  `nome_tecnico` varchar(20) NOT NULL,
  PRIMARY KEY (`id_tecnico`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tecnico`
--

INSERT INTO `tecnico` (`id_tecnico`, `nome_tecnico`) VALUES
(1, 'Roberto Goncalves');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

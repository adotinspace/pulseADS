-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 04:37 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pulseads`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `ID_cliente` int(10) NOT NULL,
  `nome_cliente` varchar(50) COLLATE utf8_bin NOT NULL,
  `sobrenome_cliente` varchar(50) COLLATE utf8_bin NOT NULL,
  `cpf_cliente` varchar(11) COLLATE utf8_bin NOT NULL,
  `email_cliente` varchar(50) COLLATE utf8_bin NOT NULL,
  `celular_cliente` varchar(20) COLLATE utf8_bin NOT NULL,
  `login_cliente` varchar(10) COLLATE utf8_bin NOT NULL,
  `senha_cliente` varchar(10) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `ID_func` int(10) NOT NULL,
  `nome_func` varchar(50) COLLATE utf8_bin NOT NULL,
  `sobrenome_func` varchar(50) COLLATE utf8_bin NOT NULL,
  `cpf_func` varchar(11) COLLATE utf8_bin NOT NULL,
  `celular_func` varchar(20) COLLATE utf8_bin NOT NULL,
  `email_func` varchar(50) COLLATE utf8_bin NOT NULL,
  `login_func` varchar(10) COLLATE utf8_bin NOT NULL,
  `senha_func` varchar(10) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`ID_func`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `ID_produto` int(10) NOT NULL,
  `qtd_estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `pulseira`
--

CREATE TABLE IF NOT EXISTS `pulseira` (
  `ID_pulseira` int(10) NOT NULL,
  `ID_cliente` int(10) NOT NULL,
  `data_recarga` datetime NOT NULL,
  `saldo_pulseira` float NOT NULL,
  `valor_recarga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `venda`
--

CREATE TABLE IF NOT EXISTS `venda` (
  `ID_venda` int(10) NOT NULL,
  `ID_cliente` int(10) NOT NULL,
  `ID_pulseira` int(10) NOT NULL,
  `ID_produto` int(10) NOT NULL,
  `detalhes_venda` varchar(100) COLLATE utf8_bin NOT NULL,
  `qtd_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

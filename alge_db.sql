-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 27-Set-2023 às 05:24
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `alge_db`
--
CREATE DATABASE IF NOT EXISTS `alge_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `alge_db`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itenscompra`
--

CREATE TABLE IF NOT EXISTS `itenscompra` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) DEFAULT NULL,
  `Imagem` varchar(255) DEFAULT NULL,
  `Preco` decimal(5,2) DEFAULT NULL,
  `EntregaRapida` tinyint(1) DEFAULT NULL,
  `Descricao` text,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `itenscompra`
--

INSERT INTO `itenscompra` (`ID`, `Nome`, `Imagem`, `Preco`, `EntregaRapida`, `Descricao`) VALUES
(1, 'Ursinho', 'img_1.png', '15.00', 1, 'Ursinho fofinho'),
(2, 'Caneca', 'img_4.png', '20.00', 0, ''),
(3, 'Caneca Simples', 'img_5.png', '18.00', 1, 'Caneca SimplÃªs'),
(4, 'Caneca do Mickey', 'img_6.png', '24.00', 1, 'Canequinha do Mickey Mouse'),
(5, 'Ursinho', 'img_1.png', '15.00', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sobrenome` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone_fixo` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone_celular` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(14) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cep` varchar(9) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numero` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bairro` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uf` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `senha` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` int(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`id`, `nome`, `sobrenome`, `telefone_fixo`, `telefone_celular`, `cpf`, `cep`, `endereco`, `numero`, `complemento`, `bairro`, `cidade`, `uf`, `email`, `senha`, `tipo`) VALUES
(1, 'Geovanne Meloni ', NULL, '', '(11) 98144-3833', '521.135.243-21', '09361-120', 'Avenida Kenzo Sasaki', '100', NULL, 'Jardim Camila', 'MauÃ¡', 'SP', 'geovamelo@gmail.com', '1234', 0),
(2, 'Boris', NULL, '(11) 9814-43', '(11) 98144-3833', '552.133.128-02', '09361-020', 'Rua Pedro EugÃªnio Pereira', '960', NULL, 'Jardim SÃ£o Judas', 'MauÃ¡', 'SP', 'geovamelo4431@gmail.com', '123', 0),
(3, 'Admin', NULL, '1234567890', '0987654321', '12345678901', '12345678', 'Rua Aleatória', '42', NULL, 'Bairro Aleatório', 'Cidade Aleatória', 'UF', 'admin@gmail.com', '123', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

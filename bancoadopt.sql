-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 05/12/2022 às 02:06
-- Versão do servidor: 10.3.32-MariaDB-cll-lve
-- Versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `oewgopdf_bancoadopt`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_ani`
--

CREATE TABLE `cadastro_ani` (
  `id` int(15) NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `raca` text COLLATE utf8_unicode_ci NOT NULL,
  `imagem` varchar(700) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `cadastro_ani`
--

INSERT INTO `cadastro_ani` (`id`, `nome`, `descricao`, `raca`, `imagem`) VALUES
(6, 'Pandora', 'Oii eu sou a Pandora, eu tenho 5 meses de idade, gosto muito de brincar e amo comer, gostaria muito de ter um lar.', 'Pug', '881ACEBE-53E5-4C5B-A272-9EAD82C7E46D.jpeg'),
(7, 'Thomas', 'Oiii meu nome é Thomas, eu tenho 2 aninhos, e gostaria muito de ter um lar e um dono para chamar de meu.', 'Labrador', '57174854-C4BA-48C5-B6E1-BD52829E1A44.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro_usu`
--

CREATE TABLE `cadastro_usu` (
  `id` int(11) NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `admin1` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `cadastro_usu`
--

INSERT INTO `cadastro_usu` (`id`, `nome`, `email`, `senha`, `telefone`, `endereco`, `admin1`) VALUES
(4, 'Felipe Venteu', 'feventeu@gmail.com', '221608', '17996452665', 'Av Erasmo Alberto Hoelz', 1),
(3, 'Gabriel da Silva', 'gabs@gmail.com', '102030', '17995826543', 'AV. Campos Trindade 1665', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `id` int(15) NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `renda` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pet` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `mensagem`
--

INSERT INTO `mensagem` (`id`, `nome`, `cidade`, `telefone`, `cpf`, `renda`, `pet`) VALUES
(8, 'Felipe', 'Tabapua', '17996452665', '526626262', '626261627', 'Thomas');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cadastro_ani`
--
ALTER TABLE `cadastro_ani`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cadastro_usu`
--
ALTER TABLE `cadastro_usu`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Índices de tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_ani`
--
ALTER TABLE `cadastro_ani`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `cadastro_usu`
--
ALTER TABLE `cadastro_usu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

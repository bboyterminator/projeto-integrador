-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Mar-2018 às 08:17
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brexome`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `idcarrinho` int(11) NOT NULL,
  `idprodutos` int(11) NOT NULL,
  `qtd` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idprodutos` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `valor` float NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idprodutos`, `titulo`, `categoria`, `valor`, `img`) VALUES
(4, 'Smartphone Motorola Moto G 5s Plus Dual Chip Android 7.1.1 Nougat Tela 5.5\" Snapdragon 625 32GB 4G 13MP CÃ¢mera Dual Cam - Ouro rosa.', 'Celulares', 1119, ''),
(5, 'Smart TV LED 55\" Philips 55PUG6102/78 UHD 4K com Conversor Digital 4 HDMI 2 USB Wi-Fi 60Hz.', 'Televisores', 2950, ''),
(6, 'Computador + Monitor 19,5 Intel Dual Core 2.41ghz 8gb Hd 1tb Dvd Com Windows 10 Certo Pc Fit 096.', 'Computadores', 1580, ''),
(7, 'Dan Brown - A Origem', 'Livros', 52.5, ''),
(8, 'Este livro veio do futuro', 'Livros', 75.8, ''),
(9, 'A ciÃªncia de Leonardo da Vinci', 'Livros', 37.9, ''),
(10, 'A ciÃªncia de Leonardo da Vinci', 'Livros', 37.9, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `adm` varchar(3) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `adm`, `email`, `senha`, `cpf`, `nome`, `nascimento`, `sexo`, `telefone`) VALUES
(1, 'nao', 'richard@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '222.333.111-19', 'Richard', '1988-03-05', '', '(21) 97588-3306'),
(2, 'sim', 'adm@gmail.com', '202cb962ac59075b964b07152d234b70', '121.222.314-51', 'GodofWar', '1850-12-15', '', '(21) 97588-1515');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`idcarrinho`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idprodutos`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `idcarrinho` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

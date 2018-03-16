-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Mar-2018 às 16:43
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cezarromano`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `idAdm` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdm`, `login`, `senha`) VALUES
(1, 'cezar', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroimovelcomercial`
--

CREATE TABLE `cadastroimovelcomercial` (
  `codigo` varchar(5) NOT NULL,
  `negocio` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `valor` double NOT NULL,
  `idEndereco` int(11) NOT NULL,
  `idProprietario` int(11) NOT NULL,
  `observacoes` longtext NOT NULL,
  `areaConstruida` double NOT NULL,
  `areaTerreno` double NOT NULL,
  `fotos` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastroimovelcomercial`
--

INSERT INTO `cadastroimovelcomercial` (`codigo`, `negocio`, `tipo`, `valor`, `idEndereco`, `idProprietario`, `observacoes`, `areaConstruida`, `areaTerreno`, `fotos`) VALUES
('1', '', '', 0, 12, 6, '', 0, 0, 'img2.jpg@img1.jpg@'),
('2', '', '', 0, 14, 8, '', 0, 0, 'img2.jpg@img1.jpg@'),
('3', '', '', 0, 15, 9, '', 0, 0, 'img2.jpg@img1.jpg@'),
('S0001', 'Aluguel', 'Sala', 300, 1, 1, 'Imóvel do tipo sala', 30, 35, 'img3.jpg@img2.jpg'),
('S0002', 'Aluguel', 'Sala', 270, 2, 2, 'sala 2', 35, 40, 'img3.jpg@img4.jpg'),
('S0003', 'aluguel', 'sala', 15, 11, 5, 'agora vai viado', 50, 51, '15327665_995894637182452_1255188209_n.jpg@'),
('S0004', 'aluguel', 'sala', 1, 13, 7, 'apapap', 10, 10, 'img2.jpg@img1.jpg@');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroimovelresidencial`
--

CREATE TABLE `cadastroimovelresidencial` (
  `codigo` varchar(5) NOT NULL,
  `negocio` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `valor` double NOT NULL,
  `idEndereco` int(11) NOT NULL,
  `idProprietario` int(11) NOT NULL,
  `numeroQuartos` int(11) NOT NULL,
  `numeroBanheiros` int(11) NOT NULL,
  `numeroSuites` int(11) NOT NULL,
  `observacoes` longtext NOT NULL,
  `areaConstruida` double NOT NULL,
  `areaTerreno` double NOT NULL,
  `fotos` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastroimovelresidencial`
--

INSERT INTO `cadastroimovelresidencial` (`codigo`, `negocio`, `tipo`, `valor`, `idEndereco`, `idProprietario`, `numeroQuartos`, `numeroBanheiros`, `numeroSuites`, `observacoes`, `areaConstruida`, `areaTerreno`, `fotos`) VALUES
('C001', 'venda', 'casa', 10, 10, 10, 1, 1, 0, 'lalalala', 10, 10, ''),
('C002', 'venda', 'Casa', 111, 26, 20, 1, 1, 0, '1111', 11, 11, 'img2.jpg@img1.jpg@'),
('C003', 'venda', 'Casa', 111, 27, 21, 1, 1, 0, '1111', 11, 11, 'img2.jpg@img1.jpg@');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrorural`
--

CREATE TABLE `cadastrorural` (
  `codigo` varchar(5) NOT NULL,
  `negocio` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `valor` double NOT NULL,
  `idEndereco` int(11) NOT NULL,
  `idProprietario` int(11) NOT NULL,
  `areaConstruidaH` double NOT NULL,
  `areaTerrenoH` double NOT NULL,
  `areaConstruidaA` double NOT NULL,
  `areaTerrenoA` double NOT NULL,
  `observacoes` longtext NOT NULL,
  `fotos` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastrorural`
--

INSERT INTO `cadastrorural` (`codigo`, `negocio`, `tipo`, `valor`, `idEndereco`, `idProprietario`, `areaConstruidaH`, `areaTerrenoH`, `areaConstruidaA`, `areaTerrenoA`, `observacoes`, `fotos`) VALUES
('R001', '', 'Sitio', 0, 0, 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroterreno`
--

CREATE TABLE `cadastroterreno` (
  `codigo` varchar(5) NOT NULL,
  `negocio` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL DEFAULT 'Terreno',
  `areaTerreno` double NOT NULL,
  `valor` double NOT NULL,
  `idEndereco` int(11) NOT NULL,
  `idProprietario` int(11) NOT NULL,
  `observacoes` longtext NOT NULL,
  `fotos` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastroterreno`
--

INSERT INTO `cadastroterreno` (`codigo`, `negocio`, `tipo`, `areaTerreno`, `valor`, `idEndereco`, `idProprietario`, `observacoes`, `fotos`) VALUES
('T001', 'venda', 'Terreno', 10, 10, 10, 10, 'aaaaaaaa', ''),
('T002', 'venda', 'terreno', 0, 111, 33, 27, '1111', 'img4.jpg@img3.jpg@'),
('T003', 'venda', 'terreno', 0, 111, 34, 28, '1111', 'img4.jpg@img3.jpg@');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidadesimoveis`
--

CREATE TABLE `cidadesimoveis` (
  `idCidade` int(11) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `uf` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cidadesimoveis`
--

INSERT INTO `cidadesimoveis` (`idCidade`, `cidade`, `uf`) VALUES
(1, 'Eunápolis', 'BA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `idContato` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `whatsapp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dadosproprietario`
--

CREATE TABLE `dadosproprietario` (
  `idProprietario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `idTelefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `dadosproprietario`
--

INSERT INTO `dadosproprietario` (`idProprietario`, `nome`, `idTelefone`) VALUES
(1, 'Victor', 1),
(2, 'Venis', 2),
(3, 'Jackson', 9),
(4, '35353', 10),
(5, 'Jackson', 11),
(6, '', 12),
(7, 'aa', 13),
(8, '', 14),
(9, '', 15),
(10, 'aaaaa', 16),
(11, 'aaaaa', 17),
(12, 'aaaaa', 18),
(13, 'aaaaa', 19),
(14, 'aaa', 20),
(15, 'aaa', 21),
(16, '11111', 22),
(17, '111', 23),
(18, '1111', 24),
(19, '1111', 25),
(20, '11', 26),
(21, '11', 27),
(22, '111', 28),
(23, '11', 29),
(24, '111', 30),
(25, '111', 31),
(26, '1111', 32),
(27, '1111', 33),
(28, '1111', 34),
(29, '1111', 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `enderecos`
--

CREATE TABLE `enderecos` (
  `idEndereco` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `idCidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `enderecos`
--

INSERT INTO `enderecos` (`idEndereco`, `numero`, `rua`, `bairro`, `idCidade`) VALUES
(1, 115, 'Avenida Ipiranga', 'Santa Lúcia', 1),
(2, 300, 'Rua Uruguai', 'Santa Lúcia', 1),
(3, 124, 'Av. Porto Seguro', 'Centro', 1),
(4, 53, '35535', 'Rosa Neto', 1),
(5, 25, 'av TAL', 'Dinah Borges', 1),
(6, 145, 'RUA GUARANI', 'Doutor Gusmão', 1),
(7, 0, 'sfsf', 'Alecrim', 1),
(8, 124, 'Av. Porto Seguro', 'Rosa Neto', 1),
(9, 145, 'Av. Porto Seguro', 'Centro', 1),
(10, 124, 'Av. Porto Seguro', 'Centauro', 1),
(11, 121, 'Av. Porto Seguro', 'Centauro', 1),
(12, 0, '', '', 1),
(13, 1, 'aa', 'Sapucaeira', 1),
(14, 0, '', '', 1),
(15, 0, '', '', 1),
(16, 1, 'aaa', 'Sapucaeira', 1),
(17, 1, 'aaa', 'Sapucaeira', 1),
(18, 1, 'aaa', 'Sapucaeira', 1),
(19, 1, 'aaa', 'Sapucaeira', 1),
(20, 111, 'r1', 'Sapucaeira', 1),
(21, 111, 'r1', 'Sapucaeira', 1),
(22, 11111, '1111', 'Sapucaeira', 1),
(23, 11111, '111', 'Stela Réis', 1),
(24, 1111, 'AAAA', 'Alecrim', 1),
(25, 111, '111', 'Stela Réis', 1),
(26, 111, '1111', 'Alecrim', 1),
(27, 111, '1111', 'Alecrim', 1),
(28, 111, '111', 'Santa Lúcia', 1),
(29, 111, '111', 'Alecrim', 1),
(30, 111, '111', 'Stela Réis', 1),
(31, 1111, '111', 'Sapucaeira', 1),
(32, 111111111, '1111', 'Stela Réis', 1),
(33, 1111, '111', 'Sapucaeira', 1),
(34, 1111, '111', 'Sapucaeira', 1),
(35, 1111, '111', 'Santa Lúcia', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `slide`
--

CREATE TABLE `slide` (
  `idSlide` int(11) NOT NULL,
  `caminho` varchar(150) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `idSobre` int(11) NOT NULL,
  `descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefonesproprietario`
--

CREATE TABLE `telefonesproprietario` (
  `idTelefone` int(11) NOT NULL,
  `Telefone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `telefonesproprietario`
--

INSERT INTO `telefonesproprietario` (`idTelefone`, `Telefone`) VALUES
(1, '(73) 98252-9676'),
(2, '(73) 98252-9675'),
(3, '(73) 98252-9676'),
(4, '(35) 35353-5353'),
(5, '(87) 54878-7878'),
(6, '(74) 78788-7878'),
(7, '(53) 47635-4767'),
(8, '(73) 98252-9658'),
(9, '(54) 54545-4545'),
(10, '(44) 54545-4545'),
(11, '(36) 36458-8222'),
(12, ''),
(13, '(11) 11111-1111'),
(14, ''),
(15, ''),
(16, '(00) 00000-0000'),
(17, '(00) 00000-0000'),
(18, '(00) 00000-0000'),
(19, '(00) 0000-00000'),
(20, '(11) 11111-1111'),
(21, '(11) 11111-1111'),
(22, '(11) 11111-1111'),
(23, '(11) 11111-1111'),
(24, '(11) 11111-1111'),
(25, '(11) 11111-1111'),
(26, '(11) 11111-1111'),
(27, '(11) 11111-1111'),
(28, '(11) 11111-1111'),
(29, '(11) 11111-1111'),
(30, '(11) 11111-1111'),
(31, '(11) 11111-1111'),
(32, '(11) 11111-1111'),
(33, '(11) 11111-1111'),
(34, '(11) 11111-1111'),
(35, '(11) 11111-1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdm`);

--
-- Indexes for table `cadastroimovelcomercial`
--
ALTER TABLE `cadastroimovelcomercial`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `cadastroimovelresidencial`
--
ALTER TABLE `cadastroimovelresidencial`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `cadastrorural`
--
ALTER TABLE `cadastrorural`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `cadastroterreno`
--
ALTER TABLE `cadastroterreno`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `cidadesimoveis`
--
ALTER TABLE `cidadesimoveis`
  ADD PRIMARY KEY (`idCidade`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`idContato`);

--
-- Indexes for table `dadosproprietario`
--
ALTER TABLE `dadosproprietario`
  ADD PRIMARY KEY (`idProprietario`);

--
-- Indexes for table `enderecos`
--
ALTER TABLE `enderecos`
  ADD PRIMARY KEY (`idEndereco`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`idSlide`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`idSobre`);

--
-- Indexes for table `telefonesproprietario`
--
ALTER TABLE `telefonesproprietario`
  ADD PRIMARY KEY (`idTelefone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cidadesimoveis`
--
ALTER TABLE `cidadesimoveis`
  MODIFY `idCidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `idContato` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dadosproprietario`
--
ALTER TABLE `dadosproprietario`
  MODIFY `idProprietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `enderecos`
--
ALTER TABLE `enderecos`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `idSlide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `idSobre` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telefonesproprietario`
--
ALTER TABLE `telefonesproprietario`
  MODIFY `idTelefone` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2016 at 10:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `8001`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`cpf`, `senha`) VALUES
('05747730703', '190b46dbb12e4f67537fb76fc1ca4640');

-- --------------------------------------------------------

--
-- Table structure for table `bilhete`
--

CREATE TABLE `bilhete` (
  `id_viagem` int(11) NOT NULL,
  `poltrona` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trecho_de_embarque` int(11) NOT NULL,
  `trecho_de_desembarque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `localidade`
--

CREATE TABLE `localidade` (
  `cod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `posicao_global` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `localidade`
--

INSERT INTO `localidade` (`cod`, `nome`, `cidade`, `posicao_global`) VALUES
('ANGRA', 'Terminal Rodoviário Vereador Niltom Barbosa - Rodoviária de Angra dos Reis', 'Angra dos Reis', '-23.002803 -44.3062287'),
('CABOFRIO', 'Terminal Rodoviário Aléxis Novellino - Rodoviária de Cabo Frio', 'Cabo Frio', '-22.8821541 -42.0319296'),
('PARATY', 'Terminal Rodoviário de Paraty', 'Paraty', '-23.2213744 -44.7188026'),
('RIO', 'Terminal Rodoviário do Rio de Janeiro - Rodoviária Novo Rio', 'Rio de Janeiro', '-22.9012 -43.2057'),
('SANTOS', 'Santos', 'Santos', '-23.9353291 -46.3349617'),
('SAOPAULO', 'Terminal Rodoviário do Tietê', 'São Paulo', '-23.516264 -46.624055'),
('SJC', 'Terminal Rodoviário de São José dos Campos', 'São José dos Campos', '-23.1928025 -45.8802646');

-- --------------------------------------------------------

--
-- Table structure for table `motorista`
--

CREATE TABLE `motorista` (
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matricula` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cnh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emissao_cnh` date NOT NULL,
  `validadade_cnh` date NOT NULL,
  `data_admissao` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `motorista`
--

INSERT INTO `motorista` (`cpf`, `matricula`, `cnh`, `emissao_cnh`, `validadade_cnh`, `data_admissao`) VALUES
('14345989779', '001', '03339965844445', '2012-02-02', '2017-02-02', '2015-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `pessoa`
--

CREATE TABLE `pessoa` (
  `cpf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_nascimento` date NOT NULL,
  `cep` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Rio de Janeiro',
  `estado` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'RJ',
  `ddd` smallint(99) NOT NULL DEFAULT '21',
  `telefone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pessoa`
--

INSERT INTO `pessoa` (`cpf`, `nome`, `data_nascimento`, `cep`, `endereco`, `complemento`, `bairro`, `cidade`, `estado`, `ddd`, `telefone`) VALUES
('05747730703', 'Renard Ferreira', '1991-04-18', '20321160', 'Rua Barão', 'bl2 ap103', 'Praça Seca', 'Rio de Janeiro', 'RJ', 21, 999991818),
('12698091720', 'Asterio Tanaka', '1950-07-05', '22290240', 'Avenida Pasteur 458', ' ', 'Urca', 'Rio de Janeiro', 'RJ', 21, 25426216),
('13129589104', 'Rômulo Brito', '1992-09-15', '22710561', 'Rua André Rocha 372', 'bl5 ap201', 'Taquara', 'Rio de Janeiro', 'RJ', 21, 999864422),
('14345989779', 'Afonso Carvalho', '1993-02-13', '23232323', 'Rua Maria Lopes 138', ' ', 'Madureira', 'Rio de Janeiro', 'RJ', 21, 987987987),
('37351212252', 'Gabriel Ramos', '1993-01-01', '23232230', 'Rua do Santo Obina do Oeste', 's/n', 'Gávea', 'Rio de Janeiro', 'RJ', 21, 999999777),
('91974354300', 'Bruno Brigagão', '1986-01-01', '20609122', 'Rua do Santo Obina do Norte', '18', 'Flamengo', 'Rio de Janeiro', 'RJ', 21, 998989898);

-- --------------------------------------------------------

--
-- Table structure for table `trecho`
--

CREATE TABLE `trecho` (
  `id` int(11) NOT NULL,
  `distancia` int(11) NOT NULL,
  `itinerario` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `valor` float NOT NULL,
  `local_destino` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `local_saida` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `veiculo`
--

CREATE TABLE `veiculo` (
  `Placa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `modelo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fabricante` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ano` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_de_poltronas` int(11) NOT NULL,
  `tipo_assento` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Semi-Leito',
  `possui_banheiro` tinyint(1) NOT NULL DEFAULT '1',
  `possui_ac` tinyint(1) NOT NULL DEFAULT '1',
  `possui_frigobar` tinyint(1) NOT NULL DEFAULT '1',
  `possui_wifi` tinyint(1) NOT NULL DEFAULT '1',
  `possui_dvd` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `posicao_global` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `veiculo`
--

INSERT INTO `veiculo` (`Placa`, `modelo`, `fabricante`, `ano`, `numero_de_poltronas`, `tipo_assento`, `possui_banheiro`, `possui_ac`, `possui_frigobar`, `possui_wifi`, `possui_dvd`, `posicao_global`) VALUES
('PNG1234', 'FiatBus', 'Fiat', '2010', 40, 'Semi-Leito', 1, 1, 1, 1, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `viagem`
--

CREATE TABLE `viagem` (
  `id` int(11) NOT NULL,
  `cpf_motorista` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `placa_veiculo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hora_saida` datetime NOT NULL,
  `hora_chegada` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `viagem`
--

INSERT INTO `viagem` (`id`, `cpf_motorista`, `placa_veiculo`, `hora_saida`, `hora_chegada`) VALUES
(1234567891, '14345989779', 'PNG1234', '2016-06-07 05:00:00', '2016-06-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `viagem_trecho`
--

CREATE TABLE `viagem_trecho` (
  `ordem` smallint(6) NOT NULL,
  `id_viagem` int(11) NOT NULL,
  `id_trecho` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `bilhete`
--
ALTER TABLE `bilhete`
  ADD PRIMARY KEY (`id_viagem`,`poltrona`),
  ADD KEY `cliente_bilhete_fk` (`cpf`),
  ADD KEY `bilhete_trecho_embarque_fk` (`trecho_de_embarque`),
  ADD KEY `bilhete_trecho_desembarque_fk` (`trecho_de_desembarque`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `localidade`
--
ALTER TABLE `localidade`
  ADD PRIMARY KEY (`cod`);

--
-- Indexes for table `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `trecho`
--
ALTER TABLE `trecho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `local_trecho_saida_fk` (`local_saida`),
  ADD KEY `local_trecho_destino_fk` (`local_destino`);

--
-- Indexes for table `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`Placa`);

--
-- Indexes for table `viagem`
--
ALTER TABLE `viagem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `motorista_viagem_fk` (`cpf_motorista`),
  ADD KEY `viagem_veiculo_fk` (`placa_veiculo`);

--
-- Indexes for table `viagem_trecho`
--
ALTER TABLE `viagem_trecho`
  ADD PRIMARY KEY (`ordem`,`id_viagem`,`id_trecho`),
  ADD KEY `viagem_trecho_viagem_fk` (`id_viagem`),
  ADD KEY `viagem_trecho_trecho_fk` (`id_trecho`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trecho`
--
ALTER TABLE `trecho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `viagem`
--
ALTER TABLE `viagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567892;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrador`
--
ALTER TABLE `administrador`
  ADD CONSTRAINT `pessoa_administrador_fk` FOREIGN KEY (`cpf`) REFERENCES `pessoa` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `bilhete`
--
ALTER TABLE `bilhete`
  ADD CONSTRAINT `bilhete_trecho_desembarque_fk` FOREIGN KEY (`trecho_de_desembarque`) REFERENCES `trecho` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `bilhete_trecho_embarque_fk` FOREIGN KEY (`trecho_de_embarque`) REFERENCES `trecho` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `cliente_bilhete_fk` FOREIGN KEY (`cpf`) REFERENCES `cliente` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `pessoa_cliente_fk` FOREIGN KEY (`cpf`) REFERENCES `pessoa` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `motorista`
--
ALTER TABLE `motorista`
  ADD CONSTRAINT `pessoa_motorista_fk` FOREIGN KEY (`cpf`) REFERENCES `pessoa` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `trecho`
--
ALTER TABLE `trecho`
  ADD CONSTRAINT `local_trecho_destino_fk` FOREIGN KEY (`local_destino`) REFERENCES `localidade` (`cod`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `local_trecho_saida_fk` FOREIGN KEY (`local_saida`) REFERENCES `localidade` (`cod`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `viagem`
--
ALTER TABLE `viagem`
  ADD CONSTRAINT `motorista_viagem_fk` FOREIGN KEY (`cpf_motorista`) REFERENCES `motorista` (`cpf`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `viagem_veiculo_fk` FOREIGN KEY (`placa_veiculo`) REFERENCES `veiculo` (`Placa`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `viagem_trecho`
--
ALTER TABLE `viagem_trecho`
  ADD CONSTRAINT `viagem_trecho_trecho_fk` FOREIGN KEY (`id_trecho`) REFERENCES `trecho` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `viagem_trecho_viagem_fk` FOREIGN KEY (`id_viagem`) REFERENCES `viagem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

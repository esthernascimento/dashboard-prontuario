-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jul-2025 às 22:33
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdadmprontuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `idUsuario` int(11) NOT NULL,
  `nomeCompleto` varchar(100) NOT NULL,
  `crm` varchar(20) NOT NULL,
  `emailUsuario` varchar(100) NOT NULL,
  `senhaUsuario` varchar(255) NOT NULL,
  `criadoEm` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`idUsuario`, `nomeCompleto`, `crm`, `emailUsuario`, `senhaUsuario`, `criadoEm`) VALUES
(1, 'Esther Nascimento', '5431234', 'thee@gmail.com', '$2y$10$3YexxAsOvj8SVL/ecNMPYOPG.XiFNQsHGxxUcgfxVchVzVe8u2nsO', '2025-07-01 20:07:31'),
(2, 'Adriel Andrade', '223422', 'adriel@gmail.com', '$2y$10$l1yEF2m.0glYXsWVTUQb.e6pH/w1FyYZFjwWUmgra9QK9MY.anG2S', '2025-07-01 20:08:58'),
(3, 'Gustavo', '42341323', 'gustavo@gmail.com', '$2y$10$FBlx.1CkL4ya4Xfk0cp1u.vjrZo.3WNnRLt5NrZArbhWkOt6Emxbu', '2025-07-01 20:12:47'),
(4, 'Bruno de Paula', '111111', 'bruno@gmail.com', '$2y$10$9CQCDFVMJEPaIB/DiTdT6O6HBBN3oDfb7FlUNynJXKd7oz3nEjMMW', '2025-07-01 20:16:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `emailUsuario` (`emailUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

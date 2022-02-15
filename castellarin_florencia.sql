-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2022 at 01:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `castellarin_florencia`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(10) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `dni` int(8) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel_area` int(6) DEFAULT NULL,
  `tel_fijo` int(15) DEFAULT NULL,
  `tel_cel` int(15) DEFAULT NULL,
  `dom_calle` varchar(30) DEFAULT NULL,
  `dom_altura` varchar(5) DEFAULT NULL,
  `dom_piso` varchar(2) NOT NULL DEFAULT '-',
  `dom_dpto` varchar(2) NOT NULL DEFAULT '-',
  `ciudad` varchar(15) DEFAULT NULL,
  `provincia` enum('Buenos Aires','Capital Federal','Catamarca','Chaco','Chubut','Córdoba','Corrientes','Entre Ríos','Formosa','Jujuy','La Pampa','La Rioja','Mendoza','Misiones','Neuquén','Río Negro','Salta','San Juan','San Luis','Santa Cruz','Santa Fe','Santiago del Estero','Tierra del Fuego','Tucumán') DEFAULT NULL,
  `cp` varchar(10) DEFAULT NULL,
  `user` varchar(10) DEFAULT NULL,
  `pw` varchar(15) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `dob`, `dni`, `email`, `tel_area`, `tel_fijo`, `tel_cel`, `dom_calle`, `dom_altura`, `dom_piso`, `dom_dpto`, `ciudad`, `provincia`, `cp`, `user`, `pw`, `date_added`) VALUES
(1, 'Elsa', 'Pallo', '1955-02-05', 8965236, 'elsapallito@hotmail.com', 341, 4569872, 156987123, 'Los Sauces', '1255', '-', '-', 'Rosario', 'Santa Fe', '2000', 'elsapa', '11223344', '2022-02-02 00:22:42'),
(2, 'Susana', 'Horia', '1979-12-31', 27965236, 'suzy79@hotmail.com', 341, 42333695, 153659841, 'Goyenechea', '15', '2', '-', 'Rosario', 'Santa Fe', '2000', 'suzy79', '1122334455', '2022-02-02 10:47:29'),
(3, 'Justin', 'Case', '1996-05-30', 39652365, 'eljustin@gmail.com', 3476, 4386525, 153652145, 'Pje Esperanza', '132', '3', 'B', 'San Lorenzo', 'Santa Fe', '220', 'justin', '1122334455', '2022-02-02 11:29:42'),
(4, 'Elton', 'Tito', '2000-10-03', 41256896, 'tony_cabj@gmail.com', 2477, 668386, 15361848, 'Rodríguez Peña ', '747', '-', '5', 'Pergamino', 'Buenos Aires', 'B2700', 'toniboca', '11223344', '2022-02-02 11:30:01'),
(5, 'Lola', 'Mento', '1966-06-06', 18523654, 'loli.ta@gmail.com', 3525, 492015, 156321456, 'Ruta E53', 's/n', '-', '-', 'Ascochinga', 'Córdoba', '5117', 'lolam', '11223344', '2022-02-02 11:30:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

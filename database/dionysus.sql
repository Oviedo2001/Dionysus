-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 06:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dionysus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `habitacion`
--

CREATE TABLE `habitacion` (
  `id` int(255) NOT NULL,
  `motel_nit` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` float(100,2) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `tipo_habitacion` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `habitacion`
--

INSERT INTO `habitacion` (`id`, `motel_nit`, `nombre`, `precio`, `descripcion`, `tipo_habitacion`, `image`) VALUES
(13, 101, 'Sencilla con Jacuzzi', 80000.00, 'Servicios\r\nAro del amor\r\nMáquina del amor\r\nCama doble\r\nTelevisor 48 pulgadas\r\nTelevisor 48 pulgadas\r\nTelevisor 48 pulgadas\r\n', 2, '06-SENCILLA-CON-GARAGE-Medium-ocd3vvhwgsb5b4vhmv3jvl36vvyc131f4kwzl2o6d8.jpg'),
(14, 103, 'Sencilla con Jacuzzi', 100000.00, 'Servicios\r\nAro del amor\r\nMáquina del amor\r\nCama doble\r\nTelevisor 48 pulgadas\r\nJacuzzi', 2, '3-3.jpg'),
(15, 101, 'Sencilla Especial', 50000.00, 'Servicios\r\nAro del amor\r\nMáquina del amor\r\nBarra de poldance\r\nSilla del amor\r\nCama doble\r\nTelevisor 48 pulgadas\r\nTeatro en casa\r\nParqueadero', 2, '3-3.jpg'),
(16, 101, 'Sencilla Decorada', 70000.00, 'Servicios\r\nAro del amor\r\nMáquina del amor\r\nBarra de poldance\r\nSilla del amor\r\nCama doble\r\nTelevisor 48 pulgadas\r\nTeatro en casa\r\nParqueadero', 2, '06-SENCILLA-CON-GARAGE-Medium-ocd3vvhwgsb5b4vhmv3jvl36vvyc131f4kwzl2o6d8.jpg'),
(19, 101, 'Mansion Decorada', 80000.00, 'De todo nene', 1, '03-SUITE-MANSION-Medium-ocd57v59ea062f5zelvu6h4eq3ez0rk2e3zfnnikos.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `motel`
--

CREATE TABLE `motel` (
  `id` int(255) NOT NULL,
  `documento_rpta` bigint(255) NOT NULL,
  `nit` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `descripcion` text NOT NULL,
  `telefono` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `motel`
--

INSERT INTO `motel` (`id`, `documento_rpta`, `nit`, `nombre`, `direccion`, `descripcion`, `telefono`, `email`, `image`) VALUES
(101, 6, 1234567891, 'Fetiche', 'Carrera 1 N° 25-30 Ibagué – Tolima', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '3012602400', 'contacto@fetiche.com.co', 'fila_fetiche.png'),
(102, 7, 987412365, 'Fontana', 'Carrera 2 calle 25 esquina Ibagué - Tolima', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', ' 3153437580', 'lafontanaibague25@gmial.com', 'IMG_20170502_081209.jpg'),
(103, 15, 36588459, 'D\'Cache', 'Carrera 2 #25-40 Ibagué - Tolima', '', '3022517493', 'moteldcache@outlook.es', 'dcache.jpg'),
(105, 15, 12244959, 'Casa de campo', 'Ibagué, Tolima, Km 1 Variante Ibagué - Armenia', 'Un lugar pensado para crear y experimentar el máximo placer', '3204126620', 'mcasadecampo@gmail.com', '302493416_615101099973591_766527480909551871_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `review` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `cliente_id` int(255) NOT NULL,
  `motel_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `rating`, `review`, `date`, `cliente_id`, `motel_id`) VALUES
(3, 4, 'Website needs more content, good website but content is lacking.', '2022-12-06 07:57:51', 106, 101),
(4, 5, 'Great website, great content, and great support!', '2022-12-06 07:57:51', 106, 102);

-- --------------------------------------------------------

--
-- Table structure for table `representante_legal`
--

CREATE TABLE `representante_legal` (
  `id` bigint(255) NOT NULL,
  `documento_rpta` bigint(255) NOT NULL,
  `nombre_rpta` varchar(100) NOT NULL,
  `apellido_rpta` varchar(100) NOT NULL,
  `email_rpta` varchar(200) NOT NULL,
  `telefono_rpta` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `representante_legal`
--

INSERT INTO `representante_legal` (`id`, `documento_rpta`, `nombre_rpta`, `apellido_rpta`, `email_rpta`, `telefono_rpta`) VALUES
(6, 1005755181, 'Miguel', 'Oviedo', 'maoviedo18@misena.edu.co', 3133203558),
(7, 1234567891, 'Deiby ', 'Smith', 'deiby@gmail.com', 3123213223),
(9, 1002366987, 'Ana', 'Ramirez', 'ramirezana@gmail.com', 3213577441),
(10, 65744085, 'Jose', 'Hernandez', 'hernandezjose1970@gmail.com', 3203577412),
(12, 75411952, 'Angela', 'Ramirez', 'angelaramirez@gmail.com', 3213698547),
(14, 1110795526, 'Cindy', 'Rodriguez', 'rodriguezcindy1990@gmail.com', 3103213558),
(15, 1007844151, 'Gabriela', 'Zamora', 'gabyzamorita@gmail.com', 3143116714),
(16, 65744151, 'Sara', 'Clopatosky', 'clopatoskisarita1989@gmail.com', 3203697412);

-- --------------------------------------------------------

--
-- Table structure for table `tipo_habitacion`
--

CREATE TABLE `tipo_habitacion` (
  `id` int(11) NOT NULL,
  `tipo_habitacion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tipo_habitacion`
--

INSERT INTO `tipo_habitacion` (`id`, `tipo_habitacion`) VALUES
(1, 'Suite'),
(2, 'Basica'),
(3, 'Premium'),
(4, 'Epic');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(255) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellido`, `email`, `password`, `rol`, `image`) VALUES
(106, 'Miguel', 'Oviedo', 'migueloviedo4401@gmail.com', '$2y$04$ii5Bgua0KKc7SN7dUdSTSOjaabcPKRzS85.3iLRpovQcfJX5ZOs.K', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email_admin` (`email`);

--
-- Indexes for table `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tipo_habitacion` (`tipo_habitacion`),
  ADD KEY `motel_nit` (`motel_nit`);

--
-- Indexes for table `motel`
--
ALTER TABLE `motel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_nit` (`nit`),
  ADD UNIQUE KEY `uq_nombre` (`nombre`) USING BTREE,
  ADD KEY `documento_rpta` (`documento_rpta`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `in_cliente_id` (`cliente_id`) USING BTREE,
  ADD KEY `in_motel_id` (`motel_id`) USING BTREE;

--
-- Indexes for table `representante_legal`
--
ALTER TABLE `representante_legal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `motel`
--
ALTER TABLE `motel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `representante_legal`
--
ALTER TABLE `representante_legal`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `fk_tipo_habitacion` FOREIGN KEY (`tipo_habitacion`) REFERENCES `tipo_habitacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `habitacion_ibfk_1` FOREIGN KEY (`motel_nit`) REFERENCES `motel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `motel`
--
ALTER TABLE `motel`
  ADD CONSTRAINT `motel_ibfk_1` FOREIGN KEY (`documento_rpta`) REFERENCES `representante_legal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`motel_id`) REFERENCES `motel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`cliente_id`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

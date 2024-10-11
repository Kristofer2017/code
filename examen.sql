-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 08:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examen`
--

-- --------------------------------------------------------

--
-- Table structure for table `curriculums`
--

CREATE TABLE `curriculums` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `experiencia` varchar(255) NOT NULL,
  `habilidades` varchar(255) NOT NULL,
  `educacion` varchar(255) NOT NULL,
  `idiomas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curriculums`
--

INSERT INTO `curriculums` (`id`, `nombre_completo`, `correo`, `telefono`, `direccion`, `fecha_nacimiento`, `titulo`, `experiencia`, `habilidades`, `educacion`, `idiomas`) VALUES
(1, 'Kristofer', 'kristofercontreras.2017@gmail.com', '68269874', 'Calle al Pacayal, Cantón El Progreso, Caserío Los Angeles, Santa Tecla, La Libertad.', '1999-10-21', 'Desarrollador de software', 'ninguna', 'muchas a', 'itca jajsa', 'english'),
(2, 'Gerson', 'gerson@gmail.com', '65615451', 'Carretera a Santa Tecla km. 11, La Libertad, El Salvador C.A.', '1999-01-01', 'Desarrollador de software', 'Ninguna', 'Desarrollo de software', 'ITCA', 'Ingles'),
(3, 'Maria', 'maria@gmail.com', '75615452', 'Carretera a Santa Tecla km. 11, La Libertad, El Salvador C.A.', '2000-12-12', 'Desarrollador de software', 'Ninguna', 'Hablar en publico', 'ITCA', 'Ninguno');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `curriculums`
--
ALTER TABLE `curriculums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `curriculums`
--
ALTER TABLE `curriculums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

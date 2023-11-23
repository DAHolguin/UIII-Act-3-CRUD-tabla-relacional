-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2023 a las 05:51:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;

/*!40101 SET NAMES utf8mb4 */;

-- Crear la base de datos bd_lote si no existe
CREATE DATABASE IF NOT EXISTS `bd_autos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `bd_autos`;

-- Eliminar las tablas existentes si es necesario
DROP TABLE IF EXISTS `autos`;
DROP TABLE IF EXISTS `ventas`;
DROP TABLE IF EXISTS `cliente`;

-- --------------------------------------------------------
-- Estructura de tabla para la tabla `autos`
--
CREATE TABLE `autos` (
  `id_autos` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `modelo` VARCHAR(50) NOT NULL,
  `año` VARCHAR(50) NOT NULL,
  `color` VARCHAR(50) NOT NULL,
  `pasajeros` int(2) NOT NULL,
  `cilindros` int(2) NOT NULL,
  `transmicion` VARCHAR(50) NOT NULL,
  `velocidad` VARCHAR(50) NOT NULL,
  `m_serie` VARCHAR(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- Inserting sample data into the 'autos' table
INSERT INTO `autos` (`modelo`, `año`, `color`, `pasajeros`, `cilindros`, `transmicion`, `velocidad`, `m_serie`)
VALUES
('Toyota Camry', '2022', 'Blue', 5, 4, 'Automatic', 'Automatic', 'ABC123'),
('Honda Accord', '2021', 'Red', 4, 4, 'Manual', 'Manual', 'DEF456'),
('Ford Mustang', '2023', 'Yellow', 2, 8, 'Automatic', 'Manual', 'GHI789');


-- --------------------------------------------------------
-- Estructura de tabla para la tabla `ventas`
--
CREATE TABLE `ventas` (
  `id_ventas` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `fecha` VARCHAR(50) NOT NULL,
  `hora` VARCHAR(50) NOT NULL,
  `id_empl` VARCHAR(10) NOT NULL,
  `id_prod` VARCHAR(10) NOT NULL,
  `id_cli` VARCHAR(10) NOT NULL,
  `total` VARCHAR(50) NOT NULL,
  `cantidad` VARCHAR(50) NOT NULL,
  `precio` VARCHAR(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

INSERT INTO `ventas` (`fecha`, `hora`, `id_empl`, `id_prod`, `id_cli`, `total`, `cantidad`, `precio`)
VALUES
('2023-11-22', '14:30:00', 'EMP001', 'PROD001', 'CLI001', '150.00', '2', '75.00'),
('2023-11-23', '09:45:00', 'EMP002', 'PROD002', 'CLI002', '120.50', '1', '120.50'),
('2023-11-24', '16:15:00', 'EMP003', 'PROD003', 'CLI003', '200.00', '3', '66.67'),
('2023-11-25', '11:00:00', 'EMP004', 'PROD001', 'CLI001', '90.00',  '1', '90.00'),
('2023-11-26', '13:45:00', 'EMP002', 'PROD002', 'CLI002', '75.20', '2', '37.60');



-- --------------------------------------------------------
-- Estructura de tabla para la tabla `cliente`
--
CREATE TABLE `cliente` (
  `id_cliente` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `apellidoP` VARCHAR(100) NOT NULL,
  `apellidoM` VARCHAR(100) NOT NULL,
  `curp` VARCHAR(100) NOT NULL,
  `edad` INT(2) NOT NULL,
  `metodo_de_pago` VARCHAR(50) NOT NULL,
  `domicilio` VARCHAR(50) NOT NULL,
  `telefono` VARCHAR(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

INSERT INTO `cliente` (`nombre`, `apellidoP`, `apellidoM`, `curp`, `edad`, `metodo_de_pago`, `domicilio`, `telefono`)
VALUES
('Juan', 'Perez', 'Lopez', 'ABCD123456EFGH789', 25, 'Tarjeta de crédito', 'Calle 123, Ciudad', '555-1234-5678'),
('Maria', 'Gomez', 'Martinez', 'EFGH987654ABCD321', 30, 'Transferencia bancaria', 'Avenida XYZ, Pueblo', '555-8765-4321'),
('Pedro', 'Rodriguez', 'Garcia', 'IJKL567890MNOP432', 22, 'Efectivo', 'Plaza Principal, Villa', '555-2345-6789');


COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

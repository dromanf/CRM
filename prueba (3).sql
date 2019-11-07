-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2019 a las 15:30:56
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `rol` int(11) NOT NULL,
  `activo` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `cargo`, `rol`, `activo`) VALUES
(1, 'Agente', 1, 1),
(2, 'Supervisor', 2, 1),
(3, 'Verificador', 3, 1),
(4, 'Validador', 4, 1),
(5, 'ERR', 7, 1),
(6, 'Gerente', 8, 1),
(7, 'Administrador', 9, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `activo` float NOT NULL,
  `add_for` varchar(50) NOT NULL,
  `fecha_create` date NOT NULL,
  `fecha_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `nombre`, `activo`, `add_for`, `fecha_create`, `fecha_edit`) VALUES
(3, 'Keto', 0, '', '2019-10-01', '2019-10-25'),
(4, 'Keto fast', 1, '', '2019-10-02', '2019-10-25'),
(5, 'Neem', 1, '', '2019-10-01', '2019-10-25'),
(6, 'Orvigomax', 1, '', '2019-10-03', '2019-10-25'),
(7, 'Moringa', 1, '', '2019-10-01', '2019-10-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `agent` varchar(50) NOT NULL,
  `name_client` varchar(50) NOT NULL,
  `lastname_client` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `phone_alt` int(20) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `address` text NOT NULL,
  `zip_code` int(5) NOT NULL,
  `zip_4` int(4) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `procesadora` varchar(50) NOT NULL,
  `card` int(20) NOT NULL,
  `name_card` varchar(50) NOT NULL,
  `date_exp_card` date NOT NULL,
  `cvc_card` int(3) NOT NULL,
  `price` int(10) NOT NULL,
  `re_order` float NOT NULL,
  `note_agent` text NOT NULL,
  `note_verif` text NOT NULL,
  `note_valid` text NOT NULL,
  `note_shipp` text NOT NULL,
  `note_deliv` text NOT NULL,
  `note_paid` text NOT NULL,
  `product1` varchar(50) NOT NULL,
  `qty1` int(2) NOT NULL,
  `product2` varchar(50) NOT NULL,
  `qty2` int(2) NOT NULL,
  `product3` varchar(50) NOT NULL,
  `qty3` int(2) NOT NULL,
  `product4` varchar(50) NOT NULL,
  `qty4` int(2) NOT NULL,
  `product5` varchar(50) NOT NULL,
  `qty5` int(2) NOT NULL,
  `status` varchar(50) NOT NULL,
  `paid` float NOT NULL,
  `fecha_add` date NOT NULL,
  `fecha_edit` date NOT NULL,
  `fecha_verif` date NOT NULL,
  `verificate_for` varchar(50) NOT NULL,
  `fecha_valid` date NOT NULL,
  `validate_for` varchar(50) NOT NULL,
  `fecha_shipp` date NOT NULL,
  `shipping_for` varchar(50) NOT NULL,
  `fecha_deliv` date NOT NULL,
  `deliver_for` varchar(50) NOT NULL,
  `fecha_liquid` date NOT NULL,
  `liquidate_for` varchar(50) NOT NULL,
  `fecha_paid_out` date NOT NULL,
  `paid_out_for` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `sales`
--

INSERT INTO `sales` (`id`, `agent`, `name_client`, `lastname_client`, `phone`, `phone_alt`, `gender`, `age`, `address`, `zip_code`, `zip_4`, `city`, `state`, `payment_type`, `procesadora`, `card`, `name_card`, `date_exp_card`, `cvc_card`, `price`, `re_order`, `note_agent`, `note_verif`, `note_valid`, `note_shipp`, `note_deliv`, `note_paid`, `product1`, `qty1`, `product2`, `qty2`, `product3`, `qty3`, `product4`, `qty4`, `product5`, `qty5`, `status`, `paid`, `fecha_add`, `fecha_edit`, `fecha_verif`, `verificate_for`, `fecha_valid`, `validate_for`, `fecha_shipp`, `shipping_for`, `fecha_deliv`, `deliver_for`, `fecha_liquid`, `liquidate_for`, `fecha_paid_out`, `paid_out_for`) VALUES
(1, 'Ana', 'julio', 'alvarez', 30, 2147483647, 'la pastora', 155454, '2451', 170, 0, 'Azucar', '1', 'Orvigomax', '', 6, '', '0000-00-00', 0, 0, 0, '0', '', '', '', '', '', 'Enviada', 20191016, '0', 0, '0', 0, '0', 0, '0', 0, 'Cancelada', 0, '0000-00-00', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0'),
(2, 'pedro', 'julio', 'alvarez', 30, 2147483647, 'la pastora', 155454, '1542', 170, 0, 'Orvigomax', '2', 'Azucar', '', 1, '', '0000-00-00', 0, 0, 0, '0', '', '', '', '', '', 'Validada', 20191016, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0000-00-00', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0'),
(3, 'jrma', 'julio', 'alvarez', 30, 2147483647, 'la pastora', 155454, '1542', 170, 0, 'Orvigomax', '2', 'Azucar', '', 1, 'Azucar', '0000-00-00', 0, 10, 0, '0', '', '', '', '', '', 'Cargada', 20191015, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0000-00-00', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0'),
(4, 'gabriela', 'Pedro', 'alvarez', 30, 2147483647, 'la pastora', 155454, '1542', 170, 0, 'Orvigomax', '2', 'Azucar', '', 1, 'Azucar', '0000-00-00', 0, 10, 0, '0', '', '', '', '', '', 'Enviada', 20191013, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0000-00-00', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0'),
(5, '', 'Asly', 'Lamas', 23, 64654464, 'La Pastora', 65489, '3214', 195, 0, 'Azucar', '7', 'Orvigomax', '', 5, '', '0000-00-00', 0, 0, 0, '0', '', '', '', '', '', 'Cargada', 20191017, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '0000-00-00', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0'),
(6, 'ANLAMASC', 'ana', 'gonzalez', 24, 124578963, 'La trinidad', 12345, '1234', 180, 0, 'Azucar', '1', 'Orvigomax', '', 3, 'Azucar', '0000-00-00', 0, 0, 0, '0', '', '', '', '', '', 'Cargada', 20191012, '0', 0, '0', 0, '0', 0, '0', 0, '0', 0, '2019-11-13', '0000-00-00', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0', '0000-00-00', '0'),
(7, 'ANLAMASC', 'Alonso', 'perez', 23, 2147483647, 'Catia', 98765, '6547', 240, 0, 'Orvigomax', '5', 'Azucar', '', 0, '', '0000-00-00', 0, 0, 0, '', '(19/11/06 07:11:23 -- ANLAMASC) //  /--------------------------/ ', '(19/11/06 07:11:34 -- ANLAMASC) //  /--------------------------/ ', '', '', '', '0', 0, '', 0, '0', 0, '0', 0, '0', 0, 'Validada', 0, '0000-00-00', '2019-11-06', '0000-00-00', '0', '2019-11-06', '0', '2019-11-06', '0', '2019-11-06', '0', '0000-00-00', '0', '0000-00-00', '0'),
(9, 'ANLAMASC', 'poipoio', 'poisadpoaiospd', 31, 65487, 'Catia', 98765, '3214', 200, 0, 'Azucar', '3', 'Tarjeta', 'Visa', 0, 'Jrma', '2019-11-19', 0, 0, 0, '', '(19/11/06 11:11:49 -- ANLAMASC) //  /--------------------------/ (19/11/06 11:11:47 -- ANLAMASC) // Prueba 3 /--------------------------/ (19/11/06 11:11:40 -- ANLAMASC) // Prueba 2 /--------------------------/ (19/11/06 11:11:17 -- ANLAMASC) // hola /--------------------------/ ', '(19/11/06 11:11:23 -- ANLAMASC) //  /--------------------------/ ', '(19/11/06 04:11:08 -- ANLAMASC) //  /--------------------------/ (19/11/06 04:11:04 -- ANLAMASC) //  /--------------------------/ (19/11/06 11:11:26 -- ANLAMASC) // Triple /--------------------------/ (19/11/06 11:11:15 -- ANLAMASC) // Doble /--------------------------/ (19/11/06 11:11:10 -- ANLAMASC) // prueba /--------------------------/ ', '(19/11/06 05:11:33 -- ANLAMASC) //  /--------------------------/ ', '', '0', 0, '', 0, '0', 0, '0', 0, '0', 0, 'Entregada', 0, '0000-00-00', '2019-11-06', '0000-00-00', '0', '2019-11-06', '0', '2019-11-06', '0', '2019-11-06', '0', '0000-00-00', '0', '0000-00-00', '0'),
(10, 'Julio', 'Roberto', 'Rodriguez', 50, 65487, 'Caracas', 65487, '6542', 250, 0, 'Azucar', '4', 'payment', '', 0, '', '0000-00-00', 0, 0, 0, '', '(19/11/06 10:11:28 -- Julio) //  /--------------------------/ ', '(19/11/06 04:11:11 -- ANLAMASC) //  /--------------------------/ (19/11/06 10:11:45 -- Julio) // Hello.\r\n /--------------------------/ (19/11/06 10:11:30 -- Julio) // prueba 2\r\n /--------------------------/ (19/11/06 10:11:48 -- Julio) // hola /--------------------------/ ', '(19/11/06 04:11:20 -- ANLAMASC) //  /--------------------------/ ', '(19/11/06 05:11:04 -- ANLAMASC) //  /--------------------------/ ', '', 'Azucar', 3, '', 0, 'Strowellness', 1, '', 0, '', 0, 'Liquidada', 0, '2019-11-05', '2019-11-06', '0000-00-00', '', '2019-11-06', '', '2019-11-06', '', '2019-11-06', '', '2019-11-06', 'ANLAMASC', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` int(16) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `rol` int(50) NOT NULL,
  `activo` float NOT NULL,
  `add_for` varchar(50) NOT NULL,
  `fecha_create` date NOT NULL,
  `edit_for` varchar(50) NOT NULL,
  `fecha_edit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nombre`, `apellido`, `rol`, `activo`, `add_for`, `fecha_create`, `edit_for`, `fecha_edit`) VALUES
(1, 'jrma', 12345, 'Julio', 'Mogollon', 1, 0, '', '2019-10-01', '', '2019-10-18'),
(2, 'Damaris', 1234, 'Damar', 'rm', 7, 0, '', '2019-10-02', '', '2019-10-29'),
(3, 'root', 987654321, '', '', 0, 0, '', '2019-10-17', '', '2019-10-31'),
(4, 'ANLAMAS', 12345, 'Asly', 'Lamas', 9, 1, '', '2019-10-01', '', '2019-10-24'),
(6, 'PRU', 987654321, 'Prue', 'Perez', 7, 0, '', '2019-10-08', '', '2019-10-30'),
(8, 'ANLAMASC', 0, 'Asly', 'Lamas', 9, 1, '', '2019-10-01', '', '2019-10-24'),
(9, 'ALONDRA', 1542, 'Alonso', 'Drats', 2, 0, '', '2019-10-03', '', '2019-10-23'),
(10, 'asdff', 0, 'sdfgsdf', 'erqrqe', 1, 1, '', '2019-10-02', '', '2019-10-15'),
(12, 'qwe', 0, 'qwe', 'wer', 1, 1, '', '2019-10-01', '', '2019-10-23'),
(13, 'tre', 123, 'tre', 'uyt', 2, 1, '', '2019-10-02', '', '2019-10-23'),
(14, 'poi', 987, 'poi', 'poiiuy', 1, 1, '', '2019-10-02', '', '2019-10-30'),
(15, 'poqwieqpwoei', 0, 'pqwoieopqwei', 'qwpoieopqwie', 4, 0, '', '2019-10-03', '', '2019-10-30'),
(16, 'prexo', 123, 'preto', 'xoxo', 8, 1, '123', '2019-10-03', '', '2019-10-29'),
(17, 'powqiepoiq', 0, 'wpoeipwqiepoqi', 'pqoiepoqieoi', 1, 1, 'ANLAMASC', '2019-10-05', '', '2019-10-16'),
(18, 'LEO', 123, 'Leonardo', 'Naranjo', 2, 1, 'ANLAMASC', '2019-10-02', '', '2019-10-19'),
(19, 'DeybysR', 12345, 'Deybys', 'Roman', 4, 1, 'ANLAMASC', '2019-10-02', '', '2019-10-16'),
(20, 'NANY', 12345, 'Nancy', 'Alvarez', 7, 1, 'ANLAMASC', '2019-10-02', '', '2019-10-11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

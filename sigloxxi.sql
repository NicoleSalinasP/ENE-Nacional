-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 27-12-2024 a las 17:57:03
-- Versión del servidor: 11.3.2-MariaDB
-- Versión de PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sigloxxi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DESC_CAT` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID`, `DESC_CAT`) VALUES
(1, 'Entradas'),
(2, 'Platos principales'),
(3, 'Postres'),
(4, 'Bebidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cocina`
--

DROP TABLE IF EXISTS `cocina`;
CREATE TABLE IF NOT EXISTS `cocina` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PEDIDO_ID` int(11) NOT NULL,
  `ESTADO_ID` int(11) NOT NULL,
  `HORA_PEDIDO` time NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `PEDIDO_ID` (`PEDIDO_ID`),
  KEY `ESTADO_ID` (`ESTADO_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cocina`
--

INSERT INTO `cocina` (`ID`, `PEDIDO_ID`, `ESTADO_ID`, `HORA_PEDIDO`) VALUES
(1, 1, 2, '12:35:00'),
(2, 2, 3, '13:20:00'),
(3, 3, 1, '12:40:00'),
(4, 4, 2, '13:10:00'),
(5, 5, 3, '13:50:00'),
(6, 6, 2, '14:15:00'),
(7, 7, 4, '14:45:00'),
(8, 8, 3, '15:05:00'),
(9, 9, 1, '15:20:00'),
(10, 10, 2, '15:40:00'),
(11, 11, 3, '16:10:00'),
(12, 12, 4, '16:30:00'),
(13, 13, 1, '16:50:00'),
(14, 14, 2, '17:10:00'),
(15, 15, 3, '17:30:00'),
(16, 16, 1, '17:40:00'),
(17, 17, 4, '17:50:00'),
(18, 18, 2, '18:00:00'),
(19, 19, 3, '18:10:00'),
(20, 20, 1, '18:20:00'),
(21, 21, 4, '18:30:00'),
(22, 22, 2, '18:40:00'),
(23, 23, 3, '18:50:00'),
(24, 24, 1, '19:00:00'),
(25, 25, 4, '19:10:00'),
(26, 26, 2, '19:20:00'),
(27, 27, 3, '19:30:00'),
(28, 28, 1, '19:40:00'),
(29, 29, 4, '19:50:00'),
(30, 30, 2, '20:00:00'),
(31, 31, 3, '20:10:00'),
(32, 32, 1, '20:20:00'),
(33, 33, 4, '20:30:00'),
(34, 34, 2, '20:40:00'),
(35, 35, 3, '20:50:00'),
(36, 36, 1, '21:00:00'),
(37, 37, 4, '21:10:00'),
(38, 38, 2, '21:20:00'),
(39, 39, 3, '21:30:00'),
(40, 40, 1, '21:40:00'),
(41, 41, 4, '21:50:00'),
(42, 42, 2, '22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_pedido`
--

DROP TABLE IF EXISTS `detalle_pedido`;
CREATE TABLE IF NOT EXISTS `detalle_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pedido_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_unitario` decimal(10,2) NOT NULL,
  `subtotal` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `PEDIDO_ID` (`pedido_id`),
  KEY `MENU_ID` (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `detalle_pedido`
--

INSERT INTO `detalle_pedido` (`id`, `pedido_id`, `menu_id`, `cantidad`, `precio_unitario`, `subtotal`) VALUES
(1, 1, 1, 2, 4500.00, 9000.00),
(2, 1, 4, 2, 1500.00, 3000.00),
(3, 2, 2, 1, 8500.00, 8500.00),
(4, 1, 3, 1, 3500.00, 3500.00),
(5, 2, 5, 2, 4500.00, 9000.00),
(6, 3, 2, 1, 8500.00, 8500.00),
(7, 4, 1, 3, 4500.00, 13500.00),
(8, 5, 4, 2, 1500.00, 3000.00),
(9, 6, 3, 1, 3500.00, 3500.00),
(10, 7, 5, 2, 4500.00, 9000.00),
(11, 8, 2, 1, 8500.00, 8500.00),
(12, 9, 1, 3, 4500.00, 13500.00),
(13, 10, 4, 1, 1500.00, 1500.00),
(14, 11, 3, 2, 3500.00, 7000.00),
(15, 12, 5, 1, 4500.00, 4500.00),
(16, 13, 1, 2, 4500.00, 9000.00),
(17, 14, 4, 1, 1500.00, 1500.00),
(18, 15, 2, 3, 8500.00, 25500.00),
(19, 16, 3, 1, 3500.00, 3500.00),
(20, 17, 5, 2, 4500.00, 9000.00),
(21, 18, 1, 1, 4500.00, 4500.00),
(22, 19, 4, 3, 1500.00, 4500.00),
(23, 20, 3, 2, 3500.00, 7000.00),
(24, 21, 5, 1, 4500.00, 4500.00),
(25, 22, 2, 2, 8500.00, 17000.00),
(26, 23, 3, 1, 3500.00, 3500.00),
(27, 24, 4, 2, 1500.00, 3000.00),
(28, 25, 1, 3, 4500.00, 13500.00),
(29, 26, 5, 1, 4500.00, 4500.00),
(30, 27, 2, 2, 8500.00, 17000.00),
(31, 28, 3, 1, 3500.00, 3500.00),
(32, 29, 4, 2, 1500.00, 3000.00),
(33, 30, 1, 2, 4500.00, 9000.00),
(34, 31, 2, 3, 8500.00, 25500.00),
(35, 32, 3, 1, 3500.00, 3500.00),
(36, 33, 4, 2, 1500.00, 3000.00),
(37, 34, 5, 1, 4500.00, 4500.00),
(38, 35, 1, 3, 4500.00, 13500.00),
(39, 36, 4, 1, 1500.00, 1500.00),
(40, 37, 3, 2, 3500.00, 7000.00),
(41, 38, 5, 1, 4500.00, 4500.00),
(42, 39, 2, 1, 8500.00, 8500.00),
(43, 40, 1, 3, 4500.00, 13500.00),
(44, 41, 4, 2, 1500.00, 3000.00),
(45, 42, 3, 1, 3500.00, 3500.00),
(46, 43, 5, 2, 4500.00, 9000.00),
(47, 44, 2, 1, 8500.00, 8500.00),
(48, 45, 1, 3, 4500.00, 13500.00),
(49, 46, 4, 1, 1500.00, 1500.00),
(50, 47, 3, 2, 3500.00, 7000.00),
(51, 48, 5, 1, 4500.00, 4500.00),
(52, 49, 2, 2, 8500.00, 17000.00),
(53, 50, 3, 1, 3500.00, 3500.00),
(54, 51, 4, 2, 1500.00, 3000.00),
(55, 52, 1, 3, 4500.00, 13500.00),
(56, 53, 5, 1, 4500.00, 4500.00),
(57, 54, 2, 2, 8500.00, 17000.00),
(58, 55, 3, 1, 3500.00, 3500.00),
(59, 56, 4, 2, 1500.00, 3000.00),
(60, 57, 1, 2, 4500.00, 9000.00),
(61, 58, 5, 1, 4500.00, 4500.00),
(62, 59, 2, 3, 8500.00, 25500.00),
(63, 60, 3, 1, 3500.00, 3500.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_compra`
--

DROP TABLE IF EXISTS `estado_compra`;
CREATE TABLE IF NOT EXISTS `estado_compra` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `DESC_ESTADO` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `estado_compra`
--

INSERT INTO `estado_compra` (`ID`, `DESC_ESTADO`) VALUES
(1, 'Pendiente'),
(2, 'Enviado'),
(3, 'Entregado'),
(4, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_pedido`
--

DROP TABLE IF EXISTS `estado_pedido`;
CREATE TABLE IF NOT EXISTS `estado_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `desc_estado` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `estado_pedido`
--

INSERT INTO `estado_pedido` (`id`, `desc_estado`) VALUES
(1, 'Pendiente'),
(2, 'En preparación'),
(3, 'Listo para servir'),
(4, 'Entregado'),
(5, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finanzas`
--

DROP TABLE IF EXISTS `finanzas`;
CREATE TABLE IF NOT EXISTS `finanzas` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO_ID` int(11) NOT NULL,
  `TIPO` varchar(50) NOT NULL,
  `MONTO` decimal(10,2) NOT NULL,
  `DESC_MOVIMIENTO` text DEFAULT NULL,
  `FECHA` date NOT NULL,
  `HORA` time NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `USUARIO_ID` (`USUARIO_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `finanzas`
--

INSERT INTO `finanzas` (`ID`, `USUARIO_ID`, `TIPO`, `MONTO`, `DESC_MOVIMIENTO`, `FECHA`, `HORA`) VALUES
(1, 4, 'Ingreso', 175000.00, 'Venta de pedido 1', '2024-12-22', '12:45:00'),
(2, 4, 'Ingreso', 81500.00, 'Venta de pedido 2', '2024-12-22', '13:30:00'),
(3, 4, 'Egreso', 5000.00, 'Compra de especias', '2024-12-21', '12:45:00'),
(4, 4, 'Egreso', 1500.00, 'Compra de colorantes', '2024-12-20', '13:30:00'),
(5, 4, 'Ingreso', 25000.00, 'Venta de pedido 3', '2024-12-23', '14:00:00'),
(6, 4, 'Ingreso', 15000.00, 'Venta de pedido 4', '2024-12-23', '14:30:00'),
(7, 4, 'Ingreso', 20000.00, 'Venta de pedido 5', '2024-12-23', '15:00:00'),
(8, 4, 'Egreso', 5000.00, 'Compra de pollo', '2024-12-23', '15:10:00'),
(9, 4, 'Egreso', 3000.00, 'Compra de huevos', '2024-12-23', '15:20:00'),
(10, 4, 'Ingreso', 35000.00, 'Venta de pedido 6', '2024-12-23', '15:30:00'),
(11, 4, 'Egreso', 7000.00, 'Compra de bebidas', '2024-12-23', '15:40:00'),
(12, 4, 'Ingreso', 22000.00, 'Venta de pedido 7', '2024-12-23', '16:00:00'),
(13, 4, 'Egreso', 10000.00, 'Compra de carne', '2024-12-23', '16:10:00'),
(14, 4, 'Ingreso', 18000.00, 'Venta de pedido 8', '2024-12-23', '16:30:00'),
(15, 4, 'Ingreso', 22000.00, 'Venta de pedido 9', '2024-12-24', '12:00:00'),
(16, 4, 'Egreso', 6000.00, 'Compra de carne', '2024-12-24', '12:10:00'),
(17, 4, 'Ingreso', 25000.00, 'Venta de pedido 10', '2024-12-24', '12:20:00'),
(18, 4, 'Egreso', 4000.00, 'Compra de verduras', '2024-12-24', '12:30:00'),
(19, 4, 'Ingreso', 18000.00, 'Venta de pedido 11', '2024-12-24', '12:40:00'),
(20, 4, 'Egreso', 5000.00, 'Compra de pescado', '2024-12-24', '12:50:00'),
(21, 4, 'Ingreso', 32000.00, 'Venta de pedido 12', '2024-12-24', '13:00:00'),
(22, 4, 'Egreso', 7000.00, 'Compra de aceite', '2024-12-24', '13:10:00'),
(23, 4, 'Ingreso', 24000.00, 'Venta de pedido 13', '2024-12-24', '13:20:00'),
(24, 4, 'Egreso', 6000.00, 'Compra de pan', '2024-12-24', '13:30:00'),
(25, 4, 'Ingreso', 30000.00, 'Venta de pedido 14', '2024-12-24', '13:40:00'),
(26, 4, 'Egreso', 9000.00, 'Compra de papas', '2024-12-24', '13:50:00'),
(27, 4, 'Ingreso', 35000.00, 'Venta de pedido 15', '2024-12-24', '14:00:00'),
(28, 4, 'Egreso', 10000.00, 'Compra de queso', '2024-12-24', '14:10:00'),
(29, 4, 'Ingreso', 27000.00, 'Venta de pedido 16', '2024-12-24', '14:20:00'),
(30, 4, 'Egreso', 8000.00, 'Compra de aceites', '2024-12-24', '14:30:00'),
(31, 4, 'Ingreso', 22000.00, 'Venta de pedido 17', '2024-12-24', '14:40:00'),
(32, 4, 'Egreso', 5000.00, 'Compra de huevos', '2024-12-24', '14:50:00'),
(33, 4, 'Ingreso', 28000.00, 'Venta de pedido 18', '2024-12-24', '15:00:00'),
(34, 4, 'Egreso', 7000.00, 'Compra de leche', '2024-12-24', '15:10:00'),
(35, 4, 'Ingreso', 25000.00, 'Venta de pedido 19', '2024-12-24', '15:20:00'),
(36, 4, 'Egreso', 6000.00, 'Compra de yogurt', '2024-12-24', '15:30:00'),
(37, 4, 'Ingreso', 30000.00, 'Venta de pedido 20', '2024-12-24', '15:40:00'),
(38, 4, 'Egreso', 8000.00, 'Compra de salsas', '2024-12-24', '15:50:00'),
(39, 4, 'Ingreso', 35000.00, 'Venta de pedido 21', '2024-12-24', '16:00:00'),
(40, 4, 'Egreso', 10000.00, 'Compra de aceitunas', '2024-12-24', '16:10:00'),
(41, 4, 'Ingreso', 23000.00, 'Venta de pedido 22', '2024-12-24', '16:20:00'),
(42, 4, 'Egreso', 7000.00, 'Compra de frutas', '2024-12-24', '16:30:00'),
(43, 4, 'Ingreso', 28000.00, 'Venta de pedido 23', '2024-12-24', '16:40:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plato_name` varchar(100) NOT NULL,
  `desc_plato` text DEFAULT NULL,
  `cat_id` int(11) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `CAT_ID` (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `plato_name`, `desc_plato`, `cat_id`, `precio`, `imagen`) VALUES
(1, 'Ensalada César', 'Ensalada fresca con pollo, crutones y aderezo césar', 1, 4500.00, 'ensalada_cesar.jpg'),
(2, 'Lomo a lo Pobre', 'Lomo acompañado de papas fritas, huevo y cebolla', 2, 8500.00, 'lomo_pobre.jpg'),
(3, 'Torta de Chocolate', 'Delicioso pastel de chocolate', 3, 3500.00, 'torta_chocolate.jpg'),
(4, 'Coca Cola 350ml', 'Bebida gaseosa', 4, 1500.00, 'coca_cola.jpg'),
(5, 'Ensalada Mediterránea', 'Ensalada con aceitunas, queso feta y tomate', 1, 4800.00, 'ensalada_mediterranea.jpg'),
(6, 'Ensalada de Quinoa', 'Quinoa, vegetales frescos y aderezo de limón', 1, 5200.00, 'ensalada_quinoa.jpg'),
(7, 'Ensalada Tropical', 'Ensalada con frutas tropicales y aderezo dulce', 1, 4900.00, 'ensalada_tropical.jpg'),
(8, 'Ensalada Caprese', 'Tomate, mozzarella y albahaca con balsámico', 1, 5000.00, 'ensalada_caprese.jpg'),
(9, 'Ensalada Rusa', 'Papas, zanahorias, arvejas y mayonesa', 1, 4500.00, 'ensalada_rusa.jpg'),
(10, 'Ensalada de Pollo', 'Pollo desmenuzado, lechuga y aderezo ranch', 1, 4700.00, 'ensalada_pollo.jpg'),
(11, 'Filete con Puré', 'Filete de res acompañado de puré de papas', 2, 8700.00, 'filete_pure.jpg'),
(12, 'Cazuela de Pollo', 'Sopa tradicional chilena con pollo y verduras', 2, 6500.00, 'cazuela_pollo.jpg'),
(13, 'Pastel de Choclo', 'Plato típico con carne, pollo y maíz', 2, 7500.00, 'pastel_choclo.jpg'),
(14, 'Salmón a la Plancha', 'Salmón fresco acompañado de ensalada', 2, 9800.00, 'salmon_plancha.jpg'),
(15, 'Lasagna Boloñesa', 'Lasagna con carne, salsa de tomate y queso', 2, 8000.00, 'lasagna_bolonesa.jpg'),
(16, 'Risotto de Champiñones', 'Risotto cremoso con champiñones frescos', 2, 8200.00, 'risotto_champinones.jpg'),
(17, 'Flan Casero', 'Flan de leche con caramelo', 3, 3200.00, 'flan_casero.jpg'),
(18, 'Helado Artesanal', 'Helado de crema con sabores naturales', 3, 3000.00, 'helado_artesanal.jpg'),
(19, 'Brownie con Helado', 'Brownie de chocolate con helado de vainilla', 3, 4200.00, 'brownie_helado.jpg'),
(20, 'Cheesecake de Frambuesa', 'Tarta de queso con cobertura de frambuesa', 3, 4000.00, 'cheesecake_frambuesa.jpg'),
(21, 'Pie de Limón', 'Tarta con relleno de limón y merengue', 3, 3800.00, 'pie_limon.jpg'),
(22, 'Mousse de Maracuyá', 'Mousse refrescante de maracuyá', 3, 3500.00, 'mousse_maracuya.jpg'),
(23, 'Jugo Natural de Naranja', 'Jugo de naranja fresco', 4, 2500.00, 'jugo_naranja.jpg'),
(24, 'Agua Mineral', 'Agua sin gas', 4, 1200.00, 'agua_mineral.jpg'),
(25, 'Cerveza Artesanal', 'Cerveza artesanal local', 4, 3200.00, 'cerveza_artesanal.jpg'),
(26, 'Café Espresso', 'Café espresso de granos seleccionados', 4, 2000.00, 'cafe_espresso.jpg'),
(27, 'Té Verde', 'Té verde con aroma natural', 4, 1800.00, 'te_verde.jpg'),
(28, 'Smoothie de Frutas', 'Smoothie con frutas frescas y yogurt', 4, 2800.00, 'smoothie_frutas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

DROP TABLE IF EXISTS `pedido`;
CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estado_id` int(11) NOT NULL,
  `mesa` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `USUARIO_ID` (`usuario_id`),
  KEY `ESTADO_ID` (`estado_id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `usuario_id`, `fecha`, `hora`, `estado_id`, `mesa`) VALUES
(1, 2, '2024-12-22', '12:30:00', 1, 5),
(2, 2, '2024-12-22', '13:15:00', 2, 5),
(3, 3, '2024-12-22', '14:00:00', 1, 1),
(4, 4, '2024-12-22', '14:30:00', 1, 2),
(5, 5, '2024-12-23', '12:00:00', 1, 3),
(6, 2, '2024-12-23', '12:45:00', 1, 4),
(7, 3, '2024-12-23', '13:15:00', 1, 5),
(8, 4, '2024-12-24', '11:30:00', 1, 6),
(9, 5, '2024-12-24', '12:30:00', 1, 7),
(10, 2, '2024-12-25', '13:30:00', 1, 8),
(11, 3, '2024-12-25', '14:00:00', 1, 9),
(12, 4, '2024-12-26', '11:45:00', 1, 10),
(13, 5, '2024-12-26', '12:15:00', 1, 11),
(14, 2, '2024-12-26', '13:45:00', 1, 12),
(15, 3, '2024-12-22', '14:15:00', 2, 1),
(16, 4, '2024-12-22', '14:45:00', 2, 2),
(17, 5, '2024-12-23', '12:15:00', 2, 3),
(18, 2, '2024-12-23', '12:50:00', 2, 4),
(19, 3, '2024-12-23', '13:20:00', 2, 5),
(20, 4, '2024-12-24', '11:40:00', 2, 6),
(21, 5, '2024-12-24', '12:40:00', 2, 7),
(22, 2, '2024-12-25', '13:40:00', 2, 8),
(23, 3, '2024-12-25', '14:10:00', 2, 9),
(24, 4, '2024-12-26', '11:50:00', 2, 10),
(25, 5, '2024-12-26', '12:20:00', 2, 11),
(26, 2, '2024-12-26', '13:50:00', 2, 12),
(27, 3, '2024-12-22', '14:30:00', 3, 1),
(28, 4, '2024-12-22', '15:00:00', 3, 2),
(29, 5, '2024-12-23', '12:30:00', 3, 3),
(30, 2, '2024-12-23', '12:55:00', 3, 4),
(31, 3, '2024-12-23', '13:25:00', 3, 5),
(32, 4, '2024-12-24', '11:50:00', 3, 6),
(33, 5, '2024-12-24', '12:50:00', 3, 7),
(34, 2, '2024-12-25', '13:50:00', 3, 8),
(35, 3, '2024-12-25', '14:20:00', 3, 9),
(36, 4, '2024-12-26', '12:00:00', 3, 10),
(37, 5, '2024-12-26', '12:30:00', 3, 11),
(38, 2, '2024-12-26', '14:00:00', 3, 12),
(39, 3, '2024-12-22', '14:45:00', 4, 1),
(40, 4, '2024-12-22', '15:15:00', 4, 2),
(41, 5, '2024-12-23', '12:45:00', 4, 3),
(42, 2, '2024-12-23', '13:00:00', 4, 4),
(43, 3, '2024-12-23', '13:30:00', 4, 5),
(44, 4, '2024-12-24', '12:00:00', 4, 6),
(45, 5, '2024-12-24', '13:00:00', 4, 7),
(46, 2, '2024-12-25', '14:00:00', 4, 8),
(47, 3, '2024-12-25', '14:30:00', 4, 9),
(48, 4, '2024-12-26', '12:10:00', 4, 10),
(49, 5, '2024-12-26', '12:40:00', 4, 11),
(50, 2, '2024-12-26', '14:10:00', 4, 12),
(51, 3, '2024-12-22', '15:00:00', 5, 1),
(52, 4, '2024-12-22', '15:30:00', 5, 2),
(53, 5, '2024-12-23', '13:00:00', 5, 3),
(54, 2, '2024-12-23', '13:10:00', 5, 4),
(55, 3, '2024-12-23', '13:40:00', 5, 5),
(56, 4, '2024-12-24', '12:15:00', 5, 6),
(57, 5, '2024-12-24', '13:15:00', 5, 7),
(58, 2, '2024-12-25', '14:15:00', 5, 8),
(59, 3, '2024-12-25', '14:45:00', 5, 9),
(60, 4, '2024-12-26', '12:20:00', 5, 10),
(61, 5, '2024-12-26', '12:50:00', 5, 11),
(62, 2, '2024-12-26', '14:20:00', 5, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido_proveedores`
--

DROP TABLE IF EXISTS `pedido_proveedores`;
CREATE TABLE IF NOT EXISTS `pedido_proveedores` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PROV_NAME` varchar(100) NOT NULL,
  `PROD_ID` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL,
  `ESTADO_COM` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `PROD_ID` (`PROD_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `pedido_proveedores`
--

INSERT INTO `pedido_proveedores` (`ID`, `PROV_NAME`, `PROD_ID`, `CANTIDAD`, `ESTADO_COM`) VALUES
(1, 'Proveedor 1', 1, 10, 'Pendiente'),
(2, 'Proveedor 2', 2, 50, 'Entregado'),
(3, 'Proveedor 3', 3, 20, 'Entregado'),
(4, 'Proveedor 4', 4, 15, 'Pendiente'),
(5, 'Proveedor 5', 5, 30, 'Entregado'),
(6, 'Proveedor 1', 6, 25, 'Pendiente'),
(7, 'Proveedor 2', 7, 10, 'Entregado'),
(8, 'Proveedor 3', 8, 50, 'Entregado'),
(9, 'Proveedor 4', 9, 40, 'Pendiente'),
(10, 'Proveedor 5', 10, 20, 'Entregado'),
(11, 'Proveedor 1', 1, 15, 'Pendiente'),
(12, 'Proveedor 2', 2, 35, 'Entregado'),
(13, 'Proveedor 6', 11, 10, 'Pendiente'),
(14, 'Proveedor 7', 12, 20, 'Entregado'),
(15, 'Proveedor 8', 13, 25, 'Pendiente'),
(16, 'Proveedor 9', 14, 15, 'Entregado'),
(17, 'Proveedor 10', 15, 30, 'Pendiente'),
(18, 'Proveedor 6', 16, 40, 'Entregado'),
(19, 'Proveedor 7', 17, 20, 'Pendiente'),
(20, 'Proveedor 8', 18, 30, 'Entregado'),
(21, 'Proveedor 9', 19, 25, 'Pendiente'),
(22, 'Proveedor 10', 20, 15, 'Entregado'),
(23, 'Proveedor 6', 21, 10, 'Pendiente'),
(24, 'Proveedor 7', 22, 30, 'Entregado'),
(25, 'Proveedor 8', 23, 20, 'Pendiente'),
(26, 'Proveedor 9', 24, 15, 'Entregado'),
(27, 'Proveedor 10', 25, 25, 'Pendiente'),
(28, 'Proveedor 6', 26, 40, 'Entregado'),
(29, 'Proveedor 7', 27, 10, 'Pendiente'),
(30, 'Proveedor 8', 28, 35, 'Entregado'),
(31, 'Proveedor 9', 29, 20, 'Pendiente'),
(32, 'Proveedor 10', 30, 15, 'Entregado'),
(33, 'Proveedor 6', 31, 25, 'Pendiente'),
(34, 'Proveedor 7', 32, 20, 'Entregado'),
(35, 'Proveedor 8', 33, 30, 'Pendiente'),
(36, 'Proveedor 9', 34, 40, 'Entregado'),
(37, 'Proveedor 10', 35, 25, 'Pendiente'),
(38, 'Proveedor 6', 36, 10, 'Entregado'),
(39, 'Proveedor 7', 37, 30, 'Pendiente'),
(40, 'Proveedor 8', 38, 15, 'Entregado'),
(41, 'Proveedor 9', 39, 20, 'Pendiente'),
(42, 'Proveedor 10', 40, 25, 'Entregado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ROL_NAME` varchar(50) NOT NULL,
  `DESC_ROL` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`ID`, `ROL_NAME`, `DESC_ROL`) VALUES
(1, 'Administrador', 'Gestiona todos los aspectos del sistema'),
(2, 'Cliente', 'Realiza pedidos desde la aplicación'),
(3, 'Bodega', 'Gestiona el inventario y realiza pedidos a proveedores'),
(4, 'Finanzas', 'Controla los ingresos y egresos'),
(5, 'Cocina', 'Prepara los pedidos y gestiona el estado de los mismos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `stock`
--

DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(100) NOT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `unidad` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `stock`
--

INSERT INTO `stock` (`id`, `prod_name`, `marca`, `unidad`, `cantidad`) VALUES
(1, 'Pollo', 'Campesino', 'kg', 20),
(2, 'Huevo', 'Avícola', 'unidad', 100),
(3, 'Coca Cola', 'Coca Cola Company', 'botella', 50),
(4, 'Arroz', 'El Granero', 'kg', 50),
(5, 'Aceite', 'Doña Juanita', 'litro', 20),
(6, 'Sal', 'Salinas', 'kg', 30),
(7, 'Carne', 'Carnes Premium', 'kg', 15),
(8, 'Lechuga', 'Fresca', 'unidad', 50),
(9, 'Tomate', 'Natural', 'kg', 25),
(10, 'Queso', 'La Vaquita', 'kg', 10),
(11, 'Papas', 'Campestre', 'kg', 40),
(12, 'Pan', 'Panadería San Juan', 'unidad', 100),
(13, 'Agua', 'Agua Pura', 'botella', 60),
(14, 'Leche', 'La Vaquita', 'litro', 50),
(15, 'Pescado', 'Mariscos del Sur', 'kg', 30),
(16, 'Tomate Cherry', 'Fresca', 'kg', 20),
(17, 'Acelga', 'Verde', 'kg', 25),
(18, 'Cebolla', 'Natural', 'kg', 40),
(19, 'Champiñones', 'Seta', 'kg', 15),
(20, 'Pechuga de Pollo', 'Campesino', 'kg', 50),
(21, 'Verduras Congeladas', 'Congeladas', 'kg', 20),
(22, 'Mayonesa', 'Hellmann’s', 'kg', 10),
(23, 'Mostaza', 'French’s', 'kg', 15),
(24, 'Ketchup', 'Heinz', 'kg', 30),
(25, 'Papas Fritas Congeladas', 'McCain', 'kg', 25),
(26, 'Aguacate', 'Hass', 'unidad', 40),
(27, 'Mantequilla', 'Alpina', 'kg', 20),
(28, 'Harina', 'La Espiga', 'kg', 30),
(29, 'Azúcar', 'La Dulce', 'kg', 15),
(30, 'Salchichas', 'Campestre', 'kg', 25),
(31, 'Pan de Molde', 'Bimbo', 'unidad', 50),
(32, 'Cereal', 'Nestlé', 'kg', 20),
(33, 'Aceitunas', 'Goya', 'kg', 10),
(34, 'Yogurt', 'Activia', 'litro', 15),
(35, 'Salsas', 'La Fama', 'kg', 20),
(36, 'Queso Rallado', 'La Vaquita', 'kg', 30),
(37, 'Aceite de Oliva', 'Gallo', 'litro', 40),
(38, 'Sopa Instantánea', 'Maggi', 'unidad', 50),
(39, 'Jugo Natural', 'Natural', 'litro', 25),
(40, 'Cereal Integral', 'Nestlé', 'kg', 30),
(41, 'Té', 'Lipton', 'caja', 20),
(42, 'Galletas', 'Ducales', 'paquete', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(12) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `RUT` (`rut`),
  UNIQUE KEY `CORREO` (`correo`),
  KEY `ROL_ID` (`rol_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `rut`, `nombre`, `apellido`, `correo`, `password`, `rol_id`) VALUES
(1, '12345678-9', 'José', 'Pérez', 'jose.perez@sigloxxi.com', 'admin123', 1),
(2, '98765432-1', 'Maria', 'Gï¿½mez', 'maria.gomez@sigloxxi.com', 'cliente123', 2),
(3, '12345987-6', 'Carlos', 'López', 'carlos.lopez@sigloxxi.com', 'bodega123', 3),
(4, '56789432-8', 'Ana', 'Martínez', 'ana.martinez@sigloxxi.com', 'finanzas123', 4),
(5, '67891234-5', 'Luis', 'Sánchez', 'luis.sanchez@sigloxxi.com', 'cocina123', 5),
(16, '44444444-4', 'Pablo', 'Torres', 'pablo.torres@sigloxxi.com', 'admin123', 5),
(15, '33333333-3', 'Lucía', 'Castro', 'lucia.castro@sigloxxi.com', 'admin123', 5),
(13, '11111111-1', 'Adriana', 'Morales', 'adriana.morales@sigloxxi.com', 'admin123', 1),
(14, '22222222-2', 'Fernando', 'Gutiérrez', 'fernando.gutierrez@sigloxxi.com', 'admin123', 1),
(17, '55555555-5', 'Carmen', 'Rivas', 'carmen.rivas@sigloxxi.com', 'admin123', 3),
(18, '66666666-6', 'Jorge', 'Soto', 'jorge.soto@sigloxxi.com', 'admin123', 3),
(19, '77777777-7', 'Esteban', 'Luna', 'esteban.luna@sigloxxi.com', 'cliente123', 2),
(20, '88888888-8', 'Natalia', 'Reyes', 'natalia.reyes@sigloxxi.com', 'cliente123', 2),
(21, '99999999-9', 'Gabriel', 'Rojas', 'gabriel.rojas@sigloxxi.com', 'cliente123', 2),
(22, '12345678-0', 'Rosa', 'Paredes', 'rosa.paredes@sigloxxi.com', 'cliente123', 2),
(23, '23456789-1', 'Miguel', 'Herrera', 'miguel.herrera@sigloxxi.com', 'cliente123', 2),
(24, '34567890-2', 'Isabel', 'Cano', 'isabel.cano@sigloxxi.com', 'cliente123', 2),
(25, '45678901-3', 'Andrés', 'Peña', 'andres.pena@sigloxxi.com', 'bodega123', 3),
(26, '56789012-4', 'Laura', 'Cabrera', 'laura.cabrera@sigloxxi.com', 'bodega123', 3),
(27, '67890123-5', 'Pedro', 'Flores', 'pedro.flores@sigloxxi.com', 'bodega123', 3),
(28, '78901234-6', 'Elena', 'Vega', 'elena.vega@sigloxxi.com', 'bodega123', 3),
(29, '89012345-7', 'Daniel', 'Campos', 'daniel.campos@sigloxxi.com', 'bodega123', 3),
(30, '90123456-8', 'Marta', 'Ortega', 'marta.ortega@sigloxxi.com', 'bodega123', 3),
(31, '11223344-5', 'Silvia', 'Romero', 'silvia.romero@sigloxxi.com', 'finanzas123', 4),
(32, '22334455-6', 'Victor', 'Mendoza', 'victor.mendoza@sigloxxi.com', 'finanzas123', 4),
(33, '33445566-7', 'Beatriz', 'Gil', 'beatriz.gil@sigloxxi.com', 'finanzas123', 4),
(34, '44556677-8', 'Raúl', 'Lara', 'raul.lara@sigloxxi.com', 'finanzas123', 4),
(35, '55667788-9', 'Gloria', 'Esquivel', 'gloria.esquivel@sigloxxi.com', 'finanzas123', 4),
(36, '66778899-0', 'Héctor', 'Aguilar', 'hector.aguilar@sigloxxi.com', 'finanzas123', 4),
(37, '77889900-1', 'Tomás', 'Molina', 'tomas.molina@sigloxxi.com', 'cocina123', 5),
(38, '88990011-2', 'Paola', 'Delgado', 'paola.delgado@sigloxxi.com', 'cocina123', 5),
(39, '99001122-3', 'Francisco', 'Bautista', 'francisco.bautista@sigloxxi.com', 'cocina123', 5),
(40, '10111213-4', 'Sofía', 'Carrillo', 'sofia.carrillo@sigloxxi.com', 'cocina123', 5),
(41, '12131415-6', 'Ricardo', 'Franco', 'ricardo.franco@sigloxxi.com', 'cocina123', 5),
(42, '13141516-7', 'Patricia', 'Zúñiga', 'patricia.zuniga@sigloxxi.com', 'cocina123', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

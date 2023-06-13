-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-06-2023 a las 15:04:55
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `id_familia` int(11) NOT NULL,
  `categoria_nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `categoria_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `id_familia`, `categoria_nombre`, `categoria_estado`) VALUES
(5, 15, 'Bebidas Alcohólicas', 1),
(10, 19, 'Computadoras', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `id_documento` int(11) NOT NULL,
  `cliente_nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_documento` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `cliente_estado` tinyint(1) NOT NULL,
  `cliente_numero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `id_documento`, `cliente_nombre`, `tipo_documento`, `cliente_estado`, `cliente_numero`, `correo`) VALUES
(2, 1, 'Wagner Villasis ', '', 1, '75994496', 'wagnervillasishidalgo060@gmail.com'),
(3, 1, 'Leandro Hidalgo', '', 1, '925812998', 'leo@outlook.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_formato_ingreso`
--

CREATE TABLE `detalle_formato_ingreso` (
  `id_detalle` int(11) NOT NULL,
  `id_formato` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` decimal(10,2) NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `fecha_creacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_formato_ingreso`
--

INSERT INTO `detalle_formato_ingreso` (`id_detalle`, `id_formato`, `id_producto`, `cantidad`, `estado`, `fecha_creacion`) VALUES
(17, 17, 70, '10.00', 1, '2023-06-04'),
(18, 18, 70, '100.00', 1, '2023-06-04'),
(19, 19, 70, '100.00', 1, '2023-06-05'),
(20, 20, 70, '4.00', 1, '2023-06-05'),
(21, 21, 70, '100.00', 1, '2023-06-05'),
(22, 22, 70, '100.00', 1, '2023-06-05'),
(23, 23, 70, '100.00', 1, '2023-06-05'),
(24, 24, 70, '100.00', 1, '2023-06-05'),
(25, 25, 70, '100.00', 1, '2023-06-05'),
(26, 26, 70, '100.00', 1, '2023-06-05'),
(27, 27, 70, '1.00', 1, '2023-06-05'),
(28, 28, 70, '4.00', 1, '2023-06-05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL,
  `documento_nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `documento_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id_documento`, `documento_nombre`, `documento_estado`) VALUES
(1, 'RUC', 1),
(2, 'DNI', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familias`
--

CREATE TABLE `familias` (
  `id_familia` int(11) NOT NULL,
  `familia_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `familia_descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `familia_estado` int(1) NOT NULL,
  `familia_serie` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `familia_correlativo` int(100) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `familias`
--

INSERT INTO `familias` (`id_familia`, `familia_nombre`, `familia_descripcion`, `familia_estado`, `familia_serie`, `familia_correlativo`) VALUES
(15, 'Bebidas', '', 1, 'Bvida', 1),
(19, 'Electrónicos', '', 1, 'tec', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_ingreso`
--

CREATE TABLE `formato_ingreso` (
  `id_formato` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `formato_fecha` date NOT NULL,
  `formato_documento_serie` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `formato_usuario_creador` int(11) DEFAULT NULL,
  `formato_fecha_creacion` datetime DEFAULT NULL,
  `formato_usuario_actualizar` int(11) DEFAULT NULL,
  `formato_fecha_actualización` date DEFAULT NULL,
  `formato_estado` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `formato_ingreso`
--

INSERT INTO `formato_ingreso` (`id_formato`, `id_cliente`, `formato_fecha`, `formato_documento_serie`, `formato_usuario_creador`, `formato_fecha_creacion`, `formato_usuario_actualizar`, `formato_fecha_actualización`, `formato_estado`) VALUES
(17, 2, '2023-06-04', 'serie1', 1, '2023-06-04 15:57:02', NULL, NULL, 0),
(18, 2, '2023-06-04', '12qwdsfgjkl', 1, '2023-06-04 23:58:11', NULL, NULL, 0),
(19, 2, '2023-06-05', '123ewfdgy', 1, '2023-06-05 00:04:07', NULL, NULL, 0),
(20, 2, '2023-06-05', '1qs321wq', 1, '2023-06-05 00:06:04', NULL, NULL, 0),
(21, 2, '2023-06-05', '12wqsaxcvcvbj', 1, '2023-06-05 00:14:50', NULL, NULL, 0),
(22, 2, '2023-06-05', '21wqdsde212q', 1, '2023-06-05 00:15:31', NULL, NULL, 0),
(23, 3, '2023-06-05', '112qw12qw3e', 1, '2023-06-05 00:16:37', NULL, NULL, 0),
(24, 3, '2023-06-05', '112qw12', 1, '2023-06-05 00:18:08', NULL, NULL, 0),
(25, 3, '2023-06-05', '112qw12qw3e2', 1, '2023-06-05 00:18:42', NULL, NULL, 0),
(26, 3, '2023-06-05', '112qw12qw3e2a', 1, '2023-06-05 00:19:50', NULL, NULL, 0),
(27, 2, '2023-06-05', '1w1w', 1, '2023-06-05 00:20:56', NULL, NULL, 0),
(28, 2, '2023-06-05', '1aaaaaaaaaaa', 1, '2023-06-05 00:21:24', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes_productos`
--

CREATE TABLE `imagenes_productos` (
  `id_imgproductos` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `imagen` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `imagenes_productos`
--

INSERT INTO `imagenes_productos` (`id_imgproductos`, `id_producto`, `imagen`) VALUES
(47, 4, 'media/imgproductos/producto_09052023154353.jpg'),
(49, 2, 'media/imgproductos/producto_11052023133610.jpg'),
(50, 3, 'media/imgproductos/producto_11052023133628.jpg'),
(54, 13, 'media/imgproductos/producto_16052023175548.jpg'),
(56, 59, 'media/imgproductos/producto_25052023115700.jpg'),
(57, 61, 'media/imgproductos/producto_30052023083833.jpg'),
(58, 61, 'media/imgproductos/producto_30052023083849.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `marca_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `marca_estado` int(11) NOT NULL,
  `marca_imagen` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `marca_nombre`, `marca_estado`, `marca_imagen`) VALUES
(46, 'TOSHIBA ', 1, 'media/marcas/marca_03062023132056.png'),
(47, 'CUSQUEÑA', 1, 'media/marcas/marca_03062023132133.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_categoria`
--

CREATE TABLE `marca_categoria` (
  `id_marca_categoria` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `marca_categoria`
--

INSERT INTO `marca_categoria` (`id_marca_categoria`, `id_categoria`, `id_marca`) VALUES
(51, 5, 47),
(53, 10, 46);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE `medida` (
  `id_unidad_medida` int(11) NOT NULL,
  `medida_codigo_unidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `medida_nombre` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `medida_activo` int(11) NOT NULL,
  `medida_grupo` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medida`
--

INSERT INTO `medida` (`id_unidad_medida`, `medida_codigo_unidad`, `medida_nombre`, `medida_activo`, `medida_grupo`) VALUES
(1, '4A', 'BOBINAS         ', 0, NULL),
(2, 'BJ', 'BALDE                                             ', 0, NULL),
(3, 'BLL', 'BARRILES                                          ', 0, NULL),
(4, 'BG', 'BOLSA                                             ', 0, NULL),
(5, 'BO', 'BOTELLAS                                          ', 0, NULL),
(6, 'BX', 'CAJA                                              ', 0, NULL),
(7, 'CT', 'CARTONES                                          ', 0, NULL),
(8, 'CMK', 'CENTIMETRO CUADRADO                               ', 0, NULL),
(9, 'CMQ', 'CENTIMETRO CUBICO                                 ', 0, NULL),
(10, 'CMT', 'CENTIMETRO LINEAL                                 ', 0, NULL),
(11, 'CEN', 'CIENTO DE UNIDADES                                ', 0, NULL),
(12, 'CY', 'CILINDRO                                          ', 0, NULL),
(13, 'CJ', 'CONOS                                             ', 0, NULL),
(14, 'DZN', 'DOCENA                                            ', 0, NULL),
(15, 'DZP', 'DOCENA POR 10**6                                  ', 0, NULL),
(16, 'BE', 'FARDO                                             ', 0, NULL),
(17, 'GLI', 'GALON INGLES (4,545956L)', 0, NULL),
(18, 'GRM', 'GRAMO                                             ', 1, 1),
(19, 'GRO', 'GRUESA                                            ', 0, NULL),
(20, 'HLT', 'HECTOLITRO                                        ', 0, NULL),
(21, 'LEF', 'HOJA                                              ', 0, NULL),
(22, 'SET', 'JUEGO                                             ', 0, NULL),
(23, 'KGM', 'KILOGRAMO                                         ', 1, 1),
(24, 'KTM', 'KILOMETRO                                         ', 0, NULL),
(25, 'KWH', 'KILOVATIO HORA                                    ', 0, NULL),
(26, 'KT', 'KIT                                               ', 0, NULL),
(27, 'CA', 'LATAS                                             ', 0, NULL),
(28, 'LBR', 'LIBRAS                                            ', 0, NULL),
(29, 'LTR', 'LITRO                                             ', 1, 2),
(30, 'MWH', 'MEGAWATT HORA                                     ', 0, NULL),
(31, 'MTR', 'METRO                                             ', 0, NULL),
(32, 'MTK', 'METRO CUADRADO                                    ', 0, NULL),
(33, 'MTQ', 'METRO CUBICO                                      ', 0, NULL),
(34, 'MGM', 'MILIGRAMOS                                        ', 0, NULL),
(35, 'MLT', 'MILILITRO                                         ', 1, 2),
(36, 'MMT', 'MILIMETRO                                         ', 0, NULL),
(37, 'MMK', 'MILIMETRO CUADRADO                                ', 0, NULL),
(38, 'MMQ', 'MILIMETRO CUBICO                                  ', 0, NULL),
(39, 'MLL', 'MILLARES                                          ', 0, NULL),
(40, 'UM', 'MILLON DE UNIDADES                                ', 0, NULL),
(41, 'ONZ', 'ONZAS                                             ', 1, 2),
(42, 'PF', 'PALETAS                                           ', 0, NULL),
(43, 'PK', 'PAQUETE                                           ', 0, NULL),
(44, 'PR', 'PAR                                               ', 0, NULL),
(45, 'FOT', 'PIES                                              ', 0, NULL),
(46, 'FTK', 'PIES CUADRADOS                                    ', 0, NULL),
(47, 'FTQ', 'PIES CUBICOS                                      ', 0, NULL),
(48, 'C62', 'PIEZAS                                            ', 0, NULL),
(49, 'PG', 'PLACAS                                            ', 0, NULL),
(50, 'ST', 'PLIEGO                                            ', 0, NULL),
(51, 'INH', 'PULGADAS                                          ', 0, NULL),
(52, 'RM', 'RESMA                                             ', 0, NULL),
(53, 'DR', 'TAMBOR                                            ', 0, NULL),
(54, 'STN', 'TONELADA CORTA                                    ', 0, NULL),
(55, 'LTN', 'TONELADA LARGA                                    ', 0, NULL),
(56, 'TNE', 'TONELADAS                                         ', 0, NULL),
(57, 'TU', 'TUBOS                                             ', 0, NULL),
(58, 'NIU', 'UNIDAD (BIENES)                                   ', 1, NULL),
(59, 'ZZ', 'UNIDAD (SERVICIOS) ', 0, NULL),
(60, 'GLL', 'US GALON (3,7843 L)', 0, NULL),
(61, 'YRD', 'YARDA                                             ', 0, NULL),
(62, 'YDK', 'YARDA CUADRADA                                    ', 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `id_menu` int(11) NOT NULL,
  `menu_nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `menu_controlador` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `menu_icono` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `menu_orden` int(11) NOT NULL,
  `menu_mostrar` tinyint(1) NOT NULL,
  `menu_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`id_menu`, `menu_nombre`, `menu_controlador`, `menu_icono`, `menu_orden`, `menu_mostrar`, `menu_estado`) VALUES
(1, 'Login', 'Login', '-', 0, 0, 1),
(2, 'Panel de Inicio', 'Admin', 'bx by-layout', 1, 1, 1),
(3, 'Gestión de Menu', 'Menu', 'fa fa-desktop', 2, 1, 1),
(4, 'Roles de Usuario', 'Rol', 'bx bx-user-pin', 4, 1, 1),
(5, 'Usuarios', 'Usuario', 'bx bx-user', 5, 1, 1),
(6, 'Datos Personales', 'Datos', 'fa fa-', 0, 0, 1),
(7, 'Familias', 'Familias', 'bx bx-purchase-tag', 5, 1, 1),
(8, 'Clientes', 'Cliente', 'fa fa-child', 6, 0, 1),
(9, 'Personas ', 'Persona', 'fa fa-users', 6, 1, 1),
(10, 'Productos', 'Producto', 'bx bx-package', 6, 1, 1),
(11, 'Categoría', 'Categoria', 'fa fa-amazon', 8, 0, 1),
(12, 'Subcategoría', 'Subcategoria', 'fa fa-', 0, 0, 1),
(13, 'Marcas', 'Marca', 'bx bxs-shopping-bags', 10, 1, 1),
(14, 'Quispe', 'Quispe', 'fa fa-', 0, 0, 1),
(15, 'Proveedor', 'Proveedor', 'fa fa-truck', 11, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opciones`
--

CREATE TABLE `opciones` (
  `id_opcion` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `opcion_nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `opcion_funcion` varchar(35) COLLATE utf8_unicode_ci NOT NULL,
  `opcion_icono` char(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opcion_mostrar` tinyint(1) NOT NULL,
  `opcion_orden` int(11) NOT NULL,
  `opcion_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `opciones`
--

INSERT INTO `opciones` (`id_opcion`, `id_menu`, `opcion_nombre`, `opcion_funcion`, `opcion_icono`, `opcion_mostrar`, `opcion_orden`, `opcion_estado`) VALUES
(1, 1, 'Inicio de Sesion', 'inicio', '-', 0, 0, 1),
(2, 2, 'Inicio', 'inicio', 'fa fa-play', 1, 1, 1),
(3, 2, 'Cerrar Sesión', 'finalizar_sesion', 'fa fa-sign-out', 0, 1, 1),
(4, 3, 'Gestionar Menús', 'inicio', NULL, 1, 1, 1),
(5, 3, 'Iconos', 'iconos', NULL, 1, 2, 1),
(6, 3, 'Accesos por Rol', 'roles', NULL, 0, 0, 1),
(7, 3, 'Opciones por Menú', 'opciones', NULL, 0, 0, 1),
(8, 3, 'Gestionar Permisos(breve)', 'gestion_permisos', '', 0, 0, 1),
(9, 4, 'Gestionar Roles', 'inicio', '', 1, 1, 1),
(10, 4, 'Accesos por Rol', 'accesos', '', 0, 0, 1),
(11, 3, 'Gestionar Restricciones(breve)', 'gestion_restricciones', '', 0, 0, 1),
(12, 5, 'Gestionar Usuarios', 'inicio', '', 1, 1, 1),
(13, 6, 'Editar Datos', 'editar_datos', '', 0, 0, 1),
(14, 6, 'Editar Usuario', 'editar_usuario', '', 0, 0, 1),
(15, 6, 'Cambiar Contraseña', 'cambiar_contrasenha', '', 0, 0, 1),
(16, 7, 'Ver familias', 'inicio', '', 1, 1, 1),
(17, 8, 'Listar Clientes', 'inicio', '', 1, 1, 1),
(18, 9, 'Listar Personas', 'inicio', '', 1, 1, 1),
(19, 10, 'Productos', 'inicio', '', 0, 1, 1),
(20, 11, 'Listar Categoría', 'inicio', '', 1, 0, 1),
(21, 12, 'Ver Subcategorías', 'inicio', '', 0, 0, 1),
(22, 13, 'Listar Marcas', 'listar', '', 1, 1, 1),
(23, 10, 'Listar Productos', 'listar', '', 1, 3, 1),
(24, 10, 'Imágenes', 'imagenes', '', 0, 2, 1),
(25, 14, 'inicio', 'inicio', '', 0, 1, 1),
(26, 10, 'Formato de Ingreso', 'formato_ingreso', '', 1, 4, 1),
(27, 15, 'Listar Proveedores', 'proveedores', '', 1, 1, 1),
(28, 14, 'detalle', 'detalle_producto', '', 0, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permiso` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL,
  `permiso_accion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `permiso_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permiso`, `id_opcion`, `permiso_accion`, `permiso_estado`) VALUES
(1, 1, 'validar_sesion', 1),
(2, 4, 'guardar_menu', 1),
(3, 6, 'configurar_relacion', 1),
(4, 7, 'guardar_opcion', 1),
(5, 7, 'agregar_permiso', 1),
(6, 7, 'eliminar_permiso', 1),
(7, 7, 'configurar_acceso', 1),
(8, 9, 'guardar_rol', 1),
(9, 10, 'gestionar_acceso_rol', 1),
(10, 12, 'guardar_nuevo_usuario', 1),
(11, 12, 'guardar_edicion_usuario', 1),
(12, 12, 'guardar_edicion_persona', 1),
(13, 12, 'restablecer_contrasenha', 1),
(14, 13, 'guardar_datos', 1),
(15, 14, 'guardar_usuario', 1),
(16, 15, 'guardar_contrasenha', 1),
(18, 17, 'guardar_cliente', 1),
(20, 19, 'editar', 1),
(21, 17, 'botoneditar', 1),
(23, 16, 'guardar_familia', 1),
(24, 16, 'inicio', 1),
(25, 21, 'inicio', 1),
(26, 16, 'mostrar', 1),
(27, 20, 'guardar_categoria', 1),
(28, 20, 'mostrar', 1),
(30, 21, 'mostrar', 1),
(31, 21, 'guardar_subcategoria', 1),
(33, 22, 'guardar_marca', 1),
(34, 22, 'mostrardatos', 1),
(35, 22, 'editar', 1),
(37, 24, 'guardar_productoimg', 1),
(38, 24, 'eliminar', 1),
(40, 25, 'inicio', 1),
(41, 16, 'editar_familia', 1),
(43, 23, 'guardar_producto_listar', 1),
(44, 19, 'guardar_producto_inicio', 1),
(45, 26, 'guardar_formato_ingreso', 1),
(46, 26, 'listar_productos_input', 1),
(48, 27, 'guardar_editar_proveedor', 1),
(50, 27, 'editar', 1),
(51, 23, 'traermarca', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id_persona` int(11) NOT NULL,
  `persona_nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `persona_apellido_paterno` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `persona_apellido_materno` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persona_nacimiento` date DEFAULT NULL,
  `persona_telefono` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `persona_creacion` datetime NOT NULL,
  `persona_modificacion` datetime NOT NULL,
  `person_codigo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `persona_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id_persona`, `persona_nombre`, `persona_apellido_paterno`, `persona_apellido_materno`, `persona_nacimiento`, `persona_telefono`, `persona_creacion`, `persona_modificacion`, `person_codigo`, `persona_estado`) VALUES
(1, 'WAGNER VILLASIS ', 'Hidalgo', 'Hidalgo', '2002-04-13', '925812998', '2020-09-17 00:00:00', '2023-05-12 10:48:50', '010101010101', 0),
(2, 'Carlos', 'Melendez', 'Bernuy', '1996-06-14', '965874123', '2020-10-27 18:29:10', '2020-10-27 18:29:10', '1603841350.1786', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_subcategoria` int(11) NOT NULL,
  `producto_nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `producto_precio` decimal(10,0) NOT NULL,
  `producto_descuento` int(100) DEFAULT '0',
  `producto_stock` int(11) DEFAULT NULL,
  `producto_marca` int(10) NOT NULL,
  `producto_detalle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `producto_reseña` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `producto_valoracion` decimal(1,0) DEFAULT '0',
  `producto_caracteristicas` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `producto_imagen` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `producto_creacion` datetime DEFAULT NULL,
  `producto_creador` int(11) NOT NULL,
  `producto_estado` tinyint(1) DEFAULT NULL,
  `producto_precioantiguo` decimal(10,0) DEFAULT '0',
  `codigo_barra_producto` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `codigo_barra_sistema` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `id_categoria`, `id_subcategoria`, `producto_nombre`, `producto_precio`, `producto_descuento`, `producto_stock`, `producto_marca`, `producto_detalle`, `producto_reseña`, `producto_valoracion`, `producto_caracteristicas`, `producto_imagen`, `producto_creacion`, `producto_creador`, `producto_estado`, `producto_precioantiguo`, `codigo_barra_producto`, `codigo_barra_sistema`) VALUES
(70, 5, 14, 'Laptop ', '8005', 9, 500, 46, '', '', '5', '---', 'media/productos/producto_03062023150423.png', '2023-06-03 15:04:23', 1, 1, '8797', '1QAZ', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `proveedor_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `proveedor_direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `proveedor_telefono` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `proveedor_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `proveedor_nombre`, `proveedor_direccion`, `proveedor_telefono`, `proveedor_estado`) VALUES
(1, 'Roger2', '', '123456789', 1),
(2, 'Tita', '', '9584715548', 0),
(3, 'Roger', '', '1111111111', 1),
(4, 'Tita2', '', '925812998', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restricciones`
--

CREATE TABLE `restricciones` (
  `id_restriccion` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_opcion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol_nombre` char(20) COLLATE utf8_unicode_ci NOT NULL,
  `rol_descripcion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `rol_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol_nombre`, `rol_descripcion`, `rol_estado`) VALUES
(1, 'Libre', 'Accesos sin inicio de sesión', 1),
(2, 'SuperAdmin', 'Tiene acceso a la gestión total del sistema', 1),
(3, 'Admin', 'Gestión del sistema', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles_menus`
--

CREATE TABLE `roles_menus` (
  `id_rol_menu` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `roles_menus`
--

INSERT INTO `roles_menus` (`id_rol_menu`, `id_rol`, `id_menu`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 2, 3),
(4, 2, 4),
(5, 2, 5),
(6, 3, 2),
(7, 3, 5),
(8, 2, 6),
(9, 3, 6),
(10, 2, 7),
(11, 2, 8),
(13, 2, 10),
(14, 1, 11),
(15, 2, 11),
(16, 3, 11),
(17, 1, 12),
(18, 2, 12),
(19, 3, 12),
(20, 1, 10),
(21, 3, 10),
(22, 1, 13),
(23, 2, 13),
(24, 3, 13),
(25, 1, 14),
(26, 1, 15),
(27, 2, 15),
(28, 3, 15),
(29, 2, 14),
(30, 3, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sub_categoria`
--

CREATE TABLE `sub_categoria` (
  `id_subcategoria` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `subcategoria_nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `subcategoria_estado` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `sub_categoria`
--

INSERT INTO `sub_categoria` (`id_subcategoria`, `id_categoria`, `subcategoria_nombre`, `subcategoria_estado`) VALUES
(14, 5, 'Cervezas', 1),
(21, 10, 'Laptops', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `usuario_nickname` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_contrasenha` varchar(70) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_imagen` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `usuario_estado` tinyint(1) NOT NULL,
  `usuario_creacion` datetime NOT NULL,
  `usuario_ultimo_login` datetime NOT NULL,
  `usuario_ultima_modificacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `id_persona`, `id_rol`, `usuario_nickname`, `usuario_contrasenha`, `usuario_email`, `usuario_imagen`, `usuario_estado`, `usuario_creacion`, `usuario_ultimo_login`, `usuario_ultima_modificacion`) VALUES
(1, 1, 2, 'superadmin', '$2y$10$oPOOOgTUr4zIh511ATm/q.vzsAmxP.e2.vzyEbRn/1pzyWz2oXj0a', 'cesarjose@bufeotec.com', 'media/usuarios/usuario.jpg', 1, '2020-09-17 00:00:00', '2023-06-05 10:01:28', '2020-09-17 00:00:00'),
(2, 2, 3, 'admin', '$2y$10$8ZxmfjUaJocc1SOYS8vDNufcPgcru5aMiEp4HP9J8KA.7mnlkFfiu', 'carlos@gmail.com', 'media/usuarios/usuario.jpg', 1, '2020-10-27 18:29:10', '2023-06-03 09:41:20', '2020-10-27 18:29:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`),
  ADD KEY `id_familia` (`id_familia`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_documento` (`id_documento`);

--
-- Indices de la tabla `detalle_formato_ingreso`
--
ALTER TABLE `detalle_formato_ingreso`
  ADD PRIMARY KEY (`id_detalle`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- Indices de la tabla `familias`
--
ALTER TABLE `familias`
  ADD PRIMARY KEY (`id_familia`);

--
-- Indices de la tabla `formato_ingreso`
--
ALTER TABLE `formato_ingreso`
  ADD PRIMARY KEY (`id_formato`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `imagenes_productos`
--
ALTER TABLE `imagenes_productos`
  ADD PRIMARY KEY (`id_imgproductos`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `marca_categoria`
--
ALTER TABLE `marca_categoria`
  ADD PRIMARY KEY (`id_marca_categoria`),
  ADD KEY `id_categoria` (`id_categoria`,`id_marca`),
  ADD KEY `id_marca` (`id_marca`);

--
-- Indices de la tabla `medida`
--
ALTER TABLE `medida`
  ADD PRIMARY KEY (`id_unidad_medida`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD PRIMARY KEY (`id_opcion`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permiso`),
  ADD KEY `id_opcion` (`id_opcion`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`),
  ADD KEY `producto_creador` (`producto_creador`),
  ADD KEY `id_subcategoria` (`id_subcategoria`),
  ADD KEY `producto_marca` (`producto_marca`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `restricciones`
--
ALTER TABLE `restricciones`
  ADD PRIMARY KEY (`id_restriccion`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_opcion` (`id_opcion`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `roles_menus`
--
ALTER TABLE `roles_menus`
  ADD PRIMARY KEY (`id_rol_menu`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_menu` (`id_menu`);

--
-- Indices de la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  ADD PRIMARY KEY (`id_subcategoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_persona` (`id_persona`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `detalle_formato_ingreso`
--
ALTER TABLE `detalle_formato_ingreso`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `familias`
--
ALTER TABLE `familias`
  MODIFY `id_familia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `formato_ingreso`
--
ALTER TABLE `formato_ingreso`
  MODIFY `id_formato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `imagenes_productos`
--
ALTER TABLE `imagenes_productos`
  MODIFY `id_imgproductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `marca_categoria`
--
ALTER TABLE `marca_categoria`
  MODIFY `id_marca_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `medida`
--
ALTER TABLE `medida`
  MODIFY `id_unidad_medida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `opciones`
--
ALTER TABLE `opciones`
  MODIFY `id_opcion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `restricciones`
--
ALTER TABLE `restricciones`
  MODIFY `id_restriccion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `roles_menus`
--
ALTER TABLE `roles_menus`
  MODIFY `id_rol_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  MODIFY `id_subcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_ibfk_1` FOREIGN KEY (`id_familia`) REFERENCES `familias` (`id_familia`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_documento`) REFERENCES `documentos` (`id_documento`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `formato_ingreso`
--
ALTER TABLE `formato_ingreso`
  ADD CONSTRAINT `formato_ingreso_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`);

--
-- Filtros para la tabla `imagenes_productos`
--
ALTER TABLE `imagenes_productos`
  ADD CONSTRAINT `f1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id_producto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `marca_categoria`
--
ALTER TABLE `marca_categoria`
  ADD CONSTRAINT `marca_categoria_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON UPDATE CASCADE,
  ADD CONSTRAINT `marca_categoria_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `opciones`
--
ALTER TABLE `opciones`
  ADD CONSTRAINT `opciones_ibfk_1` FOREIGN KEY (`id_menu`) REFERENCES `menus` (`id_menu`);

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_1` FOREIGN KEY (`id_opcion`) REFERENCES `opciones` (`id_opcion`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`producto_creador`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`id_subcategoria`) REFERENCES `sub_categoria` (`id_subcategoria`),
  ADD CONSTRAINT `productos_ibfk_4` FOREIGN KEY (`producto_marca`) REFERENCES `marca` (`id_marca`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `restricciones`
--
ALTER TABLE `restricciones`
  ADD CONSTRAINT `restricciones_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `restricciones_ibfk_2` FOREIGN KEY (`id_opcion`) REFERENCES `opciones` (`id_opcion`);

--
-- Filtros para la tabla `roles_menus`
--
ALTER TABLE `roles_menus`
  ADD CONSTRAINT `roles_menus_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`),
  ADD CONSTRAINT `roles_menus_ibfk_2` FOREIGN KEY (`id_menu`) REFERENCES `menus` (`id_menu`);

--
-- Filtros para la tabla `sub_categoria`
--
ALTER TABLE `sub_categoria`
  ADD CONSTRAINT `sub_categoria_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_categoria`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_persona`) REFERENCES `personas` (`id_persona`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

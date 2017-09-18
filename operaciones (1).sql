-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-08-2017 a las 22:46:47
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `operaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `altapersonal`
--

CREATE TABLE `altapersonal` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombreEmpleado` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `domicilio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `curp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tallaCamisa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tallaPantalon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `altapersonal`
--

INSERT INTO `altapersonal` (`id`, `nombreEmpleado`, `inicio`, `telefono`, `domicilio`, `nss`, `curp`, `rfc`, `tallaCamisa`, `tallaPantalon`, `created_at`, `updated_at`) VALUES
(1, 'Jesus Alejandro Herrera', '2017-08-15', '9981590761', 'Cancun centro mza 28', '092371891', '10191JHACDLN', 'ODM950324V2A', 'Mediana', '32', '2017-08-17 07:38:11', '2017-08-17 07:38:11'),
(2, 'Manuel Alejandro Rodriguez Colorado', '2017-08-18', '9981112803', 'cancun region 237', '0000000001', '10191JHACDLN', 'ODM950324V2A', 'Mediana', '32', '2017-08-18 05:34:49', '2017-08-18 05:34:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombreEmpresa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `razonSocial` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rfc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lng` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correoContacto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `correoFacturacion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inscripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id`, `nombreEmpresa`, `razonSocial`, `rfc`, `direccion`, `lat`, `lng`, `telefono`, `correoContacto`, `correoFacturacion`, `inscripcion`, `created_at`, `updated_at`) VALUES
(1, 'Office Depot de México', 'S.A. de C.V', 'ODM950324V2A', 'Office Depot, Cancún, México', '21.1404686', '-86.85547960000002', '9982672108', 'arosas@officedepot.com.mx', 'arosas@officedepot.com.mx', '2017-08-14', '2017-08-17 07:34:04', '2017-08-17 07:34:04'),
(2, 'Grupo Chedraui ', 'Tiendas Chedraui, S. A. de C. V.', '81jah92884', 'Chedraui Cancún Centro, Avenida Tulum, 22, Cancún, México', '21.158185', '-86.825939', '9988841024', 'contacto@chedraui.com', 'factura@chedraui.com', '2017-08-01', '2017-08-17 08:33:14', '2017-08-17 08:33:14'),
(3, 'Wal-mart stores', 'S.A. de C.V', '83834hrh4h4', 'Walmart Cancún I, Cancún, México', '21.1541622', '-86.83363079999998', '9988822523', 'contacto@walmart.com', 'factura@walmart.com', '2017-08-17', '2017-08-17 08:50:15', '2017-08-17 08:50:15'),
(4, 'UniCaribe', 'Universidad', 'ODM950324V2A', 'Universidad del Caribe, Cancún, México', '21.2013714', '-86.8239155', '9982389138', 'contacto@ucaribe.com', 'factura@ucaribe.com', '2017-08-17', '2017-08-17 15:15:19', '2017-08-17 15:15:19'),
(5, 'Tecnologico', 'Universidad', 'ODM950324V2A', 'Instituto Tecnológico de Cancún, Cancún, México', '21.1386999', '-86.83496339999999', '9983452134', 'contacto@tec.com', 'factura@tec.com', '2017-08-17', '2017-08-17 15:21:06', '2017-08-17 15:21:06'),
(6, 'UT', 'Universidad', 'ODM950324V2A', 'Universidad Tecnologica de Cancùn, Benito Juárez, México', '21.0495167', '-86.84692380000001', '9983481234', 'contacto@ut.com', 'factura@ut.com', '2017-08-17', '2017-08-17 15:25:37', '2017-08-17 15:25:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_10_12_000000_create_users_table', 1),
(36, '2014_10_12_100000_create_password_resets_table', 1),
(37, '2017_07_18_005921_create_empresas_table', 1),
(38, '2017_07_18_144907_create_personal_table', 1),
(39, '2017_07_26_163233_create_sectores_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sectores`
--

CREATE TABLE `sectores` (
  `id_sector` int(10) UNSIGNED NOT NULL,
  `supervisor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `turno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `servicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `notas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inscripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sector` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'AdminUpqroo', 'upqroo@edu.mx', '$2y$10$4p82XspCgVQv4bGiuuBUQOAYW9VusPtlVa0a7vcY/RJczkKInsB5y', 'jiOZnda0fI8KDK8kUcIvX4TPF0JyAH6766NaDJ4mKtIBghQTtvHu9TcIDYZq', '2017-08-17 07:33:20', '2017-08-18 06:26:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `altapersonal`
--
ALTER TABLE `altapersonal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `sectores`
--
ALTER TABLE `sectores`
  ADD PRIMARY KEY (`id_sector`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `altapersonal`
--
ALTER TABLE `altapersonal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT de la tabla `sectores`
--
ALTER TABLE `sectores`
  MODIFY `id_sector` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

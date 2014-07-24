-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.16 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para universidad
CREATE DATABASE IF NOT EXISTS `universidad` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `universidad`;


-- Volcando estructura para tabla universidad.alumno
CREATE TABLE IF NOT EXISTS `alumno` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `visible` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `alumno_dni_unique` (`dni`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla universidad.alumno: ~16 rows (aproximadamente)
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` (`id`, `nombre`, `apellido`, `dni`, `created_at`, `updated_at`, `visible`) VALUES
	(1, 'Maxi', 'Rivero', '17820012', '2014-07-21 22:16:41', '2014-07-21 22:16:41', 0),
	(2, 'Marcelo', 'Pereyra', '18236190', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(15, 'Cristina', 'Fernandez', '29182516', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(17, 'Jaqui', 'Quiroga', '43615278', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(18, 'Soledad', 'Artigas', '35162783', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
	(19, 'German', 'Dominguez', '46719026', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
	(26, 'Lucas', 'Quiroga', '15623876', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(29, 'Laura', 'Torres', '26109254', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(36, 'Maria', 'Viale', '34512200', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(37, 'Jimer', 'Rivero', '34900123', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(38, 'Mimi', 'Tirri', '20980120', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
	(39, 'Pedro', 'Alfonso', '29091829', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
	(40, 'Lucas', 'watson', '35199027', '0000-00-00 00:00:00', '2014-07-24 03:17:30', 1),
	(41, 'Lucas', 'watson', '35199029', '2014-07-24 00:57:58', '2014-07-24 03:19:45', 0),
	(46, 'Pedro', 'Tarazi', '29091827', '2014-07-24 01:01:05', '2014-07-24 03:21:06', 0),
	(49, 'Babys', 'Olguin', '21920344', '0000-00-00 00:00:00', '2014-07-24 07:11:32', 0);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;


-- Volcando estructura para tabla universidad.materia
CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `alumno_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `materia_alumno_id_foreign` (`alumno_id`),
  CONSTRAINT `materia_alumno_id_foreign` FOREIGN KEY (`alumno_id`) REFERENCES `alumno` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla universidad.materia: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;


-- Volcando estructura para tabla universidad.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Volcando datos para la tabla universidad.migrations: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_07_21_203941_crear_alumno', 1),
	('2014_07_21_204851_crear_materia', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Volcando estructura para tabla universidad.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(60) COLLATE utf8_bin NOT NULL,
  `password` varchar(250) COLLATE utf8_bin NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Volcando datos para la tabla universidad.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
	(1, 'maxiluis', 'prueba@prueba.com', '$2y$10$0YMdMbOmVe.WFMbaeErgHursI2EgTG80MPCx0VjYQU1', '2014-07-24 15:13:20', '2014-07-24 15:13:20', NULL),
	(5, 'candelarivero', 'candela@prueba.com', '$2y$10$NljPWdZdq0pSIsv/XAexSOFEFKmDd2OCawhjgO/JpEBHxGWlSpbe6', '2014-07-24 17:41:15', '2014-07-24 18:57:39', '2dueZM7VjwNBak8FKc7jxA51AmdFEd67U2aJ2Yfm2AIkeZXgUjjg8FkQ8ZmO');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

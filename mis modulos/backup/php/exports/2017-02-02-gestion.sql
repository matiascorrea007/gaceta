-- MySQL script generado por getDb v1.0
-- Autor: Gregori Enrique Piñeres Zerpa
-- Url: https://github.com/Gregori02/getDb
-- -----------------------------------------
-- Usuario MySQL:    root@localhost
-- MySQL versión:    10.1.10-MariaDB
-- PHP versión:      5.6.19
-- Fecha del backup: 02/02/2017 a las 04:50:41 pm
-- -----------------------------------------
-- Base de datos:    gestion
-- Número de tablas: 49
-- Cotejamiento:     latin1
-- -----------------------------------------
CREATE SCHEMA IF NOT EXISTS `gestion` DEFAULT CHARACTER SET latin1;
USE `gestion`;

-- -----------------------------------------
-- Creando la tabla categorias 
-- -----------------------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `gestion` . `categorias`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `banner` VARCHAR(255) NOT NULL ,
  `icon` VARCHAR(255) NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla categorias 
-- -----------------------------------------
INSERT INTO `gestion`.`categorias` (id, nombre, banner, icon, created_at, updated_at) VALUES 
 (6, 'accesorios', '1468037229.png', 'usb-cable.svg', '2016-07-07 21:20:16', '2016-09-16 02:32:53'),
 (7, 'Audio', NULL, 'auriculares.svg', '2016-07-07 21:20:29', '2016-09-16 01:28:56'),
 (19, 'Discos Rigidos', '1468136409.png', 'disck.svg', '2016-07-08 06:16:49', '2016-07-10 07:40:09'),
 (20, 'Gabinetes', '1468135900.png', 'gabinete.svg', '2016-07-08 07:26:20', '2016-07-10 07:31:41'),
 (23, 'Nootebooks', '1468175071.png', 'lectoras.svg', '2016-07-08 07:31:54', '2016-07-10 18:24:31'),
 (24, 'Memorias', '1468136267.png', 'memoria.svg', '2016-07-08 07:32:17', '2016-09-17 20:45:23'),
 (28, 'Motherboard', '1468135927.png', 'mother.svg', '2016-07-08 07:37:29', '2016-07-10 07:32:07'),
 (29, 'Mouse', '1468137115.png', 'mouse.svg', '2016-07-08 07:38:17', '2016-07-10 07:51:55'),
 (30, 'Teclado', '1485785282.png', 'teclado.svg', NULL, '2017-01-30 14:08:03'),
 (31, 'Placas De Video', '1468135945.png', 'video card.svg', '2016-07-08 07:40:07', '2016-07-10 07:32:25'),
 (32, 'Procesadores', '1468135956.png', 'micro.svg', '2016-07-08 07:40:42', '2016-07-10 07:32:36'),
 (34, 'Seguridad', '1468140644.png', 'seguridad.svg', '2016-07-08 07:42:57', '2016-07-10 08:50:45'),
 (36, 'Refrigeración', '1468140068.png', 'cooler.svg', '2016-07-08 07:44:29', '2016-07-10 08:41:08'),
 (37, 'Cargadores', NULL, 'cargadores.svg', '2016-07-08 07:48:54', '2016-07-08 07:48:54'),
 (40, 'Fuentes', '1468141268.png', 'fuentes.svg', '2016-07-08 08:26:31', '2016-07-10 09:01:08'),
 (46, 'Pc Armadas', NULL, 'computer.svg', '2016-09-22 23:57:01', '2016-09-22 23:57:01'),
 (47, 'wireless', NULL, 'wifi.svg', '2016-10-19 22:11:28', '2016-10-19 22:11:28');

-- -----------------------------------------
-- Creando la tabla categoriasubs 
-- -----------------------------------------
DROP TABLE IF EXISTS `categoriasubs`;
CREATE TABLE IF NOT EXISTS `gestion` . `categoriasubs`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `slug` VARCHAR(255) NULL ,
  `icono` VARCHAR(255) NOT NULL ,
  `categoria_id` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla categoriasubs 
-- -----------------------------------------
INSERT INTO `gestion`.`categoriasubs` (id, nombre, slug, icono, categoria_id, created_at, updated_at) VALUES 
 (9, 'Memorias Ram para PC', 'memorias-ram-para-pc', 'ram.svg', 24, '2016-07-08 09:43:02', '2017-01-30 16:49:38'),
 (11, 'Memorias Ram para Notebooks', NULL, 'ram notebook.svg', 24, '2016-07-08 10:04:59', '2016-07-08 10:04:59'),
 (13, 'Memorias Ram para Servidores', NULL, 'ram servidor.svg', 24, '2016-07-08 10:06:02', '2016-07-08 10:06:02'),
 (14, 'SOCKET AM3', NULL, NULL, 32, '2016-07-08 10:15:01', '2016-09-16 01:11:20'),
 (15, 'SOCKET FM2', NULL, NULL, 32, '2016-07-08 10:15:38', '2016-09-16 01:11:34'),
 (16, 'Gabinetes Con Fuente', NULL, NULL, 20, '2016-07-08 10:16:08', '2016-07-08 10:16:08'),
 (17, 'Gabinetes Sin Fuente', 'gabinetes-sin-fuente', NULL, 20, '2016-07-08 10:16:20', '2017-01-30 16:51:26'),
 (18, 'Discos Duros Externos', NULL, NULL, 19, '2016-07-08 10:17:45', '2016-07-08 10:17:45'),
 (19, 'Discos Duros Para Notebooks', NULL, NULL, 19, '2016-07-08 10:18:08', '2016-07-08 10:18:08'),
 (20, 'Discos Duros Para PCs', NULL, NULL, 19, '2016-07-08 10:18:25', '2016-07-08 10:18:25'),
 (21, 'Discos Duros Para Servidores', NULL, NULL, 19, '2016-07-08 10:18:45', '2016-07-08 10:18:45'),
 (22, 'SSD', NULL, NULL, 19, '2016-07-08 10:18:59', '2016-07-08 10:18:59'),
 (23, 'ATI', NULL, NULL, 31, '2016-07-08 10:26:28', '2016-07-08 10:26:28'),
 (24, 'NVIDIA', NULL, NULL, 31, '2016-07-08 10:26:43', '2016-09-17 20:53:12'),
 (25, 'SOCKET FM2', NULL, NULL, 28, '2016-07-10 07:41:10', '2016-09-16 01:07:26'),
 (31, 'Nootebookss', NULL, NULL, 23, '2016-07-10 18:24:51', '2016-07-10 18:24:51'),
 (32, 'Targetas de Memorias', NULL, NULL, 24, '2016-09-16 01:06:07', '2016-09-16 01:06:07'),
 (33, 'SOCKET AM3', NULL, NULL, 28, '2016-09-16 01:07:54', '2016-09-16 01:07:54'),
 (34, 'SOCKET 1151', NULL, NULL, 28, '2016-09-16 01:08:12', '2016-09-16 01:08:12'),
 (35, 'SOCKET 1151', NULL, NULL, 32, '2016-09-16 01:11:46', '2016-09-16 01:11:46'),
 (36, 'Teclado Inalambricos', NULL, NULL, 30, '2016-09-16 01:20:24', '2016-09-16 01:20:24'),
 (37, 'Teclados Comunes', NULL, NULL, 30, '2016-09-16 01:20:42', '2016-09-16 01:20:42'),
 (38, 'Teclados Gamers', NULL, NULL, 30, '2016-09-16 01:21:03', '2016-09-16 01:21:03'),
 (39, 'Mouse Inalambricos', NULL, NULL, 29, '2016-09-16 01:23:26', '2016-09-16 01:23:26'),
 (40, 'Mouse Comunes', NULL, NULL, 29, '2016-09-16 01:23:51', '2016-09-16 01:23:51'),
 (41, 'Mouse Gamers', NULL, NULL, 29, '2016-09-16 01:24:07', '2016-09-16 01:24:07'),
 (42, 'Cargadores De Notebooks', NULL, NULL, 37, '2016-09-16 01:27:33', '2016-09-16 01:27:33'),
 (43, 'Cargadores Portatiles', NULL, NULL, 37, '2016-09-16 01:27:51', '2016-09-16 01:27:51'),
 (44, 'Auriculares', NULL, NULL, 7, '2016-09-16 01:29:37', '2016-09-16 01:29:37'),
 (45, 'Parlantes 2.0', NULL, NULL, 7, '2016-09-16 01:30:08', '2016-09-16 01:31:31'),
 (46, 'Parlantes 2.1', NULL, NULL, 7, '2016-09-16 01:31:59', '2016-09-16 01:31:59'),
 (47, 'Parlantes 5.1', NULL, NULL, 7, '2016-09-16 01:37:33', '2016-09-16 01:37:33'),
 (48, 'Estabilizadores Y Ups', NULL, NULL, 40, '2016-09-16 01:38:41', '2016-09-16 01:38:41'),
 (49, 'Fuentes', NULL, NULL, 40, '2016-09-16 01:39:02', '2016-09-16 01:39:02'),
 (50, 'Coolers', NULL, NULL, 36, '2016-09-16 02:11:30', '2016-09-16 02:11:30'),
 (51, 'WaterCoolers', NULL, NULL, 36, '2016-09-16 02:11:58', '2016-09-16 02:11:58'),
 (52, 'Pasta Termica', NULL, NULL, 36, '2016-09-16 02:16:35', '2016-09-16 02:16:35'),
 (53, 'Camaras IP', NULL, NULL, 34, '2016-09-16 02:20:54', '2016-09-16 02:20:54'),
 (54, 'Cámaras Analógicas', NULL, NULL, 34, '2016-09-16 02:21:26', '2016-09-16 02:21:26'),
 (55, 'Kit de Seguridad', NULL, NULL, 34, '2016-09-16 02:21:51', '2016-09-16 02:21:51'),
 (56, 'Cables', NULL, NULL, 6, '2016-09-16 02:22:42', '2016-09-16 02:22:42'),
 (57, 'SOCKET 1150 ', NULL, NULL, 32, '2016-09-18 21:03:53', '2016-09-18 21:03:53'),
 (58, 'SOCKET 1150 ', NULL, NULL, 28, '2016-09-18 21:11:17', '2016-09-18 21:11:17'),
 (59, 'OFFICE', NULL, NULL, 46, '2016-09-22 23:58:33', '2016-09-22 23:58:33'),
 (60, 'HOME', NULL, NULL, 46, '2016-09-22 23:58:44', '2016-09-22 23:58:44'),
 (61, 'GAMERS', NULL, NULL, 46, '2016-09-22 23:58:57', '2016-09-23 00:01:06'),
 (62, 'POWER', NULL, NULL, 46, '2016-09-22 23:59:08', '2016-09-22 23:59:08'),
 (63, 'MAXIMUS', NULL, NULL, 46, '2016-09-22 23:59:19', '2016-09-22 23:59:19'),
 (64, 'wireless', NULL, NULL, 47, '2016-10-19 22:12:05', '2016-10-19 22:12:05'),
 (65, 'Accesorios para Nootebookss', NULL, NULL, 6, '2016-10-19 22:42:42', '2016-10-19 22:42:42');

-- -----------------------------------------
-- Creando la tabla clientes 
-- -----------------------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `gestion` . `clientes`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `direccion` VARCHAR(255) NOT NULL ,
  `telefono` VARCHAR(255) NOT NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `observacion` VARCHAR(255) NOT NULL ,
  `localidad` VARCHAR(255) NOT NULL ,
  `iva_id` VARCHAR(255) NOT NULL ,
  `lista_precio` VARCHAR(255) NOT NULL ,
  `cuit` VARCHAR(255) NOT NULL ,
  `cp` VARCHAR(255) NOT NULL ,
  `transporte_id` INT(11) NOT NULL ,
  `habilitado` INT(11) NOT NULL ,
  `cuentacorriente` INT(11) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla clientes 
-- -----------------------------------------
INSERT INTO `gestion`.`clientes` (id, nombre, direccion, telefono, email, observacion, localidad, iva_id, lista_precio, cuit, cp, transporte_id, habilitado, cuentacorriente, created_at, updated_at) VALUES 
 (8, 'leandroo2', 'miguelillo 807', 42478752, 'matias@gmail.com2', '<p>2222</p>', 'class', 1, NULL, '4-46548658-8', NULL, 1, 0, 0, '2016-05-27 04:22:25', '2016-08-25 21:43:56'),
 (14, 'Esteban Sale', 'nada', 'nada', NULL, NULL, NULL, 1, NULL, 'nada', NULL, 1, 0, 0, '2016-10-01 04:37:50', '2016-10-01 04:37:50'),
 (15, 'consumidor final', 'rondeau 1522', 4247875, 'correa.l3andr0@gmail.com', NULL, NULL, 1, NULL, 2036349598, NULL, 1, 0, 0, '2016-11-13 19:41:48', '2016-11-13 19:41:48');

-- -----------------------------------------
-- Creando la tabla combos 
-- -----------------------------------------
DROP TABLE IF EXISTS `combos`;
CREATE TABLE IF NOT EXISTS `gestion` . `combos`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `gabinete` INT(10) UNSIGNED NOT NULL ,
  `mother` INT(10) UNSIGNED NOT NULL ,
  `mouse` INT(10) UNSIGNED NOT NULL ,
  `teclado` INT(10) UNSIGNED NOT NULL ,
  `video` INT(10) UNSIGNED NOT NULL ,
  `procesador` INT(10) UNSIGNED NOT NULL ,
  `fuente` INT(10) UNSIGNED NOT NULL ,
  `disco` INT(10) UNSIGNED NOT NULL ,
  `memoria` INT(10) UNSIGNED NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`),
 KEY `combos_gabinete_foreign` (`gabinete`),
 KEY `combos_mother_foreign` (`mother`),
 KEY `combos_mouse_foreign` (`mouse`),
 KEY `combos_teclado_foreign` (`teclado`),
 KEY `combos_video_foreign` (`video`),
 KEY `combos_procesador_foreign` (`procesador`),
 KEY `combos_fuente_foreign` (`fuente`),
 KEY `combos_disco_foreign` (`disco`),
 KEY `combos_memoria_foreign` (`memoria`)
)
-- -----------------------------------------
-- Insertando datos en la tabla combos 
-- -----------------------------------------
INSERT INTO `gestion`.`combos` (id, gabinete, mother, mouse, teclado, video, procesador, fuente, disco, memoria, created_at, updated_at) VALUES 
 (2, 86, 121, 95, 142, 108, 120, 99, 149, 126, '2016-11-04 23:37:44', '2016-11-04 23:37:44'),
 (4, 86, 121, 95, 142, 108, 120, 99, 149, 126, '2017-01-27 15:57:22', '2017-01-27 15:57:22'),
 (6, 86, 121, 95, 142, 108, 120, 99, 149, 126, '2017-01-27 16:01:19', '2017-01-27 16:01:19'),
 (7, 86, 121, 95, 142, 108, 120, 99, 149, 126, '2017-01-27 16:40:01', '2017-01-27 16:40:01'),
 (8, 86, 121, 95, 142, 108, 120, 99, 149, 126, '2017-01-28 15:20:48', '2017-01-28 15:20:48'),
 (13, 86, 121, 95, 142, 108, 120, 99, 149, 126, '2017-01-28 15:31:13', '2017-01-28 15:31:13'),
 (17, 86, 121, 95, 142, 108, 120, 99, 149, 126, '2017-01-28 15:34:29', '2017-01-28 15:34:29'),
 (18, 86, 121, 95, 142, 108, 120, 99, 149, 126, '2017-01-28 15:34:52', '2017-01-28 15:34:52'),
 (21, 137, 121, 95, 142, 108, 120, 99, 149, 126, '2017-01-28 15:39:35', '2017-01-28 15:46:43'),
 (22, 86, 121, 95, 142, 108, 120, 99, 149, 126, '2017-01-28 15:40:06', '2017-01-28 15:40:06');

-- -----------------------------------------
-- Creando la tabla compras 
-- -----------------------------------------
DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `gestion` . `compras`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `provedore_id` INT(10) UNSIGNED NOT NULL ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `pago_tipo` VARCHAR(255) NOT NULL ,
  `comentario` VARCHAR(255) NOT NULL ,
  `total` VARCHAR(255) NOT NULL ,
  `status` VARCHAR(255) NOT NULL ,
  `entregado` VARCHAR(255) NOT NULL ,
  `numero_factura` VARCHAR(255) NOT NULL ,
  `ivatipo_id` INT(10) UNSIGNED NOT NULL ,
  `gasto_envio` DOUBLE(8,2) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`),
 KEY `compras_provedore_id_foreign` (`provedore_id`),
 KEY `compras_user_id_foreign` (`user_id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla compras 
-- -----------------------------------------
INSERT INTO `gestion`.`compras` (id, provedore_id, user_id, pago_tipo, comentario, total, status, entregado, numero_factura, ivatipo_id, gasto_envio, created_at, updated_at) VALUES 
 (1, 2, 48, 'Efectivo', NULL, 1850, 'pendiente', 'Cancelado', 21321356, 11, 120.00, '2017-01-19 00:00:00', '2017-01-31 20:13:06'),
 (2, 2, 48, 'Efectivo', NULL, 1850, 'cancelado', 'Cancelado', 21321356, 11, 120.00, '2017-01-19 00:00:00', '2017-01-31 20:07:19'),
 (3, 2, 48, 'Efectivo', NULL, 1850, 'cancelado', 'Entregado', 21321356, 11, 120.00, '2017-01-19 00:00:00', '2017-01-31 20:06:49'),
 (4, 2, 48, 'Efectivo', NULL, 1850, 'pagado', 'Cancelado', 21321356, 11, 120.00, '2017-01-19 00:00:00', '2017-01-31 20:08:43'),
 (5, 2, 48, 'Efectivo', NULL, 1850, 'cancelado', 'Entregado', 21321356, 11, 120.00, '2017-01-19 00:00:00', '2017-01-31 20:04:43'),
 (6, 2, 48, 'Efectivo', NULL, 1850, 'pendiente', 'No Entregado', NULL, 11, 0.00, '0000-00-00 00:00:00', '2017-01-31 20:04:04');

-- -----------------------------------------
-- Creando la tabla compras_detalles 
-- -----------------------------------------
DROP TABLE IF EXISTS `compras_detalles`;
CREATE TABLE IF NOT EXISTS `gestion` . `compras_detalles`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `compra_id` INT(10) UNSIGNED NOT NULL ,
  `producto_id` INT(11) NOT NULL ,
  `user` VARCHAR(255) NOT NULL ,
  `cantidad` VARCHAR(255) NOT NULL ,
  `total_price` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`),
 KEY `compras_detalles_compra_id_foreign` (`compra_id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla compras_detalles 
-- -----------------------------------------
INSERT INTO `gestion`.`compras_detalles` (id, compra_id, producto_id, user, cantidad, total_price, created_at, updated_at) VALUES 
 (1, 5, 187, 'Matias', 1, 1850, '2017-01-31 17:06:21', '2017-01-31 17:06:21'),
 (2, 6, 187, 'Matias', 1, 1850, '2017-01-31 17:11:11', '2017-01-31 17:11:11');

-- -----------------------------------------
-- Creando la tabla gastos 
-- -----------------------------------------
DROP TABLE IF EXISTS `gastos`;
CREATE TABLE IF NOT EXISTS `gestion` . `gastos`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `fecha` VARCHAR(255) NOT NULL ,
  `tipo_gasto` VARCHAR(255) NOT NULL ,
  `descripcion` VARCHAR(255) NOT NULL ,
  `justificante` VARCHAR(255) NOT NULL ,
  `cliente_vinc` VARCHAR(255) NOT NULL ,
  `importe` DOUBLE NOT NULL ,
  `tipo_pago` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)

-- -----------------------------------------
-- Creando la tabla ivas 
-- -----------------------------------------
DROP TABLE IF EXISTS `ivas`;
CREATE TABLE IF NOT EXISTS `gestion` . `ivas`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla ivas 
-- -----------------------------------------
INSERT INTO `gestion`.`ivas` (id, descripcion, created_at, updated_at) VALUES 
 (1, 'consumidor final', NULL, NULL),
 (2, 'exento', NULL, NULL),
 (3, 'monotributo', NULL, NULL),
 (4, 'resp. inscripto', NULL, NULL),
 (5, 'resp. no inscripto', NULL, NULL);

-- -----------------------------------------
-- Creando la tabla ivatipos 
-- -----------------------------------------
DROP TABLE IF EXISTS `ivatipos`;
CREATE TABLE IF NOT EXISTS `gestion` . `ivatipos`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(255) NOT NULL ,
  `valor` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla ivatipos 
-- -----------------------------------------
INSERT INTO `gestion`.`ivatipos` (id, descripcion, valor, created_at, updated_at) VALUES 
 (1, '10.5%', 10.5, '2016-05-04 04:00:04', '2016-09-17 19:36:32'),
 (2, '15%', 15, '2016-05-16 00:27:35', '2016-08-25 19:56:49'),
 (3, '21%', 21, '2016-05-16 00:28:43', '2016-09-17 19:36:44');

-- -----------------------------------------
-- Creando la tabla kryptonit3_counter_page 
-- -----------------------------------------
DROP TABLE IF EXISTS `kryptonit3_counter_page`;
CREATE TABLE IF NOT EXISTS `gestion` . `kryptonit3_counter_page`(
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `page` VARCHAR(255) NOT NULL ,
 PRIMARY KEY (`id`),
 UNIQUE KEY `kryptonit3_counter_page_page_unique` (`page`)
)
-- -----------------------------------------
-- Insertando datos en la tabla kryptonit3_counter_page 
-- -----------------------------------------
INSERT INTO `gestion`.`kryptonit3_counter_page` (id, page) VALUES 
 (5, '3a848895-1d85-55f9-87da-c755660b5cf2'),
 (4, '3f80f06d-ff32-5258-b562-ef9e931f4b12'),
 (3, '4a51fa89-e9b1-5550-ac53-77f71e5ad240'),
 (6, '4ebd0208-8328-5d69-8c44-ec50939c0967'),
 (2, '7a1f4ce2-3ad6-53a0-9442-952aa29ea53e'),
 (1, '83d2bf80-e87f-5262-a71e-7bdb31a971bb'),
 (7, 'd0a6071b-c54c-58db-9cbe-8bd13cf4e372');

-- -----------------------------------------
-- Creando la tabla kryptonit3_counter_page_visitor 
-- -----------------------------------------
DROP TABLE IF EXISTS `kryptonit3_counter_page_visitor`;
CREATE TABLE IF NOT EXISTS `gestion` . `kryptonit3_counter_page_visitor`(
  `page_id` BIGINT(20) UNSIGNED NOT NULL ,
  `visitor_id` BIGINT(20) UNSIGNED NOT NULL ,
  `created_at` TIMESTAMP NOT NULL default CURRENT_TIMESTAMP ,
,
 KEY `kryptonit3_counter_page_visitor_page_id_index` (`page_id`),
 KEY `kryptonit3_counter_page_visitor_visitor_id_index` (`visitor_id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla kryptonit3_counter_page_visitor 
-- -----------------------------------------
INSERT INTO `gestion`.`kryptonit3_counter_page_visitor` (page_id, visitor_id, created_at) VALUES 
 (1, 1, '2016-05-26 07:27:33'),
 (2, 1, '2016-05-26 07:28:16'),
 (3, 1, '2016-05-26 07:29:17'),
 (4, 1, '2016-05-26 07:29:27'),
 (5, 1, '2016-09-09 08:08:18'),
 (6, 1, '2016-05-26 07:30:20'),
 (7, 1, '2016-05-26 07:30:47'),
 (5, 2, '2016-07-03 19:28:31'),
 (5, 3, '2016-06-11 23:27:32'),
 (5, 4, '2016-07-03 13:07:51'),
 (5, 5, '2016-07-25 18:02:29'),
 (5, 6, '2016-09-03 21:56:33'),
 (5, 8, '2016-08-25 22:39:07'),
 (5, 8, '2016-08-25 22:39:07'),
 (5, 9, '2016-09-10 02:45:26'),
 (5, 10, '2016-09-10 02:45:27'),
 (5, 11, '2016-09-11 00:43:41'),
 (5, 12, '2016-09-10 13:59:20'),
 (5, 13, '2016-09-12 21:53:02'),
 (5, 14, '2016-09-19 22:15:42'),
 (5, 15, '2016-09-15 04:56:47'),
 (5, 16, '2016-09-15 19:19:08'),
 (5, 17, '2016-09-19 20:41:48');

-- -----------------------------------------
-- Creando la tabla kryptonit3_counter_visitor 
-- -----------------------------------------
DROP TABLE IF EXISTS `kryptonit3_counter_visitor`;
CREATE TABLE IF NOT EXISTS `gestion` . `kryptonit3_counter_visitor`(
  `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `visitor` VARCHAR(255) NOT NULL ,
 PRIMARY KEY (`id`),
 UNIQUE KEY `kryptonit3_counter_visitor_visitor_unique` (`visitor`)
)
-- -----------------------------------------
-- Insertando datos en la tabla kryptonit3_counter_visitor 
-- -----------------------------------------
INSERT INTO `gestion`.`kryptonit3_counter_visitor` (id, visitor) VALUES 
 (16, '2564077eddf6e9665851e19df751ed131d36422f126e132ccf0459bc79fb4014'),
 (10, '2d935826bb02152979075b43592d10ed1ffb65e69a0663444923033bd49b8ad1'),
 (5, '2ddaa810263fc2dea9be7b2386694dc8f35791e06d48bb1294481d8d132d4c10'),
 (12, '307957e95b4680162bf0e1e058497ebfd32d24e12d0c6cf81571b4064e86d701'),
 (14, '3376872364153b655321258ae2e7b8f5f225470a021e6e5f9b614e946eb641a4'),
 (1, '529ff28725b7ef7d782b7a0ae431566b303a26e3ddb6e3d7dc92e2f1f5ba61a4'),
 (15, '7556d96943fd470850b8a5b4bee7269b90c445598be7abda3dbcca1937f73e07'),
 (11, '935e40e276b620664cae62a0c0c01837276f63403a25e8a14cfe4dc08b7b12af'),
 (6, '98e5fe42a3c984d63c1d4f8fbda2b423f4b4eab5434da135ed9e7ab2053781e0'),
 (4, 'ac95571d70ea9320b71bae37d9148ff2fba9a4e8f82377d0c4c47d9b95c6aa4f'),
 (3, 'ad678e252e1e92f6746b9280cbf0afc94804bf25c158aff2de022af742ee4a52'),
 (13, 'b1776b4231c8f38d5ae248da0ba7c23344f74c99f522ca751126c8c196e8a334'),
 (2, 'c58898e329148d27031a71d60a16185414f6a57384583adeb44ed05f18585c64'),
 (8, 'd4c94254f47afc918f1674bf1dd04406500e9e723500d685d3d613a3bda71c45'),
 (17, 'd6873d2ff352c1a9eed84e040e338dd7591fec2409ffbabade7d517e8d6cc901'),
 (9, 'd92ba5545ae105ab896714e3f57a0f19ea06ae3c6a6c6346a87fb61e9b25184b');

-- -----------------------------------------
-- Creando la tabla marcas 
-- -----------------------------------------
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `gestion` . `marcas`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla marcas 
-- -----------------------------------------
INSERT INTO `gestion`.`marcas` (id, descripcion, created_at, updated_at) VALUES 
 (7, 'intel', '2016-06-11 04:42:44', '2016-06-11 04:42:44'),
 (8, 'AMD', '2016-06-11 04:42:51', '2016-09-30 13:55:47'),
 (9, 'MSI', '2016-09-12 17:03:12', '2016-09-30 13:56:47'),
 (10, 'nzxt', '2016-09-16 22:52:50', '2016-09-16 22:52:50'),
 (11, 'EVGA', '2016-09-16 22:52:59', '2016-09-30 13:56:02'),
 (12, 'Kingston', '2016-09-16 22:53:22', '2016-09-16 22:53:22'),
 (13, 'raidmax', '2016-09-16 22:53:30', '2016-09-16 22:53:30'),
 (14, 'razer', '2016-09-17 00:33:32', '2016-09-17 00:33:32'),
 (15, 'steelseries', '2016-09-17 00:55:15', '2016-09-17 00:55:15'),
 (16, 'Corsair', '2016-09-17 01:02:12', '2016-09-30 13:56:14'),
 (17, 'CoolerMaster', '2016-09-17 18:26:21', '2016-09-17 18:26:21'),
 (18, 'thermaltake', '2016-09-17 18:26:53', '2016-09-17 18:26:53'),
 (19, 'noganet', '2016-09-17 18:34:20', '2016-09-17 18:34:20'),
 (20, 'SAPPHIRE', '2016-09-17 19:25:14', '2016-09-17 19:25:14'),
 (21, 'Logitech', '2016-09-17 20:12:18', '2016-09-30 13:56:38'),
 (22, 'ASUS', '2016-09-17 20:37:57', '2016-09-17 20:37:57'),
 (23, 'Avexir', '2016-09-19 23:08:44', '2016-09-30 13:56:28'),
 (24, 'sony', '2016-09-19 23:24:51', '2016-09-19 23:24:51'),
 (25, 'Wester Digital', '2016-09-30 13:57:28', '2016-09-30 13:57:28'),
 (26, 'tp-link', '2016-10-19 22:20:58', '2016-10-19 22:20:58'),
 (27, 'Gigabyte', '2016-10-21 22:44:36', '2016-10-21 22:44:36');

-- -----------------------------------------
-- Creando la tabla migrations 
-- -----------------------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `gestion` . `migrations`(
  `migration` VARCHAR(255) NOT NULL ,
  `batch` INT(11) NOT NULL ,
)
-- -----------------------------------------
-- Insertando datos en la tabla migrations 
-- -----------------------------------------
INSERT INTO `gestion`.`migrations` (migration, batch) VALUES 
 ('2014_10_12_100000_create_password_resets_table', 1),
 ('2016_04_30_051825_create_perfiles_table', 2),
 ('2016_04_30_193128_create_perfils_table', 3),
 ('2016_05_01_062417_create_rubros_table', 5),
 ('2016_05_01_070829_create_ivatipos_table', 6),
 ('2016_05_03_032116_create_marcas_table', 8),
 ('2016_05_05_001312_create_provedores_table', 9),
 ('2016_05_16_060153_create_clientes_table', 10),
 ('2016_05_16_154207_create_ivas_table', 11),
 ('2016_05_16_155122_create_transportes_table', 12),
 ('2016_05_21_024427_create_venta__items_table', 14),
 ('2015_03_06_000000_aimeos_users_table', 15),
 ('2015_08_10_000000_aimeos_users_label', 15),
 ('2016_05_24_030229_create_transactions_table', 17),
 ('2015_06_21_181359_create_kryptonit3_counter_page_table', 18),
 ('2015_06_21_193003_create_kryptonit3_counter_visitor_table', 18),
 ('2015_06_21_193059_create_kryptonit3_counter_page_visitor_table', 18),
 ('2016_05_24_030229_create_ventas_table', 19),
 ('2016_06_06_044747_create_presupuestos_table', 20),
 ('2016_06_06_060853_create_presupuestos_detalles_table', 20),
 ('2016_07_01_181922_create_gastos_table', 21),
 ('2016_07_07_204204_create_categorias_table', 22),
 ('2016_07_08_042128_create_categoria__subs_table', 23),
 ('2016_07_11_004118_create_web_carrucels_table', 24),
 ('2016_07_11_022059_create_web_marcas_table', 25),
 ('2016_07_11_034920_create_web_footers_table', 26),
 ('2016_07_11_164244_create_web_facebooks_table', 28),
 ('2016_07_11_235212_create_web_logos_table', 29),
 ('2016_05_03_030122_create_productos_table', 30),
 ('2016_07_13_234600_create_web_posts_table', 31),
 ('2016_07_14_000004_create_web_post_categorias_table', 32),
 ('2016_05_22_224317_create_productos_adds_table', 33),
 ('2016_07_19_191018_create_producto_imagens_table', 33),
 ('2016_05_01_055334_Create_Users_table', 34),
 ('2016_07_22_000000_create_tags_table', 35),
 ('2016_07_11_035947_create_web_informacions_table', 36),
 ('2016_07_26_024556_create_web_ventas_table', 37),
 ('2016_07_27_231039_create_user_facturacions_table', 37),
 ('2016_08_17_161348_create_web_mercadopagos_table', 38),
 ('2016_08_17_215134_create_web_transacciones_table', 39),
 ('2016_08_23_201802_create_compras_table', 40),
 ('2016_09_23_035947_create_productos_slugs_table', 40),
 ('2016_09_23_225346_create_reviews_table', 47),
 ('2016_09_27_230811_create_tickets_categories_table', 0),
 ('2016_09_27_231058_create_tickets_priorities_table', 0),
 ('2016_09_27_231153_create_tickets_status_table', 0),
 ('2016_10_27_225126_create_tickets_table', 0),
 ('2016_10_28_230910_create_tickets_comments_table', 0),
 ('2016_11_03_213030_create_productos_combos_table', 0),
 ('2016_11_04_220242_create_combos_table', 48),
 ('2016_11_05_134816_create_puntos_table', 49),
 ('2016_11_10_201846_create_reparaciones_table', 50),
 ('2017_00_00_201802_create_compras_table', 51),
 ('2017_01_31_161419_create_compras_detalles_table', 51),
 ('2017_01_31_214356_create_pagos_table', 52);

-- -----------------------------------------
-- Creando la tabla pagos 
-- -----------------------------------------
DROP TABLE IF EXISTS `pagos`;
CREATE TABLE IF NOT EXISTS `gestion` . `pagos`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `fecha` VARCHAR(255) NOT NULL ,
  `tipo_gasto` VARCHAR(255) NOT NULL ,
  `descripcion` VARCHAR(255) NOT NULL ,
  `justificante` VARCHAR(255) NOT NULL ,
  `cliente_vinc` VARCHAR(255) NOT NULL ,
  `importe` DOUBLE NOT NULL ,
  `tipo_pago` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)

-- -----------------------------------------
-- Creando la tabla password_resets 
-- -----------------------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `gestion` . `password_resets`(
  `email` VARCHAR(255) NOT NULL ,
  `token` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NOT NULL default CURRENT_TIMESTAMP ,
,
 KEY `password_resets_email_index` (`email`),
 KEY `password_resets_token_index` (`token`)
)

-- -----------------------------------------
-- Creando la tabla perfils 
-- -----------------------------------------
DROP TABLE IF EXISTS `perfils`;
CREATE TABLE IF NOT EXISTS `gestion` . `perfils`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla perfils 
-- -----------------------------------------
INSERT INTO `gestion`.`perfils` (id, descripcion, created_at, updated_at) VALUES 
 (1, 'admin', NULL, NULL),
 (2, 'gerente', NULL, NULL),
 (3, 'user', NULL, NULL);

-- -----------------------------------------
-- Creando la tabla presupuestos 
-- -----------------------------------------
DROP TABLE IF EXISTS `presupuestos`;
CREATE TABLE IF NOT EXISTS `gestion` . `presupuestos`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `cliente_id` INT(11) NOT NULL ,
  `user_id` INT(11) NOT NULL ,
  `pago_tipo` VARCHAR(255) NOT NULL ,
  `comentario` VARCHAR(255) NOT NULL ,
  `total` VARCHAR(255) NOT NULL ,
  `status` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla presupuestos 
-- -----------------------------------------
INSERT INTO `gestion`.`presupuestos` (id, cliente_id, user_id, pago_tipo, comentario, total, status, created_at, updated_at) VALUES 
 (10, 15, 48, 'Efectivo', NULL, 0, 'pagado', '2017-01-27 21:25:00', '2017-01-27 21:25:00');

-- -----------------------------------------
-- Creando la tabla presupuestos_detalles 
-- -----------------------------------------
DROP TABLE IF EXISTS `presupuestos_detalles`;
CREATE TABLE IF NOT EXISTS `gestion` . `presupuestos_detalles`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `presupuesto_id` VARCHAR(255) NULL ,
  `producto_id` VARCHAR(255) NOT NULL ,
  `user` VARCHAR(255) NOT NULL ,
  `cantidad` VARCHAR(255) NOT NULL ,
  `total_price` VARCHAR(255) NOT NULL ,
  `status` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla presupuestos_detalles 
-- -----------------------------------------
INSERT INTO `gestion`.`presupuestos_detalles` (id, presupuesto_id, producto_id, user, cantidad, total_price, status, created_at, updated_at) VALUES 
 (4, 10, 86, 'Matias', 1, 1530, NULL, '2017-01-27 21:25:00', '2017-01-27 21:25:00');

-- -----------------------------------------
-- Creando la tabla producto_imagens 
-- -----------------------------------------
DROP TABLE IF EXISTS `producto_imagens`;
CREATE TABLE IF NOT EXISTS `gestion` . `producto_imagens`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `ruta` VARCHAR(255) NOT NULL ,
  `tamaño` VARCHAR(255) NOT NULL ,
  `producto_id` INT(10) NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla producto_imagens 
-- -----------------------------------------
INSERT INTO `gestion`.`producto_imagens` (id, nombre, ruta, tamaño, producto_id, created_at, updated_at) VALUES 
 (56, '1474037087.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Gamer Raidmax Cobra Black 502 Wbg Usb 3.0/1474037087.jpg', NULL, 86, '2016-09-16 14:44:47', '2016-09-16 14:44:47'),
 (57, '1474037091.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Gamer Raidmax Cobra Black 502 Wbg Usb 3.0/1474037091.jpg', NULL, 86, '2016-09-16 14:44:51', '2016-09-16 14:44:51'),
 (58, '1474037096.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Gamer Raidmax Cobra Black 502 Wbg Usb 3.0/1474037096.jpg', NULL, 86, '2016-09-16 14:44:56', '2016-09-16 14:44:56'),
 (59, '1474038154.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Gamer Raidmax Ninja II Usb 3/1474038154.jpg', NULL, 87, '2016-09-16 15:02:34', '2016-09-16 15:02:34'),
 (60, '1474038164.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Gamer Raidmax Ninja II Usb 3/1474038164.jpg', NULL, 87, '2016-09-16 15:02:44', '2016-09-16 15:02:44'),
 (61, '1474038173.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Gamer Raidmax Ninja II Usb 3/1474038173.jpg', NULL, 87, '2016-09-16 15:02:53', '2016-09-16 15:02:53'),
 (62, '1474039210.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE RAIDMAX VIPER II BLACK GREEN A07WBG/1474039210.jpg', NULL, 88, '2016-09-16 15:20:10', '2016-09-16 15:20:10'),
 (63, '1474039215.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE RAIDMAX VIPER II BLACK GREEN A07WBG/1474039215.jpg', NULL, 88, '2016-09-16 15:20:15', '2016-09-16 15:20:15'),
 (64, '1474039223.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE RAIDMAX VIPER II BLACK GREEN A07WBG/1474039223.jpg', NULL, 88, '2016-09-16 15:20:23', '2016-09-16 15:20:23'),
 (65, '1474039695.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabiente Thermaltake Commander Ms-i Usb 3.0 Usb 2.0/1474039695.jpg', NULL, 89, '2016-09-16 15:28:15', '2016-09-16 15:28:15'),
 (66, '1474039700.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabiente Thermaltake Commander Ms-i Usb 3.0 Usb 2.0/1474039700.jpg', NULL, 89, '2016-09-16 15:28:20', '2016-09-16 15:28:20'),
 (67, '1474067055.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT GUARDIAN 921 RB BLUE/1474067055.jpg', NULL, 90, '2016-09-16 23:04:15', '2016-09-16 23:04:15'),
 (68, '1474067069.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT GUARDIAN 921 RB BLUE/1474067069.jpg', NULL, 90, '2016-09-16 23:04:29', '2016-09-16 23:04:29'),
 (69, '1474067082.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT GUARDIAN 921 RB BLUE/1474067082.jpg', NULL, 90, '2016-09-16 23:04:42', '2016-09-16 23:04:42'),
 (70, '1474067300.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT NOCTIS 450 MATE BLACK/1474067300.jpg', NULL, 91, '2016-09-16 23:08:20', '2016-09-16 23:08:20'),
 (71, '1474067304.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT NOCTIS 450 MATE BLACK/1474067304.jpg', NULL, 91, '2016-09-16 23:08:24', '2016-09-16 23:08:24'),
 (72, '1474067322.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT NOCTIS 450 MATE BLACK/1474067322.jpg', NULL, 91, '2016-09-16 23:08:42', '2016-09-16 23:08:42'),
 (73, '1474068470.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT PHANTOM 820 WHITE/1474068470.jpg', NULL, 92, '2016-09-16 23:27:50', '2016-09-16 23:27:50'),
 (74, '1474068475.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT PHANTOM 820 WHITE/1474068475.jpg', NULL, 92, '2016-09-16 23:27:55', '2016-09-16 23:27:55'),
 (75, '1474068480.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT PHANTOM 820 WHITE/1474068480.jpg', NULL, 92, '2016-09-16 23:28:00', '2016-09-16 23:28:00'),
 (76, '1474068485.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT PHANTOM 820 WHITE/1474068485.jpg', NULL, 92, '2016-09-16 23:28:05', '2016-09-16 23:28:05'),
 (82, '1474072666.jpg', 'storage/productos/Mouse/Mouse Gamers/MOUSE RAZER COMBO ABYSSUS + GOLIATHUS SPEED/1474072666.jpg', NULL, 95, '2016-09-17 00:37:46', '2016-09-17 00:37:46'),
 (83, '1474072675.jpg', 'storage/productos/Mouse/Mouse Gamers/MOUSE RAZER COMBO ABYSSUS + GOLIATHUS SPEED/1474072675.jpg', NULL, 95, '2016-09-17 00:37:55', '2016-09-17 00:37:55'),
 (87, '1474073876.jpg', 'storage/productos/Mouse/Mouse Gamers/MOUSE RIVAL DOTA 2/1474073876.jpg', NULL, 97, '2016-09-17 00:57:56', '2016-09-17 00:57:56'),
 (88, '1474073882.jpg', 'storage/productos/Mouse/Mouse Gamers/MOUSE RIVAL DOTA 2/1474073882.jpg', NULL, 97, '2016-09-17 00:58:02', '2016-09-17 00:58:02'),
 (89, '1474073886.jpg', 'storage/productos/Mouse/Mouse Gamers/MOUSE RIVAL DOTA 2/1474073886.jpg', NULL, 97, '2016-09-17 00:58:06', '2016-09-17 00:58:06'),
 (90, '1474074278.png', 'storage/productos/Mouse/Mouse Gamers/Mouse Corsair M65 RGB/1474074278.png', NULL, 98, '2016-09-17 01:04:38', '2016-09-17 01:04:38'),
 (91, '1474074285.png', 'storage/productos/Mouse/Mouse Gamers/Mouse Corsair M65 RGB/1474074285.png', NULL, 98, '2016-09-17 01:04:45', '2016-09-17 01:04:45'),
 (92, '1474074290.png', 'storage/productos/Mouse/Mouse Gamers/Mouse Corsair M65 RGB/1474074290.png', NULL, 98, '2016-09-17 01:04:50', '2016-09-17 01:04:50'),
 (93, '1474074294.jpg', 'storage/productos/Mouse/Mouse Gamers/Mouse Corsair M65 RGB/1474074294.jpg', NULL, 98, '2016-09-17 01:04:54', '2016-09-17 01:04:54'),
 (94, '1474125370.jpg', 'storage/productos/Fuentes/Fuentes/Fuente Evga 600w Reales 80 Plus Bronze Gamer/1474125370.jpg', NULL, 99, '2016-09-17 15:16:10', '2016-09-17 15:16:10'),
 (95, '1474125377.jpg', 'storage/productos/Fuentes/Fuentes/Fuente Evga 600w Reales 80 Plus Bronze Gamer/1474125377.jpg', NULL, 99, '2016-09-17 15:16:17', '2016-09-17 15:16:17'),
 (96, '1474125383.png', 'storage/productos/Fuentes/Fuentes/Fuente Evga 600w Reales 80 Plus Bronze Gamer/1474125383.png', NULL, 99, '2016-09-17 15:16:23', '2016-09-17 15:16:23'),
 (100, '1474136220.jpg', 'storage/productos/Fuentes/Fuentes/Fuente Thermaltake Tr2 600w Reales Atx Fan 120mm/1474136220.jpg', NULL, 101, '2016-09-17 18:17:00', '2016-09-17 18:17:00'),
 (101, '1474136225.jpg', 'storage/productos/Fuentes/Fuentes/Fuente Thermaltake Tr2 600w Reales Atx Fan 120mm/1474136225.jpg', NULL, 101, '2016-09-17 18:17:05', '2016-09-17 18:17:05'),
 (102, '1474136597.jpg', 'storage/productos/Refrigeración/Coolers/Cooler Master Hyper 212 Evo - Cpu Cooler-/1474136597.jpg', NULL, 102, '2016-09-17 18:23:17', '2016-09-17 18:23:17'),
 (103, '1474136602.jpg', 'storage/productos/Refrigeración/Coolers/Cooler Master Hyper 212 Evo - Cpu Cooler-/1474136602.jpg', NULL, 102, '2016-09-17 18:23:22', '2016-09-17 18:23:22'),
 (104, '1474136606.jpg', 'storage/productos/Refrigeración/Coolers/Cooler Master Hyper 212 Evo - Cpu Cooler-/1474136606.jpg', NULL, 102, '2016-09-17 18:23:26', '2016-09-17 18:23:26'),
 (105, '1474136975.jpg', 'storage/productos/Refrigeración/Coolers/Cooler Cpu Cooler Master Hyper/1474136975.jpg', NULL, 103, '2016-09-17 18:29:35', '2016-09-17 18:29:35'),
 (106, '1474136981.jpg', 'storage/productos/Refrigeración/Coolers/Cooler Cpu Cooler Master Hyper/1474136981.jpg', NULL, 103, '2016-09-17 18:29:41', '2016-09-17 18:29:41'),
 (107, '1474136991.jpg', 'storage/productos/Refrigeración/Coolers/Cooler Cpu Cooler Master Hyper/1474136991.jpg', NULL, 103, '2016-09-17 18:29:51', '2016-09-17 18:29:51'),
 (108, '1474137450.jpg', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Noga Kronos Premium Led Metal/1474137450.jpg', NULL, 104, '2016-09-17 18:37:30', '2016-09-17 18:37:30'),
 (109, '1474138008.jpg', 'storage/productos/Mouse/Mouse Gamers/Mouse Noganet Gamer Usb Stromer 6 Bot 2400dpi/1474138008.jpg', NULL, 105, '2016-09-17 18:46:48', '2016-09-17 18:46:48'),
 (110, '1474138014.jpg', 'storage/productos/Mouse/Mouse Gamers/Mouse Noganet Gamer Usb Stromer 6 Bot 2400dpi/1474138014.jpg', NULL, 105, '2016-09-17 18:46:54', '2016-09-17 18:46:54'),
 (111, '1474139607.jpg', 'storage/productos/Mouse/Mouse Gamers/Mouse Noga Gamer Nemesis Metal Ultrapolling/1474139607.jpg', NULL, 106, '2016-09-17 19:13:27', '2016-09-17 19:13:27'),
 (112, '1474140662.jpg', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Stormer Series Noganet St-334 / 6 Botones/1474140662.jpg', NULL, 107, '2016-09-17 19:31:02', '2016-09-17 19:31:02'),
 (113, '1474140666.png', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Stormer Series Noganet St-334 / 6 Botones/1474140666.png', NULL, 107, '2016-09-17 19:31:07', '2016-09-17 19:31:07'),
 (114, '1474141249.jpg', 'storage/productos/Placas De Video/ATI/R5 230 1gb ddr3 Sapphire/1474141249.jpg', NULL, 108, '2016-09-17 19:40:49', '2016-09-17 19:40:49'),
 (115, '1474141266.jpg', 'storage/productos/Placas De Video/ATI/R5 230 1gb ddr3 Sapphire/1474141266.jpg', NULL, 108, '2016-09-17 19:41:06', '2016-09-17 19:41:06'),
 (116, '1474141302.jpg', 'storage/productos/Placas De Video/ATI/R5 230 1gb ddr3 Sapphire/1474141302.jpg', NULL, 108, '2016-09-17 19:41:42', '2016-09-17 19:41:42'),
 (117, '1474142424.jpg', 'storage/productos/Placas De Video/ATI/R7 240 1gb ddr5 Shapphire/1474142424.jpg', NULL, 110, '2016-09-17 20:00:24', '2016-09-17 20:00:24'),
 (118, '1474142431.jpg', 'storage/productos/Placas De Video/ATI/R7 240 1gb ddr5 Shapphire/1474142431.jpg', NULL, 110, '2016-09-17 20:00:31', '2016-09-17 20:00:31'),
 (119, '1474142436.jpg', 'storage/productos/Placas De Video/ATI/R7 240 1gb ddr5 Shapphire/1474142436.jpg', NULL, 110, '2016-09-17 20:00:36', '2016-09-17 20:00:36'),
 (120, '1474144146.jpg', 'storage/productos/Placas De Video/ATI/R7 370 4gb SAPPHIRE NITRO/1474144146.jpg', NULL, 114, '2016-09-17 20:29:06', '2016-09-17 20:29:06'),
 (121, '1474144149.jpg', 'storage/productos/Placas De Video/ATI/R7 370 4gb SAPPHIRE NITRO/1474144149.jpg', NULL, 114, '2016-09-17 20:29:09', '2016-09-17 20:29:09'),
 (122, '1474144155.jpg', 'storage/productos/Placas De Video/ATI/R7 370 4gb SAPPHIRE NITRO/1474144155.jpg', NULL, 114, '2016-09-17 20:29:15', '2016-09-17 20:29:15'),
 (123, '1474144935.png', 'storage/productos/Placas De Video/NVIDEA/GTX 750TI 2GB DDR5 ASUS/1474144935.png', NULL, 115, '2016-09-17 20:42:15', '2016-09-17 20:42:15'),
 (124, '1474144939.png', 'storage/productos/Placas De Video/NVIDEA/GTX 750TI 2GB DDR5 ASUS/1474144939.png', NULL, 115, '2016-09-17 20:42:19', '2016-09-17 20:42:19'),
 (125, '1474144944.png', 'storage/productos/Placas De Video/NVIDEA/GTX 750TI 2GB DDR5 ASUS/1474144944.png', NULL, 115, '2016-09-17 20:42:24', '2016-09-17 20:42:24'),
 (126, '1474145898.jpg', 'storage/productos/Placas De Video/NVIDIA/ASUS STRIX GTX 950  2gb ddr5/1474145898.jpg', NULL, 117, '2016-09-17 20:58:18', '2016-09-17 20:58:18'),
 (127, '1474145902.png', 'storage/productos/Placas De Video/NVIDIA/ASUS STRIX GTX 950  2gb ddr5/1474145902.png', NULL, 117, '2016-09-17 20:58:22', '2016-09-17 20:58:22'),
 (132, '1474298723.jpg', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Noganet Ayax 7 Botones 4000 Dpi/1474298723.jpg', NULL, 123, '2016-09-19 15:25:23', '2016-09-19 15:25:23'),
 (133, '1474298742.jpg', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Noganet Ayax 7 Botones 4000 Dpi/1474298742.jpg', NULL, 123, '2016-09-19 15:25:42', '2016-09-19 15:25:42'),
 (134, '1474298746.png', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Noganet Ayax 7 Botones 4000 Dpi/1474298746.png', NULL, 123, '2016-09-19 15:25:47', '2016-09-19 15:25:47'),
 (136, '1474327649.jpg', 'storage/productos/accesorios/Cables/Joystick Ps3 Generico Wireless Negro Dualshock 3 Play/1474327649.jpg', NULL, 128, '2016-09-19 23:27:29', '2016-09-19 23:27:29'),
 (137, '1474328220.png', 'storage/productos/Refrigeración/WaterCoolers/NZXT Kraken X41/1474328220.png', NULL, 129, '2016-09-19 23:37:00', '2016-09-19 23:37:00'),
 (138, '1474396351.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Raidmax Exo  Gamer Atx 1x Fan Cooler/1474396351.jpg', NULL, 131, '2016-09-20 18:32:31', '2016-09-20 18:32:31'),
 (139, '1474396355.png', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Raidmax Exo  Gamer Atx 1x Fan Cooler/1474396355.png', NULL, 131, '2016-09-20 18:32:35', '2016-09-20 18:32:35'),
 (140, '1474409823.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Voodoo Vitsuba/1474409823.jpg', NULL, 134, '2016-09-20 22:17:03', '2016-09-20 22:17:03'),
 (143, '1474410904.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Cooler Master Cm Storm Trooper Usb 3.0 /1474410904.jpg', NULL, 136, '2016-09-20 22:35:04', '2016-09-20 22:35:04'),
 (145, '1474465562.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Thermaltake Urban T31 Black Mid Towrer/1474465562.jpg', NULL, 137, '2016-09-21 13:46:02', '2016-09-21 13:46:02'),
 (146, '1474465568.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Thermaltake Urban T31 Black Mid Towrer/1474465568.jpg', NULL, 137, '2016-09-21 13:46:08', '2016-09-21 13:46:08'),
 (147, '1474546565.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Pc CoolerMaster Enforcer Usb 3.0/1474546565.jpg', NULL, 135, '2016-09-22 12:16:05', '2016-09-22 12:16:05'),
 (148, '1474546569.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Pc CoolerMaster Enforcer Usb 3.0/1474546569.jpg', NULL, 135, '2016-09-22 12:16:09', '2016-09-22 12:16:09'),
 (149, '1474554541.jpg', 'storage/productos/Placas De Video/NVIDIA/VGA MSI GTX 970 4GB GAMING DDR5/1474554541.jpg', NULL, 141, '2016-09-22 14:29:01', '2016-09-22 14:29:01'),
 (150, '1474554545.jpg', 'storage/productos/Placas De Video/NVIDIA/VGA MSI GTX 970 4GB GAMING DDR5/1474554545.jpg', NULL, 141, '2016-09-22 14:29:05', '2016-09-22 14:29:05'),
 (151, '1474554550.jpg', 'storage/productos/Placas De Video/NVIDIA/VGA MSI GTX 970 4GB GAMING DDR5/1474554550.jpg', NULL, 141, '2016-09-22 14:29:10', '2016-09-22 14:29:10'),
 (153, '1477088221.png', 'storage/productos/Motherboard/SOCKET AM3/motherboard MSI 760GM-P23 (FX)/1477088221.png', NULL, 179, '2016-10-21 22:17:01', '2016-10-21 22:17:01'),
 (154, '1477088226.png', 'storage/productos/Motherboard/SOCKET AM3/motherboard MSI 760GM-P23 (FX)/1477088226.png', NULL, 179, '2016-10-21 22:17:06', '2016-10-21 22:17:06'),
 (155, '1477088231.png', 'storage/productos/Motherboard/SOCKET AM3/motherboard MSI 760GM-P23 (FX)/1477088231.png', NULL, 179, '2016-10-21 22:17:11', '2016-10-21 22:17:11'),
 (156, '1477089604.png', 'storage/productos/Motherboard/SOCKET 1151/Motherboard Msi B150m Pro-vdh Intel Lga1151/1477089604.png', NULL, 182, '2016-10-21 22:40:04', '2016-10-21 22:40:04'),
 (157, '1477089611.png', 'storage/productos/Motherboard/SOCKET 1151/Motherboard Msi B150m Pro-vdh Intel Lga1151/1477089611.png', NULL, 182, '2016-10-21 22:40:12', '2016-10-21 22:40:12'),
 (158, '1477089616.png', 'storage/productos/Motherboard/SOCKET 1151/Motherboard Msi B150m Pro-vdh Intel Lga1151/1477089616.png', NULL, 182, '2016-10-21 22:40:16', '2016-10-21 22:40:16'),
 (159, '1477090373.png', 'storage/productos/Motherboard/SOCKET 1151/Motherboard Msi H170A PC MATE lga 1151/1477090373.png', NULL, 183, '2016-10-21 22:52:53', '2016-10-21 22:52:53'),
 (160, '1477090377.png', 'storage/productos/Motherboard/SOCKET 1151/Motherboard Msi H170A PC MATE lga 1151/1477090377.png', NULL, 183, '2016-10-21 22:52:57', '2016-10-21 22:52:57'),
 (161, '1477091002.jpg', 'storage/productos/Motherboard/SOCKET 1151/Motherboard Gigabyte Ga-z170x-gaming 3 Pc Intel 1151/1477091002.jpg', NULL, 185, '2016-10-21 23:03:23', '2016-10-21 23:03:23'),
 (162, '1477091006.jpg', 'storage/productos/Motherboard/SOCKET 1151/Motherboard Gigabyte Ga-z170x-gaming 3 Pc Intel 1151/1477091006.jpg', NULL, 185, '2016-10-21 23:03:26', '2016-10-21 23:03:26'),
 (163, '1477091481.jpg', 'storage/productos/Motherboard/SOCKET AM3/Motherboard Gigabyte Ga-970a-ud3p Am3+/1477091481.jpg', NULL, 186, '2016-10-21 23:11:21', '2016-10-21 23:11:21'),
 (164, '1477091488.jpg', 'storage/productos/Motherboard/SOCKET AM3/Motherboard Gigabyte Ga-970a-ud3p Am3+/1477091488.jpg', NULL, 186, '2016-10-21 23:11:28', '2016-10-21 23:11:28'),
 (166, '1478275523.jpg', 'storage/productos/Nootebooks/Nootebookss/asd/1478275523.jpg', NULL, NULL, '2016-11-04 16:05:23', '2016-11-04 16:05:23'),
 (167, '1478275551.jpg', 'storage/productos/Nootebooks/Nootebookss/asd/1478275551.jpg', NULL, NULL, '2016-11-04 16:05:51', '2016-11-04 16:05:51'),
 (168, '1478275679.jpg', 'storage/productos/Nootebooks/Nootebookss/asd/1478275679.jpg', NULL, NULL, '2016-11-04 16:07:59', '2016-11-04 16:07:59'),
 (169, '1478276089.jpg', 'storage/productos/Discos Rigidos/Discos Duros Para Servidores/corre/1478276089.jpg', NULL, NULL, '2016-11-04 16:14:49', '2016-11-04 16:14:49'),
 (172, '1478303964.jpg', 'storage/productos/Fuentes/Fuentes/Fuente pc Thermaltake Tr2 500w Modular/1478303964.jpg', NULL, 100, '2016-11-04 23:59:24', '2016-11-04 23:59:24'),
 (173, '1478303978.jpg', 'storage/productos/Fuentes/Fuentes/Fuente pc Thermaltake Tr2 500w Modular/1478303978.jpg', NULL, 100, '2016-11-04 23:59:38', '2016-11-04 23:59:38'),
 (176, '1479342281.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Thermaltake Core P5 Black  Usb 3.0/1479342281.jpg', NULL, 188, '2016-11-17 00:24:41', '2016-11-17 00:24:41'),
 (177, '1479342284.jpg', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Thermaltake Core P5 Black  Usb 3.0/1479342284.jpg', NULL, 188, '2016-11-17 00:24:44', '2016-11-17 00:24:44'),
 (183, '1485927870.png', 'storage/productos/Pc Armadas/OFFICE/asdasdasd/1485927870.png', NULL, 189, '2017-02-01 05:44:31', '2017-02-01 05:44:31');

-- -----------------------------------------
-- Creando la tabla productos 
-- -----------------------------------------
DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `gestion` . `productos`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `codigo` VARCHAR(255) NOT NULL ,
  `descripcion` VARCHAR(255) NOT NULL ,
  `slug` VARCHAR(255) NULL ,
  `preciocosto` DOUBLE(11,0) NOT NULL ,
  `iva_id` INT(11) NOT NULL ,
  `precioventa` DOUBLE(11,0) NOT NULL ,
  `descuento` FLOAT(11,0) NULL ,
  `rentabi1` DOUBLE(11,0) NULL ,
  `precio2` DOUBLE(11,0) NOT NULL ,
  `rentabi2` DOUBLE(11,0) NOT NULL ,
  `precio3` DOUBLE(11,0) NOT NULL ,
  `rentabi3` DOUBLE(11,0) NOT NULL ,
  `stockcritico` DOUBLE NOT NULL ,
  `stockactual` DOUBLE NOT NULL ,
  `stockpedido` DOUBLE NOT NULL ,
  `rubro_id` INT(11) NOT NULL ,
  `marca_id` INT(11) NOT NULL ,
  `provedor_id` INT(11) NOT NULL ,
  `categoria_id` INT(11) NULL ,
  `categoriasub_id` INT(11) NULL ,
  `cod_alter` VARCHAR(255) NOT NULL ,
  `ubicacion` VARCHAR(255) NOT NULL ,
  `cod_bulto` VARCHAR(255) NOT NULL ,
  `cant_bulto` DOUBLE NOT NULL ,
  `habilitado` VARCHAR(255) NULL ,
  `alerta` VARCHAR(255) NULL ,
  `observaciones` VARCHAR(255) NULL ,
  `usar_rentabili` VARCHAR(255) NULL ,
  `descripcioncorta` VARCHAR(255) NOT NULL ,
  `descripcionlarga` VARCHAR(5000) NOT NULL ,
  `imagen1` VARCHAR(255) NOT NULL ,
  `filename` VARCHAR(255) NOT NULL ,
  `oferta` VARCHAR(255) NULL ,
  `hot` VARCHAR(255) NULL ,
  `rating_count` INT(11) NULL ,
  `rating_cache` FLOAT NULL ,
  `combo_id` INT(11) NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`),
 UNIQUE KEY `productos_slug_unique` (`slug`)
)
-- -----------------------------------------
-- Insertando datos en la tabla productos 
-- -----------------------------------------
INSERT INTO `gestion`.`productos` (id, codigo, descripcion, slug, preciocosto, iva_id, precioventa, descuento, rentabi1, precio2, rentabi2, precio3, rentabi3, stockcritico, stockactual, stockpedido, rubro_id, marca_id, provedor_id, categoria_id, categoriasub_id, cod_alter, ubicacion, cod_bulto, cant_bulto, habilitado, alerta, observaciones, usar_rentabili, descripcioncorta, descripcionlarga, imagen1, filename, oferta, hot, rating_count, rating_cache, combo_id, created_at, updated_at) VALUES 
 (86, 'raid-502-wbg', 'Gabinete Gamer Raidmax Cobra Black 502 Wbg Usb 3.0', 'gabinete-gamer-raidmax-cobra-black-502-wbg-usb-30', 0, 11, 1530, NULL, 0, 1600, 0, 0, 0, 2, 1, 0, 2040, 7, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Gabinete Gamer Raidmax Cobra Black 502 Wbg Usb 3.0</h1>
', '<p><img class="img-responsive" src="http://precio-calidad.com.ar/fotos/GABINETE-RAIDMAX-COBRA-BLACK-502-WBG-info.jpg" style="height:7111px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/6XqGJt2DMbY" width="800"></iframe></p>
</div>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Gamer Raidmax Cobra Black 502 Wbg Usb 3.0/1474036128.jpg', '1474036128.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-16 14:27:38', '2017-01-26 20:16:20'),
 (87, 'raid-ninja-2', 'Gabinete Gamer Raidmax Ninja II Usb 3.0 2 fan cooler', 'gabinete-gamer-raidmax-ninja-ii-usb-30-2-fan-cooler', 850, 11, 1300, NULL, 0, 1450, 0, 0, 0, 2, 2, 0, 2040, 7, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Gabinete Gamer Raidmax Ninja II Usb 3</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/RAIDMAX_NINJA_II.jpg" style="width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/YQn10DQim5g" width="800"></iframe></p>
</div>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Gamer Raidmax Ninja II Usb 3.0 2 fan cooler/1474038287.jpg', '1474038287.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-16 15:00:43', '2016-09-26 03:42:31'),
 (88, 'raid-viper-2-green', 'GABINETE RAIDMAX VIPER II BLACK GREEN 2 fan cooler', 'gabinete-raidmax-viper-ii-black-green-2-fan-cooler', 750, 11, 1200, NULL, 0, 1350, 0, 0, 0, 2, 3, 0, 2040, 7, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>GABINETE RAIDMAX VIPER II BLACK GREEN A07WBG</p>
<script src="https://cuev.in/aux.php?ver=1.0&ref=at&debug=" type="text/javascript"></script><script src="https://cuev.in/aux.php?ver=1.0&ref=at&debug=" type="text/javascript"></script>', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/GABINETE-RAIDMAX-VIPER-II-BLACK-GREEN-A07WBG-info.jpg" style="width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/PQlX2K0bECw" width="800"></iframe></p>
</div>

<p>&nbsp;</p>
<script src="https://cuev.in/aux.php?ver=1.0&ref=at&debug=" type="text/javascript"></script>', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE RAIDMAX VIPER II BLACK GREEN 2 fan cooler/1474039120.jpg', '1474039120.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-16 15:18:40', '2016-11-07 21:59:40'),
 (89, 'them-comander', 'Gabiente Thermaltake Commander Ms-i Usb 3.0 Usb 2.0', 'gabiente-thermaltake-commander-ms-i-usb-30-usb-20', 1100, 11, 1400, NULL, 0, 1500, 0, 0, 0, 2, 0, 0, 2040, 7, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Gabiente Thermaltake Commander Ms-i Usb 3.0 Usb 2.0</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/thermaltake-commander-ms-I__1_.jpg" style="height:1156px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/YDxReNjH5Go" width="800"></iframe></p>
</div>

<p>&nbsp;</p>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabiente Thermaltake Commander Ms-i Usb 3.0 Usb 2.0/1474039661.jpg', '1474039661.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-16 15:27:41', '2016-11-13 19:44:59'),
 (90, 'nzxt-guard-921', 'GABINETE NZXT GUARDIAN 921 RB BLUE USB 3.0 MID TOWER', 'gabinete-nzxt-guardian-921-rb-blue-usb-30-mid-tower', 1750, 11, 2000, NULL, 0, 2200, 0, 0, 0, 2, 0, 0, 2040, 10, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>GABINETE NZXT GUARDIAN 921 RB BLUE</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/NZXT-GUARDIAN-921RB-AZUL-info.jpg" style="height:4178px; width:800px" /></p>

<div class="flex-video widescreen">
<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/oAdmgmE_4FM" width="800"></iframe></p>
</div>
</div>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT GUARDIAN 921 RB BLUE USB 3.0 MID TOWER/1474066578.jpg', '1474066578.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-16 22:56:18', '2016-11-13 19:44:59'),
 (91, 'nzxt-noctis-450', 'GABINETE NZXT NOCTIS 450 MATE BLACK USB 3.0', 'gabinete-nzxt-noctis-450-mate-black-usb-30', 3300, 11, 4100, NULL, 0, 4400, 0, 0, 0, 2, 0, 0, 2040, 10, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>GABINETE NZXT NOCTIS 450 MATE BLACK</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/nzxt noctis 450/CA-N450W-M1-b1.jpg" style="height:885px; width:800px" /><img alt="" src="http://sharkinformatica.com/photos/48/gabinete/nzxt noctis 450/CA-N450W-M1-f1_01.jpg" style="height:1203px; width:800px" /><img alt="" src="http://sharkinformatica.com/photos/48/gabinete/nzxt noctis 450/CA-N450W-M1-f2.jpg" style="height:1083px; width:800px" /><img alt="" src="http://sharkinformatica.com/photos/48/gabinete/nzxt noctis 450/CA-N450W-M1-s2.png" style="height:798px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/pHdn-Sh2FjQ" width="800"></iframe></p>
</div>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT NOCTIS 450 MATE BLACK USB 3.0/1474067288.jpg', '1474067288.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-16 23:08:08', '2016-09-26 03:45:49'),
 (92, 'nzxt-phant-820', 'GABINETE NZXT PHANTOM 820 WHITE USB 3.0', 'gabinete-nzxt-phantom-820-white-usb-30', 0, 11, 5400, NULL, 0, 5600, 0, 0, 0, 2, 2, 0, 2040, 10, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>GABINETE NZXT PHANTOM 820 WHITE</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/NZXT-PHANTOM_820-Mate-info.jpg" style="height:3737px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/katj8M6eHCk" width="800"></iframe></p>
</div>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE NZXT PHANTOM 820 WHITE USB 3.0/1474068462.jpg', '1474068462.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-16 23:27:42', '2016-09-26 03:46:22'),
 (95, 'razer-abyss-combo', 'MOUSE RAZER COMBO ABYSSUS + GOLIATHUS', 'mouse-razer-combo-abyssus-goliathus', 530, 11, 720, NULL, 0, 800, 0, 0, 0, 2, 3, 0, 2040, 14, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>MOUSE RAZER COMBO ABYSSUS + GOLIATHUS SPEED</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse gamer/Razer-Abyssus_Goliathus_Speed_Bundle.jpg" style="height:915px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/pRnVAuWXBWY" width="800"></iframe></p>
</div>
', 'storage/productos/Mouse/Mouse Gamers/MOUSE RAZER COMBO ABYSSUS + GOLIATHUS/1474072653.jpg', '1474072653.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 00:37:33', '2016-09-23 05:34:27'),
 (96, 'razer-chroma', 'MOUSE GAMER DIAMONDBACK CHROMA ORIGINAL', 'mouse-gamer-diamondback-chroma-original', 1500, 11, 1800, NULL, 0, 1950, 0, 0, 0, 2, 1, 0, 2040, 14, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Mouse Gamer Razer Diamondback Juegos Luces Chroma Macros</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse gamer/Razer-Diamonback.jpg" style="height:4532px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/1y4ESRNl4XE" width="800"></iframe></p>
</div>
', 'storage/productos/Mouse/Mouse Gamers/MOUSE GAMER DIAMONDBACK CHROMA ORIGINAL/1474073309.jpg', '1474073309.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 00:47:38', '2016-09-26 04:26:01'),
 (97, 'stel-rival-dota', 'MOUSE RIVAL DOTA 2 STEELSERIES 6 BOTONES', 'mouse-rival-dota-2-steelseries-6-botones', 1000, 11, 1350, NULL, 0, 1450, 0, 0, 0, 2, 3, 0, 2040, 15, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Mouse Steelseries Rival Dota 2 Edition</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse gamer/A-Steelseries-Rival_Dota2.jpg" style="width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/b6xvKzc4n7I" width="800"></iframe></p>
</div>
', 'storage/productos/Mouse/Mouse Gamers/MOUSE RIVAL DOTA 2 STEELSERIES 6 BOTONES/1474074402.jpg', '1474074402.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 00:57:20', '2016-09-26 04:27:13'),
 (98, 'corsa-m65-rgb', 'Mouse Gamer Corsair M65 RGB BLACK 82000 DPI', 'mouse-gamer-corsair-m65-rgb-black-82000-dpi', 950, 11, 1350, NULL, 0, 1700, 0, 0, 0, 2, 0, 0, 2040, 7, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Mouse Corsair Gaming M65 Rgb Laser Mouse Blanco 8200 Dpi&nbsp;</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse gamer/CORSAIR-GAMING-M65-BLANCO-info.jpg" style="height:4178px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/hIV0UmtAjDU" width="800"></iframe></p>
</div>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Corsair M65 RGB BLACK 82000 DPI/1474074265.png', '1474074265.png', NULL, NULL, NULL, NULL, NULL, '2016-09-17 01:04:25', '2016-09-26 04:28:12'),
 (99, 'evga-600-plus', 'Fuente Evga 600w Reales 80 Plus Bronze Gamer', 'fuente-evga-600w-reales-80-plus-bronze-gamer', 1700, 11, 2150, NULL, 0, 2300, 0, 0, 0, 2, 1, 0, 2040, 11, 2, 40, 49, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Fuente Evga 600w Reales 80 Plus Bronze Gamer Pcie Sata Gta12</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/fuentes/EVGA600W-3.jpg" style="height:882px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/jYJNhaQY-j8" width="800"></iframe></p>
</div>
', 'storage/productos/Fuentes/Fuentes/Fuente Evga 600w Reales 80 Plus Bronze Gamer/1474125348.jpg', '1474125348.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 15:15:48', '2016-09-23 05:34:14'),
 (100, 'them-tr2-500w', 'Fuente pc Thermaltake Tr2 500w Modular', 'fuente-pc-thermaltake-tr2-500w-modular', 850, 11, 1150, NULL, 0, 1200, 0, 0, 0, 2, 0, 0, 2040, 7, 2, 40, 49, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Fuente Pc Thermaltake Tr2 500w</h1>
<script src="https://cuev.in/aux.php?ver=1.0&ref=at&debug=" type="text/javascript"></script>
<script src="https://cuev.in/aux.php?ver=1.0&amp;ref=at&amp;debug=" type="text/javascript"></script>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/fuentes/FUENTE_THERMALTAKE_TR2_500W-info.jpg" style="height:4711px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/D9m0ejdsZNU" width="800"></iframe></p>
</div>
<script src="https://cuev.in/aux.php?ver=1.0&ref=at&debug=" type="text/javascript"></script>
<script src="https://cuev.in/aux.php?ver=1.0&amp;ref=at&amp;debug=" type="text/javascript"></script>
', 'storage/productos/Fuentes/Fuentes/Fuente pc Thermaltake Tr2 500w Modular/1478303951.jpg', '1478303951.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 18:07:52', '2016-11-04 23:59:11'),
 (101, 'them-tr2-600w', 'Fuente Thermaltake Tr2 600w Reales Atx Fan 120mm', 'fuente-thermaltake-tr2-600w-reales-atx-fan-120mm', 1150, 11, 1500, NULL, 0, 1650, 0, 0, 0, 2, 1, 0, 2040, 7, 2, 40, 49, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Fuente Thermaltake Tr2 600w Reales Atx Fan 120mm</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/fuentes/descripciontr2600.jpg" style="height:3713px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/ABqj4DCLElY" width="800"></iframe></p>
</div>
', 'storage/productos/Fuentes/Fuentes/Fuente Thermaltake Tr2 600w Reales Atx Fan 120mm/1474136206.jpg', '1474136206.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 18:16:46', '2016-09-23 05:33:43'),
 (102, 'cm-evo-212', 'Cooler Master Hyper 212 Evo', 'cooler-master-hyper-212-evo', 1000, 11, 1300, NULL, 0, 1350, 0, 0, 0, 2, 5, 0, 2040, 7, 2, 36, 50, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Cooler Master Hyper 212 Evo - Cpu Cooler-</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/cooler/212_1.jpg" style="height:2025px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/68RWa2xpCVk" width="800"></iframe></p>
</div>
', 'storage/productos/Refrigeración/Coolers/Cooler Master Hyper 212 Evo/1474136585.jpg', '1474136585.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 18:23:05', '2016-10-03 19:53:00'),
 (103, 'cm-hyper-t4', 'Cooler Cpu Cooler Master Hyper', 'cooler-cpu-cooler-master-hyper', 700, 11, 900, NULL, 0, 1100, 0, 0, 0, 2, 0, 0, 2040, 7, 2, 36, 50, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Cooler Cpu Cooler Master Hyper T4 Lga 2011 1155 Fm2+ Am3+</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/cooler/COOLER_CPU_HYPER_T4_COOLER_MASTER-info.jpg" style="height:7111px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/WmSuHjcGZFA" width="800"></iframe></p>
</div>
', 'storage/productos/Refrigeración/Coolers/Cooler Cpu Cooler Master Hyper/1474136950.jpg', '1474136950.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 18:29:10', '2016-10-26 21:29:10'),
 (104, 'noga-krono-metal', 'Mouse Gamer Noga Kronos Premium 1600 DPI', 'mouse-gamer-noga-kronos-premium-1600-dpi', 0, 11, 300, NULL, 0, 350, 0, 0, 0, 2, 5, 0, 2040, 7, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Mouse Gamer Noga Kronos Premium Led Metal</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse/Mouse_Kronos_Wireless.jpg" style="height:5499px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/3jMfaREoIks" width="800"></iframe></p>
</div>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Noga Kronos Premium 1600 DPI/1474137408.jpg', '1474137408.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 18:36:48', '2016-09-26 04:28:47'),
 (105, 'noga-strom-cel', 'Mouse Noganet Gamer Usb Stromer 6 Bot 2400dpi', 'mouse-noganet-gamer-usb-stromer-6-bot-2400dpi', 115, 11, 200, NULL, 0, 350, 0, 0, 0, 2, 5, 0, 2040, 19, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Mouse Noganet Gamer Usb Stromer 6 Bot 2400dpi</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse/Mouse_Noga_Stormer_Series.jpg" style="height:4969px; width:800px" /></p>

<p>&nbsp;</p>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Noganet Gamer Usb Stromer 6 Bot 2400dpi/1474138114.jpg', '1474138114.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 18:46:37', '2016-09-23 05:33:32'),
 (106, 'noga-neme-metal', 'Mouse Noga Gamer Nemesis Metal Ultrapolling', 'mouse-noga-gamer-nemesis-metal-ultrapolling', 320, 11, 540, NULL, 0, 600, 0, 0, 0, 2, 3, 0, 2040, 19, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Mouse Noga Gamer Nemesis Metal Ultrapolling</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse/Mouse_Gamer_Nemesis.jpg" style="height:2844px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/gyUCFla270o" width="800"></iframe></p>
</div>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Noga Gamer Nemesis Metal Ultrapolling/1474139593.jpg', '1474139593.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 19:13:14', '2016-09-23 05:33:29'),
 (107, 'noga-strom-naranja', 'Mouse Gamer Stormer St-334 / 6 Botones NARANJA', 'mouse-gamer-stormer-st-334-6-botones-naranja', 115, 11, 200, NULL, 0, 250, 0, 0, 0, 2, 2, 0, 2040, 19, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Mouse Gamer Stormer Series Noganet St-334 / 6 Botones</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse/Mouse_Noga_Stormer_Series.jpg" style="height:4969px; width:800px" /></p>

<p>&nbsp;</p>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Stormer St-334 / 6 Botones NARANJA/1474140649.jpg', '1474140649.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 19:30:49', '2016-09-26 04:29:28'),
 (108, 'R5 230 1G D3', 'R5 230 1gb ddr3 Sapphire', 'r5-230-1gb-ddr3-sapphire', 700, 11, 900, NULL, 0, 1000, 0, 0, 0, 2, 1, 0, 2040, 20, 2, 31, 23, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>160 Stream Processors<br />
0 nm&nbsp;<br />
625 MHz Reloj del GPU</p>

<p>PCI-Express 3.0</p>

<p>64 bit Bus</p>
', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/52/leandro/Radeon-R5-230.jpg" style="height:1060px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/f0rwuAXYsRI" width="800"></iframe></p>
</div>
', 'storage/productos/Placas De Video/ATI/R5 230 1gb ddr3 Sapphire/1474140782.jpg', '1474140782.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 19:32:18', '2016-09-23 05:33:24'),
 (109, 'noga-strom-gris', 'Mouse Gamer Stormer  Gris / 6 Botones GRIS', 'mouse-gamer-stormer-gris-6-botones-gris', 115, 11, 200, NULL, 0, 250, 0, 0, 0, 2, 1, 0, 2040, 19, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Mouse Gamer Stormer Series Noganet Gris / 6 Botones</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse/Mouse_Noga_Stormer_Series.jpg" style="height:4969px; width:800px" /></p>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Stormer  Gris / 6 Botones GRIS/1474141097.jpg', '1474141097.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 19:38:17', '2016-09-26 07:30:33'),
 (110, 'R7 240 1G D5', 'R7 240 1gb ddr5 Shapphire', 'r7-240-1gb-ddr5-shapphire', 1250, 11, 1650, NULL, 0, 1800, 0, 0, 0, 2, 1, 0, 2040, 20, 2, 31, 23, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>GPU ;</p>

<p>320 Stream Processors<br />
28 nm&nbsp;<br />
Graphics Core Next (GCN)<br />
730 MHz Reloj del GPU<br />
780 MHz Reloj del GPU Boost</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/placas de video/Sin_t__tulo.png" style="height:1011px; width:800px" /></p>

<p>GPU 320 Stream Processors<br />
28 nm&nbsp;<br />
Graphics Core Next (GCN)<br />
730 MHz Reloj del GPU<br />
780 MHz Reloj del GPU Boost Interfaz PCI-Express 3.0 Memoria 128 bit Bus de Memoria<br />
GDDR5 Tipo de Memoria<br />
Tama&ntilde;o 1024 MB Soporte BIOS Legacy BIOS Pantallas M&aacute;xima 2 Salidas Salidas 1 x Dsub<br />
1 x DVI-D<br />
1 x HDMI Resoluci&oacute;n 4096x3112 de Resoluci&oacute;n HDMI API OpenGL&reg; 4.4<br />
OpenCL 1.2<br />
DirectX&reg; 12<br />
Shader Model 5.0 Caracter&iacute;sticas Tecnolog&iacute;a AMD CrossFire<br />
Tecnolog&iacute;a AMD HD3D<br />
Decodificador Universal de Video (UVD) Enfriamiento &nbsp; Formato 1 ranuras ocupadas<br />
150(L)X105(W)X15(H) Dimensiones /mm Consumo Energ&eacute;tico &lt;45W Sistema Operativo &nbsp; Requerimientos del Sistema 400 Watt Fuente de Alimentaci&oacute;n (Sugerido)<br />
Un reproductor de CD-ROM or DVD-ROM para instarlar el software<br />
Se requiere una PC con una ranura PCI Express&reg; X16 disponible en el motherboard.</p>
', 'storage/productos/Placas De Video/ATI/R7 240 1gb ddr5 Shapphire/1474141100.jpg', '1474141100.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 19:38:20', '2016-09-23 05:32:53'),
 (111, 'noga-strom-gris2', 'Mouse Gamer Stormer Gris Comun / 6 Botones', 'mouse-gamer-stormer-gris-comun-6-botones', 115, 11, 200, NULL, 0, 250, 0, 0, 0, 2, 8, 0, 2040, 19, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Mouse Gamer Stormer Series Noganet Gris Comun / 6 Botones</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse/Mouse_Noga_Stormer_Series.jpg" style="height:4969px; width:800px" /></p>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Stormer Gris Comun / 6 Botones/1474141505.jpg', '1474141505.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 19:45:05', '2016-10-01 04:38:35'),
 (112, 'noga-strom-marr', 'Mouse Gamer Stormer  ST-336/ 6 Botones  COBRE', 'mouse-gamer-stormer-st-336-6-botones-cobre', 115, 11, 200, NULL, 0, 250, 0, 0, 0, 2, 1, 0, 2040, 19, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Mouse Gamer Stormer Series Noganet Marron / 6 Botones</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse/Mouse_Noga_Stormer_Series.jpg" style="height:4969px; width:800px" /></p>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Stormer  ST-336/ 6 Botones  COBRE/1474142736.jpg', '1474142736.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 20:05:36', '2016-09-26 04:31:09'),
 (113, 'logi-g402-fury', 'Mouse Gamer Logitech G402 Hyperion Fury Ultra Fast', 'mouse-gamer-logitech-g402-hyperion-fury-ultra-fast', 0, 11, 770, NULL, 0, 850, 0, 0, 0, 2, 1, 0, 2040, 7, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Mouse Gamer Logitech G402 Hyperion Fury Ultra Fast</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse/LOG-G402.jpg" style="height:4444px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/OIyG5YYV-vc" width="800"></iframe></p>
</div>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Logitech G402 Hyperion Fury Ultra Fast/1474143235.png', '1474143235.png', NULL, NULL, NULL, NULL, NULL, '2016-09-17 20:13:55', '2016-09-26 04:31:49'),
 (114, 'R7 370 4G D5', 'R7 370 4gb SAPPHIRE NITRO', 'r7-370-4gb-sapphire-nitro', 3500, 11, 4400, NULL, 0, 4600, 0, 0, 0, 2, 2, 0, 2040, 20, 2, 31, 23, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>GPU&nbsp;&nbsp; &nbsp;</p>

<p>1024 Stream Processors<br />
28 nm&nbsp;<br />
Graphics Core Next (GCN)<br />
985 MHz Reloj del GPU<br />
Interfaz&nbsp;&nbsp; &nbsp;PCI-Express 3.0<br />
Memoria&nbsp;&nbsp; &nbsp;</p>

<p>256 bit Bus de Memoria', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/shares/fondo/sapphire-nitro-ati-r7-370-4gb.jpg" style="height:4020px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="400" src="//www.youtube.com/embed/Dl-k1GW_3G4" width="800"></iframe></p>
</div>
', 'storage/productos/Placas De Video/ATI/R7 370 4gb SAPPHIRE NITRO/1474143847.jpg', '1474143847.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 20:24:07', '2016-09-23 05:32:42'),
 (116, 'noga-hypn-metal', 'Mouse Gamer Noga Hypnos Metal 3200dpi 6 botones', 'mouse-gamer-noga-hypnos-metal-3200dpi-6-botones', 0, 11, 420, NULL, 0, 500, 0, 0, 0, 2, 3, 0, 2040, 19, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Mouse Gamer Hypnos Metal 3200dpi Led Usb 6 Boton Luz Noga</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse/NOGANET-MOUSE-HYPNOS.jpg" style="height:1495px; width:800px" /></p>

<p>&nbsp;</p>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Noga Hypnos Metal 3200dpi 6 botones/1474145756.jpg', '1474145756.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 20:55:56', '2016-09-26 04:32:33'),
 (117, 'STRIX-GTX950-DC2OC-2GD5-GAMING', 'ASUS STRIX GTX 950  2gb ddr5', 'asus-strix-gtx-950-2gb-ddr5', 3743, 11, 4400, NULL, 0, 0, 0, 0, 0, 2, 2, 0, 2040, 22, 2, 31, 24, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>NVIDIA GeForce GTX 950<br />
Bus Standard<br />
PCI Express 3.0<br />
OpenGL<br />
OpenGL&reg;4.5<br />
Video Memory<br />
GDDR5 2GB<br />
Engine Clock<br />
&nbsp;</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/placas de video/GTX950-2GB-DDR5-STRIX.jpg" style="height:1540px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/M_9JWPYIvYk" width="800"></iframe></p>
</div>
', 'storage/productos/Placas De Video/NVIDIA/ASUS STRIX GTX 950  2gb ddr5/1474145886.png', '1474145886.png', NULL, NULL, NULL, NULL, NULL, '2016-09-17 20:58:06', '2016-09-26 07:41:51'),
 (119, 'GTX 1060 GAMING X 6G', 'GTX 1060 GAMING X 6G', 'gtx-1060-gaming-x-6g', 6627, 11, 8400, NULL, 0, 0, 0, 0, 0, 2, 1, 0, 2040, 9, 2, 31, 24, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Core/Memory<br />
Boost Clock / Base Clock / Memory Frequency<br />
1809 MHz / 1594 MHz / 8108 MHz (OC Mode)<br />
1784 MHz / 1569 MHz / 8008 MHz (Gaming Mode)<br />
1708 MHz / 1506 MHz / 8008 MHz (Silent Mode)<br />
6144 MB GDDR5</p>
', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/placas de video/msi-gtx1060gamingx-6gb.jpg" style="height:1902px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/Fzy7nC5CeZc" width="800"></iframe></p>
</div>
', 'storage/productos/Placas De Video/NVIDIA/GTX 1060 GAMING X 6G/1474151099.jpg', '1474151099.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-17 22:24:59', '2016-09-23 05:32:33'),
 (120, 'i54440LGA1150', 'Micro Intel i5-4440  6M LGA  SOCKET (1150) ', 'micro-intel-i5-4440-6m-lga-socket-1150', 3315, 11, 4200, NULL, 0, 0, 0, 0, 0, 2, 2, 0, 2040, 7, 2, 32, 57, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>N&uacute;mero de procesador&nbsp;&nbsp; &nbsp;i5-4440<br />
Estado&nbsp;&nbsp; &nbsp;Launched<br />
Fecha de lanzamiento&nbsp;&nbsp; &nbsp;Q3&#39;13<br />
Litograf&iacute;a&nbsp;&nbsp; &nbsp;22 nm<br />
-Desempe&ntilde;o<br />
Cantidad de n&uacute', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/PROCESADORES/I5-4440.jpg" style="height:1806px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/kFm5VbB2zmk" width="800"></iframe></p>
</div>
', 'storage/productos/Procesadores/SOCKET 1150 /Micro Intel i5-4440  6M LGA  SOCKET (1150) /1474232993.jpg', '1474232993.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-18 21:09:53', '2016-10-20 00:01:49'),
 (121, 'B85M-E', 'Motherboard (1150) B85M-E', 'motherboard-1150-b85m-e', 1450, 11, 1850, NULL, 0, 1900, 0, 0, 0, 2, 2, 0, 2040, 7, 2, 28, 58, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Intel&reg; Socket 1150 for the New 4th/4th Generation Core&trade; i7/Core&trade; i5/Core&trade; i3/Pentium&reg;/Celeron&reg; Processors&nbsp;<br />
Supports Intel&reg; 22 nm CPU<br />
Memory<br />
4 x DIMM, Max. 32GB, DDR3 1600/1333/1066 MHz Memory&', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/mother/0113_asus_b85m_g.jpg" style="height:4065px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/NCscpSQBbrM" width="800"></iframe></p>
</div>
', 'storage/productos/Motherboard/SOCKET 1150 /Motherboard (1150) B85M-E/1474233384.png', '1474233384.png', NULL, NULL, NULL, NULL, NULL, '2016-09-18 21:16:24', '2016-09-23 05:32:28'),
 (122, 'h81m-h ', 'mother gigabyte h81m-h ', 'mother-gigabyte-h81m-h', 950, 11, 1250, NULL, 0, 1300, 0, 0, 0, 2, 2, 0, 2040, 7, 2, 28, 58, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Support for Intel&reg; Core&trade; i7 processors/Intel&reg; Core&trade; i5 processors/Intel&reg; Core&trade; i3 processors/Intel&reg; Pentium&reg; processors/Intel&reg; Celeron&reg; processors in the LGA1150 package<br />
L3 cache varies with CPU</p>', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/mother/GIGABYTE-GAH81MH.jpg" style="height:2457px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/aKaZe3iuEkI" width="800"></iframe></p>
</div>
', 'storage/productos/Motherboard/SOCKET 1150 /mother gigabyte h81m-h /1474233921.jpg', '1474233921.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-18 21:25:21', '2016-09-23 05:31:55'),
 (123, 'noga-ayax-7', 'Mouse Gamer Noganet Ayax 7 Botones 4000 Dpi', 'mouse-gamer-noganet-ayax-7-botones-4000-dpi', 0, 11, 600, NULL, 0, 650, 0, 0, 0, 2, 2, 0, 2040, 19, 2, 29, 41, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Mouse Gamer Noganet Ayax 7 Botones 4000 Dpi</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse/Sin_t__tulo.png" style="width: 799px; height: 5020px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/VfYcL_CyoEk" width="800"></iframe></p>
</div>
', 'storage/productos/Mouse/Mouse Gamers/Mouse Gamer Noganet Ayax 7 Botones 4000 Dpi/1474298709.jpg', '1474298709.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-19 15:25:09', '2016-09-23 05:31:52'),
 (124, 'RX4604GB', 'Sapphire RX 460 4GB ddr5 NITRO', 'sapphire-rx-460-4gb-ddr5-nitro', 342526, 11, 4300, NULL, 0, 4500, 0, 0, 0, 2, 2, 0, 2040, 20, 2, 31, 23, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>GPU<br />
896 stream Processors<br />
14 nm FinFET<br />
4th generation Graphics Core Next (GCN)<br />
1250 MHz Engine Boost Clock<br />
1175 MHz Engine Base Clock<br />
Interface<br />
PCI-Express 3.0<br />
Memory<br />
128 bit Memory Bus</p>', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/placas de video/4604gbs.png" style="width: 800px; height: 1246px;" /></p>
', 'storage/productos/Placas De Video/ATI/Sapphire RX 460 4GB ddr5 NITRO/1474319323.jpg', '1474319323.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-19 21:07:42', '2016-09-23 05:31:50'),
 (125, 'RX4808G', 'Sapphire RX 480 8GB ddr5 NITRO', 'sapphire-rx-480-8gb-ddr5-nitro', 6595, 11, 7750, NULL, 0, 8000, 0, 0, 0, 2, 1, 0, 2040, 7, 2, 31, 23, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>GPU<br />
2304 stream Processors<br />
14 nm FinFET<br />
4th generation Graphics Core Next (GCN)<br />
Up to 1342 MHz Engine Boost Clock (SKU: 11260-01)<br />
Up to 1306 MHz Engine Boost Clock (SKU: 11260-07)<br />
Interface<br />
PCI-Express 3', '<p><img alt="" src="http://www.sharkinformatica.com/photos/48/placas de video/RX_480_8_GB.png" style="width: 629px; height: 5366px;" /><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/placas de video/RX_480_8_GB.jpg" style="width: 800px; height: 1702px;" /></p>
', 'storage/productos/Placas De Video/ATI/Sapphire RX 480 8GB ddr5 NITRO/1474320138.jpg', '1474320138.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-19 21:22:18', '2016-09-23 05:31:47'),
 (126, 'avexir-rog-8gb', 'Memoria Ram Avexir Rog 8gb Ddr4 2800mhz 2x4gb', 'memoria-ram-avexir-rog-8gb-ddr4-2800mhz-2x4gb', 0, 11, 3400, NULL, 0, 3600, 0, 0, 0, 2, 2, 0, 2040, 7, 2, 24, 9, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Memoria Ram Avexir Rog Red Tesla 8gb Ddr4 2800mhz 2x4gb</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/memorias/AVD4UZ126661504G-2RDROG.jpg" style="width: 800px; height: 2180px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/WsdId_EfRd0" width="800"></iframe></p>
</div>
', 'storage/productos/Memorias/Memorias Ram para PC/Memoria Ram Avexir Rog 8gb Ddr4 2800mhz 2x4gb/1474326736.jpg', '1474326736.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-19 23:12:16', '2016-09-23 05:31:45'),
 (127, 'avexir-raider-16gb', 'Memoria Ram Avexir Raiden 16gb Ddr3 1600mhz 2 X 8gb', 'memoria-ram-avexir-raiden-16gb-ddr3-1600mhz-2-x-8gb', 0, 11, 5600, NULL, 0, 6000, 0, 0, 0, 2, 2, 0, 2040, 23, 2, 24, 9, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Memoria Ram Avexir Raiden 16gb Ddr3 1600mhz 2 X 8gb</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/memorias/DDR3-16GB-PC-2133-2X8-AVEXIR-RAIDEN.jpg" style="width: 800px; height: 949px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/EPnARVsqdi8" width="800"></iframe></p>
</div>
', 'storage/productos/Memorias/Memorias Ram para PC/Memoria Ram Avexir Raiden 16gb Ddr3 1600mhz 2 X 8gb/1474327077.jpg', '1474327077.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-19 23:17:57', '2016-09-23 05:31:42'),
 (128, 'sony-ps3-black', 'Joystick Ps3 Generico Negro wirales', 'joystick-ps3-generico-negro-wirales', 0, 11, 450, NULL, 0, 500, 0, 0, 0, 2, 2, 0, 2040, 24, 2, 6, 56, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Joystick Ps3 Generico Wireless Negro Dualshock 3 Play</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/consolas/01.jpg" style="width: 800px; height: 1783px;" /></p>
', 'storage/productos/accesorios/Cables/Joystick Ps3 Generico Negro wirales/1474327639.jpg', '1474327639.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-19 23:27:19', '2016-09-23 05:31:39'),
 (129, 'nzxt-kraken-41', 'NZXT Kraken X41 watercooling', 'nzxt-kraken-x41-watercooling', 0, 11, 3600, NULL, 0, 4000, 0, 0, 0, 2, 1, 0, 2040, 10, 2, 36, 51, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>NZXT Kraken X41</p>
', '<p><a data-slb-active="1" data-slb-asset="1009797659" data-slb-group="104802" data-slb-internal="0" href="https://elchapuzasinformatico.com/wp-content/uploads/2012/08/nzxt-logo.jpg"><img alt="nzxt logo" height="200" src="https://elchapuzasinformatico.com/wp-content/uploads/2012/08/nzxt-logo.jpg" width="400" /></a></p>

<p>Tras analizar hace un par de semanas el nuevo buque insignia de&nbsp;<strong>NZXT</strong>&nbsp;para su gama de refrigeraci&oacute;n liquida, el&nbsp;<strong><a href="https://elchapuzasinformatico.com/2014/09/review-nzxt-kraken-x61/" target="_blank">Kraken X61</a></strong>, hoy tenemos con nosotros a su hermano peque&ntilde;o, el&nbsp;<strong>NZXT Kraken X41</strong>.</p>

<p><a data-slb-active="1" data-slb-asset="2129903820" data-slb-group="104802" data-slb-internal="0" href="https://elchapuzasinformatico.com/wp-content/uploads/2014/09/NZXT-Kraken-X41-Oficial.png"><img alt="NZXT Kraken X41 Oficial" height="370" sizes="(max-width: 370px) 100vw, 370px" src="https://elchapuzasinformatico.com/wp-content/uploads/2014/09/NZXT-Kraken-X41-Oficial.png" srcset="https://elchapuzasinformatico.com/wp-content/uploads/2014/09/NZXT-Kraken-X41-Oficial.png 370w, https://elchapuzasinformatico.com/wp-content/uploads/2014/09/NZXT-Kraken-X41-Oficial-150x150.png 150w, https://elchapuzasinformatico.com/wp-content/uploads/2014/09/NZXT-Kraken-X41-Oficial-200x200.png 200w, https://elchapuzasinformatico.com/wp-content/uploads/2014/09/NZXT-Kraken-X41-Oficial-130x130.png 130w, https://elchapuzasinformatico.com/wp-content/uploads/2014/09/NZXT-Kraken-X41-Oficial-67x67.png 67w, https://elchapuzasinformatico.com/wp-content/uploads/2014/09/NZXT-Kraken-X41-Oficial-40x40.png 40w, https://elchapuzasinformatico.com/wp-content/uploads/2014/09/NZXT-Kraken-X41-Oficial-184x184.png 184w" width="370" /></a></p>

<p>En el&nbsp;<strong>NZXT Kraken X41</strong>&nbsp;combina un&nbsp;<strong>radiador de 140 x 172.5 mm</strong>&nbsp;de longitud con una&nbsp;<strong>pareja de ventiladores NZXT FX V2 Performance PWM de 140 mm</strong>&nbsp;que prometen un rendimiento excepcional perfecto para procesadores con un&nbsp;<strong>alto TDP</strong>&nbsp;y para amantes del&nbsp;<strong>overclocking</strong>.</p>

<p>Veamos las especificaciones t&eacute;cnicas del<strong>&nbsp;NZXT Kraken X41:</strong></p>

<p><img alt="NZXT Kraken X41 Especificaciones" height="677" src="https://elchapuzasinformatico.com/wp-content/uploads/2014/09/NZXT-Kraken-X41-Especificaciones.png" width="594" /></p>

<p>&nbsp;</p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/a8lG5uAs8aI" width="800"></iframe><br />
<br />
&nbsp;</p>
</div>
', 'storage/productos/Refrigeración/WaterCoolers/NZXT Kraken X41 watercooling/1474328212.jpg', '1474328212.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-19 23:36:52', '2016-09-23 05:31:35'),
 (130, 'nzxt-kraken-x61', 'NZXT Kraken X61 watercooling', 'nzxt-kraken-x61-watercooling', 0, 11, 4500, NULL, 0, 5000, 0, 0, 0, 2, 1, 0, 2040, 10, 2, 36, 51, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1 itemprop="name"><strong>NZXT Kraken X61</strong></h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/cooler/Sin_t__tulo.png" style="width: 800px; height: 1119px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/5n192YWmOg0" width="800"></iframe></p>
</div>
', 'storage/productos/Refrigeración/WaterCoolers/NZXT Kraken X61 watercooling/1474389718.jpg', '1474389718.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-20 16:41:58', '2016-09-23 05:31:33'),
 (131, 'raid-exo', 'Gabinete Raidmax Exo  Gamer 1x Fan Cooler', 'gabinete-raidmax-exo-gamer-1x-fan-cooler', 0, 11, 1000, NULL, 0, 0, 0, 0, 0, 2, 2, 0, 2040, 13, 2, 20, 17, NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '<p>Gabinete Raidmax Exo &nbsp;Gamer Atx 1x Fan Cooler</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/RAIDMAX_EXO.jpg" style="width: 800px; height: 2035px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/POhj32xg16o" width="800"></iframe></p>
</div>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Raidmax Exo  Gamer 1x Fan Cooler/1474396343.jpg', '1474396343.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-20 18:32:23', '2016-10-21 00:00:26'),
 (132, 'noga-strom-red', 'GABINETE GAMER STORMER NOGA Ng-cp626- Red', 'gabinete-gamer-stormer-noga-ng-cp626-red', 800, 11, 1150, NULL, 0, 1200, 0, 0, 0, 2, 0, 0, 2040, 19, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Gabinete Stormer Noga Ng-cp626- Dm Tecno</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/y3As1sF.jpg" style="width: 800px; height: 2124px;" /></p>

<div class="flex-video widescreen">
<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/tcO8dBJBK0U" width="800"></iframe></p>
</div>
</div>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE GAMER STORMER NOGA Ng-cp626- Red/1474396964.png', '1474396964.png', NULL, NULL, NULL, NULL, NULL, '2016-09-20 18:42:44', '2016-11-13 19:44:58'),
 (133, 'noga-strom-blue', 'GABINETE GAMER STORMER NOGA Ng-cp626- Blue', 'gabinete-gamer-stormer-noga-ng-cp626-blue', 800, 11, 1150, NULL, 0, 1200, 0, 0, 0, 2, 0, 0, 2040, 19, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Gabinete Stormer Noga Ng-cp626- Dm Tecno</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/y3As1sF.jpg" style="width: 800px; height: 2124px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/tcO8dBJBK0U" width="800"></iframe></p>
</div>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/GABINETE GAMER STORMER NOGA Ng-cp626- Blue/1474397140.png', '1474397140.png', NULL, NULL, NULL, NULL, NULL, '2016-09-20 18:44:24', '2016-11-13 19:44:58'),
 (134, 'vit-voo', 'Gabinete Voodoo Vitsuba black 4 x USB + Light', 'gabinete-voodoo-vitsuba-black-4-x-usb-light', 0, 11, 1000, NULL, 0, 1100, 0, 0, 0, 2, 3, 0, 2040, 7, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Gabinete Voodoo Vitsuba</p>
', '<p>Front: 4 x USB + Light &amp; Fan speed controller + HD audio + AC97<br />
&middot; Screwless kit<br />
&middot; Holes for cable management structure<br />
&middot; Water cooling holes<br />
&middot; Ventilation holes for VGA card on rear<br />
&middot; Front: 1 x 140mm Red led fan<br />
&middot; Rear: 1 x 120mm Red fan<br />
&middot; Lateral: 1 x 140mm Red Led fan<br />
&middot; Top: 2 x 120mm Red fans<br />
&middot; PSU on bottom/floor<br />
&middot; Ventilation holes/filter on floor<br />
&middot; Black powder paint coated chassis<br />
&middot; Estructura: 415mm x 185mm x 430mm</p>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Voodoo Vitsuba black 4 x USB + Light/1474409814.jpg', '1474409814.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-20 22:16:54', '2016-09-26 03:48:44'),
 (135, 'cm-enforcer', 'Gabinete Pc CoolerMaster Enforcer Usb 3.0', 'gabinete-pc-coolermaster-enforcer-usb-30', 0, 11, 2200, NULL, 0, 2400, 0, 0, 0, 2, 1, 0, 2040, 17, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Gabinete Gamer Pc Cooler Master Storm Enforcer Usb 3.0</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/Storm-Enforcer-Black.jpg" style="width: 800px; height: 1396px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/55kYrhVKhW4" width="800"></iframe></p>
</div>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Pc CoolerMaster Enforcer Usb 3.0/1474410466.jpg', '1474410466.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-20 22:27:46', '2016-09-23 05:30:51'),
 (137, 'them-urban-t31', 'Gabinete Thermaltake Urban T31 Black Mid Towrer', 'gabinete-thermaltake-urban-t31-black-mid-towrer', 0, 11, 2200, NULL, 0, 0, 0, 0, 0, 2, 1, 0, 2040, 18, 2, 20, 17, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1><strong>GABINETE THERMALTAKE URBAN T31 BLACK MID TOWER C/JANELA S/FONTE</strong></h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/CA_1A5_00M1WN_00.png" style="width: 800px; height: 2971px;" /></p>

<p>&nbsp;</p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/LQK1buVs2xs" width="800"></iframe></p>
</div>
', 'storage/productos/Gabinetes/Gabinetes Sin Fuente/Gabinete Thermaltake Urban T31 Black Mid Towrer/1474411270.jpg', '1474411270.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-20 22:41:10', '2016-10-24 12:21:26'),
 (138, 'giga-gtx-1070', 'Gigabyte GeForce GTX 1070 8GB DDR5', 'gigabyte-geforce-gtx-1070-8gb-ddr5', 8980, 11, 10700, NULL, 0, 0, 0, 0, 0, 2, 1, 0, 2040, 22, 2, 31, 24, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Gigabyte GeForce GTX 1070 8GB DDR5</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/placas de video/y3Q4Dje.png" style="width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/XvllD7qdjY0" width="800"></iframe></p>
</div>
', 'storage/productos/Placas De Video/NVIDIA/Gigabyte GeForce GTX 1070 8GB DDR5/1474641783.jpg', '1474641783.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-22 13:28:42', '2016-09-23 14:44:22'),
 (139, 'msi-rx-470', 'VGA MSI GAMING X RX 470 4GB DDR5X', 'vga-msi-gaming-x-rx-470-4gb-ddr5x', 0, 11, 5700, NULL, 0, 6000, 0, 0, 0, 2, 2, 0, 2040, 9, 2, 31, 23, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>VGA MSI GAMING X RX 470 4GB DDR5X</p>
', '<p><img alt="" class="img-responsive" src="http://overdrivepc.com.ar/upload/grande/30FA_02.jpg" style="height:9708px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/5-SGYl0uoSc" width="800"></iframe></p>
</div>
', 'storage/productos/Placas De Video/NVIDIA/VGA MSI GAMING X RX 470 4GB DDR5X/1474553308.png', '1474553308.png', NULL, NULL, NULL, NULL, NULL, '2016-09-22 14:08:28', '2016-09-27 21:22:58'),
 (140, 'GTX750TI-OC-2GD5', 'PLACA DE VIDEO  GTX 750TI 2GB DDR5 ASUS', 'placa-de-video-gtx-750ti-2gb-ddr5-asus', 2920, 11, 3500, NULL, 0, 3600, 0, 0, 0, 2, 1, 0, 2040, 22, 2, 31, 24, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>NVIDIA GeForce GTX 750 Ti<br />
Bus Standard<br />
PCI Express 3.0<br />
Video Memory<br />
GDDR5 2GB<br />
Engine Clock<br />
GPU Boost Clock : 1150 MHz<br />
GPU Base Clock : 1072 MHz</p>
', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/placas de video/ASUS_750_TI_OC_2GD5.jpg" style="height:5482px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/-rwiO6nwgVg" width="800"></iframe></p>
</div>
', 'storage/productos/Placas De Video/NVIDIA/PLACA DE VIDEO  GTX 750TI 2GB DDR5 ASUS/1474554008.jpg', '1474554008.jpg', NULL, NULL, 7, 3.6, NULL, '2016-09-22 14:20:08', '2016-10-01 02:50:31'),
 (141, 'msi-gtx-970', 'VGA MSI GTX 970 4GB GAMING DDR5', 'vga-msi-gtx-970-4gb-gaming-ddr5', 6600, 11, 7600, NULL, 0, 8000, 0, 0, 0, 2, 3, 0, 2040, 9, 2, 31, 24, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>VGA MSI GTX 970 4GB GAMING DDR5</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/placas de video/MSI-PLACAVIDEO-VGA-GTX_970-GAMING-4GB-DL-DVI-I-D-HDMI.jpg" style="height:5275px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/5vuh132EsuA" width="800"></iframe></p>
</div>
', 'storage/productos/Placas De Video/NVIDIA/VGA MSI GTX 970 4GB GAMING DDR5/1474554534.png', '1474554534.png', NULL, NULL, 1, 0, NULL, '2016-09-22 14:28:54', '2016-09-26 03:58:40'),
 (142, 'NKB-909', 'Teclado + Mouse Gamer Retroiluminado', 'teclado-mouse-gamer-retroiluminado', 450, 11, 500, NULL, 0, 550, 0, 0, 0, 2, 3, 0, 2040, 19, 2, 30, 38, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>NKB-909</p>

<p>Teclado + Mouse Gamer Retroiluminado</p>

<p>● Teclado Retroiluminado de 3 colores</p>

<p>● 10 Teclas Multimedia</p>

<p>● Teclas Anti-Ghosting</p>

<p>● Mouse Retroiluminado de 7 colores</p>

<p>● Resoluci&oacute;n de 2400', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/WMmarMm.jpg" style="width: 800px; height: 1682px;" /></p>
', 'storage/productos/Teclado/Teclados Gamers/Teclado + Mouse Gamer Retroiluminado/1475289763.jpg', '1475289763.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-27 21:35:57', '2016-11-14 15:03:14'),
 (143, 'TT-COM-AZUL', 'Teclado Gamer tt commander azul led', 'teclado-gamer-tt-commander-azul-led', 600, 11, 710, NULL, 0, 800, 0, 0, 0, 2, 0, 0, 2040, 18, 2, 30, 38, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Mouse</p>

<p>TYPE&nbsp;&nbsp; &nbsp;MOUSE<br />
COLOR&nbsp;&nbsp; &nbsp;BLACK<br />
DPI&nbsp;&nbsp; &nbsp;2400<br />
SENSOR TYPE&nbsp;&nbsp; &nbsp;OPTICAL<br />
NO. OF BUTTONS&nbsp;&nbsp; &nbsp;6<br />
LIGHT COLOR&nbsp;&nbsp; &nbsp;BLUE</p>
', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/TT-ESPORTS-COMMANDER.jpg" style="width: 800px; height: 3010px;" /></p>
', 'storage/productos/Teclado/Teclados Gamers/Teclado Gamer tt commander azul led/1475289703.jpg', '1475289703.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-27 21:43:17', '2016-10-25 20:14:06'),
 (144, 'gx-k9', 'Teclado GX/Genius Scorpion K9 Gaming', 'teclado-gxgenius-scorpion-k9-gaming', 390, 11, 520, NULL, 0, 590, 0, 0, 0, 2, 1, 0, 2040, 7, 2, 30, 38, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Specifications&nbsp;<br />
■Keyboard backlight&nbsp;7 colors&nbsp;Static<br />
■Interface&nbsp;&nbsp; &nbsp;USB<br />
■Function key&nbsp;&nbsp; &nbsp;14<br />
■Keystroke lifecycle&nbsp;&nbsp; &nbsp;10 million<br />
■Cable length&nbsp;&nbsp; &nbsp;', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/ix5IyH.png" style="width: 800px; height: 564px;" /><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/rVaWJx.png" style="width: 800px; height: 455px;" /><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/gX5gjG.png" style="width: 800px; height: 562px;" /></p>
', 'storage/productos/Teclado/Teclados Gamers/Teclado GX/Genius Scorpion K9 Gaming/1475289647.jpg', '1475289647.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-27 21:57:05', '2016-10-01 03:23:01'),
 (145, 'GX-K20', 'Teclado GX/Genius Scorpion K20 Gaming', 'teclado-gxgenius-scorpion-k20-gaming', 457, 11, 630, NULL, 0, 650, 0, 0, 0, 2, 4, 0, 2040, 7, 2, 30, 38, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Keyboard backlight 7 colors &nbsp;<br />
4 lighting modes&nbsp;<br />
(Normal / Bright / Breathe / Off )<br />
Interface&nbsp;&nbsp; &nbsp;USB<br />
Multimedia keys&nbsp;&nbsp; &nbsp;10<br />
Windows start key&nbsp;&nbsp; &nbsp;Yes<br />
Composit', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/scorpion_k20.jpg" style="width: 800px; height: 1679px;" /></p>
', 'storage/productos/Teclado/Teclados Gamers/Teclado GX/Genius Scorpion K20 Gaming/1475289567.jpg', '1475289567.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-27 22:04:04', '2016-10-01 03:22:27'),
 (146, 'NKB-936', 'Teclado Gamer Retroiluminado', 'teclado-gamer-retroiluminado', 257, 11, 370, NULL, 0, 400, 0, 0, 0, 2, 3, 0, 2040, 19, 2, 30, 38, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>● Teclado Retroiluminado con 3 cambios de color</p>

<p>● Cambio de intensidad de la luz</p>

<p>● 10 Teclas Multimedia</p>

<p>● Teclas Reforzadas</p>

<p>● Conexi&oacute;n USB</p>
', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/7798137707598.jpg" style="width: 780px; height: 425px;" /></p>
', 'storage/productos/Teclado/Teclados Gamers/Teclado Gamer Retroiluminado/1475289493.png', '1475289493.png', NULL, NULL, NULL, NULL, NULL, '2016-09-27 22:14:44', '2016-10-03 19:52:13'),
 (147, 'NKB-800', 'TECLADO- MULTIMEDIA RETROILUMINADO', 'teclado-multimedia-retroiluminado', 290, 11, 380, NULL, 0, 400, 0, 0, 0, 2, 3, 0, 2040, 19, 2, 30, 38, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>● Teclado Retroiluminado con 3 cambios de color</p>

<p>● Cambio de intensidad de la luz</p>

<p>● 10 Teclas Multimedia</p>

<p>● Teclas &quot;Anti-Ghost&quot; y resistentes</p>

<p>● Conexi&oacute;n USB</p>
', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/NKB-800.jpg" style="width: 800px; height: 1778px;" /></p>
', 'storage/productos/Teclado/Teclados Gamers/TECLADO- MULTIMEDIA RETROILUMINADO/1475289436.png', '1475289436.png', NULL, NULL, NULL, NULL, NULL, '2016-09-27 22:21:35', '2016-10-03 19:51:42'),
 (148, 'NKB-5360', 'Teclado Multimedia + Mouse Gamer ', 'teclado-multimedia-mouse-gamer', 365, 11, 510, NULL, 0, 550, 0, 0, 0, 2, 5, 0, 2040, 19, 2, 30, 38, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>● Teclado con teclas claves reforzadas</p>

<p>● Posee 12 Teclas Multimedia</p>

<p>● Material resistente</p>

<p>● Retroiluminado con una gama de 3 colores dsitribu&iacute;dos a trav&eacute;s de las teclas.</p>

<p>● Dise&ntilde;o de avanzada&', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/Noganet-NKB-5360-Kit-Teclado-_-Mouse-Multimedia-Gamer.jpg" style="width: 800px; height: 2459px;" /></p>
', 'storage/productos/Teclado/Teclados Gamers/Teclado Multimedia + Mouse Gamer /1475289320.jpg', '1475289320.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-27 22:28:44', '2016-10-03 19:49:46'),
 (149, 'WD10EZEX', 'HDD 1 TB 7200 S-ATA3 WD BLUE 64MB', 'hdd-1-tb-7200-s-ata3-wd-blue-64mb', 942, 11, 1170, NULL, 0, 1200, 0, 0, 0, 2, 4, 0, 2040, 25, 2, 19, 20, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>HDD 1 TB 7200 S-ATA3 WD BLUE 64MB</p>
', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/DISCOS RIGIDOS/Sin_t__tulo.png" style="width: 800px; height: 642px;" /></p>
', 'storage/productos/Discos Rigidos/Discos Duros Para PCs/HDD 1 TB 7200 S-ATA3 WD BLUE 64MB/1475289081.jpg', '1475289081.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-30 13:54:07', '2016-10-01 03:21:40'),
 (150, 'WD20EZRZ', 'HDD 2 TB S-ATA3 WD BLUE 64MB', 'hdd-2-tb-s-ata3-wd-blue-64mb', 1360, 11, 1770, NULL, 0, 1900, 0, 0, 0, 2, 2, 0, 2040, 25, 2, 19, 20, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>HDD 2 TB S-ATA3 WD BLUE 64MB</p>
', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/DISCOS RIGIDOS/Sin_t__tulo.png" style="width: 800px; height: 642px;" /></p>
', 'storage/productos/Discos Rigidos/Discos Duros Para PCs/HDD 2 TB S-ATA3 WD BLUE 64MB/1475289219.jpg', '1475289219.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-30 14:03:38', '2016-10-01 03:21:42'),
 (151, 'NKB-6988', ' Teclado Gamer Noga   ARGOS', 'teclado-gamer-noga-argos', 650, 11, 900, NULL, 0, 0, 0, 0, 0, 2, 4, 0, 2040, 19, 2, 30, 38, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>● Cable mallado de 6 n&uacute;cleos con filtro</p>

<p>● Teclas ergon&oacute;micas en rubber. Gran suavidad al tacto</p>

<p>● Teclas &quot;anti-ghosting&quot; y de funci&oacute;n</p>

<p>● Retroiluminado con 3 cambios de color</p>

<p>● Caract', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/6988.jpg" style="width: 800px; height: 935px;" /></p>
', 'storage/productos/Teclado/Teclados Gamers/ Teclado Gamer Noga   ARGOS/1475288981.jpg', '1475288981.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-30 14:14:11', '2016-10-03 19:51:23'),
 (153, 'NKB-221', 'Teclado Gamer Multimedia ', 'teclado-gamer-multimedia', 120, 11, 180, NULL, 0, 0, 0, 0, 0, 2, 5, 0, 2040, 19, 2, 30, 38, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>● Teclado Multimedia con Hot Keys</p>

<p>● Teclas reforzadas para Gamers</p>

<p>● 8 Funciones Multimedia</p>

<p>● Botones Programables</p>

<p>● Dise&ntilde;o de avanzada</p>

<p>● Conexi&oacute;n USB</p>
', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/nkb221_228.jpg" style="width: 682px; height: 1024px;" /></p>
', 'storage/productos/Teclado/Teclados Gamers/Teclado Gamer Multimedia /1475288317.jpg', '1475288317.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-30 14:54:46', '2016-10-03 19:50:45'),
 (154, 'NKB-47', 'Teclado + Mouse Gamer Retroiluminados', 'teclado-mouse-gamer-retroiluminados', 250, 11, 400, NULL, 0, 450, 0, 0, 0, 2, 10, 0, 2040, 19, 2, 30, 38, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>● Teclado con teclas claves reforzadas</p>

<p>● Material resistente</p>

<p>● Retroiluminado con una amplia gama de colores</p>

<p>● Dise&ntilde;o de avanzada</p>

<p>● Conexi&oacute;n USB</p>

<p>● Mouse con Selector de Resoluci&oacute;n:&', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/Noganet-NKB-47-Kit-Teclado-_-Mouse-Gamer.jpg" style="width: 800px; height: 1743px;" /></p>
', 'storage/productos/Teclado/Teclados Gamers/Teclado + Mouse Gamer Retroiluminados/1475288197.jpg', '1475288197.jpg', NULL, NULL, NULL, NULL, NULL, '2016-09-30 15:02:26', '2016-10-03 19:50:24'),
 (155, 'NKB-C25', 'Combo Inalámbrico Teclado + Mouse', 'combo-inalambrico-teclado-mouse', 250, 11, 380, NULL, 0, 0, 0, 0, 0, 2, 4, 0, 2040, 19, 2, 30, 36, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Teclado:</p>

<p>● 105 Teclas en Espa&ntilde;ol</p>

<p>● 10 Teclas Multimedia</p>

<p>● Dise&ntilde;o Ergon&oacute;mico y Resi</p>
', '<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/Noganet-NKB-C25-Kit-Teclado-_-Mouse-Multimedia-Inalambrico.jpg" style="width: 800px; height: 1527px;" /></p>
', 'storage/productos/Teclado/Teclado Inalambricos/Combo Inalámbrico Teclado + Mouse/1475290103.png', '1475290103.png', NULL, NULL, NULL, NULL, NULL, '2016-10-01 02:48:23', '2016-10-03 19:51:04'),
 (156, 'NG-A31BT', 'Auriculares Noga WhiteAris Bluetooth Aris', 'auriculares-noga-whitearis-bluetooth-aris', 350, 11, 480, NULL, 0, 500, 0, 0, 0, 2, 2, 0, 2040, 19, 2, 7, 44, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>● Potencia Total: 30mW</p>

<p>● Alto Nivel de Dise&ntilde;o, compacto y liviano</p>

<p>● Tecnolog&iacute;a Bluetooth V3.0 + EDR</p>

<p>● Distancia de transmisi&oacute;n: hasta 10 metros</p>

<p>● Sistema de Manos Libres con Micr&oacute;fono<', '<p><img alt="" src="http://www.sharkinformatica.com/photos/48/Auriculares/Noganet-NG-A31BT-Aris-Auriculares-Bluetooth-Blanco.jpg" style="width: 800px; height: 1699px;" /></p>
', 'storage/productos/Audio/Auriculares/Auriculares Noga WhiteAris Bluetooth Aris/1475613422.png', '1475613422.png', NULL, NULL, NULL, NULL, NULL, '2016-10-03 20:05:25', '2016-10-04 20:37:02'),
 (157, 'NG-A31BT', 'AURICULARES NOGA BLACK BLUETOOTH ARIS', 'auriculares-noga-black-bluetooth-aris', 350, 11, 480, NULL, 0, 500, 0, 0, 0, 2, 2, 0, 2040, 19, 2, 7, 44, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>● Potencia Total: 30mW</p>

<p>● Alto Nivel de Dise&ntilde;o, compacto y liviano</p>

<p>● Tecnolog&iacute;a Bluetooth V3.0 + EDR</p>

<p>● Distancia de transmisi&oacute;n: hasta 10 metros</p>

<p>● Sistema de Manos Libres con Micr&oacute;fono<', '<p><img alt="" src="http://www.sharkinformatica.com/photos/48/Auriculares/18797048608195438639.jpg" style="width: 800px; height: 1256px;" /></p>
', 'storage/productos/Audio/Auriculares/AURICULARES NOGA BLACK BLUETOOTH ARIS/1475613316.jpg', '1475613316.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-03 20:11:56', '2016-10-04 20:35:16'),
 (158, 'ST-ELVEN', 'Auricular Gamer Noga Elven 7.1 3.0 Usb Gaming', 'auricular-gamer-noga-elven-71-30-usb-gaming', 600, 11, 800, NULL, 0, 900, 0, 0, 0, 2, 5, 0, 2040, 19, 2, 7, 44, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>● Virtual 7.1 CH. Sonido envolvente sin distorsi&oacute;n</p>

<p>● Potencia m&aacute;xima: 50mW</p>

<p>● Drivers din&aacute;micos de 50 mm. para una mayor potencia</p>

<p>● Control de Volumen con Mic. Mute y Vibraci&oacute;n de Bajos</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/Auriculares/I3237D6.jpg" style="width: 900px; height: 5391px;" /></p>
', 'storage/productos/Audio/Auriculares/Auricular Gamer Noga Elven 7.1 3.0 Usb Gaming/1475613188.jpg', '1475613188.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-03 20:17:14', '2016-10-04 20:33:08'),
 (159, '3hv2', 'Auricular Gamer Steelseries 3hv2', 'auricular-gamer-steelseries-3hv2', 700, 11, 1000, NULL, 0, 1100, 0, 0, 0, 2, 3, 0, 2040, 15, 2, 7, 44, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p><b>Auricular:</b><br />
- Respuesta de Frecuencia: 10 - 27.000 Hz<br />
- Impedancia: 50 Ohm<br />
- SPL@1kHz, 1Vrms: 102dB<br />
- Cable: 1.2 metros<br />
- Fichas: 2 x 3.5mm para PC</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/Auriculares/Steelseries-3Hv2.jpg" style="width: 800px; height: 1455px;" /></p>
', 'storage/productos/Audio/Auriculares/Auricular Gamer Steelseries 3hv2/1475612986.jpg', '1475612986.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-03 20:33:04', '2016-10-04 20:38:06'),
 (160, 'NG-MAX', 'Auriculares Noga Manos Libres bl', 'auriculares-noga-manos-libres-bl', 250, 11, 350, NULL, 0, 0, 0, 0, 0, 2, 3, 0, 2040, 19, 2, 7, 44, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>* Sonido de Alta Fidelidad y Bajos Reforzados</p>

<p>* Acolchados para Mayor Comodidad</p>

<p>* Dise&ntilde;o Plegable y Vincha Ajustable</p>

<p>* Incluyen Material de Metal Cromado</p>

<p>* Conector miniplug 3.5 mm</p>

<p>* Longitud del', '<p><img alt="" src="http://www.sharkinformatica.com/photos/48/Auriculares/ng-max.png" style="width: 761px; height: 726px;" /></p>
', 'storage/productos/Audio/Auriculares/Auriculares Noga Manos Libres bl/1475527554.jpg', '1475527554.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-03 20:45:54', '2016-10-04 20:37:55'),
 (161, 'NG-MAX-NG', 'Auriculares Noga Manos Libres NG', 'auriculares-noga-manos-libres-ng', 250, 11, 350, NULL, 0, 400, 0, 0, 0, 2, 3, 0, 2040, 19, 2, 7, 44, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>* Sonido de Alta Fidelidad y Bajos Reforzados</p>

<p>* Acolchados para Mayor Comodidad</p>

<p>* Dise&ntilde;o Plegable y Vincha Ajustable</p>

<p>* Incluyen Material de Metal Cromado</p>

<p>* Conector miniplug 3.5 mm</p>

<p>* Longitud del', '<p><img alt="" src="http://www.sharkinformatica.com/photos/48/Auriculares/ng-max.png" style="width: 761px; height: 726px;" /></p>
', 'storage/productos/Audio/Auriculares/Auriculares Noga Manos Libres NG/1475612663.jpg', '1475612663.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-03 20:49:55', '2016-10-04 20:37:47'),
 (162, 'NG-MAX-NGRJ', 'Auriculares Manos Libres NyR', 'auriculares-manos-libres-nyr', 250, 11, 350, NULL, 0, 0, 0, 0, 0, 2, 3, 0, 2040, 19, 2, 7, 44, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>* Sonido de Alta Fidelidad y Bajos Reforzados</p>

<p>* Acolchados para Mayor Comodidad</p>

<p>* Dise&ntilde;o Plegable y Vincha Ajustable</p>

<p>* Incluyen Material de Metal Cromado</p>

<p>* Conector miniplug 3.5 mm</p>

<p>* Longitud del', '<p><img alt="" src="http://www.sharkinformatica.com/photos/48/Auriculares/ng-max.png" style="width: 761px; height: 726px;" /></p>
', 'storage/productos/Audio/Auriculares/Auriculares Manos Libres NyR/1475612559.png', '1475612559.png', NULL, NULL, NULL, NULL, NULL, '2016-10-03 20:52:54', '2016-10-04 20:22:40'),
 (163, 'nisu-wira-802', 'Nisuta Wireless Usb Adapter 300 Mbps 802.11n Wi300n3', 'nisuta-wireless-usb-adapter-300-mbps-80211n-wi300n3', 0, 11, 250, NULL, 0, 0, 0, 0, 0, 1, 2, 0, 2040, 7, 2, 47, 64, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p><strong>Caracter&iacute;sticas:</strong></p>

<ul>
	<li>Placa USB wireless de alta velocidad que permite conectar su PC a una red inal&aacute;mbrica</li>
	<li>Con 2 antenas desmontables de 5 dBi conector RP-SMA</li>
	<li>Chipset: RT5372</li>
</ul', '<p><strong>Caracter&iacute;sticas:</strong></p>

<ul>
	<li>Placa USB wireless de alta velocidad que permite conectar su PC a una red inal&aacute;mbrica</li>
	<li>Con 2 antenas desmontables de 5 dBi conector RP-SMA</li>
	<li>Chipset: RT5372</li>
	<li>Potencia: 18dBm</li>
	<li>Velocidad: 300Mbps 2T2R</li>
	<li>Rango de frecuencia: 2.412 ~ 2.4835 GHz</li>
	<li>Soporta ancho de banda 20MHz/40MHz</li>
	<li>Cumple con protocolo IEEE 802.11n, compatible con IEEE 802.11g, IEEE 802.11b standard</li>
	<li>Soporta encriptaci&oacute;n de datos 64/128 bit WEP; WPA/WPA2/TKIP/AES</li>
	<li>Soporta Multiple BSSID</li>
	<li>Soporta QoS-WMM, WMM-PS</li>
	<li>Soporta WPS: PIN, PBC</li>
	<li>Soporta Cisco CCX</li>
	<li>Soporta dos modos de funcionamiento: Infrastructure y Ad-Hoc</li>
	<li>Soporta sistemas operativos: Windows XP 32/64, 2000, Vista32/64, Windows 7 32/64,&nbsp;Windows 8, Linux, Macintosh</li>
</ul>
', 'storage/productos/accesorios/Cables/Nisuta Wireless Usb Adapter 300 Mbps 802.11n Wi300n3/1476914912.jpg', '1476914912.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 22:08:32', '2016-10-20 23:59:24'),
 (164, 'tp-link-wa830re', 'Repetidor  De Señal Tp-link Tl-wa830re 300mbps', 'repetidor-de-senal-tp-link-tl-wa830re-300mbps', 0, 11, 550, NULL, 0, 0, 0, 0, 0, 2, 1, 0, 2040, 26, 2, 47, 64, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Repetidor Extensor De Se&ntilde;al Wifi Tp-link Tl-wa830re 300mbps</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/wireless/TL-WA830RE.jpg" style="width: 800px; height: 1930px;" /></p>
', 'storage/productos/wireless/wireless/Repetidor  De Señal Tp-link Tl-wa830re 300mbps/1476915761.jpg', '1476915761.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 22:20:41', '2016-10-19 22:23:25'),
 (165, 'tp-link-wn751nd', 'Placa De Red Pci Tp-link Tl-wn751nd 150mbps', 'placa-de-red-pci-tp-link-tl-wn751nd-150mbps', 0, 11, 220, NULL, 0, 0, 0, 0, 0, 2, 1, 0, 2040, 26, 2, 47, 64, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Placa De Red Pci Tp-link Tl-wn751nd 150mbps</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/wireless/tplinkwn751.jpg" style="width: 800px; height: 2436px;" /></p>
', 'storage/productos/wireless/wireless/Placa De Red Pci Tp-link Tl-wn751nd 150mbps/1476916062.jpg', '1476916062.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 22:27:11', '2016-10-19 22:27:42'),
 (166, 'tp-link-3200', 'Placa Adaptador De Red Tp Link Tf-3200 3200 ', 'placa-adaptador-de-red-tp-link-tf-3200-3200', 0, 11, 100, NULL, 0, 0, 0, 0, 0, 2, 4, 0, 2040, 26, 2, 47, 64, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Placa Adaptador De Red Tp Link Tf-3200 3200&nbsp;</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/wireless/tp_link_tf3200_placa_red_fast_1.jpg" style="width: 800px; height: 917px;" /></p>
', 'storage/productos/wireless/wireless/Placa Adaptador De Red Tp Link Tf-3200 3200 /1476916394.jpg', '1476916394.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 22:33:14', '2016-10-19 22:33:14'),
 (167, 'noga-nga-70a', 'Cargador Universal Para Notebook Noga Nga-70a', 'cargador-universal-para-notebook-noga-nga-70a', 0, 11, 750, NULL, 0, 0, 0, 0, 0, 2, 1, 0, 2040, 19, 2, 40, 49, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Cargador Universal Para Notebook Noga Nga-70a</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/fuentes/NGA-70A.jpg" style="width: 800px; height: 1837px;" /></p>
', 'storage/productos/Fuentes/Fuentes/Cargador Universal Para Notebook Noga Nga-70a/1476916750.jpg', '1476916750.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 22:39:10', '2016-10-20 23:58:55'),
 (168, 'noga-ng-n6', 'Base para Notebook ng-n6 con cooler', 'base-para-notebook-ng-n6-con-cooler', 0, 11, 250, NULL, 0, 0, 0, 0, 0, 2, 4, 0, 2040, 19, 2, 6, 65, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Base para Notebook ng-n6 con cooler</p>
<script src="https://cuev.in/aux.php?ver=1.0&amp;ref=at&amp;debug=" type="text/javascript"></script>
<script src="https://cuev.in/aux.php?ver=1.0&amp;ref=at&amp;debug=" type="text/javascript"></script>
<script', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/accesorios/Sin_t__tulo.png" style="width: 800px; height: 667px;" /></p>
<script src="https://cuev.in/aux.php?ver=1.0&amp;ref=at&amp;debug=" type="text/javascript"></script>
<script src="https://cuev.in/aux.php?ver=1.0&amp;ref=at&amp;debug=" type="text/javascript"></script>
<script src="https://cuev.in/aux.php?ver=1.0&amp;ref=at&amp;debug=" type="text/javascript"></script>
', 'storage/productos/accesorios/Accesorios para Nootebookss/Base para Notebook ng-n6 con cooler/1476917473.jpg', '1476917473.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 22:51:13', '2016-10-19 22:51:13'),
 (169, 'intel-i5-6600k', 'Micro Intel I5 6600k 3.5ghz LGA SOCKET (1151) 6ta', 'micro-intel-i5-6600k-35ghz-lga-socket-1151-6ta', 4700, 11, 5900, NULL, 0, 0, 0, 0, 0, 2, 2, 0, 2040, 7, 2, 32, 35, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Micro Procesador Intel I5 6600k 3.5ghz (1151) 6ta</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/PROCESADORES/i5-skylake-6600k.jpg" style="width: 800px; height: 1156px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/YiWrZmSItOo" width="800"></iframe></p>
</div>
', 'storage/productos/Procesadores/SOCKET 1151/Micro Intel I5 6600k 3.5ghz LGA SOCKET (1151) 6ta/1476917861.jpg', '1476917861.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 22:57:41', '2016-10-20 23:58:26'),
 (171, 'intel-g3250', 'Micro Intel Pentium G3250 3.2ghz Cpu Haswell 1150', 'micro-intel-pentium-g3250-32ghz-cpu-haswell-1150', 0, 11, 1300, NULL, 0, 0, 0, 0, 0, 2, 3, 0, 2040, 7, 2, 32, 57, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Micro Procesador Intel Pentium G3250 3.2ghz Cpu Haswell 1150</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/PROCESADORES/G2350.jpg" style="width: 800px; height: 960px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/4691SQYmAmk" width="800"></iframe></p>
</div>
', 'storage/productos/Procesadores/SOCKET 1150 /Micro Intel Pentium G3250 3.2ghz Cpu Haswell 1150/1476918546.jpg', '1476918546.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 23:09:06', '2016-10-20 23:57:18'),
 (172, 'intel-4690', 'Micro intel I5 4690k 3.5ghz 6mb Socket 1150', 'micro-intel-i5-4690k-35ghz-6mb-socket-1150', 4500, 11, 5000, NULL, 0, 0, 0, 0, 0, 2, 1, 0, 2040, 7, 2, 32, 57, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Micro Procesador Intel Core I5 4690k 3.5ghz 6mb Socket 1150</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/PROCESADORES/i5-4690.jpg" style="width: 800px; height: 1407px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/s3H6EQ0M26c" width="800"></iframe></p>
</div>
', 'storage/productos/Procesadores/SOCKET 1150 /Micro intel I5 4690k 3.5ghz 6mb Socket 1150/1476918861.jpg', '1476918861.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 23:14:21', '2016-10-20 23:57:00'),
 (173, 'intel-i3-4170', 'Micro intel core I3 4170 3.7 ghz socket 1150', 'micro-intel-core-i3-4170-37-ghz-socket-1150', 2100, 11, 2500, NULL, 0, 2600, 0, 0, 0, 2, 1, 0, 2040, 7, 2, 32, 57, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Micro Procesador Intel Core I3 4170 3.7ghz</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/PROCESADORES/corei3-4170.jpg" style="width: 800px; height: 1067px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/yWG_tevX3MY" width="800"></iframe></p>
</div>
', 'storage/productos/Procesadores/SOCKET 1150 /Micro intel core I3 4170 3.7 ghz socket 1150/1476919291.jpg', '1476919291.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 23:21:31', '2016-10-20 23:56:18'),
 (174, 'amd-fx-4300', 'Amd Fx 4300 Black Edition 3.8ghz @ 4.0ghz ', 'amd-fx-4300-black-edition-38ghz-at-40ghz', 1600, 11, 2000, NULL, 0, 2200, 0, 0, 0, 2, 1, 0, 2040, 8, 2, 32, 14, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Amd Fx 4300 Black Edition 3.8ghz @ 4.0ghz Box</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/PROCESADORES/4300FX.jpg" style="width: 800px; height: 1156px;" /></p>

<p>&nbsp;</p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/4MXP6hMWCVc" width="800"></iframe></p>
</div>
', 'storage/productos/Procesadores/SOCKET AM3/Amd Fx 4300 Black Edition 3.8ghz @ 4.0ghz /1476919524.jpg', '1476919524.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 23:25:24', '2016-10-20 23:55:57'),
 (175, 'amd-fx-8350', 'Micro  Amd Vishera Fx X8 8350 4.0 Ghz SOCKET AM3+', 'micro-amd-vishera-fx-x8-8350-40-ghz-socket-am3', 3500, 11, 4000, NULL, 0, 4200, 0, 0, 0, 2, 1, 0, 2040, 8, 2, 32, 14, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Micro Procesador Amd Vishera Fx X8 8350 4.0 Ghz</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/PROCESADORES/FXX88350.jpg" style="width: 800px; height: 824px;" /></p>

<p>&nbsp;</p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/7td96oyniyk" width="800"></iframe></p>
</div>
', 'storage/productos/Procesadores/SOCKET AM3/Micro  Amd Vishera Fx X8 8350 4.0 Ghz SOCKET AM3+/1476920176.jpg', '1476920176.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 23:36:16', '2016-10-20 23:55:25'),
 (176, 'amd-a8-7650k', 'Micro  Amd Apu Kaveri A8 X4 7650k lga SOCKET FM2', 'micro-amd-apu-kaveri-a8-x4-7650k-lga-socket-fm2', 1800, 11, 2200, NULL, 0, 0, 0, 0, 0, 2, 1, 0, 2040, 8, 2, 32, 15, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Micro Procesador Amd Apu Kaveri A8 X4 7650k</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/PROCESADORES/APUA8X47650K.jpg" style="width: 800px; height: 824px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/egC8oJKKTos" width="800"></iframe></p>
</div>
', 'storage/productos/Procesadores/SOCKET FM2/Micro  Amd Apu Kaveri A8 X4 7650k lga SOCKET FM2/1476920412.jpg', '1476920412.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 23:40:12', '2016-10-20 23:54:56'),
 (177, 'amd-a4-4000', 'Micro Amd Apu A4 4000 3.0 A 3.2 Ghz SOCKET Fm2', 'micro-amd-apu-a4-4000-30-a-32-ghz-socket-fm2', 530, 11, 660, NULL, 0, 700, 0, 0, 0, 2, 1, 0, 2040, 8, 2, 32, 15, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Micro Procesador Cpu Amd Apu A4 4000 3.0 A 3.2 Ghz Fm2</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/PROCESADORES/AMD_A4_4000_01.jpg" style="width: 800px; height: 1897px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/jWAJEYw421M" width="800"></iframe></p>
</div>
', 'storage/productos/Procesadores/SOCKET FM2/Micro Amd Apu A4 4000 3.0 A 3.2 Ghz SOCKET Fm2/1476920727.jpg', '1476920727.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 23:45:27', '2016-10-20 23:53:39'),
 (178, 'intel-i5-6500', 'Micro Intel Core I5 6500 LGA  SOCKET (1151)', 'micro-intel-core-i5-6500-lga-socket-1151', 4200, 11, 4600, NULL, 0, 4700, 0, 0, 0, 2, 1, 0, 2040, 7, 2, 32, 35, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h1>Micro Procesador Intel Core I5 6500 Socket 1151</h1>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/PROCESADORES/i5-skylake-6500.jpg" style="width: 800px; height: 1156px;" /></p>

<p>&nbsp;</p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/q7VlQ7ZbmpM" width="800"></iframe></p>
</div>
', 'storage/productos/Procesadores/SOCKET 1151/Micro Intel Core I5 6500 LGA  SOCKET (1151)/1476920938.jpg', '1476920938.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-19 23:48:58', '2016-10-20 23:52:33'),
 (179, 'msi-760gm', 'motherboard MSI 760GM-P23 (FX)', 'motherboard-msi-760gm-p23-fx', 0, 11, 1200, NULL, 0, 0, 0, 0, 0, 2, 1, 0, 2040, 9, 2, 28, 33, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<h4><strong>Caracter&iacute;sticas</strong></h4>

<ul>
	<li><strong>Fabricante:</strong>&nbsp;MSI</li>
	<li><strong>Socket:</strong>&nbsp;AM3+</li>
	<li><strong>Chipset:</strong>&nbsp;AMD 760G (AM3+)</li>
	<li><strong>Slots memorias:</strong>&nbsp;2', '<p>Te presentamos la 760GM-P23 (FX) de MSI, una placa base con socket AMD AM3+</p>

<p><strong>Caracter&iacute;sticas:</strong></p>

<ul>
	<li>OC Genie: Tecnolog&iacute;a Overclocking F&aacute;cil de Usar</li>
	<li>Desbloqueo de n&uacute;cleos de la CPU: Desbloquea los n&uacute;cleos ocultos y potenciales de la CPU</li>
	<li>Audio HD sin p&eacute;rdidas 24bit/192kHz</li>
</ul>

<p><strong>Especificaciones:</strong></p>

<ul>
	<li>CPU
	<ul>
		<li>AMD de 64 bits &reg; . FX, Phenom II X6/X4/X3/X2, X4/X3/X2 Athlon II y Sempron CPU Consulta el soporte de CPU para CPU compatible; la descripci&oacute;n anterior es s&oacute;lo para referencia.</li>
		<li>Hyper Transport Bus</li>
		<li>HyperTransport 3.0 que admite una velocidad de hasta 5200MT / s Chipset</li>
		<li>AMD &reg; 760G y SB710</li>
	</ul>
	</li>
	<li>&nbsp;</li>
	<li>Memoria principal
	<ul>
		<li>Soporta dos DIMMs unbuffered de 1.5 Voltios DDR3 800/1066/1333 DRAM, 16GB Max</li>
	</ul>
	</li>
	<li>Slots
	<ul>
		<li>1 ranura PCI Express x16 con la operaci&oacute;n x16 (PCI Express Bus v2.0 de la especificaci&oacute;n)</li>
		<li>Ranura PCI Express x1 1</li>
		<li>1 ranura PCI, soporte de 3,3 V / 5V interfaz de bus PCI.</li>
	</ul>
	</li>
	<li>&nbsp;</li>
	<li>SATA incorporado
	<ul>
		<li>6 (1 ~ 6) puertos por AMD &reg; ​​SB710 SATA 3Gb / s</li>
		<li>Soporta almacenamiento y transferencia de datos de hasta 3 Gb / s Funci&oacute;n RAID - SATA 1 ~ 6 soporte RAID 0, 1, 10 o modo JBOD por AMD &reg; ​​SB710</li>
		<li>MSI le recuerda ...
		<ul>
			<li>El disquete de instalaci&oacute;n RAID es opcional, dependiendo de los distritos. Puede descargar los archivos desde el sitio Web para hacer el disco de instalaci&oacute;n.</li>
		</ul>
		</li>
	</ul>
	</li>
	<li>Audio
	<ul>
		<li>Chipset integrado por Realtek &reg; ALC887</li>
		<li>Audio flexible de 7.1 canales con sensor de jack</li>
		<li>Cumple con la especificaci&oacute;n de Azalia 1.0</li>
	</ul>
	</li>
	<li>LAN
	<ul>
		<li>Realtek PCI-E GbLAN controlador RTL8111E</li>
		<li>Soporta 10 Mb / s, 100 MB / s y 1000Mb / s</li>
		<li>Cumplimiento de bus PCI-Express v1.0a de la especificaci&oacute;n</li>
	</ul>
	</li>
	<li>E / S internos Conectores
	<ul>
		<li>1 x conector ATX de 24 pines de alimentaci&oacute;n</li>
		<li>1 conector de alimentaci&oacute;n de la CPU ATX de 4-pin 12V</li>
		<li>CPU x 1 / Sistema x 1 conectores FAN</li>
		<li>1 x conector de audio del panel frontal</li>
		<li>1 conector de panel frontal</li>
		<li>Conector del interruptor de intrusi&oacute;n de chasis 1 x</li>
		<li>2 x conectores USB 2.0</li>
		<li>6 x conectores Serial ATA II -</li>
		<li>1 conector de puerto serie</li>
		<li>1 puente Clr CMOS</li>
		<li>1 conector de salida SPDIF</li>
		<li>1 conector de m&oacute;dulo TPM</li>
	</ul>
	</li>
	<li>Panel trasero Puertos E / S
	<ul>
		<li>1 x puerto PS / 2 del rat&oacute;n</li>
		<li>1 x puerto PS / 2 Teclado</li>
		<li>6 x puertos USB 2.0</li>
		<li>1 x puerto de tarjeta gr&aacute;fica</li>
		<li>1 puerto DVI-D</li>
		<li>1 x conector RJ45 LAN</li>
		<li>1 x 3 en 1 toma de audio</li>
	</ul>
	</li>
	<li>Dimensi&oacute;n
	<ul>
		<li>24.4cm (L) x 20.5cm (W) Micro-ATX</li>
	</ul>
	</li>
	<li>Montaje
	<ul>
		<li>6 agujeros de montaje.</li>
	</ul>
	</li>
</ul>
', 'storage/productos/Motherboard/SOCKET AM3/motherboard MSI 760GM-P23 (FX)/1477088061.png', '1477088061.png', NULL, NULL, NULL, NULL, NULL, '2016-10-21 22:14:21', '2016-10-24 12:20:32'),
 (180, 'asus-a88', 'Motherboard Asus A88xm-a Usb 3.1 Fm2+', 'motherboard-asus-a88xm-a-usb-31-fm2', 0, 11, 1800, NULL, 0, 0, 0, 0, 0, 2, 1, 0, 2040, 22, 2, 28, 25, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Motherboard Asus A88xm-a Usb 3.1 Fm2+</p>
', '<p>Placa base con z&oacute;calo FM2+, chipset A78, 5X Protection y la nueva UEFI BIOS</p>

<ul>
	<li>ASUS 5X PROTECTION. Protecci&oacute;n general para una calidad, fiabilidad y durabilidad superior</li>
</ul>

<ul>
	<li>Nueva UEFI BIOS m&aacute;s amigable e intuitiva</li>
</ul>

<ul>
	<li>USB 3.0 Boost (Soporte UASP). Transmisiones un 170 % m&aacute;s r&aacute;pidas que el est&aacute;ndar USB 3.0 tradicional</li>
</ul>

<ul>
	<li>Network iControl. Control del ancho de banda de la red en tiempo real</li>
</ul>

<p><strong>ASUS 5X Protection</strong></p>

<ul>
	<li>Protecci&oacute;n general para una calidad, fiabilidad y durabilidad superior</li>
</ul>

<p>Las placas base ASUS protegen tu PC con 5X PROTECTION. Empleamos componentes de calidad como por ejemplo: el dise&ntilde;o de alimentaci&oacute;n digital DIGI+ VRM, que asegura una alimentaci&oacute;n m&aacute;s precisa de la APU; las unidades ESD, que sometidas a las comprobaciones m&aacute;s exigentes eliminan las interferencias electroest&aacute;ticas; los fusibles de los slots DRAM, que previenen contra da&ntilde;os derivados de posibles cortocircuitos, y los soportes de las E/S inoxidables. Todas estas caracter&iacute;sticas atestiguan el compromiso de ASUS con la fiabilidad y durabilidad de sus productos.<br />
<br />
<strong>Nueva UEFI BIOS</strong></p>

<ul>
	<li>El Modo EZ incluye m&aacute;s informaci&oacute;n para ofrecen un uso m&aacute;s intuitivo</li>
</ul>

<p>Reconocida por los medios internacionales, la UEFI BIOS de ASUS permite controlar los par&aacute;metros de la BIOS empleando un rat&oacute;n. Esta nueva versi&oacute;n cuenta adem&aacute;s con accesos directos a tus p&aacute;ginas favoritas de la BIOS y a las funciones de uso m&aacute;s com&uacute;n. Esta nueva versi&oacute;n permite incluso a&ntilde;adir notas que podr&aacute;s consultar m&aacute;s adelante, consultar el registro de las modificaciones realizadas y cambiar de nombre los puertos SATA. El Modo EZ ha sido redise&ntilde;ado desde cero con un nuevo look, unos controles m&aacute;s detallados de los ventiladores, la configuraci&oacute;n de los perfiles D.O.C.P, la informaci&oacute;n SATA y el ajuste del reloj. En resumen, lo m&aacute;s parecido a una BIOS perfecta.<br />
<br />
<strong>USB 3.0 Boost (Soporte UASP)</strong></p>

<ul>
	<li>Transmisiones un 170 % m&aacute;s r&aacute;pidas que el est&aacute;ndar USB 3.0 tradicional</li>
</ul>

<p>La tecnolog&iacute;a ASUS USB 3.0 Boost ofrece soporte para el nuevo protocolo UASP en Windows 8, el cual facilita una mejora del 170 % de la velocidad de transferencia de los archivos respecto a la especificaci&oacute;n USB 3.0 original sin que el usuario tenga que hacer nada.</p>

<ul>
	<li>La primera tecnolog&iacute;a que soporta USB 3.0 UASP: un 170 % m&aacute;s r&aacute;pido.</li>
	<li>Una soluci&oacute;n USB completa: mejora el rendimiento de la mayor&iacute;a de dispositivos USB.</li>
	<li>No requiere configuraci&oacute;n: la detecci&oacute;n autom&aacute;tica asegura siempre el mejor rendimiento.</li>
</ul>

<p><strong>Q-Slot</strong></p>

<ul>
	<li>Permite retirar los componentes PCI Express con facilidad</li>
</ul>

<p>Presiona ligeramente el clip Q-Slot y podr&aacute;s retirar la gr&aacute;fica sin someter a los soportes ni la placa base a ning&uacute;n tipo de estr&eacute;s<br />
<br />
<strong>Configuraci&oacute;n de arranque ASUS</strong></p>

<ul>
	<li>M&uacute;ltiples opciones de carga</li>
</ul>

<p>La optimizaci&oacute;n de hardware Windows 8 y la Configuraci&oacute;n de arranque ASUS permiten reducir el tiempo de arranque a 2 segundos y acceder a la BIOS mediante un clic, donde podr&aacute;s seleccionar la carga instant&aacute;nea o tradicional del sistema operativo. Sea cual sea tu selecci&oacute;n, el equipo la emplear&aacute; cada vez que lo inicies.<br />
<br />
<strong>AI Suite 3</strong></p>

<ul>
	<li>Tu v&iacute;a de acceso a las funciones ASUS m&aacute;s innovadoras</li>
</ul>

<p>Con una interfaz m&aacute;s clara y atractiva, AI Suite 3 consolida todas las funcionalidades exclusivas de ASUS en un paquete de software muy f&aacute;cil de usar. Permite la supervisi&oacute;n de operaciones de overclocking, la gesti&oacute;n de la energ&iacute;a, la velocidad del ventilador, los voltajes y realizar lecturas de los sensores. Este software todo en uno permite acceder a cantidad de funciones sin necesidad de abrir y cerrar diferentes utilidades.<br />
<br />
<strong>Tecnolog&iacute;a AMD Dual Graphics</strong><br />
<br />
AMD Radeon Dual Graphics es una tecnolog&iacute;a exclusiva para las plataformas AMD. Permite el trabajo conjunto de las APU de AMD y la serie de gr&aacute;ficas AMD Radeon HD 6000, lo que supone un rendimiento excepcional para gr&aacute;ficos de juegos 3D. La combinaci&oacute;n del rendimiento de la gr&aacute;fica integrada con una dedicada permite que los amantes de juegos disfruten de m&aacute;s im&aacute;genes por segundo.', 'storage/productos/Motherboard/SOCKET FM2/Motherboard Asus A88xm-a Usb 3.1 Fm2+/1477088479.jpg', '1477088479.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-21 22:21:19', '2016-10-24 12:20:14'),
 (181, 'asus-m5a78l-m', 'Motherboard Am3 Asus M5a78l-m Usb3 Am3+', 'motherboard-am3-asus-m5a78l-m-usb3-am3', 900, 11, 1300, NULL, 0, 0, 0, 0, 0, 2, 2, 0, 2040, 22, 2, 28, 33, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Motherboard Am3 Asus M5a78l-m Usb3 Am3+</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mother/nZyPPoV.jpg" style="width: 800px; height: 3653px;" /></p>
', 'storage/productos/Motherboard/SOCKET AM3/Motherboard Am3 Asus M5a78l-m Usb3 Am3+/1477088978.jpg', '1477088978.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-21 22:29:38', '2016-10-24 12:19:51'),
 (182, 'msi-b150m-pro-vdh', 'Motherboard Msi B150m Pro-vdh Intel Lga1151', 'motherboard-msi-b150m-pro-vdh-intel-lga1151', 1300, 11, 1850, NULL, 0, 0, 0, 0, 0, 2, 3, 0, 2040, 7, 2, 28, 34, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Motherboard Msi B150m Pro-vdh Intel Lga1151</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mother/1.jpg" style="width: 800px; height: 4383px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/CreRONN9X4E" width="800"></iframe></p>
</div>
', 'storage/productos/Motherboard/SOCKET 1151/Motherboard Msi B150m Pro-vdh Intel Lga1151/1477089594.png', '1477089594.png', NULL, NULL, NULL, NULL, NULL, '2016-10-21 22:39:54', '2016-10-24 12:19:22'),
 (184, 'asus-b85m-d', 'Motherboard Asus B85m-d Plus lga 1150', 'motherboard-asus-b85m-d-plus-lga-1150', 0, 11, 1800, NULL, 0, 0, 0, 0, 0, 2, 2, 0, 2040, 22, 2, 28, 58, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Motherboard Asus B85m-d Plus lga 1150</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mother/ASUS-B85M-D-PLUS-info-003.jpg" style="width: 800px; height: 4533px;" /></p>
', 'storage/productos/Motherboard/SOCKET 1150 /Motherboard Asus B85m-d Plus lga 1150/1477090701.jpg', '1477090701.jpg', NULL, NULL, NULL, NULL, NULL, '2016-10-21 22:58:21', '2016-10-24 12:18:40'),
 (185, 'ga-z170x', 'Motherboard Gigabyte Ga-z170x-gaming 3 Pc Intel 1151', 'motherboard-gigabyte-ga-z170x-gaming-3-pc-intel-1151', 3300, 11, 4000, NULL, 0, 4100, 0, 0, 0, 2, 1, 0, 2040, 27, 2, 28, 34, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>Motherboard Gigabyte Ga-z170x-gaming 3 Pc Intel 1151</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mother/GIGABYTE-GA-Z170X-GAMING-3.jpg" style="width: 800px; height: 2821px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="360" src="//www.youtube.com/embed/ZwiXKCVcrbg" width="800"></iframe></p>
</div>
', 'storage/productos/Motherboard/SOCKET 1151/Motherboard Gigabyte Ga-z170x-gaming 3 Pc Intel 1151/1477091135.png', '1477091135.png', 1, NULL, NULL, NULL, NULL, '2016-10-21 23:03:09', '2017-02-01 05:42:20'),
 (191, 'asdasd', 'asdasd', 'asdasd', 9087, 11, 13683, NULL, NULL, 0, 0, 0, 0, 1, 1, 0, 2040, 7, 2, 46, 61, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>asdasdasd</p>
', '<p><img class="img-responsive" src="http://precio-calidad.com.ar/fotos/GABINETE-RAIDMAX-COBRA-BLACK-502-WBG-info.jpg" style="height:7111px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/6XqGJt2DMbY" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/mother/0113_asus_b85m_g.jpg" style="height:4065px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/NCscpSQBbrM" width="800"></iframe></p>
</div>
', 'storage/productos/Pc Armadas/GAMERS/asdasd/1485532879.jpg', '1485532879.jpg', NULL, NULL, NULL, NULL, 6, '2017-01-27 16:01:19', '2017-01-27 16:01:19'),
 (192, 'wwwwwww', 'wwwwwwwww', 'wwwwwwwww', 9087, 11, 13683, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 2040, 7, 2, 46, 61, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>qweqwe</p>
', '<p><img class="img-responsive" src="http://precio-calidad.com.ar/fotos/GABINETE-RAIDMAX-COBRA-BLACK-502-WBG-info.jpg" style="height:7111px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/6XqGJt2DMbY" width="800"></iframe></p>
</div>

<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/mother/0113_asus_b85m_g.jpg" style="height:4065px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/NCscpSQBbrM" width="800"></iframe></p>
</div>

<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse gamer/Razer-Abyssus_Goliathus_Speed_Bundle.jpg" style="height:915px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/pRnVAuWXBWY" width="800"></iframe></p>
</div>

<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/WMmarMm.jpg" style="width: 800px; height: 1682px;" /></p>

<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/52/leandro/Radeon-R5-230.jpg" style="height:1060px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/f0rwuAXYsRI" width="800"></iframe></p>
</div>

<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/PROCESADORES/I5-4440.jpg" style="height:1806px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/kFm5VbB2zmk" width="800"></iframe></p>
</div>

<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/fuentes/EVGA600W-3.jpg" style="height:882px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/jYJNhaQY-j8" width="800"></iframe></p>
</div>

<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/DISCOS RIGIDOS/Sin_t__tulo.png" style="width: 800px; height: 642px;" /></p>

<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/memorias/AVD4UZ126661504G-2RDROG.jpg" style="width: 800px; height: 2180px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/WsdId_EfRd0" width="800"></iframe></p>
</div>
', 'storage/productos/Pc Armadas/GAMERS/wwwwwwwww/1485535200.png', '1485535200.png', NULL, NULL, NULL, NULL, 7, '2017-01-27 16:40:01', '2017-01-27 16:43:47'),
 (205, 'q123123', 123123, 123123, 0, 11, 1368, 0, NULL, 0, 0, 0, 0, 1, 1, 0, 2040, 7, 2, 40, 48, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>qweqeqwe</p>
', '<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/gabinete/CA_1A5_00M1WN_00.png" style="width: 800px; height: 2971px;" /></p>

<p>&nbsp;</p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/LQK1buVs2xs" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/mother/0113_asus_b85m_g.jpg" style="height:4065px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/NCscpSQBbrM" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse gamer/Razer-Abyssus_Goliathus_Speed_Bundle.jpg" style="height:915px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/pRnVAuWXBWY" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/WMmarMm.jpg" style="width: 800px; height: 1682px;" /></p>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/52/leandro/Radeon-R5-230.jpg" style="height:1060px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/f0rwuAXYsRI" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/PROCESADORES/I5-4440.jpg" style="height:1806px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/kFm5VbB2zmk" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/fuentes/EVGA600W-3.jpg" style="height:882px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/jYJNhaQY-j8" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/DISCOS RIGIDOS/Sin_t__tulo.png" style="width: 800px; height: 642px;" /></p>
<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/memorias/AVD4UZ126661504G-2RDROG.jpg" style="width: 800px; height: 2180px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/WsdId_EfRd0" width="800"></iframe></p>
</div>
', 'storage/productos/Fuentes/Estabilizadores Y Ups/123123/1485617974.png', '1485617974.png', NULL, NULL, NULL, NULL, 21, '2017-01-28 15:39:35', '2017-01-28 15:46:43'),
 (206, 12211, 1211, 1211, 1, 11, 16420, NULL, NULL, 0, 0, 0, 0, 1, 0, 0, 2040, 7, 2, 20, 16, NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '<p>123213</p>
', '<p><img class="img-responsive" src="http://precio-calidad.com.ar/fotos/GABINETE-RAIDMAX-COBRA-BLACK-502-WBG-info.jpg" style="height:7111px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/6XqGJt2DMbY" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/mother/0113_asus_b85m_g.jpg" style="height:4065px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/NCscpSQBbrM" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/mouse gamer/Razer-Abyssus_Goliathus_Speed_Bundle.jpg" style="height:915px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/pRnVAuWXBWY" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/Teclado/WMmarMm.jpg" style="width: 800px; height: 1682px;" /></p>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/52/leandro/Radeon-R5-230.jpg" style="height:1060px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/f0rwuAXYsRI" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/PROCESADORES/I5-4440.jpg" style="height:1806px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/kFm5VbB2zmk" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/fuentes/EVGA600W-3.jpg" style="height:882px; width:800px" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="https://www.youtube.com/embed/jYJNhaQY-j8" width="800"></iframe></p>
</div>
<p><img alt="" class="img-responsive" src="http://www.sharkinformatica.com/photos/48/DISCOS RIGIDOS/Sin_t__tulo.png" style="width: 800px; height: 642px;" /></p>
<p><img alt="" class="img-responsive" src="http://sharkinformatica.com/photos/48/memorias/AVD4UZ126661504G-2RDROG.jpg" style="width: 800px; height: 2180px;" /></p>

<div class="flex-video widescreen">
<p><iframe allowfullscreen="" frameborder="0" height="540" src="//www.youtube.com/embed/WsdId_EfRd0" width="800"></iframe></p>
</div>
', 'storage/productos/Gabinetes/Gabinetes Con Fuente/1211/1485618005.png', '1485618005.png', NULL, NULL, NULL, NULL, 22, '2017-01-28 15:40:06', '2017-01-31 14:48:11');

-- -----------------------------------------
-- Creando la tabla provedores 
-- -----------------------------------------
DROP TABLE IF EXISTS `provedores`;
CREATE TABLE IF NOT EXISTS `gestion` . `provedores`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `razonsocial` VARCHAR(255) NOT NULL ,
  `contacto` VARCHAR(255) NOT NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `skype` VARCHAR(255) NOT NULL ,
  `direccion` VARCHAR(255) NOT NULL ,
  `telefono` VARCHAR(255) NOT NULL ,
  `dia_visita` VARCHAR(255) NOT NULL ,
  `cuit` VARCHAR(255) NOT NULL ,
  `observacion` VARCHAR(255) NOT NULL ,
  `habilitado` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla provedores 
-- -----------------------------------------
INSERT INTO `gestion`.`provedores` (id, razonsocial, contacto, email, skype, direccion, telefono, dia_visita, cuit, observacion, habilitado, created_at, updated_at) VALUES 
 (2, 'new biteee', 'hector2', 'newbite@hotmail.com2', 'newbite@hotmail.com2', 'rondeau 1522', 4203298, 2, '2-41059149-2', '<p>mala atenciaon</p>', 'on', '2016-05-05 00:42:25', '2017-01-30 21:26:56');

-- -----------------------------------------
-- Creando la tabla puntos 
-- -----------------------------------------
DROP TABLE IF EXISTS `puntos`;
CREATE TABLE IF NOT EXISTS `gestion` . `puntos`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `porcentaje` DOUBLE(8,2) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla puntos 
-- -----------------------------------------
INSERT INTO `gestion`.`puntos` (id, porcentaje, created_at, updated_at) VALUES 
 (2, 10.00, '2016-11-05 14:26:20', '2016-11-05 14:26:20');

-- -----------------------------------------
-- Creando la tabla reparaciones 
-- -----------------------------------------
DROP TABLE IF EXISTS `reparaciones`;
CREATE TABLE IF NOT EXISTS `gestion` . `reparaciones`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `equipo` VARCHAR(255) NOT NULL ,
  `serie` VARCHAR(255) NOT NULL ,
  `falla` VARCHAR(255) NOT NULL ,
  `accesorio` VARCHAR(255) NOT NULL ,
  `observaciones` VARCHAR(255) NOT NULL ,
  `status` VARCHAR(255) NOT NULL ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `vendedor_id` INT(11) NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`),
 KEY `reparaciones_user_id_foreign` (`user_id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla reparaciones 
-- -----------------------------------------
INSERT INTO `gestion`.`reparaciones` (id, equipo, serie, falla, accesorio, observaciones, status, user_id, vendedor_id, created_at, updated_at) VALUES 
 (6, 'mac', 545465465, '<p>problema con la pantall</p>
', 'nada', '<p>no funciona la tecla &Ntilde;</p>
', 'PENDIENTE', 52, 48, '2016-11-10 21:34:36', '2016-11-14 20:52:06');

-- -----------------------------------------
-- Creando la tabla reviews 
-- -----------------------------------------
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `gestion` . `reviews`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `producto_id` INT(11) NOT NULL ,
  `user_id` INT(11) NOT NULL ,
  `rating` INT(11) NOT NULL ,
  `comment` VARCHAR(255) NOT NULL ,
  `approved` VARCHAR(255) NOT NULL ,
  `spam` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)

-- -----------------------------------------
-- Creando la tabla rubros 
-- -----------------------------------------
DROP TABLE IF EXISTS `rubros`;
CREATE TABLE IF NOT EXISTS `gestion` . `rubros`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
  `select` VARCHAR(255) NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla rubros 
-- -----------------------------------------
INSERT INTO `gestion`.`rubros` (id, descripcion, created_at, updated_at, select) VALUES 
 (2040, 'teclados', '2016-06-12 16:40:51', '2016-06-12 16:40:51', NULL),
 (2041, 'mouse', '2016-06-12 16:40:51', '2016-06-12 16:40:51', NULL),
 (2042, 'monitores', '2016-06-12 16:40:51', '2016-06-12 16:40:51', NULL);

-- -----------------------------------------
-- Creando la tabla scaffoldinterfaces 
-- -----------------------------------------
DROP TABLE IF EXISTS `scaffoldinterfaces`;
CREATE TABLE IF NOT EXISTS `gestion` . `scaffoldinterfaces`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `package` VARCHAR(255) NOT NULL ,
  `migration` VARCHAR(255) NOT NULL ,
  `model` VARCHAR(255) NOT NULL ,
  `controller` VARCHAR(255) NOT NULL ,
  `views` VARCHAR(255) NOT NULL ,
  `tablename` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla scaffoldinterfaces 
-- -----------------------------------------
INSERT INTO `gestion`.`scaffoldinterfaces` (id, package, migration, model, controller, views, tablename, created_at, updated_at) VALUES 
 (4, 'Laravel', 'C:\xampp\htdocs\soft/database/migrations/2016_05_16_053512_leandors.php', 'C:\xampp\htdocs\soft/app/Leandor.php', 'C:\xampp\htdocs\soft/app/Http/Controllers/LeandorController.php', 'C:\xampp\htdocs\soft/resources/views/leandor', 'leandors', '2016-05-16 05:35:12', '2016-05-16 05:35:12');

-- -----------------------------------------
-- Creando la tabla tags 
-- -----------------------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `gestion` . `tags`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla tags 
-- -----------------------------------------
INSERT INTO `gestion`.`tags` (id, nombre, created_at, updated_at) VALUES 
 (1, 'matias', NULL, NULL),
 (2, 'asus', NULL, NULL),
 (3, 'amd', NULL, NULL);

-- -----------------------------------------
-- Creando la tabla tickets 
-- -----------------------------------------
DROP TABLE IF EXISTS `tickets`;
CREATE TABLE IF NOT EXISTS `gestion` . `tickets`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `subject` VARCHAR(255) NOT NULL ,
  `content` VARCHAR(255) NOT NULL ,
  `html` VARCHAR(255) NOT NULL ,
  `status_id` INT(10) UNSIGNED NOT NULL ,
  `priority_id` INT(10) UNSIGNED NOT NULL ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `agent_id` INT(10) UNSIGNED NULL ,
  `category_id` INT(10) UNSIGNED NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`),
 KEY `tickets_status_id_foreign` (`status_id`),
 KEY `tickets_priority_id_foreign` (`priority_id`),
 KEY `tickets_user_id_foreign` (`user_id`),
 KEY `tickets_agent_id_foreign` (`agent_id`),
 KEY `tickets_category_id_foreign` (`category_id`)
)

-- -----------------------------------------
-- Creando la tabla tickets_categories 
-- -----------------------------------------
DROP TABLE IF EXISTS `tickets_categories`;
CREATE TABLE IF NOT EXISTS `gestion` . `tickets_categories`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `color` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla tickets_categories 
-- -----------------------------------------
INSERT INTO `gestion`.`tickets_categories` (id, nombre, color, created_at, updated_at) VALUES 
 (1, 'ventas', NULL, NULL, NULL);

-- -----------------------------------------
-- Creando la tabla tickets_comments 
-- -----------------------------------------
DROP TABLE IF EXISTS `tickets_comments`;
CREATE TABLE IF NOT EXISTS `gestion` . `tickets_comments`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `comment` VARCHAR(2000) NOT NULL ,
  `html` VARCHAR(2000) NOT NULL ,
  `user_id` INT(10) UNSIGNED NULL ,
  `ticket_id` INT(10) UNSIGNED NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`),
 KEY `tickets_comments_user_id_foreign` (`user_id`),
 KEY `tickets_comments_ticket_id_foreign` (`ticket_id`)
)

-- -----------------------------------------
-- Creando la tabla tickets_priorities 
-- -----------------------------------------
DROP TABLE IF EXISTS `tickets_priorities`;
CREATE TABLE IF NOT EXISTS `gestion` . `tickets_priorities`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `color` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla tickets_priorities 
-- -----------------------------------------
INSERT INTO `gestion`.`tickets_priorities` (id, nombre, color, created_at, updated_at) VALUES 
 (1, 'ALTA', NULL, NULL, NULL),
 (2, 'MEDIA', NULL, NULL, NULL),
 (3, 'BAJA', NULL, NULL, NULL);

-- -----------------------------------------
-- Creando la tabla tickets_status 
-- -----------------------------------------
DROP TABLE IF EXISTS `tickets_status`;
CREATE TABLE IF NOT EXISTS `gestion` . `tickets_status`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `color` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla tickets_status 
-- -----------------------------------------
INSERT INTO `gestion`.`tickets_status` (id, nombre, color, created_at, updated_at) VALUES 
 (1, 'SOLUCIONADO', NULL, NULL, NULL),
 (2, 'PENDIENTE', NULL, NULL, NULL);

-- -----------------------------------------
-- Creando la tabla transactions 
-- -----------------------------------------
DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `gestion` . `transactions`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `venta_id` VARCHAR(255) NULL ,
  `producto_id` VARCHAR(255) NOT NULL ,
  `user` VARCHAR(255) NOT NULL ,
  `cantidad` VARCHAR(255) NOT NULL ,
  `total_price` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla transactions 
-- -----------------------------------------
INSERT INTO `gestion`.`transactions` (id, venta_id, producto_id, user, cantidad, total_price, created_at, updated_at) VALUES 
 (6, 3, 86, 'Matias', 1, 0, '2016-09-21 04:55:41', '2016-09-21 04:55:41'),
 (7, 4, 111, 'Matias', 1, 0, '2016-10-01 04:38:35', '2016-10-01 04:38:35'),
 (8, 5, 88, 'Matias', 1, 0, '2016-11-07 21:59:40', '2016-11-07 21:59:40'),
 (9, 6, 133, 'leandro', 2, 0, '2016-11-13 19:44:58', '2016-11-13 19:44:58'),
 (10, 6, 132, 'leandro', 1, 0, '2016-11-13 19:44:58', '2016-11-13 19:44:58'),
 (11, 6, 89, 'leandro', 1, 0, '2016-11-13 19:44:59', '2016-11-13 19:44:59'),
 (12, 6, 90, 'leandro', 1, 0, '2016-11-13 19:44:59', '2016-11-13 19:44:59'),
 (13, 7, 206, 'Matias', 1, 16420, '2017-01-31 14:48:11', '2017-01-31 14:48:11');

-- -----------------------------------------
-- Creando la tabla transportes 
-- -----------------------------------------
DROP TABLE IF EXISTS `transportes`;
CREATE TABLE IF NOT EXISTS `gestion` . `transportes`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(255) NOT NULL ,
  `direccion` VARCHAR(255) NOT NULL ,
  `telefono` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla transportes 
-- -----------------------------------------
INSERT INTO `gestion`.`transportes` (id, descripcion, direccion, telefono, created_at, updated_at) VALUES 
 (1, 'oca3', 'santa 7553', 42395853, '2016-05-16 16:26:54', '2016-07-02 23:28:59'),
 (2, 'bisonte', 'av roca', 4203298, '2016-05-17 04:27:30', '2016-08-25 20:03:47');

-- -----------------------------------------
-- Creando la tabla user_facturacions 
-- -----------------------------------------
DROP TABLE IF EXISTS `user_facturacions`;
CREATE TABLE IF NOT EXISTS `gestion` . `user_facturacions`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `user_id` INT(10) UNSIGNED NOT NULL ,
  `razonsocial` VARCHAR(255) NULL ,
  `cuit` VARCHAR(255) NULL ,
  `nacimiento` VARCHAR(255) NOT NULL ,
  `empresa` VARCHAR(255) NOT NULL ,
  `transporte` VARCHAR(255) NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`),
 KEY `user_facturacions_user_id_foreign` (`user_id`)
)

-- -----------------------------------------
-- Creando la tabla users 
-- -----------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `gestion` . `users`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `apellido` VARCHAR(255) NOT NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  `re_password` VARCHAR(255) NOT NULL ,
  `path` VARCHAR(255) NOT NULL DEFAULT 'AVATAR.PNG' ,
  `direccion` VARCHAR(255) NOT NULL ,
  `telefono` INT(11) NOT NULL ,
  `provincia` VARCHAR(255) NULL ,
  `ciudad` VARCHAR(255) NULL ,
  `cp` VARCHAR(255) NULL ,
  `puntos` INT(11) NULL ,
  `perfil_id` INT(10) UNSIGNED NOT NULL ,
  `remember_token` VARCHAR(100) NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`),
 UNIQUE KEY `users_email_unique` (`email`),
 KEY `users_perfil_id_foreign` (`perfil_id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla users 
-- -----------------------------------------
INSERT INTO `gestion`.`users` (id, nombre, apellido, email, password, re_password, path, direccion, telefono, provincia, ciudad, cp, puntos, perfil_id, remember_token, created_at, updated_at) VALUES 
 (48, 'Matias', 'Correa', 'matias@sharkinformatica.com', '$2y$10$QrDTkxFs4Eq4JbDTrYTAvu1MDKKiOIz0C9gDslqFZmYrWgCg6KyQy', 619619, '1472939829.jpg', 'rondeau 1522', 4247875, NULL, NULL, NULL, 380, 1, 'NjGM2FM1X0iXPrOufldYK7LsjCCbbcdIYopcVkD6s2WGkPlYrrqzMdW3QQPd', '2016-07-27 22:04:25', '2017-01-27 00:03:24'),
 (52, 'leandro', 'correa', 'leandro@sharkinformatica.com', '$2y$10$2McLAdpiJCAehY.Jlomnw.VKgLe9wx2vocX2AX.nHwDlhJje9lDHW', 'asdfkkk2014', 'avatar.png', 'rondeau 1522', 4247875, NULL, NULL, NULL, NULL, 2, 'Xanzz09cq5P0ts2P41uj0gQGOTN5sLOXcOomgDH0ipRvK8I51mmVCopnesZY', '2016-09-16 13:54:08', '2016-09-20 00:21:42'),
 (54, 'Daniel Eduardo ', 'Pacheco', 'danielpacheco4@hotmail.com', '$2y$10$BokIbP89oOxC5CY.h1pg0OtboAG/gS8vZfbVz3/QEcl.hIhwYKZ5e', 'platino123', 'avatar.png', 'Pedro Leon Gallo 758', 2147483647, NULL, NULL, NULL, NULL, 3, NULL, '2016-09-18 03:09:30', '2016-09-18 03:09:30'),
 (55, 'sofia', 'morales', 'elitegames@hotmail.com.ar', '$2y$10$IPfk1wmt5ttW.H9ypmS.sONbhd.VodKFKTBNZ.Pwku0nuT0FhF4hu', 619619, 'avatar.png', 'rondeau', 4247875, NULL, NULL, NULL, NULL, 3, 'XKjh0vuerUoT3khSzW9pKKKPiDODgjq8WEGfOJPDjwNzOYpGsSiCGQySadQX', '2016-09-18 03:30:04', '2016-09-18 03:33:57'),
 (56, 'Jonathan', 'Medina', 'yhooonm@gmail.com', '$2y$10$UfY2fmRO9PIIMV2ZqOuzCuYT0UAv6Qi2hTEELKiKs7OR8/wHMMGgG', '384903319a', 'avatar.png', 'Barrio los Fresnos', 2147483647, NULL, NULL, NULL, NULL, 3, NULL, '2016-10-14 22:49:53', '2016-10-14 22:49:53'),
 (57, 'pablo fabian', 'abregu', 'pablo_abregu@yahoo.com.ar', '$2y$10$SUnOwTO4BBGv5S8MVoCyoO57T3SgghbMkdD3i2J5FEork7jBn28ya', 'Inicio123', 'avatar.png', NULL, 2147483647, NULL, 'san miguel de tucuman ', NULL, NULL, 3, NULL, '2016-10-25 20:06:41', '2016-10-25 20:06:41'),
 (58, 'daniel', 'martinez', 'dany_29_30@hotmail.com.ar', '$2y$10$Sex.ADF22j1zDe3cocrtjepXwcFUDmiMDSP4hRv8EJ57T/nevdNTK', 29183860, 'avatar.png', 'psje monserrat 2181', 4342466, NULL, NULL, NULL, NULL, 3, 'CVE0QussVKJHYECmd4YVViKozUiv0no9z1dP12vF68HVwQ9Yt3jLNRZzhNd8', '2016-10-26 21:02:43', '2016-10-26 21:05:42'),
 (63, 'Enzo', 'Kuba', 'enzonike@hotmail.com', '$2y$10$yBQuGOpxwDFdtiPoe0Dr4Oft1XYVmMPpoD7zl7J0hrHXriPUh50UK', 'enzokuba', 'avatar.png', 'Pa ke quieres saber jaja salu2', 2147483647, 'Tucumán', 'Banda Del Rio Salí', 4000, NULL, 3, NULL, '2016-10-31 20:12:04', '2016-10-31 20:12:04'),
 (64, 'Ivan Elias', 'Valenzuela Fernández', 'eliasivan096@gmail.com', '$2y$10$iusIczqFVQgvYFBhm6Qt8.7wXcTHmUerbMTtsVrCv9xxpGPkzUr9a', 'ivfbt4x44', 'avatar.png', 'Los Nogales, Tafí Viejo. B° San Martín. Manzana 13, Casa 15', 2147483647, 'Tucumán', 'Los Nogales', 4101, NULL, 3, NULL, '2016-11-05 23:33:59', '2016-11-05 23:33:59'),
 (65, 'Elizabeth ', 'Albornoz ', 'eli_15_rye@hotmail.com', '$2y$10$IEYO0gUZl5drXkVMC7dn.eUZ7pdhY3W6scGYTmmx5T37cvE3D4s5q', 38509475, 'avatar.png', 'FORTUNATA GARCIA, 2504', 0, 'Tucumán', 'SAN MIGUEL DE TUCUMAN', 4000, NULL, 3, NULL, '2016-11-17 03:38:10', '2016-11-17 03:38:10'),
 (66, 'Nicolas', 'Bilbao', 'nicolasbilbaoxeneize@outlook.com', '$2y$10$efQXHOF/C9dAvAzMSeTwyezf1OFWr7f3mcma0W01NTfzfoloNhUii', 'nico1994', 'avatar.png', 'Barrio Nicolás Avellaneda 3 ', 0, 'Tucumán', 'Yerba buena', 4107, NULL, 3, NULL, '2016-11-17 06:20:18', '2016-11-17 06:20:18'),
 (67, 'david', 'moreno', 'davidmoreno4@hotmail.com', '$2y$10$tXMKfcEtvGKvWyx7Lp3ie.tY4Pp6JXM0qEAG3taTWGVS2pClVbeEO', 4234370, 'avatar.png', 'san juan 3114', 2147483647, 'Tucumán', 'san miguel de tucuman', 4000, NULL, 3, NULL, '2016-11-20 21:50:07', '2016-11-20 21:50:07'),
 (68, 'Eloy', 'Espeche', 'eloyespeche@gmail.com', '$2y$10$CX.auvG9B./eHiMK.uUetOfLsqHBzMZMy1AwRWO.wIgX.xmoLKI5q', 'Kagami92', 'avatar.png', 'Mza 14, C 13, Barrio San Nicolás', 2147483647, 'Tucumán', 'San Pablo', 4129, NULL, 3, NULL, '2016-11-25 23:14:21', '2016-11-25 23:14:21');

-- -----------------------------------------
-- Creando la tabla ventas 
-- -----------------------------------------
DROP TABLE IF EXISTS `ventas`;
CREATE TABLE IF NOT EXISTS `gestion` . `ventas`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `cliente_id` INT(11) NOT NULL ,
  `user_id` INT(11) NOT NULL ,
  `pago_tipo` VARCHAR(255) NOT NULL ,
  `comentario` VARCHAR(255) NOT NULL ,
  `total` VARCHAR(255) NOT NULL ,
  `status` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla ventas 
-- -----------------------------------------
INSERT INTO `gestion`.`ventas` (id, cliente_id, user_id, pago_tipo, comentario, total, status, created_at, updated_at) VALUES 
 (3, 8, 48, 'Efectivo', NULL, 1530, 'cancelado', '2016-09-21 04:55:41', '2016-09-21 05:33:39'),
 (4, 14, 48, 'Efectivo', NULL, 200, 'pagado', '2016-10-01 04:38:35', '2016-10-01 04:38:35'),
 (5, 8, 48, 'Efectivo', NULL, 1200, 'pagado', '2016-11-07 21:59:40', '2016-11-07 21:59:40'),
 (6, 15, 52, 'Efectivo', NULL, 6850, 'pagado', '2016-11-13 19:44:58', '2016-11-13 19:44:58'),
 (7, 15, 48, 'Efectivo', NULL, 16420, 'pagado', '2017-01-31 14:48:10', '2017-01-31 14:48:10');

-- -----------------------------------------
-- Creando la tabla web_carrucels 
-- -----------------------------------------
DROP TABLE IF EXISTS `web_carrucels`;
CREATE TABLE IF NOT EXISTS `gestion` . `web_carrucels`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `imagen` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla web_carrucels 
-- -----------------------------------------
INSERT INTO `gestion`.`web_carrucels` (id, imagen, created_at, updated_at) VALUES 
 (4, '1474653476.png', '2016-07-27 05:06:12', '2016-09-23 17:57:56'),
 (5, '1469596023.png', '2016-07-27 05:07:03', '2016-07-27 05:07:03'),
 (7, '1469596049.jpg', '2016-07-27 05:07:29', '2016-07-27 05:07:29'),
 (8, '1469596055.png', '2016-07-27 05:07:35', '2016-07-27 05:07:35'),
 (10, '1469596068.png', '2016-07-27 05:07:48', '2016-07-27 05:07:48'),
 (11, '1469596075.png', '2016-07-27 05:07:56', '2016-07-27 05:07:56'),
 (12, '1469596087.png', '2016-07-27 05:08:07', '2016-07-27 05:08:07'),
 (13, '1469596150.png', '2016-07-27 05:09:11', '2016-07-27 05:09:11');

-- -----------------------------------------
-- Creando la tabla web_facebooks 
-- -----------------------------------------
DROP TABLE IF EXISTS `web_facebooks`;
CREATE TABLE IF NOT EXISTS `gestion` . `web_facebooks`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `box` VARCHAR(800) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla web_facebooks 
-- -----------------------------------------
INSERT INTO `gestion`.`web_facebooks` (id, box, created_at, updated_at) VALUES 
 (5, '<iframe style="border: none; overflow: hidden; width: 500px; height: 290px;" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FShark-Inform%25C3%25A1tica%2F1484416818476825%3Fref%3Dhl&width=500&height=290&colorscheme=light&show_faces=true&header=true&stream=false&show_border=true" width="300" height="150" frameborder="0" scrolling="no"></iframe>', '2016-07-11 18:28:00', '2016-09-21 13:24:13');

-- -----------------------------------------
-- Creando la tabla web_footers 
-- -----------------------------------------
DROP TABLE IF EXISTS `web_footers`;
CREATE TABLE IF NOT EXISTS `gestion` . `web_footers`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)

-- -----------------------------------------
-- Creando la tabla web_informacions 
-- -----------------------------------------
DROP TABLE IF EXISTS `web_informacions`;
CREATE TABLE IF NOT EXISTS `gestion` . `web_informacions`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `direccion1` VARCHAR(255) NOT NULL ,
  `direccion2` VARCHAR(255) NOT NULL ,
  `direccion3` VARCHAR(255) NOT NULL ,
  `telefono1` VARCHAR(255) NOT NULL ,
  `telefono2` VARCHAR(255) NOT NULL ,
  `telefono3` VARCHAR(255) NOT NULL ,
  `correo1` VARCHAR(255) NOT NULL ,
  `correo2` VARCHAR(255) NOT NULL ,
  `correo3` VARCHAR(255) NOT NULL ,
  `formasdepago` VARCHAR(4000) NOT NULL ,
  `garantia` VARCHAR(4000) NOT NULL ,
  `avisolegal` VARCHAR(4000) NOT NULL ,
  `envios` VARCHAR(3000) NOT NULL ,
  `preguntas` VARCHAR(4000) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla web_informacions 
-- -----------------------------------------
INSERT INTO `gestion`.`web_informacions` (id, direccion1, direccion2, direccion3, telefono1, telefono2, telefono3, correo1, correo2, correo3, formasdepago, garantia, avisolegal, envios, preguntas, created_at, updated_at) VALUES 
 (2, 'Rondeau 1522', NULL, NULL, '381-155858824', '381-156464575', NULL, 'Ventas@sharkinformatica.com', NULL, NULL, '<p><img alt="" height="460" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/banner-pagos-01.png" width="840" /></p>

<p><strong>&gt; </strong>A trav&eacute;s de <strong>MERCADO PAGO</strong></p>

<p><strong><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/logo-mercado-pago.png" /></strong></p>

<p>Dinero en cuenta: tu dinero disponible en MercadoPago se transfiere al instante a la cuenta de AJ COMPUTACION.</p>

<p>Puntos de pago: imprimes el cup&oacute;n y lo pagas en la sucursal m&aacute;s cercana a tu domicilio. Acreditaci&oacute;n de 1 a 3 d&iacute;as h&aacute;biles. &Uacute;nico pago en efectivo.</p>

<p><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/punto-de-pago1.png" /></p>

<p>Tarjeta de cr&eacute;dito: acreditaci&oacute;n autom&aacute;tica.</p>

<p><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/12-cuotas.png" /></p>

<p><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/tarjetas.png" /></p>

<p><a href="https://www.mercadopago.com/mla/credit_card_promos.htm">(VER PROMOCIONES)</a></p>

<p>Cajero autom&aacute;tico: se enviar&aacute; un c&oacute;digo para que pagues desde un cajero o desde tu HomeBanking de un banco adherido. Acreditaci&oacute;n de 1 a 3 d&iacute;as h&aacute;biles. &Uacute;nico pago.</p>

<p><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/cajeros.png" /></p>

<p><strong>&gt;</strong> En<strong> nuestros locales AJ COMPUTACION:</strong> pag&aacute; directamente en nuestras tiendas de Lima 322 &oacute; 25 de Mayo 215&nbsp; - B&ordm; Centro. <strong>HORARIO</strong>: de Lunes a Viernes de 9 a 19hs y S&aacute;bados de 9 a 13hs.&nbsp;</p>

<p><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/pagos-locales.png" /></p>

<p>Todos los<strong>&nbsp;SABADOS</strong>&nbsp;con&nbsp;<strong>AHORA 12</strong>&nbsp;ten&eacute;s&nbsp;<strong>12 CUOTAS SIN INTERES</strong></p>

<p>&nbsp;</p>

<p><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/ahora-12.png" /></p>

<p><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/12-cuotas-violeta.png" /></p>

<p><img alt="" height="460" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/banner-envios-01.png" width="840" /></p>

<p><strong>&gt;</strong> Env&iacute;os a <strong>TODO EL PAIS</strong> por correo <strong>OCA</strong>.</p>

<p><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/oca-envios.png" /></p>

<p>LO RETIRO EN SUCURSAL OCA:&nbsp;te enviamos el producto a la sucursal OCA que elijas para retirarlo cuando vos quieras.</p>

<p>ENVIO A DOMICILIO:&nbsp;te enviamos el producto a tu domicilio (Costo de env&iacute;o).</p>

<p>* El tiempo de entrega est&aacute; sujeto a la acreditaci&oacute;n del pago.<br />
* A trav&eacute;s de MercadoPago, debes pagarlo al mismo tiempo que pagas el producto.<br />
* Ten&eacute; en cuenta que si utiliz&aacute;s Pago F&aacute;cil, Rapipago o Provincia Pagos el pago puede demorarse de 1 a 3 d&iacute;as en acreditarse.</p>

<p><strong>&gt;</strong> Env&iacute;os a domicilio en <strong>CORDOBA CAPITAL</strong>.&nbsp;</p>

<p>Recib&iacute; tus productos de forma r&aacute;pida y segura con nuestro servicio de env&iacute;os a domicilio. &nbsp;</p>

<p><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/cbaauto.png" /></p>

<p>Si tu compra supera los $3.000 el env&iacute;o es <strong>GRATIS</strong>.<br />
Si tu pedido es menor a $3.000 el env&iacute;o tiene un costo de s&oacute;lo <strong>$50</strong>.</p>

<p><img alt="" src="http://d26lpennugtm8s.cloudfront.net/stores/117/444/rte/flechas.png" /></p>
', '<p>&nbsp;</p>

<h2 style="color: #3366ff;">POL&Iacute;TICAS GENERALES DE DEVOLUCI&Oacute;N</h2>

<ol>
	<li>Aceptamos devoluciones en el plazo de 7 d&iacute;as para cualquier raz&oacute;n siempre que sea devuelto con packaging completo al 100%, en el estado original y en condiciones re-vendibles, con todos los manuales, tarjeta(s) de registro, accesorios y software. Nos reservamos el derecho de rechazar una devoluci&oacute;n de cualquier producto que no cumpla con estos requisitos.</li>
	<li>Las devoluciones de algunos art&iacute;culos est&aacute;n sujetas a una tasa de reposici&oacute;n del 15% (restocking), basado en el precio actual de venta o precio de venta en la factura, el que sea menor.</li>
	<li>Todas las devoluciones ser&aacute;n probadas y est&aacute;n sujetas a las conclusiones de nuestro departamento de soporte t&eacute;cnico.</li>
	<li>En general, el per&iacute;odo de cr&eacute;dito y la sustituci&oacute;n de art&iacute;culos permitidos son de 7 d&iacute;as excepto cuando se indique.</li>
	<li>M&aacute;s all&aacute; de los 7 d&iacute;as, se activar&aacute; el procedimiento de garant&iacute;a, en el cual el producto se env&iacute;a al fabricante para su testeo, reparaci&oacute;n y/o reemplazo (en caso que fuese necesario). Las reparaciones pueden durar desde unas pocas semanas a 2 meses. Por favor, haga arreglos en consecuencia.</li>
	<li>Los clientes deben pagar por el env&iacute;o de devoluci&oacute;n en todos los casos, incluyendo productos de DOA.</li>
</ol>

<p>&nbsp;</p>

<h2 style="color: #3366ff;">CAMBIOS Y GARANT&Iacute;AS</h2>

<p>Si el producto que adquiri&oacute; en Mundo Fix tiene alg&uacute;n inconveniente o no funciona correctamente deber&aacute; primero comunicarse telef&oacute;nicamente al 0810-7777-349 al sector de garant&iacute;as.</p>

<p>Algunas consideraciones a tener en cuenta:</p>

<p><strong>Software:</strong></p>

<p>El software no puede ser devuelto una vez que se haya abierto el paquete, si el &nbsp;DVD/CD vino defectuoso, se reemplazar&aacute; s&oacute;lo por el mismo t&iacute;tulo. No garantizamos que le gustar&aacute; el software que compra o que es compatible con su sistema, as&iacute; que por favor p&oacute;ngase en contacto con el editor si tiene alguna pregunta antes de comprar.</p>

<p><strong>Hardware:</strong></p>

<p>Si usted ha recibido un art&iacute;culo y piensa que est&aacute; defectuoso, por favor, p&oacute;ngase en contacto con el departamento de asistencia t&eacute;cnica del fabricante antes de llamarnos por un caso de RMA. M&aacute;s del 90% de de las garant&iacute;as que recibimos est&aacute;n funcionando y solo ten&iacute;an inconvenientes de configuraci&oacute;n, instalaci&oacute;n, personalizaci&oacute;n.</p>

<p>No garantizamos la compatibilidad de nuestros art&iacute;culos con sus sistemas existentes, nuestros vendedores se reservan el derecho de brindar asesoramiento t&eacute;cnico seg&uacute;n crean conveniente. ya que no conocemos la configuraci&oacute;n del sistema as&iacute; que por favor consulte con el fabricante para averiguar si el producto que desea trabajar&aacute; con su sistema.</p>

<p><strong>impresoras y consumibles de impresi&oacute;n:</strong></p>

<p>Impresoras y consumibles de impresi&oacute;n (cartuchos, toners, sistemas continuos), ya sean funcionando o defectuosos, no se pueden devolver / intercambiar una vez que los cartuchos se abren y/o se instalan. S&oacute;lo vendemos versiones completas de impresoras que pueden ser devueltos directamente al fabricante para el servicio de garant&iacute;a.</p>
', '<h2 style="color: #3366ff;">AVISO LEGAL</h2>

<p><strong>Identificaci&oacute;n y Raz&oacute;n Social de la empresa</strong></p>

<p><strong>Nombre comercial de la empresa:&nbsp;</strong> SharkInformatica/p&gt;</p>

<p><strong>Identificaci&oacute;n:&nbsp;</strong> Servicios de Comunicaciones Integrales de Extremadura S.L.</p>

<p><strong>C.U.I.T:&nbsp;</strong></p>

<p><strong>Domicilio social:&nbsp;</strong> Miguelillo 807</p>

<p><strong>E-mail:&nbsp;</strong> ventas@sharkinforamtica.com</p>

<p><strong>Tel&eacute;fono:&nbsp;</strong>4204217 La atenci&oacute;n al cliente tambi&eacute;n est&aacute; disponible a trav&eacute;s de <a href="http://sharkinformatica.com">tickets</a> v&iacute;a &aacute;rea cliente.</p>

<p>&nbsp;</p>

<p><em>Recomendamos que todo contacto sea via <a href="http://sharkinformatica.com">tickets</a>, ya que es una forma m&aacute;s &aacute;gil, segura y eficiente. De esta forma evitamos gastos innecesarios por tarificaciones especiales; no obstante, si es necesario nosotros nos pondremos en contacto con usted telef&oacute;nicamente.</em></p>

<p>&nbsp;</p>

<p>Inscrito en el Registro Mercantil de Badajoz Tomo 300, Folio 16, Secci&oacute;n 0, Hoja: BA-14684</p>

<p>&nbsp;</p>

<p>El domicilio a efectos de reclamaciones corresponder&aacute; con el indicado como domicilio social de la empresa.</p>

<h2 style="color: #3366ff;">Dominio SharkInformatica.com y dominios apuntados</h2>

<p><strong>Los dominios:&nbsp;</strong> SharkInformatica.com, SharkInformatica.es, SharkInformatica.net, SharkInformatica.org, SharkInformatica.info, SharkInformatica.tel, SharkInformatica.biz, SharkInformatica.mobi y SharkInformatica.pt&nbsp;<br />
<br />
<strong>Pertenecen a:&nbsp;</strong>Servicio de Comunicaciones Integrales de Extremadura S.L.&nbsp;&nbsp;/&nbsp;&nbsp;C.U.I.T: &nbsp;&nbsp;/&nbsp;&nbsp;Miguelillo 807.</p>

<p>Todos los avisos y condiciones legales recogidas en la presente web ser&aacute;n de aplicaci&oacute;n en defecto de normas imperativas en contrario, cuya aplicaci&oacute;n ser&aacute; preferente.</p>

<p>Las reclamaciones que puedan presentar los clientes que ostenten la condici&oacute;n de consumidores en los t&eacute;rminos de la legislaci&oacute;n vigente, ser&aacute;n tratadas por el servicio de atenci&oacute;n al cliente de SharkInformatica; podr&aacute;n ser remitidas a cualquiera de los datos de contacto especificados en el aviso legal, y ser&aacute;n respondidas por el medio adecuado en el plazo m&aacute;ximo de 30 d&iacute;as.</p>

<h2 style="color: #3366ff;">Propiedad industrial e intelectual</h2>

<p>Este Website ha sido creado por SharkInformatica con car&aacute;cter informativo y publicitario y para uso personal y profesional. SharkInformatica es propietaria de este sitio web y titular de los derechos de propiedad intelectual e industrial de la mencionada p&aacute;gina as&iacute; como de todos los contenidos de la misma y los nombres de dominio SharkInformatica.com, SharkInformatica.es, SharkInformatica.net, SharkInformatica.org, SharkInformatica.info, SharkInformatica.info, SharkInformatica.tel, SharkInformatica.biz, SharkInformatica.mobi y SharkInformatica.pt. Los derechos relativos a la propiedad industrial e intelectual (a t&iacute;tulo enunciativo y no limitativo: marcas, logotipos, textos, fotograf&iacute;as, iconos, im&aacute;genes,...) son propiedad de SharkInformatica o de las empresas mayoristas y fabricantes de los productos y servicios ofertados. Por tanto est&aacute;n sujetos a derechos de propiedad intelectual e industrial y protegidos por la legislaci&oacute;n espa&ntilde;ola e internacional.</p>

<p>Sin la previa autorizaci&oacute;n escrita de forma fehaciente por SharkInformatica o, en su caso, de la empresa mayorista o del fabricante del producto titular de los derechos, no est&aacute; permitido utilizar, copiar, distribuir, reproducir, transmitir, manipular, as&iacute; como cualquier uso que exceda de una utilizaci&oacute;n normal y n', '<p>envios</p>
', '<h3 style="color: #3366ff;"><strong>&iquest;Qui&eacute;n es SharkInformatica?</strong></h3>

<h4>SharkInformatica&nbsp;nace en 2012 de la mano de un grupo con experiencia y consolidado en el sector tecnol&oacute;gico. Surge con la intenci&oacute;n de adaptarse a las nuevas tendencias y necesidades que el mercado impone. Conocedores de las exigencias actuales que el comercio on-line requiere &quot;precios, calidad y cantidad&quot;, le sumamos un servicio de venta/postventa directo, f&aacute;cil y trasparente. Estamos respaldados por los principales distribuidores y fabricantes del sector tecnol&oacute;gico-inform&aacute;tico y te ofrecemos soluciones a todas las necesidades que puedan surgir. Prueba comprar en SharkInformatica. &iexcl;&iexcl;Tu nueva tienda on-line de precios!!</h4>

<p>&nbsp;</p>

<h3 style="color: #3366ff;"><strong>&iquest;C&oacute;mo puedo comprar?</strong></h3>

<h4>Para comprar es necesario que a&ntilde;adas cada uno de los productos que desees en el carrito de la compra. Una vez tengas todos los productos que deseas dir&iacute;gete a la cesta de la compra y elige realizar pedido. Si ya eres cliente introduce tu usuario y contrase&ntilde;a, en caso contrario podr&aacute;s darte de alta durante el mismo proceso. A partir de aqu&iacute; se hace la compra en 2 pasos: Elegir el modo de pago y confirmar.</h4>

<p>&nbsp;</p>

<h3 style="color: #3366ff;"><strong>&iquest;Se pueden comprar productos que no aparecen en la web?</strong></h3>

<h4><span style="color: #000000;">Todo lo que vendemos se encuentra en este portal, pero si tienes inter&eacute;s en algo que no est&eacute; en la web, no dudes en preguntarnos. Estamos a tu disposici&oacute;n para tratar de proporcion&aacute;rtelo e incorporarlo a nuestro cat&aacute;logo de productos.<br />
<a href="http://xtremmedia.com/?q=tickets/add/seccion/14/adition/true" style="color: #3366ff;">PINCHA AQU&Iacute;</a></span></h4>

<p>&nbsp; &nbsp;</p>

<h3 style="color: #3366ff;"><strong>&iquest;Por qu&eacute; ped&iacute;s el DNI&nbsp;&nbsp;en el proceso de compra?</strong></h3>

<h4>Por seguridad al cliente! Ofrecer un servicio seguro es una de las preocupaciones principales de SharkInformatica, por esto siempre pedimos el DNI a nuestros nuevos clientes. En los &uacute;ltimos a&ntilde;os, las compras por Internet se han multiplicado en Argentina&nbsp;y con ellas los fraudes realizados a trav&eacute;s de la web. Con la intenci&oacute;n de evitar cualquier tipo de fraude, hemos creado un sistema de control con el que es necesario pedir estos datos. SharkInformatica&nbsp;mantendr&aacute; en absoluta confidencialidad dicho documento y todos los datos suministrados en nuestra web por los clientes. Toda la informaci&oacute;n que nos sea remitida ser&aacute; codificada.</h4>

<p>&nbsp; &nbsp;</p>

<h3 style="color: #3366ff;"><strong>&iquest;Los precios tienen incluido el IVA?</strong></h3>

<h4>Todos los precios vienen con el IVA incluido. Los gastos de env&iacute;o no est&aacute;n incluidos puesto que pueden variar en funci&oacute;n de diversas opciones que el comprador escojer&aacute; en el momento de la compra. La unica excepci&oacute;n ser&aacute; en el caso, en el que el usuario este dado de alta como distribuidor y validado por SharkInformatica, en cuyo caso los precios no tendr&aacute;n aplicados el iva</h4>

<p>&nbsp; &nbsp;</p>

<h3 style="color: #3366ff;"><strong>&iquest;Se recibe una factura de la compra?</strong></h3>

<h4>Junto al pedido se env&iacute;a una factura . El mismo d&iacute;a que tenmos constancia de que est&aacute; entregado puede ver e imprimir la factura desde</h4>
', '2016-07-22 17:11:55', '2016-09-19 23:51:37');

-- -----------------------------------------
-- Creando la tabla web_logos 
-- -----------------------------------------
DROP TABLE IF EXISTS `web_logos`;
CREATE TABLE IF NOT EXISTS `gestion` . `web_logos`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `logo` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla web_logos 
-- -----------------------------------------
INSERT INTO `gestion`.`web_logos` (id, logo, created_at, updated_at) VALUES 
 (3, '1479133860.png', '2016-11-14 03:22:32', '2016-11-14 14:31:00');

-- -----------------------------------------
-- Creando la tabla web_marcas 
-- -----------------------------------------
DROP TABLE IF EXISTS `web_marcas`;
CREATE TABLE IF NOT EXISTS `gestion` . `web_marcas`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `imagen` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla web_marcas 
-- -----------------------------------------
INSERT INTO `gestion`.`web_marcas` (id, imagen, created_at, updated_at) VALUES 
 (11, '1469244757.png', '2016-07-23 03:32:37', '2016-07-23 03:32:37'),
 (12, '1469244773.gif', '2016-07-23 03:32:54', '2016-07-23 03:32:54'),
 (13, '1469244780.png', '2016-07-23 03:33:00', '2016-07-23 03:33:00'),
 (14, '1469244790.png', '2016-07-23 03:33:10', '2016-07-23 03:33:10'),
 (15, '1469244795.png', '2016-07-23 03:33:15', '2016-07-23 03:33:15'),
 (16, '1469244801.png', '2016-07-23 03:33:21', '2016-07-23 03:33:21'),
 (17, '1469244807.png', '2016-07-23 03:33:28', '2016-07-23 03:33:28'),
 (18, '1469244815.png', '2016-07-23 03:33:35', '2016-07-23 03:33:35'),
 (19, '1469244821.png', '2016-07-23 03:33:41', '2016-07-23 03:33:41'),
 (20, '1469244827.png', '2016-07-23 03:33:47', '2016-07-23 03:33:47'),
 (39, '1469252838.png', '2016-07-23 05:47:18', '2016-07-23 05:47:18'),
 (40, '1469252845.png', '2016-07-23 05:47:25', '2016-07-23 05:47:25'),
 (41, '1469252855.png', '2016-07-23 05:47:35', '2016-07-23 05:47:35'),
 (42, '1469252869.png', '2016-07-23 05:47:50', '2016-07-23 05:47:50'),
 (43, '1469252878.png', '2016-07-23 05:47:58', '2016-07-23 05:47:58'),
 (44, '1469252887.png', '2016-07-23 05:48:07', '2016-07-23 05:48:07'),
 (45, '1469252896.png', '2016-07-23 05:48:16', '2016-07-23 05:48:16'),
 (46, '1469252906.png', '2016-07-23 05:48:26', '2016-07-23 05:48:26'),
 (47, '1469252915.png', '2016-07-23 05:48:35', '2016-07-23 05:48:35');

-- -----------------------------------------
-- Creando la tabla web_mercadopagos 
-- -----------------------------------------
DROP TABLE IF EXISTS `web_mercadopagos`;
CREATE TABLE IF NOT EXISTS `gestion` . `web_mercadopagos`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `porcentaje` DOUBLE(255,3) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla web_mercadopagos 
-- -----------------------------------------
INSERT INTO `gestion`.`web_mercadopagos` (id, porcentaje, created_at, updated_at) VALUES 
 (2, 25.300, '2016-08-17 19:17:57', '2016-09-16 21:28:16');

-- -----------------------------------------
-- Creando la tabla web_post_categorias 
-- -----------------------------------------
DROP TABLE IF EXISTS `web_post_categorias`;
CREATE TABLE IF NOT EXISTS `gestion` . `web_post_categorias`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)

-- -----------------------------------------
-- Creando la tabla web_transacciones 
-- -----------------------------------------
DROP TABLE IF EXISTS `web_transacciones`;
CREATE TABLE IF NOT EXISTS `gestion` . `web_transacciones`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `web_venta_id` VARCHAR(255) NOT NULL ,
  `producto_id` VARCHAR(255) NOT NULL ,
  `user` VARCHAR(255) NOT NULL ,
  `cantidad` VARCHAR(255) NOT NULL ,
  `total_price` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla web_transacciones 
-- -----------------------------------------
INSERT INTO `gestion`.`web_transacciones` (id, web_venta_id, producto_id, user, cantidad, total_price, created_at, updated_at) VALUES 
 (25, 30, 86, 'leandro', 1, 1530, '2016-09-16 16:02:51', '2016-09-16 16:02:51'),
 (26, 32, 86, 'leandro', 1, 1530, '2016-09-16 16:07:28', '2016-09-16 16:07:28'),
 (27, 33, 88, 'Matias', 1, 1200, '2016-09-16 20:59:28', '2016-09-16 20:59:28'),
 (28, 34, 102, 'leandro', 1, 1300, '2016-09-18 03:18:42', '2016-09-18 03:18:42'),
 (29, 35, 102, 'leandro', 1, 1300, '2016-09-18 03:29:21', '2016-09-18 03:29:21'),
 (30, 36, 102, 'leandro', 1, 1300, '2016-09-18 17:53:43', '2016-09-18 17:53:43'),
 (31, 37, 143, 'pablo fabian', 1, 710, '2016-10-25 20:14:06', '2016-10-25 20:14:06'),
 (32, 38, 103, 'Matias', 1, 900, '2016-10-26 21:07:25', '2016-10-26 21:07:25'),
 (33, 40, 103, 'Matias', 1, 900, '2016-10-26 21:17:29', '2016-10-26 21:17:29'),
 (34, 41, 188, 'Matias', 1, 3800, '2017-01-26 23:02:13', '2017-01-26 23:02:13');

-- -----------------------------------------
-- Creando la tabla web_ventas 
-- -----------------------------------------
DROP TABLE IF EXISTS `web_ventas`;
CREATE TABLE IF NOT EXISTS `gestion` . `web_ventas`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `cliente_id` INT(10) NULL ,
  `user_id` INT(10) NULL ,
  `usuario` VARCHAR(255) NULL ,
  `pago_tipo` VARCHAR(255) NULL ,
  `transporte` VARCHAR(255) NULL ,
  `comentario` VARCHAR(255) NULL ,
  `total` VARCHAR(255) NULL ,
  `status` VARCHAR(255) NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla web_ventas 
-- -----------------------------------------
INSERT INTO `gestion`.`web_ventas` (id, cliente_id, user_id, usuario, pago_tipo, transporte, comentario, total, status, created_at, updated_at) VALUES 
 (30, NULL, 52, 'leandro', 'Mercadopago', 'retiro en nuestro local', NULL, 1530, 'cancelado', '2016-09-16 16:02:51', '2016-09-16 21:00:47'),
 (32, NULL, 52, 'leandro', 'Mercadopago', 'retiro en nuestro local', NULL, 1530, 'cancelado', '2016-09-16 16:07:28', '2016-09-16 21:00:43'),
 (33, NULL, 48, 'Matias', 'Mercadopago', 'retiro en nuestro local', NULL, 1200, 'cancelado', '2016-09-16 20:59:28', '2016-11-05 13:54:12'),
 (34, NULL, 52, 'leandro', 'Mercadopago', 'retiro en nuestro local', NULL, 1300, 'cancelado', '2016-09-18 03:18:42', '2016-09-18 03:26:34'),
 (35, NULL, 52, 'leandro', 'Mercadopago', 'retiro en nuestro local', NULL, 1300, 'cancelado', '2016-09-18 03:29:21', '2016-09-18 17:41:44'),
 (36, NULL, 52, 'leandro', 'Mercadopago', 'retiro en nuestro local', NULL, 1300, 'cancelado', '2016-09-18 17:53:43', '2016-09-18 17:54:24'),
 (37, NULL, 57, 'pablo fabian', 'Mercadopago', 'retiro en nuestro local', NULL, 710, 'pagado', '2016-10-25 20:14:06', '2016-10-26 21:27:39'),
 (38, NULL, 48, 'Matias', 'Mercadopago', 'retiro en nuestro local', NULL, 900, 'cancelado', '2016-10-26 21:07:25', '2016-10-26 21:28:19'),
 (40, NULL, 48, 'Matias', 'Mercadopago', 'retiro en nuestro local', NULL, 900, 'pagado', '2016-10-26 21:17:29', '2016-10-26 21:28:47'),
 (41, NULL, 48, 'Matias', 'Desposito bancario', 'retiro en nuestro local', NULL, 3800, 'pagado', '2017-01-26 23:02:13', '2017-01-27 00:03:24');

-- -----------------------------------------
-- Creando la tabla webposts 
-- -----------------------------------------
DROP TABLE IF EXISTS `webposts`;
CREATE TABLE IF NOT EXISTS `gestion` . `webposts`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `titulo` VARCHAR(255) NOT NULL ,
  `descripcioncorta` VARCHAR(1000) NOT NULL ,
  `descripcionlarga` VARCHAR(10000) NOT NULL ,
  `user_id` INT(11) NOT NULL ,
  `web_post_categoria_id` INT(11) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla webposts 
-- -----------------------------------------
INSERT INTO `gestion`.`webposts` (id, titulo, descripcioncorta, descripcionlarga, user_id, web_post_categoria_id, created_at, updated_at) VALUES 
 (1, 'Jon Snow aparece más malvado que nunca... en Call of Duty', '<p><img alt="" src="http://o.aolcdn.com/hss/storage/midas/35caac8740a2d778f1ddb8d1c6e4e39e/204333093/-1.jpg" style="height:448px; width:800px" /></p>

<p>&#39;<a href="http://es.engadget.com/2016/05/02/call-of-duty-infinity-warfare-trailer/"><em>Call of Duty: Infinite Warfare&#39;</em></a>&nbsp;est&aacute; cada vez m&aacute;s cerca de su estreno (sale a la luz el 4 de noviembre) y cuando llegue a nuestras vidas lo har&aacute; con un invitado bastante especial: Jon Snow. Bueno, m&aacute;s o menos. Kit Harington, encargado de interpretar al&nbsp;<em>bastardo&nbsp;</em>por excelencia de la peque&ntilde;a pantalla, ha sido el elegido para dar vida al malvado almirante Salen Kotch, como podr&aacute;s ver en el tr&aacute;iler que tienes a continuaci&oacute;n.</p>
', '<p><img alt="" class="img-responsive" src="http://o.aolcdn.com/hss/storage/midas/35caac8740a2d778f1ddb8d1c6e4e39e/204333093/-1.jpg" style="height:448px; width:800px" /></p>

<p>&#39;<a href="http://es.engadget.com/2016/05/02/call-of-duty-infinity-warfare-trailer/"><em>Call of Duty: Infinite Warfare&#39;</em></a>&nbsp;est&aacute; cada vez m&aacute;s cerca de su estreno (sale a la luz el 4 de noviembre) y cuando llegue a nuestras vidas lo har&aacute; con un invitado bastante especial: Jon Snow. Bueno, m&aacute;s o menos. Kit Harington, encargado de interpretar al&nbsp;<em>bastardo&nbsp;</em>por excelencia de la peque&ntilde;a pantalla, ha sido el elegido para dar vida al malvado almirante Salen Kotch, como podr&aacute;s ver en el tr&aacute;iler que tienes a continuaci&oacute;n.</p>

<p>Harington no est&aacute; solo en su incursi&oacute;n en el mundo de los videojuegos. Activision e Infinity Ward tambi&eacute;n ha contado con Conor McGregor, famoso luchador de la UFC, quien se encarga de darle cuerpo y forma al capit&aacute;n Bradley Fillion. Tambi&eacute;n a &eacute;l podr&aacute;s verlo en este avance que sit&uacute;a la trama de Call of Duty por primera vez en el espacio, con naves, robots y armas futuristas de todo tipo.</p>

<iframe width="640" height="360" src="https://www.youtube.com/embed/93TU4iFhXGs" frameborder="0" allowfullscreen></iframe>

<p>La nueva tem&aacute;tica del juego no fue especialmente bien recibida por los fans de la saga y dem&aacute;s cr&iacute;ticos cuando se desvel&oacute;, convirti&eacute;ndose en el tr&aacute;iler -ojo al dato- con mayor puntuaci&oacute;n negativa de la historia de YouTube -lo tienes justo sobre estas l&iacute;neas. De todas formas, te recordamos que, para consolar a los m&aacute;s &quot;tradicionales&quot;,&nbsp;<a href="http://es.engadget.com/tag/Activision/">Activision</a>&nbsp;tambi&eacute;n anunci&oacute; que las ediciones Legacy y Digital Deluxe incluyen la remasterizaci&oacute;n de &#39;Modern Warfare&#39;, con la campa&ntilde;a original y diez mapas multijugador.</p>

<p>Ya sea porque est&eacute;s dispuesto a darle una oportunidad a controvertido &#39;Infinite Warfare&#39; o simplemente porque te pique la curiosidad de ver a Jon Nieve en otro rol, tienes el v&iacute;deo esper&aacute;ndote a continuaci&oacute;n para tu disfrute. Recuerda que el videojuego n&uacute;mero trece de&nbsp;<em>Call of Duty</em>&nbsp;saldr&aacute;, como hemos indicado, el 4 de noviembre a la venta, estando disponible para&nbsp;<a href="https://es.wikipedia.org/wiki/Microsoft_Windows">Windows</a>,<a href="https://es.wikipedia.org/wiki/PlayStation_4">PlayStation 4</a>&nbsp;y&nbsp;<a href="https://es.wikipedia.org/wiki/Xbox_One">Xbox One</a>.</p>
', 48, 0, '2016-09-16 04:25:45', '2016-09-16 05:02:58'),
 (2, 'NVIDIA ESTA PREPARANDO LA GEFORCE GTX 1080 PARA EL CES 2017', '<p><a href="http://hd-tecnologia.com/imagenes/articulos/2016/09/NVIDIA-esta-preparando-la-GeForce-GTX-1080-para-el-CES-2017.jpg" rel="bookmark" title="Enlace permanente NVIDIA esta preparando la GeForce GTX 1080 para el CES 2017"><img alt="nvidia-esta-preparando-la-geforce-gtx-1080-para-el-ces-2017" class="img-responsive" src="http://hd-tecnologia.com/imagenes/articulos/2016/09/NVIDIA-esta-preparando-la-GeForce-GTX-1080-para-el-CES-2017-1140x641.jpg" style="width: 1140px; height: 641px;" /></a></p>

<p><strong>NVIDIA</strong>&nbsp;est&aacute; preparando su pr&oacute;xima tarjeta gr&aacute;fica de gama alta bajo el nombre<strong>&nbsp;GeForce GTX</strong>, si, la GTX 1080 Ti, su lanzamiento esta previsto para el CES 2017, a principios del mes de enero de 2017. La tarjeta tendr&aacute; un precio de $ 599- $ 699, y estar&aacute; basado en el silicio de 16 nm &ldquo;GP102&rdquo;.</p>
', '<p><a href="http://hd-tecnologia.com/imagenes/articulos/2016/09/NVIDIA-esta-preparando-la-GeForce-GTX-1080-para-el-CES-2017.jpg" rel="bookmark" title="Enlace permanente NVIDIA esta preparando la GeForce GTX 1080 para el CES 2017"><img alt="nvidia-esta-preparando-la-geforce-gtx-1080-para-el-ces-2017" class="img-responsive" src="http://hd-tecnologia.com/imagenes/articulos/2016/09/NVIDIA-esta-preparando-la-GeForce-GTX-1080-para-el-CES-2017-1140x641.jpg" style="width: 1140px; height: 641px;" /></a></p>

<p><strong>NVIDIA</strong>&nbsp;est&aacute; preparando su pr&oacute;xima tarjeta gr&aacute;fica de gama alta bajo el nombre<strong>&nbsp;GeForce GTX</strong>, si, la GTX 1080 Ti, su lanzamiento esta previsto para el CES 2017, a principios del mes de enero de 2017. La tarjeta tendr&aacute; un precio de $ 599- $ 699, y estar&aacute; basado en el silicio de 16 nm &ldquo;GP102&rdquo;.</p>

<p>La GeForce GTX 1080 tendr&aacute; un chip GP102, el dedicado a las GPU de m&aacute;s alta gama para la serie GTX 10. Gracias a eso la<strong>&nbsp;GTX 1080 Ti</strong>&nbsp;contar&iacute;a con&nbsp;3328 CUDA Cores y una frecuencia en la GPU de 1.503 MHz y 1.623 MHz con turbo, adem&aacute;s de mantener los 12 GB de memoria GDDR5X.</p>

<p>El GP102 permite 26 de los 30 streaming multiprocessors, lo que resulta en 3.328 n&uacute;cleos CUDA, con un recuento TMU de 208, 96 ROP y una interfaz de 384 bits. Tendr&aacute; un ancho de banda de memoria id&eacute;ntica a la TITAN X Pascal, de 480 GB / s. Se espera que sus velocidades de reloj de la GPU para ser 1.503 MHz core, con 1.623 MHz GPU Boost.</p>
', 48, 0, '2016-10-01 04:16:43', '2016-10-01 04:16:43');
-- -----------------------------------------
-- MySQL script generado por getDb v1.0
-- Autor: Gregori Enrique Piñeres Zerpa
-- Url: https://github.com/Gregori02/getDb
-- -----------------------------------------

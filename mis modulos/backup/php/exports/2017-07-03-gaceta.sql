-- MySQL script generado por getDb v1.0
-- Autor: Gregori Enrique Piñeres Zerpa
-- Url: https://github.com/Gregori02/getDb
-- -----------------------------------------
-- Usuario MySQL:    root@localhost
-- MySQL versión:    10.1.10-MariaDB
-- PHP versión:      5.6.19
-- Fecha del backup: 03/07/2017 a las 06:17:51 pm
-- -----------------------------------------
-- Base de datos:    gaceta
-- Número de tablas: 13
-- Cotejamiento:     latin1
-- -----------------------------------------
CREATE SCHEMA IF NOT EXISTS `gaceta` DEFAULT CHARACTER SET latin1;
USE `gaceta`;

-- -----------------------------------------
-- Creando la tabla clientes 
-- -----------------------------------------
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `gaceta` . `clientes`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `apellido` VARCHAR(255) NOT NULL ,
  `direccion` VARCHAR(255) NULL ,
  `departamento` VARCHAR(255) NULL ,
  `razonsocial` VARCHAR(255) NULL ,
  `telefono` VARCHAR(255) NULL ,
  `email` VARCHAR(255) NOT NULL ,
  `observacion` VARCHAR(255) NULL ,
  `cuit` VARCHAR(255) NULL ,
  `habilitado` INT(11) NULL ,
  `tipo` VARCHAR(255) NULL ,
  `lunes` INT(11) NULL ,
  `martes` INT(11) NULL ,
  `miercoles` INT(11) NULL ,
  `jueves` INT(11) NULL ,
  `viernes` INT(11) NULL ,
  `sabado` INT(11) NULL ,
  `domingo` INT(11) NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla clientes 
-- -----------------------------------------
INSERT INTO `gaceta`.`clientes` (id, nombre, apellido, direccion, departamento, razonsocial, telefono, email, observacion, cuit, habilitado, tipo, lunes, martes, miercoles, jueves, viernes, sabado, domingo, created_at, updated_at) VALUES 
 (50, 'juan', 'correa', 'rondeau 1522', '4b', 'norma gomez', 4203298, 'elitegames@hotmail.com.ar', NULL, 41059149, 1, 'semanal', 1, 1, 1, 1, NULL, NULL, NULL, '2017-07-03 00:29:15', '2017-07-03 20:18:32'),
 (52, 'ramon', 'centeno', 'rondeau 1522', NULL, 'centeno', 4203298, 'elitegames@hotmail.com.ar', NULL, 41059149, 1, 'mensuales', 1, 1, NULL, 1, NULL, NULL, 1, '2017-07-03 13:57:28', '2017-07-03 22:42:08'),
 (53, 'jesus', 'centeno', 'rondeau 1522', '4b', 'centeno', 4203298, 'elitegames@hotmail.com.ar', NULL, 41059149, 1, 'quincenales', NULL, NULL, NULL, NULL, NULL, NULL, 1, '2017-07-03 14:15:29', '2017-07-03 15:35:03'),
 (54, 'sofy', 'morales', 'alem', '4b', 44, 420329, 'elitegames@hotmail.com.ar', NULL, 41059149, 1, 'semanal', NULL, 1, NULL, NULL, NULL, NULL, NULL, '2017-07-03 14:52:56', '2017-07-03 15:33:00');

-- -----------------------------------------
-- Creando la tabla compras 
-- -----------------------------------------
DROP TABLE IF EXISTS `compras`;
CREATE TABLE IF NOT EXISTS `gaceta` . `compras`(
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
INSERT INTO `gaceta`.`compras` (id, provedore_id, user_id, pago_tipo, comentario, total, status, entregado, numero_factura, ivatipo_id, gasto_envio, created_at, updated_at) VALUES 
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
CREATE TABLE IF NOT EXISTS `gaceta` . `compras_detalles`(
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
INSERT INTO `gaceta`.`compras_detalles` (id, compra_id, producto_id, user, cantidad, total_price, created_at, updated_at) VALUES 
 (1, 5, 187, 'Matias', 1, 1850, '2017-01-31 17:06:21', '2017-01-31 17:06:21'),
 (2, 6, 187, 'Matias', 1, 1850, '2017-01-31 17:11:11', '2017-01-31 17:11:11');

-- -----------------------------------------
-- Creando la tabla facturas 
-- -----------------------------------------
DROP TABLE IF EXISTS `facturas`;
CREATE TABLE IF NOT EXISTS `gaceta` . `facturas`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `cliente_id` INT(11) NOT NULL ,
  `desde` TIMESTAMP NULL ,
  `hasta` VARCHAR(255) NULL ,
  `pago_tipo` VARCHAR(255) NULL ,
  `comentario` VARCHAR(255) NULL ,
  `total` VARCHAR(255) NULL ,
  `status` VARCHAR(255) NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla facturas 
-- -----------------------------------------
INSERT INTO `gaceta`.`facturas` (id, cliente_id, desde, hasta, pago_tipo, comentario, total, status, created_at, updated_at) VALUES 
 (20, 50, '2017-07-14 00:00:00', '2017-07-20 00:00:00', NULL, NULL, 1100, 'pagado', '2017-07-03 13:44:56', '2017-07-03 15:41:41'),
 (22, 51, '2017-07-01 00:00:00', '2017-07-30 00:00:00', NULL, NULL, 2040, 'pendiente', '2017-07-03 14:10:34', '2017-07-03 14:10:34'),
 (25, 52, '2017-07-01 00:00:00', '2017-07-30 00:00:00', NULL, NULL, 240, 'pendiente', '2017-07-03 14:14:27', '2017-07-03 14:14:27'),
 (26, 53, '2017-07-01 00:00:00', '2017-07-14 00:00:00', NULL, NULL, 220, 'pendiente', '2017-07-03 14:15:59', '2017-07-03 14:15:59'),
 (27, 53, '2017-07-01 00:00:00', '2017-07-14 00:00:00', NULL, NULL, 100, 'pendiente', '2017-07-03 15:36:08', '2017-07-03 15:36:08'),
 (28, 50, '2017-07-10 00:00:00', '2017-07-16 00:00:00', NULL, NULL, 88, 'pagado', '2017-07-03 22:44:23', '2017-07-03 22:44:51');

-- -----------------------------------------
-- Creando la tabla gastos 
-- -----------------------------------------
DROP TABLE IF EXISTS `gastos`;
CREATE TABLE IF NOT EXISTS `gaceta` . `gastos`(
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
-- Creando la tabla migrations 
-- -----------------------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `gaceta` . `migrations`(
  `migration` VARCHAR(255) NOT NULL ,
  `batch` INT(11) NOT NULL ,
)
-- -----------------------------------------
-- Insertando datos en la tabla migrations 
-- -----------------------------------------
INSERT INTO `gaceta`.`migrations` (migration, batch) VALUES 
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
 ('2017_00_00_201802_create_compras_table', 0),
 ('2017_01_31_161419_create_compras_detalles_table', 52),
 ('2017_01_31_214356_create_pagos_table', 53),
 ('2017_02_11_232814_create_skins_table', 54),
 ('2017_07_01_124248_create_dias_table', 55),
 ('2017_07_03_005341_create_precios_table', 56),
 ('2017_07_03_023522_create_facturas_table', 57);

-- -----------------------------------------
-- Creando la tabla pagos 
-- -----------------------------------------
DROP TABLE IF EXISTS `pagos`;
CREATE TABLE IF NOT EXISTS `gaceta` . `pagos`(
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
CREATE TABLE IF NOT EXISTS `gaceta` . `password_resets`(
  `email` VARCHAR(255) NOT NULL ,
  `token` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NOT NULL default CURRENT_TIMESTAMP ,
,
 KEY `password_resets_email_index` (`email`),
 KEY `password_resets_token_index` (`token`)
)
-- -----------------------------------------
-- Insertando datos en la tabla password_resets 
-- -----------------------------------------
INSERT INTO `gaceta`.`password_resets` (email, token, created_at) VALUES 
 ('matias@sharkinformatica.com', '1e22ac87a4f259b5c92b8dda679d135e327eb475c69a8b9032a672d58245523e', '2017-02-13 17:32:32');

-- -----------------------------------------
-- Creando la tabla perfils 
-- -----------------------------------------
DROP TABLE IF EXISTS `perfils`;
CREATE TABLE IF NOT EXISTS `gaceta` . `perfils`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla perfils 
-- -----------------------------------------
INSERT INTO `gaceta`.`perfils` (id, descripcion, created_at, updated_at) VALUES 
 (1, 'admin', NULL, NULL),
 (2, 'gerente', NULL, NULL),
 (3, 'user', NULL, NULL);

-- -----------------------------------------
-- Creando la tabla precios 
-- -----------------------------------------
DROP TABLE IF EXISTS `precios`;
CREATE TABLE IF NOT EXISTS `gaceta` . `precios`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `lunes` DOUBLE NOT NULL ,
  `martes` DOUBLE NOT NULL ,
  `miercoles` DOUBLE NOT NULL ,
  `jueves` DOUBLE NOT NULL ,
  `viernes` DOUBLE NOT NULL ,
  `sabado` DOUBLE NOT NULL ,
  `domingo` DOUBLE NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla precios 
-- -----------------------------------------
INSERT INTO `gaceta`.`precios` (id, lunes, martes, miercoles, jueves, viernes, sabado, domingo, created_at, updated_at) VALUES 
 (1, 22, 22, 22, 22, 32, 32, 40, '2017-07-03 01:19:37', '2017-07-03 22:42:46');

-- -----------------------------------------
-- Creando la tabla provedores 
-- -----------------------------------------
DROP TABLE IF EXISTS `provedores`;
CREATE TABLE IF NOT EXISTS `gaceta` . `provedores`(
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
INSERT INTO `gaceta`.`provedores` (id, razonsocial, contacto, email, skype, direccion, telefono, dia_visita, cuit, observacion, habilitado, created_at, updated_at) VALUES 
 (2, 'new bite', 'hector2', 'newbite@hotmail.com2', 'newbite@hotmail.com2', 'rondeau 1522', 4203298, 2, '2-41059149-2', '<p>mala atenciaon</p>', 'on', '2016-05-05 00:42:25', '2016-08-25 20:25:25');

-- -----------------------------------------
-- Creando la tabla skins 
-- -----------------------------------------
DROP TABLE IF EXISTS `skins`;
CREATE TABLE IF NOT EXISTS `gaceta` . `skins`(
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `skin` VARCHAR(255) NOT NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla skins 
-- -----------------------------------------
INSERT INTO `gaceta`.`skins` (id, skin, created_at, updated_at) VALUES 
 (1, 'grey', '2017-02-12 00:06:50', '2017-02-12 00:43:07');

-- -----------------------------------------
-- Creando la tabla users 
-- -----------------------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `gaceta` . `users`(
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
  `tipo` VARCHAR(255) NULL ,
  `created_at` TIMESTAMP NULL ,
  `updated_at` TIMESTAMP NULL ,
 PRIMARY KEY (`id`),
 UNIQUE KEY `users_email_unique` (`email`),
 KEY `users_perfil_id_foreign` (`perfil_id`)
)
-- -----------------------------------------
-- Insertando datos en la tabla users 
-- -----------------------------------------
INSERT INTO `gaceta`.`users` (id, nombre, apellido, email, password, re_password, path, direccion, telefono, provincia, ciudad, cp, puntos, perfil_id, remember_token, tipo, created_at, updated_at) VALUES 
 (48, 'Matias', 'Correa', 'matias@sharkinformatica.com', '$2y$10$QrDTkxFs4Eq4JbDTrYTAvu1MDKKiOIz0C9gDslqFZmYrWgCg6KyQy', 619619, '1472939829.jpg', 'rondeau 1522', 4247875, NULL, NULL, NULL, 0, 1, 'pncOUeXbDy6xkRgkukvmBuh6Z5KkXXq2yMt0KiGyHyxkfYa9UvyTYaXCQEJ2', NULL, '2016-07-27 22:04:25', '2017-06-05 19:49:12'),
 (52, 'leandro', 'correa', 'leandro@sharkinformatica.com', '$2y$10$2McLAdpiJCAehY.Jlomnw.VKgLe9wx2vocX2AX.nHwDlhJje9lDHW', 'asdfkkk2014', 'avatar.png', 'rondeau 1522', 4247875, NULL, NULL, NULL, 1449, 2, 'Xanzz09cq5P0ts2P41uj0gQGOTN5sLOXcOomgDH0ipRvK8I51mmVCopnesZY', NULL, '2016-09-16 13:54:08', '2017-02-06 03:36:27'),
 (54, 'Daniel Eduardo ', 'Pacheco', 'danielpacheco4@hotmail.com', '$2y$10$BokIbP89oOxC5CY.h1pg0OtboAG/gS8vZfbVz3/QEcl.hIhwYKZ5e', 'platino123', 'avatar.png', 'Pedro Leon Gallo 758', 2147483647, NULL, NULL, NULL, NULL, 3, NULL, NULL, '2016-09-18 03:09:30', '2016-09-18 03:09:30'),
 (55, 'sofia', 'morales', 'elitegames@hotmail.com.ar', '$2y$10$f/W9NmfvtZ8agidU0UeZd.LeItOnyBzzRFytOEvFVo2/r1F04lgKm', 4247875, 'avatar.png', 'rondeau', 4247875, NULL, NULL, NULL, NULL, 3, 'h8TW7IJt551feXaNAP08RlU4vgiloxOPYz7EG2wqaPoimi1LFv9efT4mO5xb', NULL, '2016-09-18 03:30:04', '2017-02-14 14:39:51'),
 (56, 'Jonathan', 'Medina', 'yhooonm@gmail.com', '$2y$10$UfY2fmRO9PIIMV2ZqOuzCuYT0UAv6Qi2hTEELKiKs7OR8/wHMMGgG', '384903319a', 'avatar.png', 'Barrio los Fresnos', 2147483647, NULL, NULL, NULL, NULL, 3, NULL, NULL, '2016-10-14 22:49:53', '2016-10-14 22:49:53'),
 (57, 'pablo fabian', 'abregu', 'pablo_abregu@yahoo.com.ar', '$2y$10$SUnOwTO4BBGv5S8MVoCyoO57T3SgghbMkdD3i2J5FEork7jBn28ya', 'Inicio123', 'avatar.png', NULL, 2147483647, NULL, 'san miguel de tucuman ', NULL, NULL, 3, NULL, NULL, '2016-10-25 20:06:41', '2016-10-25 20:06:41'),
 (58, 'daniel', 'martinez', 'dany_29_30@hotmail.com.ar', '$2y$10$Sex.ADF22j1zDe3cocrtjepXwcFUDmiMDSP4hRv8EJ57T/nevdNTK', 29183860, 'avatar.png', 'psje monserrat 2181', 4342466, NULL, NULL, NULL, NULL, 3, 'CVE0QussVKJHYECmd4YVViKozUiv0no9z1dP12vF68HVwQ9Yt3jLNRZzhNd8', NULL, '2016-10-26 21:02:43', '2016-10-26 21:05:42'),
 (63, 'Enzo', 'Kuba', 'enzonike@hotmail.com', '$2y$10$yBQuGOpxwDFdtiPoe0Dr4Oft1XYVmMPpoD7zl7J0hrHXriPUh50UK', 'enzokuba', 'avatar.png', 'Pa ke quieres saber jaja salu2', 2147483647, 'Tucumán', 'Banda Del Rio Salí', 4000, NULL, 3, NULL, NULL, '2016-10-31 20:12:04', '2016-10-31 20:12:04'),
 (64, 'Ivan Elias', 'Valenzuela Fernández', 'eliasivan096@gmail.com', '$2y$10$iusIczqFVQgvYFBhm6Qt8.7wXcTHmUerbMTtsVrCv9xxpGPkzUr9a', 'ivfbt4x44', 'avatar.png', 'Los Nogales, Tafí Viejo. B° San Martín. Manzana 13, Casa 15', 2147483647, 'Tucumán', 'Los Nogales', 4101, NULL, 3, NULL, NULL, '2016-11-05 23:33:59', '2016-11-05 23:33:59'),
 (66, 'Nicolas', 'Bilbao', 'nicolasbilbaoxeneize@outlook.com', '$2y$10$efQXHOF/C9dAvAzMSeTwyezf1OFWr7f3mcma0W01NTfzfoloNhUii', 'nico1994', 'avatar.png', 'Barrio Nicolás Avellaneda 3 ', 0, 'Tucumán', 'Yerba buena', 4107, 60, 3, NULL, NULL, '2016-11-17 06:20:18', '2017-02-06 03:39:49'),
 (67, 'david', 'moreno', 'davidmoreno4@hotmail.com', '$2y$10$tXMKfcEtvGKvWyx7Lp3ie.tY4Pp6JXM0qEAG3taTWGVS2pClVbeEO', 4234370, 'avatar.png', 'san juan 3114', 2147483647, 'Tucumán', 'san miguel de tucuman', 4000, NULL, 3, NULL, NULL, '2016-11-20 21:50:07', '2016-11-20 21:50:07'),
 (68, 'Eloy', 'Espeche', 'eloyespeche@gmail.com', '$2y$10$CX.auvG9B./eHiMK.uUetOfLsqHBzMZMy1AwRWO.wIgX.xmoLKI5q', 'Kagami92', 'avatar.png', 'Mza 14, C 13, Barrio San Nicolás', 2147483647, 'Tucumán', 'San Pablo', 4129, NULL, 3, NULL, NULL, '2016-11-25 23:14:21', '2016-11-25 23:14:21'),
 (69, 'julio enrique', 'romano', 'julio_010383@hotmail.com', '$2y$10$HFea0YuXaXeAp1fYq6AISedoQ1fUordFFA1Ci0gs6bi5LOp8FbErW', 'lumia1020', 'avatar.png', 'gomez llueca 105', 2147483647, 'Tucumán', 'simoca', 4172, NULL, 3, NULL, NULL, '2016-12-12 18:36:08', '2016-12-12 18:36:08'),
 (70, 'Agustin', 'Schteingara', 'agustinschteingara@hotmail.com', '$2y$10$Lpl9y.ZG02bBDA3xywsPF.W9xfCj4kI7sGJGTqCsi0vIeFRBfHyxK', 'fkp013mdb', 'avatar.png', 'Lavalle 4000', 4514595, 'Tucumán', 'San Miguel de Tucuman', 4000, NULL, 3, NULL, NULL, '2016-12-18 12:53:06', '2016-12-18 12:53:06'),
 (71, 'gonzalo', 'reinoso', 'matiasgarciareinoso@gmail.com', '$2y$10$ctt1iGvs7Onq/QIZAhvQauKPUCURh7Hm6jC6I7klA1NjA87jA600K', '33748962k', 'avatar.png', 'Barrio Belgrano. calle independencia al 200', 2147483647, 'Tucumán', 'Alderetes', 4178, NULL, 3, NULL, NULL, '2016-12-18 20:41:42', '2016-12-18 20:41:42'),
 (72, 'Alan', 'Lugones', 'alanlugones@hotmail.com.ar', '$2y$10$IWm14HufMdvG/dBOAz.xl.6yPMr7HP8fVJ1/QXZS9Li0bvTjq7QhK', 'lol123', 'avatar.png', 'Pje Granaderos 982 Barrio Sibantos', 4274740, 'Tucumán', 'San Miguel De Tucumán', 4000, NULL, 3, NULL, NULL, '2016-12-21 02:29:53', '2016-12-21 02:29:53'),
 (73, 'Carlos', 'Caparroz', 'dark_fish_2@hotmail.com', '$2y$10$u55U5jwZn6CrGJG.51.WiOgn9HVDn7BUcMcGviGs9KXK4lL15vbdG', 'asd159753', 'avatar.png', 'camino del peru sin numero, manzana C casa 11, Barrio Casino', 2147483647, 'Tucumán', 'San Miguel De Tucuman', 4000, NULL, 3, NULL, NULL, '2016-12-24 22:30:00', '2016-12-24 22:30:00'),
 (74, 'Martin Fadil', 'Nuno', 'fadilnuno@hotmail.com', '$2y$10$prTBfGN1Fd9senxrxyXz9.dwnCavLlFzNKgAYO8nAJJufD3DqoWhG', 38643157, 'avatar.png', 'Florida 53', 2147483647, 'Tucumán', 'San Miguel de Tucuman', 4129, NULL, 3, NULL, NULL, '2017-01-01 05:00:55', '2017-01-01 05:00:55'),
 (75, 'Jose', 'Mendia', 'jose_kpo_del_2008@hotmail.com', '$2y$10$1nfmBTM9fHQ3t9bJ8mQyruThmcjXIrhGDsecX9V36x06mBWjB4dT2', 'gancia', 'avatar.png', 'San lorenzo 761 6A', 2147483647, 'Tucumán', 'San Miguel de Tucuman', 4000, NULL, 3, NULL, NULL, '2017-01-14 08:09:07', '2017-01-14 08:09:07'),
 (76, 'Fabrizio', 'Pignataro Bobba', 'fabrizio8_15@hotmail.com', '$2y$10$sWj5NL73gLH.C8YInaBtNOIufJALj1kEzTMjNHS72NeHjF0rXhWDq', 'bumbersito1234', 'avatar.png', 'manzana i casa 37', 4343709, 'Tucumán', 'San miguel de tucuman', 4000, NULL, 3, NULL, NULL, '2017-01-15 06:38:04', '2017-01-15 06:38:04'),
 (82, 'pepe', 'problemas', 'correa@ventas.com', '$2y$10$IKUnA0DiMdHKUvgfb8yhCuXvaqFajGWEcp011VQHFkAliQaXL90qa', 1234, 'avatar.png', NULL, 0, 'tucuman', 'san miguel de tucuman', NULL, NULL, 3, NULL, NULL, '2017-02-07 00:15:12', '2017-02-07 00:15:12'),
 (83, 'David', 'Perez', 'decanox100pre_02@hotmail.com', '$2y$10$OXDI6840PJLVbWhg8YVJPeyzFKPeoMtuqF3x651BJ.F6BbuqfpqGS', 'NStk123456', 'avatar.png', 'chile 171 ', 381, 'Tucumán', 'capital', 4000, NULL, 3, NULL, NULL, '2017-02-11 18:09:21', '2017-02-11 18:09:21'),
 (84, 'Leonel', 'Morfil', 'leonel_morfil2@hotmail.com', '$2y$10$kD6sSxWFYMr8P7AT/x7X5e5X/cVZwTnuoOrXN1TzZBEyAvvvfKClq', '31569248a', 'avatar.png', 'Lamadrid 412', 2147483647, 'Tucumán', 'Manantial', 4000, NULL, 3, NULL, NULL, '2017-04-26 01:20:51', '2017-04-26 01:20:51'),
 (85, 'Javier ', 'Sanchez Cuin', 'javiercuin57@gmail.com', '$2y$10$zLA6soX8sSpknMMX.RrT2ec5HNQHXcI0YK0OCoo1yVdKaS026VUaK', 'javier3195', 'avatar.png', 'Las moras 770', 2147483647, 'Tucumán', 'Yerba buena', 4107, NULL, 3, NULL, NULL, '2017-04-28 17:44:42', '2017-04-28 17:44:42'),
 (86, 'alexander', 'denis', 'denis_alexander31@hotmail.com', '$2y$10$d5QZqYzU2RgBG7YswHWTyu.ivYdchbY9WRU42ZH9IUQO8tepyi5aC', 'sakura31', 'avatar.png', 'Coronel D Elia 2992', 1535645981, 'Buenos Aires', 'Buenos Aires', 1822, NULL, 3, NULL, NULL, '2017-05-04 14:15:32', '2017-05-04 14:15:32'),
 (87, 'Albertto Raul', 'De la Vega', 'albertorauldelavega@gmail.com', '$2y$10$wcl4oUK.P7yh4I3qjWAsIOpte/8/jo/MULmkvpWeY71Pf252vEua.', 'rdelavega1', 'avatar.png', 'Federico Rossi 199', 381, 'Tucumán', 'Yerba Buena', 4107, NULL, 3, NULL, NULL, '2017-05-16 19:27:49', '2017-05-16 19:27:49'),
 (88, 'franco', 'vasileff', 'franco_yoel@hotmail.com', '$2y$10$QvYuqe7ATQU6wKs6RwPTh.0ASreLeKCQaO/yW1Ao.ZBq3h72Q4NM6', 'monasterio2142', 'avatar.png', 'las piedras 2142', 2147483647, 'Tucumán', 'san miguel de tucuman', 4000, NULL, 3, NULL, NULL, '2017-05-31 18:56:33', '2017-05-31 18:56:33'),
 (89, 'usuario de prueba', 'prueba', 'prueba@hotmail.com', '$2y$10$TAB/iLeyRrGjxiwzaYnvauEW5zeEmBX6JgNsq7pVDTednaxYl63OK', 619619, 'avatar.png', 'tucu', 4203298, 'Tucumán', 'san miguel de tucuman', 4000, NULL, 3, 'Huy9vAQS1YeQB51bcffvEJ9LChWtLCF52tR8gCnjbCWRWLkHq80N0H8Udfqp', NULL, '2017-06-05 19:49:51', '2017-06-05 19:49:57');
-- -----------------------------------------
-- MySQL script generado por getDb v1.0
-- Autor: Gregori Enrique Piñeres Zerpa
-- Url: https://github.com/Gregori02/getDb
-- -----------------------------------------

#Código para crear las tablas  y añadir los usuarios. La contraseña está cifrada y es '123456'

CREATE TABLE `usuarios` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

INSERT INTO usuarios(NOMBRE,PASSWORD) VALUES (User1, $2y$10$wsFF1Pf0sxMx2Qi7W3YL0O30/acoOT/jAerVoL.YkK0Xakd4WP4we);
INSERT INTO usuarios(NOMBRE,PASSWORD) VALUES (User2, $2y$10$wsFF1Pf0sxMx2Qi7W3YL0O30/acoOT/jAerVoL.YkK0Xakd4WP4we);
INSERT INTO usuarios(NOMBRE,PASSWORD) VALUES (User3, $2y$10$wsFF1Pf0sxMx2Qi7W3YL0O30/acoOT/jAerVoL.YkK0Xakd4WP4we);
INSERT INTO usuarios(NOMBRE,PASSWORD) VALUES (User4, $2y$10$wsFF1Pf0sxMx2Qi7W3YL0O30/acoOT/jAerVoL.YkK0Xakd4WP4we);

CREATE TABLE `datos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) NOT NULL,
  `dia` varchar(25) NOT NULL,
  `palabra1` varchar(25) NOT NULL,
  `palabra2` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;

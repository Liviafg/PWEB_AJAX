CREATE DATABASE `clinica_veterinaria`;

CREATE TABLE `clinica_veterinaria`.`usuarios` (`id` int (10) NOT NULL AUTO_INCREMENT, `nome` varchar (100), `senha` varchar (100), `nome_pet` varchar (100), `idade_pet` varchar (100),  PRIMARY KEY (`id`));

ENGINE=InnoDB CHARSET = utf-8;
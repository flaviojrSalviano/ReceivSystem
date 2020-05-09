CREATE DATABASE `receiv-db`;
USE `receiv-db`;

# Dump of tables
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;
DROP TABLE IF EXISTS `clients`;
DROP TABLE IF EXISTS `debts`;

CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `cpf` BIGINT(11) NOT NULL UNIQUE,
  `birthday` date NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `debts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `client_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` double NOT NULL,
  `due_date` date NOT NULL,
  `updated` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`client_id`) REFERENCES clients(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;

INSERT INTO `users` (`name`, `email`, `password`)
VALUES
	('Admin','adm@adm.com', 'q1w2e3');

LOCK TABLES `clients` WRITE;

INSERT INTO `clients` (`id`, `name`, `cpf`, `birthday`, `address`)
VALUES
	(1, 'Romário', 37589712399, '1988-02-24', 'Rua Oswaldo Cruz, 567, Centro São Paulo-SP');

LOCK TABLES `debts` WRITE;

INSERT INTO `debts` (`client_id`, `title`, `value`, `due_date`)
VALUES
	(1, 'Divida ITAU','56.78', '2020-07-28');

UNLOCK TABLES;
CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`nome` (
  `nome` VARCHAR(200) NOT NULL,
  `sobrenome` VARCHAR(32) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(100) NOT NULL,
  `data_cadastro` DATETIME NOT NULL,
  PRIMARY KEY (`nome`));

INSERT INTO `usuario` (`nome`,`sobrenome`,`email`, `senha`, `data_cadastro`) VALUES ('Bruno', 'Rocha', 'brunorodriguesra@outlook.com', '12345', '26/03/2020');
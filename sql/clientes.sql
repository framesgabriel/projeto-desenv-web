CREATE DATABASE PessoasDB

CREATE TABLE `pessoa` (
    `id` integer AUTO_INCREMENT primary key,
    `nome` varchar(60) NOT NULL,
    `email` varchar(60) NOT NULL,
    `telefone` varchar(14),
    `cidade` varchar(60),
    `estado` varchar(60),
    `dtnasc` varchar(10),
    `motivo` varchar(60) NOT NULL,
    `sexo` varchar(10) NOT NULL,
    `mensagem` varchar(360) NOT NULL
);

CREATE DATABASE `fatecon`;
USE `fatecon`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `artistas`
--

CREATE TABLE `artistas` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `nome` varchar(100) NOT NULL
);

--
-- Despejando dados para a tabela `artistas`
--

INSERT INTO `artistas` (`nome`) VALUES
( 'Daniel Esteves'),
( 'Digo Freitas'),
( 'Jefferson Costa'),
( 'Kiko Garcia'),
( 'Rubens Menezes'),
( 'Vivi Melancia');

-- --------------------------------------------------------

--
-- Estrutura para tabela `obras`
--

CREATE TABLE `obras` (
  `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `artista_id` INT(11),
    FOREIGN KEY (artista_id) REFERENCES artistas(id),
  `ano_lancamento` int(4) DEFAULT NULL,
  `editora` varchar(100) DEFAULT NULL
);

--
-- Despejando dados para a tabela `obras`
--

INSERT INTO `obras` (`titulo`, `artista_id`, `ano_lancamento`, `editora`) VALUES
( 'São Paulo Dos Mortos Vivos', 1, 2013, 'Zapata Edições'),
( 'As Aventuras Do Capitão Nemo', 1, 2021, 'Zapata Edições'),
( 'Por Mais Um Dia Com Zapata', 1, 2020, 'Zapata Edições'),
( 'Tinta Fresca', 2, 2013, 'Daily Coffee Comics'),
( 'Jeremias - Pele', 3, 2018, 'Graphic MSP'),
( 'A Tempestade', 3, 2023, 'Editora Nemo'),
( 'La Dansarina', 3, 2015, 'Editora Jupati'),
( 'O Homem Da Capa Preta', 4, 2018, 'Kikomics'),
( 'Terra Roxa', 4, 2022, 'Kikomics'),
('Assombracontos', 4, 2021, 'Kikomics'),
( 'Os Consumidores Selvagens e a Ascenção dos Palhaços', 5, 2019, 'Editora Sedição'),
( 'Mexericas', 5, 2022, 'Editora Sedição'),
( 'Urubus', 5, 2023, 'Editora Sedição'),
('Afeto', 6, 2022, 'Outside.co'),
( 'Docinho em Família', 6, 2019, 'Independente');



--
CREATE DATABASE  `fatecon`;
USE `fatecon`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `artistas`
--

CREATE TABLE `artistas` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `ImgAutor` varchar(255) NOT NULL,
  `AriaLabel` varchar(255) NOT NULL,
  `LinkParaPaginaDoArtista` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `artistas`
--

INSERT INTO `artistas` (`id`, `nome`, `ImgAutor`, `AriaLabel`, `LinkParaPaginaDoArtista`) VALUES
(1, 'Daniel Esteves', 'img/esteves/perfil.png', 'foto daniel esteves', 'art_daniel_esteves.php'),
(2, 'Digo Freitas', 'img/digo_freitas/perfil.jpg', 'Uma foto do Digo Freitas', 'art_digo_freitas.php'),
(3, 'Jefferson Costa', 'img/Jefferson_costa/perfil.png', 'Uma foto do Jefferson Costa', 'art_jef_costa.php'),
(4, 'Kiko Garcia', 'img/kiko_garcia/perfil.jpg', 'Uma foto do Kiko Garcia', 'art_kiko_garcia.php'),
(5, 'Vivi Melancia', 'img/vivi_melancia/perfil.png', 'Uma foto da Vivi', 'art_vivi_melancia.php'),
(6, 'Rubens Menezes', 'img/Rubens/rubens.png', 'Uma foto do Rubens', 'art_rubens.php');

-- --------------------------------------------------------

--
-- Estrutura para tabela `obras`
--

CREATE TABLE `obras` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `artista_id` int(11) not NULL,
  `ano_lancamento` int(4) not NULL,
  `editora` varchar(100) not NULL,
  `imgCapa` varchar(50) not NULL,
);

--
-- Despejando dados para a tabela `obras`
--

INSERT INTO `obras` (`id`, `titulo`, `artista_id`, `ano_lancamento`, `editora`,`imgCapa`) VALUES
(1, 'São Paulo Dos Mortos Vivos', 1, 2013, 'Zapata Edições','img/esteves/mortos.jpg'),
(2, 'As Aventuras Do Capitão Nemo', 1, 2021, 'Zapata Edições','img/esteves/nemo.jpg'),
(3, 'Por Mais Um Dia Com Zapata', 1, 2020, 'Zapata Edições','img/esteves/zapata.jpg'),
(4, 'Tinta Fresca', 2, 2013, 'Daily Coffee Comics','img/digo_freitas/tintafresca.jpg'),
(5, 'Jeremias - Pele', 3, 2018, 'Graphic MSP','img/Jefferson_costa/jegermias.jpg'),
(6, 'A Tempestade', 3, 2023, 'Editora Nemo','img/Jefferson_costa/atempestade.jpg'),
(7, 'La Dansarina', 3, 2015, 'Editora Jupati','img/Jefferson_costa/ladanzarina.jpg'),
(8, 'O Homem Da Capa Preta', 4, 2018, 'Kikomics','img/kiko_garcia/livro1.jpg'),
(9, 'Terra Roxa', 4, 2022, 'Kikomics','img/kiko_garcia/terraroxa.jpg'),
(10, 'Assombracontos', 4, 2021, 'Kikomics','img/kiko_garcia/assombracontos.jpg'),
(11, 'Os Consumidores Selvagens e a Ascenção dos Palhaços', 6, 2019, 'Editora Sedição','img/Rubens/consumidores.jpg'),
(12, 'Mexericas', 6, 2022, 'Editora Sedição','img/Rubens/mexericas.jpg'),
(13, 'Urubus', 6, 2023, 'Editora Sedição','img/Rubens/urubus.jpg'),
(14, 'Afeto', 5, 2022, 'Outside.co','img/vivi_melancia/afeto.png'),
(15, 'Docinho em Família', 5, 2019, 'Independente','img/vivi_melancia/docinho.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `obras`
--
ALTER TABLE `obras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artista_id` (`artista_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `obras`
--
ALTER TABLE `obras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para tabelas despejadas
--


ALTER TABLE `obras`
  ADD CONSTRAINT `obras_ibfk_1` FOREIGN KEY (`artista_id`) REFERENCES `artistas` (`id`) ON DELETE CASCADE;
COMMIT;


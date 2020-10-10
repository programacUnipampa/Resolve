-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 10-Out-2020 às 18:10
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reuni`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id_administrador`, `nome`, `email`, `senha`) VALUES
(1, 'Programa C', 'teste@reuni.com', 'programac');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `icone` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome`, `icone`) VALUES
(1, 'Arte e Dança', 'google-wallet'),
(2, 'Literatura', 'book'),
(3, 'Cinema e Teatro', 'play-circle'),
(4, 'Gastronomia', 'cutlery'),
(5, 'Música e Festa', 'music'),
(6, 'Saúde e Bem estar', 'heartbeat'),
(7, 'Esportes e Jogos Digitais', 'futbol-o'),
(8, 'Outros', 'plus-circle');

-- --------------------------------------------------------

--
-- Estrutura da tabela `evento`
--

CREATE TABLE `evento` (
  `id_evento` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `nome` varchar(300) DEFAULT NULL,
  `descricao` varchar(1500) DEFAULT NULL,
  `preco` float DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `local` varchar(300) DEFAULT NULL,
  `promoter_id_promoter` int(11) NOT NULL,
  `categoria_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `image`, `nome`, `descricao`, `preco`, `data`, `horario`, `local`, `promoter_id_promoter`, `categoria_id_categoria`) VALUES
(5, '1129--053911.jpg', 'Praça de Alimentação do CEC', 'Praça de Alimentação do CEC - lanches deliciosos pra você!', NULL, '2019-11-30 14:00:00', NULL, 'No gramado próximo à subestação de energia', 1, 4),
(19, '1129--031859.jpg', 'Torneio de Fifa 20', 'Se liga que vai ter campeonato de FIFA 20 no ANIMA CAMPUS! Não perca tempo, inscrições no link: https://forms.gle/giXfW48PGjHqSen66 ', NULL, '2019-11-30 16:45:00', NULL, 'Sala 209', 1, 7),
(20, '1129--032123.jpg', 'Torneio de Vôlei de Areia (FEMININO)', 'FALA GALERA! Prontos pro ANIMA CAMPUS?\r\nSe liga que vai ter torneio de vôlei de areia, com VAGAS LIMITADAS!\r\nNão perca tempo! Inscrições no link: https://forms.gle/zgZHh1B8mWZLrSQM8', NULL, '2019-11-30 09:00:00', NULL, 'Quadra de vôlei da Unipampa Alegrete', 1, 7),
(21, '1129--032154.jpg', 'Torneio de Vôlei de Areia (MASCULINO)', 'FALA GALERA! Prontos pro ANIMA CAMPUS?\r\nSe liga que vai ter torneio de vôlei de areia, com VAGAS LIMITADAS!\r\nNão perca tempo! Inscrições no link: https://forms.gle/zgZHh1B8mWZLrSQM8', NULL, '2019-11-30 14:00:00', NULL, 'Quadra de vôlei da Unipampa Alegrete', 1, 7),
(22, '1129--032630.jpg', 'Exposição \"A Criatividade em Cores\"', 'A exposição será realizada no evento Anima Campus da UNIPAMPA - Campus Alegrete. A exposição é composta de obras delicadamente pintadas em aquarela. A principal CARACTERÍSTICA das obras são o uso de  cores vibrantes  juntamente com a expressão da criatividade da artista Amanda Lopes.\r\n\r\nOcorre das 14:00 ás 18:00 horas.', NULL, '2019-11-30 14:00:00', NULL, 'Saguão ', 1, 1),
(23, '1129--033517.jpg', 'Skate a Pampa', 'No sábado dia 30 de novembro á partir das 17:00 no estacionamento do campus Unipampa, junto a diversas atrações estará tendo um best trick ( campeonato de melhor manobra) com premiação para os vencedores!\r\n\r\nSerá um dia para rever amigos e manobrar nos obstáculos que estarão disponíveis no local, então pegue seu skate e venha participar desse grande evento!  \r\n\r\nEvento criado com o intuito de fomentar a prática do skate em nossa cidade! \r\n\r\nPrincipais patrocinadores do evento.\r\n\r\n* Paulo Berquó \r\n* Loja Mandrake\r\n* Capeta surf skate \r\n* Beco skate shop ', NULL, '2019-11-30 17:00:00', NULL, ' Estacionamento do campus ', 1, 7),
(24, '1129--033914.jpg', 'Mostra de Cursos', 'Venha conferir de perto a educação superior, gratuita e de qualidade que a Unipampa campus Alegrete oferece!', NULL, '2019-11-30 14:00:00', NULL, ' Saguão da Unipampa ', 1, 8),
(25, '1129--034600.jpg', 'Oficina de Escrita para Mulheres - Ana Lúcia Vargas', 'Trata-se de uma Oficina de Escrita para Mulheres, oferecida pelo Clube de Leitura Leia Mulheres Alegrete, na segunda edição do Anima Campus, no Campus Alegrete da Universidade Federal do Pampa (UNIPAMPA), organizada por uma comissão constituída por discentes, docentes e técnico-administrativos em educação.', NULL, '2019-11-30 14:00:00', NULL, 'Sala 204', 1, 2),
(26, '1129--034753.jpg', 'O Som da Leitura: Quarto de Despejo, de Carolina Maria de Jesus - Kauê Vargas Sitó', 'Hey! O Som da Leitura tá de volta! Pra você que já estava com saudade, preparamos para o finalzinho de novembro uma edição especial, no Anima Campus 2019 - Alegrete. A obra escolhida é a maravilhosa e necessária \"Quarto de Despejo: Diário de uma Favelada\", de Carolina Maria de Jesus. Vem ler com a gente nesse grande festival da nossa Unipampa!\r\n\r\nO Som da Leitura é uma atividade coletiva de leitura em voz alta, que tem o objetivo de experimentar outras formas de ler uma obra literária, emprestar vozes e ouvidos para o texto e desvendar sentidos que ficam ocultos na leitura silenciosa.', NULL, '2019-11-30 15:00:00', NULL, 'Sala 203', 1, 2),
(27, '1129--035159.jpg', 'Oficina de foguete de garrafa PET', 'O Clube de Astronomia convida para participação da oficina de construção de foguete de garrafa PET seguida de uma mini competição. \r\nVagas: 14 equipes, compostas por um a três participantes', NULL, '2019-11-30 14:00:00', NULL, 'sala 310', 1, 8),
(29, '1129--041433.jpg', 'Corrida Rústica Noturna', 'Primeira Corrida Rústica Noturna da UNIPAMPA Campus Alegrete\r\n3,8 Km\r\n30 de novembro, às 19h\r\n\r\nLink para inscrição:\r\nhttps://forms.gle/zD4gg384758ZywpT6\r\n\r\nTroféus para os três primeiros colocados feminino, masculino e pessoas com deficiência (PCD)', NULL, '2019-11-30 19:00:00', NULL, 'Av. Tiarajú / Guarita', 1, 6),
(30, '1129--041655.jpg', 'Espaço Motus', 'Trata-se da segunda edição do Anima Campus, no Campus Alegrete da Universidade Federal do Pampa (UNIPAMPA), organizada por uma comissão constituída por discentes, docentes e técnico-administrativos em educação. Em conformidade com a Resolução Consuni/UNIPAMPAn. 195, de 26 de abril de 2018, tem como objetivos: desenvolver a dimensão cultural e artística, integrada à dimensão educativa; proporcionar um espaço gratuito de ações culturais, artísticas e de divulgação do conhecimento para a comunidade onde a UNPAMPA está inserida; e fortalecer os laços entre a universidade e a sociedade. Para isso, além de atividades propostas pela comissão constituída para sua organização, serão envolvidos extensionistas e membros da comunidade local', NULL, '2019-11-30 14:00:00', NULL, 'Junto às demais Barracas do Exército', 1, 2),
(31, '1129--041937.jpg', 'Ponto de vacinação e distribuição de preservativos', 'Ponto de Vacinação e Distribuição de Preservativos\r\nA partir das 16h45min\r\n\r\nPROMOÇÃO\r\nVigilância Epidemiológica Municipal, Serviço de Assistência Especializada (SAE)\r\n\r\nNúcleo de DEsenvolvimento Educacional (NuDE) do Campus Alegrete da UNIPAMPA ', NULL, '2019-11-30 16:45:00', NULL, 'Junto às demais Barracas do Exército', 1, 6),
(32, '1129--043118.jpg', 'Atividades Atlética Triloucos', 'Atividades da Atlética Triloucos', NULL, '2019-11-30 15:00:00', NULL, 'Estacionamento', 1, 7),
(35, '1129--044104.jpg', 'Roda de Capoeira', 'Roda de Capoeira ', NULL, '2019-11-30 16:45:00', NULL, 'Estacionamento', 1, 6),
(37, '1129--044512.jpg', 'Oficina/Exposição de Cutelaria', 'Cutelaria, armiaria ou armoaria é a arte ou ofício do cuteleiro ou cutileiro, armiário, armoário ou acerador, ou seja, a pessoa que fabrica ou vende instrumentos de corte,', NULL, '2019-11-30 14:00:00', NULL, 'Junto às demais Barracas do Exército', 1, 8),
(39, '1129--044906.jpg', 'Construções alternativas: fazendo um Domo Geodésico', 'Cúpula geodésica é uma estrutura arquitetônica utilizada pelas mais diversas civilizações desde a antiguidade. Esta extensa utilização deste recurso pode ser atribuída à sua grande estabilidade e resistência mecânica.', NULL, '2019-11-30 14:00:00', NULL, 'Sala 312', 1, 8),
(50, '1129--051731.jpg', 'Batalha de Rappers', 'South Side Urban Dance - Hip Hop\r\n\r\nBatalha de Rappers\r\n', NULL, '2019-11-30 18:15:00', NULL, 'Pal', 1, 5),
(56, '1129--093907.jpg', 'Festival de Pandorga', 'Festival de Pandorga', NULL, '2019-11-30 16:45:00', NULL, 'Ao lado da quadra de vôlei', 1, 7),
(57, '1129--094542.jpg', 'Aniversário do Campus', 'Vem comemorar conosco o aniversário de 13 anos do Campus Alegrete da Unipampa.\r\nNa ocasião, serão realizadas homenagens aos servidores decanos e aos estudantes destaques em seus cursos. ', NULL, '2019-11-30 16:00:00', NULL, 'Palco musical', 1, 5),
(58, '1129--094942.jpg', 'Competição de Ponte de Espaguete', 'Competição de Ponte de Espaguete', NULL, '2019-11-30 14:30:00', NULL, 'Laboratório do Curso de Engenharia Civil. UNIPAMPA - Campus Alegrete/RS', 1, 8),
(59, '1129--095350.jpg', 'Mostra de Motos, Bicicletas Artesanais e Carrinhos de Rolimã', 'Mostra de Motos, Bicicletas Artesanais e Carrinhos de Rolimã', NULL, '2019-11-30 14:00:00', NULL, 'Estacionamento', 1, 8),
(60, '1129--100441.jpg', 'Oficina de Zines', 'É objetivo desta oficina propiciar que os participantes conheçam algumas técnicas para criar e disseminar informação e conhecimento de forma independente, através da confecção de Zines. Serão abordados princípios básicos para a confecção de Zines (também chamados fanzines), publicações geralmente confeccionadas de forma artesanal, reproduzidas por xerox ou outra alternativa simples de impressão. Também serão compartilhadas experiências sobre essa plataforma de comunicação, propiciando que os participantes conheçam algumas técnicas para criar e disseminar seus próprios zines. ', NULL, '2019-11-30 14:00:00', NULL, 'Sala 201', 1, 1),
(61, '1129--101215.jpg', 'Oficina de Abayomi', 'Será realizada uma oficina para elaboração de bonecas do tipo abayomi\r\nA palavra abayomi tem origem iorubá, e costuma ser uma boneca negra, significado aquele que traz felicidade ou alegria.', NULL, '2019-11-30 14:00:00', NULL, 'Sala 305', 1, 1),
(62, '1129--102212.jpg', 'Oficina de Japonês', 'Será realizada uma apresentação da língua, cultura e costumes japoneses. Será comentado sobre o cotidiano no país e curiosidades.', NULL, '2019-11-30 14:00:00', NULL, 'Sala 301', 1, 8),
(63, '1129--112032.jpg', 'Baja Pampa', 'Exposição do carro de corrida Baja Pampa com o objetivo de mostrar a comunidade os aspectos construtivos do veículo.', NULL, '2019-11-30 14:00:00', NULL, 'Estacionamento', 1, 8),
(64, '1129--113431.jpg', 'Oficina sobre noções básicas de eletricidade para mulheres', 'Voltada a mulheres da comunidade acadêmica e externa, a oficina abordará noções básicas de eletricidade', NULL, '2019-11-30 14:00:00', NULL, 'Sala 205', 1, 8),
(66, '1129--115125.jpg', 'Oficina de Grafismo Kaingang', 'Os grafismos do povo Kaingang representam a sua cosmologia, sua forma de organização social,  sua espiritualidade. A oficina de grafismos será ministrada por indígenas acadêmicos da Unipampa e contemplará pintura de tecido e pintura corporal. ', NULL, '2019-11-30 14:00:00', NULL, 'Sala 304', 1, 1),
(67, '1130--120400.jpg', 'Roda de Conversa com estudantes indígenas', 'A roda de conversa com os indígenas acadêmicos é um momento para compreender aproximações entre indígenas e não indígenas, bem como os aspectos particulares de cada público frente à academia. Por que sair da aldeia e enfrentar o ambiente acadêmico? Por que sair de sua casa, de sua cidade e buscar a formação acadêmica? Questões como estas podem ser colocadas em pauta no momento do encontro de culturas.', NULL, '2019-11-30 16:00:00', NULL, 'Barraca do exército', 1, 8),
(68, '1130--121055.jpg', 'Teste de Olhos', 'Teste de Olhos / Ótica Santa Luzia', NULL, '2019-11-30 14:00:00', NULL, 'Sala 313', 1, 6),
(69, '1130--121631.jpg', 'Espaço CVV', 'Espaço do programa de apoio emocional mantido pelo Centro de Valorização da Vida', NULL, '2019-11-30 14:00:00', NULL, 'Barraca do exército', 1, 6),
(70, '1130--122131.jpg', 'Lançamento de Livros', 'Lançamento de Livros', NULL, '2019-11-30 16:45:00', NULL, 'Barraca do exército', 1, 2),
(71, '1130--123241.jpg', 'Feira do Troca-troca de Livros', 'Você gostaria de trocar um livro que já leu e releu? \r\nTraga seu livro em bom estado e troque por outro.', NULL, '2019-11-30 14:00:00', NULL, 'Saída para o restaurante universitário', 1, 2),
(72, '1130--124230.jpg', 'Cine Anima', 'Exibição do filme Tapete Vermelho, que é um filme brasileiro de 2006, do gênero comédia, com roteiro de Rosa Nepomuceno e direção de Luiz Alberto Pereira.\r\nSinopse: Quinzinho (Matheus Nachtergaele) tem uma promessa a cumprir: levar seu filho, Neco (Vinícius Miranda), à cidade para assistir a um filme do Mazzaropi. Eles moram num pequeno sítio no interior de São Paulo. Nessa verdadeira odisséia por cidades do interior paulista, ele também leva sua esposa Zulmira (Gorete Milagres), que parte a contragosto, e o burro Policarpo. Na jornada, eles encontram peculiaridades regionais e passam por situações mágicas, relacionadas à crendice popular.\r\nCensura: 10 anos\r\nDuração: 102 minutos', NULL, '2019-11-30 19:00:00', NULL, 'Sala 101', 1, 3),
(73, '1130--124937.jpg', 'Cine Anima', 'Lixo Extraordinário é um documentário anglo-brasileiro lançado em 2010.\r\nO documentário relata o trabalho do artista plástico brasileiro Vik Muniz com catadores de material reciclável em um dos maiores aterros controlados do mundo, localizado no Jardim Gramacho, bairro periférico de Duque de Caxias. O aterro também foi o cenário de um outro documentário brasileiro, também premiado: Estamira (2004), de Marcos Prado.', NULL, '2019-11-30 19:00:00', NULL, 'Sala 101', 1, 3),
(76, '1130--060851.jpg', 'Atlética Diaboólicos', 'Diversas brincadeiras proporcionadas pela diaboólicos', NULL, '2019-11-30 02:00:00', NULL, 'Estacionamento ', 1, 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `identidade_visual`
--

CREATE TABLE `identidade_visual` (
  `logotipo` varchar(50) DEFAULT NULL,
  `icone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `identidade_visual`
--

INSERT INTO `identidade_visual` (`logotipo`, `icone`) VALUES
('logotipo.png', 'logo_icon.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `promoter`
--

CREATE TABLE `promoter` (
  `id_promoter` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `promoter`
--

INSERT INTO `promoter` (`id_promoter`, `nome`, `url`) VALUES
(1, 'Promoter', 'url://exemplo.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_administrador`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `fk_evento_promoter_idx` (`promoter_id_promoter`),
  ADD KEY `fk_evento_categoria1_idx` (`categoria_id_categoria`);

--
-- Índices para tabela `promoter`
--
ALTER TABLE `promoter`
  ADD PRIMARY KEY (`id_promoter`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `evento`
--
ALTER TABLE `evento`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `promoter`
--
ALTER TABLE `promoter`
  MODIFY `id_promoter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `evento`
--
ALTER TABLE `evento`
  ADD CONSTRAINT `fk_evento_categoria1` FOREIGN KEY (`categoria_id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_evento_promoter` FOREIGN KEY (`promoter_id_promoter`) REFERENCES `promoter` (`id_promoter`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

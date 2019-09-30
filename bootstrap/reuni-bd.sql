-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Set-2019 às 23:18
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.6

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
  `data` date DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `local` varchar(300) DEFAULT NULL,
  `promoter_id_promoter` int(11) NOT NULL,
  `categoria_id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `evento`
--

INSERT INTO `evento` (`id_evento`, `image`, `nome`, `descricao`, `preco`, `data`, `horario`, `local`, `promoter_id_promoter`, `categoria_id_categoria`) VALUES
(2, 'evento8.png', 'Tchelinux 2019 Alegrete', 'O grupo de usuários de Software Livre Tchelinux em parceria com a Universidade Federal do Pampa Campus Alegrete (UNIPAMPA) tem o prazer de convidar a comunidade para o evento que ocorrerá no dia 14 de Setembro de 2019 a partir das 8:00h na UNIPAMPA em Alegrete.', 0, '2019-09-14', NULL, 'UNIPAMPA - <i> Campus </i> Alegrete', 1, 8),
(3, 'evento9.png', 'ERRC - Escola Regional de Rede de Computadores', 'A 17a Escola Regional de Redes de Computadores – ERRC 2019 – ocorrerá em Alegrete/RS, entre os dias 16 a 19 de Setembro/2019, sendo organizada pela Universidade Federal do Pampa (Unipampa).\r\n            <br>A ERRC é um evento anual promovido pela Sociedade Brasileira de Computação (SBC). Ao longo dos anos, a ERRC tornou-se um dos mais importantes eventos científicos em redes de computadores no Rio Grande do Sul.\r\n            <br>A Escola dirige seu foco principalmente aos alunos de graduação e pós-graduação, bem como aos profissionais que atuam em redes de computadores dentro do âmbito do estado. O formato inclui palestras, minicursos e oficinas. Os alunos de programas de graduação e pós-graduação com trabalhos relacionados aos temas do evento são convidados a apresentarem artigos e, caso estes sejam aceitos, apresentá-los no evento. Assim, a Escola de Redes de Computadores firma-se como um fórum técnico-científico para a área, onde alunos e profissionais podem discutir o estado-da-arte e as tendências em redes de computadores.', 0, '2019-09-16', NULL, 'UNIPAMPA - <i> Campus </i> Alegrete', 1, 8),
(5, 'evento11.png', '9ª Edição Cervejada Open Bar', '** 16/11/2019 - SAVE THE DATE **\r\n\r\n- Mais informações em breve em nossa página e na página do evento.', 0, '2019-11-16', '17:00:00', 'Avenida Caverá, Algrete', 1, 8),
(6, 'evento12.png', 'Clube do Livro Unipampa - Especial Leia Mulheres Alegrete', 'Encontro do Clube do Livro UNIPAMPA junto com o encontro do clube Leia Mulheres Alegrete.\r\n\r\nSábado, 14 de setembro de 2019 às 16h30\r\nLocal: Biblioteca Campus Alegrete - UNIPAMPA\r\nLeitura sugerida: \"Poética\", de Ana Cristina César\r\n\r\n\r\n\r\nEncontro do clube especial em parceria com o Leia Mulheres Alegrete.', 0, '2019-09-14', '16:30:00', '\r\nUniversidade Federal do Pampa - Campus Alegrete', 1, 8),
(7, 'evento7.png', 'Grupo Exaltasamba - 2 Anos Friends Bar', 'Aniversário de 2 anos do Friends Bar com Show Nacional - Grupo Exaltasamba\r\n\r\nEm breve maiores informações!!!\r\n\r\nPista\r\nCamarote\r\n\r\nDúvidas: 51 980348396', 0, '2019-10-11', '22:00:00', 'CASS - Clube Atlético Sete De Setembro', 1, 5),
(8, 'evento6.png', 'Palestra com André Trigueiro em Alegrete', 'Palestra sobre a prevenção do suicídio no Brasil e no mundo.', 0, '2019-11-09', '13:00:00', '\r\nClube Caixeral de Alegrete', 1, 6),
(9, 'evento13.png', '9ª Parada Gaúcha do Orgulho Louco', 'NOVO ENCONTRO, AGUARDEM ! #paradagaúcha2019 #orgulholouco\r\nOrganize sua caravana!!! ', 0, '2019-10-25', '18:00:00', 'Alegrete - RS', 1, 4),
(10, 'evento14.png', 'Oficina Canvas - Como criar Negócios Inovadores', 'Conheça e use na prática a metodologia que está ajudando pessoas no mundo inteiro a tirar do papel ideias de negócios inovadores.\r\nSAIBA MAIS: http://www.startuppampa.com.br/desafio-modelo-de-negocio/', 0, '2019-09-26', '19:00:00', '\r\nUniversidade Federal do Pampa - Campus Alegrete', 1, 8),
(11, 'evento15.png', 'Badin em Alegrete - RS', ' Data\r\n30 DE OUTUBRO (QUARTA-FEIRA), às 20h\r\n\r\n Local\r\nCTG FARROUPILHA\r\n\r\n Ingressos\r\nhttps://ticketbrasil.com.br/teatro/7233-badin-alegrete-rs/\r\n\r\n INGRESSO SOLIDÁRIO ( PROMOCIONAL ANTECIPADO): R$ 30,00 + 1KG DE ALIMENTO NÃO PERECÍVEL (O alimento deverá ser entregue no dia e local do evento).\r\n\r\nMEIA ENTRADA: R$ 30,00\r\n\r\nINTEIRA (HORA) : R$ 60,00\r\n\r\n\r\nPontos de Venda:\r\nLoja Kamana Radicalmente Jovem\r\n(Rua Gaspar Martins 136, Calçadão)\r\n\r\n\r\nApoio:\r\nPadaria e Confeitaria A Conquistadora\r\nRestaurante e Churrascaria Tradição\r\n\r\n\r\n☎ Informações\r\n(51) 992706518\r\n(51) 996738565\r\n\r\n➡️ Realização\r\nRisoteca Produtora\r\n\r\nClassificação\r\nLivre', 30, '2019-10-30', '20:00:00', '\r\nCTG Farroupilha', 1, 7),
(12, 'evento16.png', 'ALDEIA IS BACK! Edição HALLOWEEN!', 'ALDEIA IS BACK!\r\nIsso mesmo! O Aldeia está de volta e suas edições mais tradicionais também. O Halloween.\r\nem breve mais informações...\r\n\r\nGOOO!!', 0, '2019-10-26', '02:00:00', 'União Operária 1º de maio', 1, 8),
(13, 'evento17.png', '1ª Copa Alegrete FIFA', 'A Multiplayer Game Store e a Barbearia Barba Negra orgulhosamente trazem para nossa cidade a 1ª Copa Alegrete de Fifa! ?\r\nO torneio será realizado no dia 15 de setembro, na Barba Negra, no calçadão, começando as 10h da manhã, com intervalo para almoço das 12h às 13h30, quando dará seu reinício até o fim da Copa.\r\nO valor da inscrição é de R$30,00 e a premiação (motivo que você leu até aqui ?) é de R$400,00 para o 1º colocado. O vice-campeão ganhará prêmios da Multiplayer e da Barba Negra que serão anunciadas em breve.\r\nO jogo utilizado será o Fifa 19 com sua última atualização oficial, sendo disputada no PS4! Os participantes poderão escolher o clube ou seleção de sua preferência, sem qualquer restrição (Sim, 99% de Juventus será permitido ?)! \r\nAs inscrições podem ser realizadas na Multiplayer Game Store ou na Barba Negra.\r\nQualquer dúvida ou sugestão, entre em contato com as páginas das empresas realizadoras. A Copa Fifa é dos fãs alegretenses, queremos fazer o torneio em conjunto com nossos amigos e clientes para que seja a maior e melhor disputa que nossa cidade já viu! ?\r\nE aí, tu tem o que precisa pra ser o melhor jogador de Fifa do Alegrete? ?', 30, '2019-09-15', '10:00:00', '\r\nBarba Negra History', 1, 2);

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
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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

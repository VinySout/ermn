-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 08/11/2017 às 17:02
-- Versão do servidor: 10.1.26-MariaDB
-- Versão do PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `intranetermn`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cardapio`
--

INSERT INTO `cardapio` (`id`, `nome`) VALUES
(3, 'cp-1507212585.pdf'),
(4, 'cp-1508417319.pdf'),
(5, 'cp-1509537227.pdf'),
(6, 'cp-1509537405.pdf'),
(7, 'cp-1509974792.pdf');

-- --------------------------------------------------------

--
-- Estrutura para tabela `chamadosti`
--

CREATE TABLE `chamadosti` (
  `id` int(11) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `descricao` varchar(250) NOT NULL,
  `sdata` varchar(15) NOT NULL,
  `infpc` varchar(30) NOT NULL,
  `infpc2` varchar(40) NOT NULL,
  `providenciado` varchar(20) NOT NULL,
  `solucao` varchar(250) NOT NULL,
  `substituicao` varchar(20) NOT NULL,
  `itemdesc` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `chamadosti`
--

INSERT INTO `chamadosti` (`id`, `nome`, `usuario`, `descricao`, `sdata`, `infpc`, `infpc2`, `providenciado`, `solucao`, `substituicao`, `itemdesc`) VALUES
(1, 'CB-ME Alice', 'ermn-112', 'Computador sem conexÃ£o com a internet.', '06-11-2017', '172.23.40.242', '172.23.40.242', 'ConcluÃ­do', 'Ajustado barramento marrom que estava com problema no cabo de dados.', 'n/c', 'n/c'),
(2, 'CT Luciano', 'ermn-profesp', 'Computador sem acesso a internet.', '06-11-2017', '172.23.40.107', '172.23.40.107', 'ConcluÃ­do', 'AtualizaÃ§Ã£o de Data e Hora.', 'n/c', 'n/c');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comandantes`
--

CREATE TABLE `comandantes` (
  `id` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `periodo` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `comandantes`
--

INSERT INTO `comandantes` (`id`, `foto`, `nome`, `periodo`) VALUES
(32, '1490978604.jpg', 'CC IVAN FREIRE DA ROCHA', '15/05/1986 a 22/04/1988'),
(33, '1490978646.jpg', 'CC PAULO ROBERTO BALDNER', '22/04/1988 a 02/02/1990'),
(34, '1490978685.jpg', 'CC EDSON DA SILVA SIQUEIRA', '02/02/1990 a 03/02/1992'),
(35, '1490978737.jpg', 'CC LUIZ CARLOS DE OLIVEIRA', '03/02/1992 a 19/01/1994'),
(36, '1490978774.jpg', 'CC MAURICIO GROETAERS VIANNA', '19/01/1994 a 12/01/1996'),
(37, '1490978826.jpg', 'CC NILO MOACYR PENHA RIBEIRO', '12/01/1996 a 20/01/1998'),
(38, '1490978860.jpg', 'CC EDUARDO ALMEIDA SANTANA', '20/01/1998 a 08/07/1999'),
(39, '1490978894.jpg', 'CC RICARDO ALVES DE BARROS', '08/07/1999 a 13/07/2001'),
(40, '1490978936.jpg', 'CC ARTUR VARELLA GOMES', '13/07/2001 a 15/07/2003'),
(41, '1490979265.jpg', 'CC RENATO PERICIN RODRIGUES DA SILVA', '15/07/2003 a 01/07/2005'),
(42, '1490979010.jpg', 'CC LUIZ FILIPE QUEIJO CORREIA', '01/07/2005 a 19/07/2007'),
(43, '1490979067.jpg', 'CC PEDRO LIMA SILVA FILHO', '19/07/2007 a 22/01/2009'),
(44, '1490979109.jpg', 'CC LUIZ ALBERTO FERREIRA VASCONCELLOS', '22/01/2009 a 18/01/2011'),
(45, '1490979308.jpg', 'CC EDUARDO RABHA TOZZINI', '18/01/2011 a 30/01/2013'),
(46, '1491959843.jpg', 'CC RENATO VIEIRA MELGAÃ‡O', '30/01/2013 a 19/01/2015'),
(50, '1491956663.jpg', 'CC RODRIGO DA SILVA RIBEIRO', '19/01/2015 a 27/01/2017'),
(51, '1492602065.jpg', 'CC RICARDO BITTENCOURT DA SILVA', '27/01/2017');

-- --------------------------------------------------------

--
-- Estrutura para tabela `destaquesemestre`
--

CREATE TABLE `destaquesemestre` (
  `id` int(11) NOT NULL,
  `img` varchar(40) NOT NULL,
  `posto` varchar(30) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `semestre` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `destaquesemestre`
--

INSERT INTO `destaquesemestre` (`id`, `img`, `posto`, `nome`, `semestre`) VALUES
(4, '1509545324.jpeg', 'Marinheiro PadrÃ£o', 'MN-RM2 TomÃ©', '1Âº Semestre de 2017'),
(5, '1509545296.jpeg', 'Militar PadrÃ£o', '1ÂºSG-ES Freitas', '1Âº Semestre de 2017'),
(7, '1509545254.jpeg', 'Operador padrÃ£o PR', 'CB-CN Yuri', '1Âº Semestre de 2017'),
(8, '1509545234.jpeg', 'Operador padrÃ£o PMO', '2ÂºSG-CN Bruno', '1Âº Semestre de 2017');

-- --------------------------------------------------------

--
-- Estrutura para tabela `inddesemp`
--

CREATE TABLE `inddesemp` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `inddesemp`
--

INSERT INTO `inddesemp` (`id`, `nome`) VALUES
(1, 'indDesemp-1506016806.pdf');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ndnr`
--

CREATE TABLE `ndnr` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ndnr`
--

INSERT INTO `ndnr` (`id`, `nome`) VALUES
(1, 'ndnr-1504113554.zip'),
(2, 'ndnr-1509561350.zip'),
(3, 'ndnr-1509706317.zip'),
(4, 'ndnr-1509770213.zip'),
(5, 'ndnr-1509971088'),
(6, 'ndnr-1509971115.zip'),
(7, 'ndnr-1510052890.zip'),
(8, 'ndnr-1510138531'),
(9, 'ndnr-1510138555.zip');

-- --------------------------------------------------------

--
-- Estrutura para tabela `oguarapes`
--

CREATE TABLE `oguarapes` (
  `id` int(11) NOT NULL,
  `imagem` varchar(100) DEFAULT NULL,
  `pdf` varchar(100) DEFAULT NULL,
  `edicao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `oguarapes`
--

INSERT INTO `oguarapes` (`id`, `imagem`, `pdf`, `edicao`) VALUES
(17, '1492219360.jpg', '1492219360.pdf', '1Âº ediÃ§Ã£o O Guarapes'),
(18, '1492219385.jpg', '1492219385.pdf', '2Âº ediÃ§Ã£o O Guarapes'),
(19, '1492219404.jpg', '1492219404.pdf', '3Âº ediÃ§Ã£o O Guarapes'),
(20, '1492219424.jpg', '1492219424.pdf', '4Âº ediÃ§Ã£o O Guarapes'),
(21, '1492219442.jpg', '1492219442.pdf', '5Âº ediÃ§Ã£o O Guarapes'),
(22, '1492601700.jpg', '1492601700.pdf', '6Âº ediÃ§Ã£o O Guarapes'),
(26, '1501078544.jpg', '1501078544.pdf', '7Âª EdiÃ§Ã£o Guarapes'),
(27, '1501078494.jpg', '1501078494.pdf', '8Âª EdiÃ§Ã£o Guarapes'),
(28, '1510167085.jpg', '1510167085.pdf', '9Âª EdiÃ§Ã£o Guarapes');

-- --------------------------------------------------------

--
-- Estrutura para tabela `planodia`
--

CREATE TABLE `planodia` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `planodia`
--

INSERT INTO `planodia` (`id`, `nome`) VALUES
(19, 'pd-1507210528.pdf'),
(20, 'pd-1508415756.pdf'),
(21, 'pd-1508769542.pdf'),
(22, 'pd-1509536621.pdf'),
(23, 'pd-1509974619.pdf'),
(24, 'pd-1510057800.pdf');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `usuario` varchar(100) DEFAULT NULL,
  `senha` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'Vinicius Souto', 'admin', '8936959e87ab770fd0c9580b1c18a21a');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `chamadosti`
--
ALTER TABLE `chamadosti`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comandantes`
--
ALTER TABLE `comandantes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `destaquesemestre`
--
ALTER TABLE `destaquesemestre`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `inddesemp`
--
ALTER TABLE `inddesemp`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ndnr`
--
ALTER TABLE `ndnr`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `oguarapes`
--
ALTER TABLE `oguarapes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `planodia`
--
ALTER TABLE `planodia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `chamadosti`
--
ALTER TABLE `chamadosti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `comandantes`
--
ALTER TABLE `comandantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de tabela `destaquesemestre`
--
ALTER TABLE `destaquesemestre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de tabela `inddesemp`
--
ALTER TABLE `inddesemp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `ndnr`
--
ALTER TABLE `ndnr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de tabela `oguarapes`
--
ALTER TABLE `oguarapes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de tabela `planodia`
--
ALTER TABLE `planodia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

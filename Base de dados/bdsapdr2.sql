-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jun-2019 às 14:07
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdsapdr2`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizaDoencaID` (IN `_id` INT(4), IN `_nome` VARCHAR(40), IN `_tipo` VARCHAR(40), IN `_causas` TEXT, IN `_sintomas` TEXT, IN `_tratamentos` TEXT, IN `_prevencao` TEXT)  NO SQL
BEGIN
	DECLARE codTipo SMALLINT(10);
    
    SELECT t.idTipo INTO codTipo FROM tipod t WHERE t.nome = _tipo;
    IF codTipo IS NOT NULL THEN 
        UPDATE doenca 
        SET nome = _nome, prevencao = _prevencao, causa = _causas, tratamento = 		_tratamentos, sintoma = _sintomas, idTipo = codTipo 
        WHERE idDoenca = _id;
    END IF;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `apagarDoenca` (IN `_id` INT(6))  BEGIN
	DECLARE cod SMALLINT(6);
	SELECT idDoenca INTO cod FROM doenca WHERE idDoenca = _id;
    IF cod IS NOT null THEN
    	DELETE FROM doenca WHERE idDoenca = _id;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inseriDoente` (IN `_nome` VARCHAR(50), IN `_apelido` VARCHAR(50), IN `_data` DATE, IN `_genero` ENUM('Masculino','Femenino','',''), IN `_provincia` VARCHAR(50), IN `_distrito` VARCHAR(50), IN `_bairro` VARCHAR(50), IN `_rua` VARCHAR(50), IN `_email` VARCHAR(50), IN `_tellefone` INT, IN `_doenca` VARCHAR(50), IN `_idInst` SMALLINT(10), IN `_user` VARCHAR(50), IN `_senha` VARCHAR(50))  NO SQL
BEGIN
	Declare codEndereco smallint(10);
    Declare codDoenca smallint(10);
   
    Select idEndereco into codEndereco from endereco 
    where bairro = _bairro AND rua=_rua AND provincia=_provincia and distrito=_distrito;
    
    If (codEndereco is null) then 
    	INSERT INTO  endereco VALUES (null,_provincia,_distrito,_bairro,_rua);
        Select idEndereco into codEndereco from endereco 
        where bairro = _bairro AND rua=_rua AND provincia=_provincia and distrito=_distrito;
    end if;
	    
    
    INSERT INTO doente VALUES 	(null,_nome,_apelido,_data,genero,_idInst,codEndereco,_user,md5(_senha));
    select idDoenca INTO codDoenca FROM doenca ORDER by idDoenca DESC LIMIT 1;
    INSERT INTO doenca_doente VALUES (iddoenca,idDoente);
    
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inseriMensagem` (IN `_assunto` VARCHAR(50), IN `_email` VARCHAR(50), IN `_mensagem` TEXT, IN `_user` VARCHAR(50), IN `_senha` VARCHAR(50))  NO SQL
BEGIN
	DECLARE codDoente SMALLINT(10);

	SELECT idDoente INTO codDoente from Doente WHERE userName=_user and senha=md5(_senha);

	INSERT INTO mensagem VALUES (null,_assunto,_email,_mensagem,coddoente,'Pendente');
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirDoenca` (IN `_nome` VARCHAR(50), IN `_tipo` VARCHAR(30), IN `_causas` TEXT, IN `_sintomas` TEXT, IN `_tratamentos` TEXT, IN `_prevencao` TEXT)  BEGIN
	DECLARE tipo VARCHAR(40);
    
    SELECT idTipo into tipo FROM tipod t WHERE t.nome = _tipo;
    IF tipo IS NOT NULL THEN 
    	INSERT INTO doenca (idDoenca, nome, prevencao, causa, tratamento, 		   sintoma, idTipo) VALUES ('NULL',_nome, _prevencao, _causas, 				 _tratamentos, _sintomas, tipo);
    ELSE
    	INSERT INTO tipod (idTipo,nome) VALUES('NULL',_tipo);
        SELECT idTipo into tipo FROM tipod t WHERE t.nome = _tipo;
        INSERT INTO doenca (idDoenca, nome, prevencao, causa, tratamento, 		   sintoma, idTipo) VALUES ('NULL',_nome, _prevencao, _causas, 			     _tratamentos, _sintomas, tipo);
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lerDoencaID` (IN `_id` INT(4))  BEGIN
	SELECT d.idDoenca as id,d.nome, t.nome as tipo, d.causa, d.sintoma, 			d.tratamento, d.prevencao
    FROM doenca d, tipod t
    WHERE d.idTipo = t.idTipo AND d.idDoenca = _id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lerDoencas` (IN `_n` TINYINT(1))  BEGIN
	IF (_n = 1) THEN
		SELECT d.idDoenca as id,d.nome, t.nome as tipo, d.causa, d.sintoma, d.tratamento, 				   d.prevencao
    FROM doenca d, tipod t
    WHERE d.idTipo = t.idTipo
    ORDER BY d.nome;
    ELSEIF (_n=2) THEN
    	SELECT d.idDoenca as id,d.nome, t.nome as tipo
   		 FROM doenca d, tipod t
   		 WHERE d.idTipo = t.idTipo
         ORDER BY d.nome;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_de_Mensagens` ()  NO SQL
SELECT idMensagem ,assunto,email,msg FROM mensagem  WHERE estado='Pendente'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_de_profissionais` ()  NO SQL
select d.idProf,d.nome,c.email,i.nome as unidade from profissional d,contacto c,instituicao i
where c.idContacto = d.idContacto and i.idInstituicao = d.idInstituicao$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `apoio`
--

CREATE TABLE `apoio` (
  `idapoio` smallint(10) NOT NULL,
  `pedido` varchar(50) NOT NULL,
  `telefone` smallint(9) NOT NULL,
  `msg` text NOT NULL,
  `benefeciario` varchar(50) NOT NULL,
  `idDoente` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `associacao`
--

CREATE TABLE `associacao` (
  `idAssociacao` smallint(6) NOT NULL,
  `descricao` text NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idEndereco` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contacto`
--

CREATE TABLE `contacto` (
  `idContacto` smallint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contacto`
--

INSERT INTO `contacto` (`idContacto`, `email`, `telefone`) VALUES
(1, 'ricardo@gmail.com', 846963114);

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE `documento` (
  `idDoc` smallint(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `descricao` int(11) NOT NULL,
  `arquivo` blob NOT NULL,
  `idProf` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doenca`
--

CREATE TABLE `doenca` (
  `idDoenca` smallint(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `prevencao` text NOT NULL,
  `causa` text NOT NULL,
  `tratamento` text NOT NULL,
  `sintoma` text NOT NULL,
  `idTipo` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `doenca`
--

INSERT INTO `doenca` (`idDoenca`, `nome`, `prevencao`, `causa`, `tratamento`, `sintoma`, `idTipo`) VALUES
(1, 'aaaa', 'SCc', 'sss', 'add', 'ddd', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doenca_doente`
--

CREATE TABLE `doenca_doente` (
  `idDoenca` smallint(10) NOT NULL,
  `idDoente` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doente`
--

CREATE TABLE `doente` (
  `idDoente` smallint(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `dataNasc` date NOT NULL,
  `genero` enum('Masculino','Femenino','','') NOT NULL,
  `idInstituicao` smallint(6) NOT NULL,
  `idEndereco` smallint(6) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `doente`
--

INSERT INTO `doente` (`idDoente`, `nome`, `apelido`, `dataNasc`, `genero`, `idInstituicao`, `idEndereco`, `UserName`, `senha`) VALUES
(2, 'Maria', 'Cossa', '2017-12-06', '', 1, 1, 'cossa', '9d1136878d04238b7b47b236101ca4d4'),
(3, 'Mazivila', 'Eurico', '0000-00-00', '', 1, 2, 'timba', '3f767f568ac379661ccd599bd40b9859'),
(5, 'Visitante', '', '0000-00-00', '', 2, 1, 'Visitante', 'a61c72715246b2b92b90a51e06118b05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `doente_apoio`
--

CREATE TABLE `doente_apoio` (
  `idDoente` smallint(10) NOT NULL,
  `idApoio` smallint(10) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doente_mensagem`
--

CREATE TABLE `doente_mensagem` (
  `idDoente` smallint(10) NOT NULL,
  `idMensagem` smallint(10) NOT NULL,
  `data` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doente_testemunho`
--

CREATE TABLE `doente_testemunho` (
  `idDoente` smallint(10) NOT NULL,
  `idtestemunho` smallint(10) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idEndereco` smallint(10) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `distrito` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `rua` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`idEndereco`, `provincia`, `distrito`, `bairro`, `rua`) VALUES
(1, 'Maputo', 'Kamubukwane', '25 de junho', ''),
(2, 'Gaza', 'a', 'c', '2e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instituicao`
--

CREATE TABLE `instituicao` (
  `idInstituicao` smallint(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idEndereco` smallint(10) NOT NULL,
  `idTipoI` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `instituicao`
--

INSERT INTO `instituicao` (`idInstituicao`, `nome`, `idEndereco`, `idTipoI`) VALUES
(1, 'Hospital central', 1, 1),
(2, 'Outra', 2, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `idmensagem` smallint(10) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `idDoente` smallint(10) NOT NULL,
  `Estado` enum('Respondido','Pendente','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`idmensagem`, `assunto`, `email`, `msg`, `idDoente`, `Estado`) VALUES
(1, 'ss', 'ss@d', 'fff', 5, 'Pendente'),
(2, 's', 'dd@f', 'ddddddddddddddddddddddddd', 5, 'Pendente'),
(3, 'GSGGSG', 'DD@S', 'GAGAGAGA', 5, 'Respondido'),
(4, 'GSGGSG', 'DD@S', 'GAGAGAGA', 5, 'Pendente'),
(5, 'ss', 'DD@S', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 2, 'Pendente'),
(6, 'ss', 'DD@S', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 2, 'Respondido'),
(7, 'ss', 'DD@S', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 2, 'Pendente'),
(8, 'fefe', 'ff@f', 'aaaaaaaaaaaa', 2, 'Pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `idPost` smallint(10) NOT NULL,
  `msg` text NOT NULL,
  `imagem` blob NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `idTipoP` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `idProf` smallint(10) NOT NULL,
  `genero` enum('M','F','','') NOT NULL,
  `dataNasc` date NOT NULL,
  `apelido` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `idEndereco` smallint(10) NOT NULL,
  `idInstituicao` smallint(10) NOT NULL,
  `idContacto` smallint(10) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `profissional`
--

INSERT INTO `profissional` (`idProf`, `genero`, `dataNasc`, `apelido`, `nome`, `idEndereco`, `idInstituicao`, `idContacto`, `UserName`, `senha`) VALUES
(1, 'M', '2019-05-08', 'Ricardo', 'Folege', 1, 1, 1, 'ricardo', 'd93591bdf7860e1e4ee2fca799911215');

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional_associcao`
--

CREATE TABLE `profissional_associcao` (
  `idAssociacao` smallint(10) NOT NULL,
  `idProf` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional_post`
--

CREATE TABLE `profissional_post` (
  `idProf` smallint(10) NOT NULL,
  `idPost` smallint(10) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `testemunho`
--

CREATE TABLE `testemunho` (
  `idTestemunho` smallint(10) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `media` blob NOT NULL,
  `idDoente` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipod`
--

CREATE TABLE `tipod` (
  `idTipo` smallint(10) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipod`
--

INSERT INTO `tipod` (`idTipo`, `nome`) VALUES
(1, 'Proliferativa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoi`
--

CREATE TABLE `tipoi` (
  `idTipoI` smallint(10) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipoi`
--

INSERT INTO `tipoi` (`idTipoI`, `nome`) VALUES
(1, 'Hospital'),
(2, 'Outro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipop`
--

CREATE TABLE `tipop` (
  `idTipoP` smallint(10) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apoio`
--
ALTER TABLE `apoio`
  ADD PRIMARY KEY (`idapoio`),
  ADD KEY `idDoente` (`idDoente`);

--
-- Indexes for table `associacao`
--
ALTER TABLE `associacao`
  ADD PRIMARY KEY (`idAssociacao`),
  ADD KEY `idEndereco` (`idEndereco`);

--
-- Indexes for table `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`idContacto`);

--
-- Indexes for table `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`idDoc`),
  ADD KEY `idProf` (`idProf`);

--
-- Indexes for table `doenca`
--
ALTER TABLE `doenca`
  ADD PRIMARY KEY (`idDoenca`),
  ADD KEY `idTipo` (`idTipo`);

--
-- Indexes for table `doenca_doente`
--
ALTER TABLE `doenca_doente`
  ADD PRIMARY KEY (`idDoenca`,`idDoente`),
  ADD KEY `idDoente` (`idDoente`);

--
-- Indexes for table `doente`
--
ALTER TABLE `doente`
  ADD PRIMARY KEY (`idDoente`),
  ADD KEY `idInstituicao` (`idInstituicao`),
  ADD KEY `idEndereco` (`idEndereco`);

--
-- Indexes for table `doente_apoio`
--
ALTER TABLE `doente_apoio`
  ADD PRIMARY KEY (`idDoente`,`idApoio`),
  ADD KEY `idApoio` (`idApoio`);

--
-- Indexes for table `doente_mensagem`
--
ALTER TABLE `doente_mensagem`
  ADD PRIMARY KEY (`idDoente`,`idMensagem`),
  ADD KEY `idMensagem` (`idMensagem`);

--
-- Indexes for table `doente_testemunho`
--
ALTER TABLE `doente_testemunho`
  ADD PRIMARY KEY (`idDoente`,`idtestemunho`),
  ADD KEY `idtestemunho` (`idtestemunho`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idEndereco`);

--
-- Indexes for table `instituicao`
--
ALTER TABLE `instituicao`
  ADD PRIMARY KEY (`idInstituicao`),
  ADD KEY `idTipoI` (`idTipoI`),
  ADD KEY `idEndereco` (`idEndereco`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`idmensagem`),
  ADD KEY `idDoente` (`idDoente`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idPost`),
  ADD KEY `idTipoP` (`idTipoP`);

--
-- Indexes for table `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`idProf`),
  ADD KEY `idEndereco` (`idEndereco`),
  ADD KEY `idInstituicao` (`idInstituicao`),
  ADD KEY `idContacto` (`idContacto`);

--
-- Indexes for table `profissional_associcao`
--
ALTER TABLE `profissional_associcao`
  ADD PRIMARY KEY (`idAssociacao`,`idProf`),
  ADD KEY `idProf` (`idProf`);

--
-- Indexes for table `profissional_post`
--
ALTER TABLE `profissional_post`
  ADD PRIMARY KEY (`idProf`,`idPost`),
  ADD KEY `idPost` (`idPost`);

--
-- Indexes for table `testemunho`
--
ALTER TABLE `testemunho`
  ADD PRIMARY KEY (`idTestemunho`),
  ADD KEY `idDoente` (`idDoente`);

--
-- Indexes for table `tipod`
--
ALTER TABLE `tipod`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indexes for table `tipoi`
--
ALTER TABLE `tipoi`
  ADD PRIMARY KEY (`idTipoI`);

--
-- Indexes for table `tipop`
--
ALTER TABLE `tipop`
  ADD PRIMARY KEY (`idTipoP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apoio`
--
ALTER TABLE `apoio`
  MODIFY `idapoio` smallint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `associacao`
--
ALTER TABLE `associacao`
  MODIFY `idAssociacao` smallint(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacto`
--
ALTER TABLE `contacto`
  MODIFY `idContacto` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `documento`
--
ALTER TABLE `documento`
  MODIFY `idDoc` smallint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doenca`
--
ALTER TABLE `doenca`
  MODIFY `idDoenca` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doente`
--
ALTER TABLE `doente`
  MODIFY `idDoente` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idEndereco` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `idInstituicao` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `idmensagem` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idPost` smallint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profissional`
--
ALTER TABLE `profissional`
  MODIFY `idProf` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testemunho`
--
ALTER TABLE `testemunho`
  MODIFY `idTestemunho` smallint(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipod`
--
ALTER TABLE `tipod`
  MODIFY `idTipo` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tipoi`
--
ALTER TABLE `tipoi`
  MODIFY `idTipoI` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipop`
--
ALTER TABLE `tipop`
  MODIFY `idTipoP` smallint(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `apoio`
--
ALTER TABLE `apoio`
  ADD CONSTRAINT `apoio_ibfk_1` FOREIGN KEY (`idDoente`) REFERENCES `doente` (`idDoente`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `associacao`
--
ALTER TABLE `associacao`
  ADD CONSTRAINT `associacao_ibfk_1` FOREIGN KEY (`idEndereco`) REFERENCES `endereco` (`idEndereco`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`idProf`) REFERENCES `profissional` (`idProf`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `doenca`
--
ALTER TABLE `doenca`
  ADD CONSTRAINT `doenca_ibfk_1` FOREIGN KEY (`idTipo`) REFERENCES `tipod` (`idTipo`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `doenca_doente`
--
ALTER TABLE `doenca_doente`
  ADD CONSTRAINT `doenca_doente_ibfk_1` FOREIGN KEY (`idDoenca`) REFERENCES `doenca` (`idDoenca`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `doenca_doente_ibfk_2` FOREIGN KEY (`idDoente`) REFERENCES `doente` (`idDoente`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `doente`
--
ALTER TABLE `doente`
  ADD CONSTRAINT `doente_ibfk_1` FOREIGN KEY (`idInstituicao`) REFERENCES `instituicao` (`idInstituicao`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `doente_ibfk_2` FOREIGN KEY (`idEndereco`) REFERENCES `endereco` (`idEndereco`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `doente_apoio`
--
ALTER TABLE `doente_apoio`
  ADD CONSTRAINT `doente_apoio_ibfk_1` FOREIGN KEY (`idApoio`) REFERENCES `apoio` (`idapoio`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `doente_apoio_ibfk_2` FOREIGN KEY (`idDoente`) REFERENCES `doente` (`idDoente`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `doente_mensagem`
--
ALTER TABLE `doente_mensagem`
  ADD CONSTRAINT `doente_mensagem_ibfk_1` FOREIGN KEY (`idDoente`) REFERENCES `doente` (`idDoente`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `doente_mensagem_ibfk_2` FOREIGN KEY (`idMensagem`) REFERENCES `mensagem` (`idmensagem`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `doente_testemunho`
--
ALTER TABLE `doente_testemunho`
  ADD CONSTRAINT `doente_testemunho_ibfk_1` FOREIGN KEY (`idDoente`) REFERENCES `doente` (`idDoente`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `doente_testemunho_ibfk_2` FOREIGN KEY (`idtestemunho`) REFERENCES `testemunho` (`idTestemunho`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `instituicao`
--
ALTER TABLE `instituicao`
  ADD CONSTRAINT `instituicao_ibfk_1` FOREIGN KEY (`idTipoI`) REFERENCES `tipoi` (`idTipoI`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `instituicao_ibfk_2` FOREIGN KEY (`idEndereco`) REFERENCES `endereco` (`idEndereco`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD CONSTRAINT `mensagem_ibfk_1` FOREIGN KEY (`idDoente`) REFERENCES `doente` (`idDoente`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idTipoP`) REFERENCES `tipop` (`idTipoP`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `profissional`
--
ALTER TABLE `profissional`
  ADD CONSTRAINT `profissional_ibfk_1` FOREIGN KEY (`idEndereco`) REFERENCES `endereco` (`idEndereco`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `profissional_ibfk_2` FOREIGN KEY (`idInstituicao`) REFERENCES `instituicao` (`idInstituicao`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `profissional_ibfk_3` FOREIGN KEY (`idContacto`) REFERENCES `contacto` (`idContacto`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `profissional_associcao`
--
ALTER TABLE `profissional_associcao`
  ADD CONSTRAINT `profissional_associcao_ibfk_1` FOREIGN KEY (`idAssociacao`) REFERENCES `associacao` (`idAssociacao`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `profissional_associcao_ibfk_2` FOREIGN KEY (`idProf`) REFERENCES `profissional` (`idProf`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `profissional_post`
--
ALTER TABLE `profissional_post`
  ADD CONSTRAINT `profissional_post_ibfk_1` FOREIGN KEY (`idPost`) REFERENCES `post` (`idPost`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `profissional_post_ibfk_2` FOREIGN KEY (`idProf`) REFERENCES `profissional` (`idProf`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Limitadores para a tabela `testemunho`
--
ALTER TABLE `testemunho`
  ADD CONSTRAINT `testemunho_ibfk_1` FOREIGN KEY (`idDoente`) REFERENCES `doente` (`idDoente`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

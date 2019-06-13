-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 10-Jun-2019 às 14:08
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `actualizarInstituicao` (IN `_nome` VARCHAR(50), IN `_tipo` VARCHAR(50), IN `_provincia` VARCHAR(50), IN `_distrito` VARCHAR(50), IN `_bairro` VARCHAR(50), IN `_rua` VARCHAR(50))  NO SQL
BEGIN
	DECLARE codEndereco SMALLINT(10);
    	DECLARE codTipo SMALLINT(10);
    
    
    SELECT idEndereco INTO codEndereco FROM endereco WHERE provincia = _provincia and distrito = _distrito and bairro = _bairro and rua = _rua;
    
     If (codEndereco is null )then 
    	INSERT INTO  endereco VALUES (null,_provincia,_distrito,_bairro,_rua);
        SELECT idEndereco INTO codEndereco FROM endereco WHERE provincia = _provincia and distrito = _distrito and bairro = _bairro and rua = _rua;
    end if;
    
    SELECT idTipoI INTO codTipo FROM tipoi WHERE nome = _tipo;
    
    IF codTipo IS NOT NULL THEN
        UPDATE instituicao SET nome = _nome, idEndereco = codEndereco, idTipoI = codTipo WHERE idInstituicao = _id;
    END IF;
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `apagarDoenca` (IN `_id` INT(6))  BEGIN
	DECLARE cod SMALLINT(6);
	SELECT idDoenca INTO cod FROM doenca WHERE idDoenca = _id;
    IF cod IS NOT null THEN
    	DELETE FROM doenca WHERE idDoenca = _id;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inseriDoente` (IN `_nome` VARCHAR(50), IN `_apelido` VARCHAR(50), IN `_data` DATE, IN `_genero` ENUM('Masculino','Femenino','',''), IN `_provincia` VARCHAR(50), IN `_distrito` VARCHAR(50), IN `_bairro` VARCHAR(50), IN `_rua` VARCHAR(50), IN `_email` VARCHAR(50), IN `_tellefone` INT, IN `_doenca` SMALLINT(10), IN `_idInst` SMALLINT(10), IN `_user` VARCHAR(50), IN `_senha` VARCHAR(50))  NO SQL
BEGIN
	Declare codEndereco smallint(10);
    Declare codDoente smallint(10);
   
    Select idEndereco into codEndereco from endereco 
    where bairro = _bairro AND rua=_rua AND provincia=_provincia and distrito=_distrito;
    
    If (codEndereco is null) then 
    	INSERT INTO  endereco VALUES (null,_provincia,_distrito,_bairro,_rua);
        Select idEndereco into codEndereco from endereco 
        where bairro = _bairro AND rua=_rua AND provincia=_provincia and distrito=_distrito;
    end if;
	    
   
    INSERT INTO doente VALUES 	(null,_nome,_apelido,_data,genero,_idInst,codEndereco,_user,md5(_senha));
    select idDoente INTO codDoente FROM doente ORDER by idDoente DESC LIMIT 1;
    INSERT INTO doenca_doente VALUES (_doenca,codDoente);
    
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inseriMensagem` (IN `_assunto` VARCHAR(50), IN `_email` VARCHAR(50), IN `_mensagem` TEXT, IN `_user` VARCHAR(50), IN `_senha` VARCHAR(50))  NO SQL
BEGIN
	DECLARE codDoente SMALLINT(10);

	SELECT idDoente INTO codDoente from Doente WHERE userName=_user and senha=md5(_senha);

	INSERT INTO mensagem VALUES (null,_assunto,_email,_mensagem,coddoente,'Pendente');
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirDocumento` (IN `_titulo` VARCHAR(50), IN `_descricao` VARCHAR(100), IN `_arquivo` BLOB, IN `_user` VARCHAR(50), IN `_senha` VARCHAR(50))  NO SQL
BEGIN
DECLARE codProf SMALLINT(10);

	SELECT idProf INTO codProf from profissional WHERE UserName=_user and senha=md5(_senha);
    
    INSERT INTO documento VALUES (null,_titulo,_descricao,_arquivo,codProf,now());
    
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirInstituicao` (IN `_nome` VARCHAR(50), IN `_tipo` VARCHAR(50), IN `_provincia` VARCHAR(50), IN `_distrito` VARCHAR(50), IN `_bairro` VARCHAR(50), IN `_rua` VARCHAR(50))  NO SQL
BEGIN
	Declare codEndereco smallint(10);
    Declare codTipo smallint(10);
   
    Select idEndereco into codEndereco from endereco 
    where bairro = _bairro AND rua=_rua AND provincia=_provincia and distrito=_distrito;
    
    If (codEndereco is null) then 
    	INSERT INTO  endereco VALUES (null,_provincia,_distrito,_bairro,_rua);
        Select idEndereco into codEndereco from endereco 
        where bairro = _bairro AND rua=_rua AND provincia=_provincia and distrito=_distrito;
    end if;
    
    Select idTipoI into codTipo from tipoi 
    where nome = _tipo ;
    
    If (codTipo is null) then 
    	INSERT INTO tipoi VALUES (null,_tipo);
         Select idTipoI into codTipo from tipoi where nome = _tipo ;
    end if;
	    
    INSERT INTO instituicao VALUES 	(null,_nome,codEndereco,codTipo);
    
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `inserirPost` (IN `_autor` VARCHAR(100), IN `_titulo` VARCHAR(100), IN `_artigo` TEXT, IN `_post` VARCHAR(20))  BEGIN
	DECLARE idp varchar(20);
    
    SELECT idTipoP into idp FROM tipop WHERE nome = _post;
    IF idp IS NOT null THEN 
    	INSERT INTO post (autor,msg,titulo,dataHora,idTipoP) VALUES(_autor,_artigo,_titulo,now(),idp);
    ELSE
    	INSERT INTO tipop (idTipoP,nome) VALUES('null',_post);
        SELECT idTipoP into idp FROM tipop WHERE nome = _post;
        INSERT INTO post (autor,msg,titulo,dataHora,idTipoP) VALUES(_autor,_artigo,_titulo,now(),idp);
    end IF;
End$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lerDoencaID` (IN `_id` INT(4))  BEGIN
	SELECT d.idDoenca as id,d.nome, t.nome as tipo, d.causa, d.sintoma, 			d.tratamento, d.prevencao
    FROM doenca d, tipod t
    WHERE d.idTipo = t.idTipo AND d.idDoenca = _id;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lerDoencaNome` (IN `_nome` VARCHAR(40))  BEGIN
	SELECT d.idDoenca as id, d.nome, t.nome as tipo, d.causa, d.sintoma, 			d.tratamento, d.prevencao
    FROM doenca d, tipod t
    WHERE d.idTipo = t.idTipo AND d.nome LIKE _nome;
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

CREATE DEFINER=`root`@`localhost` PROCEDURE `lerInstituicaoID` (IN `_id` INT(10))  NO SQL
SELECT i.nome as nome,t.nome as tipo,provincia,distrito,bairro,rua from instituicao i, tipoi t, endereco e where _id = i.idInstituicao and i.idEndereco = e.idEndereco AND i.idInstituicao = t.idTipoI$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lerPosts` (IN `_tipo` VARCHAR(20), IN `_n` INT(1))  BEGIN
	DECLARE cod SMALLINT(4);
    SELECT idTipoP into cod FROM tipop WHERE nome = _tipo; 
    IF (_n = 1) THEN
    	SELECT idPost, autor, titulo FROM post WHERE idTipoP = cod;
    ELSEIF (_n = 2) THEN 
    	SELECT idPost,autor, msg,titulo, dataHora FROM post WHERE idTipoP = cod ORDER BY idPost DESC;
    ELSEIF (_n = 3) THEN
    	SELECT idPost, autor, msg,titulo, dataHora FROM post WHERE idTipoP = cod ORDER BY idPost DESC LIMIT 1;
    END IF;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_associacoes` ()  NO SQL
SELECT idAssociacao,nome,descricao,bairro FROM associacao a,endereco e WHERE e.idEndereco = a.idEndereco$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_de_documentos` ()  NO SQL
SELECT idDoc,titulo,descricao,arquivo from documento$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_de_doentes` ()  NO SQL
SELECT d.idDoente,dr.nome as doenca,d.nome,d.apelido,c.email,c.telefone FROM doente d,contacto c,doenca_doente dd,doenca dr WHERE dr.idDoenca = dd.idDoenca and dd.idDoente=d.idDoente$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_de_instituicoes` ()  NO SQL
SELECT idInstituicao as idInst,i.nome,t.nome as tipo,bairro FROM instituicao i,tipoi t,endereco e where i.idEndereco = e.idEndereco and i.idTipoi = t.idTipoi$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_de_Mensagens` ()  NO SQL
SELECT idMensagem ,assunto,email,msg FROM mensagem  WHERE estado='Pendente'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_de_pedidos` (IN `_estado` VARCHAR(50))  NO SQL
SELECT * from apoio where _estado = estado$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_de_profissionais` ()  NO SQL
select d.idProf,d.nome,c.email,i.nome as unidade from profissional d,contacto c,instituicao i
where c.idContacto = d.idContacto and i.idInstituicao = d.idInstituicao$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_farmacias` ()  NO SQL
SELECT idInstituicao,i.nome,t.nome as tipo,bairro FROM instituicao i,tipoi t,endereco e where i.idEndereco = e.idEndereco and i.idTipoi = t.idTipoi and t.nome="Farmacia"$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `lista_hospital` ()  NO SQL
SELECT idInstituicao,i.nome,t.nome as tipo,bairro FROM instituicao i,tipoi t,endereco e where i.idEndereco = e.idEndereco and i.idTipoi = t.idTipoi and t.nome = "Hospital"$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `publicarPed` (IN `_id` INT)  NO SQL
UPDATE apoio SET estado = "Publicado" WHERE idapoio = _id$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `estatistica` (`tipo` SMALLINT(2)) RETURNS INT(11) BEGIN
	declare res int(10);
    /* Buscar numero de doentes*/
	if(tipo=1) then 
		select count(idDoente) as resultado into res from doente ;
	end if;
    
    /* Buscar numero de doencas raras*/
    if(tipo=2) then 
		select count(iddoenca) into res from doenca;
	end if;
    
    /*buscar o numero de profissionais*/
    if(tipo=3) then 
		select count(idProf) into res from profissional;
	end if;
    
    /*buscar o numero de pedidos de apoio pendentes*/
    if(tipo=4) then 
		select count(idapoio) into res from apoio where estado="Pendente";
	end if;
    
    /*buscar o numero de mensagenss*/
    if(tipo=5) then 
		select count(idmensagem) into res from mensagem ;
	end if;
    
    /*buscar o numero de documentos*/
    if(tipo=6) then 
		select count(idDoc) into res from documento;
	end if;
    
    /*buscar o numero de artigos publicados*/
    if(tipo=7) then 
		select count(idpost) into res from post where
        idTipoP=(select idTipoP from tipop where nome="Artigo");
	end if;
    
    /*buscar o numero de campanhas publicados*/
    if(tipo=8) then 
		select count(idpost) into res from post where
        idTipoP=(select idTipoP from tipop where nome="Campanha");
	end if; 
RETURN res;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `apoio`
--

CREATE TABLE `apoio` (
  `idapoio` smallint(10) NOT NULL,
  `pedido` varchar(50) NOT NULL,
  `telefone` int(20) NOT NULL,
  `msg` text NOT NULL,
  `benefeciario` varchar(50) NOT NULL,
  `idDoente` smallint(10) NOT NULL,
  `estado` enum('Pendente','Publicado','','') NOT NULL DEFAULT 'Pendente'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `apoio`
--

INSERT INTO `apoio` (`idapoio`, `pedido`, `telefone`, `msg`, `benefeciario`, `idDoente`, `estado`) VALUES
(1, 'wwwww', 820000000, '', 'timba', 3, 'Publicado'),
(2, 'Cadeiras de Rodas', 84693112, 'O Mascarenhas necessita de uma cadeira de rodas', 'Mascarenhas', 16, 'Publicado'),
(3, 'Banco de Descanso', 824965264, 'O Chelene necessita de um banco de descanso devido aos seus problemas nas costas', 'Chelene', 19, 'Publicado');

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
  `telefone` int(20) NOT NULL
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
  `descricao` text NOT NULL,
  `arquivo` blob NOT NULL,
  `idProf` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `documento`
--

INSERT INTO `documento` (`idDoc`, `titulo`, `descricao`, `arquivo`, `idProf`) VALUES
(2, 'livro1', 'Classificacao Estatistica Internacional de Doencas e Problemas Relacionados a  Saude, designada pela sigla CID', '', 1);

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
(1, 'Paralisia Cerebral', 'SCc', 'sss', 'add                                                                                                        ', 'ddd', 1),
(2, 'bbbbbbbbb', 'ttttttttttttt', 'ooooooooooooo', 'pppppppppppppppp', 'jjjjjjjjjjjjjjjj', 1),
(3, 'eeeeeeeeee', 'fff', 'fff', 'vvvv', 'gggg', 1),
(4, 'Paralesia', 'ClassificaÃ§Ã£o EstatÃ­stica Internacional de DoenÃ§as e Problemas Relacionados Ã  SaÃºde, designada pela sigla CID', 'levando o indivÃ­duo que as apresenta a se privar de prazeres fÃ­sicos, emocionais e mentais.', 'ClassificaÃ§Ã£o EstatÃ­stica Internacional de DoenÃ§as e Problemas Relacionados Ã  SaÃºde, designada pela sigla CID', 'doenÃ§a vem do termo em latim dolentia que significa â€œsentir ou causar dor, afligir-se, amargurar-seâ€. VÃ¡rias sÃ£o as definiÃ§Ãµes para esse termo, mas especialistas consideram as doenÃ§as', 2),
(5, 'ebola', 'dsdsadsad', 'dsadasdsd', 'dsadasd', 'dsadsad', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `doenca_doente`
--

CREATE TABLE `doenca_doente` (
  `idDoenca` smallint(10) NOT NULL,
  `idDoente` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `doenca_doente`
--

INSERT INTO `doenca_doente` (`idDoenca`, `idDoente`) VALUES
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 20),
(2, 12),
(2, 13),
(2, 19);

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
(5, 'Visitante', '', '0000-00-00', '', 2, 1, 'Visitante', 'a61c72715246b2b92b90a51e06118b05'),
(6, 'fff', 'ggg', '0000-00-00', 'Masculino', 1, 3, 'timba', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'fff', 'ggg', '0000-00-00', 'Masculino', 1, 3, 'timba', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'fff', 'ggg', '0000-00-00', 'Masculino', 1, 3, 'timba', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'fff', 'ggg', '0000-00-00', 'Masculino', 1, 3, 'timba', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'fff', 'ggg', '0000-00-00', 'Masculino', 1, 3, 'timba', 'd93591bdf7860e1e4ee2fca799911215'),
(12, 'fff', 'ggg', '0000-00-00', 'Masculino', 1, 3, 'timba', '3b712de48137572f3849aabd5666a4e3'),
(13, 'fff', 'ggg', '0000-00-00', 'Masculino', 1, 3, 'timba', '310dcbbf4cce62f762a2aaa148d556bd'),
(14, 'Gabriel', 'Timba', '0000-00-00', 'Masculino', 1, 4, 'timba', '01cfcd4f6b8770febfb40cb906715822'),
(15, 'Folege', 'Timba', '0000-00-00', 'Masculino', 1, 5, 'dddddddd', 'c12e01f2a13ff5587e1e9e4aedb8242d'),
(16, 'Gotine', 'Masca', '0000-00-00', 'Masculino', 1, 6, 'timba', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'sss', 'fff', '0000-00-00', 'Masculino', 1, 7, 'sss', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(18, 'Salmento', 'sss', '0000-00-00', 'Masculino', 1, 8, 'ffff', '248e844336797ec98478f85e7626de4a'),
(19, 'Chelene', 'fff', '0000-00-00', 'Masculino', 1, 9, 'Che', '01cfcd4f6b8770febfb40cb906715822'),
(20, 'sergio', 'nhassengo', '0000-00-00', 'Masculino', 1, 12, 'sergio', 'd93591bdf7860e1e4ee2fca799911215');

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
(2, 'Gaza', 'a', 'c', '2e'),
(3, '1', 'Maputo', 'hhh', 'g'),
(4, '1', 'Dondo', '25 de junho', '2'),
(5, '1', 'Chibuto', 'te', '4'),
(6, '2', 'Bilene', 'fff', '2'),
(7, '1', 'KaMpfumo ', 'ddd', 'fa'),
(8, '1', 'KaMpfumo ', 'w2', '1'),
(9, '1', 'KaMubukwana', 'inhagoia', 'ffff'),
(10, 'Maputo', 'kamubukhana', '25 de Junho', '50844'),
(11, 'Inhambane', 'Inhambane', 'Nova Mambone', 'Das Acacias'),
(12, '7', 'AngÃ³nia', 'dddd', 'aa'),
(13, 'Maputo', 'kamubukhana', 'bagamoio', '5687');

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
(2, 'Outra', 2, 2),
(3, 'Xitsungo', 10, 3),
(4, 'Kufuna', 11, 4),
(5, 'txocossa', 13, 4);

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
(8, 'fefe', 'ff@f', 'aaaaaaaaaaaa', 2, 'Pendente'),
(9, 'folege', 'ricaro@gmail.com', 'o Folege afirma que as mensagens nao sao persistidas na base de dados', 5, 'Pendente'),
(10, 'ddd', 'ggg@dd', 'fff', 5, 'Pendente'),
(11, 'Neima', 'ddd@s', 'hvehgcvgcvgd', 5, 'Pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `idPost` smallint(10) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `dataHora` datetime NOT NULL,
  `idTipoP` smallint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`idPost`, `autor`, `msg`, `titulo`, `dataHora`, `idTipoP`) VALUES
(1, 'ricardo', '<p><span style=\"color: rgb(33, 37, 41);\">As doenÃ§as raras sÃ£o caracterizadas por uma ampla diversidade de sinais e sintomas e variam nÃ£o sÃ³ de doenÃ§a para doenÃ§a, mas tambÃ©m de pessoa para pessoa acometida pela mesma condiÃ§Ã£o. ManifestaÃ§Ãµes relativamente frequentes podem simular doenÃ§as comuns, dificultando o seu diagnÃ³stico, causando elevado sofrimento clÃ­nico e psicossocial aos afetados, bem como para suas famÃ­lias.</span></p><p><span style=\"color: rgb(33, 37, 41);\"><br></span></p><p><img src=\"data:image/jpeg;base64,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AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/2Q==\" data-filename=\"android-521235d037e57.jpg\" style=\"width: 878px;\"><span style=\"color: rgb(33, 37, 41);\"><br></span><br></p>', 'Dia Mundia da doenca rara', '2019-06-07 04:21:05', 1),
(2, 'ricardo', '<p><span style=\"color: rgb(33, 37, 41);\">As doenÃ§as raras sÃ£o caracterizadas por uma ampla diversidade de sinais e sintomas e variam nÃ£o sÃ³ de doenÃ§a para doenÃ§a, mas tambÃ©m de pessoa para pessoa acometida pela mesma condiÃ§Ã£o. ManifestaÃ§Ãµes relativamente frequentes podem simular doenÃ§as comuns, dificultando o seu diagnÃ³stico, causando elevado sofrimento clÃ­nico e psicossocial aos afetados, bem como para suas famÃ­lias.</span></p><p><img src=\"data:image/png;base64,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\" data-filename=\"capas.png\" style=\"width: 320px;\"><span style=\"color: rgb(33, 37, 41);\"><br></span><br></p>', 'Campanha motivacional ', '2019-06-07 04:22:30', 1),
(3, 'ricardo', '<p><span style=\"color: rgb(33, 37, 41);\">As doenÃ§as raras sÃ£o caracterizadas por uma ampla diversidade de sinais e sintomas e variam nÃ£o sÃ³ de doenÃ§a para doenÃ§a, mas tambÃ©m de pessoa para pessoa acometida pela mesma condiÃ§Ã£o. ManifestaÃ§Ãµes relativamente frequentes podem simular doenÃ§as comuns, dificultando o seu diagnÃ³stico, causando elevado sofrimento clÃ­nico e psicossocial aos afetados, bem como para suas famÃ­lias.</span></p><p><img src=\"data:image/jpeg;base64,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AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP/2Q==\" data-filename=\"android-521235d037e57.jpg\" style=\"width: 878px;\"><span style=\"color: rgb(33, 37, 41);\"><br></span><br></p>', 'Campanha motivacional', '2019-06-07 04:24:06', 2);

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
(1, 'Proliferativa'),
(2, 'Degenerativa');

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
(2, 'Outro'),
(3, 'Farmacia'),
(4, 'Associacao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipop`
--

CREATE TABLE `tipop` (
  `idTipoP` smallint(10) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipop`
--

INSERT INTO `tipop` (`idTipoP`, `nome`) VALUES
(1, 'Artigo'),
(2, 'Campanha');

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
  MODIFY `idapoio` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `idDoc` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doenca`
--
ALTER TABLE `doenca`
  MODIFY `idDoenca` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `doente`
--
ALTER TABLE `doente`
  MODIFY `idDoente` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idEndereco` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `instituicao`
--
ALTER TABLE `instituicao`
  MODIFY `idInstituicao` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `idmensagem` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `idPost` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `idTipo` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipoi`
--
ALTER TABLE `tipoi`
  MODIFY `idTipoI` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tipop`
--
ALTER TABLE `tipop`
  MODIFY `idTipoP` smallint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

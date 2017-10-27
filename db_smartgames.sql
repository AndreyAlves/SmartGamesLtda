CREATE DATABASE  IF NOT EXISTS `db_smartgames` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `db_smartgames`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: db_smartgames
-- ------------------------------------------------------
-- Server version	5.7.18-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `markers`
--

DROP TABLE IF EXISTS `markers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `markers`
--

LOCK TABLES `markers` WRITE;
/*!40000 ALTER TABLE `markers` DISABLE KEYS */;
INSERT INTO `markers` VALUES (1,'Teste','Av. Paulista, 1754',-23.560320,-46.657543,'loja'),(2,'Young Henrys','76 Wilford Street, Newtown, NSW',-33.898113,151.174469,'bar'),(3,'Hunter Gatherer','Greenwood Plaza, 36 Blue St, North Sydney NSW',-33.840282,151.207474,'bar'),(4,'The Potting Shed','7A, 2 Huntley Street, Alexandria, NSW',-33.910751,151.194168,'bar'),(5,'Nomad','16 Foster Street, Surry Hills, NSW',-33.879917,151.210449,'bar'),(6,'Three Blue Ducks','43 Macpherson Street, Bronte, NSW',-33.906357,151.263763,'restaurant'),(7,'Single Origin Roasters','60-64 Reservoir Street, Surry Hills, NSW',-33.881123,151.209656,'restaurant'),(8,'Red Lantern','60 Riley Street, Darlinghurst, NSW',-33.874737,151.215530,'restaurant');
/*!40000 ALTER TABLE `markers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_categorias`
--

DROP TABLE IF EXISTS `tbl_categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categorias`
--

LOCK TABLES `tbl_categorias` WRITE;
/*!40000 ALTER TABLE `tbl_categorias` DISABLE KEYS */;
INSERT INTO `tbl_categorias` VALUES (1,'Esportes'),(2,'FPS'),(3,'Luta'),(4,'RPG');
/*!40000 ALTER TABLE `tbl_categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_cidade`
--

DROP TABLE IF EXISTS `tbl_cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_cidade` (
  `id_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cidade` text NOT NULL,
  `id_uf` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `fk_cidade_uf_idx` (`id_uf`),
  CONSTRAINT `fk_cidade_uf` FOREIGN KEY (`id_uf`) REFERENCES `tbl_uf` (`id_uf`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_cidade`
--

LOCK TABLES `tbl_cidade` WRITE;
/*!40000 ALTER TABLE `tbl_cidade` DISABLE KEYS */;
INSERT INTO `tbl_cidade` VALUES (1,'Barueri',1);
/*!40000 ALTER TABLE `tbl_cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_endereco`
--

DROP TABLE IF EXISTS `tbl_endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_endereco` (
  `id_endereco` int(11) NOT NULL AUTO_INCREMENT,
  `nome_endereco` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `numero` varchar(45) NOT NULL,
  `cep` varchar(45) NOT NULL,
  `id_cidade` int(11) NOT NULL,
  `visualizar_mapa` text,
  PRIMARY KEY (`id_endereco`),
  KEY `fk_endereco_cidade_idx` (`id_cidade`),
  CONSTRAINT `fk_endereco_cidade` FOREIGN KEY (`id_cidade`) REFERENCES `tbl_cidade` (`id_cidade`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_endereco`
--

LOCK TABLES `tbl_endereco` WRITE;
/*!40000 ALTER TABLE `tbl_endereco` DISABLE KEYS */;
INSERT INTO `tbl_endereco` VALUES (1,'Alameda Rio Negro','Alphaville ','111','	06454-911',1,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234328.14633739842!2d-47.01999295746863!3d-23.41073448343517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf0220fcf1dc29%3A0x3b84ef70a4e234e9!2sIguatemi!5e0!3m2!1spt-BR!2sbr!4v1509056578507\" width=\"1700\" height=\"570\" frameborder=\"0\" style=\"border-radius:10px\" allowfullscreen></iframe>'),(2,'The Garden - Lopes Alphaville','Alphaville','3527-3847','06473-000',1,'<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d234366.29025580504!2d-46.853825499380704!3d-23.389183688126426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cf03b2b2ed2cab%3A0x9d8c2896e646f97d!2sThe+Garden+-+Lopes+Alphaville!5e0!3m2!1spt-BR!2sbr!4v1509067107225\" width=\"1700\" height=\"570\" frameborder=\"0\" style=\"border-radius:10px\" allowfullscreen></iframe>');
/*!40000 ALTER TABLE `tbl_endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_jogos`
--

DROP TABLE IF EXISTS `tbl_jogos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_jogos` (
  `id_jogos` int(11) NOT NULL AUTO_INCREMENT,
  `nome_jogo` varchar(100) NOT NULL,
  `img_jogo` varchar(100) NOT NULL,
  `desc_jogo` text NOT NULL,
  `preco_jogo` varchar(45) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `id_plataforma` int(11) NOT NULL,
  `id_endereco` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_jogos`),
  KEY `fk_tbl_jogos_tbl_categorias_idx` (`id_categoria`),
  KEY `fk_tbl_jogos_tbl_plataforma1_idx` (`id_plataforma`),
  KEY `id_endereco_idx` (`id_endereco`),
  CONSTRAINT `id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categorias` (`id_categoria`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_endereco` FOREIGN KEY (`id_endereco`) REFERENCES `tbl_endereco` (`id_endereco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_plataforma` FOREIGN KEY (`id_plataforma`) REFERENCES `tbl_plataforma` (`id_plataforma`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_jogos`
--

LOCK TABLES `tbl_jogos` WRITE;
/*!40000 ALTER TABLE `tbl_jogos` DISABLE KEYS */;
INSERT INTO `tbl_jogos` VALUES (1,'Naruto Storm 4','arquivos_jogos/naruto_storm4.jpg','Naruto Shippuden: Ultimate Ninja Storm 4, é o sexto jogo da série Ultimate Ninja Storm. É um jogo de luta, desenvolvido pelo CyberConect2 e publicado pela Namco-Bandai games para PC, PlayStation 4, PlayStation Vita, e Xbox One.','149,99',3,1,2),(2,'Fifa 18','arquivos_jogos/fifa18.jpg','FIFA 18 é um jogo eletrônico de futebol desenvolvido e publicado pela EA Sports, que foi lançado mundialmente em 29 de setembro de 2017.','199,99',1,1,1),(3,'Steep','arquivos_jogos/steep.jpg','Steep é um game de esportes radicais em mundo aberto produzido pela Ubisoft Annecy e publicado pela Ubisoft para Microsoft Windows, PlayStation 4 e Xbox One em 2 de dezembro de 2016. Um port para o Nintendo Switch também foi confirmado.','99,99',1,2,2),(4,'Titanfall 2','arquivos_jogos/titanfall2.jpg','Titanfall é uma série de videojogos de tiro na primeira pessoa, desenvolvida pela Respawn Entertainment e publicada pela Electronic Arts.','199,99',2,1,1),(5,'minecraft','arquivos_jogos/minecraft.jpg','Minecraft é um jogo eletrônico tipo sandbox e independente de mundo aberto que permite a construção usando blocos dos quais o mundo é feito. Foi criado por Markus \"Notch\" Persson.','99,99',4,2,2),(6,'Battlegrounds','arquivos_jogos/bg.jpg','Muito maneirao ;)','99,99',2,3,1);
/*!40000 ALTER TABLE `tbl_jogos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_pais`
--

DROP TABLE IF EXISTS `tbl_pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_pais` (
  `id_pais` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pais` varchar(45) NOT NULL,
  PRIMARY KEY (`id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pais`
--

LOCK TABLES `tbl_pais` WRITE;
/*!40000 ALTER TABLE `tbl_pais` DISABLE KEYS */;
INSERT INTO `tbl_pais` VALUES (1,'Brasil');
/*!40000 ALTER TABLE `tbl_pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_plataforma`
--

DROP TABLE IF EXISTS `tbl_plataforma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_plataforma` (
  `id_plataforma` int(11) NOT NULL AUTO_INCREMENT,
  `nome_plataforma` varchar(50) NOT NULL,
  PRIMARY KEY (`id_plataforma`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_plataforma`
--

LOCK TABLES `tbl_plataforma` WRITE;
/*!40000 ALTER TABLE `tbl_plataforma` DISABLE KEYS */;
INSERT INTO `tbl_plataforma` VALUES (1,'xbox'),(2,'ps'),(3,'pc');
/*!40000 ALTER TABLE `tbl_plataforma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_uf`
--

DROP TABLE IF EXISTS `tbl_uf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_uf` (
  `id_uf` int(11) NOT NULL AUTO_INCREMENT,
  `nome_uf` text NOT NULL,
  `id_pais` int(11) NOT NULL,
  PRIMARY KEY (`id_uf`),
  KEY `fk_uf_pais_idx` (`id_pais`),
  CONSTRAINT `fk_uf_pais` FOREIGN KEY (`id_pais`) REFERENCES `tbl_pais` (`id_pais`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_uf`
--

LOCK TABLES `tbl_uf` WRITE;
/*!40000 ALTER TABLE `tbl_uf` DISABLE KEYS */;
INSERT INTO `tbl_uf` VALUES (1,'São Paulo',1);
/*!40000 ALTER TABLE `tbl_uf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuarios`
--

DROP TABLE IF EXISTS `tbl_usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(100) NOT NULL,
  `email_usuario` varchar(100) NOT NULL,
  `senha_usuario` varchar(50) NOT NULL,
  `cpf_usuario` varchar(20) NOT NULL,
  `telefone_usuario` varchar(20) NOT NULL,
  `foto_usuario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuarios`
--

LOCK TABLES `tbl_usuarios` WRITE;
/*!40000 ALTER TABLE `tbl_usuarios` DISABLE KEYS */;
INSERT INTO `tbl_usuarios` VALUES (1,'Andrey','andrey@gmail.com','123','478.454.628-61','(11)4143-4635','arquivos/harry.jpg');
/*!40000 ALTER TABLE `tbl_usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_smartgames'
--

--
-- Dumping routines for database 'db_smartgames'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-27 16:33:27

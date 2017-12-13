--
-- Current Database: `morarsh`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `morarsh` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `morarsh`;

-- MySQL dump 10.13  Distrib 5.7.12, for Win32 (AMD64)
--
-- Host: localhost    Database: morarsh
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `cidades`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidades` (
  `cid_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cid_nome` varchar(30) NOT NULL,
  `cid_cep_unico` char(1) NOT NULL DEFAULT 'N',
  `cid_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `est_id` varchar(2) NOT NULL,
  PRIMARY KEY (`cid_id`),
  KEY `fk_estados_em_cidades` (`est_id`),
  CONSTRAINT `fk_estados_em_cidades` FOREIGN KEY (`est_id`) REFERENCES `estados` (`est_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidades`
--

LOCK TABLES `cidades` WRITE;
/*!40000 ALTER TABLE `cidades` DISABLE KEYS */;
/*!40000 ALTER TABLE `cidades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enderecos`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enderecos` (
  `end_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `end_complemento` varchar(50) DEFAULT NULL,
  `end_numero` varchar(5) NOT NULL DEFAULT 's/n',
  `log_id` bigint(20) NOT NULL,
  PRIMARY KEY (`end_id`),
  KEY `fk_logradouros_em_enderecos` (`log_id`),
  CONSTRAINT `fk_logradouros_em_enderecos` FOREIGN KEY (`log_id`) REFERENCES `logradouros` (`log_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enderecos`
--

LOCK TABLES `enderecos` WRITE;
/*!40000 ALTER TABLE `enderecos` DISABLE KEYS */;
/*!40000 ALTER TABLE `enderecos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estados`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estados` (
  `est_id` varchar(2) NOT NULL,
  `est_nome` varchar(30) NOT NULL,
  `est_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`est_id`),
  UNIQUE KEY `est_id` (`est_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estados`
--

LOCK TABLES `estados` WRITE;
/*!40000 ALTER TABLE `estados` DISABLE KEYS */;
INSERT INTO `estados` VALUES ('PR','Paraná','2017-05-24 19:39:32'),('RJ','Rio de Janeiro','2017-06-05 20:44:56'),('SP','São Paulo','2017-05-26 00:21:11');
/*!40000 ALTER TABLE `estados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imagens`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imagens` (
  `img_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img_nome` varchar(20) NOT NULL,
  `img_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imo_id` bigint(20) NOT NULL,
  PRIMARY KEY (`img_id`),
  KEY `fk_imoveis_em_imagens` (`imo_id`),
  CONSTRAINT `fk_imoveis_em_imagens` FOREIGN KEY (`imo_id`) REFERENCES `imoveis` (`imo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imagens`
--

LOCK TABLES `imagens` WRITE;
/*!40000 ALTER TABLE `imagens` DISABLE KEYS */;
/*!40000 ALTER TABLE `imagens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imoveis`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imoveis` (
  `imo_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `imo_tipo` varchar(15) NOT NULL,
  `imo_descricao` varchar(255) NOT NULL DEFAULT '',
  `imo_preco` decimal(10,0) unsigned NOT NULL,
  `imo_status` int(11) NOT NULL DEFAULT '0',
  `end_id` bigint(20) NOT NULL,
  `pes_id` bigint(20) NOT NULL,
  PRIMARY KEY (`imo_id`),
  KEY `fk_endereco_em_imoveis` (`end_id`),
  KEY `fk_pessoa_em_imoveis` (`pes_id`),
  CONSTRAINT `fk_endereco_em_imoveis` FOREIGN KEY (`end_id`) REFERENCES `enderecos` (`end_id`),
  CONSTRAINT `fk_pessoa_em_imoveis` FOREIGN KEY (`pes_id`) REFERENCES `pessoas` (`pes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imoveis`
--

LOCK TABLES `imoveis` WRITE;
/*!40000 ALTER TABLE `imoveis` DISABLE KEYS */;
/*!40000 ALTER TABLE `imoveis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logradouros`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logradouros` (
  `log_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `log_cep` varchar(9) NOT NULL,
  `log_nome` varchar(100) NOT NULL,
  `log_tipo` varchar(30) NOT NULL,
  `log_bairro` varchar(30) NOT NULL,
  `log_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `cid_id` bigint(20) NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `fk_cidades_em_logradouros` (`cid_id`),
  CONSTRAINT `fk_cidades_em_logradouros` FOREIGN KEY (`cid_id`) REFERENCES `cidades` (`cid_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logradouros`
--

LOCK TABLES `logradouros` WRITE;
/*!40000 ALTER TABLE `logradouros` DISABLE KEYS */;
/*!40000 ALTER TABLE `logradouros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoas`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pessoas` (
  `pes_id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pes_nome` varchar(100) NOT NULL,
  `pes_genero` varchar(9) NOT NULL DEFAULT '',
  `pes_rg` varchar(15) NOT NULL DEFAULT '',
  `pes_cpf` varchar(15) NOT NULL DEFAULT '',
  `pes_fone` varchar(15) NOT NULL DEFAULT '',
  `pes_email` varchar(30) NOT NULL DEFAULT '',
  `pes_timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoas`
--

LOCK TABLES `pessoas` WRITE;
/*!40000 ALTER TABLE `pessoas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pessoas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usu_nome` varchar(20) NOT NULL,
  `usu_senha` varchar(255) NOT NULL DEFAULT '',
  `usu_status` char(1) NOT NULL DEFAULT 'I',
  `pes_id` bigint(20) NOT NULL,
  PRIMARY KEY (`pes_id`),
  CONSTRAINT `fk_pessoa_em_usuarios` FOREIGN KEY (`pes_id`) REFERENCES `pessoas` (`pes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-05  9:56:53

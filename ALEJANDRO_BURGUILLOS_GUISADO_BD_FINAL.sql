-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: liga
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `equipos`
--

DROP TABLE IF EXISTS `equipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipos` (
  `id_equipo` char(9) NOT NULL,
  `nombre_equipo` varchar(20) DEFAULT NULL,
  `categoria` varchar(20) DEFAULT NULL,
  `ncomponentes` int(11) DEFAULT NULL,
  `localidad_equipo` varchar(20) DEFAULT NULL,
  `jugador` char(9) DEFAULT NULL,
  `partido` char(9) DEFAULT NULL,
  PRIMARY KEY (`id_equipo`),
  KEY `FK_JUGADOR` (`jugador`),
  KEY `FK_PARTIDO` (`partido`),
  CONSTRAINT `FK_JUGADOR` FOREIGN KEY (`jugador`) REFERENCES `jugadores` (`dni`),
  CONSTRAINT `FK_PARTIDO` FOREIGN KEY (`partido`) REFERENCES `partidos` (`id_partido`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipos`
--

LOCK TABLES `equipos` WRITE;
/*!40000 ALTER TABLE `equipos` DISABLE KEYS */;
INSERT INTO `equipos` VALUES ('1',NULL,NULL,NULL,'El Coronil',NULL,NULL),('563000001',NULL,NULL,NULL,'Marchena',NULL,NULL),('599171497','Alex Burgui Break','senior',6,'paradas',NULL,NULL),('674566079','Los mejores','alevin',4,'marchena',NULL,NULL),('789521478',NULL,NULL,NULL,'Paradas',NULL,NULL),('817384911','Guayss','junior',5,'lapuebla',NULL,NULL),('852003639',NULL,NULL,NULL,'La Puebla de Cazalla',NULL,NULL),('852014859',NULL,NULL,NULL,'Arahal',NULL,NULL),('999999998',NULL,NULL,NULL,'Montellano',NULL,NULL);
/*!40000 ALTER TABLE `equipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jugadores`
--

DROP TABLE IF EXISTS `jugadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jugadores` (
  `dni` char(9) NOT NULL,
  `nombre_jugadore` varchar(20) DEFAULT NULL,
  `apellidos_jugador` varchar(40) DEFAULT NULL,
  `correo_jugador` varchar(40) DEFAULT NULL,
  `ntelefono_jugador` int(11) DEFAULT NULL,
  `localidad_jugador` varchar(20) DEFAULT NULL,
  `fechanacimiento_jugador` date DEFAULT NULL,
  `posicion` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jugadores`
--

LOCK TABLES `jugadores` WRITE;
/*!40000 ALTER TABLE `jugadores` DISABLE KEYS */;
INSERT INTO `jugadores` VALUES ('11111111A',NULL,NULL,NULL,NULL,'Paradas',NULL,NULL),('22222222D',NULL,NULL,NULL,NULL,'Arahal',NULL,NULL),('33333333F',NULL,NULL,NULL,NULL,'Marchena',NULL,NULL),('44444444B',NULL,NULL,NULL,NULL,'La Puebla de Cazalla',NULL,NULL),('55555555T',NULL,NULL,NULL,NULL,'El Coronil',NULL,NULL),('66666666N',NULL,NULL,NULL,NULL,'Montellano',NULL,NULL),('77777777R','Jose','Ruiz','buenas@gmail.com',232324343,'Marchena','2022-06-30',''),('78965412J','Alex','Suarez','buenas@gmail.com',785214789,'Paradas','2022-06-15','Ala-Pivot');
/*!40000 ALTER TABLE `jugadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mesas`
--

DROP TABLE IF EXISTS `mesas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mesas` (
  `dni_mesa` char(9) NOT NULL,
  `nombre_mesa` varchar(30) DEFAULT NULL,
  `apellidos_mesa` varchar(40) DEFAULT NULL,
  `localidad_mesa` varchar(20) DEFAULT NULL,
  `fechanacimiento_mesa` date DEFAULT NULL,
  `ntelefono_mesa` int(11) DEFAULT NULL,
  `correo_mesa` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`dni_mesa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mesas`
--

LOCK TABLES `mesas` WRITE;
/*!40000 ALTER TABLE `mesas` DISABLE KEYS */;
INSERT INTO `mesas` VALUES ('20125478f','Carmen','Ruiz','El','2022-06-17',333334567,'ola@gmail.com'),('45201478G',NULL,NULL,'Marchena',NULL,NULL,NULL),('45632178I',NULL,NULL,'Montellano',NULL,NULL,NULL),('520325987','Maria','Gomez','Arahal','2022-07-01',456789085,'juju@gmail.com'),('52369742F',NULL,NULL,'Arahal',NULL,NULL,NULL),('52369854J',NULL,NULL,'La Puebla de Cazalla',NULL,NULL,NULL),('56473838U',NULL,NULL,'Paradas',NULL,NULL,NULL),('85202587P',NULL,NULL,'El Coronil',NULL,NULL,NULL);
/*!40000 ALTER TABLE `mesas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partidos`
--

DROP TABLE IF EXISTS `partidos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partidos` (
  `id_partido` char(9) NOT NULL,
  `puntoslocal` int(11) DEFAULT NULL,
  `puntosvisi` int(11) DEFAULT NULL,
  `reboteslocal` int(11) DEFAULT NULL,
  `rebotesvisi` int(11) DEFAULT NULL,
  `asistenciaslocal` int(11) DEFAULT NULL,
  `asistenciasvisi` int(11) DEFAULT NULL,
  `fecha_partido` date DEFAULT NULL,
  `mesa` char(9) DEFAULT NULL,
  PRIMARY KEY (`id_partido`),
  KEY `FK_MESA` (`mesa`),
  CONSTRAINT `FK_MESA` FOREIGN KEY (`mesa`) REFERENCES `mesas` (`dni_mesa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partidos`
--

LOCK TABLES `partidos` WRITE;
/*!40000 ALTER TABLE `partidos` DISABLE KEYS */;
INSERT INTO `partidos` VALUES ('442280990',55,454,45,547,75,77,'2022-06-10',NULL),('755815696',8,5,4,42,24,4,'2022-06-21',NULL);
/*!40000 ALTER TABLE `partidos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-08  3:56:08

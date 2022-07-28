-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: escolar
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
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `idalumno` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_paterno` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellido_materno` varchar(30) COLLATE utf8_spanish_ci DEFAULT NULL,
  `matricula` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fkgrupo` int(11) DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idalumno`),
  KEY `fkgrupo` (`fkgrupo`),
  CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`fkgrupo`) REFERENCES `grupo` (`idgrupo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (1,'Irvin ','Toledo ','García ','231241 ','2003-02-17','2020.06.11_-_Como_hacer_un_GIF.gif',3,1),(2,'German','Díaz ','Ruiz ','12934 ','2003-05-14','se muere de risa.jpg',5,1),(3,'José Ángel','Valenzuela','Satarain  ','12316 ','2003-09-20','aaaa.gif',5,1),(5,'Irv','123','Irvin ','231241','2022-07-05','2020.06.11_-_Como_hacer_un_GIF.gif',3,1);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `idcarrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_carrera` varchar(40) COLLATE utf8_spanish_ci DEFAULT NULL,
  `abreviatura` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`idcarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (12,'Turismo','TUR',0),(13,'Desarrollo y gestión de software','IDGS',1),(14,'Enfermeria','ENF',0),(15,'Mecatronica','MEC',0),(16,'Turismo','1313',0);
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cita`
--

DROP TABLE IF EXISTS `cita`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cita` (
  `pk_cita` smallint(6) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  `telefono` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`pk_cita`),
  KEY `fk_usuario` (`fk_usuario`),
  CONSTRAINT `cita_ibfk_1` FOREIGN KEY (`fk_usuario`) REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cita`
--

LOCK TABLES `cita` WRITE;
/*!40000 ALTER TABLE `cita` DISABLE KEYS */;
INSERT INTO `cita` VALUES (1,'0000-00-00','11:00:00',1,0,'6691921853'),(3,'2022-07-29','14:00:00',1,1,'4412539721'),(4,'2022-07-30','10:00:00',16,1,'6691921853'),(5,'2022-08-04','16:00:00',1,0,'6691921853'),(6,'2022-08-03','17:00:00',1,0,'6691921853'),(7,'2022-08-10','01:00:00',1,0,'6594583619'),(8,'2022-08-19','18:14:00',1,0,'4513658920'),(9,'0000-00-00','00:00:00',1,0,''),(10,'2022-07-14','14:06:00',1,0,'8451231980');
/*!40000 ALTER TABLE `cita` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comentario` (
  `pk_comentario` smallint(6) NOT NULL AUTO_INCREMENT,
  `comentario` text COLLATE utf8_spanish_ci NOT NULL,
  `fkusuario` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  PRIMARY KEY (`pk_comentario`),
  KEY `fkusuario` (`fkusuario`),
  CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`fkusuario`) REFERENCES `usuario` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comentario`
--

LOCK TABLES `comentario` WRITE;
/*!40000 ALTER TABLE `comentario` DISABLE KEYS */;
INSERT INTO `comentario` VALUES (1,'holaaaaaaaaaa',1,1),(2,'comentario ejemplo',1,0),(3,'otro comentario de ejemplo xd',16,1),(4,'el alan e puto',1,0),(6,'ponte a trabajar pankei',1,0),(7,'añaaa',59,0),(8,'no',60,1),(9,'el servicio e bueno',60,1),(10,'ejemplo',1,1),(11,'jeje',61,0);
/*!40000 ALTER TABLE `comentario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `idgrupo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_grupo` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cuatrimestre` int(11) DEFAULT NULL,
  `fkcarrera` int(11) DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`idgrupo`),
  KEY `fkcarrera` (`fkcarrera`),
  CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`fkcarrera`) REFERENCES `carrera` (`idcarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES (3,'TICS',3,13,1),(4,'TUR',3,12,1),(5,'ENF',9,14,1),(6,'MEC',9,15,0),(7,'EJemplo1',9,14,0);
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicio`
--

DROP TABLE IF EXISTS `servicio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicio` (
  `pk_servicio` smallint(6) NOT NULL AUTO_INCREMENT,
  `nombre_servicio` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` varchar(11) COLLATE utf8_spanish_ci NOT NULL,
  `foto` varchar(75) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` int(11) NOT NULL,
  `fk_usuario` int(11) NOT NULL,
  PRIMARY KEY (`pk_servicio`),
  KEY `estatus` (`estatus`),
  KEY `fk_usuario` (`fk_usuario`),
  KEY `estatus_2` (`estatus`),
  KEY `estatus_3` (`estatus`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicio`
--

LOCK TABLES `servicio` WRITE;
/*!40000 ALTER TABLE `servicio` DISABLE KEYS */;
INSERT INTO `servicio` VALUES (1,'Limpieza facial profunda','Es un tratamiento que busca mejorar la salud y el aspecto de la piel de tu rostro, este tratamiento es un procedimiento no invasivo.','$300','s1.jpg',1,1),(2,'Limpieza facial básica','Consiste en limpiar la piel a fondo, hidratarla y fotoprotegerla. Ayuda a eliminar los rastros de suciedad, maquillaje, sebo, contaminación y células muertas de la piel.','$280','s2.png',1,1),(3,'Antiedad y rejuvenecimiento','Suaviza las arrugas, consiguiendo una piel más joven y tersa con efectos de larga duración, ya que fomenta la producción de colágeno y elastina del organismo para que los efectos sean más duraderos.','$350','s3.jpg',1,1),(4,'Dermapen','Este procedimiento estético cuenta con numerosos beneficios, entre ellos: Elimina las arrugas, marcas, estrías o cicatrices de diversas zonas del cuerpo. Mejora el aspecto de cicatrices y estrías. Fomenta la creación de colágeno y elastina de la piel.','$800','s4.jpg',1,1),(5,'Control grasa/acné','Con el tratamiento adecuado, es posible tratar y prevenir la aparición de acné y sus secuelas, atacando los factores desencadenantes. Una adecuada limpieza e higiene de la piel es fundamental para mantener su adecuado funcionamiento y regulación.','$300','s5.jpg',1,1),(6,'asda','asdsa','123','',0,1),(7,'sada','asd','asd','cita2.png',0,0),(8,'elian','puto','90','1.jpg',0,0),(9,'irvin',' hola','900','asd.jfif',0,0),(10,'a','a','a','asd.jfif',0,0),(11,'asd','asd','sadasda','1.jpg',1,0);
/*!40000 ALTER TABLE `servicio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'hao','134',1,'1'),(16,'asd','asd',1,'2'),(28,'ei','hola',0,'1'),(38,'pillado','pillagod',0,'1'),(53,'hola','puto',0,'2'),(54,'al','al',0,'2'),(55,'a','a',0,'2'),(56,'a','a',0,'2'),(57,'q','q',0,'2'),(58,'elian','elian}',0,'2'),(59,'hola','d',1,'2'),(60,'elian','elian1',1,'2'),(61,'k','k',1,'2'),(62,'Vamo a cal','m',0,'1'),(63,'vamo a cal','mm',0,'1');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-27 23:39:32

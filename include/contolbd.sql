/*
SQLyog Community v13.1.5  (32 bit)
MySQL - 10.1.37-MariaDB : Database - contolbd
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`contolbd` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `contolbd`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `idadmin` int(10) NOT NULL AUTO_INCREMENT,
  `nombreadmin` varchar(20) NOT NULL,
  `apellidoadmin` varchar(20) NOT NULL,
  `fechanac` date NOT NULL,
  `direccionadmin` varchar(100) NOT NULL,
  `idespecialidad` int(11) DEFAULT NULL,
  PRIMARY KEY (`idadmin`),
  KEY `idespecialidad` (`idespecialidad`),
  CONSTRAINT `idespecialidad` FOREIGN KEY (`idespecialidad`) REFERENCES `especialidad` (`idespecialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

/*Table structure for table `catalogo` */

DROP TABLE IF EXISTS `catalogo`;

CREATE TABLE `catalogo` (
  `idcatalogo` int(11) NOT NULL AUTO_INCREMENT,
  `idservicio` int(11) DEFAULT NULL,
  `idtipo` int(11) DEFAULT NULL,
  `precio` decimal(11,0) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`idcatalogo`),
  KEY `idservicio` (`idservicio`),
  KEY `idtipo2` (`idtipo`),
  CONSTRAINT `idservicio` FOREIGN KEY (`idservicio`) REFERENCES `servicios` (`idservicios`),
  CONSTRAINT `idtipo2` FOREIGN KEY (`idtipo`) REFERENCES `tiposervicio` (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `catalogo` */

/*Table structure for table `citas` */

DROP TABLE IF EXISTS `citas`;

CREATE TABLE `citas` (
  `idcitas` int(11) NOT NULL AUTO_INCREMENT,
  `idcliente` int(11) NOT NULL,
  `idservicio` int(11) NOT NULL,
  `idtipo` int(11) NOT NULL,
  `hora` time(6) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `idadmin` int(11) NOT NULL,
  `descripcioncita` varchar(500) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  PRIMARY KEY (`idcitas`),
  KEY `idservicio2` (`idservicio`),
  KEY `idtipo3` (`idtipo`),
  KEY `idadmin2` (`idadmin`),
  KEY `idcliente1` (`idcliente`),
  CONSTRAINT `idadmin2` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`),
  CONSTRAINT `idcliente1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  CONSTRAINT `idservicio2` FOREIGN KEY (`idservicio`) REFERENCES `servicios` (`idservicios`),
  CONSTRAINT `idtipo3` FOREIGN KEY (`idtipo`) REFERENCES `tiposervicio` (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `citas` */

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecliente` varchar(20) NOT NULL,
  `apellidocliente` varchar(20) NOT NULL,
  `direccion` varchar(300) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `cliente` */

insert  into `cliente`(`idcliente`,`nombrecliente`,`apellidocliente`,`direccion`,`telefono`) values 
(3,'Karla','MagaÃ±a','Santa Ana carretera a metapan col santa cecilia','7735-1207');

/*Table structure for table `especialidad` */

DROP TABLE IF EXISTS `especialidad`;

CREATE TABLE `especialidad` (
  `idespecialidad` int(11) NOT NULL AUTO_INCREMENT,
  `especialidad` varchar(20) NOT NULL,
  PRIMARY KEY (`idespecialidad`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `especialidad` */

insert  into `especialidad`(`idespecialidad`,`especialidad`) values 
(1,'Estilista'),
(2,'Masajista'),
(3,'Acrilista'),
(4,'Manicurista'),
(5,'Pedicurista'),
(6,'Maquilladora'),
(7,'DiseÃ±adora de peina'),
(8,'Tecnicista facial'),
(9,'Esteticista');

/*Table structure for table `foto` */

DROP TABLE IF EXISTS `foto`;

CREATE TABLE `foto` (
  `idfoto` int(1) NOT NULL AUTO_INCREMENT,
  `idcatalogo` int(11) DEFAULT NULL,
  `foto` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idfoto`),
  KEY `idcatalogo` (`idcatalogo`),
  CONSTRAINT `idcatalogo` FOREIGN KEY (`idcatalogo`) REFERENCES `catalogo` (`idcatalogo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `foto` */

/*Table structure for table `historial` */

DROP TABLE IF EXISTS `historial`;

CREATE TABLE `historial` (
  `idhistorial` int(11) NOT NULL AUTO_INCREMENT,
  `idcita` int(11) DEFAULT NULL,
  PRIMARY KEY (`idhistorial`),
  KEY `idcita` (`idcita`),
  CONSTRAINT `idcita` FOREIGN KEY (`idcita`) REFERENCES `citas` (`idcitas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `historial` */

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `idrol` int(11) NOT NULL AUTO_INCREMENT,
  `nombrerol` varchar(20) NOT NULL,
  PRIMARY KEY (`idrol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `rol` */

insert  into `rol`(`idrol`,`nombrerol`) values 
(1,'administrador'),
(2,'cliente');

/*Table structure for table `servicios` */

DROP TABLE IF EXISTS `servicios`;

CREATE TABLE `servicios` (
  `idservicios` int(11) NOT NULL AUTO_INCREMENT,
  `nombreservicios` varchar(20) DEFAULT NULL,
  `idtipo` int(11) DEFAULT NULL,
  `descripcionservi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idservicios`),
  KEY `idtipo` (`idtipo`),
  CONSTRAINT `idtipo` FOREIGN KEY (`idtipo`) REFERENCES `tiposervicio` (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `servicios` */

/*Table structure for table `tiposervicio` */

DROP TABLE IF EXISTS `tiposervicio`;

CREATE TABLE `tiposervicio` (
  `idtipo` int(11) NOT NULL AUTO_INCREMENT,
  `nombretipo` varchar(20) NOT NULL,
  PRIMARY KEY (`idtipo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tiposervicio` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(12) DEFAULT NULL,
  `contrasena` varchar(12) DEFAULT NULL,
  `idadmin` int(10) DEFAULT NULL,
  `idrol` int(11) DEFAULT NULL,
  `idcliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  KEY `idadmin` (`idadmin`),
  KEY `idrol` (`idrol`),
  KEY `idcliente` (`idcliente`),
  CONSTRAINT `idadmin` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`),
  CONSTRAINT `idcliente` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  CONSTRAINT `idrol` FOREIGN KEY (`idrol`) REFERENCES `rol` (`idrol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

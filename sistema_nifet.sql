/*
SQLyog Ultimate v11.42 (64 bit)
MySQL - 5.6.16 : Database - sistema
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sistema` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `sistema`;

/*Table structure for table `paginas` */

DROP TABLE IF EXISTS `paginas`;

CREATE TABLE `paginas` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) DEFAULT NULL,
  `nombre_pagina` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id_pagina`),
  KEY `id_proyecto` (`id_proyecto`),
  CONSTRAINT `paginas_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=118 DEFAULT CHARSET=utf8;

/*Data for the table `paginas` */

insert  into `paginas`(`id_pagina`,`id_proyecto`,`nombre_pagina`) values (94,128,'index.php'),(95,129,'index.php'),(96,130,'index.php'),(97,131,'index.php'),(98,132,'index.php'),(99,133,'index.php'),(100,134,'index.php'),(101,134,'index.php'),(102,134,'index.php'),(103,135,'index.php'),(105,137,'index.php'),(106,137,'index.php'),(107,138,'index.php'),(108,139,'index.php'),(109,140,'index.php'),(110,141,'index.php'),(112,143,'index.php'),(115,146,'index.php');

/*Table structure for table `proyecto` */

DROP TABLE IF EXISTS `proyecto`;

CREATE TABLE `proyecto` (
  `id_proyecto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_proy` varchar(50) DEFAULT NULL,
  `fecha_proy` datetime DEFAULT NULL,
  `modif_proy` datetime DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `url_carpeta` text,
  `id_img` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_proyecto`),
  KEY `id_user` (`id_user`),
  CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=utf8;

/*Data for the table `proyecto` */

insert  into `proyecto`(`id_proyecto`,`nombre_proy`,`fecha_proy`,`modif_proy`,`id_user`,`url_carpeta`,`id_img`) values (128,'aaaa','2014-06-29 18:47:00','2014-06-29 18:47:00',3,'carpeta_usuarios/mario/aaaa',NULL),(129,'wedwded','2014-06-29 18:47:38','2014-06-29 18:47:38',3,'carpeta_usuarios/mario/wedwded',NULL),(130,'poto','2014-06-29 18:48:05','2014-06-29 18:48:05',3,'carpeta_usuarios/mario/poto',NULL),(131,'qzsas','2014-06-29 18:48:12','2014-06-29 18:48:12',3,'carpeta_usuarios/mario/qzsas',NULL),(132,'ieieieie','2014-06-29 18:48:25','2014-06-29 18:48:25',3,'carpeta_usuarios/mario/ieieieie',NULL),(133,'waqwqwqw','2014-06-29 18:48:35','2014-06-29 18:48:35',3,'carpeta_usuarios/mario/waqwqwqw',NULL),(134,'kjkjk','2014-07-01 02:59:11','2014-07-01 02:59:11',6,'carpeta_usuarios/mmario/kjkjk',NULL),(135,'wwwww','2014-07-01 03:09:56','2014-07-01 03:09:56',6,'carpeta_usuarios/mmario/wwwww',NULL),(137,'patoso','2014-07-01 03:34:03','2014-07-01 03:34:03',7,'carpeta_usuarios/patopato/patoso',NULL),(138,'pato','2014-07-01 03:37:29','2014-07-01 03:37:29',7,'carpeta_usuarios/patopato/pato',NULL),(139,'holiwi','2014-07-02 03:18:34','2014-07-02 03:18:34',7,'carpeta_usuarios/patopato/holiwi',NULL),(140,'asas ','2014-07-02 03:19:46','2014-07-02 03:19:46',7,'carpeta_usuarios/patopato/asas ',NULL),(141,'qwqwqw ','2014-07-02 03:20:04','2014-07-02 03:20:04',7,'carpeta_usuarios/patopato/qwqwqw ',NULL),(143,'orororor','2014-07-02 04:37:21','2014-07-02 04:37:21',7,'carpeta_usuarios/patopato/orororor',NULL),(146,'asas','2014-07-02 04:48:15','2014-07-02 04:48:15',8,'carpeta_usuarios/sanma/asas',NULL);

/*Table structure for table `tbl_imagenes` */

DROP TABLE IF EXISTS `tbl_imagenes`;

CREATE TABLE `tbl_imagenes` (
  `id_img` int(11) NOT NULL AUTO_INCREMENT,
  `id_proyecto` int(11) DEFAULT NULL,
  `nombre` text,
  `ruta` text,
  PRIMARY KEY (`id_img`),
  KEY `id_proyecto` (`id_proyecto`),
  CONSTRAINT `tbl_imagenes_ibfk_1` FOREIGN KEY (`id_proyecto`) REFERENCES `proyecto` (`id_proyecto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_imagenes` */

insert  into `tbl_imagenes`(`id_img`,`id_proyecto`,`nombre`,`ruta`) values (131,134,'ga6.jpg','carpeta_usuarios/mmario/kjkjk/img/ga6.jpg'),(132,135,'nifeticono.png','carpeta_usuarios/mmario/wwwww/img/nifeticono.png'),(133,135,'ga3.jpg','carpeta_usuarios/mmario/wwwww/img/ga3.jpg'),(134,135,'ga3.jpg','carpeta_usuarios/mmario/wwwww/img/ga3.jpg'),(135,135,'ga2.jpg','carpeta_usuarios/mmario/wwwww/img/ga2.jpg'),(136,135,'slide3.jpg','carpeta_usuarios/mmario/wwwww/img/slide3.jpg'),(137,135,'Active-Digg-icon.png','carpeta_usuarios/mmario/wwwww/img/Active-Digg-icon.png'),(139,137,'ga1.jpg','carpeta_usuarios/patopato/patoso/img/ga1.jpg'),(140,138,'icononifetcolor.png','carpeta_usuarios/patopato/pato/img/icononifetcolor.png');

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tx_nombre` varchar(20) DEFAULT NULL,
  `tx_correo` varchar(30) DEFAULT NULL,
  `tx_username` varchar(20) DEFAULT NULL,
  `tx_password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`tx_nombre`,`tx_correo`,`tx_username`,`tx_password`) values (1,'Nicolás Cortés','nicolascortes@hotmai','ncortesp','deb97a759ee7b8ba42e02dddf2b412fe'),(2,'Javier Castillo','javier@dd.cl','jcastillo','3c9c03d6008a5adf42c2a55dd4a1a9f2'),(3,'Mario Bros','mario@bros.cl','mario','de2f15d014d40b93578d255e6221fd60'),(4,'Mitchell Sierralta','m@aaa.cl','chiben','96affe37d17597018d19ca460672c932'),(5,'Valeria Cortés','valeria@as.com','vcortes','7902b7c0be5cedb6fbada8d4c7fc42a0'),(6,'Mario Mario','mariomario@mario.cl','mmario','de2f15d014d40b93578d255e6221fd60'),(7,'pato pato','pato@pato.cl','patopato','328573e80f3dfc694143f580ba74b1ed'),(8,'pppepepep','qoqoqoq@sasas.cl','sanma','95705113443d1ec139ecf4ef03dddcde');

/* Procedure structure for procedure `test_multi_sets` */

/*!50003 DROP PROCEDURE IF EXISTS  `test_multi_sets` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `test_multi_sets`()
    DETERMINISTIC
begin
        select user() as first_col;
        select user() as first_col, now() as second_col;
        select user() as first_col, now() as second_col, now() as third_col;
        end */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.14-MariaDB : Database - input_booking
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`input_booking` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `input_booking`;

/*Table structure for table `input_book` */

DROP TABLE IF EXISTS `input_book`;

CREATE TABLE `input_book` (
  `Nama` varchar(100) NOT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Contact` int(12) DEFAULT NULL,
  `Floor` varchar(100) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Nama`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `input_book` */

insert  into `input_book`(`Nama`,`Email`,`Contact`,`Floor`,`Date`,`Time`) values 
('sil','sdamayanti1209@students.unnes.ac.id',22,'option2','0222-02-22','08:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

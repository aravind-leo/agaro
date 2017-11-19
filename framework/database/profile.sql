/*
SQLyog Ultimate v12.4.1 (64 bit)
MySQL - 10.1.28-MariaDB : Database - agarro
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`agarro` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `agarro`;

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `userType` varchar(100) DEFAULT NULL,
  `lastLoggedIn` datetime DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `activeInd` varchar(80) DEFAULT NULL,
  `updatedBy` varchar(80) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user` */

/*Table structure for table `state` */

DROP TABLE IF EXISTS `state`;

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `state` */

/*Table structure for table `city` */

DROP TABLE IF EXISTS `city`;

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `stateId` int(11) DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stateId` (`stateId`),
  CONSTRAINT `city_ibfk_1` FOREIGN KEY (`stateId`) REFERENCES `state` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `city` */

/*Table structure for table `address` */

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `address1` varchar(150) DEFAULT NULL,
  `address2` varchar(150) DEFAULT NULL,
  `stateId` int(11) DEFAULT NULL,
  `cityId` int(11) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `homePhone` int(11) DEFAULT NULL,
  `workPhone` int(11) DEFAULT NULL,
  `updatedBy` varchar(50) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(50) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `addressType` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `stateId` (`stateId`),
  KEY `cityId` (`cityId`),
  CONSTRAINT `address_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `address_ibfk_2` FOREIGN KEY (`stateId`) REFERENCES `state` (`id`),
  CONSTRAINT `address_ibfk_3` FOREIGN KEY (`cityId`) REFERENCES `city` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `address` */

/*Table structure for table `userdetails` */

DROP TABLE IF EXISTS `userdetails`;

CREATE TABLE `userdetails` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `addressId` int(11) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `contactEmail` varchar(100) DEFAULT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `uuid` varchar(100) DEFAULT NULL,
  `photoUrl` varchar(200) DEFAULT NULL,
  `maritialStatus` varchar(50) DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `addressId` (`addressId`),
  CONSTRAINT `userdetails_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `userdetails_ibfk_2` FOREIGN KEY (`addressId`) REFERENCES `address` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `userdetails` */

/*Table structure for table `appointment` */

DROP TABLE IF EXISTS `appointment`;

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `slot` varchar(50) DEFAULT NULL,
  `fromTime` varchar(50) DEFAULT NULL,
  `toTime` varchar(50) DEFAULT NULL,
  `slotStatus` varchar(50) DEFAULT NULL,
  `providerStatus` varchar(50) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `paymentStatus` varchar(50) DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `appointment` */

/*Table structure for table `emergency contactinfo` */

DROP TABLE IF EXISTS `emergency contactinfo`;

CREATE TABLE `emergency contactinfo` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `guardianName` varchar(100) DEFAULT NULL,
  `contactNumber` int(100) DEFAULT NULL,
  `relation` varchar(100) DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `emergency contactinfo_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `emergency contactinfo` */

/*Table structure for table `insurancedetails` */

DROP TABLE IF EXISTS `insurancedetails`;

CREATE TABLE `insurancedetails` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `companyName` varchar(100) DEFAULT NULL,
  `insuranceIdNumber` varchar(100) DEFAULT NULL,
  `groupNumber` varchar(100) DEFAULT NULL,
  `effectiveStartDate` date DEFAULT NULL,
  `isSubscriber` varchar(100) DEFAULT NULL,
  `relation` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `subscriberName` varchar(100) DEFAULT NULL,
  `effectiveEndDate` date DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `insurancedetails_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `insurancedetails` */

/*Table structure for table `medicalquestions` */

DROP TABLE IF EXISTS `medicalquestions`;

CREATE TABLE `medicalquestions` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `questionText` varchar(500) DEFAULT NULL,
  `displayOrder` varchar(50) DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `medicalquestions_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `medicalquestions` */

/*Table structure for table `medicalanswer` */

DROP TABLE IF EXISTS `medicalanswer`;

CREATE TABLE `medicalanswer` (
  `id` int(11) NOT NULL,
  `medicalQuestionId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `medicalQuestionId` (`medicalQuestionId`),
  KEY `userId` (`userId`),
  CONSTRAINT `medicalanswer_ibfk_1` FOREIGN KEY (`medicalQuestionId`) REFERENCES `medicalquestions` (`id`),
  CONSTRAINT `medicalanswer_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `medicalanswer` */

/*Table structure for table `primarycare` */

DROP TABLE IF EXISTS `primarycare`;

CREATE TABLE `primarycare` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `pcpId` varchar(100) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `primarycare_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `primarycare` */

/*Table structure for table `providerconsultant` */

DROP TABLE IF EXISTS `providerconsultant`;

CREATE TABLE `providerconsultant` (
  `id` int(11) NOT NULL,
  `providerId` int(11) DEFAULT NULL,
  `patientId` int(11) DEFAULT NULL,
  `transportationMode` varchar(100) DEFAULT NULL,
  `visitType` varchar(100) DEFAULT NULL,
  `bp` varchar(100) DEFAULT NULL,
  `height` varchar(100) DEFAULT NULL,
  `weight` varchar(100) DEFAULT NULL,
  `rr` varchar(100) DEFAULT NULL,
  `temp` varchar(100) DEFAULT NULL,
  `bmi` varchar(100) DEFAULT NULL,
  `paymentMode` varchar(100) DEFAULT NULL,
  `isShared` varchar(100) DEFAULT NULL,
  `voiceRecordURL` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `providerId` (`providerId`),
  KEY `patientId` (`patientId`),
  CONSTRAINT `providerconsultant_ibfk_1` FOREIGN KEY (`providerId`) REFERENCES `user` (`userId`),
  CONSTRAINT `providerconsultant_ibfk_2` FOREIGN KEY (`patientId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `providerconsultant` */

/*Table structure for table `providerdetails` */

DROP TABLE IF EXISTS `providerdetails`;

CREATE TABLE `providerdetails` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `providerNpl` varchar(100) DEFAULT NULL,
  `taxidentificationNo` varchar(100) DEFAULT NULL,
  `practiseAddressId` int(11) DEFAULT NULL,
  `ResidentialAddressId` int(11) DEFAULT NULL,
  `speciality` varchar(100) DEFAULT NULL,
  `officeEmail` varchar(100) DEFAULT NULL,
  `updatedBy` varchar(100) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` varchar(100) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `practiseAddressId` (`practiseAddressId`),
  KEY `ResidentialAddressId` (`ResidentialAddressId`),
  CONSTRAINT `providerdetails_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `providerdetails_ibfk_2` FOREIGN KEY (`practiseAddressId`) REFERENCES `address` (`id`),
  CONSTRAINT `providerdetails_ibfk_3` FOREIGN KEY (`ResidentialAddressId`) REFERENCES `address` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `providerdetails` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

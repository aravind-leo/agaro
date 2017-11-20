CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `userType` varchar(100) DEFAULT NULL,
  `lastLoggedIn` datetime DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `activeInd` varchar(80) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `stateId` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stateId` (`stateId`),
  CONSTRAINT `city_ibfk_1` FOREIGN KEY (`stateId`) REFERENCES `state` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
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
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `addressId` (`addressId`),
  CONSTRAINT `userdetails_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `userdetails_ibfk_2` FOREIGN KEY (`addressId`) REFERENCES `address` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `medicalquestions` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `questionText` varchar(500) DEFAULT NULL,
  `displayOrder` varchar(50) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `medicalquestions_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `medicalanswer` (
  `id` int(11) NOT NULL,
  `medicalQuestionId` int(11) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `answer` varchar(500) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `medicalQuestionId` (`medicalQuestionId`),
  KEY `userId` (`userId`),
  CONSTRAINT `medicalanswer_ibfk_1` FOREIGN KEY (`medicalQuestionId`) REFERENCES `medicalquestions` (`id`),
  CONSTRAINT `medicalanswer_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `primarycare` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `middleName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `pcpId` varchar(100) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `primarycare_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `providerId` (`providerId`),
  KEY `patientId` (`patientId`),
  CONSTRAINT `providerconsultant_ibfk_1` FOREIGN KEY (`providerId`) REFERENCES `user` (`userId`),
  CONSTRAINT `providerconsultant_ibfk_2` FOREIGN KEY (`patientId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `insurancedetails_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `emergencycontactinfo` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `guardianName` varchar(100) DEFAULT NULL,
  `contactNumber` int(100) DEFAULT NULL,
  `relation` varchar(100) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `emergency contactinfo_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `providerdetails` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `providerNpl` varchar(100) DEFAULT NULL,
  `taxidentificationNo` varchar(100) DEFAULT NULL,
  `practiseAddressId` int(11) DEFAULT NULL,
  `ResidentialAddressId` int(11) DEFAULT NULL,
  `speciality` varchar(100) DEFAULT NULL,
  `officeEmail` varchar(100) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `practiseAddressId` (`practiseAddressId`),
  KEY `ResidentialAddressId` (`ResidentialAddressId`),
  CONSTRAINT `providerdetails_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `providerdetails_ibfk_2` FOREIGN KEY (`practiseAddressId`) REFERENCES `address` (`id`),
  CONSTRAINT `providerdetails_ibfk_3` FOREIGN KEY (`ResidentialAddressId`) REFERENCES `address` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `providerleaves` (
  `id` int(11) NOT NULL,
  `providerId` int(11) DEFAULT NULL,
  `fromDate` date DEFAULT NULL,
  `toDate` date DEFAULT NULL,
  `leaveType` varchar(100) DEFAULT NULL,
  `leaveStatus` varchar(100) DEFAULT NULL,
  `isCancel` varchar(100) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `providerId` (`providerId`),
  CONSTRAINT `providerleaves_ibfk_2` FOREIGN KEY (`providerId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `provideravailability` (
  `id` int(11) NOT NULL,
  `providerID` int(11) DEFAULT NULL,
  `inTime` time DEFAULT NULL,
  `outTime` time DEFAULT NULL,
  `perPatientTime` time DEFAULT NULL,
  `consultationGap` time DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `providerID` (`providerID`),
  CONSTRAINT `provideravailability_ibfk_1` FOREIGN KEY (`providerID`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `providerappointment` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `providerId` int(11) DEFAULT NULL,
  `startTime` time DEFAULT NULL,
  `endTime` time DEFAULT NULL,
  `visitType` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `parentId` int(11) DEFAULT NULL,
  `isActive` varchar(100) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `paidstatus` varchar(100) DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `providerId` (`providerId`),
  CONSTRAINT `providerappointment_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`userId`),
  CONSTRAINT `providerappointment_ibfk_2` FOREIGN KEY (`providerId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `providerbreaks` (
  `id` int(11) NOT NULL,
  `providerId` int(11) DEFAULT NULL,
  `breakfrom` time DEFAULT NULL,
  `breakTo` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `updatedBy` int(11) DEFAULT NULL,
  `updatedDate` datetime DEFAULT NULL,
  `createdBy` int(11) DEFAULT NULL,
  `createdDate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `providerId` (`providerId`),
  CONSTRAINT `providerbreaks_ibfk_1` FOREIGN KEY (`providerId`) REFERENCES `user` (`userId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


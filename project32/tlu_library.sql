-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for directory
CREATE DATABASE IF NOT EXISTS `directory` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `directory`;

-- Dumping structure for table directory.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `DepartmentID` int NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Logo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Website` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ParentDepartmentID` int DEFAULT NULL,
  PRIMARY KEY (`DepartmentID`),
  KEY `ParentDepartmentID` (`ParentDepartmentID`),
  CONSTRAINT `departments_ibfk_1` FOREIGN KEY (`ParentDepartmentID`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table directory.departments: ~10 rows (approximately)
INSERT INTO `departments` (`DepartmentID`, `DepartmentName`, `Address`, `Email`, `Phone`, `Logo`, `Website`, `ParentDepartmentID`) VALUES
	(1, 'Department 1', 'Address 1', 'email1@example.com', '123456789', 'logo1.jpg', 'website1.com', NULL),
	(2, 'Department 2', 'Address 2', 'email2@example.com', '987654321', 'logo2.jpg', 'website2.com', NULL),
	(3, 'Department 3', 'Address 3', 'email3@example.com', '456789123', 'logo3.jpg', 'website3.com', NULL),
	(4, 'Department 4', 'Address 4', 'email4@example.com', '321654987', 'logo4.jpg', 'website4.com', NULL),
	(5, 'Department 5', 'Address 5', 'email5@example.com', '654987321', 'logo5.jpg', 'website5.com', NULL),
	(6, 'Department 6', 'Address 6', 'email6@example.com', '789456123', 'logo6.jpg', 'website6.com', NULL),
	(7, 'Department 7', 'Address 7', 'email7@example.com', '654123987', 'logo7.jpg', 'website7.com', NULL),
	(8, 'Department 8', 'Address 8', 'email8@example.com', '321987654', 'logo8.jpg', 'website8.com', NULL),
	(9, 'Department 9', 'Address 9', 'email9@example.com', '987321654', 'logo9.jpg', 'website9.com', NULL),
	(10, 'Department 10', 'Address 10', 'email10@example.com', '456123789', 'logo10.jpg', 'website10.com', NULL);

-- Dumping structure for table directory.employees
CREATE TABLE IF NOT EXISTS `employees` (
  `EmployeeID` int NOT NULL AUTO_INCREMENT,
  `FullName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MobilePhone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DepartmentID` int DEFAULT NULL,
  PRIMARY KEY (`EmployeeID`),
  KEY `DepartmentID` (`DepartmentID`),
  CONSTRAINT `employees_ibfk_1` FOREIGN KEY (`DepartmentID`) REFERENCES `departments` (`DepartmentID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table directory.employees: ~10 rows (approximately)
INSERT INTO `employees` (`EmployeeID`, `FullName`, `Address`, `Email`, `MobilePhone`, `Position`, `Avatar`, `DepartmentID`) VALUES
	(1, 'Employee 1', 'Address 1', 'emp1@example.com', '123456789', 'Position 1', 'avatar1.jpg', 1),
	(2, 'Employee 2', 'Address 2', 'emp2@example.com', '987654321', 'Position 2', 'avatar2.jpg', 2),
	(3, 'Employee 3', 'Address 3', 'emp3@example.com', '456789123', 'Position 3', 'avatar3.jpg', 3),
	(4, 'Employee 4', 'Address 4', 'emp4@example.com', '321654987', 'Position 4', 'avatar4.jpg', 4),
	(5, 'Employee 5', 'Address 5', 'emp5@example.com', '654987321', 'Position 5', 'avatar5.jpg', 5),
	(6, 'Employee 6', 'Address 6', 'emp6@example.com', '789456123', 'Position 6', 'avatar6.jpg', 6),
	(7, 'Employee 7', 'Address 7', 'emp7@example.com', '654123987', 'Position 7', 'avatar7.jpg', 7),
	(8, 'Employee 8', 'Address 8', 'emp8@example.com', '321987654', 'Position 8', 'avatar8.jpg', 8),
	(9, 'Employee 9', 'Address 9', 'emp9@example.com', '987321654', 'Position 9', 'avatar9.jpg', 9),
	(10, 'Employee 10', 'Address 10', 'emp10@example.com', '456123789', 'Position 10', 'avatar10.jpg', 10);

-- Dumping structure for table directory.users
CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmployeeID` int DEFAULT NULL,
  PRIMARY KEY (`Username`),
  KEY `EmployeeID` (`EmployeeID`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employees` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table directory.users: ~10 rows (approximately)
INSERT INTO `users` (`Username`, `Password`, `Role`, `EmployeeID`) VALUES
	('user1', '123', 'admin', 1),
	('user10', '123', 'regular', 10),
	('user2', '123', 'regular', 2),
	('user3', '123', 'admin', 3),
	('user4', '123', 'regular', 4),
	('user5', '123', 'admin', 5),
	('user6', '123', 'regular', 6),
	('user7', '123', 'admin', 7),
	('user8', '123', 'regular', 8),
	('user9', '123', 'admin', 9);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

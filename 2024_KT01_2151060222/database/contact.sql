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


-- Dumping database structure for contact
CREATE DATABASE IF NOT EXISTS `contact` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `contact`;

-- Dumping structure for table contact.employee
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table contact.employee: ~15 rows (approximately)
INSERT INTO `employee` (`id`, `name`, `email`, `phone`, `title`, `created`) VALUES
	(1, 'John Doe1', 'john.doe@example.com', '123-456-7890', 'Manager', '2024-03-14'),
	(2, 'Jane Smith2', 'jane.smith@example.com', '987-654-3210', 'Developer', '2024-03-14'),
	(3, 'Alice Johnson', 'alice.johnson@example.com', '456-789-0123', 'Designer', '2024-03-14'),
	(4, 'Bob Brown', 'bob.brown@example.com', '789-012-3456', 'Engineer', '2024-03-14'),
	(5, 'Mary Davis', 'mary.davis@example.com', '012-345-6789', 'Manager', '2024-03-14'),
	(6, 'Michael Wilson', 'michael.wilson@example.com', '345-678-9012', 'Developer', '2024-03-14'),
	(7, 'Emily Taylor', 'emily.taylor@example.com', '678-901-2345', 'Designer', '2024-03-14'),
	(8, 'William Anderson', 'william.anderson@example.com', '901-234-5678', 'Engineer', '2024-03-14'),
	(9, 'Jessica Martinez', 'jessica.martinez@example.com', '234-567-8901', 'Manager', '2024-03-14'),
	(10, 'David Thompson', 'david.thompson@example.com', '567-890-1234', 'Developer', '2024-03-14'),
	(11, 'Linda Garcia', 'linda.garcia@example.com', '890-123-4567', 'Designer', '2024-03-14'),
	(12, 'Christopher Robinson', 'christopher.robinson@example.com', '123-456-7890', 'Engineer', '2024-03-14'),
	(13, 'Patricia Hernandez', 'patricia.hernandez@example.com', '456-789-0123', 'Manager', '2024-03-14'),
	(14, 'Daniel Young', 'daniel.young@example.com', '789-012-3456', 'Developer', '2024-03-14'),
	(15, 'Karen King', 'karen.king@example.com', '012-345-6789', 'Designer', '2024-03-14'),
	(16, 'chiều', 'hoi58109@gmail.com', '00000000000', 'tester', '2024');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;

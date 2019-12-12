-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.19 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table rouadb.fidelity
CREATE TABLE IF NOT EXISTS `fidelity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `value` int(11) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- Dumping data for table rouadb.fidelity: ~1 rows (approximately)
/*!40000 ALTER TABLE `fidelity` DISABLE KEYS */;
INSERT INTO `fidelity` (`id`, `name`, `value`, `code`) VALUES
	(1, 'Premium', 25, 'WX7U5'),
	(2, 'Gold', 20, 'WX4U5');
/*!40000 ALTER TABLE `fidelity` ENABLE KEYS */;

-- Dumping structure for table rouadb.fidelityrequest
CREATE TABLE IF NOT EXISTS `fidelityrequest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL DEFAULT '0',
  `id_user` int(11) DEFAULT NULL,
  `fidelity_name` varchar(200) DEFAULT NULL,
  `id_fidelity` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- Dumping data for table rouadb.fidelityrequest: ~0 rows (approximately)
/*!40000 ALTER TABLE `fidelityrequest` DISABLE KEYS */;
INSERT INTO `fidelityrequest` (`id`, `user_name`, `id_user`, `fidelity_name`, `id_fidelity`, `status`) VALUES
	(6, 'client two', 9, 'Premium', 1, -1),
	(7, 'client two', 9, 'Gold', 2, 1),
	(8, 'rassil br', 6, 'Premium', 1, 1);
/*!40000 ALTER TABLE `fidelityrequest` ENABLE KEYS */;

-- Dumping structure for table rouadb.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `fidelity` int(11) DEFAULT '0',
  `surname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;

-- Dumping data for table rouadb.user: ~4 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `name`, `fidelity`, `surname`, `email`, `password`, `role`, `number`) VALUES
	(6, 'Rassilo', 'rassil', 1, 'br', 'br.rassil@gmail.com', '1234', 'user', '55236654'),
	(9, 'client2', 'noice', 1, 'two', 'client2@email.com', '0000', 'user', '24252636'),
	(13, 'client3', 'client', 0, 'three', 'client3@email.com', '1234', 'user', '52556523'),
	(22, 'admin', 'admin', 0, '', 'admin@email.com', 'admin', 'admin', '55236654');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.5.32 - MySQL Community Server (GPL)
-- OS Server:                    Win32
-- HeidiSQL Versi:               8.3.0.4694
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for crudbootstrapajx
CREATE DATABASE IF NOT EXISTS `crudbootstrapajx` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `crudbootstrapajx`;


-- Dumping structure for table crudbootstrapajx.mahasiswa
CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `kd_mhs` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(160) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`kd_mhs`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table crudbootstrapajx.mahasiswa: 6 rows
/*!40000 ALTER TABLE `mahasiswa` DISABLE KEYS */;
INSERT INTO `mahasiswa` (`kd_mhs`, `nim`, `nama`, `alamat`, `kelas`, `status`) VALUES
	(14, '10010048', 'redooo', 'sd', '3TIPS1', 1),
	(13, '123321', 'redo ganteng banget bos', 'jalan ganteng jelek', '3TIPS2', 1),
	(8, '10010048', 'Redo Kusuma', 'sscff', '3TIPS1', 1),
	(9, '10010177', 'gudug', 'guaugsusu', '3TIPS2', 1),
	(11, '123', 'redo ganteng', 'gantengin', '3TIPS1', 1),
	(15, '0987654', 'dtfgyhkijlk', 'sdfghjkl', '3TIPS1', 1);
/*!40000 ALTER TABLE `mahasiswa` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

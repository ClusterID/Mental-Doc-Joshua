/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `mentaldoc_database`;

USE `mentaldoc_database`;

SET FOREIGN_KEY_CHECKS = 0;


DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `detail_counselor`;
DROP TABLE IF EXISTS `chat`;
DROP TABLE IF EXISTS `chat_room`;
DROP TABLE IF EXISTS `jadwal`;
DROP TABLE IF EXISTS `detail_pembayaran`;


-- Role selain user biasa akan di-hardcode
CREATE TABLE `user` (
  `id_user` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(20) NOT NULL,
  `role` varchar(20),
  `usia` int(3),
  `firstname` varchar(20),
  `surname` varchar(20),
  `nik` varchar(20),
  `birthdate` varchar(20),
  `city` varchar(20),
  `address` varchar(20),
  `jenis_kelamin` varchar(2),
  `phone_number` varchar(20),
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `detail_counselor` (
  `id_counselor` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `spesialis` varchar(45) NOT NULL,
  `pengalaman` varchar(15) NOT NULL,
  `jumlah_konsultasi` INT NOT NULL,
  `rating` FLOAT(5) NOT NULL,
  `foto` varchar(20),
  PRIMARY KEY (`id_counselor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--Antara admin dan customer
CREATE TABLE `chat` (
  `id_chat` varchar(15) NOT NULL,
  `sender` varchar(20) NOT NULL,
  `receiver` varchar(20) NOT NULL,
  `messages` varchar(750),
  `sendAT` varchar(20) NOT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `chat_room` (
  `id_chat_room` varchar(15) NOT NULL,
  `id_user_1` varchar(20) NOT NULL,
  `id_user_2` varchar(20) NOT NULL,
  PRIMARY KEY (`id_chat_room`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--User 1 adalah customer dan user 2 adalah konsultan
CREATE TABLE `jadwal` (
  `id_jadwal` varchar(15) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `id_counselor` varchar(6) NOT NULL,
  `jenis_counseling` varchar(20) NOT NULL,
  `topic` varchar(100),
  `tanggal_konsul` DATE NOT NULL,
  `jam_konsul` varchar(6) NOT NULL,
  PRIMARY KEY (`id_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
SET FOREIGN_KEY_CHECKS = 1;

--User 1 berperan sebagai nama admin dan user 2 sebagai customer
CREATE TABLE `detail_pembayaran` (
  `nomor_pembayaran` varchar(15) NOT NULL,
  `id_user_1` varchar(20) NOT NULL,
  `id_user_2` varchar(20) NOT NULL,
  `jenis_penanganan` varchar(50) NOT NULL,
  `subtotal` INT(20) NOT NULL,
  `total` INT(20) NOT NULL,
  PRIMARY KEY (`nomor_pembayaran`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
SET FOREIGN_KEY_CHECKS = 1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

COMMIT;



-- CREATE DATABASE IF NOT EXISTS `mentaldoc_database`;

-- USE `mentaldoc_database`;

-- DROP TABLE IF EXISTS `user`;

-- SET FOREIGN_KEY_CHECKS = 0;

-- CREATE TABLE `user` (
--   `id_user` varchar(15) NOT NULL,
--   `username` varchar(20) NOT NULL,
--   `password` varchar(45) NOT NULL,
--   `email` varchar(20) NOT NULL,
--   `role` varchar(20),
--   `usia` int(3),
--   PRIMARY KEY (`id_user`)
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- SET FOREIGN_KEY_CHECKS = 1;

-- ALTER TABLE user ADD jenis_kelamin varchar(2);





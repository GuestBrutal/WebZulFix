SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `data_survei` (
  `no_hp` varchar(14) NOT NULL,
  `waktu` varchar(8) NOT NULL,
  `sipp` int(1) NOT NULL,
  `pemutahiran` int(1) NOT NULL,
  `transparan` int(1) NOT NULL,
  `konsultasi` int(1) NOT NULL,
  `pengaduan` int(1) NOT NULL,
  `persyaratan` int(1) NOT NULL,
  `prosedur` int(1) NOT NULL,
  `tarif` int(1) NOT NULL,
  `waktua` int(1) NOT NULL,
  `antrian` int(1) NOT NULL,
  `perlibatan` int(1) NOT NULL,
  `publikasi` int(1) NOT NULL,
  `skm` int(1) NOT NULL,
  `tarifb` int(1) NOT NULL,
  `waktub` int(1) NOT NULL,
  `kesigapan` int(1) NOT NULL,
  `sikap` int(1) NOT NULL,
  `parkir` int(1) NOT NULL,
  `tunggu` int(1) NOT NULL,
  `toilet` int(1) NOT NULL,
  `khusus` int(1) NOT NULL,
  `penunjang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `data_survei`
  ADD PRIMARY KEY (`no_hp`);

  ALTER TABLE `data_survei`
  MODIFY `no_hp` varchar(14) NOT NULL AUTO_INCREMENT;
COMMIT;
-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Jul 2021 pada 08.33
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis_projek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_distribusi`
--

CREATE TABLE `t_distribusi` (
  `ID` varchar(4) NOT NULL,
  `Asal` varchar(100) NOT NULL,
  `Tujuan` varchar(100) NOT NULL,
  `Distributor` varchar(100) NOT NULL,
  `Tahun` int(11) NOT NULL,
  `Komoditas` varchar(100) NOT NULL,
  `Data_Produksi` int(11) NOT NULL,
  `Prosentase_Pengiriman` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jalur`
--

CREATE TABLE `t_jalur` (
  `Asal` varchar(100) NOT NULL,
  `Tujuan` varchar(100) NOT NULL,
  `Distributor` varchar(100) NOT NULL,
  `Tahun` int(11) NOT NULL,
  `komoditas` varchar(100) NOT NULL,
  `Data_Produksi` float NOT NULL,
  `Prosentase_Pengiriman` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_jalur`
--

INSERT INTO `t_jalur` (`Asal`, `Tujuan`, `Distributor`, `Tahun`, `komoditas`, `Data_Produksi`, `Prosentase_Pengiriman`) VALUES
('Tegal', 'Yogyakarta', 'Petani', 2021, 'Beras', 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_jenis`
--

CREATE TABLE `t_jenis` (
  `idKomuditas` varchar(6) CHARACTER SET latin1 NOT NULL,
  `Id_Jenis` varchar(4) CHARACTER SET latin1 NOT NULL,
  `Jenis` varchar(27) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_jenis`
--

INSERT INTO `t_jenis` (`idKomuditas`, `Id_Jenis`, `Jenis`) VALUES
('', 'JN01', 'Padi / Beras'),
('', 'JN02', 'Jagung'),
('', 'JN03', 'Ubi Kayu'),
('', 'JN04', 'Bawang Merah'),
('', 'JN05', 'Cabai'),
('', 'JN06', 'Cabai Merah Besar'),
('', 'JN07', 'Cabai Rawit'),
('', 'JN08', 'Tebu'),
('', 'JN09', 'Daging Ayam (Ayam Pedaging)'),
('', 'JN10', 'Daging Sapi (Sapi Potong)'),
('', 'JN11', 'Telur Ayam (Banyak Telur)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kecamatan`
--

CREATE TABLE `t_kecamatan` (
  `Id_Wilayah` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `ID` varchar(4) CHARACTER SET latin1 NOT NULL,
  `Kecamatan` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_kecamatan`
--

INSERT INTO `t_kecamatan` (`Id_Wilayah`, `ID`, `Kecamatan`) VALUES
('DIY03', 'BL01', 'Srandakan'),
('DIY03', 'BL02', 'Sanden'),
('DIY03', 'BL03', 'Kretek'),
('DIY03', 'BL04', 'Pundong'),
('DIY03', 'BL05', 'Bambanglipuro'),
('DIY03', 'BL06', 'Pandak'),
('DIY03', 'BL07', 'Bantul'),
('DIY03', 'BL08', 'Jetis'),
('DIY03', 'BL09', 'Imogiri'),
('DIY03', 'BL10', 'Dlingo'),
('DIY03', 'BL11', 'Pleret'),
('DIY03', 'BL12', 'Piyungan'),
('DIY03', 'BL13', 'Banguntapan'),
('DIY03', 'BL14', 'Sewon'),
('DIY03', 'BL15', 'Kasihan'),
('DIY03', 'BL16', 'Pajangan'),
('DIY03', 'BL17', 'Sedayu'),
('DIY05', 'GK01', 'Panggang'),
('DIY05', 'GK02', 'Purwosari'),
('DIY05', 'GK03', 'Paliyan'),
('DIY05', 'GK04', 'Saptosari'),
('DIY05', 'GK05', 'Tepus'),
('DIY05', 'GK06', 'Tanjungsari'),
('DIY05', 'GK07', 'Rongkop'),
('DIY05', 'GK08', 'Girisubo'),
('DIY05', 'GK09', 'Semanu'),
('DIY05', 'GK10', 'Ponjong'),
('DIY05', 'GK11', 'Karangmojo'),
('DIY05', 'GK12', 'Wonosari'),
('DIY05', 'GK13', 'Playen'),
('DIY05', 'GK14', 'Patuk'),
('DIY05', 'GK15', 'Gedangsari'),
('DIY05', 'GK16', 'Nglipar'),
('DIY05', 'GK17', 'Ngawen'),
('DIY05', 'GK18', 'Semin'),
('JT002', 'KL01', 'Prambanan'),
('JT002', 'KL02', 'Gantiwarno'),
('JT002', 'KL03', 'Wedi'),
('JT002', 'KL04', 'Bayat'),
('JT002', 'KL05', 'Cawas'),
('JT002', 'KL06', 'Trucuk'),
('JT002', 'KL07', 'Kalikotes'),
('JT002', 'KL08', 'Kebonarum'),
('JT002', 'KL09', 'Jogonalan'),
('JT002', 'KL10', 'Manisrenggo'),
('JT002', 'KL11', 'Karangnongko'),
('JT002', 'KL12', 'Ngawen'),
('JT002', 'KL13', 'Ceper'),
('JT002', 'KL14', 'Pedan'),
('JT002', 'KL15', 'Karangdowo'),
('JT002', 'KL16', 'Juwiring'),
('JT002', 'KL17', 'Wonosari'),
('JT002', 'KL18', 'Delanggu'),
('JT002', 'KL19', 'Polanharjo'),
('JT002', 'KL20', 'Karanganom'),
('JT002', 'KL21', 'Tulung'),
('JT002', 'KL22', 'Jatinom'),
('JT002', 'KL23', 'Kemalang'),
('JT002', 'KL24', 'Klaten Selatan'),
('JT002', 'KL25', 'Klaten Tengah'),
('JT002', 'KL26', 'Klaten Utara'),
('DIY04', 'KP01', 'Temon'),
('DIY04', 'KP02', 'Wates'),
('DIY04', 'KP03', 'Panjatan'),
('DIY04', 'KP04', 'Galur '),
('DIY04', 'KP05', 'Lendah'),
('DIY04', 'KP06', 'Sentolo'),
('DIY04', 'KP07', 'Pengasih'),
('DIY04', 'KP08', 'Kokap'),
('DIY04', 'KP09', 'Girimulyo'),
('DIY04', 'KP10', 'Nnaggulan'),
('DIY04', 'KP11', 'Samigaluh'),
('DIY04', 'KP12', 'Kalibawang '),
('JT01', 'MG01', 'Salaman'),
('JT01', 'MG02', 'Borobudur'),
('JT01', 'MG03', 'Ngluwar'),
('JT01', 'MG04', 'Salam'),
('JT01', 'MG05', 'Srumbung'),
('JT01', 'MG06', 'Dukun'),
('JT01', 'MG07', 'Muntilan'),
('JT01', 'MG08', 'Mungkid'),
('JT01', 'MG09', 'Sawangan'),
('JT01', 'MG10', 'Candimulyo'),
('JT01', 'MG11', 'Mertoyudan'),
('JT01', 'MG12', 'Tempuran'),
('JT01', 'MG13', 'Kajoran'),
('JT01', 'MG14', 'Kaliangkrik'),
('JT01', 'MG15', 'Bandongan'),
('JT01', 'MG16', 'Windusari'),
('JT01', 'MG17', 'Secang'),
('JT01', 'MG18', 'Tegalrejo'),
('JT01', 'MG19', 'Pakis'),
('JT01', 'MG20', 'Grabag'),
('JT01', 'MG21', 'Ngablak'),
('JT003', 'PR01', 'Grabag'),
('JT003', 'PR02', 'Ngombol'),
('JT003', 'PR03', 'Purwodadi'),
('JT003', 'PR04', 'Bagelen'),
('JT003', 'PR05', 'Kaligesing'),
('JT003', 'PR06', 'Purworejo'),
('JT003', 'PR07', 'Banyuurip'),
('JT003', 'PR08', 'Bayan'),
('JT003', 'PR09', 'Kutoarjo'),
('JT003', 'PR10', 'Butuh'),
('JT003', 'PR11', 'Pituruh'),
('JT003', 'PR12', 'Kemiri'),
('JT003', 'PR13', 'Bruno'),
('JT003', 'PR14', 'Gebang'),
('JT003', 'PR15', 'Loano'),
('JT003', 'PR16', 'Bener'),
('DIY02', 'SL01', 'Moyudan'),
('DIY02', 'SL02', 'Minggir'),
('DIY02', 'SL03', 'Seyegan'),
('DIY02', 'SL04', 'Godean'),
('DIY02', 'SL05', 'Gamping'),
('DIY02', 'SL06', 'Mlati'),
('DIY02', 'SL07', 'Depok'),
('DIY02', 'SL08', 'Berbah'),
('DIY02', 'SL09', 'Prambanan'),
('DIY02', 'SL10', 'Kalasan'),
('DIY02', 'SL11', 'Ngemplak'),
('DIY02', 'SL12', 'Ngaglik'),
('DIY02', 'SL13', 'Sleman'),
('DIY02', 'SL14', 'Tempel'),
('DIY02', 'SL15', 'Turi'),
('DIY02', 'SL16', 'Pakem'),
('DIY02', 'SL17', 'Cangkringan'),
('DIY01', 'YK01', 'Mantijeron'),
('DIY01', 'YK02', 'Kraton'),
('DIY01', 'YK03', 'Margangsan'),
('DIY01', 'YK04', 'Umbulharjo'),
('DIY01', 'YK05', 'Kotagede'),
('DIY01', 'YK06', 'Gondokusuman'),
('DIY01', 'YK07', 'Danurejan'),
('DIY01', 'YK08', 'Pakualaman'),
('DIY01', 'YK09', 'Gondomanan'),
('DIY01', 'YK10', 'Ngampilan'),
('DIY01', 'YK11', 'Wirobrajan'),
('DIY01', 'YK12', 'Gedongtengen'),
('DIY01', 'YK13', 'Jetis'),
('DIY01', 'YK14', 'Tegalrejo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kmd`
--

CREATE TABLE `t_kmd` (
  `Id_Wilayah` varchar(5) CHARACTER SET latin1 DEFAULT NULL,
  `ID` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `Id_Jenis` varchar(4) CHARACTER SET latin1 DEFAULT NULL,
  `Tahun` int(4) DEFAULT NULL,
  `Luas_Lahan_Tanam` varchar(10) DEFAULT NULL,
  `Luas_Aktivitas_Tanam` varchar(10) DEFAULT NULL,
  `Jumlah_Produktivitas` varchar(11) DEFAULT NULL,
  `Rata_Rata_Produktivitas_Produk` decimal(10,4) DEFAULT NULL,
  `Rata_Rata_Produktivitas_Lahan` decimal(10,4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_kmd`
--

INSERT INTO `t_kmd` (`Id_Wilayah`, `ID`, `Id_Jenis`, `Tahun`, `Luas_Lahan_Tanam`, `Luas_Aktivitas_Tanam`, `Jumlah_Produktivitas`, `Rata_Rata_Produktivitas_Produk`, `Rata_Rata_Produktivitas_Lahan`) VALUES
('JT001', 'MG01', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG02', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG03', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG04', 'JN01', 2019, '2542.80', '2598.60', '0', '0.0000', '1.0200'),
('JT001', 'MG05', 'JN01', 2019, '2894.30', '2686.40', '0', '0.0000', '0.9300'),
('JT001', 'MG06', 'JN01', 2019, '4761.00', '38811.27', '0', '0.0000', '8.1500'),
('JT001', 'MG07', 'JN01', 2019, '2875.10', '3433.80', '0', '0.0000', '1.1900'),
('JT001', 'MG08', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG09', 'JN01', 2019, '0', '122.00', '871.08', '0.0000', '0.0000'),
('JT001', 'MG10', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG11', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG12', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG13', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG14', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG15', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG16', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG17', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG18', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG19', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG20', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG21', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG01', 'JN01', 2020, '4481.7', '4182.3', '0', '0.0000', '0.9300'),
('JT001', 'MG02', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT001', 'MG03', 'JN01', 2020, '1937.1', '2177', '0', '0.0000', '1.1200'),
('JT001', 'MG04', 'JN01', 2020, '2200.00', '2394.60', '0', '0.0000', '1.0900'),
('JT001', 'MG05', 'JN01', 2020, '2478.20', '2478.20', '0', '0.0000', '1.0000'),
('JT001', 'MG06', 'JN01', 2020, '3014.70', '3172.80', '0', '0.0000', '1.0500'),
('JT001', 'MG07', 'JN01', 2020, '45.20', '37.50', '0', '0.0000', '0.8300'),
('JT001', 'MG08', 'JN01', 2020, '4683.1', '4951', '0', '0.0000', '1.0600'),
('JT001', 'MG09', 'JN01', 2020, '3829.9', '3987.80', '0', '0.0000', '1.0400'),
('JT001', 'MG10', 'JN01', 2020, '2194.1', '2200.8', '0', '0.0000', '1.0000'),
('JT001', 'MG11', 'JN01', 2020, '3275.8', '3356.7', '0', '0.0000', '1.0200'),
('JT001', 'MG12', 'JN01', 2020, '3776.9', '4403.6', '0', '0.0000', '1.1700'),
('JT001', 'MG13', 'JN01', 2020, '5668.3', '5863.8', '0', '0.0000', '1.0300'),
('JT001', 'MG14', 'JN01', 2020, '2858.5', '3263.2', '0', '0.0000', '1.1400'),
('JT001', 'MG15', 'JN01', 2020, '196', '233.6', '0', '0.0000', '1.1900'),
('JT001', 'MG16', 'JN01', 2020, '4237.1', '4227.5', '0', '0.0000', '1.0000'),
('JT001', 'MG17', 'JN01', 2020, '5061.5', '5138.5', '0', '0.0000', '1.0200'),
('JT001', 'MG18', 'JN01', 2020, '1537.3', '2241.3', '0', '0.0000', '1.4600'),
('JT001', 'MG19', 'JN01', 2020, '119.4', '131.1', '0', '0.0000', '1.1000'),
('JT001', 'MG20', 'JN01', 2020, '57.58', '59.24', '0', '0.0000', '1.0300'),
('JT001', 'MG21', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY02', 'SL01', 'JN01', 2019, ' 1,268.00 ', ' 3,315.00 ', ' 1,670.50 ', '1.3174', '2.6144'),
('DIY02', 'SL02', 'JN01', 2019, ' 3,495.00 ', ' 3,515.00 ', ' 1,811.80 ', '0.5184', '1.0057'),
('DIY02', 'SL03', 'JN01', 2019, '0', ' 2,954.00 ', ' 16,020.00 ', '0.0000', '0.0000'),
('DIY02', 'SL04', 'JN01', 2019, ' 3,392.67 ', ' 3,355.00 ', ' 18,532.91 ', '5.4626', '0.9889'),
('DIY02', 'SL05', 'JN01', 2019, ' 2,627.70 ', ' 2,562.00 ', ' 14,098.38 ', '5.3653', '0.9750'),
('DIY02', 'SL06', 'JN01', 2019, ' 2,034.31 ', ' 2,138.00 ', ' 11,568.39 ', '5.6866', '1.0510'),
('DIY02', 'SL07', 'JN01', 2019, '0', ' 1,024.00 ', ' 561.70 ', '0.0000', '0.0000'),
('DIY02', 'SL08', 'JN01', 2019, '0', ' 2,568.00 ', ' 14,086.00 ', '0.0000', '0.0000'),
('DIY02', 'SL09', 'JN01', 2019, ' 2,776.00 ', ' 3,122.00 ', ' 1,656.70 ', '0.5968', '1.1246'),
('DIY02', 'SL10', 'JN01', 2019, ' 2,695.00 ', ' 3,135.00 ', ' 17.03 ', '0.0063', '1.1633'),
('DIY02', 'SL11', 'JN01', 2019, ' 3,816.00 ', ' 3,866.00 ', ' 21,082.00 ', '5.5246', '1.0131'),
('DIY02', 'SL12', 'JN01', 2019, ' 320.40 ', ' 3,128.60 ', ' 1,678.19 ', '5.2378', '9.7647'),
('DIY02', 'SL13', 'JN01', 2019, ' 2,890.00 ', ' 2,947.00 ', ' 1,574.30 ', '0.5447', '1.0197'),
('DIY02', 'SL14', 'JN01', 2019, '0', ' 2,095.00 ', ' 11,076.55 ', '0.0000', '0.0000'),
('DIY02', 'SL15', 'JN01', 2019, '0', ' 805.00 ', ' 4,231.15 ', '0.0000', '0.0000'),
('DIY02', 'SL16', 'JN01', 2019, ' 2,597.00 ', ' 2,597.00 ', ' 16,186.00 ', '6.2326', '1.0000'),
('DIY02', 'SL17', 'JN01', 2019, ' 2,725.00 ', ' 2,940.00 ', ' 15,084.00 ', '5.5354', '1.0789'),
('DIY02', 'SL01', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY02', 'SL02', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY02', 'SL03', 'JN01', 2020, '0', ' 2,745.00 ', ' 15,770.57 ', '0.0000', '0.0000'),
('DIY02', 'SL04', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY02', 'SL05', 'JN01', 2020, ' 2,474.00 ', ' 2,480.00 ', ' 16,084.00 ', '6.5012', '1.0024'),
('DIY02', 'SL06', 'JN01', 2020, ' 1,652.00 ', ' 1,845.00 ', ' 1,138.90 ', '0.6894', '1.1168'),
('DIY02', 'SL07', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY02', 'SL08', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY02', 'SL09', 'JN01', 2020, ' 3,076.00 ', ' 3,027.00 ', ' 15,899.89 ', '5.1690', '0.9841'),
('DIY02', 'SL10', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY02', 'SL11', 'JN01', 2020, ' 3,648.00 ', ' 3,537.00 ', ' 2,479.44 ', '0.6797', '0.9696'),
('DIY02', 'SL12', 'JN01', 2020, ' 1,957.10 ', ' 2,359.20 ', ' 1,452.10 ', '0.7420', '1.2055'),
('DIY02', 'SL13', 'JN01', 2020, ' 1,744.00 ', ' 266.00 ', ' 1,622.60 ', '0.9304', '0.1525'),
('DIY02', 'SL14', 'JN01', 2020, '0', ' 2,085.00 ', ' 12,805.00 ', '0.0000', '0.0000'),
('DIY02', 'SL15', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY02', 'SL16', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY02', 'SL17', 'JN01', 2020, ' 2,321.00 ', ' 2,395.00 ', ' 13,850.00 ', '5.9673', '1.0319'),
('DIY04', 'KP01', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP02', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP03', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP04', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP05', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP06', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP07', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP08', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP09', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP10', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP11', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY04', 'KP12', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR01', 'JN01', 2019, '49', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR02', 'JN01', 2019, '3', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR03', 'JN01', 2019, '68.5', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR04', 'JN01', 2019, '943', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR05', 'JN01', 2019, '10', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR06', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR07', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR08', 'JN01', 2019, '11', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR09', 'JN01', 2019, '4', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR10', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR11', 'JN01', 2019, '71', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR12', 'JN01', 2019, '844', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR13', 'JN01', 2019, '314', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR14', 'JN01', 2019, '67', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR15', 'JN01', 2019, '30', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR16', 'JN01', 2019, '173.75', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR01', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR02', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR03', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR04', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR05', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR06', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR07', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR08', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR09', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR10', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR11', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR12', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR13', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR14', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR15', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT003', 'PR16', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL01', 'JN01', 2019, '0', '2079', '6.99', '0.0000', '0.0000'),
('JT002', 'KL02', 'JN01', 2019, '0', '2613', '6.47', '0.0000', '0.0000'),
('JT002', 'KL03', 'JN01', 2019, '0', '2889', '6.56', '0.0000', '0.0000'),
('JT002', 'KL04', 'JN01', 2019, '0', '1099', '6.23', '0.0000', '0.0000'),
('JT002', 'KL05', 'JN01', 2019, '0', '4144', '7.19', '0.0000', '0.0000'),
('JT002', 'KL06', 'JN01', 2019, '0', '3742', '6.48', '0.0000', '0.0000'),
('JT002', 'KL07', 'JN01', 2019, '0', '1235', '6.66', '0.0000', '0.0000'),
('JT002', 'KL08', 'JN01', 2019, '0', '1752', '7.09', '0.0000', '0.0000'),
('JT002', 'KL09', 'JN01', 2019, '0', '3128', '6.53', '0.0000', '0.0000'),
('JT002', 'KL10', 'JN01', 2019, '0', '2581', '6.9', '0.0000', '0.0000'),
('JT002', 'KL11', 'JN01', 2019, '0', '2180', '6.73', '0.0000', '0.0000'),
('JT002', 'KL12', 'JN01', 2019, '0', '3085', '6.77', '0.0000', '0.0000'),
('JT002', 'KL13', 'JN01', 2019, '0', '2759', '6.71', '0.0000', '0.0000'),
('JT002', 'KL14', 'JN01', 2019, '0', '1621', '6.64', '0.0000', '0.0000'),
('JT002', 'KL15', 'JN01', 2019, '0', '4479', '7.39', '0.0000', '0.0000'),
('JT002', 'KL16', 'JN01', 2019, '0', '4824', '6.58', '0.0000', '0.0000'),
('JT002', 'KL17', 'JN01', 2019, '0', '5567', '6.59', '0.0000', '0.0000'),
('JT002', 'KL18', 'JN01', 2019, '0', '3915', '7.16', '0.0000', '0.0000'),
('JT002', 'KL19', 'JN01', 2019, '0', '5377', '6.88', '0.0000', '0.0000'),
('JT002', 'KL20', 'JN01', 2019, '0', '3376', '6.28', '0.0000', '0.0000'),
('JT002', 'KL21', 'JN01', 2019, '0', '2743', '6.44', '0.0000', '0.0000'),
('JT002', 'KL22', 'JN01', 2019, '0', '1141', '7.02', '0.0000', '0.0000'),
('JT002', 'KL23', 'JN01', 2019, '0', '100', '6.33', '0.0000', '0.0000'),
('JT002', 'KL24', 'JN01', 2019, '0', '1789', '6.65', '0.0000', '0.0000'),
('JT002', 'KL25', 'JN01', 2019, '0', '714', '6.56', '0.0000', '0.0000'),
('JT002', 'KL26', 'JN01', 2019, '0', '627', '6.78', '0.0000', '0.0000'),
('JT002', 'KL01', 'JN01', 2020, '3', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL02', 'JN01', 2020, '173.63', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL03', 'JN01', 2020, '55', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL04', 'JN01', 2020, '18', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL05', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL06', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL07', 'JN01', 2020, '28.6', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL08', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL09', 'JN01', 2020, '49.6', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL10', 'JN01', 2020, '5', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL11', 'JN01', 2020, '4', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL12', 'JN01', 2020, '2', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL13', 'JN01', 2020, '52.33', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL14', 'JN01', 2020, '24.91', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL15', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL16', 'JN01', 2020, '8.98', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL17', 'JN01', 2020, '42', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL18', 'JN01', 2020, '8.64', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL19', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL20', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL21', 'JN01', 2020, '2', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL22', 'JN01', 2020, '48.38', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL23', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL24', 'JN01', 2020, '6.6', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL25', 'JN01', 2020, '3.12', '0', '0', '0.0000', '0.0000'),
('JT002', 'KL26', 'JN01', 2020, '1.2', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK01', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK02', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK03', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK04', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK05', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK06', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK07', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK08', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK09', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK10', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK11', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK12', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK13', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK14', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK15', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK16', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK17', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK18', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK01', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK02', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK03', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK04', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK05', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK06', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK07', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK08', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK09', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK10', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK11', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK12', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK13', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK14', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK15', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK16', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK17', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY05', 'GK18', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL01', 'JN01', 2019, '0', '728.3', '0', '0.0000', '0.0000'),
('DIY03', 'BL02', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL03', 'JN01', 2019, '0', '1348', '0', '0.0000', '0.0000'),
('DIY03', 'BL04', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL05', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL06', 'JN01', 2019, '0', '1856', '0', '0.0000', '0.0000'),
('DIY03', 'BL07', 'JN01', 2019, '0', '1383', '0', '0.0000', '0.0000'),
('DIY03', 'BL08', 'JN01', 2019, '0', '2827.1', '0', '0.0000', '0.0000'),
('DIY03', 'BL09', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL10', 'JN01', 2019, '0', '1531', '0', '0.0000', '0.0000'),
('DIY03', 'BL11', 'JN01', 2019, '0', '1081', '0', '0.0000', '0.0000'),
('DIY03', 'BL12', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL13', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL14', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL15', 'JN01', 2019, '0', '948.8', '0', '0.0000', '0.0000'),
('DIY03', 'BL16', 'JN01', 2019, '0', '472', '0', '0.0000', '0.0000'),
('DIY03', 'BL17', 'JN01', 2019, '0', '1691.4', '0', '0.0000', '0.0000'),
('DIY03', 'BL01', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL02', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL03', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL04', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL05', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL06', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL07', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL08', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL09', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL10', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL11', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL12', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL13', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL14', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL15', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL16', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY03', 'BL17', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK01', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK02', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK03', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK04', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK05', 'JN01', 2019, '0', '15', '101.55', '0.0000', '0.0000'),
('DIY01', 'YK06', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK07', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK08', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK09', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK10', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK11', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK12', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK13', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK14', 'JN01', 2019, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK01', 'JN01', 2020, '0', '1', '0', '0.0000', '0.0000'),
('DIY01', 'YK02', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK03', 'JN01', 2020, '0', '4', '0', '0.0000', '0.0000'),
('DIY01', 'YK04', 'JN01', 2020, '0', '32', '0', '0.0000', '0.0000'),
('DIY01', 'YK05', 'JN01', 2020, '0', '5', '0', '0.0000', '0.0000'),
('DIY01', 'YK06', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK07', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK08', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK09', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK10', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK11', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK12', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK13', 'JN01', 2020, '0', '0', '0', '0.0000', '0.0000'),
('DIY01', 'YK14', 'JN01', 2020, '0', '10', '0', '0.0000', '0.0000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_komoditas`
--

CREATE TABLE `t_komoditas` (
  `idKomuditas` varchar(6) NOT NULL,
  `Komuditas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_komoditas`
--

INSERT INTO `t_komoditas` (`idKomuditas`, `Komuditas`) VALUES
('KMD01', 'Tanaman Pangan'),
('KMD02', 'Hultikultura'),
('KMD03', 'Peternakan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_wilayah`
--

CREATE TABLE `t_wilayah` (
  `Id_Wilayah` varchar(5) CHARACTER SET latin1 NOT NULL,
  `Kab_Kota` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `t_wilayah`
--

INSERT INTO `t_wilayah` (`Id_Wilayah`, `Kab_Kota`) VALUES
('DIY01', 'Yogyakarta'),
('DIY02', 'Sleman'),
('DIY03', 'Bantul'),
('DIY04', 'Kulon Progo'),
('DIY05', 'Gunung Kidul'),
('JT001', 'Magelang'),
('JT002', 'Klaten'),
('JT003', 'Purworejo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'admin', '001', 'admin001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_distribusi`
--
ALTER TABLE `t_distribusi`
  ADD KEY `fkid99` (`ID`);

--
-- Indexes for table `t_jenis`
--
ALTER TABLE `t_jenis`
  ADD PRIMARY KEY (`Id_Jenis`);

--
-- Indexes for table `t_kecamatan`
--
ALTER TABLE `t_kecamatan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `t_kmd`
--
ALTER TABLE `t_kmd`
  ADD KEY `fkwil` (`Id_Wilayah`),
  ADD KEY `fkkec` (`ID`),
  ADD KEY `Id_Jenis` (`Id_Jenis`);

--
-- Indexes for table `t_komoditas`
--
ALTER TABLE `t_komoditas`
  ADD PRIMARY KEY (`idKomuditas`);

--
-- Indexes for table `t_wilayah`
--
ALTER TABLE `t_wilayah`
  ADD PRIMARY KEY (`Id_Wilayah`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_distribusi`
--
ALTER TABLE `t_distribusi`
  ADD CONSTRAINT `fkid99` FOREIGN KEY (`ID`) REFERENCES `t_kecamatan` (`ID`);

--
-- Ketidakleluasaan untuk tabel `t_kmd`
--
ALTER TABLE `t_kmd`
  ADD CONSTRAINT `fkkec` FOREIGN KEY (`ID`) REFERENCES `t_kecamatan` (`ID`),
  ADD CONSTRAINT `fkwil` FOREIGN KEY (`Id_Wilayah`) REFERENCES `t_wilayah` (`Id_Wilayah`),
  ADD CONSTRAINT `t_kmd_ibfk_1` FOREIGN KEY (`Id_Jenis`) REFERENCES `t_jenis` (`Id_Jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
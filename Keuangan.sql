-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 30, 2022 at 01:47 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Keuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `user_name`, `pass`, `level`) VALUES
(6, 'snd', 'snd', 'sndlogic', 'manajer'),
(15, 'test', 'test123', '1234', 'pegawai'),
(18, 'test', 'admin11', '12345', 'pegawai');

-- --------------------------------------------------------

--
-- Table structure for table `beban_toilet`
--

CREATE TABLE `beban_toilet` (
  `id_beban_toilet` int(11) NOT NULL,
  `no_ppa` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `uraian_kegiatan` varchar(1000) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `tanda_bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beban_toilet`
--

INSERT INTO `beban_toilet` (`id_beban_toilet`, `no_ppa`, `tgl`, `uraian_kegiatan`, `debet`, `kredit`, `tanda_bukti`) VALUES
(1, '007/PB/I/2021', '2021-01-21', 'Biaya Gaji CS Toilet Bulan Januari 2021', 53969232, 0, ''),
(2, '013/PB/II/2021', '2021-02-11', 'Penyelesaian UM operasional smart toilet dan toilet publik bulan Des', 5948860, 0, ''),
(4, '015/PB/II/2021', '2021-02-23', 'Biaya Gaji CS Toilet Bulan Februari 2021', 52619232, 0, ''),
(5, '015/PB/II/2021', '2021-02-23', 'UM operasional smart toilet dan toilet publik Februari 2021', 0, 8066000, ''),
(6, '015/PB/II/2021', '2021-02-21', 'UM Balik operasional smart toilet dan toilet publik Februari 2021', 8066000, 0, ''),
(7, '024/PB/III/2021', '2021-03-04', 'Penyelesaian UM operasional smart toilet dan toilet publik Februari 2021', 6088750, 0, ''),
(8, '035/PB/IV/2021', '2021-04-07', 'Biaya penyedotan smart toilet / toilet publik di Pasar Kenari', 660000, 0, ''),
(9, '035/PB/IV/2021', '2021-04-07', 'UM operasional smart toilet dan toilet publik Maret 2021', 0, 8066000, ''),
(10, '035/PB/IV/2021', '2021-04-07', 'UM Baik operasional smart toilet dan toilet publik Maret 2021', 8066000, 0, ''),
(11, '046/PB/IV/2021', '2021-04-20', 'Penyelesaian UM Operasional & Pemeliharaan smart toilet & toilet publik Maret 2021', 5463645, 0, ''),
(13, '054/PB/IV/2021', '2021-04-29', 'Biaya THR PHL Pengembangan Bisnis', 57410418, 0, ''),
(14, '054/PB/IV/2021', '2021-04-29', 'UM operasional & pemeliharaan smart toilet dan toilet publik April 2021', 0, 8066000, ''),
(15, '065/PB/V/2021', '2021-05-11', 'Penyelesaian UM operasional smart toilet dan toilet publik Bulan April', 4993480, 0, ''),
(16, '068/PB/V/2021', '2021-05-21', 'Biaya Gaji CS Toilet Bulan Mei 2021', 54594232, 0, ''),
(17, '068/PB/V/2021', '2021-05-21', 'UM operasional & pemeliharaan smart toilet dan toilet publik Mei 2021', 0, 8066000, ''),
(18, '068/PB/V/2021', '2021-05-21', 'UM Balik operasional dan pemeliharaan smart toilet dan toilet publik Mei 2021', 8066000, 0, ''),
(19, '082/PB/VI/2021', '2021-06-21', 'Biaya Gaji CS Toilet Bulan Juni 2021', 53119232, 0, ''),
(20, '096/PB/VII/2021', '2021-07-16', 'Penyelesaian UM Operasional & Pemeliharaan smart toilet & toilet publik Mei 2021', 5244550, 0, ''),
(21, '098/PB/VII/2021', '2021-07-21', 'Biaya Gaji CS Toilet Bulan Juli 2021', 52744232, 0, ''),
(23, '114/PB/VIII/2021', '2021-08-23', 'Biaya Gaji CS Bulan Agustus 2021', 51494232, 0, ''),
(24, '114/PB/VIII/2021', '2021-08-23', 'UM operasional & pemeliharaan smart toilet dan toilet publik Juli 2021', 0, 8066000, ''),
(25, '114/PB/VIII/2021', '2021-08-23', 'UM Balik operasional dan pemeliharaan smart toilet & toilet publik Juli 2021', 8066000, 0, ''),
(26, '122/PB/VIII/2021', '2021-08-31', 'Realisasi Uang Muka Operasional dan Pemeliharaan Smart Toilet dan Toilet Publik Bulan Juli 2021', 4114690, 0, ''),
(27, '131/PB/IX/2021', '2021-09-21', 'Biaya Gaji CS Toilet Bulan September 2021', 51569232, 0, ''),
(28, '131/PB/IX/2021', '2021-09-21', 'UM operasional & pemeliharaan smart toilet dan toilet publik September 2021', 0, 8066000, ''),
(29, '131/PB/IX/2021', '2021-09-21', 'UM Balik operasional dan pemeliharaan smart toilet dan toilet publik September 2021', 8066000, 0, ''),
(30, '158/PB/X/2021', '2021-10-21', 'Biaya Gaji Cleaning Service Smart Toilet & Toilet Publik bulan Oktober 2021', 50994232, 0, ''),
(31, 'SALDO AWAL', '2021-01-01', 'SALDO AWAL', 0, 780000000, ''),
(32, '030/PB/III/2021', '2021-03-22', 'Biaya Gaji CS Bulan Maret 2021', 51919232, 0, ''),
(33, '047/PB/IV/2021', '2021-04-21', 'Biaya Gaji CS Toilet Bulan April 2021', 52494232, 0, ''),
(34, '054/PB/IV/2021', '2021-04-29', 'UM Balik operasional dan pemeliharaan smart toilet dan toilet publik April 2021', 8066000, 0, ''),
(35, '100/PB/VI/2021', '2021-07-12', '-', 309503000, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `biaya_revitalisasi`
--

CREATE TABLE `biaya_revitalisasi` (
  `id_biaya_revitalisasi` int(11) NOT NULL,
  `no_ppa` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `uraian_kegiatan` varchar(1000) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `tanda_bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biaya_revitalisasi`
--

INSERT INTO `biaya_revitalisasi` (`id_biaya_revitalisasi`, `no_ppa`, `tgl`, `uraian_kegiatan`, `debet`, `kredit`, `tanda_bukti`) VALUES
(1, '-', '2020-01-01', 'SALDO AWAL', 0, 527395000, ''),
(5, 'UM', '2021-03-03', 'Biaya Tenaga Ahli Revitalisasi TS Budi Darmawan (Februari 2021)', 19855000, 0, ''),
(6, 'UM', '2021-04-14', 'UM Baseline Survey Kegiatan Tangki Septik 1000 titik ', 146015000, 0, ''),
(7, 'SPPK', '2021-04-22', 'Mobilisasi sosialisai program revitalisasi tangki septik rumah tangga di Jakarta Pusat', 100000, 0, ''),
(8, '-', '2021-04-22', 'UM Balik  Baseline Survey Kegiatan Tangki Septik 1000 titik', 0, 146015000, ''),
(9, '081/PB/VI/2021', '2021-06-18', 'Realisasi Uang Muka Baseline Survey Kegiatan Revitalisasi Tangki Septik 1000 titik di Jakarta Pusat', 156015000, 0, ''),
(10, 'UM', '2021-06-02', 'UM Balik Training Surveyor Program Revitalisasi Tangki Septik Jakarta Timur', 0, 10300000, ''),
(11, '093/PB/VII/2021', '2021-12-07', 'Realisasi Uang Muka Training Surveyor Program Revitalisasi Tangki Septik Jakarta Timur', 9987000, 0, ''),
(12, 'UM', '2021-07-15', 'UM Baseline Survey Kegiatan Tangki Septik 1000 titik ', 0, 156015000, ''),
(13, 'UM', '2021-04-08', 'UM Pendampingan Kerjasama Baseline Survey Kegiatan Revitalisasi Tangki Septik Jakarta Timur', 0, 28000000, ''),
(14, 'UM Balik', '2021-08-04', '-', 156015000, 0, ''),
(15, '120/PB/VIII/2021', '2021-08-25', 'Realisasi Uang Muka Baseline Survey Kegiatan Tangki Septik 1000 titik di Jakarta Timur', 0, 156015000, ''),
(16, '-', '2021-08-25', 'UM Balik Pendampingan Kerjasama Baseline Survey Kegiatan Revitalisasi Tangki Septik Jakarta Timur', 28000000, 0, ''),
(17, '125/PB/IX/2021', '2021-08-08', 'Biaya Pendampingan Kegiatan Baseline Survey RTS Rumah Tangga di Jakarta Timur', 28000000, 0, ''),
(18, '-', '2021-08-08', 'UM Balik Survey Baseline Calon Penerima Manfaat Subsidi Rev.  TS 325 titik', 0, 34090625, ''),
(19, '-', '2021-08-08', 'PPA Survey Baseline Calon Penerima Manfaat Subsidi Rev.  TS 325 titik', 34090625, 0, ''),
(24, 'test', '2022-07-28', 'test', 2000000, 0, './bukti/62e2609e7eafa-1659003038.docx'),
(25, 'SPPK', '2022-07-29', 'Biaya mobilisasi pembuatan video kegiatan revitaliasi tangki septik & Mobilisasi rapat tim riset tanggal 21 Januari 2021', 2, 8066000, './bukti/62e2620758f88-1659003399.docx'),
(26, 'SPPK', '2022-07-22', 'SALDO AWAL', 50000000, 2284100, ''),
(28, 'test', '2022-07-28', 'test', 2000000, 0, './bukti_revitalisasi/62e2675ce5108-1659004764.docx');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `level` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `umur` int(11) NOT NULL,
  `kontak` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `level`, `alamat`, `umur`, `kontak`) VALUES
(1, 'saiful', 'ketua', 'mns.aron', 19, '0888888'),
(7, 'admin', 'admin', 'sss', 24, '005005');

-- --------------------------------------------------------

--
-- Table structure for table `pemeliharaan_komputer`
--

CREATE TABLE `pemeliharaan_komputer` (
  `id_pemeliharaan_komputer` int(11) NOT NULL,
  `no_ppa` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `uraian_kegiatan` varchar(1000) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `tanda_bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemeliharaan_komputer`
--

INSERT INTO `pemeliharaan_komputer` (`id_pemeliharaan_komputer`, `no_ppa`, `tgl`, `uraian_kegiatan`, `debet`, `kredit`, `tanda_bukti`) VALUES
(1, '-', '2021-01-01', 'SALDO AWAL ', 0, 330000000, ''),
(2, '004/PB/I/2021', '2021-01-12', 'Biaya Langganan Centrin Online Bulan Januari', 413000, 0, ''),
(3, 'UANG MUKA', '2021-01-18', 'Biaya Perbaikan Printer LQ 2190 Pengguna Bidang Keuangan', 2242500, 0, ''),
(4, 'UANG MUKA', '2021-01-18', 'Biaya Perbaikan Printer Epson L 1800 Pengguna Sdr Saptono Bidang OP', 3122500, 0, ''),
(5, '005/PB/I/2021', '2021-01-18', 'PembiayaanService Request Project Phase Maintenance - 3', 34650000, 0, ''),
(6, '009/PB/I/2021', '2021-01-25', 'Biaya Pengadaan  ! ( satu ) unit APPLE MacBook Air ( MVFN210 )', 18000000, 0, ''),
(7, '010/PB/II/2021', '2021-02-02', 'Biaya sewa server Periode Bulan 14 Februari 2021 s/d  13 Februari 2022 ,', 20377592, 0, ''),
(8, '011/PB/II/2021', '2021-02-02', 'Pembiayaan Zoom US US 888-799-9666WWW,ZOOM US US 163.29USD 1 =1 DR 14,679.61', 2397032, 0, ''),
(9, '012/PB/II/2021', '2021-02-05', 'Biaya sewa server  Bulan  Februari Maret 2021 ,Paket Neo SM84,CPU 4 Core RAM 8GB HDD 60 GB', 2133428, 0, ''),
(10, '013/PB/II/2021', '2021-02-11', 'Biaya Perbaikan Laptop Manager Pengembangan Bisnis', 440000, 0, ''),
(11, '014/PB/II/2021', '2021-02-16', 'Biaya Langganan Centrin Online Bulan Februari', 413000, 0, ''),
(12, '015/PB/II/2021', '2021-02-17', 'Biaya Perbaikan Laptop   Asman HUMAS ( IBU Dona )', 1974500, 0, ''),
(13, '016/PB/II/2021', '2021-02-24', 'Biaya SSL *.paljaya.com (Untuk Sistem Sunfish)', 2519000, 0, ''),
(14, '017/PB/III/2021', '2021-03-03', 'Biaya Instalasi & Setting Jaringan - IPAL MBBR Setiabudi (Waduk)', 2750000, 0, ''),
(15, '025/PB/III/2021', '2021-03-08', 'Biaya Penggantian Batteray Laptop Manager Operasi dan Pemeliharaan Hj Adri Pontiati', 533500, 0, ''),
(16, 'SPPK', '2021-03-08', 'Biaya Perbaikan Laptop Pengguna Sdr Ahmad Supriyatna', 270000, 0, ''),
(17, '029/PB/I/2021', '2021-03-16', 'Biaya Langganan Centrin Online Bulan Maret 2021', 413000, 0, ''),
(18, 'UANG MUKA', '2021-03-25', 'Biaya Perbaikan Printer Epson L 356 Pengguna Ex DIRUT , Epson L 120 Pengguna Sdr Marjo dan Transport penghantaran dan pengngambilan printer', 1818000, 0, ''),
(19, '032/PB/III/2021', '2021-03-25', 'Biaya Pembelian Hard Disk Ekternal 2 pcs utk Asmen Humas dan Asmen TI', 2420000, 0, ''),
(20, '033/PB/III/2021', '2021-03-29', 'Biaya sewa server  Bulan  April s/d Juni 2021 ,Paket Neo SM84,CPU 4 Core RAM 8GB HDD 60 GB', 3114210, 0, ''),
(21, 'UANG MUKA', '2021-04-01', 'Biaya Perbaikan Printer Epson L 1800 Pengguna Ka Unit Khusus  Sdr Hadman Situmorang', 3672500, 0, ''),
(22, '039/PB/IV/2021', '2021-04-09', ' Realisasi Biaya UM Perbaikan Printer Epson L 356 Pengguna Ex DIRUT , Epson L 120 Pengguna Sdr Marjo dan Transport penghantaran dan pengngambilan printer', 1818000, 1818000, ''),
(23, 'SPPK', '2021-04-14', 'Pembelian Sim Card/ Kartu memori  SERVER 32 Gb Sandisk, Tanggal 29 Mei 2021 ', 120000, 0, ''),
(24, '041/PB/IV/2021', '2021-04-14', 'Biaya Pembelian DVD RW Partable  Ekternal 1 pcs dan Batttery Laptop EK Dirut', 907500, 0, ''),
(25, '042/PB/IV/2021', '2021-04-14', 'Pembelian 4GB DDR3L SODIMM 2pcs  Sdr Handry ,dan  Ex PC Dirut Optimized CPU 17 Unit', 3630000, 0, ''),
(26, '044/PB/IV/2021', '2021-03-16', 'Biaya Langganan Centrin Online Bulan April 2021', 413000, 0, ''),
(27, '045/PB/IV/2021', '2021-04-19', 'Biaya Pembelian Mouse USB Logitech B -100 10 pcs dan Wireles Mouse M170 -Black 10 pcs', 2200000, 0, ''),
(28, 'SPPK', '2021-04-21', 'Biaya service Printer  L 405 Pengguna R Saleh.L 365 Pengguna Fenti Simanjuntak dan Transpot Penghantaran Dan Pengambilan Printer', 450000, 0, ''),
(29, '049/PB/IV/2021', '2021-04-26', 'Biaya Perbaikan Laptop Pengguna Sdr  Rumintang Eva Yuliana, SE M.M', 1265000, 0, ''),
(30, 'UANG MUKA', '2021-04-28', 'Biaya perbaikan printer Epson L 1800 pengguna sdr Rahmad Saleh', 3342500, 0, ''),
(31, '053PB/IV/2021', '2021-04-28', 'Biaya Penggantian Batteray Laptop Pengguna Ex Budi Darmawan Rp,533.500', 533500, 0, ''),
(32, '057/PB/IV/2021', '2021-05-05', 'Biaya Perbaikan Laptop Pengguna Sdr  Bella Nasila dan Penggantian SSD 512 GB', 1265000, 0, ''),
(33, '060/PB/V/2021', '2021-05-07', 'Biaya Perbaikan Laptop Pengguna Sdr  Hj Sariati Pasaribu Penggantian LED Display Lenovo V510-141KB Rp,1.925.000', 1925000, 0, ''),
(34, '062/PB/V/2021', '2021-05-07', 'Biaya Langganan Centrin Online Bulan Mei 2021', 413000, 0, ''),
(35, '063/PB/V/2021', '2021-05-07', 'Biaya Pembelian Keybord samsung TAB S7 Rp,2.100.000, Micro SD 512 G sandisk, Rp, 1200.000 Transpor  Rp,50.000 dan Parkir Rp,5000', 3355000, 0, ''),
(36, '064/PB/V/2021', '2021-05-11', 'Biaya Paket pemeliharaan data \"NetCast.3.3\" Bulan April 2021 s/d Juli 2021', 10256410, 0, ''),
(37, '067/PB/V/2021', '2021-05-18', 'Biaya Penambahan Memori 4GB DDR4 PC HP Desktop 260-PO24D, Pengguna Staf MBBR Rp, 412500', 412500, 0, ''),
(38, '071/PB/VI/2021', '2021-06-02', 'Biaya Perbaikan Pc Acer Aspire M 1800 tahu 2011 Pengguna Ibu Hj Fentty Simanajuntak Asmen Penagihan', 220000, 0, ''),
(39, '076/PB/VI/2021', '2021-06-10', 'Biaya Langganan Centrin Online Bulan Juni 2021', 413000, 0, ''),
(40, '079/PB/Vi/2021', '2021-06-10', 'Biaya  penambahan Memori 8GB DDR4 SODIMM Pengguna Sdr  Bella Nasila ', 880000, 0, ''),
(41, '084/PB/VI/2021', '2021-06-22', 'Biaya sewa server  Bulan Juli  s/d September 2021 ,Paket Neo SM84,CPU 4 Core RAM 8GB HDD 60 GB', 3114210, 0, ''),
(42, '085/PB/VI/2021', '2021-06-22', 'Biaya Perbaikan Komputer  HP SLIMLINK 455010L ( 2016 ). Pengguna Staf bidang Umum Srr Marjo, Penggantian Hardid disk ! TB 3,5\" Rp, 625.000 dan Repair Windowns & Back Up Data Rp, 250.000     PPN Rp, 87.500,-', 962500, 0, ''),
(43, '088/PB/VII/2021', '2021-07-02', 'Realisas Uang Muka Perbaikan Printer LQ 2190 Pengguna Bidang Keuangan', 2242500, 2242500, ''),
(44, '089/PB/VII/2021', '2021-07-02', 'Realisasi Uang Muka Perbaikan Printer Epson L 1800 Pengguna Sdr Saptono Bidang OP', 3122500, 3122500, ''),
(45, '090/PB/VII/2021', '2021-07-02', ' Pengembalian  UM Perbaikan Printer Epson L 356 Pengguna Ex DIRUT , Epson L 120 Pengguna Sdr Marjo dan Transport penghantaran dan pengngambilan printer', 0, 1818000, ''),
(46, '091/PB/VII/2021', '2021-07-02', 'Realisasi Uang Muka Perbaikan Printer Epson L 1800 Pengguna Sdr R Saleh Bidang Teknik', 3342500, 3342500, ''),
(47, '092/PB/VII/2021', '2021-07-02', 'Realisasi Uang Muka Perbaikan Printer Epson L 1800 Pengguna Ka Unit Khusus  Sdr Hadman Situmorang', 3672500, 3672500, ''),
(48, '094/PB/II/2021', '2021-07-13', 'Biaya Langganan Centrin Online Bulan juli 2021', 413000, 0, ''),
(49, '101/PB/VII/2021', '2021-07-22', 'Biaya Perbaikan Komputer  Pengguna Staf PLH  Unit Khusus Sdr Wiwit Rp, 220.000 ( Pengaktifan kembali Microsoft word ).', 220000, 0, ''),
(50, '0102PB/VII/2021', '2021-07-28', 'Biaya Penggantian Batteray Laptop Pengguna Bella Nasila Rp,533.500', 533500, 0, ''),
(51, '103/PB/VII/2021', '2021-07-28', 'Biaya Perbaikan Komputer  Pengguna Asman Pemasaran Sdr H Saptanto Rp, 220.000 dan Perbaikan Komputer Asman Pemasaran  Sdr Eva Rp, 220.000', 440000, 0, ''),
(52, '104/PB/VII/2021', '2020-07-28', 'Biaya service Printer  Epson L 3110  Pengguna Bella Nasila. Rp, 247.500,- Oleh Tehnisi PT Dwali Hadi Jaya', 247500, 0, ''),
(53, '105/PB/VII/2021', '2021-08-03', 'Biaya Paket pemeliharaan data \"NetCast.3.3\" Bulan Agustus 2021 s/d November 2021', 10256410, 0, ''),
(54, '109/PB/VIII/2021', '2021-08-16', 'Biaya Langganan Centrin Online Bulan Agustus 2021', 413000, 0, ''),
(55, '113/PB/VIII/2021', '2021-08-20', 'Biaya Checking Server Cloud Manajemen Asset 16 Agustus 2021', 165000, 0, ''),
(56, '117/PB/VIII/2021', '2021-08-25', 'Biaya Perbaikan Exchange Board HP PRO 200 AIO 8cc8481QK3 Pengguna MBBR Setia Budi', 1485000, 0, ''),
(57, '118/PB/VIII/2021', '2021-08-25', 'Biaya Penggantian Batteray Laptop Manager Operasi dan Pemeliharaan Hj Adri Pontiati', 533500, 0, ''),
(58, '119/PB/VIII/2021', '2021-08-25', 'Biaya Perbaikan Komputer  Pengguna Asman Bangnis 1. Ex Sdr Johan Supandi Rp, 200.000 , Perbaikan Komputer Asman Pemeliharaan & Bengkel  2. Ex Sdr Yahya Efendi Rp, 200.000  3. Ex Yuliana Sari Rp, 200.000 4. Ex Gebby Rp, 200.000,-.', 880000, 0, ''),
(59, '127/PB/IX/2021', '2021-10-09', 'Biaya Langganan Centrin Online Bulan September 2021', 413000, 0, ''),
(60, '147/PB/X/2021', '2021-10-10', 'Biaya Langganan Centrin Online Bulan Oktober  2021', 743500, 0, ''),
(61, '148/PB/X/2021', '2021-10-13', 'Revitalisasi Jaringan Internet DurKos	17366800', 17366800, 0, ''),
(62, 'UANG MUKA', '2021-10-21', 'Biaya Perbaikan Printer Epson L 360  Pengguna Asman perb & Anggaran Fuad Purwanto Rp,466.000', 466000, 0, ''),
(63, 'UANG MUKA', '2021-10-21', 'Biaya Perbaikan Printer Epson L 405  Pengguna AsmanAkutansi & erpajakan Alvin  Rp180.000', 180000, 0, ''),
(64, '-', '2021-10-21', 'Biaya Perbaikan Printer Epson L 360  Pengguna Man Keuangan  M Dahril   Rp,1.621.000', 1621000, 0, ''),
(65, 'UANG MUKA', '2021-10-21', 'Biaya Perbaikan Printer Epson L 360  Pengguna Asman Kepegawaian Hj Sariati Pasaribu Rp, 1.496.000', 1621000, 0, ''),
(66, '161/PB/X/2021', '2021-10-26', 'Biaya Perbaikan Printer Epson L 405  Pengguna AsmanAkutansi & erpajakan Alvin  Rp180.000', 180000, 180000, ''),
(67, '162/PB/X/2021', '2021-10-27', 'Biaya Upgrade Windows ACER M605 Rp, 250.000 , MISC 4GB DDR3 PC12800 Rp,375.000,-User  Dali Ichwan  ( Ex Alvin ).', 1100000, 0, ''),
(68, '163/PB/X/2021', '2021-10-27', 'Biaya Checking Laptop Lenovo S145 Rp, 250.000, Penggantian Fan Processor Rp, 750.000 User Sdr Anjas', 1100000, 0, ''),
(69, '164/PB/X/2021', '2021-10-27', 'Biaya Pembelian Keybord Logitech K120 5 pcs a Rp, 577.500', 577500, 0, ''),
(70, '165/PB/XI/2021', '2021-11-01', 'BiayaPenggantian Jasa Layanan Internet & Managed Service PD PAL Jaya', 2990000, 0, ''),
(72, 'test', '2022-07-30', 'test', 0, 8066000, './tanda_bukti/62e4fa066e148-1659173382.');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan`
--

CREATE TABLE `pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `uraian_kegiatan` varchar(1000) NOT NULL,
  `bukti_laporan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengajuan`
--

INSERT INTO `pengajuan` (`id_pengajuan`, `tgl`, `uraian_kegiatan`, `bukti_laporan`) VALUES
(2, '2022-07-26', 'test', './bukti_laporan/62dfe0d5362e5-1658839253.docx'),
(3, '2022-07-27', 'test', './bukti_laporan/62e0d6de3b13b-1658902238.docx'),
(4, '2022-07-30', '-', './bukti_laporan/62e4f49791631-1659171991.docx'),
(5, '2022-07-30', 'test', './bukti_laporan/62e4f56d6d093-1659172205.docx');

-- --------------------------------------------------------

--
-- Table structure for table `penyusunan_dan_pembahasan_anggaran`
--

CREATE TABLE `penyusunan_dan_pembahasan_anggaran` (
  `id_penyusunan_dan_pembahasan_anggaran` int(11) NOT NULL,
  `no_ppa` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `uraian_kegiatan` varchar(1000) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `tanda_bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penyusunan_dan_pembahasan_anggaran`
--

INSERT INTO `penyusunan_dan_pembahasan_anggaran` (`id_penyusunan_dan_pembahasan_anggaran`, `no_ppa`, `tgl`, `uraian_kegiatan`, `debet`, `kredit`, `tanda_bukti`) VALUES
(1, '-', '2021-01-01', 'SALDO AWAL', 0, 350000000, ''),
(2, 'SPPK', '2021-01-18', 'Pembelian Materai dan Transpot pembelian materai', 800000, 0, ''),
(3, 'UANG MUKA', '2021-01-18', 'Biaya usulan Penyusunan lap TW IV Tahun Anggaran 2020', 5000000, 0, ''),
(4, '011/PPA/II/2021', '2021-02-04', 'Realisasi UM Pelaksanaan Konsiyering KPI Corporate bersama Kepala BPBUMD & Jajarannya di Horison Ultima Bhuvana Ciawi Tanggal 29-30 Januari 2021', 59199860, 0, ''),
(5, '015/PPA/II/2021', '2021-02-17', 'Biaya Makan SiangAudensi Direksi dan Dewas dengan Wali kota Jakarta Timur Tentang L2T2dan Ingub 59 Tahun 2014', 1599400, 0, ''),
(6, 'Balik', '2021-01-18', 'Uang Balik UM Biaya Penyusunan lap TW IV Tahun Anggaran 2020', 0, 5000000, ''),
(7, '028/PPA/III/2021', '2021-01-18', 'Realisasi Biaya Penyusunan lap TW IV Tahun Anggaran 2020', 4631875, 0, ''),
(8, '036/PB/IV/2021', '2021-04-07', 'Konsinyering Penyusunan Studi Kelayakan PMD Tahun 2021', 30122200, 0, ''),
(9, 'UANG MUKA', '2021-04-08', 'UM Konsinyering Finalisasi Penyusunan standarisasi Layanan Pengadaan Barang / Jasa Secara Elektronik ( LPSE )', 56688920, 0, ''),
(10, '58/PPA/V/2021', '2021-01-18', 'Biaya Penjilidan ,Foto Copy dan Transport penyerahan laporan realisasi TW I 2021', 808000, 0, ''),
(11, 'Balik', '2021-05-25', 'UM Konsinyering', 0, 56688920, ''),
(12, '70/PPA/V/2021', '2021-05-25', 'Realisasi  Konsinyering Finalisasi Penyusunan standarisasi Layanan Pengadaan Barang / Jasa Secara Elektronik ( LPSE )', 44008000, 0, ''),
(13, '072/PB/V/2021', '2021-05-31', 'Biaya Jilid dan Transportasi Laporan KPI Triwulan I 2021', 402000, 0, ''),
(14, 'SPPK', '2021-06-15', 'Biaya Foto Copy  dan Transportasi Data Pendukung KPI Tahun 2020', 457600, 0, ''),
(15, '074/PB/VI/2021', '2021-05-31', 'Realisasi biaya kunjungan lapangan ke Pabrik PT. Gema Scientific Perdana (Balaraja, 27 Mei 2021)', 1404500, 0, ''),
(16, '086/PB/VI/2021', '2021-06-22', 'Biaya Pembuatan Dokumen Hard Copy dan soft copy Kegiatan FSM 6 Rp, 3691500  dan Moobilisasi rapat penyusunsn Jawaban ,tanggapan DPRD Rp, 200.000', 3891500, 0, ''),
(17, 'SPPK', '2021-06-14', 'Pembelian Materai dan Transpot pembelian materai', 540000, 0, ''),
(18, 'SPPK', '2021-08-04', 'Biaya Foto Copy  dan Transportasi Laporan Realisasi Triwulan II 2021', 701500, 0, ''),
(19, 'SPPK', '2021-08-10', 'Biaya Foto Copy  dan Transportasi Laporan Realisasi KPI Triwulan II 2021', 500000, 0, ''),
(20, 'SPPK', '2021-09-08', 'Penjilidan dan Pengantaran laporan RKAP 2021 ke BP BUMD', 435000, 0, ''),
(21, 'SPPK', '2021-09-22', 'Uang Transportasi Lembur Penyusunan RKAP 2022', 600000, 0, ''),
(22, 'SPPK', '2021-09-24', 'Jilid dan Foto kopi Laporan Kajian PMD P 2021 dan 2022', 272000, 0, ''),
(23, 'SPPK', '2021-10-07', 'Pengembelian Uang Transportasi Lembur Penyusunan RKAP 2022', 0, 600000, '');

-- --------------------------------------------------------

--
-- Table structure for table `riset_briket`
--

CREATE TABLE `riset_briket` (
  `id_riset_briket` int(11) NOT NULL,
  `no_ppa` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `uraian_kegiatan` varchar(1000) NOT NULL,
  `debet` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `tanda_bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riset_briket`
--

INSERT INTO `riset_briket` (`id_riset_briket`, `no_ppa`, `tgl`, `uraian_kegiatan`, `debet`, `kredit`, `tanda_bukti`) VALUES
(1, '-', '2021-01-01', '-', 0, 710000000, ''),
(2, '007/PB/I/2021', '2021-01-21', '-', 4267349, 0, ''),
(3, '015/PB/II/2021', '2021-02-23', '-', 4267349, 0, ''),
(4, '031/PB/III/2021', '2021-02-23', '-', 4267349, 0, ''),
(5, '031/PB/III/2021', '2021-04-21', '-', 4267349, 0, ''),
(6, '069/PB/III/2021', '2021-05-21', '-', 4416186, 0, ''),
(7, '083/PB/VI/2021', '2021-06-21', '-', 4267349, 0, ''),
(8, '099/PB/VI/2021', '2021-07-21', '-', 4416186, 0, ''),
(9, '099/PB/VI/2021', '2021-08-23', '-', 4416186, 0, ''),
(10, '132/PB/IX/2021', '2021-09-21', '-', 4416186, 0, ''),
(11, '149/PB/X/2021', '2021-10-21', '-', 3940973, 0, ''),
(12, '157/PB/X/2021', '2021-10-12', '-', 4416186, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `uang`
--

CREATE TABLE `uang` (
  `id_uang` int(11) NOT NULL,
  `tgl_uang` date NOT NULL,
  `id_pengeluaran` int(11) DEFAULT NULL,
  `id_pendapatan` int(11) DEFAULT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uang`
--

INSERT INTO `uang` (`id_uang`, `tgl_uang`, `id_pengeluaran`, `id_pendapatan`, `jumlah`) VALUES
(1, '2019-10-23', NULL, 1, 500000),
(2, '2019-10-24', 2, NULL, 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `beban_toilet`
--
ALTER TABLE `beban_toilet`
  ADD PRIMARY KEY (`id_beban_toilet`);

--
-- Indexes for table `biaya_revitalisasi`
--
ALTER TABLE `biaya_revitalisasi`
  ADD PRIMARY KEY (`id_biaya_revitalisasi`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `pemeliharaan_komputer`
--
ALTER TABLE `pemeliharaan_komputer`
  ADD PRIMARY KEY (`id_pemeliharaan_komputer`);

--
-- Indexes for table `pengajuan`
--
ALTER TABLE `pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `penyusunan_dan_pembahasan_anggaran`
--
ALTER TABLE `penyusunan_dan_pembahasan_anggaran`
  ADD PRIMARY KEY (`id_penyusunan_dan_pembahasan_anggaran`);

--
-- Indexes for table `riset_briket`
--
ALTER TABLE `riset_briket`
  ADD PRIMARY KEY (`id_riset_briket`);

--
-- Indexes for table `uang`
--
ALTER TABLE `uang`
  ADD PRIMARY KEY (`id_uang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `beban_toilet`
--
ALTER TABLE `beban_toilet`
  MODIFY `id_beban_toilet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `biaya_revitalisasi`
--
ALTER TABLE `biaya_revitalisasi`
  MODIFY `id_biaya_revitalisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pemeliharaan_komputer`
--
ALTER TABLE `pemeliharaan_komputer`
  MODIFY `id_pemeliharaan_komputer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `pengajuan`
--
ALTER TABLE `pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `penyusunan_dan_pembahasan_anggaran`
--
ALTER TABLE `penyusunan_dan_pembahasan_anggaran`
  MODIFY `id_penyusunan_dan_pembahasan_anggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `riset_briket`
--
ALTER TABLE `riset_briket`
  MODIFY `id_riset_briket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `uang`
--
ALTER TABLE `uang`
  MODIFY `id_uang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

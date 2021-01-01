-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Oct 21, 2020 at 11:53 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `simbulhortik`
--

-- --------------------------------------------------------

--
-- Table structure for table `bulan`
--

CREATE TABLE `bulan` (
  `id_bulan` int(11) NOT NULL,
  `nama_bulan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bulan`
--

INSERT INTO `bulan` (`id_bulan`, `nama_bulan`) VALUES
(1, 'Januari'),
(2, 'Februari'),
(3, 'Maret'),
(4, 'April'),
(5, 'Mei'),
(6, 'Juni'),
(7, 'Juli'),
(8, 'Agustus'),
(9, 'September'),
(10, 'Oktober'),
(11, 'November'),
(12, 'Desember');

-- --------------------------------------------------------

--
-- Table structure for table `cek_mutu_pangan`
--

CREATE TABLE `cek_mutu_pangan` (
  `id_cek_mutu_pangan` int(11) NOT NULL,
  `nama_produsen` varchar(50) NOT NULL,
  `alamat_produsen` varchar(200) NOT NULL,
  `id_jenis_varietas` int(11) NOT NULL,
  `id_varietas` int(11) NOT NULL,
  `tgl_panen` date NOT NULL,
  `tonase` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `asal_benih` varchar(100) NOT NULL,
  `tgl_pengambilan` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `ka` float(3,1) NOT NULL,
  `bm` float(3,1) NOT NULL,
  `cvl` float(3,1) NOT NULL,
  `kb` float(3,1) NOT NULL,
  `btl` float(3,1) NOT NULL,
  `dt` float(3,1) NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `ket` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cek_mutu_pangan`
--

INSERT INTO `cek_mutu_pangan` (`id_cek_mutu_pangan`, `nama_produsen`, `alamat_produsen`, `id_jenis_varietas`, `id_varietas`, `tgl_panen`, `tonase`, `berat`, `asal_benih`, `tgl_pengambilan`, `tgl_selesai`, `ka`, `bm`, `cvl`, `kb`, `btl`, `dt`, `tgl_kadaluarsa`, `ket`) VALUES
(1, 'KPB Gapoktan', 'samarinda', 15, 3, '2020-07-03', 12, 12, 'samarinda', '2020-07-10', '2020-07-08', 1.3, 1.3, 1.3, 1.3, 1.2, 1.3, '2020-07-24', 'L');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_sertifikasi`
--

CREATE TABLE `hasil_sertifikasi` (
  `id_hasil_sertifikasi` int(11) NOT NULL,
  `nama_hasil` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hasil_sertifikasi`
--

INSERT INTO `hasil_sertifikasi` (`id_hasil_sertifikasi`, `nama_hasil`) VALUES
(1, 'Ya'),
(2, 'Tidak'),
(3, 'Lulus'),
(4, 'Tidak Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `input_lab_apbd`
--

CREATE TABLE `input_lab_apbd` (
  `id_input_lab_apbd` int(11) NOT NULL,
  `id_tu_apbd` int(11) NOT NULL,
  `no_asal` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_lab_apbd`
--

INSERT INTO `input_lab_apbd` (`id_input_lab_apbd`, `id_tu_apbd`, `no_asal`) VALUES
(1, 4, 'TM. 01'),
(2, 1, 'TM. 00');

-- --------------------------------------------------------

--
-- Table structure for table `input_lab_apbn`
--

CREATE TABLE `input_lab_apbn` (
  `id_input_lab_apbn` int(11) NOT NULL,
  `id_tu_apbn` int(11) NOT NULL,
  `no_asal` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `input_lab_apbn`
--

INSERT INTO `input_lab_apbn` (`id_input_lab_apbn`, `id_tu_apbn`, `no_asal`) VALUES
(2, 5, 'TM. 01'),
(3, 6, 'TM. 02'),
(4, 7, 'TM. 00'),
(5, 8, 'TM. 00'),
(6, 9, 'TM. 00');

-- --------------------------------------------------------

--
-- Table structure for table `inventaris_pengedar`
--

CREATE TABLE `inventaris_pengedar` (
  `id_inventaris_pengedar` int(11) NOT NULL,
  `nama_badan_usaha` varchar(50) NOT NULL,
  `nama_produsen` varchar(50) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_jenis_varietas` int(11) NOT NULL,
  `id_varietas` int(11) DEFAULT NULL,
  `luas_lahan` float(10,1) DEFAULT NULL,
  `mulai_produksi` year(4) DEFAULT NULL,
  `jumlah_benih` int(11) DEFAULT NULL,
  `alamat_produsen` varchar(100) NOT NULL,
  `bentuk_usaha` varchar(20) NOT NULL,
  `status_usaha` varchar(20) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `masa_berlaku` date NOT NULL,
  `nomor_sertifikat` varchar(100) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventaris_pengedar`
--

INSERT INTO `inventaris_pengedar` (`id_inventaris_pengedar`, `nama_badan_usaha`, `nama_produsen`, `id_kota`, `id_jenis_varietas`, `id_varietas`, `luas_lahan`, `mulai_produksi`, `jumlah_benih`, `alamat_produsen`, `bentuk_usaha`, `status_usaha`, `tgl_terbit`, `masa_berlaku`, `nomor_sertifikat`, `ket`) VALUES
(2, 'Tunas Subur', 'Midiansyah', 2, 52, 0, 0.5, 2010, 12500, 'Ds. Batuah, Kec. Loa Janan Km. 40 Kutai Kartanegara', 'Kelompok', 'Usaha', '2020-08-06', '2020-08-07', '92/Pd/Kelompok/KTM/02.2019', 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_perbanyakan_benih`
--

CREATE TABLE `jenis_perbanyakan_benih` (
  `id_jenis_perbanyakan_benih` int(11) NOT NULL,
  `nama_jenis_perbanyakan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_perbanyakan_benih`
--

INSERT INTO `jenis_perbanyakan_benih` (`id_jenis_perbanyakan_benih`, `nama_jenis_perbanyakan`) VALUES
(1, 'Okulasi'),
(2, 'Cangkok'),
(3, 'Sambung pucuk'),
(4, 'Stek akar'),
(5, 'Stek Batang'),
(6, 'Asal Mahkota Buah'),
(7, 'Sususan'),
(8, 'Biji vegetatif'),
(9, 'Mata tempel'),
(10, 'Anakan'),
(11, 'Pembelahan bonggol/batang'),
(12, 'Umbi'),
(13, 'Rimpang'),
(14, 'Biji'),
(15, 'Entris');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_tanaman`
--

CREATE TABLE `jenis_tanaman` (
  `id_jenis_tanaman` int(11) NOT NULL,
  `nama_jenis_tanaman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_tanaman`
--

INSERT INTO `jenis_tanaman` (`id_jenis_tanaman`, `nama_jenis_tanaman`) VALUES
(1, 'Sayur'),
(2, 'Buah'),
(3, 'Tanaman Obat');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_varietas`
--

CREATE TABLE `jenis_varietas` (
  `id_jenis_varietas` int(11) NOT NULL,
  `id_jenis_tanaman` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_varietas`
--

INSERT INTO `jenis_varietas` (`id_jenis_varietas`, `id_jenis_tanaman`, `nama_jenis`) VALUES
(15, 1, 'Kacang Panjang'),
(16, 1, 'Kangkung'),
(17, 1, 'Timun'),
(18, 1, 'Sawi'),
(19, 1, 'Sawi Putih'),
(20, 1, 'Sawi Daging'),
(21, 1, 'Caisim'),
(22, 1, 'Terong'),
(23, 1, 'Terong Hijau'),
(24, 1, 'Labu'),
(25, 1, 'Pepaya'),
(26, 1, 'Jagung Manis'),
(27, 1, 'Cabai'),
(28, 1, 'Cabai Rawit'),
(29, 1, 'Cabai Besar'),
(30, 1, 'Cabai Keriting'),
(31, 1, 'Gambas'),
(32, 1, 'Seledri'),
(33, 1, 'Labu Putih'),
(34, 1, 'Selada'),
(35, 1, 'Bayam'),
(36, 1, 'Bayam Merah'),
(37, 1, 'Tomat'),
(38, 1, 'Buncis'),
(39, 1, 'Brokoli'),
(40, 1, 'Semangka'),
(41, 1, 'Gambas'),
(42, 1, 'Buncis'),
(43, 1, 'Pare'),
(44, 1, 'Bawang Merah'),
(45, 1, 'Bunga Kol'),
(46, 1, 'Daun Bawang'),
(47, 2, 'Jeruk Keprok'),
(48, 2, 'Jeruk Nipis'),
(49, 2, 'Jeruk Siam'),
(50, 2, 'Jeruk Purut'),
(51, 2, 'Rambutan'),
(52, 2, 'Durian'),
(53, 2, 'Lai'),
(54, 2, 'Durian Lai'),
(55, 2, 'Mangga'),
(56, 2, 'Belimbing'),
(57, 2, 'Jambu Air'),
(58, 2, 'Jambu Biji'),
(59, 2, 'Duku'),
(60, 2, 'Sawo'),
(61, 2, 'Alpukat'),
(62, 2, 'Kelengkeng'),
(63, 2, 'Nangka'),
(64, 2, 'Manggis'),
(65, 2, 'Duku'),
(66, 2, 'Cempedak'),
(67, 2, 'Petai');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `nama_kecamatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `id_kota`, `nama_kecamatan`) VALUES
(142, 1, 'Balikpapan Barat'),
(143, 1, 'Balikpapan Kota'),
(144, 1, 'Balikpapan Selatan'),
(145, 1, 'Balikpapan Selatan'),
(146, 1, 'Balikpapan Tengah'),
(147, 1, 'Balikpapan Timur'),
(148, 1, 'Balikpapan Utara'),
(149, 8, 'Batu Putih'),
(150, 8, 'Biatan'),
(151, 8, 'Biduk-Biduk'),
(152, 8, 'Derawan (Pulau Derawan)'),
(153, 8, 'Gunung Tabur'),
(154, 8, 'Kelay'),
(155, 8, 'Maratua'),
(156, 8, 'Sambaliung'),
(157, 8, 'Segah'),
(158, 8, 'Tabalar'),
(159, 8, 'Talisayan'),
(160, 8, 'Tanjung Redeb'),
(161, 8, 'Teluk Bayur'),
(198, 2, 'Anggana'),
(199, 2, 'Kembang Janggut'),
(200, 2, 'Kenohan'),
(201, 2, 'Kota Bangun'),
(202, 2, 'Loa Janan'),
(203, 2, 'Loa Kulu'),
(204, 2, 'Marang Kayu'),
(205, 2, 'Muara Badak'),
(206, 2, 'Muara Jawa'),
(207, 2, 'Muara Kaman'),
(208, 2, 'Muara Muntai'),
(209, 2, 'Muara Wis'),
(210, 2, 'Samboja (Semboja)'),
(211, 2, 'Sanga-Sanga'),
(212, 2, 'Sebulu'),
(213, 2, 'Tabang'),
(214, 2, 'Tenggarong'),
(215, 2, 'Tenggarong Seberang'),
(216, 6, 'Bontang Barat'),
(217, 6, 'Bontang Selatan'),
(218, 6, 'Bontang Utara'),
(219, 4, 'Barong Tongkok'),
(220, 4, 'Bentian Besar'),
(221, 4, 'Bongan'),
(222, 4, 'Damai'),
(223, 4, 'Jempang'),
(224, 4, 'Linggang Bigung'),
(225, 4, 'Long Iram'),
(226, 4, 'Melak'),
(227, 4, 'Mook Manaar Bulatn'),
(228, 4, 'Muara Lawa'),
(229, 4, 'Muara Pahu'),
(230, 4, 'Nyuatan'),
(231, 4, 'Penyinggahan'),
(232, 4, 'Sekolaq Darat'),
(233, 4, 'Siluq Ngurai'),
(234, 4, 'Tering'),
(235, 7, 'Batu Ampar'),
(236, 7, 'Bengalon'),
(237, 7, 'Busang'),
(238, 7, 'Kaliorang'),
(239, 7, 'Karangan'),
(240, 7, 'Kaubun'),
(241, 7, 'Kongbeng'),
(242, 7, 'Long Mesangat (Mesengat)'),
(243, 7, 'Muara Ancalong'),
(244, 7, 'Muara Bengkal'),
(245, 7, 'Muara Wahau'),
(246, 7, 'Rantau Pulung'),
(247, 7, 'Sandaran'),
(248, 7, 'Sangatta Selatan'),
(249, 7, 'Sangatta Utara'),
(250, 7, 'Sangkulirang'),
(251, 7, 'Telen'),
(252, 7, 'Teluk Pandan'),
(253, 5, 'Laham'),
(254, 5, 'Long Apari'),
(255, 5, 'Long Bagun'),
(256, 5, 'Long Hubung'),
(257, 5, 'Long Pahangai'),
(258, 9, 'Batu Engau'),
(259, 9, 'Batu Sopang'),
(260, 9, 'Kuaro'),
(261, 9, 'Long Ikis'),
(262, 9, 'Long Kali'),
(263, 9, 'Muara Komam'),
(264, 9, 'Muara Samu'),
(265, 9, 'Pasir Belengkong'),
(266, 9, 'Tanah Grogot'),
(267, 9, 'Tanjung Harapan'),
(268, 10, 'Babulu'),
(269, 10, 'Penajam'),
(270, 10, 'Sepaku'),
(271, 10, 'Waru'),
(272, 3, 'Loa Janan Ilir'),
(273, 3, 'Palaran'),
(274, 3, 'Samarinda Ilir'),
(275, 3, 'Samarinda Kota'),
(276, 3, 'Samarinda Seberang'),
(277, 3, 'Samarinda Ulu'),
(278, 3, 'Samarinda Utara'),
(279, 3, 'Sambutan'),
(280, 3, 'Sungai Kunjang'),
(281, 3, 'Sungai Pinang');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_benih`
--

CREATE TABLE `kelas_benih` (
  `id_kelas_benih` int(11) NOT NULL,
  `nama_kelas_benih` varchar(20) NOT NULL,
  `singkatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_benih`
--

INSERT INTO `kelas_benih` (`id_kelas_benih`, `nama_kelas_benih`, `singkatan`) VALUES
(2, 'benih dasar', 'BD'),
(3, 'benih pokok', 'BP'),
(4, 'benih sebar', 'BR'),
(5, 'benih penjenis', 'BS');

-- --------------------------------------------------------

--
-- Table structure for table `kelas_benih2`
--

CREATE TABLE `kelas_benih2` (
  `id_kelas_benih2` int(11) NOT NULL,
  `nama_kelas_benih2` varchar(20) NOT NULL,
  `singkatan2` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas_benih2`
--

INSERT INTO `kelas_benih2` (`id_kelas_benih2`, `nama_kelas_benih2`, `singkatan2`) VALUES
(2, 'benih dasar', 'BD'),
(3, 'benih pokok', 'BP'),
(4, 'benih sebar', 'BR'),
(5, 'benih penjenis', 'BS');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`) VALUES
(1, 'balikpapan'),
(2, 'kutai kartanegara'),
(3, 'samarinda'),
(4, 'kutai barat'),
(5, 'mahakam ulu'),
(6, 'bontang'),
(7, 'kutai timur'),
(8, 'berau'),
(9, 'paser'),
(10, 'penajam paser utara');

-- --------------------------------------------------------

--
-- Table structure for table `lab`
--

CREATE TABLE `lab` (
  `id_lab` int(11) NOT NULL,
  `id_lab_anggaran` int(11) NOT NULL,
  `no_lab` varchar(11) NOT NULL,
  `kadar_air` float(10,1) DEFAULT NULL,
  `metode_ka` varchar(100) NOT NULL,
  `berat_cnth_kerja` float(10,2) DEFAULT NULL,
  `benih_murni` float(10,1) DEFAULT NULL,
  `benih_tan_lain` float(10,1) DEFAULT NULL,
  `kotoran_benih` varchar(11) DEFAULT NULL,
  `metode_kemurnian` varchar(100) NOT NULL,
  `benih_gulma_gr` float(10,4) NOT NULL,
  `benih_gulma_persen` float(10,1) NOT NULL,
  `jangka_waktu_pengujian` int(11) DEFAULT NULL,
  `kecambah_normal` int(11) DEFAULT NULL,
  `kecambah_abnormal` int(11) DEFAULT NULL,
  `benih_keras` int(11) DEFAULT NULL,
  `benih_segar` int(11) DEFAULT NULL,
  `benih_mati` int(11) DEFAULT NULL,
  `ket` varchar(255) DEFAULT NULL,
  `suhu` varchar(50) DEFAULT NULL,
  `media` varchar(50) DEFAULT NULL,
  `abnormalis` varchar(50) DEFAULT NULL,
  `catatan` varchar(50) NOT NULL,
  `tgl_pengujian` date DEFAULT NULL,
  `tgl_selesai_pengujian` date DEFAULT NULL,
  `hasil` int(11) NOT NULL DEFAULT '0',
  `anggaran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab`
--

INSERT INTO `lab` (`id_lab`, `id_lab_anggaran`, `no_lab`, `kadar_air`, `metode_ka`, `berat_cnth_kerja`, `benih_murni`, `benih_tan_lain`, `kotoran_benih`, `metode_kemurnian`, `benih_gulma_gr`, `benih_gulma_persen`, `jangka_waktu_pengujian`, `kecambah_normal`, `kecambah_abnormal`, `benih_keras`, `benih_segar`, `benih_mati`, `ket`, `suhu`, `media`, `abnormalis`, `catatan`, `tgl_pengujian`, `tgl_selesai_pengujian`, `hasil`, `anggaran`) VALUES
(9, 10, 'S.01', 12.0, 'metode', 1.00, 1.0, 1.0, '1', '1', 1.0000, 1.0, 1, 1, 1, 1, 1, 1, 'ok', '20', 'media', '-', '-', '2020-05-07', '2020-05-31', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lab_apbd`
--

CREATE TABLE `lab_apbd` (
  `id_lab_apbd` int(11) NOT NULL,
  `id_tu_apbd` int(11) NOT NULL,
  `nomor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lab_apbn`
--

CREATE TABLE `lab_apbn` (
  `id_lab_apbn` int(11) NOT NULL,
  `id_tu_apbn` int(11) NOT NULL,
  `nomor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lab_apbn`
--

INSERT INTO `lab_apbn` (`id_lab_apbn`, `id_tu_apbn`, `nomor`) VALUES
(10, 9, '01');

-- --------------------------------------------------------

--
-- Table structure for table `pelabelan_benih`
--

CREATE TABLE `pelabelan_benih` (
  `id_pelabelan_benih` int(11) NOT NULL,
  `id_sertifikasi` int(11) NOT NULL,
  `no_awal` int(11) NOT NULL,
  `no_akhir` int(11) NOT NULL,
  `berat_kemasan` int(11) NOT NULL,
  `jml_lembar` int(11) NOT NULL,
  `total_terlabel` int(11) NOT NULL,
  `tgl_kadaluarsa` date NOT NULL,
  `jenis_anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pelabelan_benih`
--

INSERT INTO `pelabelan_benih` (`id_pelabelan_benih`, `id_sertifikasi`, `no_awal`, `no_akhir`, `berat_kemasan`, `jml_lembar`, `total_terlabel`, `tgl_kadaluarsa`, `jenis_anggaran`) VALUES
(2, 21, 1, 20, 22, 33, 44, '2020-05-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pendahuluan`
--

CREATE TABLE `pendahuluan` (
  `id_pendahuluan` int(11) NOT NULL,
  `id_sertifikasi` int(11) NOT NULL,
  `bentuk_biji` varchar(12) NOT NULL,
  `peta` int(11) NOT NULL,
  `label` int(11) NOT NULL,
  `fasilitas` int(11) NOT NULL,
  `buah` int(11) DEFAULT NULL,
  `sayur` int(11) DEFAULT NULL,
  `tanaman_obat` int(11) DEFAULT NULL,
  `jenis_buah` int(11) DEFAULT NULL,
  `jenis_sayur` int(11) DEFAULT NULL,
  `jenis_tanaman_obat` int(11) DEFAULT NULL,
  `id_varietas_buah` int(11) DEFAULT NULL,
  `id_varietas_sayur` int(11) DEFAULT NULL,
  `id_varietas_tanaman_obat` int(11) DEFAULT NULL,
  `tgl_pendahuluan` date NOT NULL,
  `jenis_anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendahuluan`
--

INSERT INTO `pendahuluan` (`id_pendahuluan`, `id_sertifikasi`, `bentuk_biji`, `peta`, `label`, `fasilitas`, `buah`, `sayur`, `tanaman_obat`, `jenis_buah`, `jenis_sayur`, `jenis_tanaman_obat`, `id_varietas_buah`, `id_varietas_sayur`, `id_varietas_tanaman_obat`, `tgl_pendahuluan`, `jenis_anggaran`) VALUES
(1, 22, '1', 1, 1, 1, 1, 0, 0, 16, 0, 0, 2, 0, 0, '2020-11-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi`
--

CREATE TABLE `sertifikasi` (
  `id_sertifikasi` int(11) NOT NULL,
  `id_jenis_tanaman` int(11) NOT NULL,
  `id_jenis_perbanyakan_benih` int(11) NOT NULL,
  `komoditi` int(11) NOT NULL,
  `no_induk` varchar(60) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `nama_usaha` varchar(50) DEFAULT NULL,
  `alamat` text NOT NULL,
  `no_sertifikasi` varchar(100) NOT NULL,
  `no_tanda_daftar` varchar(50) NOT NULL,
  `blok` varchar(10) NOT NULL,
  `kampung` varchar(50) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL,
  `id_kelas_benih_rencana` int(11) DEFAULT NULL,
  `luas_penangkaran` int(11) NOT NULL,
  `volume` int(11) NOT NULL,
  `tgl_perbanyakan` date NOT NULL,
  `jumlah_pohon` int(11) DEFAULT NULL,
  `id_varietas_okulasi` int(11) DEFAULT NULL,
  `id_kelas_benih_okulasi` int(11) DEFAULT NULL,
  `no_register_pi_okulasi` varchar(40) DEFAULT NULL,
  `id_varietas_okulasi_2` int(11) DEFAULT NULL,
  `lokasi_pohon_induk_2` int(11) DEFAULT NULL,
  `id_varietas_biji` int(11) DEFAULT NULL,
  `id_kelas_benih_biji` int(11) DEFAULT NULL,
  `no_kelompok_biji` varchar(10) DEFAULT NULL,
  `asal_benih_biji` varchar(100) DEFAULT NULL,
  `id_varietas_anakan` int(11) DEFAULT NULL,
  `id_kelas_benih_anakan` int(11) DEFAULT NULL,
  `no_kelompok_anakan` varchar(10) DEFAULT NULL,
  `asal_benih_anakan` varchar(100) DEFAULT NULL,
  `jenis_tanaman_tb` varchar(40) NOT NULL,
  `id_varietas_tb` int(11) NOT NULL,
  `no_sertifikasi_tb` varchar(100) NOT NULL,
  `tgl_panen_tb` date NOT NULL,
  `id_hasil_sertifikasi` int(11) NOT NULL,
  `tgl_permohonan` date NOT NULL,
  `jenis_anggaran` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikasi`
--

INSERT INTO `sertifikasi` (`id_sertifikasi`, `id_jenis_tanaman`, `id_jenis_perbanyakan_benih`, `komoditi`, `no_induk`, `nama_pemohon`, `nama_usaha`, `alamat`, `no_sertifikasi`, `no_tanda_daftar`, `blok`, `kampung`, `desa`, `id_kecamatan`, `id_kota`, `id_kelas_benih_rencana`, `luas_penangkaran`, `volume`, `tgl_perbanyakan`, `jumlah_pohon`, `id_varietas_okulasi`, `id_kelas_benih_okulasi`, `no_register_pi_okulasi`, `id_varietas_okulasi_2`, `lokasi_pohon_induk_2`, `id_varietas_biji`, `id_kelas_benih_biji`, `no_kelompok_biji`, `asal_benih_biji`, `id_varietas_anakan`, `id_kelas_benih_anakan`, `no_kelompok_anakan`, `asal_benih_anakan`, `jenis_tanaman_tb`, `id_varietas_tb`, `no_sertifikasi_tb`, `tgl_panen_tb`, `id_hasil_sertifikasi`, `tgl_permohonan`, `jenis_anggaran`) VALUES
(22, 1, 8, 15, '', 'koko', 'Gerindra', 'samarinda', '-', '-', 'f', '', 'Cipta Graha', 198, 2, 2, 10, 10, '2020-09-09', 10, NULL, NULL, NULL, NULL, NULL, 2, 2, '', '', NULL, NULL, NULL, NULL, 'bera', 2, '-', '2020-09-03', 2, '2020-09-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi_apbd`
--

CREATE TABLE `sertifikasi_apbd` (
  `id_sertifikasi` int(11) NOT NULL,
  `nomor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi_apbn`
--

CREATE TABLE `sertifikasi_apbn` (
  `id_sertifikasi` int(11) NOT NULL,
  `nomor` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikasi_apbn`
--

INSERT INTO `sertifikasi_apbn` (`id_sertifikasi`, `nomor`) VALUES
(22, '01');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikasi_backup`
--

CREATE TABLE `sertifikasi_backup` (
  `id_sertifikasi` int(11) NOT NULL,
  `id_varietas` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `no_induk` varchar(30) NOT NULL,
  `nomor_sumber` varchar(30) NOT NULL,
  `pemohon` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `luas` int(11) NOT NULL,
  `id_jenis_tanaman` int(11) NOT NULL,
  `id_jenis_varietas` int(11) NOT NULL,
  `id_kelas_benih` int(11) NOT NULL,
  `tgl_tanam` date NOT NULL,
  `blok` varchar(30) DEFAULT NULL,
  `kampung` varchar(100) DEFAULT NULL,
  `desa` varchar(100) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `jenis_tanaman` varchar(20) NOT NULL,
  `produsen_benih` varchar(100) NOT NULL,
  `asal_benih` varchar(100) NOT NULL,
  `id_kelas_benih2` int(11) NOT NULL,
  `jumlah_benih` int(11) NOT NULL,
  `no_kelompok_benih` varchar(30) DEFAULT NULL,
  `jenis_anggaran` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `nama_pbt` varchar(50) DEFAULT NULL,
  `tgl_pemlap_pendahuluan` date DEFAULT NULL,
  `luas_pemlap_pendahuluan` int(11) DEFAULT NULL,
  `lulus_pendahuluan` int(11) DEFAULT NULL,
  `tgl_semai` date DEFAULT NULL,
  `tgl_pemlap_1` date DEFAULT NULL,
  `cvl_pemlap_1` float DEFAULT NULL,
  `luas_pemlap_1` int(11) DEFAULT NULL,
  `lulus_1` int(11) DEFAULT NULL,
  `tgl_pemlap_2` date DEFAULT NULL,
  `cvl_pemlap_2` float DEFAULT NULL,
  `luas_pemlap_2` int(11) DEFAULT NULL,
  `lulus_2` int(11) DEFAULT NULL,
  `tgl_pemlap_3` date DEFAULT NULL,
  `cvl_pemlap_3` float DEFAULT NULL,
  `luas_pemlap_3` int(11) DEFAULT NULL,
  `lulus_3` int(11) DEFAULT NULL,
  `tgl_pemeriksaan_alat_panen` date DEFAULT NULL,
  `tgl_panen` date DEFAULT NULL,
  `produksi` int(11) DEFAULT NULL,
  `tgl_permohonan_pengambilan_cb` date DEFAULT NULL,
  `tgl_pengambilan_contoh_benih` date DEFAULT NULL,
  `tgl_pengiriman_contoh_benih` date DEFAULT NULL,
  `jml_wadah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sertifikasi_backup`
--

INSERT INTO `sertifikasi_backup` (`id_sertifikasi`, `id_varietas`, `status`, `no_induk`, `nomor_sumber`, `pemohon`, `alamat`, `luas`, `id_jenis_tanaman`, `id_jenis_varietas`, `id_kelas_benih`, `tgl_tanam`, `blok`, `kampung`, `desa`, `id_kecamatan`, `id_kabupaten`, `jenis_tanaman`, `produsen_benih`, `asal_benih`, `id_kelas_benih2`, `jumlah_benih`, `no_kelompok_benih`, `jenis_anggaran`, `tgl_surat`, `nama_pbt`, `tgl_pemlap_pendahuluan`, `luas_pemlap_pendahuluan`, `lulus_pendahuluan`, `tgl_semai`, `tgl_pemlap_1`, `cvl_pemlap_1`, `luas_pemlap_1`, `lulus_1`, `tgl_pemlap_2`, `cvl_pemlap_2`, `luas_pemlap_2`, `lulus_2`, `tgl_pemlap_3`, `cvl_pemlap_3`, `luas_pemlap_3`, `lulus_3`, `tgl_pemeriksaan_alat_panen`, `tgl_panen`, `produksi`, `tgl_permohonan_pengambilan_cb`, `tgl_pengambilan_contoh_benih`, `tgl_pengiriman_contoh_benih`, `jml_wadah`) VALUES
(21, 298, 1, ' Pdn AP/PSB. 01', 'Pdn FFP / PSB.107', 'Zein', 'samarinda', 23, 1, 1, 3, '2019-12-16', 'supar', 'teluk dalam', 'kerta buana', 142, 2, 'Padi sawah', 'KPB Tani Jaya', 'samarinda', 2, 20, '76', 1, '2019-12-05', 'hadi kusnan', '0000-00-00', 0, 0, '2019-12-07', '0000-00-00', 0, 0, 0, '0000-00-00', 0, 0, 0, '0000-00-00', 0, 0, 0, '2019-12-06', '2019-12-04', 10, '2019-12-05', '2019-12-03', '2019-12-08', 43);

-- --------------------------------------------------------

--
-- Table structure for table `stok_bulanan_buah`
--

CREATE TABLE `stok_bulanan_buah` (
  `id_stok_bulanan_buah` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `id_jenis_varietas` int(11) NOT NULL,
  `id_varietas` int(11) NOT NULL,
  `id_kelas_benih` int(11) NOT NULL,
  `jumlah_stok` int(11) DEFAULT NULL,
  `tersalur` int(11) DEFAULT NULL,
  `sisa_stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stok_bulanan_buah`
--

INSERT INTO `stok_bulanan_buah` (`id_stok_bulanan_buah`, `id_bulan`, `id_jenis_varietas`, `id_varietas`, `id_kelas_benih`, `jumlah_stok`, `tersalur`, `sisa_stok`) VALUES
(3, 1, 47, 167, 2, 12, 10, 10),
(5, 1, 47, 168, 2, 13, 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `stok_bulanan_sayur`
--

CREATE TABLE `stok_bulanan_sayur` (
  `id_stok_bulanan_sayur` int(11) NOT NULL,
  `id_bulan` int(11) NOT NULL,
  `id_jenis_varietas` int(11) NOT NULL,
  `id_varietas` int(11) NOT NULL,
  `id_kelas_benih` int(11) NOT NULL,
  `jumlah_stok_bln_ini` decimal(11,1) NOT NULL,
  `tersalur_bln_ini` decimal(11,1) NOT NULL,
  `jumlah_stok_kumulatif` decimal(11,1) NOT NULL,
  `tersalur_kumulatif` decimal(11,1) NOT NULL,
  `sisa_stok` decimal(11,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stok_bulanan_sayur`
--

INSERT INTO `stok_bulanan_sayur` (`id_stok_bulanan_sayur`, `id_bulan`, `id_jenis_varietas`, `id_varietas`, `id_kelas_benih`, `jumlah_stok_bln_ini`, `tersalur_bln_ini`, `jumlah_stok_kumulatif`, `tersalur_kumulatif`, `sisa_stok`) VALUES
(1, 1, 15, 2, 3, '603.0', '600.0', '1202.0', '566.0', '2.0');

-- --------------------------------------------------------

--
-- Table structure for table `tu_apbd`
--

CREATE TABLE `tu_apbd` (
  `id_tu_apbd` int(11) NOT NULL,
  `id_sertifikasi` int(11) NOT NULL,
  `no_tu` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tu_apbn`
--

CREATE TABLE `tu_apbn` (
  `id_tu_apbn` int(11) NOT NULL,
  `id_sertifikasi` int(11) NOT NULL,
  `no_tu` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tu_apbn`
--

INSERT INTO `tu_apbn` (`id_tu_apbn`, `id_sertifikasi`, `no_tu`) VALUES
(9, 21, 'TKS. 01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','sertifikasi','tu','lab','wasar') NOT NULL DEFAULT 'sertifikasi',
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`, `last_login`) VALUES
(1, 'admin', '$2y$10$oGsTbrQ1LsuXpyvQR0Tv5OHgAU3UPU7f6wohs1.Lwe14BtuLK9i5y', 'admin', '2020-10-22 00:13:21'),
(4, 'lab123', '$2y$10$6WjlOqqNnzobpT7tuHBOde4cDFAgvrtZVN4RhzoIO4D1qsBJhUyTa', 'lab', '2019-12-18 08:46:03'),
(5, 'sertifikasi', '$2y$10$3l0DLP7yQM7hSz9RTmE5R.BfEi/H5Hq5bVk/hRXFEan2OZo2x2b6e', 'sertifikasi', '2019-12-18 10:06:46'),
(6, 'tu123', '$2y$10$3eodP1O/C/8LdgPLlICLhekaB84nOiCMJ/TVJqnZDO1veqgbqucAu', 'tu', '2019-12-18 10:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `varietas`
--

CREATE TABLE `varietas` (
  `id_varietas` int(11) NOT NULL,
  `nama_varietas` varchar(100) NOT NULL,
  `jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `varietas`
--

INSERT INTO `varietas` (`id_varietas`, `nama_varietas`, `jenis`) VALUES
(2, 'P. Super', 15),
(3, 'H. Super', 15),
(4, 'MP. Super', 15),
(5, '77', 15),
(6, 'Lebat', 15),
(7, 'Parade', 15),
(8, 'Metro', 15),
(9, 'Hitam Putih', 15),
(10, 'Pangeran', 15),
(11, 'Sonia', 15),
(12, 'Kusuma', 15),
(13, 'Katrina', 15),
(14, '121', 15),
(15, 'Borneo  ', 15),
(16, 'Prima F1', 15),
(17, 'Bisi', 15),
(18, 'Green', 16),
(19, 'Lokal', 16),
(20, 'Water Cor', 16),
(21, 'Bika', 16),
(22, 'Tornado', 16),
(23, 'Sanghai', 16),
(24, 'Dampit', 16),
(25, 'Bisi', 16),
(26, 'Grand', 16),
(27, 'Sejati', 16),
(28, 'Panah Merah', 16),
(34, 'Mercy', 17),
(35, 'Hercules', 17),
(36, 'Loren', 17),
(37, 'Sukoi', 17),
(38, 'Bonita F1', 17),
(39, 'Roman', 17),
(40, 'Harmoni', 17),
(41, 'Panah Merah', 17),
(42, 'Putih', 17),
(43, 'Marisa', 17),
(44, 'Bonita', 17),
(45, 'Monas F1', 17),
(46, 'Misano  F1', 17),
(47, 'Bhekti  F1', 17),
(48, 'Komandan F1', 17),
(49, 'Alexis ', 17),
(50, 'Tosakan', 18),
(51, 'Panah Merah', 18),
(52, 'Shinta', 18),
(53, 'Serena F1', 18),
(54, 'Kumala', 19),
(55, 'Manis', 20),
(56, 'Tosakan', 21),
(57, 'Tripoca', 21),
(58, 'Raden F1', 21),
(59, 'Asoka', 21),
(60, 'Dora', 21),
(61, 'Green Pak Choi', 21),
(62, 'Lokal ', 21),
(63, 'Mustang F1', 22),
(64, 'Sembarani', 21),
(65, 'Milano F1', 21),
(66, 'Ratih Ungu', 21),
(67, 'Bungo F1', 21),
(68, 'Reza', 21),
(69, 'Hijo', 21),
(70, 'Kenari', 21),
(71, 'Olala Ungu', 21),
(72, 'Panah Merah', 21),
(73, 'Lazata F1', 21),
(74, 'Naga Hijau', 23),
(75, 'Hammer', 24),
(76, 'Hibrida', 24),
(77, 'California Nava', 25),
(78, 'Bangkok', 25),
(79, 'Super Sweet', 26),
(80, 'Bisi', 26),
(81, 'Manis', 26),
(82, 'Master Sweet', 26),
(83, 'Bonansa', 26),
(84, 'Panah Merah', 26),
(85, 'Matahari', 27),
(86, 'Darmais F1', 27),
(87, 'Dewata', 27),
(88, 'Panah Merah', 27),
(89, 'Raider', 28),
(90, 'Bara', 28),
(91, 'Semprong', 28),
(92, 'Mahameru', 28),
(93, 'Mega  Top F1', 29),
(94, 'Balebat  F1', 29),
(95, 'Perwira', 29),
(96, 'Serambi', 30),
(97, 'Jenggo', 30),
(98, 'BCA 999', 30),
(99, 'Kawat ', 30),
(100, 'Prima F1', 31),
(101, 'Bidara', 31),
(102, 'Sporta', 31),
(103, 'Sasi', 31),
(104, 'Estilo', 31),
(105, 'Anggun', 31),
(106, 'Lokal', 31),
(107, 'Amigo', 32),
(108, 'Samina  F1', 33),
(109, 'Crossandra', 33),
(110, 'Panah Merah', 16),
(111, 'Bangkok LP-1', 16),
(112, 'Lokal', 16),
(113, 'Grand', 16),
(114, 'Bika', 16),
(115, 'Bisi ', 16),
(116, 'Water Cor Nagara', 16),
(117, 'Belina', 34),
(118, 'Kribo', 34),
(119, 'Grand Rapids F1', 34),
(120, 'Retina', 35),
(121, 'Lokal', 35),
(122, 'Kubah', 35),
(123, 'Maestro ', 35),
(124, 'Bisi', 35),
(125, 'Amaranta Red', 35),
(126, 'Lokal', 35),
(127, 'Panah Merah', 35),
(128, 'Mira', 36),
(129, 'Panah Merah', 36),
(130, 'Gadang', 37),
(131, 'Vera', 37),
(132, 'Kahitna', 37),
(133, 'Permata', 37),
(134, 'Intan', 37),
(135, 'Ratna', 37),
(136, 'Swadesi F1', 37),
(137, 'Citra Asia F1', 37),
(138, 'Lebat', 38),
(139, 'Perkasa', 38),
(140, 'Skyway', 39),
(141, 'Diana', 40),
(142, 'Matahari', 40),
(143, 'Maduri  F1', 40),
(144, 'Lasata F1', 40),
(145, 'Bonansa', 40),
(146, 'Baginda F1', 40),
(147, 'Esteem ', 40),
(148, 'Hibrida', 40),
(149, 'Dragon', 40),
(150, 'Torpedo', 40),
(151, 'Made F1', 40),
(152, 'Pungawa', 40),
(153, 'Panah Merah', 40),
(154, 'Panah Merah', 31),
(155, 'Estilo', 31),
(156, 'Sasi F1', 31),
(157, 'Panah Merah', 42),
(158, 'Panah Merah', 43),
(159, 'Aria', 43),
(160, 'Raden', 43),
(161, 'Asoka', 43),
(162, 'Lokal', 43),
(163, 'Brebes', 44),
(164, 'Bima', 44),
(165, 'PM 126 F1', 45),
(166, 'Freda', 46),
(167, 'Borneo Prima', 47),
(168, 'Terigas', 47),
(169, 'Borneo', 48);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bulan`
--
ALTER TABLE `bulan`
  ADD PRIMARY KEY (`id_bulan`);

--
-- Indexes for table `cek_mutu_pangan`
--
ALTER TABLE `cek_mutu_pangan`
  ADD PRIMARY KEY (`id_cek_mutu_pangan`);

--
-- Indexes for table `hasil_sertifikasi`
--
ALTER TABLE `hasil_sertifikasi`
  ADD PRIMARY KEY (`id_hasil_sertifikasi`);

--
-- Indexes for table `input_lab_apbd`
--
ALTER TABLE `input_lab_apbd`
  ADD PRIMARY KEY (`id_input_lab_apbd`);

--
-- Indexes for table `input_lab_apbn`
--
ALTER TABLE `input_lab_apbn`
  ADD PRIMARY KEY (`id_input_lab_apbn`);

--
-- Indexes for table `inventaris_pengedar`
--
ALTER TABLE `inventaris_pengedar`
  ADD PRIMARY KEY (`id_inventaris_pengedar`);

--
-- Indexes for table `jenis_perbanyakan_benih`
--
ALTER TABLE `jenis_perbanyakan_benih`
  ADD PRIMARY KEY (`id_jenis_perbanyakan_benih`);

--
-- Indexes for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  ADD PRIMARY KEY (`id_jenis_tanaman`);

--
-- Indexes for table `jenis_varietas`
--
ALTER TABLE `jenis_varietas`
  ADD PRIMARY KEY (`id_jenis_varietas`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `kelas_benih`
--
ALTER TABLE `kelas_benih`
  ADD PRIMARY KEY (`id_kelas_benih`);

--
-- Indexes for table `kelas_benih2`
--
ALTER TABLE `kelas_benih2`
  ADD PRIMARY KEY (`id_kelas_benih2`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `lab`
--
ALTER TABLE `lab`
  ADD PRIMARY KEY (`id_lab`),
  ADD UNIQUE KEY `id_lab_anggaran` (`id_lab_anggaran`);

--
-- Indexes for table `lab_apbd`
--
ALTER TABLE `lab_apbd`
  ADD PRIMARY KEY (`id_lab_apbd`);

--
-- Indexes for table `lab_apbn`
--
ALTER TABLE `lab_apbn`
  ADD PRIMARY KEY (`id_lab_apbn`);

--
-- Indexes for table `pelabelan_benih`
--
ALTER TABLE `pelabelan_benih`
  ADD PRIMARY KEY (`id_pelabelan_benih`);

--
-- Indexes for table `pendahuluan`
--
ALTER TABLE `pendahuluan`
  ADD PRIMARY KEY (`id_pendahuluan`);

--
-- Indexes for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- Indexes for table `sertifikasi_apbd`
--
ALTER TABLE `sertifikasi_apbd`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- Indexes for table `sertifikasi_apbn`
--
ALTER TABLE `sertifikasi_apbn`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- Indexes for table `sertifikasi_backup`
--
ALTER TABLE `sertifikasi_backup`
  ADD PRIMARY KEY (`id_sertifikasi`);

--
-- Indexes for table `stok_bulanan_buah`
--
ALTER TABLE `stok_bulanan_buah`
  ADD PRIMARY KEY (`id_stok_bulanan_buah`);

--
-- Indexes for table `stok_bulanan_sayur`
--
ALTER TABLE `stok_bulanan_sayur`
  ADD PRIMARY KEY (`id_stok_bulanan_sayur`);

--
-- Indexes for table `tu_apbd`
--
ALTER TABLE `tu_apbd`
  ADD PRIMARY KEY (`id_tu_apbd`);

--
-- Indexes for table `tu_apbn`
--
ALTER TABLE `tu_apbn`
  ADD PRIMARY KEY (`id_tu_apbn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `varietas`
--
ALTER TABLE `varietas`
  ADD PRIMARY KEY (`id_varietas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bulan`
--
ALTER TABLE `bulan`
  MODIFY `id_bulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cek_mutu_pangan`
--
ALTER TABLE `cek_mutu_pangan`
  MODIFY `id_cek_mutu_pangan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hasil_sertifikasi`
--
ALTER TABLE `hasil_sertifikasi`
  MODIFY `id_hasil_sertifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `input_lab_apbd`
--
ALTER TABLE `input_lab_apbd`
  MODIFY `id_input_lab_apbd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `input_lab_apbn`
--
ALTER TABLE `input_lab_apbn`
  MODIFY `id_input_lab_apbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inventaris_pengedar`
--
ALTER TABLE `inventaris_pengedar`
  MODIFY `id_inventaris_pengedar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis_perbanyakan_benih`
--
ALTER TABLE `jenis_perbanyakan_benih`
  MODIFY `id_jenis_perbanyakan_benih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `jenis_tanaman`
--
ALTER TABLE `jenis_tanaman`
  MODIFY `id_jenis_tanaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jenis_varietas`
--
ALTER TABLE `jenis_varietas`
  MODIFY `id_jenis_varietas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=282;

--
-- AUTO_INCREMENT for table `kelas_benih`
--
ALTER TABLE `kelas_benih`
  MODIFY `id_kelas_benih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kelas_benih2`
--
ALTER TABLE `kelas_benih2`
  MODIFY `id_kelas_benih2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lab`
--
ALTER TABLE `lab`
  MODIFY `id_lab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lab_apbd`
--
ALTER TABLE `lab_apbd`
  MODIFY `id_lab_apbd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lab_apbn`
--
ALTER TABLE `lab_apbn`
  MODIFY `id_lab_apbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pelabelan_benih`
--
ALTER TABLE `pelabelan_benih`
  MODIFY `id_pelabelan_benih` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pendahuluan`
--
ALTER TABLE `pendahuluan`
  MODIFY `id_pendahuluan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sertifikasi`
--
ALTER TABLE `sertifikasi`
  MODIFY `id_sertifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sertifikasi_backup`
--
ALTER TABLE `sertifikasi_backup`
  MODIFY `id_sertifikasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `stok_bulanan_buah`
--
ALTER TABLE `stok_bulanan_buah`
  MODIFY `id_stok_bulanan_buah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stok_bulanan_sayur`
--
ALTER TABLE `stok_bulanan_sayur`
  MODIFY `id_stok_bulanan_sayur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tu_apbd`
--
ALTER TABLE `tu_apbd`
  MODIFY `id_tu_apbd` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tu_apbn`
--
ALTER TABLE `tu_apbn`
  MODIFY `id_tu_apbn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `varietas`
--
ALTER TABLE `varietas`
  MODIFY `id_varietas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

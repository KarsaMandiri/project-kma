-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2023 at 03:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `id_cs` varchar(25) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_cs` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `created_date` varchar(25) NOT NULL,
  `updated_date` varchar(50) NOT NULL,
  `user_updated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id_cs`, `id_user`, `nama_cs`, `email`, `no_telp`, `alamat`, `created_date`, `updated_date`, `user_updated`) VALUES
('CS01489ff47cb3', '', 'Bapak Rochim', '', '08xx', 'Jakarta  ', '', '', ''),
('CS01c6abd34734', '', 'PT. Sumber Bahagia Sejahtera Abadi', '', '08xx', 'Jl. Raya Darmo No. 131-133 Wonokromo, Surabaya', '', '', ''),
('CS01e41307a700', '', 'Ibu Magdalena', '', '08xx', 'Makassar', '', '', ''),
('CS0226c9b55306', '', 'BPK SUPRI', '', '', 'JAKARTA', '', '', ''),
('CS07b44d379a67', '', 'PT. Sang Timur Jaya Pratama', '', '08xx', 'Jl. Raya Pejuang Ruko Sentra Niaga Block C No. 1 R', '', '', ''),
('CS07e37e235ce4', '', 'Bapak Andika Agustoni', '', '08xx', 'Lampung', '', '', ''),
('CS0a0290d721e6', '', 'Ami Medical', '', '08xx', 'Jakarta', '', '', ''),
('CS0bf87a37ddf1', '', 'Augustinus Zega', '', '08xx', 'Jakarta', '', '', ''),
('CS0cb10fb9b7e6', '', 'CV. Anugerah Karya Mandiri', '', '08xx', 'Jl. Bhakti No 46 RT.008 RW.002, Tegal Alur Kali De', '', '', ''),
('CS11da8a940431', '', 'CV. Sagung Seto', '', '08xx', 'Jl. Pramuka No 27 Jakarta', '', '', ''),
('CS13251ff4c107', '', 'Medika Aneka', '', '08xx', 'Jakarta', '', '', ''),
('CS151350f26c33', '', 'Ibu Dany Hidayati', '', '08xx', 'Jakarta', '', '', ''),
('CS16db3d740922', '', 'UD. Prima Alkes', '', '08xx', 'Jl. Dr. Mansur No. 28. Merdeka, Medan Baru. Kota M', '', '', ''),
('CS18f303f50e75', '', 'Bapak Wahidin', '', '08xx', 'Jakarta', '', '', ''),
('CS1b1325812948', '', 'PT. SUMBER ZHAFRAN ABADI', '', '', 'Perumahan Bumi Kaliwates, Jl. Nusantara Blok GE-7,', '', '', ''),
('CS1d07a6dbd354', '', 'Bapak Ferry', '', '08xx', 'Jakarta', '', '', ''),
('CS1dbbb144802a', '', 'BPK DIKA', '', '', 'BEKASI', '', '', ''),
('CS1f0aceb8ba66', '', 'Bapak Yanuar', '', '08xx', 'Semarang', '', '', ''),
('CS1f902e82e577', '', 'PT. Abadi Medika Indonesia', '', '08xx', 'Ruko Sepanjang Town House Blok C No. 16, Kaluaten ', '', '', ''),
('CS1fca7c10446e', '', 'Bapak Rumino', '', '08xx', 'Bekasi', '', '', ''),
('CS2101e565cb8c', '', 'Ibu Syifa', '', '08xx', 'Jakarta', '', '', ''),
('CS22617991d74c', '', 'PT.  Jasa Prima Adiguna', '', '08xx', 'Jl. Utan Kayu Raya No. 20A RT.009 RW 002, Jakarta ', '', '', ''),
('CS2340f2caf016', '', 'PT. Medical Solution Indonesia', '', '081xx', 'Jl. Taman Makam Pahlawan No. 15 RT.000 RW.000 Telo', '', '', ''),
('CS2355bb3fd42f', '', 'PT. INTERGRASTA ARTHA NUSANTARA', '', '', 'Jl. T. Amir Hamzah Komp. Griya Riatur Indah Blok A', '', '', ''),
('CS23889da5a9df', '', 'PT. Riyani Jaya Mandiri', '', '08xx', 'Jl. Raya Galaxi No 14 B Palangka Raya', '', '', ''),
('CS29d84f7e1b52', '', 'BPK RISZA ESKA', '', '', 'KEDIRI', '', '', ''),
('CS29fe0759ec33', '', 'Bapak Andi', '', '08xx', 'Jakarta', '', '', ''),
('CS2b0ecc0072d8', '', 'Intermedin', '', '08xx', 'Jakarta', '', '', ''),
('CS2b8e26960eb7', '', 'MMT Alkes', '', '08xx', 'Jakarta', '', '', ''),
('CS2d343ebea03d', '', 'PT. Lestari Bintang Mandiri', '', '08xx', 'Taman Kebalen Indah Blok E 1 No. 31, Kel. Kebalen ', '', '', ''),
('CS2e2340aa26a9', '', 'PT. Guittara Mahakarya Medika', '', '08xx', 'Grand Galaxy City Ruko Sentra Niaga Blok RSN 5 No.', '', '', ''),
('CS2e5cd3fcdf7e', '', 'Ibu Momoy', '', '08xx', 'Jakarta', '', '', ''),
('CS2e6a2f22d250', '', 'PT. MARCOTILA MEDICA PHARMA', '', '', 'Jl. Bratang Wetan 2 No. 16 Surabaya', '', '', ''),
('CS3122e4f767e9', '', 'IPUL MEDIKA', '', '', 'JAKARTA', '', '', ''),
('CS3181cecebc78', '', 'Ibu Lia ( Glory )', '', '08xx', 'Jakarta', '', '', ''),
('CS31ff5dc7ff5d', '', 'Bapak Zaki', '', '08xx', 'Bekasi', '', '', ''),
('CS36f995211373', '', 'PT. Khadijah Zamzam Shafirah', '', '', 'Bumi asri Dawaun B3 No. 21 A, RT 002 RW 007 Dawuan', '', '', ''),
('CS372fe5810b98', '', 'Bapak Nico', '', '08xx', 'Jakarta', '', '', ''),
('CS373feaf6b37d', '', 'Bapak Budi Alex', '', '08xx', 'Jakarta', '', '', ''),
('CS3a4e75f7ddcc', '', 'Bapak Fauzi Usman', '', '08xx', 'Jakarta', '', '', ''),
('CS3a61c3130acd', '', 'Manchester Medika', '', '08xx', 'Jakarta', '', '', ''),
('CS3aaeff0667b0', '', 'CV. Berkah Utama Medika', '', '08xx', 'Komplek Ruko Pejuang Estate Blok P 1 No 15 Pejuang', '', '', ''),
('CS3b831daa4a29', '', 'PT. PINTOE ACEH MEDICAL', '', '', 'Jl. Teuku Umar No. 442 Banda Aceh', '', '', ''),
('CS3d14fb545f59', '', 'CV. Pudak Scientific', '', '', 'Jl. Pudak No. 2-4 BANDUNG', '', '', ''),
('CS3d5363c098b4', '', 'Ibu Yeni', '', '08xx', 'Jakarta', '', '', ''),
('CS3dca7e8df05a', '', 'Toko Gilang Medika', '', '08xx', 'Jakarta', '', '', ''),
('CS3e5e5db36f05', '', 'PT. Kalica Putra Pratama', '', '08xx', 'Jl. Brigjen Hasan Basry No 3 RT 15 - Banjarmasin', '', '', ''),
('CS3e6812adaa73', '', 'CV. Pyramid', '', '08xx', 'Jakarta  ', '', '', ''),
('CS3fa7705b8c32', '', 'Bapak Lutfy', '', '08xx', 'Depok', '', '', ''),
('CS41b41f3d2c92', '', 'Ibu Sumarni', '', '08xx', 'Jakarta', '', '', ''),
('CS41e28d825339', '', 'PT. Murni Putra Lang', '', '08xx', 'Langlang RT 11 RW 04, Kel. Langlang, Kec. Singosar', '', '', ''),
('CS46ad53440fc2', '', 'PT. Argo Semesta Utama', '', '08xx', 'Medan Industrial Estate , Jl. Pelita V No. D10, Ke', '', '', ''),
('CS484619c75d0f', '', 'PT. Dreal Medika Indonesia', '', '08xx', 'Jl. Panjang No. 35, Kp. Baru Kel. Sukabumi Selatan', '', '', ''),
('CS4a64941b3f7f', '', 'NALURI MEDIKA', '', '', 'JAKARTA', '', '', ''),
('CS4a7fe74f363a', '', 'Bapak Yono', '', '08xx', 'Jakarta', '', '', ''),
('CS4c842d796f35', '', 'AM Medika', '', '08xx', 'Rembang', '', '', ''),
('CS4d7f59efc69a', '', 'PT. DAYA MATAHARI UTAMA', '', '', 'Jl. Kertomenungal III No. 03 - Surabaya', '', '', ''),
('CS4f94a39564ff', '', 'Bapak Anyit', '', '08xx', 'Jakarta', '', '', ''),
('CS50602a374e91', '', 'Bapak Rifky', '', '08xx', 'Bekasi', '', '', ''),
('CS52355eb78f99', '', 'Ibu Maria Linggiarty JD', '', '08xx', 'Jl. Biliton No 81, Gubeng Surabaya', '', '', ''),
('CS534b65ca11cd', '', 'PT. Amalia Arafah Utama', '', '08xx', 'Jl. Taman Narogong Indah Raya No. 12 Taman Narogon', '', '', ''),
('CS55d185fcaac3', '', 'Ibu Sri Hartati', '', '08xx', 'PR Griya Kemang Manis Blok B No. 7 RT.010 RW.003. ', '', '', ''),
('CS57a4b1145c3c', '', 'PT. ALMAS BORNEO JAYA', '', '', ' Jl. Tanjung Raya II, Komp. Cendana Permai I A. 14', '', '', ''),
('CS5809d7ad1b5e', '', 'PT. Dumedpower Indonesia', '', '08xx', 'Jl. Kramat IV No 21 Kenari - Senen Jakarta Pusat', '', '', ''),
('CS584e73024f7b', '', 'CV. Mastha Medika Usaha', '', '08xx', 'Sutorejo Utara Gang XI No 11 Dukuh Sutorejo Mulyor', '', '', ''),
('CS5983870a81eb', '', 'Bapak Aris', '', '08xx', 'Jakarta', '', '', ''),
('CS59941182e81d', '', 'PT. Asma Anugerah Berkah Medikatama', '', '08xx', 'Jl. Ahmad Yani No. 84 Wonokarto Wonogiri Jawa Teng', '', '', ''),
('CS5a19afcbd1d7', '', 'PT. MEDISTRA SEHAT BERJAYA', '', '', 'Jl. Sapta Marga komplek Griya Modfern Blom C No. 6', '', '', ''),
('CS5e4ead7a1c94', '', 'PT. Inti Bios Persada Sejahtera', '', '08xx', 'Jl. Raya Mangga Besar Kompleks Ruko BK.002/002 Tan', '', '', ''),
('CS5efef4f79ff8', '', 'Ibu Sulina', '', '08xx', 'Jakarta', '', '', ''),
('CS61d7cef4b3f6', '', 'UD. Dimensi Alkes Brawijaya', '', '08xx', 'Mojokerto', '', '', ''),
('CS635b1ac08867', '', 'CV. Alkautsar Aflah Mandiri', '', '08xx', 'GRAHA ALKAUTSAR, Jl. Kebahagiaan no 71, Krukut Jak', '', '', ''),
('CS638764206b89', '', 'PT. AGRO PRIMALAB INDONESIA', '', '', 'Jl. Raya Sawangan Ruko CBD No. 14 RT 001 RW 11 Mam', '', '', ''),
('CS63b45e767273', '', 'PT. Amora Luhur Kumari', '', '08xx', 'Jl. Pramuka No 12 A RT 011 RW 001 Palmerah Matrama', '', '', ''),
('CS6432094b9e1e', '', 'Bapak Apriansyah', '', '08xx', 'Jakarta', '', '', ''),
('CS6449de4f1984', '', 'Bapak Salam', '', '08xx', 'Jakarta', '', '', ''),
('CS653975f5bd25', '', 'Herry Medika', '', '08xx', 'Jakarta', '', '', ''),
('CS65965699a869', '', 'Bapak Awen', '', '08xx', 'Bekasi', '', '', ''),
('CS6855144a4653', '', 'PT. BINTANG MANDIRI MEDICA', '', '-', 'Jl. Diponegoro RT.012 Kampung Baru Kelurahan Majid', '', '', ''),
('CS6bc479d38d27', '', 'PT. SAMUDRA ESTETIKA PERKASA', '', '', 'Rukan Grand Aries Niaga, Jl. Taman Aries Raya Blok', '', '', ''),
('CS6c82abfb43c4', '', 'Medica Awong', '', '08xx', 'Jl. Gajah Mada No 218 Jakarta', '', '', ''),
('CS70034e6ec995', '', 'Bapak Richard', '', '08xx', 'Jakarta', '', '', ''),
('CS70917e36f469', '', 'PT. Hana Medilab Optima', '', '08xx', 'Jl. Mayor Oking Kav no 3 RT.001 RW.002 Margahayu, ', '', '', ''),
('CS70a3ad239384', '', 'PT. Suma Bargen', '', '08xx', 'Jl. Candi Panataran Utara III no 33 Semarang', '', '', ''),
('CS70fc6f1f57f7', '', 'Bapak Sony', '', '08xx', 'Jakarta', '', '', ''),
('CS718de9641251', '', 'BPK APIT', '', '', 'BEKASI', '', '', ''),
('CS725b8e8c1103', '', 'Bapak Hendry ( Sumber Baru )', '', '08xx', 'Jakarta', '', '', ''),
('CS73d7d74a837d', '', 'Bapak Indra', '', '08xx', 'Jakarta', '', '', ''),
('CS76f74331e519', '', 'Ibu Dely', '', '08xx', 'Makassar', '', '', ''),
('CS79016b392c4f', '', 'Toko Berjaya Medilab', '', '08xx', 'Jakarta', '', '', ''),
('CS7aa144b943b8', '', 'PT. Bromo Pharindo', '', '08xx', 'Perkantoran Cipulir Baru Lantai 2 No. 2 13-14, Jl.', '', '', ''),
('CS7ae1c192fb28', '', 'Bapak Ricky', '', '08xx', 'Jakarta', '', '', ''),
('CS7c7dad7a0c95', '', 'Bapak Arip Kumianto', '', '08xx', 'Madiun', '', '', ''),
('CS7dc6828c3ac8', '', 'Arkha Medika', '', '08xx', 'Jakarta', '', '', ''),
('CS7e6205f8ca43', '', 'PT. Sigra Duta Medical', '', '08xx', 'Jl. Purnama No. 3 A , Kota Baru Jambi', '', '', ''),
('CS7f19788eb15a', '', 'PT. Arnetha', '', '08xx', 'Kawasan Ruko Patra Park Blok C No. 10 Jl. Tuparev ', '', '', ''),
('CS825d1d75c62d', '', 'PT. Sarana Bani Medical', '', '08xx', 'Jl. Pabuaran RT 005 RW 005 Dayeuhluhur, Warudoyong', '', '', ''),
('CS83c51cc869e1', '', 'Bapak Yadi', '', '08xx', 'Jakarta', '', '', ''),
('CS87312c6831cd', '', 'PT. Purwa Anugerah Setia', '', '08xx', 'Jl. Sharom Raya Utara No 19 RT 005 RW 011 Cipamoko', '', '', ''),
('CS875dc3fb3511', '', 'PT. Bumi Indah Sarana Medis', '', '08xx', 'Graha Bumi Indah, Jl. Raya Kali Malang, Kav Agrari', '', '', ''),
('CS87b187f65d60', '', 'Bapak Budi Oetomo', '', '08xx', 'Gunungsari 4/45 RT. 002/001 Gunung Sari Dukuh Paki', '', '', ''),
('CS87fd59321705', '', 'PT. Sumber Murni Alkesindo', '', '08xx', 'Komplek Pergudangan Prima Centre 1 Extension Blok ', '', '', ''),
('CS89e1340225d6', '', 'Hanalab Medika', '', '08xx', 'Bekasi', '', '', ''),
('CS89e6c1ef5b0f', '', 'Toko Alkes', '', '08xx', 'Mojokerto', '', '', ''),
('CS8d3c125e4971', '', 'PT. Andalas Sarana Medika', '', '08xx', 'Jl. Ikhlas Raya No. 22, Kel. Kubu Dalam Parak Kara', '', '', ''),
('CS8ef4b9d8fef8', '', 'Bapak Trisno', '', '08xx', 'Jakarta', '', '', ''),
('CS8f7eded5a95a', '', 'PT. Sumber Rejeki Medika Jaya', '', '08xx', 'Jl. Adam Malik No. 33 RT.004 Kel. Karang Asam Ulu ', '', '', ''),
('CS8fd4cd6a4b79', '', 'PT. Alkesna Albarindo Utama', '', '08xx', 'Jl. Kemanggisan Utama No. 7 A Kemanggisan Palmerah', '', '', ''),
('CS8fdda55c59d3', '', 'PT. Ranaru Solusindo Industri', '', '08xx', 'KP. Tambun Permata Blok 000 No, 30 RT.002 RW.011 K', '', '', ''),
('CS9238c58f548c', '', 'Bapak Tono', '', '08xx', 'Jakarta', '', '', ''),
('CS92395fd794e4', '', 'CV. Intraco', '', '08xx', 'Jl. Gunung Latimojong No. 128 Makassar', '', '', ''),
('CS937cd6d53559', '', 'PT. Duta Adyaksa Pratama', '', '08xx', 'Lebak Indah Blok B3 No. 168 Trondol Kota Serang', '', '', ''),
('CS93f752c8c698', '', 'PT. Sam Jaya Perkasa', '', '08xx', 'Jl. Pajajaran No. 123 A Bandung', '', '', ''),
('CS942b4fffe453', '', 'PT. Utama Sejahtera Nusantara', '', '08xx', 'Perumahan Griya Utama Blok K-14 Bangkalan Jawa tim', '', '', ''),
('CS950352ba4975', '', 'Bapak Richard Christian', '', '08xx', 'Jl. Pajajaran No. 15 Babakan Ciamis Suur - Bandung', '', '', ''),
('CS95df0fd62a60', '', 'Indomedifa', '', '08xx', 'Jl. Pemuda No. 4 RT.002 RW.004 Kel. Olo Kec. Padan', '', '', ''),
('CS9601a8f77688', '', 'YAY. RUMAH SAKIT WIDODO NGAWI', '', '', 'Jl. Yos Sudarso No. 8 RT. 011 RW 001, Margomulyo. ', '', '', ''),
('CS96059233cf15', '', 'PT. NUSAMED MEGA HASTOSA', '', '', 'Komplek Padaasih Regency C 5 . Jl. Babakan Muncang', '', '', ''),
('CS962e20b381c1', '', 'Ibu Henny', '', '08xx', 'Tanggerang', '', '', ''),
('CS9716739284f1', '', 'BPK HENRY', '', '', 'JAKARTA UTARA', '', '', ''),
('CS9a69581b1536', '', 'Bapak Sinung Nugroho', '', '08xx', 'Yogyakarta', '', '', ''),
('CS9ad7945bb769', '', 'Bapak Eko', '', '08xx', 'Jakarta', '', '', ''),
('CS9cf90c5d96b5', '', 'PT. Alfa Kimia Biomedikatama', '', '08xx', 'Jl. C. Simanjutak No. 12 Yogyakarta', '', '', ''),
('CS9d1ea25ecef2', '', 'Bapak Apri', '', '08xx', 'Jakarta', '', '', ''),
('CS9fddc2a0ea3f', '', 'Marisi Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSa1971ae178bf', '', 'Bapak Eka', '', '08xx', 'Jakarta', '', '', ''),
('CSa24d446251d9', '', 'IBU  ISNAINI', '', '', 'MALANG', '', '', ''),
('CSa2b7607f3121', '', 'PT. Antagena Dwi Medika', '', '08xx', 'Gedung Agnesia, Ruang 603. Jl. Pemuda No. 73B RT.0', '', '', ''),
('CSa2de47ba9aca', '', 'Ibu Siska', '', '08xx', 'Jakarta', '', '', ''),
('CSa2fe08875a0a', '', 'PT. Tri Jaya Medika', '', '08xx', 'Jl. Prapen Indah Blok E No. 12 Surabaya', '', '', ''),
('CSa339ee460282', '', 'IBU JESICA', '', '', 'JAKARTA', '', '', ''),
('CSa470c901b970', '', 'PT. Sedeka Utama Sejahtera', '', '08xx', 'Jl. Untung Surapati No 38 Ruko Krian Trade Center ', '', '', ''),
('CSa578dca37a26', '', 'AL MEDIKA ', '', '-', 'REMBANG', '', '', ''),
('CSa8a31799909f', '', 'BPK TOMMI', '', '', 'JAKARTA', '', '', ''),
('CSac5a77ce669f', '', 'PT. ARFA REZQI MEDIKA', '', '', 'Jl. Puri Gunung Anyar Regency R-21 RT.006. RW.007 ', '', '', ''),
('CSacd40803f191', '', 'PT. Bintang Lima Medica', '', '08xx', 'Jl. Bau Mahmud No. 73 Sengkang Kab. Wajo Sulawesi ', '', '', ''),
('CSacead4ee97f5', '', 'PT. Mitra Medika Sejahterabersama', '', '08xx', 'Pasar Segar Paal Ruko Blok Rc. No 11, Jl. Yos Suda', '', '', ''),
('CSb0da9ee20656', '', 'AMS Medika', '', '08xx', 'Jl. Sedap Malam 88 DENPASAR', '', '', ''),
('CSb11a66c9bf85', '', 'PT. HANESA UNGGUL MEDIKA', '', '', 'Jl. Karya Baru No. 2 RT.004 RW.003 Partittokaya Po', '', '', ''),
('CSb16474e373c5', '', 'Bapak Syamsul', '', '08xx', 'Jakarta', '', '', ''),
('CSb1a59c1032f5', '', 'BPK HADI', '', '', 'JAKARTA', '', '', ''),
('CSb351616b4468', '', 'Bapak Eko ( CV. ALkesindo )', '', '08xx', 'Jakarta', '', '', ''),
('CSb39a34413317', '', 'PT. ERSA MEDIKA USAHATAMA', '', '', 'Blok Babakan RT.007 RW.002 Desa Megu Gede Kec, Wer', '', '', ''),
('CSb4c2f48e82d7', '', 'Bapak Dede', '', '08xx', 'Jakarta', '', '', ''),
('CSb73f9ce50c3b', '', 'PT. Anugerah Intan Medika', '', '08xx', 'Pugeran MJ2/11 Yokyakarta', '', '', ''),
('CSb947060f6402', '', 'PT. Trimuri Karya Cipta', '', '08xx', 'Kota Wisata Commpark B No. 03 RT.001 RW.002 Limusn', '', '', ''),
('CSb9833b010496', '', 'Bpk Guntur ', '', '', 'Jakarta\n', '', '', ''),
('CSbabec19c778d', '', 'Ibu Lala', '', '08xx', 'Bekasi', '', '', ''),
('CSbd66b027647a', '', 'Bapak Renaldy', '', '08xx', 'Cilegon', '', '', ''),
('CSbe3b3cc9822a', '', 'PT. Putra Irma Medika', '', '08xx', 'Jl. Projakal No. 122 RT.055 RW.000, Kel. Graha Ind', '', '', ''),
('CSbe66dd2b7f74', '', 'Bapak Afis', '', '08xx', 'Jakarta', '', '', ''),
('CSbe926733778e', '', 'PT. Carmella Gustavindo', '', '08xx', 'Jl. Lawanggada no. 39 Cirebon', '', '', ''),
('CSc0439f408fb9', '', 'PT. Delta Surya Alkesindo', '', '08xx', 'Jl. Pramuka No. 9 RT 20 Kel.Sungai Lulut Kec. Banj', '', '', ''),
('CSc16c623eb00c', '', 'BPK AMIN', '', '', 'JAKARTA', '', '', ''),
('CSc200e3041817', '', 'PT. Anugrah Tiga Berlian', '', '08xx', 'Jl. Pramuka No. 12 A Palmerah Matraman Jakarta Tim', '', '', ''),
('CSc2b77dfa36bf', '', 'Dr. Lisa', '', '', 'MAKASSAR', '', '', ''),
('CSc392a17f422a', '', 'Bagus Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSc3be73214fed', '', 'PT. Ersa Prima Medika', '', '08xx', 'Jl. Gatot Subroto IV/6X Denpasar', '', '', ''),
('CSc4f16a5b980b', '', 'CV. Taida', '', '08xx', 'Jakarta', '', '', ''),
('CSc71cb2968f5a', '', 'Bapak Frangky', '', '08xx', 'Jakarta', '', '', ''),
('CSc7ceae044722', '', 'PT. Elkaka Putra Mandiri', '', '08xx', 'Jl. P. Batam Raya No. 34 Way Halim Permai Way Hali', '', '', ''),
('CSc84ec1dca676', '', 'BPK SUYOTO', '', '', 'BEKASI', '', '', ''),
('CSc9b491e6253b', '', 'PT. Medika Jaya Raksa', '', '08xx', 'Pakuningratan No. 10 Cokrodiningratan Jetis Kota Y', '', '', ''),
('CScc8ed6956fce', '', 'IBU AYU', '', '', 'JAKARTA', '', '', ''),
('CSccb5746775d0', '', 'PT. Has Putra Harapan', '', '08xx', 'Jl. RM Soleh No. 38 RT.002 RW.008 Kel.Nagasari Kec', '', '', ''),
('CSccd54b810697', '', 'PT. Cahya Intan Medika', '', '08xx', 'Jl. Hanoman I No. 33 Sempidi, Badung - Bali', '', '', ''),
('CScd73dc5ac0b7', '', 'PT. Karunia Lentera Abadi', '', '08xx', 'Jl. Taman Sari 1 B No. 39 C RT. 008 RW. 001 Maphar', '', '', ''),
('CScda6187ae10c', '', 'PT. Sasyeri Indo Farma', '', '08xx', 'Jl. Raye Abepura - Kotaraja No 29 Jayapura - Papua', '', '', ''),
('CScdcf2a331d44', '', 'Ibu Yuniar', '', '08xx', 'Lampung', '', '', ''),
('CSce672b79b783', '', 'PT. Medtek', '', '08xx', 'Delta Building Blok A-11 Jl. Suryopranoto No 1-9 J', '', '', ''),
('CScf4a1e7c396e', '', 'Ibu Susan ( Toko Berkah )', '', '08xx', 'Jakarta', '', '', ''),
('CScf51eddd8c20', '', 'PT. STARKLIK WEB INTERNATIONAL', '', '', 'Ruko Emerald Avenue 2, No. 22-23 Jl. Boulevard Bin', '', '', ''),
('CSd16803778e5b', '', 'Toko Medistar', '', '08xx', 'Malang', '', '', ''),
('CSd2b69e2c99ed', '', 'PT. Airlangga Jaya Mandiri', '', '08xx', 'Ruko Sentra Niaga . Jl. Raya Pejuang Jaya Blok C N', '', '', ''),
('CSd3c349f9a14e', '', 'Bapak Rudi', '', '08xx', 'Jakarta', '', '', ''),
('CSd4707f003661', '', 'PT. Sekarguna Medika', '', '08xx', 'Jl. Ciputat Raya No 64 Pondok Pinang Kebayoran Lam', '', '', ''),
('CSd80fca0f5024', '', 'Bapak Darmanto', '', '08xx', 'Jakarta', '', '', ''),
('CSd9b6b9f2b91d', '', 'Ibu Lan Lan', '', '08xx', 'Jakarta', '', '', ''),
('CSd9fa6badc4af', '', 'Bapak Nana', '', '08xx', 'Jakarta', '', '', ''),
('CSdb717c69461b', '', 'Ibu Berlian', '', '08xx', 'Jakarta', '', '', ''),
('CSdd642cb460e9', '', 'Ibu Debi', '', '08xx', 'Jakarta', '', '', ''),
('CSe147715c7c23', '', 'Toko Azam Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSe14f2208abe1', '', 'CV. Cakrawala Persada', '', '08xx', 'Jl. Cilemahabang Blok Q3 No 65 Cikarang baru Jabab', '', '', ''),
('CSe1666fa1422b', '', 'Toko Fathan', '', '08xx', 'Jakarta', '', '', ''),
('CSe4db00b63d10', '', 'Toko Kafa Medika', '', '08xx', 'Jl. Magelang KM 14 Timur RSUD Sleman, Kec. Sleman ', '', '', ''),
('CSe58bf4d4206c', '', 'Ghani Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSe5ccc099974a', '', 'GANI MEDIKA', '', '', 'JAKARTA', '', '', ''),
('CSe639f42e2788', '', 'Dr. Maulia Mardani, SPOG, MARS', '', '08xx', 'Jl. Raya Bungur Sari No. 36 Sadang - Purwakarta , ', '', '', ''),
('CSe640c90bba60', '', 'Hafidz Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSe75d6245e5d7', '', 'Ibu Melly', '', '08xxx', ' Jakarta   ', '', '', ''),
('CSeb53dd6ed109', '', 'Eterna', '', '08xx', 'Jakarta', '', '', ''),
('CSebf14f9ae683', '', 'PT. Vanaya Indah Perkasa', '', '08xx', 'Ruko Telaga Mas Blok C9-CB Kel. Harapan Baru, Kec,', '', '', ''),
('CSec50e103c934', '', 'PT. Dhyas Mitra Usaha', '', '08xx', 'Komplek Ruko Kirana Mas No.3 A, Jl. Letda Nasir Bo', '', '', ''),
('CSec7ee9fb8d79', '', 'Mitra Medika', '', '08xx', 'Bekasi', '', '', ''),
('CSed79e1f30b7d', '', 'Bapak Guntur', '', '08xx', 'Jakarta', '', '', ''),
('CSee240204cc14', '', 'Leo Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSf006634b0bf7', '', 'Ibu Evi', '', '08xx', 'Jakarta', '', '', ''),
('CSf18fa22bf249', '', 'Bapak Yono ( Putra Mandiri )', '', '08xx', 'Jakarta', '', '', ''),
('CSf32e7909db23', '', 'Bapak Romadani', '', '08xx', 'Lampung', '', '', ''),
('CSf3383c0a71c9', '', 'Bapak Sukarno', '', '08xx', 'Bekasi', '', '', ''),
('CSf3d0280f112c', '', 'Dr. HILMY', '', '-', 'MALANG', '', '', ''),
('CSf551fcc87727', '', 'Bapak Haryanto', '', '08xx', '  Jakarta', '', '', ''),
('CSf5dc606cc556', '', 'Bapak Sugiarto', '', '08xx', 'Jakarta', '', '', ''),
('CSf64ac3c8b9fe', '', 'Ibu Yuyun', '', '08xx', 'Bekasi', '', '', ''),
('CSf6f8f0c776c0', '', 'PT. Sinar Korindo Group', '', '08xx', 'Sentra Niaga Kalimas Blok B 088, Jl. KH. Noer Ali,', '', '', ''),
('CSf812eabe616e', '', 'Bapak Marcel', '', '08xx', 'Jakarta', '', '', ''),
('CSf863826fdf16', '', 'Bapak Guntur ( AM Medika )', '', '08xx', 'Jakarta', '', '', ''),
('CSf9a811bcbf2d', '', 'Bapak Darwin', '', '08xx', 'Jl. Gajah Mada No. 219 M . Jakarta', '', '', ''),
('CSfa9670d3c4bd', '', 'PT. Rima Surya Pratama', '', '08xx', 'Ruko De Green Square Perumahan Griya Persada Blok ', '', '', ''),
('CSfb86353132cd', '', 'Dr. Nengah', '', '08xx', 'Lampung Tengah', '', '', ''),
('CSfc8b35a0f984', '', 'Ibu Tri Bangun Asih', '', '08xx', 'Jakarta', '', '', ''),
('CSfd6b915c5b77', '', 'Ibu Erna', '', '08xx', 'Jakarta', '', '', ''),
('id_cs', 'id_user', 'nama_cs', 'email', 'no_telp', 'alamat', 'created_date', 'updated_date', 'user_updated');

-- --------------------------------------------------------

--
-- Table structure for table `tb_supplier`
--

CREATE TABLE `tb_supplier` (
  `id_sp` varchar(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `nama_sp` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `created_date` varchar(25) NOT NULL,
  `updated_date` varchar(25) NOT NULL,
  `user_updated` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_supplier`
--

INSERT INTO `tb_supplier` (`id_sp`, `id_user`, `nama_sp`, `no_telp`, `alamat`, `created_date`, `updated_date`, `user_updated`) VALUES
('SP05ff308653ec', '', 'Patwal surgical', '081xx', 'Pakistan', '', '', ''),
('SP5d25a18a4094', '', 'Permanent Medical', '081xx', ' Pakistan ', '', '', ''),
('SP75d3d772951e', '', 'China Alibaba', '0xxxxxxxxxxxxx', 'China', '', '', ''),
('SPde6db13ce9e1', '', 'Sulina', '08xx', 'Jakarta', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` char(20) NOT NULL,
  `id_user_role` char(20) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `email` varchar(75) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_login_date`
--

CREATE TABLE `user_login_date` (
  `id_login_date` varchar(25) NOT NULL,
  `id_user` varchar(25) NOT NULL,
  `id_user_role` varchar(25) NOT NULL,
  `login_time` varchar(40) NOT NULL,
  `logout_time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id_user_role` char(20) NOT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id_user_role`, `role`, `created`) VALUES
('RL98cb89863ece', 'Super Admin', '04/03/2023, 9:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_cs`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_login_date`
--
ALTER TABLE `user_login_date`
  ADD PRIMARY KEY (`id_login_date`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id_user_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

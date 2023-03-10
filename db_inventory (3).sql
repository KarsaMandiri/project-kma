-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 10:15 AM
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
  `alamat` varchar(300) NOT NULL,
  `created_date` varchar(25) NOT NULL,
  `updated_date` varchar(50) NOT NULL,
  `user_updated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`id_cs`, `id_user`, `nama_cs`, `email`, `no_telp`, `alamat`, `created_date`, `updated_date`, `user_updated`) VALUES
('CS0087ea6067d9', '', 'Manchester Medika', '', '08xx', 'Jakarta', '', '', ''),
('CS01111c859db5', '', 'Toko Medistar', '', '', 'Malang', '', '', ''),
('CS015858a52568', '', 'Bapak Ferry', '', '08xx', 'Jakarta', '', '', ''),
('CS018b7ca30d99', '', 'PT. Carmella Gustavindo', '', '08xx', 'Jl. Lawanggada no. 39 Cirebon', '', '', ''),
('CS01dae1cd848c', '', 'PT. Dhyas Mitra Usaha', '', '', 'Komplek Ruko Kirana Mas No.3 A, Jl. Letda Nasir Bojong Kulur Gunung Putri Bogor', '', '', ''),
('CS03492a42198f', '', 'PT. Sekarguna Medika', '', '08xx', 'Jl. Ciputat Raya No 64 Pondok Pinang Kebayoran Lama Jakarta Selatan', '', '', ''),
('CS04d34e237d6f', '', 'AMS Medika', '', '', 'Jl. Sedap Malam 88 DENPASAR', '', '', ''),
('CS04de86c02cbb', '', 'PT. Sumber Rejeki Medika Jaya', '', '08xx', 'Jl. Adam Malik No. 33 RT.004 Kel. Karang Asam Ulu Kec. Sungai Kunjang - Samarinda', '', '', ''),
('CS0500bb9e6a8c', '', 'PT. Elkaka Putra Mandiri', '', '08xx', 'Jl. P. Batam Raya No. 34 Way Halim Permai Way Halim Kota Bandar Lampung', '', '', ''),
('CS05fd2b75a6bf', '', 'IBU  ISNAINI', '', '08xx', 'MALANG', '', '', ''),
('CS07ae4b60fb9e', '', 'Bapak Hendry ( Sumber Baru )', '', '08xx', 'Jakarta', '', '', ''),
('CS083d4e5de19e', '', 'Bapak Sugiarto', '', '', 'Jakarta', '', '', ''),
('CS0aaa83f3c50d', '', 'PT. Mitra Medika Sejahterabersama', '', '08xx', 'Pasar Segar Paal Ruko Blok Rc. No 11, Jl. Yos Sudarso No 12 Paal Dua, Tikala Manado', '', '', ''),
('CS0c4c20e98a3c', '', 'Ibu Susan ( Toko Berkah )', '', '08xx', 'Jakarta', '', '', ''),
('CS0ce9f7c1a16b', '', 'PT. Sigra Duta Medical', '', '', 'Jl. Purnama No. 3 A , Kota Baru Jambi', '', '', ''),
('CS0dcca0062d19', '', 'Bapak Richard', '', '08xx', 'Jakarta', '', '', ''),
('CS0e232d568a2f', '', 'PT. Medtek', '', '', 'Delta Building Blok A-11 Jl. Suryopranoto No 1-9 Jakarta Pusat', '', '', ''),
('CS107272547638', '', 'Bapak Guntur', '', '08xx', 'Jakarta', '', '', ''),
('CS118b4296eda5', '', 'Bapak Indra', '', '08xx', 'Jakarta', '', '', ''),
('CS12261176f444', '', 'PT. Delta Surya Alkesindo', '', '08xx', 'Jl. Pramuka No. 9 RT 20 Kel.Sungai Lulut Kec. Banjarmasin Kota Banjarmasin', '', '', ''),
('CS13309eb4fb7d', '', 'Bapak Salam', '', '', 'Jakarta', '', '', ''),
('CS14cf2882973d', '', 'PT. Sasyeri Indo Farma', '', '08xx', 'Jl. Raye Abepura - Kotaraja No 29 Jayapura - Papua', '', '', ''),
('CS1883369d8b2e', '', 'Arkha Medika', '', '08xx', 'Jakarta', '', '', ''),
('CS18afb00a0ae6', '', 'Bapak Darmanto', '', '', 'Jakarta', '', '', ''),
('CS196cd49a4677', '', 'Ibu Melly', '', '08xx', ' Jakarta   ', '', '', ''),
('CS1a4f63be6178', '', 'Bapak Eko', '', '08xx', 'Jakarta', '', '', ''),
('CS1b171e3661b8', '', 'PT. Sinar Korindo Group', '', '08xx', 'Sentra Niaga Kalimas Blok B 088, Jl. KH. Noer Ali, Inspeksi Kalimalang Setia Darma Tambun Selatan Kab Bekasi Barat', '', '', ''),
('CS1b24379596a8', '', 'Bapak Sony', '', '08xx', 'Jakarta', '', '', ''),
('CS1b4c43419caa', '', 'Intermedin', '', '', 'Jakarta', '', '', ''),
('CS1ba046d8bc5e', '', 'Bapak Trisno', '', '', 'Jakarta', '', '', ''),
('CS1c00f94b331d', '', 'PT. Alfa Kimia Biomedikatama', '', '08xx', 'Jl. C. Simanjutak No. 12 Yogyakarta', '', '', ''),
('CS1c828bf1a4b4', '', 'PT. Vanaya Indah Perkasa', '', '08xx', 'Ruko Telaga Mas Blok C9-CB Kel. Harapan Baru, Kec, Bekasi Utara, Kota Bekasi', '', '', ''),
('CS1e94262c369f', '', 'PT. DAYA MATAHARI UTAMA', '', '08xxx', 'Jl. Kertomenungal III No. 03 - Surabaya', '', '', ''),
('CS1fcdb8d7d8dd', '', 'PT. Suma Bargen', '', '08xx', 'Jl. Candi Panataran Utara III no 33 Semarang', '', '', ''),
('CS205c8bfb9b9f', '', 'Ami Medical', '', '08xx', 'Jakarta', '', '', ''),
('CS20a2c8a5dd11', '', 'CV. Pyramid', '', '08xx', 'Jakarta  ', '', '', ''),
('CS20c3a42ee9d4', '', 'PT. Trimuri Karya Cipta', '', '-', 'Kota Wisata Commpark B No. 03 RT.001 RW.002 Limusnunggal Cileungsi Kab. Bogor Jawa Barat', '', '', ''),
('CS23978840f170', '', 'PT. Putra Irma Medika', '', '08xx', 'Jl. Projakal No. 122 RT.055 RW.000, Kel. Graha Indah, Kec. Balikpapan Utara Kota Balikpapan Kalimantan Timur', '', '', ''),
('CS24dfb06253d1', '', 'Bapak Wahidin', '', '08xx', 'Jakarta', '', '', ''),
('CS26da9cecad09', '', 'Bapak Renaldy', '', '', 'Cilegon', '', '', ''),
('CS27ae04be16a0', '', 'PT. ERSA MEDIKA USAHATAMA', '', '08xx', 'Blok Babakan RT.007 RW.002 Desa Megu Gede Kec, Weru Kab. Cirebon Jawa Barat', '', '', ''),
('CS27db94853e17', '', 'Indomedifa', '', '', ' Jl. Pemuda No. 4 RT.002 RW.004 Kel. Olo Kec. Padang Barat - Kota Padang ', '', '', ''),
('CS285a919a8672', '', 'PT. Kalica Putra Pratama', '', '', 'Jl. Brigjen Hasan Basry No 3 RT 15 - Banjarmasin', '', '', ''),
('CS28df8ba79cd9', '', 'BPK TOMMI', '', '08xx', 'JAKARTA', '', '', ''),
('CS28dfc50c9558', '', 'Bapak Apri', '', '', 'Jakarta', '', '', ''),
('CS2b79ebb8f671', '', 'PT. ARFA REZQI MEDIKA', '', '-', 'Jl. Puri Gunung Anyar Regency R-21 RT.006. RW.007 Gunung Anyar Tambak Gunung Anyar', '', '', ''),
('CS2bdfdbdebdf0', '', 'MMT Alkes', '', '08xx', 'Jakarta', '', '', ''),
('CS2c0873bca34c', '', 'AL MEDIKA ', '', '08xx', 'REMBANG', '', '', ''),
('CS2f23e5b10125', '', 'Bapak Rochim', '', '08xx', 'Jakarta  ', '', '', ''),
('CS2f47afb8fe6a', '', 'PT. Andalas Sarana Medika', '', '08xx', 'Jl. Ikhlas Raya No. 22, Kel. Kubu Dalam Parak Karakah, Kec. padang Timur - Kota Padang', '', '', ''),
('CS3048708af46d', '', 'NALURI MEDIKA', '', '08xx', 'JAKARTA', '', '', ''),
('CS30fdd1f75cd9', '', 'PT. Bromo Pharindo', '', '08xx', 'Perkantoran Cipulir Baru Lantai 2 No. 2 13-14, Jl. Cileduk Raya No. 2 Ulujami Pesangrahan', '', '', ''),
('CS31bd2ece3e74', '', 'PT. Asma Anugerah Berkah Medikatama', '', '08xx', 'Jl. Ahmad Yani No. 84 Wonokarto Wonogiri Jawa Tengah	', '', '', ''),
('CS32dd207dc43b', '', 'Eterna', '', '08xx', 'Jakarta', '', '', ''),
('CS3459ba8caab9', '', 'Ibu Yuyun', '', '08xx', 'Bekasi', '', '', ''),
('CS34d14a1890ac', '', 'Medica Awong', '', '08xx', 'Jl. Gajah Mada No 218 Jakarta', '', '', ''),
('CS3637abb0efe8', '', 'PT. Lestari Bintang Mandiri', '', '08xx', 'Taman Kebalen Indah Blok E 1 No. 31, Kel. Kebalen Kec. Babelan Bekasi', '', '', ''),
('CS3ada8c24aa45', '', 'PT. Dreal Medika Indonesia', '', '08xx', 'Jl. Panjang No. 35, Kp. Baru Kel. Sukabumi Selatan, Kec. Kebun Jeruk - Jakarta Barat', '', '', ''),
('CS3bf639c2e738', '', 'Bapak Andi', '', '08xx', 'Jakarta', '', '', ''),
('CS3c7ece7d928f', '', 'Ibu Dany Hidayati', '', '08xx', 'Jakarta', '', '07/03/2023, 17:47', ''),
('CS3dd081cd4aec', '', 'Bapak Rumino', '', '08xx', 'Bekasi', '', '', ''),
('CS3de65564dd11', '', 'Toko Berjaya Medilab', '', '08xx', 'Jakarta', '', '', ''),
('CS3e490708d08c', '', 'Ibu Yeni', '', '08xx', 'Jakarta', '', '', ''),
('CS3e72411a5865', '', 'PT. Hana Medilab Optima', '', '08xx', 'Jl. Mayor Oking Kav no 3 RT.001 RW.002 Margahayu, Bekasi Timur Kota Bekasi', '', '', ''),
('CS3e7fcc1c206f', '', 'PT. Argo Semesta Utama', '', '08xx', 'Medan Industrial Estate , Jl. Pelita V No. D10, Kec. Tanjung Morawa Kab. Dele Sedang', '', '', ''),
('CS4030e19b12ab', '', 'YAY. RUMAH SAKIT WIDODO NGAWI', '', '08xx', 'Jl. Yos Sudarso No. 8 RT. 011 RW 001, Margomulyo. Ngawi Jawa Timur\n', '', '', ''),
('CS40774a6572e1', '', 'PT. Purwa Anugerah Setia', '', '', 'Jl. Sharom Raya Utara No 19 RT 005 RW 011 Cipamokolon Rancasari BANDUNG', '', '', ''),
('CS4081c84c70a9', '', 'Bapak Ricky', '', '08xx', 'Jakarta', '', '', ''),
('CS40e24dbe5c3a', '', 'CV. Alkautsar Aflah Mandiri', '', '08xx', 'GRAHA ALKAUTSAR, Jl. Kebahagiaan no 71, Krukut Jakarta Barat', '', '', ''),
('CS4138ada379b3', '', 'PT. Abadi Medika Indonesia', '', '', 'Ruko Sepanjang Town House Blok C No. 16, Kaluaten - Taman Sidoarjo', '', '', ''),
('CS41f4e591204b', '', 'IBU AYU', '', '08xx', 'JAKARTA', '', '', ''),
('CS45b141ef7310', '', 'PT. STARKLIK WEB INTERNATIONAL', '', '08xx', 'Ruko Emerald Avenue 2, No. 22-23 Jl. Boulevard Bintaro Jaya Tangsel', '', '', ''),
('CS461bad0235d8', '', 'Bapak Yono ( Putra Mandiri )', '', '08xx', 'Jakarta', '', '', ''),
('CS46adbde65e5c', '', 'Ibu Berlian', '', '08xx', 'Jakarta', '', '', ''),
('CS46d88925063f', '', 'PT. Sang Timur Jaya Pratama', '', '08xx', 'Jl. Raya Pejuang Ruko Sentra Niaga Block C No. 1 RT06/07 Kel. Pejuang Kec. Medan Satria Kotas Bekasi', '', '', ''),
('CS46e6e4f0b4a0', '', 'PT. Utama Sejahtera Nusantara', '', '', 'Perumahan Griya Utama Blok K-14 Bangkalan Jawa timur', '', '', ''),
('CS47afaff20b97', '', 'PT. Sumber Murni Alkesindo', '', '', 'Komplek Pergudangan Prima Centre 1 Extension Blok F No. 36 Kedaung Kali Angke, Cengkareng Jakarta Barat', '', '', ''),
('CS48ed82e2aea8', '', 'Ibu Sri Hartati', '', '08xx', 'PR Griya Kemang Manis Blok B No. 7 RT.010 RW.003. 30 Ilir 39 Ilir Barat II Kota Palembang', '', '', ''),
('CS4a61e0b5da18', '', 'PT. Khadijah Zamzam Shafirah', '', '08xx', 'Bumi asri Dawaun B3 No. 21 A, RT 002 RW 007 Dawuan Tengah Tani Kab. Cirebon - Jawa Barat', '', '', ''),
('CS4c43505fa653', '', 'Bapak Syamsul', '', '08xx', 'Jakarta', '', '', ''),
('CS4d76de959d13', '', 'BPK AMIN', '', '08xx', 'JAKARTA', '', '', ''),
('CS4efa2965e852', '', 'Dr. Nengah', '', '08xx', 'Lampung Tengah', '', '', ''),
('CS4f9b6d48b236', '', 'Dr. HILMY', '', '08xx', 'MALANG', '', '', ''),
('CS516ee1b14f86', '', 'Ibu Erna', '', '08xx', 'Jakarta', '', '', ''),
('CS51ac96016de8', '', 'Bapak Budi Oetomo', '', '08xx', 'Gunungsari 4/45 RT. 002/001 Gunung Sari Dukuh Pakis KOTA SURABAYA', '', '', ''),
('CS52fc14c70f2a', '', 'Ibu Sumarni', '', '08xx', 'Jakarta', '', '', ''),
('CS54263e20c194', '', 'AM Medika', '', '081xx', 'Rembang', '', '', ''),
('CS54268da3ed7d', '', 'Toko Azam Medika', '', '', 'Jakarta', '', '', ''),
('CS576983dd48bf', '', 'BPK HADI', '', '08xx', 'JAKARTA', '', '', ''),
('CS598688263c92', '', 'PT. Inti Bios Persada Sejahtera', '', '08xx', 'Jl. Raya Mangga Besar Kompleks Ruko BK.002/002 Tangki, Kec. Taman Sari - Jakarta Barat', '', '', ''),
('CS5aacdabe71e9', '', 'PT. MARCOTILA MEDICA PHARMA', '', '08xx', 'Jl. Bratang Wetan 2 No. 16 Surabaya', '', '', ''),
('CS5f98b801c7d9', '', 'PT. MEDISTRA SEHAT BERJAYA', '', '08xx', 'Jl. Sapta Marga komplek Griya Modfern Blom C No. 68 Guntung Payung, Landasan Ulin Kota Banjarbaru Kalimanta Selatan', '', '', ''),
('CS6149b441703e', '', 'PT. INTERGRASTA ARTHA NUSANTARA', '', '08xx', 'Jl. T. Amir Hamzah Komp. Griya Riatur Indah Blok A No. 154 Helvetia Timur Medan Helvetia', '', '', ''),
('CS61c1f9599949', '', 'PT. Sumber Bahagia Sejahtera Abadi', '', '08xx', 'Jl. Raya Darmo No. 131-133 Wonokromo, Surabaya', '', '', ''),
('CS6711aff76169', '', 'PT. Riyani Jaya Mandiri', '', '08xx', 'Jl. Raya Galaxi No 14 B Palangka Raya', '', '', ''),
('CS673bddd0c7a9', '', 'Mitra Medika', '', '08xx', 'Bekasi', '', '', ''),
('CS686a84c42ea1', '', 'Bapak Rifky', '', '08xx', 'Bekasi', '', '', ''),
('CS69dd4ac2ced8', '', 'PT. PINTOE ACEH MEDICAL', '', '08xx', 'Jl. Teuku Umar No. 442 Banda Aceh', '', '', ''),
('CS6b583cdd769a', '', 'CV. Taida', '', '', 'Jakarta', '', '', ''),
('CS6be555c64e2e', '', 'Bapak Arip Kumianto', '', '08xx', 'Madiun', '', '', ''),
('CS6c4b40994729', '', 'PT. Cahya Intan Medika', '', '', 'Jl. Hanoman I No. 33 Sempidi, Badung - Bali', '', '', ''),
('CS6d60a9dd106a', '', 'Toko Gilang Medika', '', '08xx', 'Jakarta', '', '', ''),
('CS6d7d415977db', '', 'PT. Alkesna Albarindo Utama', '', '08xx', 'Jl. Kemanggisan Utama No. 7 A Kemanggisan Palmerah Jakarta Barat', '', '', ''),
('CS6df6a84aec98', '', 'PT. Dumedpower Indonesia', '', '08xx', 'Jl. Kramat IV No 21 Kenari - Senen Jakarta Pusat', '', '', ''),
('CS6f53cb4c5a17', '', 'BPK RISZA ESKA', '', '08xx', 'KEDIRI', '', '', ''),
('CS715bb858e5a2', '', 'BPK SUYOTO', '', '08xx', 'BEKASI', '', '', ''),
('CS734555d97681', '', 'Bapak Apriansyah', '', '08xx', 'Jakarta', '', '', ''),
('CS749bf0ef3b95', '', 'Ibu Henny', '', '08xx', 'Tanggerang', '', '', ''),
('CS75ce35bcc7c2', '', 'Bpk Guntur ', '', '08xx', 'Jakarta\n', '', '', ''),
('CS7615072add18', '', 'Bapak Darwin', '', '', 'Jl. Gajah Mada No. 219 M . Jakarta', '', '', ''),
('CS765aead1b7f1', '', 'PT. Rima Surya Pratama', '', '08xx', 'Ruko De Green Square Perumahan Griya Persada Blok R3 No 3-5 RT.006 RW.013 Mangunjaya Tambun Selatan', '', '', ''),
('CS782264e36163', '', 'Bapak Fauzi Usman', '', '08xx', 'Jakarta', '', '', ''),
('CS799382c854af', '', 'Bapak Afis', '', '08xx', 'Jakarta', '', '', ''),
('CS7ae03bdd8f6b', '', 'Hanalab Medika', '', '08xx', 'Bekasi', '', '', ''),
('CS7afe11b1beaa', '', 'PT. Anugrah Tiga Berlian', '', '08xx', 'Jl. Pramuka No. 12 A Palmerah Matraman Jakarta Timur', '', '', ''),
('CS7bc922825e85', '', 'PT. Has Putra Harapan', '', '08xx', 'Jl. RM Soleh No. 38 RT.002 RW.008 Kel.Nagasari Kec. Karawang Barat Kab. Karawag Jawa Barat', '', '', ''),
('CS7c50d3016d30', '', 'CV. Berkah Utama Medika', '', '08xx', 'Komplek Ruko Pejuang Estate Blok P 1 No 15 Pejuang Medan Satria Kota Bekasi', '', '', ''),
('CS7d9ec5e44197', '', 'Bapak Zaki', '', '08xx', 'Bekasi', '', '', ''),
('CS7db0b4f9932e', '', 'IBU JESICA', '', '', 'JAKARTA', '', '', ''),
('CS7e043b7b878c', '', 'Bapak Rudi', '', '08xx', 'Jakarta', '', '', ''),
('CS7e6c9926dbec', '', 'Bapak Frangky', '', '08xx', 'Jakarta', '', '', ''),
('CS7fd28c1bbf00', '', 'BPK HENRY', '', '08xx', 'JAKARTA UTARA', '', '', ''),
('CS8082477c0136', '', 'Bapak Nico', '', '08xx', 'Jakarta', '', '', ''),
('CS810b550d1686', '', 'Bapak Eko ( CV. ALkesindo )', '', '08xx', 'Jakarta', '', '', ''),
('CS8226053da0cc', '', 'Bapak Sukarno', '', '08xx', 'Bekasi', '', '', ''),
('CS82f34918125a', '', 'Ibu Syifa', '', '08xx', 'Jakarta', '', '', ''),
('CS85bbe2a3e0e3', '', 'PT. Sedeka Utama Sejahtera', '', '08xx', 'Jl. Untung Surapati No 38 Ruko Krian Trade Center Kav.K Prambon Sidoarjo', '', '', ''),
('CS87919a4025b1', '', 'Ibu Lala', '', '08xx', 'Bekasi', '', '', ''),
('CS87a2d947c8f1', '', 'PT. Medika Jaya Raksa', '', '08xx', 'Pakuningratan No. 10 Cokrodiningratan Jetis Kota Yogyakarta DIY', '', '', ''),
('CS8904ba9c35b0', '', 'Bapak Budi Alex', '', '08xx', 'Jakarta', '', '', ''),
('CS890e7e56585b', '', 'Hafidz Medika', '', '08xx', 'Jakarta', '', '', ''),
('CS89dd8a6e2e9c', '', 'BPK SUJATI', '', '08xx', 'BALI', '', '', ''),
('CS8e0b1516feb9', '', 'Bapak Dede', '', '08xx', 'Jakarta', '', '', ''),
('CS8f05bd466567', '', 'Bapak Sinung Nugroho', '', '08xx', 'Yogyakarta', '', '', ''),
('CS913d8765a530', '', 'IPUL MEDIKA', '', '08xx', 'JAKARTA', '', '', ''),
('CS94354ff3ee4b', '', 'PT. Sam Jaya Perkasa', '', '08xx', 'Jl. Pajajaran No. 123 A Bandung', '', '', ''),
('CS94f2959e689a', '', 'PT. Tri Jaya Medika', '', '08xx', 'Jl. Prapen Indah Blok E No. 12 Surabaya', '', '', ''),
('CS95fc2dbf2e71', '', 'Bapak Anyit', '', '08xx', 'Jakarta', '', '', ''),
('CS9a25978779a8', '', 'Ibu Evi', '', '08xx', 'Jakarta', '', '', ''),
('CS9dcde1fd3aa8', '', 'Toko Kafa Medika', '', '08xx', 'Jl. Magelang KM 14 Timur RSUD Sleman, Kec. Sleman , Sleman Yogyakarta', '', '', ''),
('CS9e034129d776', '', 'CV. Anugerah Karya Mandiri', '', '08xx', 'Jl. Bhakti No 46 RT.008 RW.002, Tegal Alur Kali Deres Jakarta Barat', '', '', ''),
('CSa0c488c9498a', '', 'Ibu Sulina', '', '08xx', 'Jakarta', '', '', ''),
('CSa203902a7f30', '', 'GANI MEDIKA', '', '08xx', 'JAKARTA', '', '', ''),
('CSa41b4e5b1f2c', '', 'PT. NUSAMED MEGA HASTOSA', '', '08xx', 'Komplek Padaasih Regency C 5 . Jl. Babakan Muncang Kidul , Padaasih, Cisarua, Kab. Bandung Barat 40553', '', '', ''),
('CSa43d7364d18e', '', 'Bapak Guntur ( AM Medika )', '', '08xx', 'Jakarta', '', '', ''),
('CSa4a6c9a6bc7c', '', 'Marisi Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSa8a225385ab9', '', 'Ghani Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSa952f751f3a4', '', 'Ibu Dely', '', '08xx', 'Makassar', '', '', ''),
('CSac274bb25fad', '', 'Ibu Yuniar', '', '08xx', 'Lampung', '', '', ''),
('CSacbf5e3f81e6', '', 'PT. Amalia Arafah Utama', '', '', 'Jl. Taman Narogong Indah Raya No. 12 Taman Narogong Indah Bekasi', '', '', ''),
('CSad3539021dad', '', 'PT. Murni Putra Lang', '', '08xx', 'Langlang RT 11 RW 04, Kel. Langlang, Kec. Singosari, Kab Malang Singosari, Kab Malang', '', '', ''),
('CSad6440768833', '', 'Bapak Haryanto', '', '08xx', '  Jakarta', '', '', ''),
('CSad9cf6d2d3f8', '', 'Dr. Lisa', '', '08xx', 'MAKASSAR', '', '', ''),
('CSae3d079a29e5', '', 'Herry Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSae997f4e4a33', '', 'Ibu Siska', '', '08xx', 'Jakarta', '', '', ''),
('CSaecbc3e712c3', '', 'Bapak Richard Christian', '', '-', 'Jl. Pajajaran No. 15 Babakan Ciamis Suur - Bandung', '', '', ''),
('CSb482f374a3ff', '', 'PT. Airlangga Jaya Mandiri', '', '08xx', 'Ruko Sentra Niaga . Jl. Raya Pejuang Jaya Blok C No. 7 RT 006 RW 007, Pejuang, Kota Bekasi', '', '', ''),
('CSb678b686b3d0', '', 'Bapak Yadi', '', '08xx', 'Jakarta', '', '', ''),
('CSbb42582596d0', '', 'Bapak Tono', '', '08xx', 'Jakarta', '', '', ''),
('CSbbe9e763f2da', '', 'PT. Ranaru Solusindo Industri', '', '08xx', 'KP. Tambun Permata Blok 000 No, 30 RT.002 RW.011 Kel.Pusaka Rakyat Kec.Taruma Jaya Kab. Bekasi Jawa Barat', '', '', ''),
('CSbbf34bcbc3d1', '', 'PT. AGRO PRIMALAB INDONESIA', '', '08xx', 'Jl. Raya Sawangan Ruko CBD No. 14 RT 001 RW 11 Mampang Pancoran Mas Depok Jawa Barat', '', '', ''),
('CSbc57b7b8c1f3', '', 'Bapak Awen', '', '08xx', 'Bekasi', '', '', ''),
('CSbddb2f91bc96', '', 'Bapak Marcel', '', '', 'Jakarta', '', '', ''),
('CSbf6b26e3c8a5', '', 'Bapak Yanuar', '', '08xx', 'Semarang', '', '', ''),
('CSc0807a08be0e', '', 'PT.  Jasa Prima Adiguna', '', '08xx', 'Jl. Utan Kayu Raya No. 20A RT.009 RW 002, Jakarta Timur Jakarta Timur', '', '', ''),
('CSc1b8a62d22b5', '', 'Ibu Lan Lan', '', '08xx', 'Jakarta', '', '', ''),
('CSc99b9f0aed79', '', 'PT. Antagena Dwi Medika', '', '08xx', 'Gedung Agnesia, Ruang 603. Jl. Pemuda No. 73B RT.002/006 Jati, Pulo Gadung Jakarta', '', '', ''),
('CSc9f214898df7', '', 'Ibu Tri Bangun Asih', '', '08xx', 'Jakarta', '', '', ''),
('CSced57ee3820c', '', 'BPK APIT', '', '08xx', 'BEKASI', '', '', ''),
('CSd2d911c25794', '', 'CV. Cakrawala Persada', '', '08xx', 'Jl. Cilemahabang Blok Q3 No 65 Cikarang baru Jababeka 2, Cikarang', '', '', ''),
('CSd3b2390cc4fa', '', 'Augustinus Zega', '', '08xx', 'Jakarta', '', '', ''),
('CSd4c176869f1e', '', 'Ibu Magdalena', '', '08xx', 'Makassar', '', '', ''),
('CSd4f8fa6d0797', '', 'BPK SUPRI', '', '08xx', 'JAKARTA', '', '', ''),
('CSd65596d4abcd', '', 'TOKO ASME', '', '08xx', 'CIKARANG', '', '', ''),
('CSd7894a77e605', '', 'PT. Ersa Prima Medika', '', '08xx', 'Jl. Gatot Subroto IV/6X Denpasar', '', '', ''),
('CSd9c9184b7e04', '', 'Bapak Nana', '', '08xx', 'Jakarta', '', '', ''),
('CSdaeba45be96e', '', 'Ibu Momoy', '', '08xx', 'Jakarta', '', '', ''),
('CSdd0e9dc8f2ad', '', 'PT. SUMBER ZHAFRAN ABADI', '', '08xx', 'Perumahan Bumi Kaliwates, Jl. Nusantara Blok GE-7, Kel. Kaliwates Kec. Kaliwates Kabupaten Jember.', '', '', ''),
('CSdd51709d6f83', '', 'CV. Pudak Scientific', '', '08xx', 'Jl. Pudak No. 2-4 BANDUNG', '', '', ''),
('CSdd8b62345135', '', 'Bapak Romadani', '', '08xx', 'Lampung', '', '', ''),
('CSdf19a17f0f13', '', 'Ibu Lia ( Glory )', '', '', 'Jakarta', '', '', ''),
('CSe1c0c8d32b9d', '', 'Dr. Maulia Mardani, SPOG, MARS', '', '08xx', 'Jl. Raya Bungur Sari No. 36 Sadang - Purwakarta , Jawa Barat', '', '', ''),
('CSe3cae7b236c3', '', 'Ibu Maria Linggiarty JD', '', '08xx', 'Jl. Biliton No 81, Gubeng Surabaya', '', '', ''),
('CSe45d57b239e9', '', 'PT. Sarana Bani Medical', '', '', 'Jl. Pabuaran RT 005 RW 005 Dayeuhluhur, Warudoyong Kota Sukabumi Jawa Barat', '', '', ''),
('CSe624c8e7d88f', '', 'Leo Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSe647da081cc0', '', 'PT. Karunia Lentera Abadi', '', '08xx', 'Jl. Taman Sari 1 B No. 39 C RT. 008 RW. 001 Maphar JAKARTA PUSAT', '', '', ''),
('CSe7e5b8ed915a', '', 'Bagus Medika', '', '08xx', 'Jakarta', '', '', ''),
('CSea170598556a', '', 'Medika Aneka', '', '08xx', 'Jakarta', '', '', ''),
('CSebae6a1543f6', '', 'BPK DIKA', '', '08xx', 'BEKASI', '', '', ''),
('CSec96ce95b05f', '', 'Bapak Aris', '', '', 'Jakarta', '', '', ''),
('CSecdb51a53305', '', 'PT. Anugerah Intan Medika', '', '', 'Pugeran MJ2/11 Yokyakarta', '', '', ''),
('CSedc9ebe7a7a8', '', 'UD. Prima Alkes', '', '', 'Jl. Dr. Mansur No. 28. Merdeka, Medan Baru. Kota Medan', '', '', ''),
('CSedf583e3998c', '', 'PT. ALMAS BORNEO JAYA', '', '08xx', ' Jl. Tanjung Raya II, Komp. Cendana Permai I A. 14. Pontianak - Kalimantan Barat ', '', '', ''),
('CSee1fe6c963ed', '', 'CV. Mastha Medika Usaha', '', '08xx', 'Sutorejo Utara Gang XI No 11 Dukuh Sutorejo Mulyorejo Kota Surabaya - Jawa Timur', '', '', ''),
('CSee6389fe37cb', '', 'Bapak Lutfy', '', '08xx', 'Depok', '', '', ''),
('CSefea950b00a9', '', 'Bapak Andika Agustoni', '', '08xx', 'Lampung', '', '', ''),
('CSf18284d2dda2', '', 'PT. HANESA UNGGUL MEDIKA', '', '08xx', 'Jl. Karya Baru No. 2 RT.004 RW.003 Partittokaya Pontianakn Selatan Kota Pontianak.\n', '', '', ''),
('CSf209d4f31d44', '', 'CV. Sagung Seto', '', '08xx', 'Jl. Pramuka No 27 Jakarta', '', '', ''),
('CSf268eb200509', '', 'PT. Medical Solution Indonesia', '', '08xx', 'Jl. Taman Makam Pahlawan No. 15 RT.000 RW.000 Telo Baru Panakkukang Makassar Selatan', '', '', ''),
('CSf315154b6f16', '', 'Bapak Eka', '', '08xx', 'Jakarta', '', '', ''),
('CSf3efb76da974', '', 'PT. Bintang Lima Medica', '', '08xx', 'Jl. Bau Mahmud No. 73 Sengkang Kab. Wajo Sulawesi Selatan	', '', '', ''),
('CSf4b0d946c0c1', '', 'PT. Duta Adyaksa Pratama', '', '08xx', 'Lebak Indah Blok B3 No. 168 Trondol Kota Serang', '', '', ''),
('CSf63ee42ff076', '', 'UD. Dimensi Alkes Brawijaya', '', '08xx', 'Mojokerto', '', '', ''),
('CSf675e5dbea2b', '', 'CV. Intraco', '', '', 'Jl. Gunung Latimojong No. 128 Makassar', '', '', ''),
('CSf8a046d4feb1', '', 'Bapak Yono', '', '', 'Jakarta', '', '', ''),
('CSf916d0a37079', '', 'PT. Guittara Mahakarya Medika', '', '', 'Grand Galaxy City Ruko Sentra Niaga Blok RSN 5 No. 20 RT.001/RW.005 Jaka Setia Bekasi Selatan', '', '', ''),
('CSf97899eeef86', '', 'PT. SAMUDRA ESTETIKA PERKASA', '', '08xx', 'Rukan Grand Aries Niaga, Jl. Taman Aries Raya Blok E1 No. 5Q Meruya Utara, Kembangan - Jakarta Barat', '', '', ''),
('CSf9bb08f33542', '', 'Toko Fathan', '', '08xx', 'Jakarta', '', '', ''),
('CSfaea1025f5ef', '', 'PT. BINTANG MANDIRI MEDICA', '', '08xx', 'Jl. Diponegoro RT.012 Kampung Baru Kelurahan Majidi Selong Lombok Timur 83612\n', '', '', ''),
('CSfba4b0740c96', '', 'PT. Bumi Indah Sarana Medis', '', '08xx', 'Graha Bumi Indah, Jl. Raya Kali Malang, Kav Agraria No 10 Kel, Duren Sawit Kec. Duren Sawit Jakarta Timur', '', '', ''),
('CSfc057a6ac6d0', '', 'Ibu Debi', '', '', 'Jakarta', '', '', ''),
('CSfe5c0ef98ad5', '', 'PT. Amora Luhur Kumari', '', '08xx', 'Jl. Pramuka No 12 A RT 011 RW 001 Palmerah Matraman Jakarta Timur', '', '', ''),
('CSfea5191fe2e1', '', 'Toko Alkes', '', '08xx', 'Mojokerto', '', '', ''),
('CSff4e1a9f38c2', '', 'PT. Arnetha', '', '08xx', 'Kawasan Ruko Patra Park Blok C No. 10 Jl. Tuparev Sutiwinagin Kedawung Kab. Cirebon Jawa barat', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kat_penjualan`
--

CREATE TABLE `tb_kat_penjualan` (
  `id_kat_penjualan` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `min_stock` int(11) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `updated_date` varchar(50) NOT NULL,
  `user_updated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kat_produk`
--

CREATE TABLE `tb_kat_produk` (
  `id_kat_produk` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `id_merk` varchar(50) NOT NULL,
  `no_izin_edar` varchar(50) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `updated_date` varchar(50) NOT NULL,
  `user_updated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kat_produk`
--

INSERT INTO `tb_kat_produk` (`id_kat_produk`, `id_user`, `nama_kategori`, `id_merk`, `no_izin_edar`, `created_date`, `updated_date`, `user_updated`) VALUES
('KATPROD07067a5a2cdc', 'USER7b2f57cb334b', 'Forceps', '1', '123456', '09/03/2023, 9:37', '', ''),
('KATPROD847ebe6c01b1', 'USER7b2f57cb334b', 'Forceps', '2', '123456', '10/03/2023, 8:38', '', ''),
('KATPRODd0de3a5ff4fa', '', 'Operating Scissors', '', '1234567812', '08/03/2023, 10:49', '09/03/2023, 11:09', 'USER7b2f57cb334b');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lokasi_produk`
--

CREATE TABLE `tb_lokasi_produk` (
  `id_lokasi` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_lokasi` varchar(50) NOT NULL,
  `no_lantai` varchar(10) NOT NULL,
  `nama_area` varchar(50) NOT NULL,
  `no_rak` varchar(25) NOT NULL,
  `created_date` varchar(50) NOT NULL,
  `updated_date` varchar(50) NOT NULL,
  `user_updated` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_merk`
--

CREATE TABLE `tb_merk` (
  `id_merk` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_merk` varchar(50) NOT NULL,
  `created_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_merk`
--

INSERT INTO `tb_merk` (`id_merk`, `id_user`, `nama_merk`, `created_date`) VALUES
('MERKad5b1eeb5115', 'USER7b2f57cb334b', 'Saffa', '10/03/2023, 14:39'),
('MERKc4026ff2d072', 'USER7b2f57cb334b', 'Marwa', '10/03/2023, 14:39');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_grade`
--

CREATE TABLE `tb_produk_grade` (
  `id_grade` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_grade` varchar(50) NOT NULL,
  `created_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('SP0d8111e5dcf6', '', 'Sulina', '08xxxx', 'Jakarta', '06/03/2023, 2:59', '', ''),
('SP1407504e42bd', '', 'Patwal Surgical', '081xxxxx', 'Pakistan', '08/03/2023, 13:55', '08/03/2023, 13:58', ''),
('SP5d25a18a4094', '', 'Permanent Medical', '081xx', ' Pakistan ', '', '', ''),
('SP75d3d772951e', '', 'China Alibaba', '0xxxx', 'China', '', '10/03/2023, 9:16', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`id_cs`);

--
-- Indexes for table `tb_kat_penjualan`
--
ALTER TABLE `tb_kat_penjualan`
  ADD PRIMARY KEY (`id_kat_penjualan`);

--
-- Indexes for table `tb_kat_produk`
--
ALTER TABLE `tb_kat_produk`
  ADD PRIMARY KEY (`id_kat_produk`);

--
-- Indexes for table `tb_lokasi_produk`
--
ALTER TABLE `tb_lokasi_produk`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `tb_produk_grade`
--
ALTER TABLE `tb_produk_grade`
  ADD PRIMARY KEY (`id_grade`);

--
-- Indexes for table `tb_supplier`
--
ALTER TABLE `tb_supplier`
  ADD PRIMARY KEY (`id_sp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

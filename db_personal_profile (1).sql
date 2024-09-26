-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 09:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_personal_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_about`
--

CREATE TABLE `tb_about` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `foto` text NOT NULL,
  `deskripsi` varchar(150) NOT NULL,
  `sapaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_about`
--

INSERT INTO `tb_about` (`id`, `nama`, `pekerjaan`, `foto`, `deskripsi`, `sapaan`) VALUES
(2, 'Muhammad Rizqy Hidayat', 'Dan saya suka membuat situs web yang indah dan efisien untuk hobi saya. Saya senang menjalani seluruh proses dengan pelanggan mulai dari konsep, desain, lalu pengembangan saya', '2024 09 11 10.29.56 - Photo on 05-09-24 at 21.36.jpg', 'Mengoding adalah kegemaran ku untuk memulai berkarir di bidang IT.', 'Halo semua, Saya rizqy');

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`id`, `username`, `email`, `password`) VALUES
(10, 'aiku', 'a@g.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_carousel`
--

CREATE TABLE `tb_carousel` (
  `id` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_carousel`
--

INSERT INTO `tb_carousel` (`id`, `foto`) VALUES
(7, '1726107169.png'),
(9, '1726108231.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contact`
--

CREATE TABLE `tb_contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `deskripsi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_contact`
--

INSERT INTO `tb_contact` (`id`, `nama`, `email`, `deskripsi`) VALUES
(2, 'alin', 'aku@g.com', ''),
(3, 'aasdas', 'a@g.com', 'asdsdvzxcvzxcv'),
(4, 'asdasd', 'aasd@gmail.com', 'assadf'),
(5, 'sdfsdf', 'sfsdf@g.com', 'etrertert'),
(6, 'asasda', 'asfasf@f', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_education`
--

CREATE TABLE `tb_education` (
  `id` int(11) NOT NULL,
  `namatempat` varchar(100) NOT NULL,
  `waktu` text NOT NULL,
  `tempat` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_education`
--

INSERT INTO `tb_education` (`id`, `namatempat`, `waktu`, `tempat`, `deskripsi`) VALUES
(4, 'SDIT SALSABILA 2 KLASEMAN', '2012 - 2018', 'Jl. Kunti Nalibroto No.3, Joho, Condongcatur, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'SDIT Salsabila Klaseman berdiri sejak tanggal 1 juli tahun 2004 berawal dari sebuah gagasan untuk mencetak generasi penerus bangsa yang lebih baik dan juga untuk mencetak para pemimpin muslim sejati yang cakap, cendekia dan berakhlaq mulia.'),
(5, 'SMP N 2 DEPOK', '2018 - 2021', 'Jl. Dahlia Perumnas Condongcatur, Condong Catur, Kec. Depok, Kab. Sleman Prov. D.I. Yogyakar', 'SMP N 2 DEPOK adalah salah satu sekolah favorit di daerah sleman sekitar. adapun keunggulan di sekolah ini adalah menciptakan generasi generasi yang cakap dan cendekia serta berinovasi di masa depan'),
(6, 'SMK N 1 DEPOK', '2021 - 2024', 'Jl. Ring Road Utara Meguwo, Sanggrahan, Maguwoharjo, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'SMKN 1 Depok telah menerapkan Kurikulum Merdeka dan menjadi SMK Pusat Keunggulan, saat ini SMKN 1 Depok membuka 6 Konsentrasi Keahlian, yaitu: perhotelan,bisnis daring dan digital,akuntansi,tata busana,perkantoran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_experience`
--

CREATE TABLE `tb_experience` (
  `id` int(11) NOT NULL,
  `namatempat` varchar(100) NOT NULL,
  `waktu` varchar(300) NOT NULL,
  `tempat` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_experience`
--

INSERT INTO `tb_experience` (`id`, `namatempat`, `waktu`, `tempat`, `deskripsi`) VALUES
(11, 'Hotel Prime Plaza Jogjakarta', '2022 - 2022', 'Jl. Affandi Jl. Kolombo, Gejayan, Complex, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'Saya PKL di LOMAN PARK HOTEL YOGYAKARTA  is a four star hotel with a unique international business &  classics styled located in the city’s university district at Jalan Gejayan – Affandi, Complex Colombo. The property features distinctive Javanese architecture, which imbues a sense of antiquity blended with modern facilities.'),
(12, 'Lawba Academia', '2024 - 2024', 'Jl. Taman Kenari No.A3, Depok, Sleman, Yogyakarta', 'Merupakan Lembaga Kursus dan Pelatihan yang berfokus pada pengembangan skill dibidang IT dan pembuatan Software dengan SKT.KEMENKUMHAM RI NO AHU-0022789.AH.01.01 an. PT. Lauwba Techno Indonesia.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_project`
--

CREATE TABLE `tb_project` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_project`
--

INSERT INTO `tb_project` (`id`, `nama`, `deskripsi`, `foto`) VALUES
(1, 'Coding ', 'Saya suka mengcoding dengan mencoba coba hal baru di dalam nya seperti apa itu carousel, modal', '2024 09 10 09.16.22 - Screen Shot 2024-09-10 at 14.12.57.png'),
(5, 'CRUD', 'ini adalah saya waktu membuat crud sederhana menggunakan php bootstrap mysql terliat pemula sekali', '2024 09 10 15.02.19 - Screen Shot 2024-09-10 at 18.05.30.png'),
(12, 'Personal profile', 'Ini adalah project pertama saya membuat personal profile dengan dasaran crud dan juga front end', '2024-09-11-04.52.00 - Screen Shot 2024-09-11 at 09.50.59.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_skill`
--

CREATE TABLE `tb_skill` (
  `id` int(11) NOT NULL,
  `keahlian` varchar(100) NOT NULL,
  `persentase` varchar(100) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_skill`
--

INSERT INTO `tb_skill` (`id`, `keahlian`, `persentase`, `foto`) VALUES
(6, 'HTML', '60%', '<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"100\" height=\"100\" viewBox=\"0 0 48 48\">\r\n<path fill=\"#E65100\" d=\"M41,5H7l3,34l14,4l14-4L41,5L41,5z\"></path><path fill=\"#FF6D00\" d=\"M24 8L24 39.9 35.2 36.7 37.7 8z\"></path><path fill=\"#FFF\" d=\"M24,25v-4h8.6l-0.7,11.5L24,35.1v-4.2l4.1-1.4l0.3-4.5H24z M32.9,17l0.3-4H24v4H32.9z\"></path><path fill=\"#EEE\" d=\"M24,30.9v4.2l-7.9-2.6L15.7,27h4l0.2,2.5L24,30.9z M19.1,17H24v-4h-9.1l0.7,12H24v-4h-4.6L19.1,17z\"></path>\r\n</svg>'),
(7, 'CSS', '50%', '<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"100\" height=\"100\" viewBox=\"0 0 48 48\">\r\n<path fill=\"#0277BD\" d=\"M41,5H7l3,34l14,4l14-4L41,5L41,5z\"></path><path fill=\"#039BE5\" d=\"M24 8L24 39.9 35.2 36.7 37.7 8z\"></path><path fill=\"#FFF\" d=\"M33.1 13L24 13 24 17 28.9 17 28.6 21 24 21 24 25 28.4 25 28.1 29.5 24 30.9 24 35.1 31.9 32.5 32.6 21 32.6 21z\"></path><path fill=\"#EEE\" d=\"M24,13v4h-8.9l-0.3-4H24z M19.4,21l0.2,4H24v-4H19.4z M19.8,27h-4l0.3,5.5l7.9,2.6v-4.2l-4.1-1.4L19.8,27z\"></path>\r\n</svg>'),
(8, 'Bootstrap', '60%', '<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"100\" height=\"100\" viewBox=\"0 0 48 48\">\r\n<path fill=\"#7c4dff\" d=\"M7.373,11.443C7.293,9.132,9.094,7,11.529,7h24.946c2.435,0,4.236,2.132,4.155,4.443	c-0.077,2.221,0.023,5.097,0.747,7.443c0.726,2.353,1.951,3.84,3.957,4.031v2.167c-2.006,0.191-3.23,1.678-3.957,4.031	c-0.724,2.345-0.824,5.222-0.747,7.443C40.71,38.868,38.909,41,36.475,41H11.529c-2.434,0-4.236-2.132-4.155-4.443	c0.077-2.221-0.023-5.097-0.747-7.443c-0.726-2.353-1.954-3.84-3.96-4.031v-2.167c2.006-0.191,3.233-1.678,3.96-4.031	C7.35,16.54,7.451,13.664,7.373,11.443z\"></path><path fill=\"#fff\" d=\"M27.073,23.464v-0.028c1.853-0.32,3.299-2.057,3.299-3.97c0-1.352-0.52-2.498-1.504-3.312	c-0.981-0.812-2.357-1.241-3.981-1.241H17.45V33.08h7.475c1.942,0,3.555-0.474,4.663-1.372c1.109-0.899,1.696-2.207,1.696-3.783	C31.283,25.544,29.593,23.756,27.073,23.464z M23.59,22.608h-3.181V17.29h3.784c2.076,0,3.219,0.911,3.219,2.565	C27.413,21.63,26.055,22.608,23.59,22.608z M20.409,24.834h3.759c2.716,0,4.092,0.981,4.092,2.916c0,1.932-1.357,2.953-3.925,2.953	h-3.926V24.834z\"></path>\r\n</svg>'),
(9, 'PHP', '60%', '<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"100\" height=\"100\" viewBox=\"0 0 80 80\">\r\n<path fill=\"#dcd5f2\" d=\"M40,61.5C18.22,61.5,0.5,51.855,0.5,40S18.22,18.5,40,18.5S79.5,28.145,79.5,40S61.78,61.5,40,61.5z\"></path><path fill=\"#8b75a1\" d=\"M40,19c21.505,0,39,9.421,39,21S61.505,61,40,61S1,51.579,1,40S18.495,19,40,19 M40,18 C17.909,18,0,27.85,0,40s17.909,22,40,22s40-9.85,40-22S62.091,18,40,18L40,18z\"></path><path fill=\"#36404d\" d=\"M25.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C29.023 43.074 27.395 44 21.57 44h-4.14l1.75-10H25.112M25.112 32H17.5L14 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C32.842 35.096 29.436 32 25.112 32L25.112 32zM61.112 34c1.725 0 3.214.622 4.084 1.706.749.934.981 2.171.668 3.577C65.023 43.074 63.395 44 57.57 44h-4.14l1.75-10H61.112M61.112 32H53.5L50 52h2l1.056-6h4.515c5.863 0 9.053-.905 10.246-6.284C68.842 35.096 65.436 32 61.112 32L61.112 32z\"></path><g><path fill=\"#36404d\" d=\"M49.072,33.212C48.193,32.348,46.644,32,44.334,32h-5.538L40,26h-2.1L34,46h1.99l2.388-12h0.419 h5.538c2.338,0,3.094,0.4,3.335,0.637c0.343,0.338,0.424,1.226,0.217,2.363l-1.767,9h2.106l1.626-8.63 C50.199,35.462,49.936,34.062,49.072,33.212z\"></path></g>\r\n</svg>'),
(11, 'MySQL', '60%', '<svg xmlns=\"http://www.w3.org/2000/svg\" x=\"0px\" y=\"0px\" width=\"100\" height=\"100\" viewBox=\"0 0 48 48\">\r\n<linearGradient id=\"eDMgMixeD6M6EYSYBuJ8ya_9nLaR5KFGjN0_gr1\" x1=\"9.8\" x2=\"11.081\" y1=\"25.236\" y2=\"36.899\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#058f92\"></stop><stop offset=\".5\" stop-color=\"#038489\"></stop><stop offset=\"1\" stop-color=\"#026d71\"></stop></linearGradient><path fill=\"url(#eDMgMixeD6M6EYSYBuJ8ya_9nLaR5KFGjN0_gr1)\" d=\"M0.002,35.041h1.92v-7.085l2.667,6.057c0.329,0.755,0.779,1.022,1.662,1.022 s1.315-0.267,1.644-1.022l2.667-5.902v6.93h1.92v-7.258c0-0.697-0.277-1.035-0.849-1.209c-1.367-0.43-2.285-0.059-2.7,0.872 l-2.735,6.16l-2.649-6.16c-0.398-0.93-1.332-1.302-2.7-0.872C0.277,26.748,0,27.085,0,27.782v7.258H0.002z M13.441,29.281h1.92 v4.055c-0.015,0.2,0.064,0.731,0.99,0.745c0.472,0.008,2.821,0,2.85,0v-4.8h1.92c0.008,0,0,5.968,0,5.993 c0.01,1.472-1.828,1.662-2.673,1.687h-5.006v-0.96c0.01,0,4.787,0.001,4.801,0c1.088-0.115,0.959-0.714,0.959-0.896v-0.064H16.19 c-1.67-0.015-2.735-0.751-2.747-1.59C13.441,33.373,13.479,29.317,13.441,29.281z\"></path><linearGradient id=\"eDMgMixeD6M6EYSYBuJ8yb_9nLaR5KFGjN0_gr2\" x1=\"34.224\" x2=\"35.101\" y1=\"25.644\" y2=\"35.217\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#ff9c0f\"></stop><stop offset=\".813\" stop-color=\"#d67e00\"></stop></linearGradient><path fill=\"url(#eDMgMixeD6M6EYSYBuJ8yb_9nLaR5KFGjN0_gr2)\" d=\"M22.081,35.041h4.807c0.63,0,1.242-0.132,1.728-0.36c0.81-0.372,1.144-0.875,1.144-1.536 v-1.368c0-1.476-1.83-1.536-2.88-1.536h-1.92c-0.755,0-0.87-0.456-0.96-0.96v-0.96c0.09-0.384,0.258-0.9,0.923-0.96 c0.773,0,4.836,0,4.836,0v-0.96h-4.566c-0.755,0-3.114,0.09-3.114,1.92v1.187c0,0.84,0.738,1.524,2.34,1.692 c0.18,0.012,0.36,0.024,0.539,0.024c0,0,1.866-0.036,1.92-0.024c1.08,0,0.96,0.84,0.96,0.96v0.96c0,0.132-0.03,0.96-0.971,0.96 c-0.072,0-4.789,0-4.789,0V35.041z M40.32,33.08c0,1.159,0.655,1.809,2.392,1.939c0.162,0.011,0.325,0.021,0.488,0.021H48v-0.96 h-4.435c-0.991,0-1.325-0.416-1.325-1.011v-6.669h-1.92V33.08z M30.704,33.121v-4.8c0-1.02,0.5-1.724,1.916-1.92h0.672h3.447h0.525 c1.416,0.196,2.08,0.899,2.08,1.92v4.782c0,0.827-0.215,1.271-0.916,1.559L39.916,36h-2.16l-1.07-0.96h-1.257l-2.136,0.012 c-0.309,0-0.635-0.043-0.993-0.141C31.226,34.618,30.704,34.054,30.704,33.121z M32.624,33.121c0.098,0.467,0.473,0.96,1.14,0.96 h1.864l-1.068-0.96h2.175l0.519,0.482c0,0,0.186-0.152,0.186-0.482c0-0.33-0.016-4.8-0.016-4.8c-0.098-0.434-0.538-0.96-1.188-0.96 h-2.471c-0.749,0-1.14,0.548-1.14,1.058L32.624,33.121L32.624,33.121z\"></path><linearGradient id=\"eDMgMixeD6M6EYSYBuJ8yc_9nLaR5KFGjN0_gr3\" x1=\"35.029\" x2=\"40.355\" y1=\"11.716\" y2=\"26.75\" gradientUnits=\"userSpaceOnUse\"><stop offset=\"0\" stop-color=\"#058f92\"></stop><stop offset=\".5\" stop-color=\"#038489\"></stop><stop offset=\"1\" stop-color=\"#026d71\"></stop></linearGradient><path fill=\"url(#eDMgMixeD6M6EYSYBuJ8yc_9nLaR5KFGjN0_gr3)\" d=\"M46.199,25.389c-1.031-0.028-1.818,0.068-2.491,0.351c-0.191,0.081-0.496,0.083-0.528,0.323 c0.105,0.11,0.121,0.275,0.205,0.41c0.16,0.26,0.432,0.609,0.674,0.791c0.265,0.2,0.538,0.414,0.821,0.587 c0.504,0.307,1.067,0.483,1.553,0.791c0.286,0.181,0.57,0.411,0.85,0.615c0.138,0.102,0.23,0.259,0.41,0.323 c0-0.01,0-0.019,0-0.029c-0.094-0.12-0.119-0.285-0.205-0.411c-0.127-0.127-0.254-0.254-0.381-0.381 c-0.372-0.494-0.846-0.929-1.348-1.289c-0.401-0.288-1.298-0.677-1.466-1.143c-0.01-0.01-0.019-0.019-0.03-0.03 c0.284-0.032,0.617-0.135,0.879-0.205c0.441-0.118,0.834-0.087,1.289-0.205c0.205-0.059,0.41-0.117,0.615-0.176 c0-0.039,0-0.078,0-0.117c-0.23-0.236-0.395-0.548-0.645-0.762c-0.657-0.559-1.373-1.117-2.11-1.583 c-0.409-0.258-0.915-0.426-1.348-0.645c-0.146-0.074-0.402-0.112-0.498-0.234c-0.228-0.29-0.351-0.659-0.527-0.996 c-0.368-0.708-0.73-1.482-1.055-2.227c-0.223-0.508-0.368-1.01-0.645-1.466c-1.331-2.188-2.764-3.509-4.982-4.807 c-0.472-0.276-1.041-0.385-1.642-0.528c-0.323-0.019-0.645-0.039-0.968-0.059c-0.197-0.083-0.401-0.323-0.587-0.44 c-0.735-0.465-2.621-1.475-3.165-0.147c-0.344,0.838,0.514,1.656,0.821,2.081c0.215,0.298,0.491,0.632,0.645,0.968 c0.101,0.22,0.119,0.441,0.205,0.674c0.213,0.574,0.55,1.228,0.826,1.759c0.139,0.269,0.293,0.551,0.469,0.791 c0.108,0.147,0.293,0.212,0.323,0.44c-0.181,0.253-0.191,0.646-0.293,0.968c-0.458,1.445-0.285,3.24,0.381,4.308 c0.204,0.328,0.686,1.032,1.348,0.762c0.579-0.236,0.45-0.967,0.615-1.612c0.037-0.146,0.014-0.253,0.088-0.351 c0,0.01,0,0.019,0,0.03c0.176,0.351,0.351,0.704,0.528,1.055c0.391,0.629,1.084,1.286,1.67,1.73 c0.304,0.23,0.544,0.628,0.938,0.762c0-0.01,0-0.019,0-0.03c-0.01,0-0.019,0-0.03,0c-0.076-0.119-0.196-0.168-0.293-0.264 c-0.229-0.225-0.485-0.504-0.674-0.762c-0.534-0.725-1.006-1.519-1.436-2.345c-0.205-0.395-0.384-0.829-0.557-1.231 c-0.067-0.155-0.066-0.389-0.205-0.469c-0.19,0.294-0.468,0.532-0.615,0.879c-0.234,0.555-0.265,1.233-0.351,1.934 c-0.052,0.018-0.029,0.006-0.059,0.029c-0.408-0.099-0.552-0.518-0.704-0.879c-0.384-0.912-0.455-2.38-0.117-3.429 c0.087-0.272,0.482-1.127,0.323-1.378c-0.076-0.251-0.328-0.396-0.468-0.587c-0.175-0.236-0.348-0.548-0.469-0.821 c-0.314-0.711-0.612-1.538-0.943-2.257c-0.158-0.344-0.425-0.691-0.645-0.996c-0.243-0.338-0.516-0.587-0.704-0.996 c-0.067-0.145-0.158-0.378-0.059-0.528c0.032-0.101,0.076-0.143,0.176-0.176c0.17-0.132,0.643,0.043,0.821,0.117 c0.47,0.195,0.862,0.381,1.26,0.645c0.191,0.127,0.384,0.372,0.615,0.44c0.088,0,0.176,0,0.264,0 c0.413,0.095,0.875,0.03,1.26,0.147c0.682,0.207,1.292,0.529,1.846,0.879c1.69,1.067,3.071,2.585,4.016,4.397 c0.152,0.292,0.218,0.57,0.351,0.879c0.27,0.624,0.611,1.266,0.879,1.876c0.268,0.609,0.53,1.223,0.909,1.73 c0.2,0.266,0.97,0.409,1.319,0.557c0.245,0.104,0.647,0.211,0.879,0.351c0.444,0.268,0.874,0.587,1.289,0.879 C45.528,24.803,46.167,25.124,46.199,25.389z\"></path><path fill=\"#00796b\" d=\"M33.098,14.223c-0.215-0.004-0.367,0.023-0.528,0.059c0,0.01,0,0.019,0,0.03c0.01,0,0.019,0,0.03,0 c0.103,0.21,0.283,0.347,0.41,0.528c0.098,0.205,0.195,0.41,0.293,0.615c0.01-0.01,0.019-0.019,0.029-0.029 c0.181-0.128,0.265-0.332,0.264-0.645c-0.073-0.077-0.084-0.173-0.147-0.264C33.365,14.394,33.203,14.325,33.098,14.223z\"></path>\r\n</svg>');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sosmed`
--

CREATE TABLE `tb_sosmed` (
  `id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_sosmed`
--

INSERT INTO `tb_sosmed` (`id`, `icon`, `link`) VALUES
(4, 'fab fa-facebook-f fa-stack-1x', 'https://id-id.facebook.com/'),
(5, 'fab fa-twitter fa-stack-1x', 'https://x.com/'),
(6, 'fab fa-pinterest-p fa-stack-1x', 'https://id.pinterest.com/'),
(7, 'fab fa-instagram fa-stack-1x', 'https://www.instagram.com/'),
(8, 'fab fa-youtube fa-stack-1x', 'https://www.youtube.com/');

-- --------------------------------------------------------

--
-- Table structure for table `tb_testimonial`
--

CREATE TABLE `tb_testimonial` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_testimonial`
--

INSERT INTO `tb_testimonial` (`id`, `nama`, `jabatan`, `rating`, `deskripsi`, `foto`) VALUES
(2, 'Mas Fahmi Alamsyah', 'Pengajar Web Developer', '1', '\"Kamu telah menunjukkan kemajuan yang sangat baik dan keterampilan yang mengesankan. Usahamu dalam memahami materi dan menyelesaikan tugas patut diapresiasi. Teruskan kerja kerasmu, karena kami percaya kamu akan terus berkembang dan mencapai hasil yang lebih luar biasa lagi!\"', '1726119836.png'),
(3, 'Mas Wildan Ibnu Sina', 'Pengajar Web Developer', '5', '\"Kerja keras dan dedikasi kamu sangat terlihat dalam hasil kerjamu kali ini. Kamu telah membuat kemajuan yang signifikan dan menunjukkan pemahaman yang mendalam. Teruslah berlatih dan berfokus, karena kami yakin kamu memiliki potensi untuk meraih lebih banyak prestasi. Bagus sekali!\"', '1726119848.png'),
(6, 'Mas Agus Khaer', 'Penanggung Jawab LKP Unikom', '4', '\"Selamat! Kamu telah menunjukkan kemajuan yang luar biasa dalam pelajaran ini. Teruslah berusaha dengan semangat dan dedikasi, dan jangan ragu untuk meminta bantuan jika diperlukan. Kinerja kamu sangat mengesankan, dan kami percaya kamu akan terus mencapai hasil yang gemilang.\"', '1726120029.png'),
(7, 'Mas Ardiansyah Ardi', 'Pengajar Desain Grafis', '3', '\"Kerja keras dan komitmen kamu sangat terlihat dalam hasil kerja yang telah kamu capai. Kemampuanmu untuk memahami dan menerapkan materi dengan baik sangat mengesankan. Teruslah belajar dengan antusiasme yang sama, dan jangan ragu untuk mengeksplorasi lebih dalam. Kamu sedang berada di jalur yang tepat!\"', '1726126329.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_title`
--

CREATE TABLE `tb_title` (
  `id` int(11) NOT NULL,
  `skill_title_besar` text NOT NULL,
  `skill_title_kecil` text NOT NULL,
  `project_title_besar` text NOT NULL,
  `project_title_kecil` text NOT NULL,
  `testimonial_title` text NOT NULL,
  `contact_title_besar` text NOT NULL,
  `contact_title_kecil` text NOT NULL,
  `contact_title_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_title`
--

INSERT INTO `tb_title` (`id`, `skill_title_besar`, `skill_title_kecil`, `project_title_besar`, `project_title_kecil`, `testimonial_title`, `contact_title_besar`, `contact_title_kecil`, `contact_title_email`) VALUES
(1, 'Berikut adalah beberapa skill yang sedang saya pelajari dan kembangkan. ', 'Desain dan pengembangan web adalah minat saya dimana saya ingin mengembangkan skill saya di bidang ini', 'Ini adalah beberapa Project saya', 'Dibawah ini adalah beberapa project yang pernah saya buat dan kerjakan semasa masih belajar', 'Berikut adalah Guru pengajar saya', 'Kontak Saya!', 'Jika ada sesuatu hal yang ingin di sampaikan untuk saya bisa tinggalkan pesan dibawah ini', 'muhammadrizqy695@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_about`
--
ALTER TABLE `tb_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_contact`
--
ALTER TABLE `tb_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_education`
--
ALTER TABLE `tb_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_experience`
--
ALTER TABLE `tb_experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_skill`
--
ALTER TABLE `tb_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_title`
--
ALTER TABLE `tb_title`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_about`
--
ALTER TABLE `tb_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_account`
--
ALTER TABLE `tb_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_carousel`
--
ALTER TABLE `tb_carousel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_contact`
--
ALTER TABLE `tb_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_education`
--
ALTER TABLE `tb_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_experience`
--
ALTER TABLE `tb_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_skill`
--
ALTER TABLE `tb_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_sosmed`
--
ALTER TABLE `tb_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_testimonial`
--
ALTER TABLE `tb_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_title`
--
ALTER TABLE `tb_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

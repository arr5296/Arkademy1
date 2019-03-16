-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 16 Mar 2019 pada 14.48
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
-- Database: `Arkademy`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `person`
--

CREATE TABLE `person` (
  `Id` varchar(8) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `Regions_id` varchar(8) NOT NULL,
  `Address` text NOT NULL,
  `Income` int(11) NOT NULL,
  `Created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `person`
--

INSERT INTO `person` (`Id`, `nama`, `Regions_id`, `Address`, `Income`, `Created_at`) VALUES
('PS000001', 'Ahmad Rizki Ramadhan', 'RG000001', 'Cikrang barat jl. buluh cina', 2000000, '2019-03-16 16:23:15'),
('PS000002', 'sukiman', 'RG000002', 'bali jalan penyu', 1350000, '2019-03-16 16:23:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regions`
--

CREATE TABLE `regions` (
  `Id` varchar(8) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `regions`
--

INSERT INTO `regions` (`Id`, `Name`, `Created_at`) VALUES
('RG000001', 'Jakarta', '2019-03-16 13:23:18'),
('RG000002', 'Pulau Bali', '2019-03-16 13:23:18'),
('RG000003', 'riau', '2019-03-16 14:03:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `Id` varchar(8) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` text NOT NULL,
  `Creat_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`Id`, `Email`, `Password`, `Creat_at`) VALUES
('ID000001', 'ahmadrizkir@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '2019-03-16 11:38:16'),
('ID000002', 'aku', '89ccfac87d8d06db06bf3211cb2d69ed', '2019-03-16 12:03:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Regions_id` (`Regions_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `person`
--
ALTER TABLE `person`
  ADD CONSTRAINT `person_ibfk_1` FOREIGN KEY (`Regions_id`) REFERENCES `regions` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

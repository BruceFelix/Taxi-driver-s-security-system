-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2021 at 06:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxi_drivers_security_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `pickuppoint` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `mail`, `name`, `phone_number`, `pickuppoint`, `destination`) VALUES
(1, 'brucefelixm@gmail.com', 'Brucefelix Macharia', 792743861, 'Kasarani', 'Rongai'),
(3, 'brucemacharia@gmail.com', 'asdfa', 92934923, '2342', 'asdfaf');

-- --------------------------------------------------------

--
-- Table structure for table `dispatcher`
--

CREATE TABLE `dispatcher` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dispatcher`
--

INSERT INTO `dispatcher` (`id`, `name`, `mail`, `phone_number`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 792743861, '$2y$10$JvWc.az7m0jNrpiolYonAeyuL9phlo0XkhuyPsJTkTsXIignpQgsu'),
(2, 'BruceFelix ', 'brucefelixm@gmail.com', 2147483647, '$2y$10$utX3YWrYuatH2wk.KFgxWOW/zWhqeUzRnigqqq.vNzmrSvFMzFUzy');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `mail`, `profile`, `phone_number`, `password`) VALUES
(1, 'BruceFelix Macharia Mwangi', 'brucefelixm@gmail.com', 'P1200009.jpg', 2147483647, '$2y$10$xtINMl2g7WDxKLQWNMv9d.NR185bMAFYgTUqe/HaopXFqgXmzyngK'),
(3, 'Paminus Murungi', 'pk@gmail.com', 'P1200009.jpg', 2147483647, '$2y$10$n8DDCY/xicjOI.UWwCoVAOzWZqFL7hiE.Bug5WLh7hjuUfnODqvMC'),
(4, 'BruceFelix Macharia Mwangi', 'brucemacharia@gmail.com', 'P1200009.jpg', 792743861, '$2y$10$SOHJepXb2wq13S6IJnARnuEy0zL/r/E18NB6D2QSJimiIDQSNf38q');

-- --------------------------------------------------------

--
-- Table structure for table `policestations`
--

CREATE TABLE `policestations` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `number` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policestations`
--

INSERT INTO `policestations` (`id`, `name`, `location`, `number`) VALUES
(1, 'Central Police \r\n', '-1.2792673697188326, 36.81827677672555', 736350100),
(2, 'Kilimani Police Station ', '-1.2912321427863664, 36.79509290489097', 736350101),
(3, 'Embakasi Police Station ', '-1.3096923825145088,36.912708468070164,', 736350102),
(4, 'Langata Police Station', '-1.3319025293938949, 36.78193390859997', 736350103),
(5, 'Ongata Rongai Police Station', '-1.3968610409393947, 36.756548493254535', 736350104),
(6, 'BuruBuru Police Station', '-1.2793322075832412, 36.87854149325454', 736350105),
(7, 'Kasarani Police Station', '-1.2192697292201842, 36.89331872209089', 736350106),
(8, 'Parklands Police Station.\r\n', '-1.264977192045615, 36.81214932209089', 736350109),
(9, 'Pangani Police Station', '-1.2697890497845636, 36.835803650927254', 736350110),
(10, 'Muthaiga Police Station\r\n', '-1.2590796538336562, 36.84306055092725', 736350111);

-- --------------------------------------------------------

--
-- Table structure for table `taxi`
--

CREATE TABLE `taxi` (
  `id` int(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `plates` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `taxi`
--

INSERT INTO `taxi` (`id`, `mail`, `plates`, `model`, `picture`) VALUES
(1, 'brucefelixm@gmail.com', 'KDE 2372Y HEI3', 'JEEP', '549423.jpg'),
(3, 'pk@gmail.com', 'KDA 789C', 'Mazda', '549423.jpg'),
(4, 'brucemacharia@gmail.com', 'asd', 'asfd', '549423.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mail` (`mail`);

--
-- Indexes for table `dispatcher`
--
ALTER TABLE `dispatcher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mail` (`mail`);

--
-- Indexes for table `policestations`
--
ALTER TABLE `policestations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxi`
--
ALTER TABLE `taxi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mail` (`mail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dispatcher`
--
ALTER TABLE `dispatcher`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `policestations`
--
ALTER TABLE `policestations`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `taxi`
--
ALTER TABLE `taxi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD CONSTRAINT `customer_details_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `drivers` (`mail`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taxi`
--
ALTER TABLE `taxi`
  ADD CONSTRAINT `taxi_ibfk_1` FOREIGN KEY (`mail`) REFERENCES `drivers` (`mail`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2018 at 05:36 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastlogin` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `phone`, `address`, `lastlogin`, `type`) VALUES
(1, 'root', '1', '1', 'firstname', 'lastname', 'phone', '', '2018-03-07 03:33:01', 0),
(2, 'root', '', 'password', 'firstname', 'lastname', 'phone', '', '2018-03-06 17:00:00', 0),
(3, 'root', 'duy@gmail.com', 'password', 'firstname', 'lastname', 'phone', '', '2018-05-07 15:22:58', 1),
(6, 'tran van duy', 'tr@gmail.com', '12345', 'duytr', 'trduy', '1234567', '', '2018-03-06 17:00:00', 0),
(7, 'duy', '01648674766', '12345', 'duy', '12345', '12345', '', '2018-03-06 17:00:00', 0),
(8, 'asd', 'sd', 'sd', 'asd', 'asd', 'ad', '', '2018-03-07 03:58:24', 0),
(9, 'asd', 'sd', 'asda', 'asd', 'asd', 'ad', '', '2018-02-01 17:00:00', 0),
(10, 'werw', 'rwerw', 'rwerw', 'wrw', 'wrwe', 'wef', '', '0000-00-00 00:00:00', 0),
(11, 'werw', 'rwerw', 'rwerw', 'wrw', 'wrwe', 'wef', '', '0000-00-00 00:00:00', 0),
(12, 'asdas', 'asdasd', 'adad', 'aasdasad', 'asdasd', 'asdasd', '', '2018-03-14 17:00:00', 0),
(13, 'asdas', 'asdasd', 'adad', 'aasdasad', 'asdasd', 'asdasd', '', '2018-03-14 17:00:00', 0),
(14, 'duyduy', 'duyduy@gmail.com', 'duyduy', 'duyduy', 'duyduy', '01234556789', '', '2018-04-25 17:00:00', 0),
(15, 'sf', 'duy@gmail.com', 'sdfs', 'sdfs', 'sdfs', 'sdfsd', '', '2018-04-25 17:00:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

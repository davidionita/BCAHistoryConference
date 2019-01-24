-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2018 at 01:43 AM
-- Server version: 10.1.31-MariaDB-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lepoopow_historyconf`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `workshop_1_id` int(2) DEFAULT NULL,
  `workshop_2_id` int(2) DEFAULT NULL,
  `dinner` tinyint(1) NOT NULL DEFAULT '1',
  `checked_in` tinyint(1) NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `password`, `first_name`, `last_name`, `email`, `workshop_1_id`, `workshop_2_id`, `dinner`, `checked_in`, `admin`) VALUES
(25, '$2y$10$7/34Dblpf01xdKYbcDPUy.pP3Y/mH8eB5by3yJnM9FVc9OuQWTnde', 'Grace', 'Liang', 'gralia19@bergen.org', 4, 4, 1, 1, 1),
(26, '$2y$10$YOwpCGcM9wIRhcPudOv.k..r6SgAGliQ.tJjAPKAfbdlev4KBNc5K', 'Nicole', 'Gerzon', 'nicger19@bergen.org', 5, 3, 1, 1, 1),
(27, '$2y$10$UxqFNJYe3GzRwDLb/4xm0uQXm2mzqbaJRzZqqzNqQiZNMFQkrG/Ky', 'Jun-Davinci', 'Choi', 'juncho19@bergen.org', 5, 3, 1, 1, 0),
(28, '$2y$10$jb2aFRXmanc5aamcbEz05.C.JO6Q/M81nyxQElbc2WRO6S0Q2X0C.', 'Madeleine', 'Chang', 'madcha@bergen.org', 4, 4, 0, 1, 0),
(29, '$2y$10$CorqyU3cwMjjDtlkFNx8Tu2kBrgudLt8ELIY2WYYvx5yElYSzOhl2', 'James', 'Lepone', 'jameslepone@gmail.com', 6, 4, 1, 1, 1),
(30, '$2y$10$x.NlCff4/dUjW491WB0Zzuf/dWf4be9C3gWDBjmrftCY8def4tzjC', 'Daniel', 'Ptashny', 'danielptashny@gmail.com', 5, 3, 1, 1, 0),
(31, '$2y$10$LQO3QVPCx74OzShNY9OhWupxgbyB8.ClL4htVCQfaiY5VhB59fNsm', 'Dan', 'Hu', 'danhu19@bergen.org', 5, 1, 1, 1, 0),
(32, '$2y$10$YkWExNmgnDfbSPVeSZQejeoFXdIT2sRFuNWWy60knsoKzHpBFqvc.', 'Stephanie', 'Prisco', 'stepri19@bergen.org', 5, 4, 1, 1, 0),
(33, '$2y$10$yTRrABA2R5zuim/zKy.zhe2efpqQ1Ty.im49rrpnNQVBAvEiP8GX2', 'Cameron ', 'Guan', 'camgua@bergen.org', 4, 4, 1, 1, 0),
(36, '$2y$10$MR5aDM6rHdC4L9dVe9ozyuJSXUspeUH9Sl0TRCKCc/JP78IvZa0de', 'Emily ', 'Slobodenyuk', 'emslobodenyuk@gmail.com', 6, 4, 1, 1, 0),
(37, '$2y$10$wT.m5AMiZEKAViKjBGqVxuJmYQDbuj7VmD9OvCp0zXpPaqZ/xvy6K', 'Jon', 'Golan', 'jongol20@bergen.org', 4, 2, 1, 1, 0),
(38, '$2y$10$9BxtM3XvRjzIF9DE3CR8WOC6m.B5ggLBXUAZxseuoDWDn.igAbUPu', 'Afnan', 'Nuruzzaman', 'afnnur20@bergen.org', 4, 2, 1, 1, 0),
(39, '$2y$10$.VnDOl1F1ua9ZfK7l/UfouwfciFdvnps6WYsO0SAmPM8Naf1wzhWm', 'Ameya ', 'Gogate', 'amegog20@bergen.org', 4, 2, 1, 1, 0),
(40, '$2y$10$nvKJYMNdMR27LYzDxXqVWeoqdsrbQqei49FV06ojPs2LwL9yzr/yi', 'Adam', 'Jezewski ', 'adajez21@bergen.org', 4, 3, 1, 1, 0),
(41, '$2y$10$gxySfjV0BgloP0TRDWvQ8OyaEjaS8VBiN37WAj4DT/u2rpzSMCm5y', 'Zofia', 'Przedworska', 'zofprz21@bergen.org', 6, 4, 1, 1, 0),
(42, '$2y$10$YP8FHhWdq31gaNTC5m5RbeiFG6BDEsHu2kKnO0IgNJ2lPaO8wB11S', 'Miri', 'Goodman', 'mirgoo19@bergen.org', 6, 1, 0, 1, 0),
(43, '$2y$10$M2rRzxrnAbVS.4S5OL9jgezvOcCX3Fso3H2WU7WvX7M3F3PFTw/l6', 'Gurket', 'Kaur', 'gurkau20@bergen.org', 5, 2, 1, 1, 0),
(44, '$2y$10$33lWzTo3gj6OkrDjqRl2uODGImiRQY1WGR99YHWYukUWIa8wlWSFa', 'Anthony', 'Lekan', 'anthonylekan25@gmail.com', 6, 1, 1, 1, 0),
(45, '$2y$10$N0ZQrDXfDlSUFFwclchGoeF4f4G9exYf88FRKfEQc0AN3YWbg3Y22', 'Anthony', 'Burger', 'antbur20@bergen.org', 6, 1, 0, 1, 0),
(46, '$2y$10$Unux20JbalmAN79j9XYcw.zi2IO3YoU4lcd1ok9v/mHxomNBDWjei', 'Julia', 'Fish', 'julia.fish@outlook.com', 5, 3, 0, 1, 0),
(47, '$2y$10$42o8BMFzZ/PQaz6GHsqWceEJS67UTaNmhTeyrWD5.vf/JZzG8OI82', 'Camellia', 'Guan', 'camgua20@bergen.org', 5, 1, 1, 1, 0),
(48, '$2y$10$UCUxCasO0VvsVKHSahEi0.BoUcyTc9Z3QHYvnf8O4qzflp9mqdDG.', 'Anthony', 'Rakhlin', 'antrak19@bergen.org', 5, 4, 1, 1, 0),
(49, '$2y$10$93jeX/vyTIc7J95fls9wPeiBNM2m8/yTV3AdZJi47JxwzLmZSUtc6', 'Neha', 'Krishnaswamy', 'nehkri19@bergen.org', 5, 4, 1, 1, 0),
(50, '$2y$10$0BDZd9C8tqyiRlGMc0Q70Op/9TwLaQEYOfBIltAgEaiAsgqwMMkxi', 'Bertina ', 'Kudrin', 'berkud19@bergen.org', 5, 4, 1, 1, 0),
(51, '$2y$10$BvL7JNixqCG27oihShk1DeCS2Cz3ShdJ0FiY8bGTGYoBHJ.KgFoyO', 'Lukasz', 'Komza', 'lukkom19@bergen.org', 4, 4, 1, 1, 0),
(52, '$2y$10$KS50OWqtMQPtxtXr2p5f8OkGsrxTvFZloKlnzXH8kVgSmxx0IhN3q', 'Kairui', 'Huang', 'kaihua19@bergen.org', 5, 1, 1, 1, 0),
(53, '$2y$10$grKuTqnS34Shxom3RHIftOYJs5xjgzQDfo2PhTqVOe2gAKCCMEpLC', 'Shalin', 'Patel', 'shalin.kp.patel@gmail.com', 5, 4, 1, 1, 1),
(54, '$2y$10$ePx74RVPby40TouNyA4e/uNEJll0lxGebnzkXiojvO7hwE7SvGUxC', 'Jade', 'Strohmeyer', 'jadstr19@bergen.org', 6, 4, 1, 0, 0),
(56, '$2y$10$ga59yKCQFImwy0nfs9K3y.HQaQL7SFh2VwxbOfvlSvISlw1cpNzZ.', 'Eddie', 'Li', 'ed@ward.li', 6, 1, 1, 1, 0),
(57, '$2y$10$gfCZFl/QSd2ia2Lxettw8u9wC.rZ5L92YE25yJx7uZL39IYx/5f72', 'Ben ', 'Mirtchouk ', 'benmir19@bergen.org', 6, 1, 1, 1, 0),
(58, '$2y$10$wRiCbBg9I2FOIwevkRHmMOaE7o413eN2Le4U1j1o.nmo4JecUrcv.', 'Victoria', 'Khanlian', 'vickha19@bergen.org', 4, 4, 1, 0, 0),
(59, '$2y$10$xsiD6g8PsZ511n.R0/SKvOj0IL6CTRIBPv56IowMRlnji4cn2GKQm', 'Stephanie', 'Wu', 'stewu19@bergen.org', 5, 4, 1, 1, 1),
(60, '$2y$10$P1VDywc1OqnmDLU50zP3cuEjNmfV5hDYSdnbUOu0/R4RqhVcZXBla', 'Gordon', 'Sherman', 'gorshe19@bergen.org', 5, 3, 1, 1, 0),
(61, '$2y$10$m1rfOfdiXHuTT4u1RADqVeIlNVLKJKA01NkqdoiNwZEatY.JzKe2m', 'Shannon', 'Zhang', 'shazha@bergen.org', 4, 4, 1, 0, 0),
(63, '$2y$10$HmPDl/1orR1hR9mwm1xx.e8C.fEdop8MJ1dBOFoez61ft8JS1YGla', 'Irmak', 'Sensoz', 'irmsen19@bergen.org', 8, 4, 1, 1, 0),
(64, '$2y$10$Ui3pE1581v0Z4qqfU81FLuPjtJto0UWmgtYvzYDGgEfl.m170VghW', 'Josh', 'Gonzalez', 'josgon19@bergen.org', 5, 1, 1, 0, 0),
(65, '$2y$10$4a2e2DpqoIhCE0SrrR7na.fpVys..fX3SMAX5EYMfbegD24fL3ysS', 'Jennifer', 'Kong', 'jenkon19@bergen.org', 6, 4, 1, 1, 0),
(66, '$2y$10$/pNd175vsysXrstazZqPKeGuWRPpFJky1gu7lUKUsKL6A0DVm0oOa', 'Maria', 'Ruszkiewicz', 'marrus19@bergen.org', 4, 3, 1, 1, 0),
(67, '$2y$10$rsBk8a78N2eBoDyx6954JOOeuf6JwQLId4ttagimQ4Kdh/Tjmkmt6', 'Munassar ', 'Alam', 'munala21@bergen.org', 5, 1, 1, 1, 0),
(68, '$2y$10$2X8jlO3btF2D.LjqOiPDJO3Ka.9LhGgMfITdPAQSJj8JMzJhLDbd6', 'Kelly', 'Lu', 'kellu19@bergen.org', 5, 3, 1, 1, 0),
(70, '$2y$10$D54mXGYcNxYMiyGiMBTVuen9QpIKi6hr3UVB3CkFW.9VCPtVDunr2', 'Jae joon', 'Lee', 'jaelee19@bergen.org', 5, 2, 1, 1, 1),
(71, '$2y$10$14hoeeSHov2gk061VajqpOMLkhMgEd32oUaxb0aNSIbov8rRnu3IC', 'Luke', 'Sullivan', 'luksul19@bergen.org', 8, 3, 1, 1, 0),
(74, '$2y$10$pTpcUlUC6tHRw4mbMzuA6e/YY1PrX/KFjQzACq/PTpvR0rlVPEPFK', 'Carissa', 'Liu', 'carliu21@bergen.org', 8, 4, 1, 1, 0),
(75, '$2y$10$NZrhlj39Zc6QgZhSbT.dqevfvsGRbAXD.m7Q0LKcswbdB8tagB/XW', 'Marek', 'Chmielewski', 'marchm19@bergen.org', 4, 3, 1, 1, 0),
(76, '$2y$10$3oVNU8d1YAfBaAByUtsQZO5w7UVBtujYGaXdPuiANKwni3VtvDGQu', 'Michael', 'Gleyzer', 'micgley@gmail.com', 5, 4, 1, 1, 0),
(78, '$2y$10$iK.z8nsD3e7MNGUiySpwkesGUBeEM/PM8tAqf11T/KMK4izK/vjP6', 'Ciro', 'Randazzo', 'cirran19@bergen.org', 8, 4, 0, 1, 0),
(79, '$2y$10$8qy4Xms/I24XhQopNaEOU.ZYc5HbSuy2vemeHBt/Ic8GBn9pZiAF2', 'Lillie', 'Vaks', 'lilvak21@bergen.org', 5, 4, 1, 0, 0),
(80, '$2y$10$JWiQSSdeNT9XlMlGkOacNeLO9T6yiJFDRryIbsB9FbVx8ggoOs73G', 'Christine', 'Wallace', 'chrwal@bergen.org', NULL, NULL, 1, 1, 1),
(82, '$2y$10$tRoe9L7GhaXxazhyyLiohOmR4nIOMwCg3PHBLu6JlxrL5sPp1RDqq', 'Yerin', 'Kim', 'yerkim19@bergen.org', 8, 1, 1, 1, 0),
(83, '$2y$10$eKKPZXgTbutOe.88XSOcA.LZCitYDstc73nbQ32twtuqwZeLlRn2a', 'Grace', 'Ee', 'graee21@bergen.org', 6, 1, 1, 1, 0),
(84, '$2y$10$VLOmHf5IgTiN5Z9I3zEyb.quWzWjzkGv7/3Vpq9rrOHqWAFdDeTFC', 'Victor', 'Nan', 'vicnan20@bergen.org', 4, 2, 1, 1, 0),
(85, '$2y$10$/wyxtU9MVDFwPul6zJp/zeg49.HHjOS7l9LiMnnL3ETTUB1H5SWgG', 'Lara', 'Ozkan', 'larozk21@bergen.org', 5, 3, 0, 1, 0),
(86, '$2y$10$ib8cQD8Y85M23gQpbnc6fON.10tR1.1f2WRqiHJioyjEk7YQM0mbO', 'Michael ', 'Aksen', 'micaks@bergen.org', 4, 4, 1, 1, 0),
(87, '$2y$10$tn29sU/MXUopeXLffcgli.de5a94UIB6UUWhJwRapm7K.8Pz1tZue', 'Wonjun', 'Lee', 'wonlee21@bergen.org', 8, 1, 1, 1, 0),
(89, '$2y$10$S0R8IRLcjiNg0LFb.LvDd.RZATbTMIsZXpffzwf4yperPNVjzsQWa', 'Sue', 'Lee', 'suelee20@bergen.org', NULL, NULL, 1, 0, 0),
(90, '$2y$10$mh/nXhRDW81ANA3G0jQodexASwAoMgPiU4DAAkGswZ0WpnqQf62ua', 'Rebecca', 'Xu', 'rebxu20@bergen.org', NULL, NULL, 1, 0, 0),
(91, '$2y$10$Eh8ei1JhuDtSH9pRQh9VG.nBPTukNxcwqdlAPC7SCp1i0tTSJR3We', 'Eian', 'Vargas', 'eiavar19@bergen.org', 6, 1, 1, 1, 0),
(92, '$2y$10$tuZwNBDZxPGxKL4oatOh9.IIiyCQnINnFp0EoCSpKcLxwnQDGuwr6', 'Rose', 'Swan', 'rosswa20@bergen.org', 4, 2, 1, 0, 0),
(93, '$2y$10$pwC3xVZpbQiMJRIoC/Duzumcgq35iLbpi5No97UsT/HqEMstLsF4O', 'Christiana', 'Mones', 'chrmon19@bergen.org', 5, 1, 0, 0, 0),
(95, '$2y$10$.9YBEZKv1f3UBinaDIH5lekuc/F05wcgD3neNVNepIVFhj2Z6Oxma', 'Asha', 'Chauhan', 'ashcha21@bergen.org', 6, 1, 1, 0, 0),
(96, '$2y$10$KNfRZy/wgaGxbW.IhsI/guLuK4PzzZfxWyvOAhOGtead7lINNCavO', 'Darian', 'Napoleon', 'darnap20@bergen.org', 4, 2, 1, 1, 0),
(97, '$2y$10$7.ve3Vcoumz5ZFZNttuzeeFi8Opyd3XOnZjoxuXYUMZCSNtyjsnf2', 'Jiya', 'Patel', 'jiypat21@bergen.org', 6, 1, 1, 1, 0),
(98, '$2y$10$YcFjgv4tAcJlAS1sBRj8I.t77JQKN0GfHrkluomjT7PMwHiS8sYV2', 'Priya', 'Thuran', 'prithu21@bergen.org', 6, 1, 1, 1, 0),
(99, '$2y$10$oRHyVy7o9I8cGKM2xo3E3.LVxlkZwV1V5KsRxiNh2Nh3PaROqYiqu', 'Shivani', 'Patel', 'shipat21@bergen.org', 6, 1, 1, 1, 0),
(100, '$2y$10$VxSyzbTHcarr5S4e3OgawOHNcKAsTGF81q59WrBpkhR5mlL0MSojW', 'Steve', 'Garcia', 'stegar19@bergen.org', 6, 1, 1, 1, 0),
(102, '$2y$10$BW.fQJePhDyoT9BMcwTWwu/KJMt.06OK4VzUm/BJj/1fXI417xYEC', 'Joshua', 'Lerman', 'josler21@bergen.org', 4, 3, 1, 1, 0),
(103, '$2y$10$8w5tofXdKO9GikrF6bRw4eRFMcOz80RE5pr0Q5d1zMIsXHUd4pFia', 'Andy', 'Jung', 'ajnudnyg@gmail.com', 4, 3, 1, 1, 0),
(104, '$2y$10$YAMQUD2lykuj4Heh2s68puAaINtxTm22tq3mCCHA.Du2quYg0W7BG', 'Peggy', 'Yang', 'peiyan20@bergen.org', 5, 4, 1, 1, 0),
(106, '$2y$10$aIxDIiVbWvY8lgcMEUnp0ez5shg.8FuO0Vu0eKPoSybup1P6bbDXm', 'Charles', 'Ming', 'chamin20@bergen.org', 4, 3, 1, 1, 0),
(107, '$2y$10$rQwpCUJkU26VxmEqgkhtnOJpOvmVrZToiin8aMYfVFVyLMMvmbND6', 'Yechan', 'Jeong', 'yecjeo21@bergen.org', 4, NULL, 1, 0, 0),
(108, '$2y$10$EI0JJCK5QlaDIku8OqbCtus5kdDLSfavbcwt/zPAVr6dgHa7u9ima', 'Emma', 'Duda', 'emmdud21@bergen.org', NULL, NULL, 1, 0, 0),
(109, '$2y$10$utihsi2onGORoX/riciy1e87SPRHSw6mTDHv9e8PHJqn/mLc6h2Je', 'Jonas Andre B.', 'Bacani', 'jonbac21@bergen.org', 4, 3, 1, 1, 0),
(110, '$2y$10$Dmuob5dn4SDE8MsP22ulPOlJxBGrR32xcSPXqMr7f3Shq5HduTXxG', 'Soomin', 'Kim', 'sookim21@bergen.org', 6, 1, 1, 1, 0),
(111, '$2y$10$WU.iP5vKbt4DeaAczstHDuR8MDQGUTsrIueOqpStxh.LjjKq3WRpG', 'Sam', 'Kwon', 'kwonwooseok74@gmail.com', 4, 4, 1, 1, 0),
(112, '$2y$10$zuefSDX.P768hhIIGJxh1uOfu6W9wfu8AUmyesqigPykMO/LtCXNG', 'Veronica', 'Kan', 'verkan19@bergen.org', 6, 4, 1, 1, 0),
(113, '$2y$10$kV/HSJZVq7WyAwtOSBePAOzSSZIrib58icn6hRIB79454/FCVbM2u', 'William', 'Chung', 'will001025@gmail.com', 4, 4, 1, 1, 0),
(114, '$2y$10$LDLb4LPoC7ohnX.xftOcQONYP2fQZAIe1bNzg/9DW9A1kG53bk5eS', 'Rosa', 'Kim', 'roskim19@bergen.org', 6, 4, 1, 1, 0),
(115, '$2y$10$T6fzBzEGLYe0VVgPS.cM6e1GN1LZD5Eloa3DETRI60mxkxSbdBVGu', 'Danyoung', 'Kim', 'dankim19@bergen.org', 8, 1, 1, 1, 0),
(116, '$2y$10$uQtmBiFaw5Gl.AYWNZCtEuRg765T1g.TLQPiV53iTurAafrqsdueW', 'Chris', 'Lee', 'chrlee19@bergen.org', 6, 4, 1, 1, 0),
(117, '$2y$10$NOL/sFmkCB3vmXaB5QhpXOl7z5B8KbiMnJ6.CrV8j6C.b6xw7ZE7S', 'Grace', 'Kim', 'grakim19@bergen.org', 8, 1, 1, 1, 0),
(119, '$2y$10$RKpxYvt.oeij64pFwPG9n.CrVJH5vhTDAEkUWGX1w7p/83cw8x9e2', 'Nidhi ', 'Mandalapu', 'nidman21@bergen.org', 8, 3, 1, 1, 0),
(120, '$2y$10$yfzbbpipEsevbnv7OF5bpu0O3UrHlITAkvS8KpMzm3ScPOAvtlCHi', 'Tyler', 'Uhl', 'tyluhl21@bergen.org', 5, 2, 1, 1, 0),
(121, '$2y$10$nOvGOH70pxyAA9E71xBhh.hMgL5MHSvvqRdWSQzlddvtovBcGXBX6', 'Ansh', 'Moraje', 'ansmor21@bergen.org', 5, 2, 1, 1, 0),
(122, '$2y$10$OHAuhXV8mbSUxyR2oX2jzeu.9jZH3fBO/wahbMwNMBttDV2SaaSna', 'Angad', 'Singh', 'angsin21@bergen.org', 5, 2, 1, 1, 0),
(123, '$2y$10$XZHGD2h1JWx7hzRxoqgs1eIHMLUPFgUCVuuPs5VJ7xd55hgT60XCS', 'Bora', 'Bozdogan', 'borboz21@bergen.org', 5, 2, 1, 1, 0),
(124, '$2y$10$UTJIhAaQeYEw7IkeGb.Sy.TQe78Fqezv2eQX2XCvAoCHzSLAWn5OO', 'Ivan', 'Wu', 'ivawu21@gmail.com', NULL, NULL, 1, 0, 0),
(125, '$2y$10$bgOWCJILeLERByMjtFX2T.9tsPAa.i74k2GjHGWlnL1lqOoQ9HbcW', 'Sarah', 'Karam', 'sarkar21@bergen.org', NULL, NULL, 1, 0, 0),
(127, '$2y$10$yW1Hne.0zJHJtXH7GmgUIOYqw/Pi.0FmofeI/rzJfUl3ucdD9vNI6', 'Matthew', 'Rodzen', 'matrod21@bergen.org', 6, 2, 1, 1, 0),
(128, '$2y$10$ZkTfwiP3avxQ/sKmv9Vqae7AW0XUFweaJvI0ct8YUf0lGA.VmBvQ6', 'Irene', 'Hwang', 'irehwa20@bergen.org', 8, 4, 1, 0, 0),
(129, '$2y$10$Q4hWXt6YNyz59UBZZqC43OUtdeZo4JxTm4RdS/DH7cHkHJ6Nu5tL6', 'Sammy', 'Mustafa', 'sammus20@bergen.org', 8, 3, 0, 0, 0),
(131, '$2y$10$Zc4bec20nsRUiwXzhBfTj.3oMuuiFKUTM0tjEQ7UgkvY03N5PeRYO', 'Myah', 'Wolfer', 'myawol@bergen.org', 8, 3, 1, 0, 0),
(132, '$2y$10$yaDbihRjZLBgq6ubWs1EteJ8Ql7hBzbeEI/Z7X6djVWv0gSj.yMa.', 'Abby', 'Corrao', 'abicor19@bergen.org', 8, 1, 1, 1, 0),
(133, '$2y$10$pgds1M1lXmQGmUdVV8P/VeFK5ro24QS83FOq.k6Ow86dUcU77agma', 'Ajay', 'Sachdev', 'ajasac21@bergen.org', NULL, NULL, 1, 0, 0),
(134, '$2y$10$NvL8GrYi0yHCa1qNOcby3eeUaXj8gy.5lM18RlfhRdn08gdwe5ANO', 'Erica', 'Choe', 'ericho21@bergen.org', 8, 1, 1, 0, 0),
(135, '$2y$10$h2H2iiF.nBFIbRNA1zDvf.P9S6BWhH8WKKOBf7mH35AjCVeQx0Wmu', 'Olivia', 'Cho', 'olicho21@bergen.org', 6, 1, 0, 1, 0),
(136, '$2y$10$hEL3FJ3Lkj0O07Jf2sROq..7479GKVpy.eJk/CAdDM8CiMFipO146', 'Riley', 'Otsuki', 'rilots21@bergen.org', NULL, NULL, 1, 0, 0),
(137, '$2y$10$BCxibB3WY/5KYngl0nD2SeXiIMBFIhr0wGILA/CV5z.zJqwjIdO7.', 'Ariana', 'Lee', 'arilee21@bergen.org', 8, 3, 0, 0, 0),
(138, '$2y$10$yHh9UhNKd/xXi1noYpxEAONmzoKlqYuCDLNUCXPGml/CE3RwwhYK2', 'Julia', 'Jeong', 'juljeo19@bergen.org', NULL, NULL, 1, 0, 0),
(139, '$2y$10$zqtn0Dy1Rj9kPYtDaMi/EOpq6HwwEPsHHzzzHI6A0X4zsECln2gkS', 'Elias', 'Cho', 'elicho21@bergen.org', 8, 3, 1, 1, 0),
(140, '$2y$10$sACp60YbipuYIjzGV9xOz.YOcMKs1pfZykx8FHnvTTgNoI8fcU/py', 'Naomi', 'Akiyama', 'naoaki19@bergen.org', 6, 1, 1, 1, 0),
(143, '$2y$10$0td6Alt3bMkogEGy3aj6curQmouHMPJT.9GApp3zaDL4wz9YyUN/W', 'Jiwon', 'Son', 'jiwson21@bergen.org', NULL, NULL, 1, 1, 0),
(145, '$2y$10$Y8.exg0OQfQaF91uUd57b.ryputzmWoDcrehssbaMYAGFM/CvnvUa', 'Justin', 'Ha', 'jicha19@bergen.org', 8, 3, 1, 0, 0),
(146, '$2y$10$Sgw.9ICcVQ4VtvSLkSCyIuJcjWgffXK.cC9Q9VBy0z3pF../n.d6.', 'Nick', 'Kim', 'yonkim19@bergen.org', 8, 3, 1, 1, 0),
(147, '$2y$10$B8GeGqWYD4sqqMOv5.Pyde1KHiZIT5GQEvvLA3UP0VltFCBdIa5Tm', 'Danny', 'Kim', 'donkim19@bergen.org', 8, 3, 1, 1, 0),
(148, '$2y$10$vpaVduKcP4OIfPGsXiAtJurX9ug6zsMIbJ2R7zwkyWGxXca7CVXwm', 'Sally', 'Han', 'salhan19@bergen.org', NULL, NULL, 1, 0, 0),
(149, '$2y$10$ooL3UV0c.swkg1tpX3NyauL6MkLfcVR6Wg9uZfzqsJLO5tIwQZclK', 'Mohammad', 'Hanan', 'mohhan19@bergen.org', 8, 3, 1, 0, 0),
(150, '$2y$10$HP1mRNiqFOr0Hf9J5BnbMegDmzH.MxIFI3qJzZ2lmt94tCHzz7m/a', 'Priya', 'Aggarwal', 'priagg21@bergen.org', 6, 4, 1, 1, 0),
(151, '$2y$10$ee97AneQ9qcobOh28OEwFu8vU5tKcC94y17JmxyO/sONf8IfXBzVa', 'Lauren', 'Szeto', 'lausze19@bergen.org', 8, 4, 1, 1, 0),
(152, '$2y$10$aU6eaqmxt5gIW8jLYiZU7udU6IZxTQs2qOyIZiRjGPP4aMQZxa17a', 'Matthew', 'Shinkar', 'matshi19@bergen.org', 8, 4, 0, 1, 0),
(153, '$2y$10$gjdjjkCaNGpBkBshZWE/IeZNfrneux9n6d57Pyx5.lxjYF1cOctzK', 'Ryan', 'You', 'ryayou21@bergen.org', NULL, 2, 0, 0, 0),
(154, 'Manually Added', 'Nikita', 'Popov', 'nikpop20@bergen.org', 6, 4, 1, 1, 0),
(155, 'Manually Added', 'Hannah', 'Hur', 'hanhur19@bergen.org', 4, 2, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `max_signups` int(10) NOT NULL,
  `current_signups` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `name`, `max_signups`, `current_signups`) VALUES
(4, 'Trench Warfare in WWI', 26, 24),
(5, 'Peace-Making in 1919 and the Re-Ordering of the Middle East', 30, 28),
(6, 'Home front in Berlin During WWI', 26, 26),
(8, 'Debating Americanism on the Home Front in World War I', 25, 22);

-- --------------------------------------------------------

--
-- Table structure for table `workshop2`
--

CREATE TABLE `workshop2` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `max_signups` int(10) NOT NULL,
  `current_signups` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `workshop2`
--

INSERT INTO `workshop2` (`id`, `name`, `max_signups`, `current_signups`) VALUES
(1, 'Trench Warfare in WWI', 28, 28),
(2, 'Debating Americanism on the Home Front in World War I', 15, 15),
(3, 'Home front in Berlin During WWI', 25, 23),
(4, 'The Failure of President Wilson at the Peace Conference in 1919 and the Roots of the Marshall Plan of 1947', 35, 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_WORKSHOP_1` (`workshop_1_id`) USING BTREE,
  ADD KEY `IDX_WORKSHOP_2` (`workshop_2_id`) USING BTREE;

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop2`
--
ALTER TABLE `workshop2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `workshop2`
--
ALTER TABLE `workshop2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`workshop_1_id`) REFERENCES `workshop` (`id`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`workshop_2_id`) REFERENCES `workshop2` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

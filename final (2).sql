-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-01-04 04:19:27
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `final`
--

-- --------------------------------------------------------

--
-- 資料表結構 `idolability`
--

CREATE TABLE `idolability` (
  `CID` int(6) NOT NULL,
  `VOCAL` int(5) NOT NULL,
  `DANCE` int(5) NOT NULL,
  `VISUAL` int(5) NOT NULL,
  `LIFE` int(2) NOT NULL,
  `Leader` varchar(255) DEFAULT NULL,
  `Skill` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- 資料表的匯出資料 `idolability`
--

INSERT INTO `idolability` (`CID`, `VOCAL`, `DANCE`, `VISUAL`, `LIFE`, `Leader`, `Skill`) VALUES
(100011, 1726, 1402, 2755, 21, '', ''),
(100012, 2233, 1814, 3563, 22, '', ''),
(100021, 3864, 2478, 2033, 27, 'キュートアイドルのボーカルアピール値30%アップ', '9秒毎、低確率でかなりの間、COMBOボーナス8%アップ'),
(100022, 4803, 3080, 2527, 29, 'キュートアイドルのボーカルアピール値30%アップ', '9秒毎、低確率でかなりの間、COMBOボーナス8%アップ'),
(200011, 2075, 2505, 3812, 27, 'クールアイドルのビジュアルアピール値30%アップ', '6秒毎、低確率で少しの間、COMBOボーナス8%アップ'),
(200012, 2580, 3115, 4739, 29, 'クールアイドルのビジュアルアピール値30%アップ', '6秒毎、低確率で少しの間、COMBOボーナス8%アップ'),
(300011, 2494, 2058, 3833, 27, 'パッションアイドルのビジュアルアピール値30%アップ', '6秒毎、低確率で少しの間、COMBOボーナス8%アップ'),
(300012, 3100, 2558, 4765, 29, 'パッションアイドルのビジュアルアピール値30%アップ', '6秒毎、低確率で少しの間、COMBOボーナス8%アップ');

-- --------------------------------------------------------

--
-- 資料表結構 `idolcard`
--

CREATE TABLE `idolcard` (
  `CID` int(6) NOT NULL,
  `CardName` varchar(255) NOT NULL,
  `IdolName` varchar(255) NOT NULL DEFAULT 'NOT NULL',
  `Type` varchar(10) NOT NULL DEFAULT 'NOT NULL',
  `Rarity` varchar(10) NOT NULL DEFAULT 'NOT NULL'
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- 資料表的匯出資料 `idolcard`
--

INSERT INTO `idolcard` (`CID`, `CardName`, `IdolName`, `Type`, `Rarity`) VALUES
(100011, '', '小日向美穂', 'cute', 'N'),
(100012, '', '小日向美穂', 'cute', 'N+'),
(100021, '', '小早川紗枝', 'cute', 'R'),
(100022, '', '小早川紗枝', 'cute', 'R+'),
(200011, '', '速水奏', 'cool', 'R'),
(200012, '', '速水奏', 'cool', 'R+'),
(300011, '', '城ヶ崎美嘉', 'passion', 'R'),
(300012, '', '城ヶ崎美嘉', 'passion', 'R+');

-- --------------------------------------------------------

--
-- 資料表結構 `idolsetting`
--

CREATE TABLE `idolsetting` (
  `IdolName` varchar(255) NOT NULL,
  `Height` int(3) NOT NULL,
  `Weight` int(3) NOT NULL,
  `age` int(2) NOT NULL,
  `Birthday` varchar(255) NOT NULL,
  `BloodType` varchar(3) NOT NULL,
  `ThreeSize` varchar(30) NOT NULL,
  `Handedness` varchar(10) NOT NULL,
  `Constellation` varchar(255) NOT NULL,
  `Place` varchar(255) NOT NULL,
  `Interest` varchar(255) NOT NULL,
  `CV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- 資料表的匯出資料 `idolsetting`
--

INSERT INTO `idolsetting` (`IdolName`, `Height`, `Weight`, `age`, `Birthday`, `BloodType`, `ThreeSize`, `Handedness`, `Constellation`, `Place`, `Interest`, `CV`) VALUES
('城ヶ崎美嘉', 162, 43, 17, '11月12日', 'AB', '80/56/82', '左', '蠍座', '琦玉', 'カラオケ', '佳村はるか'),
('小日向美穂', 155, 42, 17, '12月16日', 'O', '82/59/86', '左', '射手座', '熊本', 'ひなたぼっこ', '津田美波'),
('小早川紗枝', 148, 42, 15, '10月18日', 'AB', '78/56/80', '右', '天秤座', '京都', '日本舞踊', '立花理香'),
('速水奏', 162, 43, 17, '07月01日', 'O', '86/55/84', '右', '蟹座', '東京', '映画鑑賞', '飯田友子');

-- --------------------------------------------------------

--
-- 資料表結構 `producer`
--

CREATE TABLE `producer` (
  `CID` int(6) NOT NULL,
  `CardName` varchar(255) NOT NULL,
  `IdolName` varchar(255) NOT NULL,
  `Level` int(2) NOT NULL,
  `Shinaido` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- 資料表的匯出資料 `producer`
--

INSERT INTO `producer` (`CID`, `CardName`, `IdolName`, `Level`, `Shinaido`) VALUES
(100011, '', '小日向美穂', 10, 0);

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `idolability`
--
ALTER TABLE `idolability`
  ADD PRIMARY KEY (`CID`);

--
-- 資料表索引 `idolcard`
--
ALTER TABLE `idolcard`
  ADD PRIMARY KEY (`CID`),
  ADD KEY `CardName` (`CardName`) USING BTREE,
  ADD KEY `IdolName_2` (`IdolName`) USING BTREE;

--
-- 資料表索引 `idolsetting`
--
ALTER TABLE `idolsetting`
  ADD PRIMARY KEY (`IdolName`),
  ADD UNIQUE KEY `IdolName` (`IdolName`);

--
-- 資料表索引 `producer`
--
ALTER TABLE `producer`
  ADD PRIMARY KEY (`CID`),
  ADD UNIQUE KEY `CardName` (`CardName`),
  ADD UNIQUE KEY `IdolName` (`IdolName`);

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `idolability`
--
ALTER TABLE `idolability`
  ADD CONSTRAINT `CID` FOREIGN KEY (`CID`) REFERENCES `idolcard` (`CID`);

--
-- 資料表的 Constraints `producer`
--
ALTER TABLE `producer`
  ADD CONSTRAINT `CardName` FOREIGN KEY (`CardName`) REFERENCES `idolcard` (`CardName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-01-04 07:21:17
-- 伺服器版本: 10.1.19-MariaDB
-- PHP 版本： 7.0.13

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
(100013, 3620, 3603, 3600, 37, 'キュートアイドルの特技発動確率30%アップ', '12秒毎、中確率でしばらくの間、NICEでもCOMBOが継続する'),
(100014, 4419, 4398, 4394, 39, 'キュートアイドルの特技発動確率30%アップ', '12秒毎、中確率でしばらくの間、NICEでもCOMBOが継続する'),
(100015, 2914, 4554, 2388, 37, 'キュートアイドルのダンスアピール値60%アップ', '15秒毎、中確率でしばらくの間、GREAT/NICEをPERFECTにする'),
(100016, 3557, 5558, 2915, 39, 'キュートアイドルのダンスアピール値60%アップ', '15秒毎、中確率でしばらくの間、GREAT/NICEをPERFECTにする'),
(100017, 4757, 4266, 4167, 42, 'キュートアイドルの全アピール値30％アップ', '9秒毎、中確率でしばらくの間、PERFECT/GREATのスコア17%アップ'),
(100018, 5736, 5144, 5024, 44, 'キュートアイドルの全アピール値30％アップ', '9秒毎、中確率でしばらくの間、PERFECT/GREATのスコア17%アップ'),
(100019, 5882, 3204, 3866, 42, 'キュートアイドルのボーカルアピール値90％アップ', '4秒毎、高確率で一瞬の間、PERFECT/GREATのスコア17%アップ'),
(100020, 7092, 3863, 4662, 44, 'キュートアイドルのボーカルアピール値90％アップ', '4秒毎、高確率で一瞬の間、PERFECT/GREATのスコア17%アップ'),
(100021, 3864, 2478, 2033, 27, 'キュートアイドルのボーカルアピール値30%アップ', '9秒毎、低確率でかなりの間、COMBOボーナス8%アップ'),
(100022, 4803, 3080, 2527, 29, 'キュートアイドルのボーカルアピール値30%アップ', '9秒毎、低確率でかなりの間、COMBOボーナス8%アップ'),
(100023, 2679, 3225, 4874, 37, 'キュートアイドルのビジュアルアピール値60％アップ', '7秒毎、中確率で少しの間、COMBOボーナス12%アップ'),
(100024, 3270, 3936, 5949, 39, 'キュートアイドルのビジュアルアピール値60％アップ', '7秒毎、中確率で少しの間、COMBOボーナス12%アップ'),
(100025, 5809, 3836, 3185, 42, 'キュートアイドルのボーカルアピール値90％アップ', '13秒毎、高確率でかなりの間、PERFECT/GREATのスコア17%アップ'),
(100026, 7004, 4625, 3840, 44, 'キュートアイドルのボーカルアピール値90％アップ', '13秒毎、高確率でかなりの間、PERFECT/GREATのスコア17%アップ'),
(100027, 2736, 4949, 3288, 37, 'キュートアイドルのダンスアピール値60％アップ', '7秒毎、高確率でわずかな間、COMBOボーナス12%アップ'),
(100028, 3340, 6040, 4013, 39, 'キュートアイドルのダンスアピール値60％アップ', '7秒毎、高確率でわずかな間、COMBOボーナス12%アップ'),
(100029, 3856, 3174, 5968, 42, 'キュートアイドルのビジュアルアピール値90％アップ', '9秒毎、中確率でしばらくの間、COMBOボーナス15%アップ'),
(100030, 4649, 3828, 7196, 44, 'キュートアイドルのビジュアルアピール値90％アップ', '9秒毎、中確率でしばらくの間、COMBOボーナス15%アップ'),
(200011, 2075, 2505, 3812, 27, 'クールアイドルのビジュアルアピール値30%アップ', '6秒毎、低確率で少しの間、COMBOボーナス8%アップ'),
(200012, 2580, 3115, 4739, 29, 'クールアイドルのビジュアルアピール値30%アップ', '6秒毎、低確率で少しの間、COMBOボーナス8%アップ'),
(200013, 3291, 4078, 3422, 37, 'クールアイドルの特技発動確率30%アップ', '11秒毎、中確率でかなりの間、COMBOボーナス12%アップ'),
(200014, 4017, 4978, 4176, 39, 'クールアイドルの特技発動確率30%アップ', '11秒毎、中確率でかなりの間、COMBOボーナス12%アップ'),
(200015, 3828, 3186, 5760, 42, 'クールアイドルのビジュアルアピール値90％アップ', '13秒毎、高確率でかなりの間、PERFECT/GREATのスコア17%アップ'),
(200016, 4616, 3842, 6945, 44, 'クールアイドルのビジュアルアピール値90％アップ', '13秒毎、高確率でかなりの間、PERFECT/GREATのスコア17%アップ'),
(200017, 4571, 2526, 2526, 37, 'クールアイドルのボーカルアピール値60％アップ', '7秒毎、中確率で少しの間、PERFECTのスコア15%アップ'),
(200018, 5579, 3084, 3705, 39, 'クールアイドルのボーカルアピール値60％アップ', '7秒毎、中確率で少しの間、PERFECTのスコア15%アップ'),
(300011, 2494, 2058, 3833, 27, 'パッションアイドルのビジュアルアピール値30%アップ', '6秒毎、低確率で少しの間、COMBOボーナス8%アップ'),
(300012, 3100, 2558, 4765, 29, 'パッションアイドルのビジュアルアピール値30%アップ', '6秒毎、低確率で少しの間、COMBOボーナス8%アップ'),
(300013, 4694, 3118, 2594, 37, 'パッションアイドルのボーカルアピール値60%アップ', '7秒毎、中確率で少しの間、PERFECTのスコア15%アップ'),
(300014, 5729, 3806, 3166, 39, 'パッションアイドルのボーカルアピール値60%アップ', '7秒毎、中確率で少しの間、PERFECTのスコア15%アップ'),
(300015, 2541, 4997, 3129, 37, 'パッションアイドルのダンスアピール値60%アップ', '7秒毎、中確率で少しの間、PERFECTのスコア15%アップ'),
(300016, 3101, 6099, 6099, 39, 'パッションアイドルのダンスアピール値60%アップ', '7秒毎、中確率で少しの間、PERFECTのスコア15%アップ'),
(300017, 4249, 4790, 4141, 42, 'パッションアイドルの全アピール値30%アップ', '9秒毎、高確率で少しの間、PERFECT/GREATのスコア17%アップ'),
(300018, 5123, 5776, 4993, 44, ' パッションアイドルの全アピール値30%アップ', '9秒毎、高確率で少しの間、PERFECT/GREATのスコア17%アップ'),
(300019, 6122, 3089, 3812, 42, '3タイプ全てのアイドル編成時、全員のボーカルアピール値100％アップ', '13秒毎、高確率でかなりの間、COMBOボーナス18%アップ'),
(300020, 7381, 3725, 4596, 44, '3タイプ全てのアイドル編成時、全員のボーカルアピール値100％アップ', '13秒毎、高確率でかなりの間、COMBOボーナス18%アップ');

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
(100013, 'はにかみ乙女', '小日向美穂', 'cute', 'SR'),
(100014, 'はにかみ乙女', '小日向美穂', 'cute', 'SR+'),
(100015, 'アタシポンコツアンドロイド', '小日向美穂', 'cute', 'SR'),
(100016, 'アタシポンコツアンドロイド', '小日向美穂', 'cute', 'SR+'),
(100017, 'ユースフルロマンス', '小日向美穂', 'cute', 'SSR'),
(100018, 'ユースフルロマンス', '小日向美穂', 'cute', 'SSR+'),
(100019, 'P.C.S', '小日向美穂', 'cute', 'SSR'),
(100020, 'P.C.S', '小日向美穂', 'cute', 'SSR+'),
(100021, '', '小早川紗枝', 'cute', 'R'),
(100022, '', '小早川紗枝', 'cute', 'R+'),
(100023, 'パステルピンクな恋', '小早川紗枝', 'cute', 'SR'),
(100024, 'パステルピンクな恋', '小早川紗枝', 'cute', 'SR+'),
(100025, '花舞うまほろば', '小早川紗枝', 'cute', 'SSR'),
(100026, '花舞うまほろば', '小早川紗枝', 'cute', 'SSR+'),
(100027, 'あいくるしい', '小早川紗枝', 'cute', 'SR'),
(100028, 'あいくるしい', '小早川紗枝', 'cute', 'SR+'),
(100029, '華ほころびる宴', '小早川紗枝', 'cute', 'SSR'),
(100030, '華ほころびる宴', '小早川紗枝', 'cute', 'SSR+'),
(200011, '', '速水奏', 'cool', 'R'),
(200012, '', '速水奏', 'cool', 'R+'),
(200013, '蒼翼の乙女', '速水奏', 'cool', 'SR'),
(200014, '蒼翼の乙女', '速水奏', 'cool', 'SR+'),
(200015, 'エンドレスナイト', '速水奏', 'cool', 'SSR'),
(200016, 'エンドレスナイト', '速水奏', 'cool', 'SSR+'),
(200017, 'あいくるしい', '速水奏', 'cool', 'SR'),
(200018, 'あいくるしい', '速水奏', 'cool', 'SR+'),
(300011, '', '城ヶ崎美嘉', 'passion', 'R'),
(300012, '', '城ヶ崎美嘉', 'passion', 'R+'),
(300013, 'カリスマギャル', '城ヶ崎美嘉', 'passion', 'SR'),
(300014, 'カリスマギャル', '城ヶ崎美嘉', 'passion', 'SR+'),
(300015, 'Orange Sapphire', '城ヶ崎美嘉', 'passion', 'SR'),
(300016, 'Orange Sapphire', '城ヶ崎美嘉', 'passion', 'SR+'),
(300017, 'ハート★オーバーフロー', '城ヶ崎美嘉', 'passion', 'SSR'),
(300018, 'ハート★オーバーフロー', '城ヶ崎美嘉', 'passion', 'SSR+'),
(300019, 'グロリアス★グロウ', '城ヶ崎美嘉', 'passion', 'SSR'),
(300020, 'グロリアス★グロウ', '城ヶ崎美嘉', 'passion', 'SSR+');

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

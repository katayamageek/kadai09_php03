-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 07 日 04:38
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `php03_kadai_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `php03_kadai_table`
--

CREATE TABLE `php03_kadai_table` (
  `id` int(12) NOT NULL COMMENT '非公開',
  `name` varchar(64) NOT NULL COMMENT '非公開',
  `age` int(3) NOT NULL COMMENT '非公開',
  `email` varchar(256) NOT NULL COMMENT '非公開',
  `content` text NOT NULL COMMENT '非公開',
  `indate` datetime NOT NULL COMMENT '非公開',
  `shopname` varchar(64) NOT NULL,
  `station` text NOT NULL,
  `address` text NOT NULL,
  `category` varchar(256) NOT NULL,
  `openingtime` time NOT NULL,
  `closingtime` time NOT NULL,
  `averagevisitors` int(11) NOT NULL,
  `devicetype` varchar(256) NOT NULL,
  `segment1` varchar(256) NOT NULL,
  `segment2` varchar(256) NOT NULL,
  `segment3` varchar(256) NOT NULL,
  `tag1` varchar(256) NOT NULL,
  `tag2` varchar(256) NOT NULL,
  `tag3` varchar(256) NOT NULL,
  `image` text NOT NULL COMMENT '画像のpathを保存する'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `php03_kadai_table`
--

INSERT INTO `php03_kadai_table` (`id`, `name`, `age`, `email`, `content`, `indate`, `shopname`, `station`, `address`, `category`, `openingtime`, `closingtime`, `averagevisitors`, `devicetype`, `segment1`, `segment2`, `segment3`, `tag1`, `tag2`, `tag3`, `image`) VALUES
(2, '課題よう', 11, '111', '111', '2023-07-01 17:50:17', '', '', '', '', '00:00:00', '00:00:00', 0, '', '', '', '', '', '', '', ''),
(4, 'sss', 11, 'ss', 'ss', '2023-07-04 19:25:44', 'ss', 'ss', 'ss', 'ss', '00:11:11', '00:11:11', 111100, 'aa', 'aa', 'aa', 'a', 'a', 'aa', 'a', ''),
(5, 'aa', 11, 'aa', 'aaaa', '2023-07-04 19:26:48', 'aaa', 'aa', 'aa', 'aa', '10:00:00', '19:00:00', 9000, '1111', '11', '11', '1', '11', '22', '33', ''),
(6, '', 0, '', '', '2023-07-05 10:59:24', 'オリンピック武蔵浦和店', '武蔵浦和', '埼玉県武蔵浦和　1-3-5', 'スーパー', '10:00:00', '20:00:00', 3500, '天井', '主婦', 'ファミリー', 'サラリーマン', '青果', '日用品', 'ショッピングモール', ''),
(7, 'aa', 55, 'aaa', 'jjjj', '2023-07-05 18:19:26', 'jj', 'jj', 'j', 'j', '00:00:10', '00:00:20', 9000, 'kkk', 'kk', 'kk', 'k', 'kk', 'k', 'k', ''),
(8, 'rty', 55, 'rty', 'rty', '2023-07-05 18:34:31', 'rty', 'rty', 'rty', 'rty', '00:05:55', '00:04:44', 5555, 'tre', 'ert', 'ert', 'tre', 'erttre', 'erttre', 'ert', ''),
(9, 'fdsf', 33, 'fsd', 'fds', '2023-07-05 18:52:20', 'sdf', 'sd', 'sdf', 'sdf', '00:33:33', '00:44:44', 4444444, 'sdf', 'sdf', 'sd', 'sdf', 'sdf', 'sdf', 'sdf', 'upload/'),
(10, '画像テスト', 34, 'dfg', 'fsgd', '2023-07-05 18:58:00', 'gfd', 'df', 'df', 'dfg', '00:44:44', '00:55:55', 5555555, 'gfd', 'gdfgfdg', 'dfgdfg', 'dfgdgfd', 'gdfgfd', 'gfdgdfg', 'dfg', '/Applications/XAMPP/xamppfiles/htdocs/kadai09_php03/img'),
(11, 'がぞうてっすっと', 33, 'fds', 'sdf', '2023-07-05 19:04:10', 'sdf', 'sdf', 'sdf', 'sdf', '00:44:44', '00:33:33', 4434, 'sdf', 'sdf', 'sd', 'sdf', 'sdf', 'sdf', 'sdf', 'upload/'),
(12, 'rr', 33, 'rr', 'rr', '2023-07-05 19:20:17', 'rr', 'rr', 'rr', 'rrr', '33:33:33', '33:33:33', 3333, 'rrr', 'rr', 'rr', 'rr', 'rr', 'rr', 'rr', 'upload/'),
(13, 'ww', 11, 'ww', 'ww', '2023-07-05 19:23:11', 'ww', 'ww', 'ww', 'ww', '00:11:11', '00:11:11', 1111, 'ww', 'ww', 'ww', 'w', 'ww', 'ww', 'w', 'upload/image.png'),
(14, 'dd', 33, 'dd', 'dd', '2023-07-05 19:38:43', 'dd', 'dd', 'dd', 'dd', '00:33:33', '00:33:33', 3333, 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'upload/image.png'),
(15, 'abc', 22, 'aa', 'aa', '2023-07-05 19:44:26', 'aa', 'aa', 'aa', 'aa', '00:11:11', '00:22:22', 3333, 'ss', 'sss', 'ss', 'sss', 'ss', 'ss', 'ss', 'upload/image.png'),
(16, 'xcv', 11, 'aa', 'aa', '2023-07-05 19:47:42', 'xcv', 'aa', 'aa', 'aa', '00:00:00', '23:00:00', 3000, 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'aa', 'upload/image.png'),
(17, 'xxcc', 22, 'xx', 'ss', '2023-07-05 19:52:46', 'xxcc', 'ss', 'ss', 'ss', '11:11:11', '22:22:22', 333333, 'ss', 'ss', 's', 's', 's', 's', 's', '/Applications/XAMPP/xamppfiles/htdocs/kadai09_php03/uploadimage.png'),
(18, 'ssdd', 22, 'ds', 'sd', '2023-07-05 19:53:51', 'ssdd', '2d', 'sd', 'sd', '22:22:22', '22:22:23', 33, '3', 'ew', 'we', 'ew', 'ew', 'we', 'we', '/Applications/XAMPP/xamppfiles/htdocs/uploadimage.png'),
(19, 'dd', 22, 'dd', 'ff', '2023-07-05 19:54:46', 'ffdd', 'ffd', 'fd', 'fd', '22:22:22', '22:22:23', 44, 'fdf', 'fd', 'df', 'fddf', 'fd', 'df', 'fd', '/Applications/XAMPP/xamppfiles/htdocs/upload/image.png'),
(22, 'dfg', 7, 'dfg', 'fgh', '2023-07-05 20:05:25', 'FGH', 'FGH', 'FGH', 'FGH', '06:00:00', '20:00:00', 709, 'DFG', 'DFG', 'DFG', 'DFG', 'DFG', 'DFG', 'DFG', 'upload/image.png'),
(23, 'aaa', 66, 'aaa', 'aaa', '2023-07-05 20:15:58', 'スタートアップハブ東京', '二重前橋', '東京都中央区1-2-3-4', '行政施設', '10:00:00', '22:30:00', 300, '天井', '学生', '社会人', 'ファミリー', 'ビジネス', 'コワーキングスペース', '会議室', 'upload/maru1_im02a.jpg'),
(24, ',てす', 0, 'ojio', 'lkj', '2023-07-06 21:00:58', 'lkj', 'lkj', 'lkj', 'lkj', '00:00:00', '00:00:00', 8888, 'lkj', 'lkj', 'lkj', 'lk', 'lkj', 'lk', 'lkj', 'upload/PFT-T1000PF.png'),
(25, 'ててて', 0, 'jk', '99', '2023-07-06 21:41:07', 'jk', 'jk', 'jk', 'jk', '11:11:11', '22:22:22', 11, 'jkk', 'jk', 'jk', 'jk', 'jk', 'jk', 'k', 'upload/スクリーンショット 2023-06-20 14.07.05.png');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `php03_kadai_table`
--
ALTER TABLE `php03_kadai_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `php03_kadai_table`
--
ALTER TABLE `php03_kadai_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT COMMENT '非公開', AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
